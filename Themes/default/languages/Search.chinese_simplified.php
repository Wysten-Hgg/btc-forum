<?php
// Version: 2.1.0; Search

$txt['set_parameters'] = '设定搜寻参数';
$txt['choose_board'] = '选择要搜寻的版块, 或搜寻全部';
$txt['all_words'] = '包含全部的字词';
$txt['any_words'] = '包含任何一个字词';
$txt['by_user'] = '按照会员名称';

$txt['search_post_age'] = '帖子日期';
$txt['search_between'] = '这段时间之内';
$txt['search_and'] = '天到';
$txt['search_options'] = '选项';
$txt['search_show_complete_messages'] = '以帖子方式显示';
$txt['search_subject_only'] = '只搜寻主题标题';
$txt['search_relevance'] = '关联性';
$txt['search_date_posted'] = '发表日期';
$txt['search_order'] = '搜寻顺序';
$txt['search_orderby_relevant_first'] = '关联性的结果优先';
$txt['search_orderby_large_first'] = '最多回覆的主题优先';
$txt['search_orderby_small_first'] = '最少回覆的主题优先';
$txt['search_orderby_recent_first'] = '最新的主题优先';
$txt['search_orderby_old_first'] = '最旧的主题优先';
$txt['search_visual_verification_label'] = '验证码';
$txt['search_visual_verification_desc'] = '请输入图片的代码以使用搜寻功能。';

$txt['search_specific_topic'] = '只搜寻主题内的帖子';

$txt['mods_cat_search'] = '搜寻';
$txt['groups_search_posts'] = '可以使用搜寻功能的群组';
$txt['search_results_per_page'] = '每页显示的搜寻结果';
$txt['search_weight_frequency'] = '主题内的帖子';
$txt['search_weight_age'] = '最后一篇帖子的日期';
$txt['search_weight_length'] = '主题内的帖子数量';
$txt['search_weight_subject'] = '主题的标题';
$txt['search_weight_first_message'] = '主题的第一篇帖子';
$txt['search_weight_sticky'] = '置顶的主题';

$txt['search_settings_desc'] = '这里可以让您改变基本的搜寻功能。';
$txt['search_settings_title'] = '搜寻功能 - 设定';

$txt['search_weights_desc'] = '这里可以让您改变搜寻出来的结果。 ';
$txt['search_weights_title'] = '搜寻 - 相关结果';
$txt['search_weights_total'] = '总共';
$txt['search_weights_save'] = '保存';

$txt['search_method_desc'] = '这里可以让您选择搜寻的方法。';
$txt['search_method_title'] = '搜寻 - 方法';
$txt['search_method_save'] = '保存';
$txt['search_method_messages_table_space'] = '帖子占用的资料库容量';
$txt['search_method_messages_index_space'] = '索引帖子占用的资料库容量';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'Fulltext 索引';
$txt['search_method_no_index_exists'] = '不存在';
$txt['search_method_fulltext_create'] = '建立 fulltext 索引';
$txt['search_method_fulltext_cannot_create'] = '无法建立 fulltext 因为帖子的长度超过 65,535 或资料表类型不是 MyISAM';
$txt['search_method_index_already_exists'] = '已经建立';
$txt['search_method_fulltext_remove'] = '移除 fulltext 索引';
$txt['search_method_index_partial'] = '部分建立';
$txt['search_index_custom_resume'] = '继续';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = '如果要使用 fulltext 搜寻功能，您必须先建立 fulltext 索引！';

$txt['search_index'] = '搜寻索引';
$txt['search_index_none'] = '没有索引';
$txt['search_index_custom'] = '自定索引';
$txt['search_index_sphinx'] = 'Sphinx';
$txt['search_index_sphinx_desc'] = '管理后台只允许切换搜寻索引。利用 sphinx_config.php 工具以进一步的调校 Sphinx 设定。';
$txt['search_index_label'] = '索引';
$txt['search_index_size'] = '大小';
$txt['search_index_create_custom'] = '建立自定索引';
$txt['search_index_custom_remove'] = '移除自设索引';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = '要使用自定的搜寻索引, 您必须先建立自定的索引!!';

$txt['search_force_index'] = '强制使用搜寻索引';
$txt['search_match_words'] = '包含全部字词';
$txt['search_max_results'] = '结果的显示数量';
$txt['search_max_results_disable'] = '(0=不限制)';
$txt['search_floodcontrol_time'] = '同一会员两次搜寻的时间间隔';
$txt['search_floodcontrol_time_desc'] = '(0=不限制, 单位: 秒)';

$txt['search_create_index'] = '建立索引';
$txt['search_create_index_why'] = '为什么要建立搜寻索引??';
$txt['search_create_index_start'] = '建立';
$txt['search_predefined'] = '默认的设定';
$txt['search_predefined_small'] = '小空间的索引';
$txt['search_predefined_moderate'] = '中空间的索引';
$txt['search_predefined_large'] = '大空间的索引';
$txt['search_create_index_continue'] = '继续';
$txt['search_create_index_not_ready'] = 'SMF 目前正在建立帖子的搜寻索引。为了避免负荷服务器, 进度已被暂停。几秒钟后它会自动继续。如果没有继续, 请点下面的继续按钮。';
$txt['search_create_index_progress'] = '进度';
$txt['search_create_index_done'] = '自定的搜寻索引已经建立完成!!';
$txt['search_create_index_done_link'] = '继续';
$txt['search_double_index'] = '在帖子资料表内有两个索引。为了提高效率，建议您移除其中一项。';

