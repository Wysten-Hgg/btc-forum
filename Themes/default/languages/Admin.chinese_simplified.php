<?php
// Version: 2.1.3; Admin

global $settings, $scripturl;

$txt['settings_saved'] = '设置已成功保存';
$txt['settings_not_saved'] = '由于%1$s，您的更改未保存';

$txt['admin_boards'] = '版块与分区';
$txt['admin_users'] = '用户';
$txt['admin_newsletters'] = '邮件公告';
$txt['admin_edit_news'] = '站内公告';
$txt['admin_groups'] = '用户组';
$txt['admin_members'] = '管理用户';
$txt['admin_members_list'] = '下面列出了目前在您的论坛上注册的所有用户。';
$txt['admin_next'] = '继续';
$txt['admin_censored_words'] = '过滤词汇';
$txt['admin_censored_where'] = '将要过滤的词语放在左侧，然后将要替换的内容放在右侧。';
$txt['admin_censored_desc'] = '由于论坛的公共性质，您可能希望论坛用户不要发表包含某些词语的内容。请在下面输入要被过滤的词语。<br>清除文本框以删除对对应词语的过滤。';
$txt['admin_reserved_names'] = '保留名称';
$txt['admin_modifications'] = '修改设置';
$txt['admin_server_settings'] = '服务器设置';
$txt['admin_reserved_set'] = '设置保留名称';
$txt['admin_reserved_line'] = '一行一个保留词。';
$txt['admin_basic_settings'] = '本页面中包含论坛中的最基本的设置选项。请小心设置这些选项以免论坛无法正常工作。';
$txt['admin_maintain'] = '启用维护模式';
$txt['admin_title'] = '论坛名称';
$txt['cookie_name'] = 'Cookie名称';
$txt['admin_webmaster_email'] = '系统电子邮箱地址';
$txt['cachedir'] = '缓存目录';
$txt['admin_news'] = '启用站内公告';
$txt['admin_manage_members'] = '用户';
$txt['admin_main'] = '首页';
$txt['admin_config'] = '配置';
$txt['admin_version_check'] = '版本检查详情';
$txt['admin_smffile'] = 'SMF文件';
$txt['admin_smfpackage'] = 'SMF插件';
$txt['admin_logoff'] = '关闭后台管理';
$txt['admin_maintenance'] = '维护';
$txt['admin_credits'] = '鸣谢';
$txt['admin_agreement'] = '要求新用户接受注册协议';
$txt['admin_agreement_minor_edit'] = '这是次要的更改。';
$txt['reset_agreement_desc'] = '这将强制全部成员重新阅读并接受注册许可协议以继续使用论坛。';
$txt['admin_privacy_policy'] = '要求新用户接受隐私协议';
$txt['reset_privacy_policy_desc'] = '这将强制全部成员重新阅读并接受注册许可协议以继续使用论坛。';
$txt['admin_agreement_info'] = '最后更新于 %1$s';
$txt['admin_agreement_default'] = '默认';
$txt['admin_agreement_select_language'] = '要编辑的语言';
$txt['admin_agreement_select_language_change'] = '更改';
$txt['admin_agreement_not_saved'] = '使用协议的更改尚未保存，可能是因为文件权限设置不正确。';
$txt['admin_delete_members'] = '删除所选用户';
$txt['admin_repair'] = '修复所有版块和主题';
$txt['admin_main_welcome'] = '这是您的“%1$s”。在这里，您可以进行设置编辑、论坛维护、日志查看、插件安装、主题管理等各类与论坛有关的操作。<br><br>如果您有任何问题，请查看“支持与制作团队”页面。如问题仍然无法解决，请随时向我们<a href="https://www.simplemachines.org/community/index.php" target="_blank" rel="noopener">寻求解决问题的帮助</a>。<br>您还可以通过点击<span class="main_icons help" title="%3$s"></span>符号来获得相关功能的问题的更多信息。';
$txt['admin_news_desc'] = 'Please place one news item per box. <abbr title="Bulletin Board Code">BBC</abbr> <span title="Because everyone loves brackets!">tags</span>, such as <span class="monospace">[b]</span>, <span class="monospace">[i]</span> and <span class="monospace">[u]</span>, are allowed in your news, as well as smileys. Clear a news item\'s text box to remove it.';
$txt['administrators'] = '论坛管理员';
$txt['admin_reserved_desc'] = '“保留名称”是指不能被用户注册为用户名或用作昵称的词语。在提交之前，从页面下方选择要使用的选项。';
$txt['admin_match_whole'] = '仅匹配完整名称。如果未选中该项，则只要包含保留名称词就会被禁止。';
$txt['admin_match_case'] = '考虑大小写。若如果未选中该项，则不区分大小写。';
$txt['admin_check_user'] = '检查用户名。';
$txt['admin_check_display'] = '检查昵称。';
$txt['admin_fader_delay'] = '站内公告轮播间隔时间（以毫秒为单位）';
$txt['additional_options_collapsable'] = '启用可折叠的帖子附加选项';
$txt['guest_post_no_email'] = '游客发帖时不要求提供email';
$txt['zero_for_no_limit'] = '（设置为0表示无限制）';
$txt['zero_to_disable'] = '（设置为0来禁用该选项）';
$txt['dont_show_attach_under_post'] = '若附件已嵌入帖子正文，则不再显示在帖子下方。';
$txt['dont_show_attach_under_post_sub'] = '如果不希望附件出现两次，请启用此选项。嵌入在帖子正文中的附件仍然在附件限制之内，并且仍可以像普通附件一样对待。';

