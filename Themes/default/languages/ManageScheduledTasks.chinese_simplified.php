<?php
// Version: 2.1.0; ManageScheduledTasks

$txt['scheduled_tasks_title'] = '工作排程';
$txt['scheduled_tasks_header'] = '所有的工作排程';
$txt['scheduled_tasks_name'] = '工作名称';
$txt['scheduled_tasks_next_time'] = '下次执行';
$txt['scheduled_tasks_regularity'] = '周期';
$txt['scheduled_tasks_enabled'] = '启动';
$txt['scheduled_tasks_run_now'] = '马上执行';
$txt['scheduled_tasks_save_changes'] = '储存变更';
$txt['scheduled_tasks_time_offset'] = '<strong>注意:</strong> 时间是以<em>主机时间</em>为主, 不是账号设定的时间。';
$txt['scheduled_tasks_were_run'] = '所有选择的工作都已经完成';
$txt['scheduled_tasks_were_run_errors'] = '所有选定的任务都已完成，但有一些错误：';

$txt['scheduled_tasks_na'] = '无';
$txt['scheduled_task_auto_optimize'] = '最佳化数据库';
$txt['scheduled_task_desc_auto_optimize'] = '最佳化数据库以解决碎片问题。';
$txt['scheduled_task_daily_maintenance'] = '每日维护';
$txt['scheduled_task_desc_daily_maintenance'] = '运行必要的每日例行维护 - 不应该停用。';
$txt['scheduled_task_daily_digest'] = '每日通知摘要';
$txt['scheduled_task_desc_daily_digest'] = 'Email 每日摘要给订阅者';
$txt['scheduled_task_weekly_digest'] = '每周通知摘要';
$txt['scheduled_task_desc_weekly_digest'] = 'Email 每周摘要给订阅者';
$txt['scheduled_task_fetchSMfiles'] = '取得 Simple Machines 的档案';
$txt['scheduled_task_desc_fetchSMfiles'] = '检索 javascript 档案包含更新通知和其它信息。';
$txt['scheduled_task_birthdayemails'] = '传送生日卡';
$txt['scheduled_task_desc_birthdayemails'] = '传送生日卡给寿星。';
$txt['scheduled_task_weekly_maintenance'] = '每周维护';
$txt['scheduled_task_desc_weekly_maintenance'] = '运行必要的每周例行维护 - 不应该停用。';
$txt['scheduled_task_paid_subscriptions'] = '付费状态的检查';
$txt['scheduled_task_desc_paid_subscriptions'] = '通知必要的付费提醒和移除过期的付费会员。';
$txt['scheduled_task_remove_topic_redirect'] = '移除移动：重定向主题';
$txt['scheduled_task_desc_remove_topic_redirect'] = '删除移动通知创建时指定的主题通知。';
$txt['scheduled_task_remove_temp_attachments'] = '删除临时附件文件';
$txt['scheduled_task_desc_remove_temp_attachments'] = '删除在将文件附加到一个因为任何原因未重命名或删除的帖子时创建的临时文件。';

$txt['scheduled_task_reg_starting'] = '开始于 %1$s';
$txt['scheduled_task_reg_repeating'] = '每 %1$d %2$s 重复';
$txt['scheduled_task_reg_unit_m'] = '分钟';
$txt['scheduled_task_reg_unit_h'] = '小时';
$txt['scheduled_task_reg_unit_d'] = '天';
$txt['scheduled_task_reg_unit_w'] = '周';

$txt['scheduled_task_edit'] = '编辑工作排程';
$txt['scheduled_task_edit_repeat'] = '重复任务每';
$txt['scheduled_task_edit_interval'] = '间隔';
$txt['scheduled_task_edit_start_time'] = '开始时间';
$txt['scheduled_task_edit_start_time_desc'] = '时:分 (24小时制)';
$txt['scheduled_task_time_offset'] = '请注意, 开始时间应该是相对于主机时间的偏移值。目前主机时间是: %1$s';

$txt['scheduled_view_log'] = '检视记录';
$txt['scheduled_log_empty'] = '目前没有任何工作记录。';
$txt['scheduled_log_time_run'] = '开始时间';
$txt['scheduled_log_time_taken'] = '花费时间';
$txt['scheduled_log_time_taken_seconds'] = '%1$d 秒';
$txt['scheduled_log_empty_log'] = '清空记录';
$txt['scheduled_log_empty_log_confirm'] = '您确定要完全清除日志吗？';

$txt['scheduled_task_remove_old_drafts'] = '删除旧的草稿';
$txt['scheduled_task_desc_remove_old_drafts'] = '删除管理面板中在草稿设置中定义的天数过旧的草案。';

$txt['scheduled_task_prune_log_topics'] = 'Mark Boards as Read';
$txt['scheduled_task_desc_prune_log_topics'] = 'Marks boards as read for users inactive longer than the number of days defined in the <a href="%1$s?action=admin;area=logs;sa=settings#markread_title">Read Logs settings</a> in the admin panel.';

$txt['cron_is_real_cron'] = 'Disable JavaScript-based method of running scheduled tasks.';
$txt['cron_is_real_cron_desc'] = '<strong>Do not check this box</strong> unless you are <strong><u>sure</u></strong> that you have configured another method to tell your server to run SMF\'s cron.php on a regular basis.';
$txt['cron_not_working'] = 'No scheduled tasks have been run in the last 24 hours. Re-enabling JavaScript-based method of running scheduled tasks.';

?>