$txt['search_error_indexed_chars'] = '错误的索引字数。高效能的索引最少要三个索引字。';
$txt['search_error_max_percentage'] = '错误的跳过字词的百分比。请用高于 5%。';
$txt['error_string_too_long'] = '搜寻字串必须少于 %1$d 个字';

$txt['search_adjust_query'] = '改变搜寻设定';
$txt['search_warning_ignored_word'] = 'The following term has been ignored in your search because it is too short';
$txt['search_warning_ignored_words'] = 'The following terms have been ignored in your search because they are too short';
$txt['search_adjust_submit'] = '重新搜寻';
$txt['search_did_you_mean'] = '您是不是要找';

$txt['search_example'] = '<em>范例:</em> 林依晨 "我的秘密花园" -偶像剧';

$txt['search_engines_description'] = '在这里您可以决定您要多么仔细地追踪检索论坛的搜寻引擎, 以及翻阅搜寻引擎的记录.';
$txt['spider_mode'] = '搜寻引擎追踪等级<div class="smalltext">注意追踪等级愈高, 对服务器的资源需求量愈多。</div>';
$txt['spider_mode_note'] = 'Note that logging of every spider action only occurs if tracking is set to either "moderate" or "aggressive". Detail of every spider\'s action is only logged if tracking is set to "aggressive".';
$txt['spider_mode_off'] = '停用';
$txt['spider_mode_standard'] = '标准 - 记录机器人最少量的活动。';
$txt['spider_mode_high'] = '高 - 提供更准确的统计。';
$txt['spider_mode_vhigh'] = '非常高 - 如同&quot;高&quot;, 并且记录每页的浏览资料。';
$txt['spider_settings_desc'] = '这里您可以变更机器人追踪的设定。注意: 假如您想要启用自动清理点阅的记录档, 您可以<a href="%1$s">点我设定</a>';

$txt['spider_group'] = '套用群组的限制权限<div class="smalltext">启用这个可以阻止机器人索引一些页面。</div>';
$txt['spider_group_note'] = 'To enable you to stop spiders indexing some pages.';
$txt['spider_group_none'] = '停用';

$txt['show_spider_online'] = '在线上名单上显示机器人';
$txt['show_spider_online_no'] = '无';
$txt['show_spider_online_summary'] = '显示机器人数量';
$txt['show_spider_online_detail'] = '显示机器人详情';
$txt['show_spider_online_detail_admin'] = '显示机器人详情 - 只有管理员';

$txt['spider_name'] = '机器人名称';
$txt['spider_last_seen'] = '最近';
$txt['spider_last_never'] = '从未';
$txt['spider_agent'] = '使用者代理程式';
$txt['spider_ip_info'] = 'IP';
$txt['spiders_add'] = '新增机器人';
$txt['spiders_edit'] = '编辑机器人';
$txt['spiders_remove_selected'] = '移除选择的机器人';
$txt['spider_remove_selected_confirm'] = '您确定要移除这些机器人吗？-n-所有相关的统计也会被删除！';
$txt['spiders_no_entries'] = '没有机器人的配置。';

$txt['add_spider_desc'] = '您可以在这页编辑机器人的分类参数。如果一名访客的 user agent 或 IP 地址符合以下资料, 它会被看待成搜寻引擎, 将依照论坛的设定被追踪。';
$txt['spider_name_desc'] = '机器人的参考名称。';
$txt['spider_agent_desc'] = '机器人对应的 user agent。';
$txt['spider_ip_info_desc'] = '机器人的 IP 清单, IP 之间以逗号分隔。';

$txt['spider'] = '机器人';
$txt['spider_time'] = '时间';
$txt['spider_viewing'] = '正在浏览';
$txt['spider_logs_empty'] = '目前搜寻机器人的记录是空的';
$txt['spider_logs_info'] = 'Note that logging of every spider action only occurs if tracking is set to either "moderate" or "aggressive". Detail of every spider\'s action is only logged if tracking is set to "aggressive".';
$txt['spider_disabled'] = '停用';
$txt['spider_log_empty_log'] = 'Clear Log';
$txt['spider_log_empty_log_confirm'] = 'Are you sure you want to completely clear the log';

$txt['spider_logs_delete'] = '删除项目';
$txt['spider_logs_delete_older'] = '删除项目, 旧于';
$txt['spider_logs_delete_day'] = '天。';
$txt['spider_logs_delete_submit'] = '删除';

$txt['spider_stats_delete_older'] = 'Delete all spider statistics from spiders not seen in %1$s days.';

// Don't use entities in the below string.
$txt['spider_logs_delete_confirm'] = '您确定要清空所有的记录档吗？';

$txt['spider_stats_select_month'] = '选择月份';
$txt['spider_stats_page_hits'] = '页面点击';
$txt['spider_stats_no_entries'] = '没有机器人的统计存在。';

?>