$txt['admin_backup_fail'] = '无法备份Settings.php，请确保Settings_Bak.php存在且可写。';
$txt['registration_agreement'] = '注册协议';
$txt['registration_agreement_desc'] = '当用户在此论坛上注册帐户时，必须先接受此使用协议，然后用户才能继续注册。';
$txt['privacy_policy'] = '隐私政策';
$txt['privacy_policy_desc'] = '隐私政策是你对你的用户关于你将如何使用他们的个人数据的承诺，将在用户注册论坛时显示且用户必须同意此政策才能继续注册。';
$txt['errors_list'] = '论坛错误列表';
$txt['errors_found'] = '我们在论坛中发现以下的错误';
$txt['errors_fix'] = '是否要尝试修复这些错误？';
$txt['errors_do_recount'] = '所有错误都已修复，并创建了一个抢救区域。请点击下面的按钮重新统计一些重要的统计数据。';
$txt['errors_recount_now'] = '重置统计数据';
$txt['errors_fixing'] = '修复论坛错误';
$txt['errors_fixed'] = '所有错误都已修复。请检查已创建的分区、版块和主题，以决定如何进一步修复。';
$txt['attachments_avatars'] = '附件和头像';
$txt['attachments_desc'] = '在该页面，您可以管理所有附件，也可以按大小和日期删除附件。附件的统计信息也显示在了页面下方。';
$txt['attachment_stats'] = '附件文件统计';
$txt['attachment_integrity_check'] = '附件完整性检查';
$txt['attachment_integrity_check_desc'] = '该功能将检查数据库中列出的附件及其文件名的完整性和大小，并在必要时修复遇到的错误。';
$txt['attachment_check_now'] = '立即检查';
$txt['attachment_pruning'] = '附件清理';
$txt['attachment_pruning_message'] = '删除后用以提示用户的消息';
$txt['attachment_pruning_warning'] = '您确定要删除这些附件吗？\n该操作无法撤销！';

$txt['attachment_total'] = '附件总数';
$txt['attachmentdir_size'] = '所有附件目录的总大小';
$txt['attachmentdir_size_current'] = '当前附件目录的总大小';
$txt['attachmentdir_files_current'] = '当前附件目录中的文件总数';
$txt['attachment_space'] = '附件目录可用总空间';
$txt['attachment_files'] = '附件目录剩余文件总数';

$txt['attachment_log'] = '附件日志';
$txt['attachment_remove_old'] = '删除该天数前上传的附件';
$txt['attachment_remove_size'] = '删除大于该文件大小的附件';
$txt['attachment_name'] = '附件名称';
$txt['attachment_file_size'] = '文件大小';
$txt['attachmentdir_size_not_set'] = '当前未设置最大目录大小';
$txt['attachmentdir_files_not_set'] = '当前未设置目录文件限制';
$txt['attachment_delete_admin'] = '【附件已由管理员删除】';
$txt['live'] = 'Simple Machines 官方公告';
$txt['remove_all'] = '清除日志';
$txt['agreement_not_writable'] = '警告：没有权限写入agreement.txt，您所做的任何更改都不会被保存。';

$txt['version_check_desc'] = '这里显示了您所安装的文件与最新版本文件的版本号。如果有过期文件，您应该尽快下载并升级到最新版本。下载网址：<a href="https://www.simplemachines.org/" target="_blank" rel="noopener">www.simplemachines.org</a>（英文）。';
$txt['version_check_more'] = '（展开详情）';

$txt['smf_news_cant_connect'] = '无法接收到simplemachines.org的最新公告。';

$txt['manage_calendar'] = '日历';
$txt['manage_search'] = '搜索';

$txt['smileys_manage'] = '表情与消息图标';
$txt['theme_admin'] = '主题和布局';
$txt['registration_center'] = '注册';

$txt['viewmembers_online'] = '最后在线时间';
$txt['viewmembers_today'] = '今天';
$txt['viewmembers_day_ago'] = '天前';
$txt['viewmembers_days_ago'] = '天前';

$txt['display_name'] = '昵称';
$txt['email_address'] = '电子邮件地址';
$txt['ip_address'] = 'IP地址';
$txt['member_id'] = 'ID';

$txt['unknown'] = '未知';

// argument(s): HTTP_REFERER (if applicable), HTTP_USER_AGENT, ip address
$txt['security_wrong'] = 'Administration login attempt!
Referrer: %1$s
User agent: %2$s
IP: %3$s';

$txt['email_as_html'] = '以HTML格式发送（使用此功能，您就可以在电子邮件中添加普通HTML）';
$txt['email_parsed_html'] = '在此邮件中添加“&lt;br&gt;”和&“amp;nbsp;”。';
// argument(s): $scripturl
$txt['email_variables'] = '在消息中你可以使用一些&quot;变量&quot;，点击<a href="%1$s?action=helpadmin;help=email_members" onclick="return reqOverlayDiv(this.href);" class="help">此处</a>获取更多信息。';
$txt['email_force'] = 'Send this to members even if they have chosen not to receive announcements.<br><span class="alert">This should only be used in exceptional circumstances. Using this to send promotional or other non-essential email messages violates many countries\' privacy and anti-spam laws.</span>';
$txt['email_as_pms'] = '通过私信发送到这些用户组。';
$txt['email_continue'] = '继续';
$txt['email_done'] = '已完成。';

$txt['warnings'] = '警告';
$txt['warnings_desc'] = '此系统允许管理员和版主给与用户警告，并可在警告级别上升时自动封禁用户的指定权限。要充分利用此系统，应启用“帖子审核”。';

$txt['ban_title'] = '封禁列表';

$txt['ban_errors_detected'] = '保存或编辑封禁列表时发生以下错误';
$txt['ban_description'] = '在此选项中，您可以通过封禁IP、主机名、用户名或Email地址，来阻止某些用户使用论坛。';
$txt['ban_add_new'] = '添加封禁';
$txt['ban_banned_entity'] = '封禁目标';
$txt['ban_on_ip'] = '封禁IP（例如：192.168.10-20.*）';
$txt['ban_on_hostname'] = '封禁主机名（例如：*.mil）';
$txt['ban_on_email'] = '封禁Email地址（例如：*@badsite.com）';
$txt['ban_on_username'] = '封禁用户名';
$txt['ban_notes'] = '注释';
$txt['ban_restriction'] = '限制';
$txt['ban_full_ban'] = '完全封禁';
$txt['ban_partial_ban'] = '部分封禁';
$txt['ban_cannot_post'] = '禁止发帖';
$txt['ban_cannot_register'] = '禁止注册';
$txt['ban_cannot_login'] = '禁止登陆';
$txt['ban_add'] = '添加';
$txt['ban_edit_list'] = '封禁列表';
$txt['ban_type'] = '封禁类型';
$txt['ban_days'] = '天';
$txt['ban_will_expire_within'] = '封禁过期时间：';
$txt['ban_added'] = '已添加';
$txt['ban_expires'] = '过期';
$txt['ban_hits'] = '触发次数';
$txt['ban_actions'] = '动作';
$txt['ban_expiration'] = '封禁期限';
$txt['ban_reason_desc'] = '封禁理由（封禁用户可查看到该理由）';
$txt['ban_notes_desc'] = '填写注释以方便其他管理员知晓相关情况。';
$txt['ban_remove_selected'] = '删除所选项';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = '您确定要取消所选项的封禁吗？';
$txt['ban_modify'] = '修改';
$txt['ban_name'] = '封禁名称';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = '修改封禁';
$txt['ban_add_notes'] = '<strong>提示</strong>：创建上述封禁之后，你还可以继续创建触发器，例如IP地址，主机名和邮箱地址。';
$txt['ban_expired'] = '已过期/已禁用';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = '未选择限制。';

