<?php
// Version: 2.1.3; index

global $forum_copyright, $webmaster_email, $scripturl, $context, $boardurl;

// Native name, please use full HTML entities to write your language's name.
$txt['native_name'] = '简体中文';

// Locale (strftime, basename). For more information see:
//   - https://php.net/function.setlocale
$txt['lang_locale'] = 'zh_CN';
$txt['lang_dictionary'] = 'en';
//https://developers.google.com/recaptcha/docs/language
$txt['lang_recaptcha'] = 'zh';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set right to left?  0 = ltr; 1 = rtl
$txt['lang_rtl'] = '0';
// Number format.
$txt['number_format'] = '1234.00';

$txt['days_title'] = '天';
$txt['days'] = array('星期天', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六');
$txt['days_short'] = array('周日', '周一', '周二', '周三', '周四', '周五', '周六');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months_title'] = '月';
$txt['months'] = array(1 => '一月', 2 => '二月', 3 => '三月', 4 => '四月', 5 => '五月', 6 => '六月', 7 => '七月', 8 => '八月', 9 => '九月', 10 => '十月', 11 => '十一月', 12 => '十二月');
$txt['months_titles'] = array(1 => '一月', 2 => '二月', 3 => '三月', 4 => '四月', 5 => '五月', 6 => '六月', 7 => '七月', 8 => '八月', 9 => '九月', 10 => '十月', 11 => '十一月', 12 => '十二月');
$txt['months_short'] = array(1 => '1月', 2 => '2月', 3 => '3月', 4 => '4月', 5 => '5月', 6 => '6月', 7 => '7月', 8 => '8月', 9 => '9月', 10 => '10月', 11 => '11月', 12 => '12月');
$txt['prev_month'] = '上个月';
$txt['next_month'] = '下个月';
$txt['start'] = '开始';
$txt['end'] = '结束';
$txt['starts'] = '开始';
$txt['ends'] = '结束';
$txt['none'] = '停用';

$txt['minutes_label'] = '分钟';
$txt['hours_label'] = '小时';
$txt['years_title'] = '年';

$txt['time_am'] = '上午';
$txt['time_pm'] = '下午';

// Short form of minutes
$txt['minutes_short'] = 'mins';
// Short form of hour
$txt['hour_short'] = 'hr';
// Short form of hours
$txt['hours_short'] = 'hrs';
// Descimal sign
$txt['decimal_sign'] = '.';

$txt['admin'] = '管理';
$txt['moderate'] = '监控中心';

$txt['save'] = '保存';
$txt['reset'] = 'Reset';
$txt['upload'] = '上传';
$txt['upload_all'] = '全部上传';
$txt['processing'] = '处理中……';

$txt['modify'] = '修改';
$txt['forum_index'] = '%1$s - 首页';
$txt['members'] = '会员';
$txt['board_name'] = '版块名称';
$txt['posts'] = '帖子';

$txt['member_postcount'] = '帖子';
$txt['no_subject'] = '（无标题）';
$txt['view_profile'] = '查看个人资料';
$txt['guest_title'] = '访客';
$txt['author'] = '作者';
$txt['on'] = '于';
$txt['remove'] = '删除';
$txt['start_new_topic'] = '发表新主题';

$txt['login'] = 'Log in';
// Use numeric entities in the below string.
$txt['username'] = '用户名';
$txt['password'] = '密码';

$txt['username_no_exist'] = '请输入正确的用户名。';
$txt['username_banned_login'] = '你已经被禁止登录。';
$txt['no_user_with_email'] = '没有帐号绑定本信箱。';

$txt['board_moderator'] = '版主';
$txt['remove_topic'] = '删除主题';
$txt['topics'] = '主题';
$txt['modify_msg'] = '修改信息';
$txt['name'] = '名称';
$txt['email'] = '电子邮件';
$txt['user_email_address'] = 'Email地址';
$txt['subject'] = '标题';
$txt['message'] = '内容';
$txt['redirects'] = '重定向';
$txt['quick_modify'] = '快速编辑';
$txt['quick_modify_message'] = '您已成功地修改了这个帖子/回复。';
$txt['reason_for_edit'] = '编辑理由';

$txt['choose_pass'] = 'Choose Password';
$txt['verify_pass'] = 'Verify Password';
$txt['notify_announcements'] = '允许管理员通过电子邮件向我发送重要通知';

$txt['position'] = '群组';

// argument(s): username
$txt['view_profile_of_username'] = 'View the profile of %1$s';
$txt['total'] = '总共';
$txt['website'] = '个人网站';
$txt['register'] = 'Sign up';
$txt['warning_status'] = '警告状态';
$txt['user_warn_watch'] = '版主监控的用户';
$txt['user_warn_moderate'] = '帖子审批列表';
$txt['user_warn_mute'] = '用户被禁止发贴';
$txt['warn_watch'] = '监控';
$txt['warn_moderate'] = '管理';
$txt['warn_mute'] = '不理';

$txt['message_index'] = '返回版块首页';
$txt['news'] = '站内公告';
$txt['home'] = '首页';
$txt['page'] = '页数';
$txt['prev'] = '上一页';
$txt['next'] = '下一页';

$txt['lock_unlock'] = '锁定/解锁主题';
$txt['post'] = '发帖';
$txt['error_occured'] = '发生错误！';
$txt['at'] = '在';
$txt['by'] = '作者';
$txt['logout'] = 'Log out';
$txt['started_by'] = '作者';
$txt['topic_started_by'] = '开始于 <strong>%1$s</strong> <em>%2$s</em>';
$txt['replies'] = '回复';
$txt['last_post'] = '最新文章';
$txt['first_post'] = '第一个帖子';
$txt['last_poster'] = '最后一个帖子由';
$txt['last_post_message'] = '<strong>最后帖子： </strong>%3$s <span class="postby">%2$s 由 %1$s</span>';
$txt['last_post_topic'] = '%1$s<br>由 %2$s';
$txt['post_by_member'] = '<strong>%1$s</strong> 由 <strong>%2$s</strong><br>';
$txt['boardindex_total_posts'] = '%1$s 在 %2$s 主题中的帖子由 %3$s 成员';
$txt['show'] = '显示';
$txt['hide'] = '隐藏';

$txt['admin_login'] = '管理员登录';
// Use numeric entities in the below string.
$txt['topic'] = '主题';
$txt['help'] = '帮助';
$txt['terms_and_rules'] = '条款和规则';
$txt['watch_board'] = '观看这个棋盘';
$txt['unwatch_board'] = 'Stop watching Board';
$txt['watch_topic'] = '观看这个主题';
$txt['unwatch_topic'] = 'Stop watching Topic';
$txt['watching_topic'] = 'Topic you are watching';
$txt['watching_this_topic'] = '您正在关注这个主题，并将收到有关它的通知。';
$txt['notify'] = '订阅';
$txt['unnotify'] = '未提醒';

// Use numeric entities in the below string.
// argument(s): forum name
$txt['regards_team'] = 'Regards,
The %1$s Team.';

$txt['notify_replies'] = '加入订阅';
$txt['move_topic'] = '移动帖子';
$txt['move_to'] = '移动到';
$txt['pages'] = '页';
$txt['users_active'] = '过去 %s 分钟内出现的会员';
$txt['personal_messages'] = '站内短信';
$txt['reply_quote'] = '引用原文回复';
$txt['reply'] = '回复';
$txt['reply_noun'] = '回复';
$txt['reply_number'] = 'Reply #%1$s%2$s';
$txt['approve'] = '核淮';
$txt['unapprove'] = '取消批准';
$txt['approve_all'] = '审核';
$txt['issue_warning'] = '问题警告';
$txt['awaiting_approval'] = '等待审核';
$txt['attach_awaiting_approve'] = '等待审核附件';
$txt['post_awaiting_approval'] = '注意:该信息仍在等待版主审核。';
$txt['there_are_unapproved_topics'] = '当前有 %1$s 篇主题和 %2$s 个帖子需要审批，点<a href="%3$s">这里</a>查看。';
$txt['send_message'] = '发送消息';

$txt['msg_alert_no_messages'] = 'you don\'t have any messages';
$txt['msg_alert_one_message'] = 'you have <a href="%1$s">1 message</a>';
$txt['msg_alert_many_message'] = '您有 <a href="%1$s">%2$d 消息</a>';
$txt['msg_alert_one_new'] = '1 是新的';
$txt['msg_alert_many_new'] = '%1$d 是新的';
$txt['new_alert'] = 'New alert';
$txt['remove_message'] = '删帖';
$txt['remove_message_question'] = '删帖?';

$txt['topic_alert_none'] = '没有消息...';
$txt['pm_alert_none'] = '没有消息...';
$txt['no_messages'] = '无消息';

$txt['online_users'] = '在线人数';
$txt['jump_to'] = '跳到';
$txt['go'] = '执行!';
$txt['are_sure_remove_topic'] = '您确定要删除这篇主题吗?';
$txt['yes'] = '确认';
$txt['no'] = '取消';

$txt['search_end_results'] = '搜索结果最末端';
$txt['search_on'] = '于';

$txt['search'] = '搜寻';
$txt['all'] = '全部';
$txt['search_entireforum'] = 'Entire forum';
$txt['search_thisboard'] = 'This board';
$txt['search_thistopic'] = '此主题';
$txt['search_members'] = '会员';

$txt['back'] = '回上一页';
$txt['continue'] = '继续';
$txt['password_reminder'] = '密码提醒';
$txt['topic_started'] = '主题发帖人为';
$txt['title'] = '标题';
$txt['post_by'] = '作者';
$txt['memberlist_searchable'] = '在此可以浏览所有已注册的会员..';
$txt['welcome_newest_member'] = 'Please welcome %1$s, our newest member.';
$txt['admin_center'] = '管理中心';
$txt['last_edit_by'] = '<span class="lastedit">上次编辑</span>: %1$s 由 %2$s';
$txt['last_edit_reason'] = '<span id="reason" class="lastedit">Reason</span>: %1$s';
$txt['notify_deactivate'] = '您想要关闭对于这篇帖子的订阅吗?';
$txt['modified_time'] = 'Last edited';
$txt['modified_by'] = 'Edited by';

$txt['recent_posts'] = '最新帖子';

$txt['location'] = '位置';
$txt['location_desc'] = 'Geographic location.';
$txt['gender'] = '性别';
$txt['gender_0'] = 'None';
$txt['gender_1'] = 'Male';
$txt['gender_2'] = 'Female';
$txt['gender_desc'] = 'Your gender.';
$txt['icq'] = 'ICQ';
$txt['icq_desc'] = 'This is your ICQ number.';
$txt['skype'] = 'Skype';
$txt['skype_desc'] = 'Your Skype username';
$txt['personal_text'] = 'Personal text';
$txt['date_registered'] = '注册日期';

$txt['recent_view'] = '观看最新发表的帖子.';
$txt['recent_updated'] = '是最近更新的主题';
$txt['is_recent_updated'] = '%1$s 是最近更新的主题';

$txt['male'] = '男';
$txt['female'] = '女';

$txt['error_invalid_characters_username'] = '用户名中使用的字符无效。';

// argument(s): forum name, login URL, login JavaScript snippet
$txt['welcome_guest'] = 'Welcome to <strong>%1$s</strong>. Please <a href="%2$s" onclick="%3$s">log in</a>.';

// argument(s): forum name, login URL, login JavaScript snippet, signup URL
$txt['welcome_guest_register'] = 'Welcome to <strong>%1$s</strong>. Please <a href="%2$s" onclick="%3$s">log in</a> or <a href="%4$s">sign up</a>.';

// argument(s): $scripturl
$txt['welcome_guest_activate'] = '<a href="%1$s?action=activate">Did you miss your activation email?</a>';

// argument(s): $scripturl
$txt['register_prompt'] = 'Don\'t have an account? <a href="%1$s?action=signup">Sign up</a>.';

// argument(s): forum name
$txt['welcome_to_forum'] = 'Welcome to <strong>%1$s</strong>.';

// @todo the following to sprintf
$txt['hello_member'] = '哈喽，';
// Use numeric entities in the below string.
$txt['hello_guest'] = '你好！';
$txt['select_destination'] = '请选择一个目的地';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = '作者';

$txt['icon_smiley'] = '表情';
$txt['icon_angry'] = '生气';
$txt['icon_cheesy'] = '调皮';
$txt['icon_laugh'] = '笑';
$txt['icon_sad'] = '悲伤';
$txt['icon_wink'] = '眨眼';
$txt['icon_grin'] = '微笑';
$txt['icon_shocked'] = '吃惊';
$txt['icon_cool'] = '酷';
$txt['icon_huh'] = '???';
$txt['icon_rolleyes'] = '翻白眼';
$txt['icon_tongue'] = '吐舌';
$txt['icon_embarrassed'] = '尴尬';
$txt['icon_lips'] = '无话可说';
$txt['icon_undecided'] = '犹豫不决';
$txt['icon_kiss'] = '吻';
$txt['icon_cry'] = '哭';

$txt['moderator'] = '版主';
$txt['moderators'] = '版主';

$txt['views'] = '浏览';
$txt['new'] = '新';

$txt['view_all_members'] = '会员名单';
$txt['view'] = '浏览';

$txt['viewing_members'] = '查看从 %1$s 到 %2$s 的会员';
$txt['of_total_members'] = '自总共 %1$s 会员';

$txt['forgot_your_password'] = '忘了您的密码吗?';

$txt['date'] = '日期';
// Use numeric entities in the below string.
$txt['from'] = '发件人';
$txt['check_new_messages'] = '检查新信息';
$txt['to'] = '收件人';

$txt['board_topics'] = '主题/帖子';
$txt['members_title'] = '会员';
$txt['members_list'] = '会员名单';
$txt['new_posts'] = '新帖';
$txt['old_posts'] = '没有新帖';
$txt['redirect_board'] = '重定向板块';

$txt['sendtopic_send'] = '发送';
$txt['report_sent'] = '你的举报已经成功发出';
$txt['post_becomes_unapproved'] = 'Your message was not approved because it was posted in an unapproved topic. Once the topic is approved your message will be approved too.';

$txt['time_offset'] = '时区设定';
$txt['or'] = '或';

$txt['no_matches'] = '很抱歉, 没有找到任何相符的数据';

$txt['notification'] = '订阅';

$txt['your_ban'] = '很抱歉 %s, 本论坛禁止您进入!';
$txt['your_ban_expires'] = '你的限制将在 %s 天后过期';
$txt['your_ban_expires_never'] = '你已经设置为永远不允许访问';
$txt['ban_continue_browse'] = '你可以继续以游客权限访问论坛.';

$txt['mark_as_read'] = '标记所有帖子为已阅读';

$txt['locked_topic'] = '锁定的主题';
$txt['normal_topic'] = '一般的主题';
$txt['participation_caption'] = '您曾经参与过的主题';
$txt['moved_topic'] = '移动主题';

$txt['go_caps'] = 'GO';

$txt['print'] = '打印';
$txt['profile'] = '个人资料';
$txt['topic_summary'] = '帖子总览';
$txt['not_applicable'] = '空';
$txt['name_in_use'] = '这个会员名称已经有人使用了，或者因为你重复提交了申请，请尝试用你刚才的信息登录。谢谢。';

$txt['total_members'] = '总会员人数';
$txt['total_posts'] = '总帖数';
$txt['total_topics'] = '总主题数';

$txt['time_logged_in'] = 'Time to stay logged in';

$txt['preview'] = '预览';
$txt['always_logged_in'] = '永远';

$txt['logged'] = '已记录';
$txt['show_ip'] = 'Show IP address';
// Use numeric entities in the below string.
$txt['ip'] = 'IP 地址';
$txt['url'] = '网址';
$txt['www'] = '个人网站';

$txt['hours'] = '小时';
$txt['minutes'] = '分钟';
$txt['seconds'] = '秒';

// Used upper case in Paid subscriptions management
$txt['hour'] = '小时';
$txt['days_word'] = '天';

$txt['search_for'] = '搜索用户';
$txt['search_match'] = '匹配';

$txt['forum_in_maintenance'] = 'Your forum is in Maintenance Mode. Only administrators can currently log in.';
$txt['maintenance_page'] = '您可以从 <a href="%1$s">服务器设置</a> 区域关闭维护模式。';

$txt['read_one_time'] = '阅读1次';
$txt['read_many_times'] = '读取 %1$d 次';

$txt['forum_stats'] = '论坛统计资料';
$txt['latest_member'] = '最新注册会员';
$txt['total_cats'] = '总分类数量';
$txt['latest_post'] = '最新帖子';

$txt['total_boards'] = '版块总计';

$txt['print_page'] = '打印本页';
$txt['print_page_text'] = '仅文本';
$txt['print_page_images'] = '带图像的文本';

$txt['valid_email'] = '必须是有效的电子邮件信箱.';

$txt['geek'] = '我是神经病!!';
$txt['info_center_title'] = '%1$s - 信息中心';

$txt['watch'] = '观察';
$txt['unwatch'] = '停止关注';

$txt['check_all'] = 'Select all';

// Use numeric entities in the below string.
$txt['database_error'] = '数据库错误';
$txt['try_again'] = '请重新操作一次. 如果这个问题持续发生, 请联络系统管理员.';
$txt['file'] = '文件';
$txt['line'] = '行';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF论坛系统已在数据库中发现错误, 并且修正完毕. 如果这个问题持续发生, 请联络您的主机系统管理员.';
$txt['database_error_versions'] = '<b>注意:</b> 您<em>可能</em>需要更新您的数据库. 您的论坛版本是 %s, 您的SMF数据库版本是 %s. 执行最新的upgrade.php升级可能会解决上述错误。';
$txt['template_parse_error'] = '主题模板执行错误!';
$txt['template_parse_error_message'] = '论坛的主题模板出现错误, 这可能是暂时性的, 请稍后再进入论坛. 如果错误继续发生, 请通知管理员.<br /><br />你也可以 <a href="javascript:location.reload();">刷新此页</a>.';
// argument(s): filename, $boardurl, $scripturl
$txt['template_parse_error_details'] = 'There was a problem loading the <pre><strong>%1$s</strong></pre> template or language file. Please check the syntax and try again - remember, single quotes (<pre>\'</pre>) often have to be escaped with a slash (<pre>\\</pre>). To see more specific error information from PHP, try <a href="%2$s%1$s">accessing the file directly</a>.<br><br>You may want to try to <a href="javascript:location.reload();">refresh this page</a> or <a href="%3$s?theme=1">use the default theme</a>.';
$txt['template_parse_errmsg'] = '不幸的是，目前还没有更多关于什么是错误的信息。';

$txt['today'] = '<b>今天</b> ';
$txt['yesterday'] = '<b>昨天</b> ';
$txt['new_poll'] = '新投票';
$txt['poll_question'] = '题目';
$txt['poll_vote'] = '发起投票';
$txt['poll_total_voters'] = '总票数';
$txt['poll_results'] = '查看结果.';
$txt['poll_lock'] = '锁定投票';
$txt['poll_unlock'] = '解锁投票';
$txt['poll_edit'] = '更改投票';
$txt['poll'] = '投票';
$txt['one_hour'] = '一小时';
$txt['one_day'] = '一天';
$txt['one_week'] = '一周';
$txt['two_weeks'] = '2 周';
$txt['one_month'] = '一个月';
$txt['two_months'] = '2 个月';
$txt['forever'] = '永远';
$txt['moved'] = '移动';
$txt['move_why'] = 'Please enter a brief description as to<br>why this topic is being moved.';
$txt['board'] = '版块';
$txt['in'] = '在';
$txt['sticky_topic'] = '置顶主题';

$txt['delete'] = '删除';
$txt['no_change'] = '不改变';

$txt['your_pms'] = '您的短信息';

$txt['kilobyte'] = 'kB';
$txt['megabyte'] = 'MB';

$txt['more_stats'] = '[详细统计资料]';

// Use numeric entities in the below three strings.
$txt['code'] = '代码';
$txt['code_select'] = '[选择]';
$txt['code_expand'] = 'Expand';
$txt['code_shrink'] = 'Shrink';
$txt['quote_from'] = '引用自';
$txt['quote'] = '引用';
$txt['quote_action'] = '引用';
$txt['quote_selected_action'] = '引用选中的文本';
$txt['fulledit'] = '完整的&nbsp;编辑';
$txt['edit'] = '编辑';
$txt['quick_edit'] = '快速编辑';
$txt['post_options'] = '更多...';

$txt['merge_to_topic_id'] = '目标主题的ID';
$txt['split'] = '拆分主题';
$txt['merge'] = '合并主题';
$txt['target_id'] = '按主题ID选择目标';
$txt['target_below'] = '从下面的列表中选择目标';
$txt['subject_new_topic'] = '新主题的标题';
$txt['split_this_post'] = '只拆分此篇文章.';
$txt['split_after_and_this_post'] = '回复这篇文章之后拆分此篇主题.';
$txt['select_split_posts'] = '请选择您要拆分的文章.';
$txt['new_topic'] = '新主题';
$txt['split_successful'] = '主题已经拆分成功为两篇主题.';
$txt['origin_topic'] = '原主题';
$txt['please_select_split'] = '请选择您要拆分的文章.';
$txt['merge_successful'] = '主题已经合并成功.';
$txt['new_merged_topic'] = '新合并的主题';
$txt['topic_to_merge'] = '您要合并的主题';
$txt['target_board'] = '目标版块';
$txt['target_topic'] = '目标主题';
$txt['merge_desc'] = 'This function will merge the messages of two topics into one topic. The messages will be sorted according to the time of posting. Therefore, the earliest posted message will be the first message of the merged topic.';

$txt['set_sticky'] = '置顶主题';
$txt['set_nonsticky'] = '取消置顶主题';
$txt['set_lock'] = '锁定主题';
$txt['set_unlock'] = '解锁主题';

$txt['search_advanced'] = '高级搜索';

$txt['security_risk'] = '重大安全警告:';
$txt['not_removed'] = '您并没有删除 ';
$txt['not_removed_extra'] = '%1$s 是 %2$s 的非SMF自动生成的备份文件. 该文件可以直接被访问到并来获得非授权的访问论坛数据，你应该立刻删除。';
$txt['generic_warning'] = '警告';
$txt['agreement_missing'] = 'You are requiring new users to accept a registration agreement; however, the file (agreement.txt) does not exist.';
$txt['policy_agreement_missing'] = 'You are requiring new users to accept a privacy policy; however, the privacy policy is empty.';
$txt['auth_secret_missing'] = 'Unable to set authentication secret in Settings.php. This weakens the security of your forum and puts it at risk for attacks. Check the file permissions on Settings.php to make sure SMF can write to the file.';

$txt['cache_writable'] = '缓存目录无法写入??这会极大的影响你的论坛的性能。';

$txt['page_created_full'] = '在 %1$.3f 秒内创建了带有 %2$d 查询的页面。';

$txt['report_to_mod_func'] = '使用这个功能通知版主以及管理员有问题的帖子.<br /><i>请注意: 使用这个功能会将您的电子邮件信箱地址告诉版主以及管理员.</i>';
$txt['report_profile_func'] = '使用此功能来通知管理员滥用配置文件内容，如垃圾信息或不恰当的图像。';

$txt['online'] = '在线';
$txt['member_is_online'] = '%1$s 在线';
$txt['offline'] = '离线';
$txt['member_is_offline'] = '%1$s 已离线';
$txt['pm_online'] = '短信息 (在线)';
$txt['pm_offline'] = '短信息 (离线)';
$txt['status'] = '状态';

$txt['go_up'] = '向上';
$txt['go_down'] = '向下';

// argument(s): SMF_FULL_VERSION, SMF_SOFTWARE_YEAR, $scripturl
$forum_copyright = '<a href="%3$s?action=credits" title="License" target="_blank" rel="noopener">%1$s &copy; %2$s</a>, <a href="https://www.simplemachines.org" title="Simple Machines" target="_blank" rel="noopener">Simple Machines</a>';

$txt['birthdays'] = '寿星:';
$txt['events'] = '事件:';
$txt['birthdays_upcoming'] = '即将生日:';
$txt['events_upcoming'] = '近日事件:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '假期：';
$txt['calendar_month'] = '月:';
$txt['calendar_year'] = '年:';
$txt['calendar_day'] = '日:';
$txt['calendar_event_title'] = '事件名称:';
$txt['calendar_event_options'] = '事件选项';
$txt['calendar_post_in'] = '相关帖子:';
$txt['calendar_edit'] = '修改事件内容';
$txt['calendar_export'] = '导出事件';
$txt['calendar_view_week'] = '查看周';
$txt['event_delete_confirm'] = '删除这个事件?';
$txt['event_delete'] = '删除事件';
$txt['calendar_post_event'] = '发表事件';
$txt['calendar'] = '日历';
$txt['calendar_link'] = '链接到日历';
$txt['calendar_upcoming'] = '近日事件';
$txt['calendar_today'] = '今日事件';
$txt['calendar_week'] = '周';
$txt['calendar_week_title'] = '%1$d / %2$d 周';
// %1$s is the month, %2$s is the day, %3$s is the year. Change to suit your language.
$txt['calendar_week_beginning'] = '每周开始于 %1$s %2$s， %3$s';
$txt['calendar_numb_days'] = '维持的天数:';
$txt['calendar_how_edit'] = '如何修改事件内容?';
$txt['calendar_link_event'] = '链接事件';
$txt['calendar_confirm_delete'] = '你确定你说要删除该事件吗？';
$txt['calendar_linked_events'] = '已链接的事件';
$txt['calendar_click_all'] = '点击来查看所有 %1$s';
$txt['calendar_allday'] = 'All day';
$txt['calendar_timezone'] = 'Time zone';
$txt['calendar_list'] = 'List';
$txt['calendar_empty'] = 'There are no events to display.';

$txt['movetopic_change_subject'] = '更改主题主题';
$txt['movetopic_new_subject'] = '新主题';
$txt['movetopic_change_all_subjects'] = '更改每条消息的主题';
$txt['move_topic_unapproved_js'] = '警告！该主题还没有被审批。\n\n除非你在转移后立刻审批该主题，否则不推荐你创建重定向。';
$txt['movetopic_auto_board'] = '[版块]';
$txt['movetopic_auto_topic'] = '[主题链接]';

// argument(s): $txt['movetopic_auto_board'], $txt['movetopic_auto_topic']
$txt['movetopic_default'] = 'This topic has been moved to %1$s.

%2$s';

$txt['movetopic_redirect'] = '重定向到移动的主题';

$txt['post_redirection'] = '发布重定向主题';
$txt['redirect_topic_expires'] = '自动删除重定向主题';
$txt['mergetopic_redirect'] = '重定向到合并的主题';
$txt['merge_topic_unapproved_js'] = '警告！此主题尚未被批准。\n\n不建议您创建一个重定向主题，除非您打算在合并后立即批准该帖子。';

$txt['theme_template_error'] = '无法加载风格文件 \'%s\'.';
$txt['theme_language_error'] = '无法载入语言文件: \'%s\'.';

$txt['sub_boards'] = '子看板';
$txt['restricted_board'] = '受限制的版面';

$txt['smtp_no_connect'] = '无法链接到邮件发信服务器 (SMTP)';
$txt['smtp_port_ssl'] = 'SMTP 连接端口的设定错误；给 SSL 的主机它必须是 465。';
$txt['smtp_bad_response'] = 'Could not get mail server response codes';
$txt['smtp_error'] = 'Ran into problems sending mail. Error: ';
$txt['mail_send_unable'] = '不能发送邮件到以下地址： \'%s\'';

$txt['mlist_search'] = '寻找会员';
$txt['mlist_search_again'] = '重新搜索';
$txt['mlist_search_filter'] = 'Search options';
$txt['mlist_search_email'] = '根据电子邮件搜索';
$txt['mlist_search_messenger'] = '根据通讯软件昵称搜索';
$txt['mlist_search_group'] = '根据群组或阶级搜索';
$txt['mlist_search_name'] = '根据昵称搜索';
$txt['mlist_search_website'] = '根据个人网站搜索';
$txt['mlist_search_results'] = '搜索结果';
$txt['mlist_search_by'] = '通过 %1$s 来搜索';
$txt['mlist_menu_view'] = '浏览会员名单';

$txt['attach_downloaded'] = '已被下载';
$txt['attach_viewed'] = '已被阅读';

$txt['settings'] = '设定';
$txt['never'] = '从不';
$txt['more'] = '更多表情';
$txt['etc'] = 'etc.';

$txt['hostname'] = '主机地址';
$txt['you_are_post_banned'] = '对不起 %s, 您被禁止发送短信息.';
$txt['ban_reason'] = '理由';
$txt['select_item_check'] = 'Please select at least one item in the list';

$txt['tables_optimized'] = '数据库已优化';

$txt['add_poll'] = '投票';
$txt['poll_options_limit'] = 'You may only select up to %1$s options.';
$txt['poll_remove'] = '删除投票';
$txt['poll_remove_warn'] = '您确定要删除这个投票吗?';
$txt['poll_results_expire'] = '投票结果将会在投票结束后公告';
$txt['poll_expires_on'] = '投票截止日期';
$txt['poll_expired_on'] = '投票已截止';
$txt['poll_change_vote'] = '删除投票';
$txt['poll_return_vote'] = '投票选项';
$txt['poll_cannot_see'] = '您现在还不能查看投票结果。';

$txt['quick_mod_approve'] = '审核所选';
$txt['quick_mod_remove'] = '删除所选项';
$txt['quick_mod_lock'] = '锁定选项';
$txt['quick_mod_sticky'] = '置顶选项';
$txt['quick_mod_move'] = '移动选项到';
$txt['quick_mod_merge'] = '合并选项';
$txt['quick_mod_markread'] = '将所选帖子标记为“已读”';
$txt['quick_mod_markunread'] = '标记选中的未读';
$txt['quick_mod_selected'] = '选中的选项执行';
$txt['quick_mod_go'] = '搜索';
$txt['quickmod_confirm'] = '您确定要这么做吗？';

$txt['spell_check'] = '拼字检查（英文）';

$txt['quick_reply'] = '快速回复';
$txt['quick_reply_warning'] = '注意: 此篇主题已经被锁定了!<br />只有版主可以回复.';
$txt['quick_reply_verification'] = '当你提交贴子的时候，你会被带往一个正常发帖页去验证你的贴子 %1$s.';
$txt['quick_reply_verification_guests'] = '(所有游客都必须验证)';
$txt['quick_reply_verification_posts'] = '(所有少于 %1$d 贴的用户都必须验证)';
$txt['wait_for_approval'] = 'Note: this post will not display until it has been approved by a moderator.';

$txt['notification_enable_board'] = '您确定要订阅这个版块的新帖子吗?';
$txt['notification_disable_board'] = '您确定不再订阅这个版块的新帖子吗?';
$txt['notification_enable_topic'] = '您确定要订阅这个帖子吗?';
$txt['notification_disable_topic'] = '您确定不再订阅这个帖子吗?';

// Mentions
$txt['mentions'] = '提及内容';

// Likes
$txt['likes'] = '喜欢的';
$txt['like'] = '赞';
$txt['unlike'] = '不匹配';
$txt['like_success'] = '您的内容被成功喜欢。';
$txt['like_delete'] = '您的内容已成功删除。';
$txt['like_insert'] = '您的内容已成功插入.';
$txt['like_error'] = '您的请求有一个错误。';
$txt['like_disable'] = '喜欢功能已禁用。';
$txt['not_valid_like_type'] = '喜欢的类型不是有效的类型。';
// Translators, if you need to make more strings to suit your language, e.g. $txt['likes_2'] = 'Two people like this', please do so.
$txt['likes_1'] = '<a href="%1$s">%2$s person</a> likes this.';
$txt['likes_n'] = '<a href="%1$s">%2$s 用户</a> 就这样做了。';
$txt['you_likes_0'] = '你喜欢这个。';
$txt['you_likes_1'] = 'You and <a href="%1$s">%2$s other person</a> like this.';
$txt['you_likes_n'] = 'You and <a href="%1$s">%2$s other people</a> like this.';

$txt['report_to_mod'] = '向版主举报';
$txt['report_profile'] = '%1$s 的报告配置文件';

$txt['unread_topics_visit'] = '未阅读的主题';
// argument(s): scripturl
$txt['unread_topics_visit_none'] = 'No unread topics found since your last visit. <a href="%1$s?action=unread;all">Click here to try all unread topics</a>.';
$txt['updated_topics_visit_none'] = 'No updated topics found since your last visit.';
$txt['unread_topics_all'] = '所有未阅读的主题';
$txt['unread_replies'] = '更新的主题';

$txt['who_title'] = '在线会员';
$txt['who_and'] = ' 以及 ';
$txt['who_viewing_topic'] = ' 正在阅读本主题.';
$txt['who_viewing_board'] = ' 正在浏览本版块.';
$txt['who_member'] = '用户';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'PHP 支持';
$txt['powered_by_mysql'] = 'MySQL 支持';
$txt['valid_css'] = '验证 CSS!';

$txt['rss'] = 'RSS';
$txt['atom'] = 'Atom';
$txt['html'] = 'HTML';

$txt['guest'] = '访客';
$txt['guests'] = '访客';
$txt['user'] = '会员';
$txt['users'] = '会员';
$txt['hidden'] = '隐藏';

// Plural form of hidden for languages other than English
$txt['hidden_s'] = '隐藏';
$txt['buddy'] = '好友';
$txt['buddies'] = '好友';
$txt['most_online_ever'] = '历史最高在线';
$txt['most_online_today'] = '今天最高在线';

$txt['merge_select_target_board'] = '选择合并主题要放置的目标版块';
$txt['merge_select_poll'] = '选择在合并后要保存的投票';
$txt['merge_topic_list'] = '选择要合并的主题';
$txt['merge_select_subject'] = '选择合并后主题的标题';
$txt['merge_custom_subject'] = '自订标题';
$txt['merge_include_notifications'] = '包含订阅?';
$txt['merge_check'] = '合并?';
$txt['merge_no_poll'] = '没有投票';
$txt['merge_why'] = 'Please enter a brief description as to why these topics are being merged.';
$txt['merged_subject'] = '[MERGED] %1$s';
// argument(s): $txt['movetopic_auto_topic']
$txt['mergetopic_default'] = 'This topic has been merged into %2$s.';

$txt['response_prefix'] = '回复： ';
$txt['current_icon'] = '目前使用的图示';
$txt['message_icon'] = '信息图标';

$txt['smileys_current'] = '目前的表情图案集';
$txt['smileys_none'] = '不使用表情图案';
$txt['smileys_forum_board_default'] = '论坛/版块的默认设置';

$txt['search_results'] = '搜索结果';
$txt['search_no_results'] = '很抱歉, 没有找到任何符合的数据';

$txt['total_time_logged_days'] = ' days, ';
$txt['total_time_logged_hours'] = ' hours and ';
$txt['total_time_logged_minutes'] = ' 分钟';
$txt['total_time_logged_d'] = 'd ';
$txt['total_time_logged_h'] = 'h ';
$txt['total_time_logged_m'] = 'm';

$txt['approve_members_waiting'] = '等待审核.';

$txt['activate_code'] = '您的激活码是';

$txt['find_members'] = '寻找会员';
$txt['find_username'] = '帐号, 昵称或电子邮件';
$txt['find_buddies'] = '只查找好友？';
$txt['find_wildcards'] = '您可以使用的万用字符: *, ?';
$txt['find_no_results'] = '没有找到任何结果';
$txt['find_results'] = '结果';
$txt['find_close'] = '关闭';

$txt['unread_since_visit'] = '显示上次光临之后的新主题.';
$txt['show_unread_replies'] = '显示您有参与讨论的所有新回复.';

$txt['change_color'] = '更改颜色';

$txt['quickmod_delete_selected'] = '删除所选项';
$txt['quickmod_split_selected'] = 'Split selected';

$txt['show_personal_messages_heading'] = '新消息';
$txt['show_personal_messages'] = '您收到了新的短信息.\n要打开新窗口阅读吗?';

$txt['help_popup'] = '我要解释一下：';

$txt['previous_next_back'] = '&laquo; 上一篇主题';
$txt['previous_next_forward'] = '下一篇主题 &raquo;';

$txt['mark_unread'] = '标记未读';

$txt['ssi_not_direct'] = 'Please do not access SSI.php by URL directly; you may want to use the path (%1$s) or add ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php 未能装载一个session！这可能会使得用户注销（退出）和其它一些功能出现问题——请检查确认 SSI.php 包含语句在你的脚本中的任何代码之前！';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = '预览帖子';
$txt['preview_fetch'] = '准备预览……';
$txt['preview_new'] = '新站内短信';
$txt['pm_error_while_submitting'] = '发送此个人消息时发生以下错误或错误：';
$txt['error_while_submitting'] = '发送站内短信时发生以下错误：';
$txt['error_old_topic'] = '警告: 该贴已经至少 %d 天没有更改。<br />除非你一定要回复，否则也许考虑发一个新贴会更好。';

$txt['split_selected_posts'] = '已选帖子';
$txt['split_selected_posts_desc'] = '分离帖子将产生一个新主题';
$txt['split_reset_selection'] = '重新选择';

$txt['modify_cancel'] = '取消';
$txt['modify_cancel_all'] = 'Cancel All';
$txt['mark_read_short'] = '标记已读';

$txt['alerts'] = '提醒';

$txt['pm_short'] = '我的消息';
$txt['pm_menu_read'] = '阅读短信';
$txt['pm_menu_send'] = '发送短信';

$txt['unapproved_posts'] = '未审核帖子 (主题: %d, 帖子: %d)';

$txt['ajax_in_progress'] = '加载中...';

$txt['mod_reports_waiting'] = '被举报帖子';

$txt['view_unread_category'] = '未读帖子';
$txt['new_posts_in_category'] = '点击查看 %1$s中的新帖子';
$txt['verification'] = '验证码';
$txt['visual_verification_hidden'] = '请将此框留空';
$txt['visual_verification_description'] = '请输入上面图片上的文字';
$txt['visual_verification_sound'] = '收听图片上的字母';
$txt['visual_verification_request_new'] = '换一个验证码';

// Sub menu labels
$txt['summary'] = '常规信息';
$txt['account'] = '帐号相关设定';
$txt['theme'] = '外观和布局';
$txt['forumprofile'] = '论坛相关设定';
$txt['activate_changed_email_title'] = '电子邮件地址已更改';
$txt['activate_changed_email_desc'] = '您已更改您的电子邮件地址。为了验证此地址，您将收到一封电子邮件。 点击该电子邮件中的链接来重新激活您的帐户。';
$txt['modSettings_title'] = '功能及选项';
$txt['package'] = '插件程序';
$txt['errorlog'] = 'Error Log';
$txt['edit_permissions'] = '权限';
$txt['mc_unapproved_attachments'] = '未审核附件';
$txt['mc_unapproved_poststopics'] = '未审核主题和帖子';
$txt['mc_reported_posts'] = '当前有 %1$d 个版主报告打开。';
$txt['mc_reported_members'] = '已报告的成员';
$txt['modlog_view'] = '版主日志';
$txt['calendar_menu'] = '查看日历';

// @todo Send email strings - should move?
$txt['send_email'] = '发送Email';

$txt['ignoring_user'] = '你正忽略该用户。';
$txt['show_ignore_user_post'] = '显示帖子。';

$txt['spider'] = '机器人';
$txt['spiders'] = '爬虫';

$txt['downloads'] = '下载';
$txt['filesize'] = '档案大小';

// Restore topic
$txt['restore_topic'] = '恢复主题';
$txt['restore_message'] = '恢复信息';
$txt['quick_mod_restore'] = '恢复选择';

// Editor prompt.
$txt['prompt_text_email'] = '请输入Email地址。';
$txt['prompt_text_ftp'] = '请输入 ftp 地址。';
$txt['prompt_text_url'] = '请输入希望连接的 URL 地址。';
$txt['prompt_text_img'] = '请输入图片地址';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = '删除项目';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = '模板: ';
$txt['debug_subtemplates'] = '子模板: ';
$txt['debug_language_files'] = '语言文件: ';
$txt['debug_stylesheets'] = '样式表: ';
$txt['debug_files_included'] = '文件包括: ';
$txt['debug_memory_use'] = '使用的内存： ';
$txt['debug_kb'] = 'kB.';
$txt['debug_show'] = '显示';
$txt['debug_cache_hits'] = '缓存命中: ';
$txt['debug_cache_misses'] = 'Cache misses: ';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s 字节';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss for %2$s 字节';
$txt['debug_queries_used'] = '查询使用: %1$d.';
$txt['debug_queries_used_and_warnings'] = '查询使用: %1$d, %2$d 警告.';
$txt['debug_query_in_line'] = '在 <em>%1$s</em> 行 <em>%2$s</em>, ';
$txt['debug_query_which_took'] = '使用了 %1$s 秒.';
$txt['debug_query_which_took_at'] = '使用了 %1$s 秒在 %2$s 的请求里.';
$txt['debug_show_queries'] = '[显示查询]';
$txt['debug_hide_queries'] = '[隐藏查询]';
$txt['debug_tokens'] = '令牌： ';
$txt['debug_browser'] = '浏览器 ID： ';
$txt['debug_hooks'] = '钩子调用： ';
$txt['debug_instances'] = '创建实例： ';
$txt['are_sure_mark_read'] = '您确定要将消息标记为已读吗？';

// Inline attachments messages.
$txt['attachments_not_enable'] = 'Attachments are disabled';
$txt['attachments_no_data_loaded'] = 'Not a valid attachment ID.';
$txt['attachments_not_allowed_to_see'] = 'You cannot view this attachment.';
$txt['attachments_no_msg_associated'] = 'No message is associated with this attachment.';
$txt['attachments_unapproved'] = 'Attachment is awaiting approval.';

// Accessibility
$txt['hide_category'] = '隐藏分类';
$txt['show_category'] = '显示分类';
$txt['hide_infocenter'] = '隐藏信息中心';
$txt['show_infocenter'] = '显示信息中心';

// Notification post control
$txt['notify_topic_0'] = '未关注';
$txt['notify_topic_1'] = '没有警报或电子邮件';
$txt['notify_topic_2'] = '接收提醒';
$txt['notify_topic_3'] = '接收电子邮件和提醒';
$txt['notify_topic_0_desc'] = 'You will not receive any emails or alerts for this topic and it will also not show up in your unread replies and topics list. You will still receive @mentions for this topic.';
$txt['notify_topic_1_desc'] = '您将不会收到任何电子邮件或警报，只会收到其他成员提到的 @mention。';
$txt['notify_topic_2_desc'] = '您将收到此主题的警报。';
$txt['notify_topic_3_desc'] = '您将收到此主题的提示和电子邮件。';
$txt['notify_board_1'] = '没有警报或电子邮件';
$txt['notify_board_2'] = '接收提醒';
$txt['notify_board_3'] = '接收电子邮件和提醒';
$txt['notify_board_1_desc'] = '您将不会收到任何新主题的电子邮件或提醒';
$txt['notify_board_2_desc'] = '您将收到此看板的警报。';
$txt['notify_board_3_desc'] = '您将收到此看板的提示和电子邮件。';

$txt['notify_board_prompt'] = '当有会员在这个版块内发表新主题时, 是否要通过电子邮件通知您?';
$txt['notify_board_subscribed'] = '%1$s has been subscribed to new topic notifications for this board.';
$txt['notify_board_unsubscribed'] = '%1$s has been unsubscribed from new topic notifications for this board.';

$txt['notify_topic_prompt'] = '订阅本帖: 当有人回帖时, 您想要收到一封电子邮件提醒您吗?';
$txt['notify_topic_subscribed'] = '%1$s has been subscribed to new reply notifications for this topic.';
$txt['notify_topic_unsubscribed'] = '%1$s has been unsubscribed from new reply notifications for this topic.';

$txt['notify_announcements_prompt'] = 'Do you want to receive forum newsletters, announcements and important notifications by email?';
$txt['notify_announcements_subscribed'] = '%1$s has been subscribed to forum newsletters, announcements and important notifications.';
$txt['notify_announcements_unsubscribed'] = '%1$s has been unsubscribed from forum newsletters, announcements and important notifications.';

$txt['unsubscribe_announcements_plain'] = 'To unsubscribe from forum newsletters, announcements and important notifications, follow this link: %1$s';
$txt['unsubscribe_announcements_html'] = '<span style="font-size:small"><a href="%1$s">Unsubscribe</a> from forum newsletters, announcements and important notifications.</span>';
$txt['unsubscribe_announcements_manual'] = 'To unsubscribe from forum newsletters, announcements and important notifications, contact us at %1$s with your request.';

// Mobile Actions
$txt['mobile_action'] = 'User actions';
$txt['mobile_moderation'] = '版块管理';
$txt['mobile_user_menu'] = 'Main Menu';
$txt['mobile_generic_menu'] = '%1$s Menu';

// Formats for lists in a sentence (e.g. "Alice, Bob, and Charlie")
// Examples:
// 	$txt['sentence_list_format'][2] specifies a format for a list with two items
// 	$txt['sentence_list_format']['n'] specifies the default format
// Notes on placeholders:
// 	{1} = first item in the list, {2} = second item, etc.
// 	{-1} = last item in the list, {-2} = second last item, etc.
// 	{series} = concatenated string of the rest of the items in the list
$txt['sentence_list_format'][1] = '{1}';
$txt['sentence_list_format'][2] = '{1} and {-1}';
$txt['sentence_list_format'][3] = '{series}, and {-1}';
$txt['sentence_list_format'][4] = '{series}, and {-1}';
$txt['sentence_list_format'][5] = '{series}, and {-1}';
$txt['sentence_list_format']['n'] = '{series}, and {-1}';
// Separators used to build lists in a sentence
$txt['sentence_list_separator'] = ', ';
$txt['sentence_list_separator_alt'] = '; ';

?>