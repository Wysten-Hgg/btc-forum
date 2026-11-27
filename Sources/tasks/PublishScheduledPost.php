<?php

/**
 * Publishes a scheduled post through the same creation path as an immediate post.
 */
class PublishScheduledPost_Background extends SMF_BackgroundTask
{
	public function execute()
	{
		global $smcFunc, $sourcedir;

		if (empty($this->_details['queue_id']) || $this->_details['publish_at'] > time())
			return false;

		require_once($sourcedir . '/Subs-Post.php');
		require_once($sourcedir . '/Subs-Members.php');
		require_once($sourcedir . '/Logging.php');

		if (!$smcFunc['db_transaction']('begin'))
			return false;

		$committed = false;
		$params = array('task' => $this->_details['queue_id'], 'claimed' => $this->_details['claimed_time']);
		try
		{
			// Keep a retrying worker from publishing the same queue item twice.
			$request = $smcFunc['db_query']('', '
				SELECT id_task
				FROM {db_prefix}background_tasks
				WHERE id_task = {int:task} AND claimed_time = {int:claimed}
				FOR UPDATE', $params);
			$claimed = $smcFunc['db_fetch_row']($request);
			$smcFunc['db_free_result']($request);
			if (!$claimed)
				return false;

			$can_publish = $this->publish();
			if ($can_publish === false)
				return false;

			$smcFunc['db_query']('', '
				DELETE FROM {db_prefix}background_tasks
				WHERE id_task = {int:task} AND claimed_time = {int:claimed}', $params);
			$committed = $smcFunc['db_transaction']('commit');
		}
		finally
		{
			if (!$committed)
				$smcFunc['db_transaction']('rollback');
		}

		if ($committed && $can_publish === null)
			log_error(sprintf('Scheduled post task %d could not be published because its author or destination no longer allows posting.', $params['task']), 'general');
		elseif ($committed)
			cache_put_data('board-' . $this->_details['board_id'], null, 120);

		return $committed;
	}

	/**
	 * Returns true on publication, false on a retryable failure, or null if posting is no longer allowed.
	 */
	private function publish()
	{
		global $modSettings, $smcFunc, $user_info;

		$post = $this->_details;
		$board_id = (int) $post['board_id'];
		$topic_id = (int) $post['topic_id'];
		$author_id = (int) $post['author_id'];

		$request = $smcFunc['db_query']('', '
			SELECT id_group, id_post_group, additional_groups, member_name, real_name, email_address, warning, posts, is_activated
			FROM {db_prefix}members
			WHERE id_member = {int:author}',
			array('author' => $author_id));
		$author = $smcFunc['db_fetch_assoc']($request);
		$smcFunc['db_free_result']($request);
		if (!$author || (int) $author['is_activated'] !== 1)
			return null;

		$groups = array($author['id_group'], $author['id_post_group']);
		if ($author['additional_groups'] !== '')
			$groups = array_merge($groups, explode(',', $author['additional_groups']));
		$groups = array_values(array_unique(array_map('intval', $groups)));
		$is_admin = in_array(1, $groups, true);
		if (!$is_admin && $this->authorCannotPost($author))
			return null;

		$request = $smcFunc['db_query']('', '
			SELECT b.member_groups, b.deny_member_groups, b.count_posts, b.redirect,
				m.id_member AS moderator, mg.id_group AS moderator_group
			FROM {db_prefix}boards AS b
				LEFT JOIN {db_prefix}moderators AS m ON (m.id_board = b.id_board AND m.id_member = {int:author})
				LEFT JOIN {db_prefix}moderator_groups AS mg ON (mg.id_board = b.id_board AND mg.id_group IN ({array_int:groups}))
			WHERE b.id_board = {int:board}
			LIMIT 1',
			array('author' => $author_id, 'board' => $board_id, 'groups' => $groups));
		$board = $smcFunc['db_fetch_assoc']($request);
		$smcFunc['db_free_result']($request);
		if (!$board || !empty($board['redirect']))
			return null;

		$is_moderator = isset($board['moderator']) || isset($board['moderator_group']);
		if (!$is_admin)
		{
			$managers = empty($modSettings['board_manager_groups']) ? array() : explode(',', $modSettings['board_manager_groups']);
			$allowed_groups = array_merge(explode(',', $board['member_groups']), $managers);
			$denied_groups = array_diff(explode(',', $board['deny_member_groups']), $managers);
			if (!empty($modSettings['deny_boards_access']) && array_intersect($groups, $denied_groups))
				return null;

			if ((!empty($modSettings['deny_boards_access']) || !$is_moderator) && !array_intersect($groups, $allowed_groups))
				return null;
		}

		if (!$is_admin && stripos($post['body'], '[html]') !== false)
		{
			$html_groups = groupsAllowedTo('bbc_html');
			if (!array_intersect($groups, $html_groups['allowed']))
				return null;
		}

		$user_info = array(
			'id' => $author_id,
			'username' => $author['member_name'],
			'name' => $author['real_name'],
			'email' => $author['email_address'],
			'ip' => $post['ip'],
			'groups' => $groups,
			'posts' => (int) $author['posts'],
			'permissions' => array(),
			'is_guest' => false,
			'is_admin' => $is_admin,
			'is_mod' => $is_moderator,
		);

		$topic = null;
		$approved_permission = 'post_new';
		$moderated_permission = 'post_unapproved_topics';
		if ($topic_id)
		{
			$request = $smcFunc['db_query']('', '
				SELECT id_first_msg, id_last_msg, id_member_started, locked, approved, id_redirect_topic
				FROM {db_prefix}topics
				WHERE id_topic = {int:topic} AND id_board = {int:board}
				FOR UPDATE',
				array('topic' => $topic_id, 'board' => $board_id));
			$topic = $smcFunc['db_fetch_assoc']($request);
			$smcFunc['db_free_result']($request);
			if (!$topic || !empty($topic['id_redirect_topic']) || (!empty($topic['locked']) && !allowedTo('moderate_board', $board_id)))
				return null;

			$own = (int) $topic['id_member_started'] === $author_id;
			$approved_permission = $own && !allowedTo('post_reply_any', $board_id) ? 'post_reply_own' : 'post_reply_any';
			$moderated_permission = $own ? 'post_unapproved_replies_own' : 'post_unapproved_replies_any';

			if (empty($topic['approved']) && !$own && !allowedTo('approve_posts', $board_id))
				return null;
		}

		$can_post = allowedTo($approved_permission, $board_id);
		$can_post_unapproved = !empty($modSettings['postmod_active']) && allowedTo($moderated_permission, $board_id);
		$has_moderation_warning = !$is_admin && !empty($modSettings['warning_moderate']) && $author['warning'] >= $modSettings['warning_moderate'];
		if ((!$can_post && !$can_post_unapproved) || ($has_moderation_warning && empty($modSettings['postmod_active'])))
			return null;

		$approved = empty($modSettings['postmod_active']) || (!empty($post['approved']) && $can_post && !$has_moderation_warning &&
			(!$topic || !empty($topic['approved']) || allowedTo('approve_posts', $board_id)));
		$msgOptions = array(
			'subject' => $post['subject'],
			'body' => $post['body'],
			'icon' => $post['icon'],
			'smileys_enabled' => $post['smileys_enabled'],
			'approved' => $approved,
		);
		$topicOptions = array(
			'id' => $topic_id,
			'board' => $board_id,
			'mark_as_read' => true,
			'is_approved' => !$topic || !empty($topic['approved']),
			'first_msg' => $topic['id_first_msg'] ?? null,
			'last_msg' => $topic['id_last_msg'] ?? null,
		);
		$posterOptions = array(
			'id' => $author_id,
			'name' => $smcFunc['htmlspecialchars']($author['member_name']),
			'email' => $smcFunc['htmlspecialchars']($author['email_address']),
			'ip' => $post['ip'],
			'update_post_count' => empty($board['count_posts']),
		);
		if (!createPost($msgOptions, $topicOptions, $posterOptions))
			return false;

		trackStats();

		if (!empty($post['notify']))
			$smcFunc['db_insert']('ignore', '{db_prefix}log_notify',
				array('id_member' => 'int', 'id_topic' => 'int', 'id_board' => 'int'),
				array($author_id, $topicOptions['id'], 0),
				array('id_member', 'id_topic', 'id_board'));
		elseif ($topic_id && isset($post['notify']))
			$smcFunc['db_query']('', '
				DELETE FROM {db_prefix}log_notify
				WHERE id_member = {int:author} AND id_topic = {int:topic}',
				array('author' => $author_id, 'topic' => $topic_id));

		return true;
	}

	private function authorCannotPost(array $author)
	{
		global $modSettings, $smcFunc;

		if (!empty($modSettings['warning_mute']) && $author['warning'] >= $modSettings['warning_mute'])
			return true;

		$post = $this->_details;
		$matches = array('bi.id_member = {int:author}', '{string:email} LIKE bi.email_address');
		$params = array('author' => $post['author_id'], 'email' => $author['email_address'], 'now' => time());
		foreach (array_unique(array($post['ip'], $post['ip2'])) as $i => $ip)
		{
			if (!isValidIP($ip))
				continue;

			$matches[] = '{inet:ip' . $i . '} BETWEEN bi.ip_low AND bi.ip_high';
			$params['ip' . $i] = $ip;
			if (empty($modSettings['disableHostnameLookup']) && ($host = host_from_ip($ip)) !== '')
			{
				$matches[] = '{string:host' . $i . '} LIKE bi.hostname';
				$params['host' . $i] = $host;
			}
		}

		$request = $smcFunc['db_query']('', '
			SELECT bi.id_ban
			FROM {db_prefix}ban_items AS bi
				INNER JOIN {db_prefix}ban_groups AS bg ON (bg.id_ban_group = bi.id_ban_group)
			WHERE (bg.expire_time IS NULL OR bg.expire_time > {int:now})
				AND (bg.cannot_access <> 0 OR bg.cannot_post <> 0 OR bg.cannot_login <> 0)
				AND (' . implode(' OR ', $matches) . ')
			LIMIT 1', $params);
		$banned = (bool) $smcFunc['db_fetch_row']($request);
		$smcFunc['db_free_result']($request);

		return $banned;
	}
}