$txt['ban_triggers'] = '触发器';
$txt['ban_add_trigger'] = '添加封禁触发器';
$txt['ban_add_trigger_submit'] = '添加';
$txt['ban_edit_trigger'] = '修改';
$txt['ban_edit_trigger_title'] = '修改封禁触发器';
$txt['ban_edit_trigger_submit'] = '修改';
$txt['ban_remove_selected_triggers'] = '删除所选封禁触发器';
$txt['ban_no_entries'] = '目前暂无生效封禁。';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = '您确定要删除所选的封禁触发器吗？';
$txt['ban_trigger_browse'] = '浏览封禁触发器';
$txt['ban_trigger_browse_description'] = '此处按IP地址、主机名、Email地址，用户名分组来显示所有封禁。';

$txt['ban_log'] = '封禁日志';
$txt['ban_log_description'] = '封禁日志记录了所有被封禁用户进入论坛的所有尝试（仅限“完全封禁”和“禁止注册”类型的封禁）。';
$txt['ban_log_no_entries'] = '封禁日志目前没有内容。';
$txt['ban_log_ip'] = 'IP地址';
$txt['ban_log_email'] = 'Email地址';
$txt['ban_log_member'] = '用户';
$txt['ban_log_date'] = '日期';
$txt['ban_log_remove_all'] = '清除日志';
$txt['ban_log_remove_all_confirm'] = '您确定要删除所有封禁日志的内容吗？';
$txt['ban_log_remove_selected'] = '删除所选项';
$txt['ban_log_remove_selected_confirm'] = '您确定要删除所有选定的封禁日志内容吗？';
$txt['ban_no_triggers'] = '目前暂无封禁触发器';

$txt['settings_not_writable'] = '由于没有Settings.php的写入权限，这些设置无法被更改。';

$txt['maintain_title'] = '论坛维护';
$txt['maintain_info'] = '使用这些工具优化数据表、执行备份、检查错误以及清理版块。';
$txt['maintain_sub_database'] = '数据库';
$txt['maintain_sub_routine'] = '例行程序';
$txt['maintain_sub_members'] = '用户';
$txt['maintain_sub_topics'] = '主题/帖子';
$txt['maintain_done'] = '维护任务“%1$s”已执行成功。';
$txt['maintain_no_errors'] = '恭喜：未发现任何错误！感谢您执行了检查！';

$txt['maintain_tasks'] = '计划任务';
$txt['maintain_tasks_desc'] = '管理SMF设置的所有计划任务。';
$txt['scheduled_tasks_settings'] = '设置';
$txt['scheduled_tasks_settings_desc'] = '控制计划任务运行方式的选项';

$txt['scheduled_log'] = '任务日志';
$txt['scheduled_log_desc'] = '此日志记录了论坛上已执行过的所有计划任务。';
$txt['admin_log'] = '管理日志';
$txt['admin_log_desc'] = '此日志记录了论坛管理员已执行的管理任务。';
$txt['moderation_log'] = '版主日志';
$txt['moderation_log_desc'] = '此日志记录了论坛版主已执行的管理任务。';
$txt['spider_log_desc'] = '此日志记录了搜索引擎爬虫在您论坛上的活动。';
$txt['log_settings_desc'] = '这些选项可以配置论坛日志记录的工作方式。';
$txt['modlog_enabled'] = '启用版主日志';
$txt['adminlog_enabled'] = '启用管理日志';
$txt['userlog_enabled'] = '启用用户账号编辑日志';

$txt['mailqueue_title'] = '邮件';

$txt['db_error_send'] = '当数据库连接错误时发送电子邮件';
$txt['db_persist'] = '采用持久连接';
$txt['ssi_db_user'] = '用于SSI模式下的数据库用户名';
$txt['ssi_db_passwd'] = '用于SSI模式下的数据库密码';

$txt['default_language'] = '默认论坛语言';

$txt['maintenance_subject'] = '维护页面标题';
$txt['maintenance_message'] = '维护页面消息';

$txt['errorlog_desc'] = '错误日志会跟踪论坛中的每一个错误。要从数据库中删除错误，请选中相应复选框，然后点击页面下方的%1$s按钮。';
$txt['errorlog_no_entries'] = '目前暂无错误日志。';

$txt['theme_settings'] = '主题设置';
$txt['theme_current_settings'] = '当前主题';

$txt['dvc_your'] = '您的版本';
$txt['dvc_current'] = '当前版本';
$txt['dvc_sources'] = '程序文件';
$txt['dvc_default'] = '默认模板';
$txt['dvc_templates'] = '当前模板';
$txt['dvc_languages'] = '语言文件';
$txt['dvc_tasks'] = '后台任务';

$txt['smileys_default_set_for_theme'] = '选择该主题的默认表情包';
$txt['smileys_no_default'] = '（使用全局默认表情包）';

$txt['censor_test'] = '测试过滤词';
$txt['censor_test_save'] = '测试';
$txt['censor_case'] = '过滤时不区分大小写';
$txt['censor_whole_words'] = '仅全词匹配（针对英文单词）。';

$txt['admin_confirm_password'] = '（确认）';
$txt['admin_incorrect_password'] = '密码不正确';

$txt['age'] = '用户年龄';
$txt['activation_status'] = '激活状态';
$txt['activated'] = '已激活';
$txt['not_activated'] = '未激活';
$txt['primary'] = '主用户组';
$txt['additional'] = '附加用户组';
$txt['wild_cards_allowed'] = '允许使用通配符“*”和“?”';
$txt['search_for'] = '搜索用户';
$txt['search_match'] = '匹配';
$txt['member_part_of_these_membergroups'] = '隶属用户组';
$txt['membergroups'] = '用户组';
$txt['confirm_delete_members'] = '您确定要删除这些用户组？';

