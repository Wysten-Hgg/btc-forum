<?php
// Version: 2.1.0; Modlog

$txt['modlog_date'] = '日期';
$txt['modlog_member'] = '会员';
$txt['modlog_position'] = '位置';
$txt['modlog_action'] = '动作';
$txt['modlog_ip'] = 'IP';
$txt['modlog_search_result'] = '搜寻结果';
$txt['modlog_total_entries'] = '所有项目';
$txt['modlog_ac_approve_topic'] = '核淮 &quot;{member}&quot; 发表的主题 &quot;{topic}&quot;';
$txt['modlog_ac_unapprove_topic'] = 'Unapproved topic &quot;{topic}&quot; by &quot;{member}&quot;';
$txt['modlog_ac_approve'] = '核淮 &quot;{member}&quot; 回复的文章 &quot;{subject}&quot; (主题: &quot;{topic}&quot;)';
$txt['modlog_ac_unapprove'] = 'Unapproved message &quot;{subject}&quot; in &quot;{topic}&quot; by &quot;{member}&quot;';
$txt['modlog_ac_lock'] = '封锁 &quot;{topic}&quot;';
$txt['modlog_ac_warning'] = '因为&quot;{message}&quot; 预警 {member} ';
$txt['modlog_ac_unlock'] = '解封 &quot;{topic}&quot;';
$txt['modlog_ac_sticky'] = '顶置 &quot;{topic}&quot;';
$txt['modlog_ac_unsticky'] = '取消顶置 &quot;{topic}&quot;';
$txt['modlog_ac_delete'] = '删除 &quot;{member}&quot; 发表的 &quot;{subject}&quot; (主题: &quot;{topic}&quot;)';
$txt['modlog_ac_delete_member'] = '删除会员 &quot;{name}&quot;';
$txt['modlog_ac_remove'] = '移除主题 &quot;{topic}&quot; (广告牌: &quot;{board}&quot;)';
$txt['modlog_ac_modify'] = '编辑 &quot;{member}&quot; 发表的 &quot;{message}&quot;';
$txt['modlog_ac_merge'] = '合并主题成 &quot;{topic}&quot;';
$txt['modlog_ac_split'] = '分拆 &quot;{topic}&quot; 后建立的 &quot;{new_topic}&quot;';
$txt['modlog_ac_move'] = '移动 &quot;{topic}&quot; 从 &quot;{board_from}&quot; 到 &quot;{board_to}&quot; ';
$txt['modlog_ac_profile'] = '编辑 &quot;{member}&quot; 的个人资料';
$txt['modlog_ac_pruned'] = '移除 {days} 天以前的旧文章';
$txt['modlog_ac_news'] = '编辑新闻';
$txt['modlog_ac_clearlog_moderate'] = 'Cleared the moderation log';
$txt['modlog_ac_clearlog_admin'] = 'Cleared the administration log';
$txt['modlog_enter_comment'] = 'Enter Moderation Comment';
$txt['modlog_moderation_log'] = '板务记录';
$txt['modlog_moderation_log_desc'] = '下面列出板主的管理记录。<br /><strong >请注意:</strong> 记录在24小时之内不能移除。';
$txt['modlog_no_entries_found'] = '没有任何管理记录。';
$txt['modlog_remove'] = '移除';
$txt['modlog_removeall'] = '全部移除';
$txt['modlog_remove_selected_confirm'] = 'Are you sure you want to delete the selected log entries?';
$txt['modlog_remove_all_confirm'] = 'Are you sure you want to completely clear the log?';
$txt['modlog_go'] = '搜寻';
$txt['modlog_add'] = 'Add';
$txt['modlog_search'] = '快速搜寻';
$txt['modlog_by'] = '字段';
$txt['modlog_id'] = '<em>(ID:%1$d)</em>';

$txt['modlog_ac_add_warn_template'] = '新增警告样版: &quot;{template}&quot;';
$txt['modlog_ac_modify_warn_template'] = '编辑警告样版: &quot;{template}&quot;';
$txt['modlog_ac_delete_warn_template'] = '删除警告样版: &quot;{template}&quot;';

$txt['modlog_ac_ban'] = '增加禁止条件:';
$txt['modlog_ac_ban_remove'] = 'Removed ban triggers:';
$txt['modlog_ac_ban_trigger_member'] = ' <em>会员:</em> {member}';
$txt['modlog_ac_ban_trigger_email'] = ' <em>Email:</em> {email}';
$txt['modlog_ac_ban_trigger_ip_range'] = ' <em>IP:</em> {ip_range}';
$txt['modlog_ac_ban_trigger_hostname'] = ' <em>网域:</em> {hostname}';

