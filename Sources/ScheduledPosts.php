<?php

if (!defined('SMF'))
	die('No direct access...');

// A claimed background task becomes available for retry after this many seconds.
define('MAX_CLAIM_THRESHOLD', 300);

/**
 * Convert the profile's local publishing time to a Unix timestamp.
 */
function parseScheduledPostTime($value, $timezone, $now)
{
	if (!is_string($value) || !preg_match('~^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}$~D', $value))
		return false;

	$zone = new DateTimeZone($timezone);
	$date = DateTimeImmutable::createFromFormat('!Y-m-d\TH:i', $value, $zone);
	if (!$date || $date->format('Y-m-d\TH:i') !== $value)
		return false;

	$timestamp = $date->getTimestamp();
	if ($timestamp <= $now || $timestamp > 2147483647)
		return false;

	// During a backwards clock change, a local time can name two different instants.
	$local_seconds = $timestamp + $date->getOffset();
	$previous_offset = null;
	foreach ($zone->getTransitions($timestamp - 86400, $timestamp + 86400) ?: array() as $transition)
	{
		if ($previous_offset !== null && $local_seconds >= $transition['ts'] + $transition['offset'] &&
			$local_seconds < $transition['ts'] + $previous_offset)
			return false;

		$previous_offset = $transition['offset'];
	}

	return $timestamp;
}

/**
 * Queue validated post content without creating a visible message or topic.
 */
function queueScheduledPost($publish_at, array $message, array $topic, array $author, $notify)
{
	global $smcFunc;

	$data = $smcFunc['json_encode'](array(
		'publish_at' => $publish_at,
		'board_id' => (int) $topic['board'],
		'topic_id' => (int) $topic['id'],
		'author_id' => (int) $author['id'],
		'ip' => $author['ip'],
		'ip2' => $author['ip2'] ?? $author['ip'],
		'subject' => $message['subject'],
		'body' => $message['body'],
		'icon' => $message['icon'],
		'smileys_enabled' => $message['smileys_enabled'],
		'approved' => $message['approved'],
		'notify' => $notify,
	), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

	if ($data === false || strlen($data) > 16777215)
		return false;

	// fetch_task uses a strict comparison against now minus the retry interval.
	return $smcFunc['db_insert']('insert', '{db_prefix}background_tasks',
		array('task_file' => 'string', 'task_class' => 'string', 'task_data' => 'string', 'claimed_time' => 'int'),
		array('$sourcedir/tasks/PublishScheduledPost.php', 'PublishScheduledPost_Background', $data, $publish_at - MAX_CLAIM_THRESHOLD - 1),
		array('id_task'),
		1
	);
}