$txt['support_credits_title'] = '支持与制作团队';
$txt['support_title'] = '支持信息';
$txt['support_versions_current'] = '最新SMF版本';
$txt['support_versions_forum'] = '当前安装版本';
$txt['support_versions_db'] = '%1$s 版本';
$txt['support_versions_db_engine'] = '%1$s 数据库引擎';
$txt['support_versions_server'] = 'Web服务器软件';
$txt['support_versions_gd'] = 'GD 版本';
$txt['support_versions_imagemagick'] = 'ImageMagick 版本';
$txt['support_versions'] = '版本信息';
$txt['support_resources'] = '支持资源';
$txt['support_resources_p1'] = '我们的<a href="%1$s">在线手册（暂时为英文）</a>提供了SMF的主要参考资料。SMF在线手册涵盖了诸多文档，以帮助回答支持问题，解释<a href="%2$s">功能</a>、<a href="%3$s">设置</a>、<a href="%4$s">主题</a>、<a href="%5$s">插件</a>等。在线手册详细记录了SMF的每个部分，并可及时解决大多数问题。';
$txt['support_resources_p2'] = '如果您在“在线手册”中找不到问题的答案，您可能需要搜索我们的<a href="%1$s">支持社区</a>，亦或者在其中的<a href="%2$s">英语</a>或许多<a href="%3$s">国际化支持版块</a>中寻求帮助。SMF支持社区可用于寻求<a href="%4$s">支持</a>、<a href="%5$s">定制</a>以及其他事务，例如讨论SMF、查找主机提供商，甚至是与其他论坛管理员讨论管理问题。';

$txt['membergroups_members'] = '正式成员';
$txt['membergroups_guests'] = '游客';
$txt['membergroups_add_group'] = '添加用户组';
$txt['membergroups_permissions'] = '权限';

$txt['permitgroups_restrict'] = '受限';
$txt['permitgroups_standard'] = '标准';
$txt['permitgroups_moderator'] = '版主';
$txt['permitgroups_maintenance'] = '维护';
$txt['permitgroups_inherit'] = '继承';

$txt['confirm_delete_attachments_all'] = '您确定要删除所有的附件吗?';
$txt['confirm_delete_attachments'] = '您确定要删除已选择的附件吗?';
$txt['attachment_manager_browse_files'] = '浏览文件';
$txt['attachment_manager_repair'] = '维护';
$txt['attachment_manager_avatars'] = '头像';
$txt['attachment_manager_attachments'] = '附件';
$txt['attachment_manager_thumbs'] = '缩略图';
$txt['attachment_manager_last_active'] = '最后登录';
$txt['attachment_manager_member'] = '用户';
$txt['attachment_manager_avatars_older'] = '删除该天数内未登录用户的头像';
$txt['attachment_manager_total_avatars'] = '总头像文件数';

$txt['attachment_manager_avatars_no_entries'] = '目前没有头像文件。';
$txt['attachment_manager_attachments_no_entries'] = '目前没有附件。';
$txt['attachment_manager_thumbs_no_entries'] = '目前没有缩略图。';

$txt['attachment_manager_settings'] = '附件设置';
$txt['attachment_manager_avatar_settings'] = '头像设置';
$txt['attachment_manager_browse'] = '浏览文件';
$txt['attachment_manager_maintenance'] = '文件维护';
$txt['attachment_manager_save'] = '保存';

$txt['attachmentEnable'] = '附件模式';
$txt['attachmentEnable_deactivate'] = '禁止附件';
$txt['attachmentEnable_enable_all'] = '允许所有附件';
$txt['attachmentEnable_disable_new'] = '禁止新附件';
$txt['attachmentCheckExtensions'] = '检查附件扩展名';
$txt['attachmentExtensions'] = '附件扩展名白名单';
$txt['attachmentShowImages'] = '将图片附件直接显示在帖子正文中';
$txt['attachmentUploadDir'] = '附件目录';
$txt['attachmentUploadDir_multiple_configure'] = '管理附件目录';
$txt['attachmentDirSizeLimit'] = '最大附件目录空间';
$txt['attachmentPostLimit'] = '帖子最大附件大小';
$txt['attachmentSizeLimit'] = '附件单文件最大大小';
$txt['attachmentNumPerPostLimit'] = '帖子最大附件数';
$txt['attachment_img_enc_warning'] = '目前既未安装GD模块，也未安装IMagick或MagickWand扩展。因此无法对图像重新编码。';
$txt['attachment_ini_max'] = 'php.ini的最大允许值:%1$s';
$txt['attachment_image_reencode'] = '重新编码具有潜在危险的图片附件';
$txt['attachment_image_paranoid_warning'] = '严格安全检测可能导致大量正常附件无法上传。';
$txt['attachment_image_paranoid'] = '对上传的图片附件执行严格安全检测';
$txt['attachmentThumbnails'] = '自动调整图片在帖子中显示时的文件大小';
$txt['attachment_thumb_png'] = '将缩略图以PNG格式保存';
$txt['attachment_thumb_memory'] = '自适应缩略图存储器';
$txt['attachment_thumb_memory_note'] = 'If disabled, memory is limited to 128M';
$txt['attachmentThumbWidth'] = '缩略图的最大宽度';
$txt['attachmentThumbHeight'] = '缩略图的最大高度';
$txt['attachment_thumbnail_settings'] = '缩略图设置';
$txt['attachment_security_settings'] = '附件安全设置';