$txt['modlog_admin_log'] = '管理记录';
$txt['modlog_admin_log_desc'] = '下面列出管理员的管理记录。<br />< strong>请注意:</strong> 记录在24小时之内不能移除。';
$txt['modlog_admin_log_no_entries_found'] = '目前系统管理的记录是空的。';
$txt['modlog_admin_log_gdpr_no_delete'] = '<strong>Also note:</strong> Entries for updates to the registration agreement and privacy policy cannot be removed from this log.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = '升级论坛到版本 {version}';
$txt['modlog_ac_install'] = '安装的版本 {version}';
$txt['modlog_ac_add_board'] = '新增广告牌: &quot;{board}&quot;';
$txt['modlog_ac_edit_board'] = '编辑广告牌: &quot;{board}&quot;';
$txt['modlog_ac_delete_board'] = '编辑广告牌: &quot;{boardname}&quot;';
$txt['modlog_ac_add_cat'] = '新增类别: &quot;{catname}&quot;';
$txt['modlog_ac_edit_cat'] = '编辑类别: &quot;{catname}&quot;';
$txt['modlog_ac_delete_cat'] = '删除类别: &quot;{catname}&quot;';

$txt['modlog_ac_delete_group'] = '删除群组: &quot;{group}&quot; ';
$txt['modlog_ac_add_group'] = '新增群组: &quot;{group}&quot;';
$txt['modlog_ac_edited_group'] = '编辑群组: &quot;{group}&quot;';
$txt['modlog_ac_added_to_group'] = '将会员 &quot;{member}&quot; 加入 {group}&quot; 群组';
$txt['modlog_ac_removed_from_group'] = '将会员 &quot;{member}&quot; 移除 &quot;{group}&quot; 群组';
$txt['modlog_ac_removed_all_groups'] = '将会员 &quot;{member}&quot; 移除所有的群组';

$txt['modlog_ac_agreement_updated'] = 'Updated the {language} registration agreement';
$txt['modlog_ac_policy_updated'] = 'Updated the {language} privacy policy';

$txt['modlog_ac_remind_member'] = '传送提示信给 &quot;{member}&quot; 以启用账号';
$txt['modlog_ac_approve_member'] = '核淮/启用 &quot;{member}&quot; 的号码';
$txt['modlog_ac_newsletter'] = '传送电子报';

$txt['modlog_ac_install_package'] = 'Installed new package: &quot;{package}&quot;, version {version}';
$txt['modlog_ac_upgrade_package'] = 'Upgraded package: &quot;{package}&quot; to version {version}';
$txt['modlog_ac_uninstall_package'] = 'Uninstalled package: &quot;{package}&quot;, version {version}';

// Restore topic.
$txt['modlog_ac_restore_topic'] = '从 &quot;{board}&quot; 回复主题 &quot;{topic}&quot;  到 &quot;{board_to}&quot;';
$txt['modlog_ac_restore_posts'] = '在广告牌 &quot;{board}&quot; , 从 &quot;{subject}&quot; 回复文章到 &quot;{topic}&quot;。';

$txt['modlog_parameter_guest'] = '<em>访客</em>';

$txt['modlog_ac_approve_attach'] = 'Approved &quot;{filename}&quot; in &quot;{message}&quot;';
$txt['modlog_ac_remove_attach'] = 'Removed unapproved &quot;{filename}&quot; in &quot;{message}&quot;';

// Handling reports on posts
$txt['modlog_report'] = 'report';
$txt['modlog_ac_close_report'] = 'Closed {report} on &quot;{message}&quot;';
$txt['modlog_ac_ignore_report'] = 'Disregarded {report} on &quot;{message}&quot;';
$txt['modlog_ac_open_report'] = 'Reopened {report} on &quot;{message}&quot;';
$txt['modlog_ac_unignore_report'] = 'Undone disregard of {report} on &quot;{message}&quot;';

// Handling reports on users
$txt['modlog_ac_close_user_report'] = 'Closed {report} on profile of {member}';
$txt['modlog_ac_ignore_user_report'] = 'Disregarded {report} on profile of {member}';
$txt['modlog_ac_open_user_report'] = 'Reopened {report} on profile of {member}';
$txt['modlog_ac_unignore_user_report'] = 'Undone disregard of {report} on profile of {member}';

// Poll stuff
$txt['modlog_ac_add_poll'] = 'Added a poll to &quot;{topic}&quot;';
$txt['modlog_ac_edit_poll'] = 'Edited the poll in &quot;{topic}&quot;';
$txt['modlog_ac_lock_poll'] = 'Locked voting in the poll in &quot;{topic}&quot;';
$txt['modlog_ac_remove_poll'] = 'Removed the poll from &quot;{topic}&quot;';
$txt['modlog_ac_reset_poll'] = 'Reset votes in the poll in &quot;{topic}&quot;';
$txt['modlog_ac_unlock_poll'] = 'Unlocked voting in the poll in &quot;{topic}&quot;';

?>