$txt['attach_dir_does_not_exist'] = '不存在';
$txt['attach_dir_not_writable'] = '不可写';
// argument(s): session_id, session_var, scripturl
$txt['attach_dir_files_missing'] = 'Files Missing (<a href="%3$s?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Repair</a>)';
$txt['attach_dir_unused'] = '尚未使用';
$txt['attach_dir_empty'] = '空目录';
$txt['attach_dir_ok'] = '正常';
$txt['attach_dir_basedir'] = '基准目录';
$txt['attach_dir_desc'] = '您可以创建新目录或更改下面的当前目录。<br>要在论坛目录结构中创建新目录，只需填写目录名。<br>若要删除目录，请将“路径”字段留空。只能删除空目录。要查看目录是否为空，请检查文件数旁边括号中的文件或子目录。<br>若要重命名目录，只需在字段中更改其名称即可。只能重命名没有子目录的目录。';
$txt['attach_dir_base_desc'] = '您可以使用下面的区域更改当前基准目录或创建新基准目录。新的基准目录也会添加到附件目录列表中。您还可以将现有目录指定为基准目录。';
$txt['attach_dir_save_problem'] = '哎呀，好像出了点问题！';
$txt['attachments_no_create'] = '无法创建新的附件目录。请使用FTP客户端或站点文件管理器执行此操作。';
$txt['attachments_no_write'] = '此目录已创建，但没有写入权限。请尝试使用FTP客户端或站点文件管理器执行此操作。';
$txt['attach_dir_duplicate_msg'] = '该目录已存在，无法添加。';
$txt['attach_dir_exists_msg'] = '该路径上已存在目录，无法移动。';
$txt['attach_dir_base_dupe_msg'] = '该基本目录已被创建，无法添加。';
$txt['attach_dir_base_no_create'] = '无法创建基础目录。请检查路径是否正确，或是使用FTP客户端或站点文件管理器创建此目录，然后重试。';
$txt['attach_dir_no_rename'] = '请检查路径是否正确，且该目录没有包含任何子目录。';
$txt['attach_dir_no_delete'] = '该目录非空，无法删除。请使用FTP客户端或站点文件管理器完成此操作。';
$txt['attach_dir_no_remove'] = '该目录可能仍包含文件或已被设为基础目录，无法删除。';
$txt['attach_dir_is_current'] = '无法删除当前使用目录。';
$txt['attach_dir_is_current_bd'] = '无法删除当前基准目录。';
$txt['attach_dir_invalid'] = '无效目录';
$txt['attach_last_dir'] = '上次使用的附件目录';
$txt['attach_current_dir'] = '当前使用的附件目录';
$txt['attach_current'] = '使用';
$txt['attach_path_manage'] = '管理附件目录';
$txt['attach_directories'] = '附件目录';
$txt['attach_paths'] = '附件目录路径';
$txt['attach_path'] = '路径';
$txt['attach_current_size'] = '大小（KB）';
$txt['attach_num_files'] = '文件数';
$txt['attach_dir_status'] = '状态';
$txt['attach_add_path'] = '添加目录';
$txt['attach_path_current_bad'] = '当前附件目录的路径无效。';
$txt['attachmentDirFileLimit'] = '每个目录的最大文件数';

$txt['attach_base_paths'] = '基准目录路径';
$txt['attach_num_dirs'] = '目录数';
$txt['max_image_width'] = '图片最大显示宽度（正文中或作为附件）';
$txt['max_image_height'] = '图片最大显示高度（正文中或作为附件）';

$txt['automanage_attachments'] = '选择管理附件目录的方式';
$txt['attachments_normal'] = '（手动）SMF默认方式';
$txt['attachments_auto_years'] = '（自动）按 年份 存档在子目录';
$txt['attachments_auto_months'] = '（自动）按 年月 存档在子目录';
$txt['attachments_auto_days'] = '（自动）按 年月日 存档在子目录';
$txt['attachments_auto_16'] = '（自动）存档在16个随机目录';
$txt['attachments_auto_16x16'] = '（自动） 存档在16个随机目录下的16×16个子目录';
$txt['attachments_auto_space'] = '（自动） 达到任一目录空间限制时切换到可用目录';

$txt['use_subdirectories_for_attachments'] = '在基准目录中创建新目录';
$txt['use_subdirectories_for_attachments_note'] = '若该配置未启用，则在论坛的主附件目录中创建新目录';
$txt['basedirectory_for_attachments'] = '设置附件的基准目录';
$txt['basedirectory_for_attachments_current'] = '当前基准目录';
// argument(s): scripturl
$txt['basedirectory_for_attachments_warning'] = '<div class="smalltext">请注意基本目录有误。<br>(<a href="%1$s?action=admin;area=manageattachments;sa=attachpaths">尝试改正</a>)</div>';
// argument(s): scripturl
$txt['attach_current_dir_warning'] = '<div class="smalltext">此目录看起来有问题。<br>(<a href="%1$s?action=admin;area=manageattachments;sa=attachpaths">尝试改正</a>)</div>';

$txt['attachment_transfer'] = '转移附件';
$txt['attachment_transfer_desc'] = '在目录之间转移文件。';
$txt['attachment_transfer_select'] = '选择目录';
$txt['attachment_transfer_now'] = '转移';
$txt['attachment_transfer_from'] = '要转移的原目录';
$txt['attachment_transfer_auto'] = '自动按空间或文件数分配转移到的基准目录';
$txt['attachment_transfer_auto_select'] = '选择基准目录';
$txt['attachment_transfer_to'] = '或者转移到指定目录';
$txt['attachment_transfer_empty'] = '转移后清空原目录';
$txt['attachment_transfer_no_base'] = '没有可用的基准目录';
$txt['attachment_transfer_forum_root'] = '论坛根目录';
$txt['attachment_transfer_no_room'] = '已达到目录的大小或文件数限制。';
$txt['attachment_transfer_no_find'] = '找不到要转移的文件。';
$txt['attachments_transferred'] = '%1$d的文件已被转移至%2$s';
$txt['attachments_not_transferred'] = '%1$d的文件尚未被转移';
$txt['attachment_transfer_no_dir'] = '未选择原目录或目标目录。';
$txt['attachment_transfer_same_dir'] = '不能将原目录和目标目录设置为同一目录。';
$txt['attachment_transfer_progress'] = '请稍等，转接正在进行中……';

$txt['mods_cat_avatars'] = '头像';
$txt['avatar_directory'] = '头像目录';
$txt['avatar_directory_wrong'] = '头像目录无效，这可能会导致论坛出现诸多问题。';
$txt['avatar_url'] = '头像访问地址（URL）';
$txt['avatar_max_width_external'] = '外链头像的最大宽度';
$txt['avatar_max_height_external'] = '外链头像的最大高度';
$txt['avatar_action_too_large'] = '头像过大时的处理方式';
$txt['option_refuse'] = '禁止使用';
$txt['option_css_resize'] = '在用户的浏览器中调整尺寸';
$txt['option_download_and_resize'] = '另存到服务器中并修改图片尺寸';
$txt['avatar_max_width_upload'] = '上传头像的最大宽度';
$txt['avatar_max_height_upload'] = '上传头像的最大高度';
$txt['avatar_resize_upload'] = '自动调整尺寸过大的头像';
$txt['avatar_resize_upload_note'] = '（需要安装有GD模块，或带有IMagick或MagickWand扩展的ImageMagick）';
$txt['avatar_download_png'] = '调整后的头像以PNG格式存储';
$txt['avatar_img_enc_warning'] = '当前既未安装GD模块，也未安装Imagick或MagickWand扩展，某些头像功能被禁用。';
$txt['avatar_external'] = '外链头像';
$txt['avatar_upload'] = '上传头像';
$txt['avatar_server_stored'] = '在服务器存储的头像';
$txt['avatar_server_stored_groups'] = '允许在服务器存储头像的用户组';
$txt['avatar_upload_groups'] = '允许上传头像到服务器的用户组';
$txt['avatar_external_url_groups'] = '允许使用外链的用户组';
$txt['avatar_select_permission'] = '为各个用户组设置权限';
$txt['avatar_download_external'] = '允许在指定URL下载头像';
$txt['option_specified_dir'] = '指定目录……';
$txt['custom_avatar_dir_wrong'] = 'The Upload directory is not valid. This will prevent custom avatars from working properly.';
$txt['custom_avatar_dir'] = '上传目录';
$txt['custom_avatar_dir_desc'] = '该目录应该有效、可写，且不应与服务器的存储目录一致。';
$txt['custom_avatar_url'] = '上传URL';
$txt['custom_avatar_check_empty'] = 'The custom avatars directory you have specified may be empty or invalid. Please ensure these settings are correct.';
$txt['avatar_reencode'] = '重新编码具有潜在危险的头像文件';
$txt['avatar_paranoid_warning'] = '严格安全检测可能导致大量正常头像无法上传。';
$txt['avatar_paranoid'] = '对上传的头像执行严格安全检测';
$txt['gravatar_settings'] = 'Gravatar（全球认可的头像）';
$txt['gravatarEnabled'] = '是否为论坛用户启用Gravatar？';
$txt['gravatarOverride'] = '是否强制使用Gravatar而不是常规头像？';
$txt['gravatarAllowExtraEmail'] = '是否允许为Gravatar额外存储电子邮件地址？';
$txt['gravatarMaxRating'] = '设置允许的最高头像限制级别';
$txt['gravatar_maxG'] = 'G级（全年龄可用级）';
$txt['gravatar_maxPG'] = 'PG级（家长辅导级）';
$txt['gravatar_maxR'] = 'R级（限制级）';
$txt['gravatar_maxX'] = 'X级（禁忌级）';
$txt['gravatarDefault'] = 'Default image to show when an email address has no matching Gravatar';
$txt['gravatar_mm'] = '简单卡通风格的人物轮廓';
$txt['gravatar_identicon'] = '基于电子邮件Hash的几何图像';
$txt['gravatar_monsterid'] = '具有不同颜色、面孔等的生成“怪物”';
$txt['gravatar_wavatar'] = '具有不同特征和背景的生成脸部';
$txt['gravatar_retro'] = '8位街机风格像素化的英俊生成脸部';
$txt['gravatar_blank'] = '透明的PNG图像';

$txt['repair_attachments'] = '附件维护';
$txt['repair_attachments_complete'] = '维护完成';
$txt['repair_attachments_complete_desc'] = '目前所选定的错误都已被修复！';
$txt['repair_attachments_no_errors'] = '未找到任何错误！';
$txt['repair_attachments_error_desc'] = '在维护期间发现了如下错误，请勾选要修复的错误项，然后点击“继续”。';
$txt['repair_attachments_continue'] = '继续';
$txt['repair_attachments_cancel'] = '取消';
$txt['attach_repair_missing_thumbnail_parent'] = '%1$d 缩略图所对应的原附件图片丢失。';
$txt['attach_repair_parent_missing_thumbnail'] = '%1$d 找不到附件图片对应的本该有的缩略图。';
$txt['attach_repair_file_missing_on_disk'] = '%1$d 数据库中存有附件/头像文件的记录但未在磁盘上发现。';
$txt['attach_repair_file_wrong_size'] = '%1$d 附件/头像文件大小错误。';
$txt['attach_repair_file_size_of_zero'] = '%1$d 附件/头像文件在磁盘上的大小为0（将会被删除）。';
$txt['attach_repair_attachment_no_msg'] = '%1$d 未找到与附件关联的任何主题。';
$txt['attach_repair_avatar_no_member'] = '%1$d 未找到与头像文件关联的任何用户。';
$txt['attach_repair_wrong_folder'] = '%1$d 附件存储在了错误的目录中。';
$txt['attach_repair_files_without_attachment'] = '%1$d 数据库中没有文件的记录（将会被删除）。';

$txt['news_title'] = '公告';
$txt['news_settings_desc'] = '您可在此修改站内公告和邮件公告的设置以及相关权限。';
$txt['news_mailing_desc'] = '在此菜单中，您可以向所有已注册并提交了Email地址的用户发送电子邮件。您可以编辑收信人列表，也可以向所有用户发送邮件。该功能对于重要的更新/公告信息非常有用。';
$txt['news_error_no_news'] = '什么都没写';
$txt['groups_edit_news'] = '允许编辑站内公告的用户组';
$txt['groups_send_mail'] = '允许发送邮件公告的用户组';
$txt['xmlnews_enable'] = '启用 XML/RSS 公告';
$txt['xmlnews_maxlen'] = '最大公告长度';
$txt['xmlnews_maxlen_note'] = '（设置为0以禁用此功能，但不推荐这样做）';
$txt['xmlnews_attachments'] = '在 XML/RSS 摘要中包含附件';
$txt['xmlnews_attachments_note'] = '注意：某些提要格式每条消息仅会包含入一个附件。';
$txt['editnews_clickadd'] = '新增公告';
$txt['editnews_remove_selected'] = '删除选中项';
$txt['editnews_remove_confirm'] = '您确定要删除所选的公告吗？';
$txt['censor_clickadd'] = '新增过滤词';

$txt['layout_controls'] = '论坛';
$txt['logs'] = '日志';
$txt['generate_reports'] = '报告';

$txt['update_available'] = '有可用的更新！';
$txt['update_message'] = 'You\'re using an outdated version of SMF, which contains some bugs which have since been fixed.
	It is recommended that you <a href="#" id="update-link" class="bbc_link strong">update your forum</a> to the latest version as soon as possible. It only takes a minute!';

$txt['manageposts'] = '帖子与主题';
$txt['manageposts_title'] = '管理帖子与主题';
$txt['manageposts_description'] = '在这里，您可以管理与主题/帖子相关的所有设置。';

$txt['manageposts_seconds'] = '秒';
$txt['manageposts_minutes'] = '分钟';
$txt['manageposts_characters'] = '字';
$txt['manageposts_days'] = '天';
$txt['manageposts_posts'] = '条帖子';
$txt['manageposts_topics'] = '个主题';

$txt['manageposts_settings'] = '帖子设置';
$txt['manageposts_settings_description'] = '在这里，您可以设置与帖子及其发表相关的所有设置项。';

$txt['manageposts_bbc_settings'] = 'BBCode';
$txt['manageposts_bbc_settings_description'] = 'BBCode可用于在论坛帖子中添加标记以设置格式。例如，要将“马”一词以粗体显示，您可以输入[b]马[/b]。所有的BBCode都是用方括号（“[”和“]”）括起来的。';
$txt['manageposts_bbc_settings_title'] = '论坛专用代码标签（BBCode）设置';

$txt['manageposts_topic_settings'] = '主题设置';
$txt['manageposts_topic_settings_description'] = '在这里，您可以设置主题的所有相关设置项。';

$txt['managedrafts_settings'] = '草稿设置';
$txt['managedrafts_settings_description'] = '您可以在此处设置草稿的所有相关设置项。';
$txt['manage_drafts'] = '草稿设置';

$txt['removeNestedQuotes'] = '引用时删除嵌套的引用';
$txt['disable_wysiwyg'] = '禁用“所见即所得”编辑器';
$txt['max_messageLength'] = '允许的最大帖子大小';
$txt['max_messageLength_zero'] = '0表示不做限制';
$txt['convert_to_mediumtext'] = '您的数据库无法接受超过65535个字符的内容。请使用<a href="%1$s">数据库维护页面</a>转换数据库，然后再返回重试修改最大帖子大小。';
$txt['topicSummaryPosts'] = '主题摘要中显示的回帖数';
$txt['spamWaitTime'] = '同一IP发帖/回复的时间间隔';
$txt['edit_wait_time'] = '修正性编辑时间';
$txt['edit_disable_time'] = '帖子发表后允许被编辑的最长时间';
$txt['preview_characters'] = '首次/末次预览的帖子最大长度';
$txt['preview_characters_units'] = '字';
$txt['quote_expand'] = '长引用展示展开链接时需要的最小引文高度';
$txt['quote_expand_pixels_units'] = '像素';
$txt['message_index_preview_first'] = '使用帖子预览时，显示第一条帖子的内容';
$txt['message_index_preview_first_desc'] = '不勾选以显示最后一条帖子';
$txt['show_user_images'] = '在帖子中显示用户头像';
$txt['show_blurb'] = '在帖子中显示个性签名';
$txt['hide_post_group'] = '隐藏无等级用户的等级用户组头衔';
$txt['hide_post_group_desc'] = '启用此选项后，如果某个会员的没有在任何等级用户组中，则不会在帖子中显示这些用户的等级用户组头衔。';
$txt['subject_toggle'] = '在主题中显示主题标题。';
$txt['show_profile_buttons'] = '在帖子中显示“查看用户信息”';
$txt['show_modify'] = '在修改后的帖子中显示上一次修改日期';

$txt['enableBBC'] = '启用论坛专用代码标签（BBCode）';
$txt['enablePostHTML'] = '在帖子中允许使用<strong>基本</strong>HTML语法';
$txt['autoLinkUrls'] = '自动为帖子中的URL添加超链接';
$txt['disabledBBC'] = '允许使用的BBC标签';
$txt['legacyBBC'] = '传统BBC标签';
$txt['bbcTagsToUse'] = '允许使用的BBC标签';
$txt['enabled_bbc_select'] = '选择允许使用的标签';
$txt['enabled_bbc_select_all'] = '选择所有标签';
$txt['groups_can_use'] = '允许使用%1$s的用户组';

$txt['enableParticipation'] = '启用参与图标';
$txt['oldTopicDays'] = '回复此时间前发表的坟贴将予以警告';
$txt['defaultMaxTopics'] = '主题列表中每页主题数';
$txt['defaultMaxMessages'] = '主题页中每页帖子数';
$txt['disable_print_topic'] = '禁用打印主题功能';
$txt['enableAllMessages'] = '查看“所有”帖子时的显示的主题最大数量';
$txt['enableAllMessages_zero'] = '设置为0以禁用查看所有帖子的功能';
$txt['disableCustomPerPage'] = '禁用用户自定义每页主题/消息数';
$txt['enablePreviousNext'] = '启用“前一主题”/“后一主题”链接';

$txt['not_done_title'] = '尚未完成！';
$txt['not_done_reason'] = '为避免服务器过载，处理进程暂时暂停。该进程将会在几秒钟后自动恢复处理。若迟迟未恢复，请点击下面的“继续”按钮。';
$txt['not_done_continue'] = '继续';

$txt['general_settings'] = '常规设置';
$txt['database_settings'] = '数据库设置';
$txt['cookies_sessions_settings'] = 'Cookie 与 Session 设置';
$txt['security_settings'] = '安全设置';
$txt['caching_settings'] = '缓存设置';
$txt['export_settings'] = '数据导出';
$txt['load_balancing_settings'] = '负载均衡';
$txt['phpinfo_settings'] = 'PHP 信息';
$txt['phpinfo_localsettings'] = '当前值';
$txt['phpinfo_defaultsettings'] = '默认值';
$txt['phpinfo_itemsettings'] = '配置项';

$txt['language_configuration'] = '语言';
$txt['language_description'] = '本页面允许您编辑论坛上安装的语言包，并从 Simple Machines 网站下载新的语言包。您还可以在此处修改与显示语言相关的设置。';
$txt['language_edit'] = '编辑语言包';
$txt['language_add'] = '新增语言包';
$txt['language_settings'] = '设置';
$txt['could_not_language_backup'] = '您必须删除该语言包后才能进行备份，尚未对系统做出任何更改。您也可以设置 Packages/backup 的权限以确保其可写，然后再重试。当然您也可以选择关闭备份，但我们不推荐这样做。';

$txt['advanced'] = '高级选项';
$txt['simple'] = '简易';

$txt['admin_news_newsletter_queue_done'] = '邮件公告已成功加入邮件发送队列中。';
$txt['admin_news_select_recipients'] = '请选择要接收邮件公告的用户';
$txt['admin_news_select_group'] = '按用户组选择';
$txt['admin_news_select_group_desc'] = '选择要接收邮件公告的用户组。';
$txt['admin_news_select_members'] = '用户';
$txt['admin_news_select_members_desc'] = '额外要接收邮件公告的用户。';
$txt['admin_news_select_excluded_members'] = '例外用户';
$txt['admin_news_select_excluded_members_desc'] = '用户组内不需要接收该邮件公告的用户。';
$txt['admin_news_select_excluded_groups'] = '例外用户组';
$txt['admin_news_select_excluded_groups_desc'] = '选择确定不需要接收该邮件公告的用户组';
$txt['admin_news_select_email'] = 'Email 地址';
$txt['admin_news_select_email_desc'] = 'A semi-colon separated list of email addresses which should be sent a newsletter (i.e. address1; address2). This is additional to the groups listed above.<br><span class="alert">Note: You must manually handle any unsubscribe requests regarding newsletters sent to these email addresses.</span>';
$txt['admin_news_select_override_notify'] = '忽略/覆盖（Override）提醒设置';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = '您不能将站内私信发送到电子邮件地址。如果您执意继续，所有输入的电子邮件地址都将被忽略。\n\n您确定要这么做吗？';

$txt['mailqueue_browse'] = '浏览队列';
$txt['mailqueue_settings'] = '设置';
$txt['mailqueue_test'] = '发送测试';

$txt['admin_search'] = '快速搜索';
$txt['admin_search_type_internal'] = '任务/设置';
$txt['admin_search_type_member'] = '用户';
$txt['admin_search_type_online'] = '在线手册';
$txt['admin_search_go'] = '搜索';
$txt['admin_search_results'] = '搜索结果';
$txt['admin_search_results_desc'] = '搜索结果：“%1$s”';
$txt['admin_search_results_again'] = '重新搜索';
$txt['admin_search_results_none'] = '没有找到相关内容';

$txt['admin_search_section_sections'] = '设置页面';
$txt['admin_search_section_settings'] = '设置项';

$txt['mods_cat_features'] = '常规设置';
$txt['antispam_title'] = '反垃圾';
$txt['mods_cat_modifications_misc'] = '杂项';
$txt['mods_cat_layout'] = '布局';
$txt['moderation_settings_short'] = '版块管理';
$txt['signature_settings_short'] = '签名档';
$txt['custom_profile_shorttitle'] = '用户资料字段';
$txt['pruning_title'] = '清理日志';
$txt['pruning_desc'] = '以下选项可以帮助您有效减小日志文件的大小。大多数情况下，陈旧的日志内容实际上并没有多大用处。';
$txt['log_settings'] = '日志设置';

$txt['boards_edit'] = '修改版块';
$txt['mboards_new_cat'] = '创建新分区';
$txt['manage_holidays'] = '管理节日';
$txt['calendar_settings'] = '日历设置';
$txt['search_weights'] = '搜索权重';
$txt['search_method'] = '搜索方法';

$txt['smiley_sets'] = '表情包';
$txt['smileys_add'] = '添加表情';
$txt['smileys_edit'] = '编辑表情';
$txt['smileys_set_order'] = '设置表情顺序';
$txt['icons_edit_message_icons'] = '修改帖子图标';

$txt['membergroups_new_group'] = '添加用户组';
$txt['membergroups_edit_groups'] = '编辑用户组';
$txt['permissions_groups'] = '全局权限';
$txt['permissions_boards'] = '版块权限';
$txt['permissions_profiles'] = '修改用户资料';
$txt['permissions_post_moderation'] = '帖子管理';

$txt['browse_packages'] = '浏览插件';
$txt['download_packages'] = '添加插件';
$txt['installed_packages'] = '安装插件';
$txt['package_file_perms'] = '文件权限';
$txt['package_settings'] = '选项';
$txt['themeadmin_admin_title'] = '管理与安装';
$txt['themeadmin_list_title'] = '主题设置';
$txt['themeadmin_reset_title'] = '用户选项';
$txt['themeadmin_edit_title'] = '修改主题';
$txt['admin_browse_register_new'] = '注册新用户';

$txt['search_engines'] = '搜索引擎';
$txt['spiders'] = '爬虫';
$txt['spider_logs'] = '爬虫日志';
$txt['spider_stats'] = '统计信息';

$txt['paid_subscriptions'] = '付费订阅';
$txt['paid_subs_view'] = '查看订阅';

$txt['hooks_title_list'] = '集成 Hook';
$txt['hooks_field_hook_name'] = 'Hook 名称';
$txt['hooks_field_function_name'] = '函数名称';
$txt['hooks_field_function_method'] = '函数是一个方法，它的类是实例化的。';
$txt['hooks_field_function'] = '函数';
$txt['hooks_field_included_file'] = '包含文件';
$txt['hooks_field_file_name'] = '文件名';
$txt['hooks_field_hook_exists'] = '状态';
$txt['hooks_active'] = '存在';
$txt['hooks_disabled'] = '禁用';
$txt['hooks_missing'] = '未找到';
$txt['hooks_temp'] = 'Temporary';
$txt['hooks_no_hooks'] = '目前系统中没有 Hook';
$txt['hooks_button_remove'] = '删除';
$txt['hooks_disable_instructions'] = '单击状态图标以启/禁用 Hook。';
$txt['hooks_disable_legend'] = '图标说明';
$txt['hooks_disable_legend_exists'] = 'Hook 存在且已激活';
$txt['hooks_disable_legend_disabled'] = 'Hook 存在但未启用';
$txt['hooks_disable_legend_missing'] = 'Hook 未被发现';
$txt['hooks_disable_legend_temp'] = 'the hook is temporary';
$txt['hooks_disable_legend_temp_missing'] = 'temporary hook not found';
$txt['hooks_reset_filter'] = '无过滤器';

$txt['board_perms_allow'] = '允许';
$txt['board_perms_ignore'] = '忽略';
$txt['board_perms_deny'] = '拒绝';
$txt['all_boards_in_cat'] = '该大类的所有版块';

$txt['likes_like'] = '允许为帖子点赞的用户组';

$txt['mention'] = '允许使用“@”提及用户的用户组';

$txt['notifications'] = '通知';
$txt['notify_settings'] = '通知设置';
$txt['notifications_desc'] = '此页面允许您为用户设置默认通知选项。';
 // The GDPR page of the EU exists in several languages; change the language code at the end of the url
$txt['notify_announcements_desc'] = 'Enabling this default option violates the rules of the <a href="https://ec.europa.eu/info/law/law-topic/data-protection/eu-data-protection-rules_en" target="_blank" rel="noopener" class="bbc_link">GDPR</a> and many other countries\' privacy and anti-spam laws.';

$txt['enable_sm_stats'] = '允许统计信息收集';

?>