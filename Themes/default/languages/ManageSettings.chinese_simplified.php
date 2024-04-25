<?php
// Version: 2.1.0; ManageSettings

global $scripturl;

// argument(s): theme_id, session_id, session_var, $scripturl
$txt['modSettings_desc'] = 'This page allows you to change the settings of features and basic options in your forum. Please see the <a href="%4$s?action=admin;area=theme;sa=list;th=%1$s;%3$s=%2$s">theme settings</a> for more options. Click the help icons for more information about a setting.';
$txt['modification_settings_desc'] = '这个页面显示所有套件的设定。';

$txt['modification_no_misc_settings'] = '目前没有安装任何套件与设定。';

$txt['pollMode'] = '投票模式';
$txt['disable_polls'] = '停用投票';
$txt['enable_polls'] = '启用投票';
$txt['polls_as_topics'] = '停用投票(原本的投票只显示文章)';
$txt['allow_guestAccess'] = '允许访客浏览论坛';
$txt['userLanguage'] = '允许会员选择语系';
$txt['allow_hideOnline'] = '允许会员隐藏在线状态';
$txt['titlesEnable'] = '启用会员头衔';
$txt['enable_buddylist'] = '启用好友/坏人名单';
$txt['default_personal_text'] = '预设的个人文字';
$txt['default_personal_text_note'] = '分配给新注册成员的个人文本。';
$txt['time_format'] = '预设的时间格式';
$txt['setting_time_offset'] = '时区差值<div class="smalltext">(套用到所有会员)</div>';
$txt['setting_default_timezone'] = 'Forum default timezone';
$txt['setting_timezone_priority_countries'] = 'Show time zones from these countries first';
$txt['setting_timezone_priority_countries_note'] = 'A comma separated list of two character ISO country codes.';
$txt['failed_login_threshold'] = '登入失败限制';
$txt['loginHistoryDays'] = '保存登录历史的天数';
$txt['lastActive'] = '用户在线时间阈值';
$txt['trackStats'] = 'Track statistics';
$txt['hitStats'] = 'Track daily page views (statistics tracking must be enabled)';
$txt['enableCompressedOutput'] = '启用压缩输出';
$txt['databaseSession_enable'] = '使用数据库驱动的会话';
$txt['databaseSession_loose'] = '允许浏览器返回缓存页面';
$txt['databaseSession_lifetime'] = '未使用的会话超时前秒数';
$txt['error_log_desc'] = '如果启用，错误日志将记录用户在使用您论坛时遇到的每个错误。这可能是一个非常宝贵的帮助来识别论坛问题。';
$txt['enableErrorLogging'] = '启用错误记录';
$txt['enableErrorQueryLogging'] = '在错误日志中包含数据库查询';
$txt['markread_title'] = 'Read Logs';
$txt['mark_read_desc'] = 'The following options govern how long before automatically marking boards and topics as read and how long before purging this information.';
$txt['mark_read_beyond'] = 'Automatically mark boards as read for users who have been inactive after this many days';
$txt['mark_read_delete_beyond'] = 'Automatically purge information about boards and topics visited after this many days';
$txt['mark_read_max_users'] = 'Maximum users to process at a time';
$txt['pruningOptions'] = '启用日志条目打印功能';
$txt['pruneErrorLog'] = 'Remove error log entries older than<div class="smalltext">(0=停用)</div>';
$txt['pruneModLog'] = 'Remove moderation log entries older than<div class="smalltext">(0=停用)</div>';
$txt['pruneBanLog'] = 'Remove ban hit log entries older than<div class="smalltext">(0=停用)</div>';
$txt['pruneReportLog'] = 'Remove report to moderator log entries older than<div class="smalltext">(0=停用)</div>';
$txt['pruneScheduledTaskLog'] = 'Remove scheduled task log entries older than<div class="smalltext">(0=停用)</div>';
$txt['pruneSpiderHitLog'] = 'Remove search engine hit logs older than<div class="smalltext">(0=停用)</div>';
$txt['cookieTime'] = 'Default login cookies length (in minutes)';
$txt['localCookies'] = 'Enable local storage of cookies<div class="smalltext">(SSI won\'t work well with this on.)</div>';
$txt['globalCookies'] = 'Use subdomain independent cookies<div class="smalltext">(turn off local cookies first!)</div>';
$txt['globalCookiesDomain'] = '用于子域独立的 cookie 的主域';
$txt['invalid_cookie_domain'] = '引入的域似乎无效，请检查并再次保存。';
$txt['secureCookies'] = 'Force cookies to be secure<div class="smalltext">(This only applies if you are using HTTPS - don\'t use otherwise!)</div>';
$txt['httponlyCookies'] = '强制只能通过 HTTP 协议访问 cookie';
$txt['samesiteCookies'] = 'Force cookies to be sent only to first parties';
$txt['samesiteNone'] = 'None';
$txt['samesiteLax'] = 'Lax';
$txt['samesiteStrict'] = 'Strict';
$txt['samesiteSecureRequired'] = 'If SameSite Cookies is set to \'None\', cookies must be secure.';
$txt['securityDisable'] = '禁用管理安全';
$txt['securityDisable_moderate'] = '禁用管理安全';
$txt['send_validation_onChange'] = '要求 Email 变更后必须重新启用';
$txt['approveAccountDeletion'] = '管理员必须审核自杀的账号';
$txt['autoFixDatabase'] = '自动修复破损的表';
$txt['disallow_sendBody'] = '在通知中不允许帖子文本';
$txt['enable_ajax_alerts'] = 'Allow AJAX desktop notifications for alerts';
$txt['alerts_auto_purge'] = 'Automatically delete read alerts';
$txt['alerts_auto_purge_7'] = 'After 1 week';
$txt['alerts_auto_purge_30'] = 'After 1 month';
$txt['alerts_auto_purge_90'] = 'After 3 months';
$txt['alerts_auto_purge_0'] = 'Never';
$txt['alerts_per_page'] = 'Alerts Per Page';
$txt['jquery_source'] = 'jQuery 库的源';
$txt['jquery_custom_label'] = '自定义';
$txt['jquery_custom'] = 'Custom URL to the jQuery Library';
$txt['jquery_local'] = '本地的';
$txt['jquery_google_cdn'] = 'Google CDN';
$txt['jquery_jquery_cdn'] = 'jQuery CDN';
$txt['jquery_microsoft_cdn'] = 'Microsoft CDN';
$txt['queryless_urls'] = '搜寻引撆的友善网址(SEF URLs)<div class="smalltext"><strong>限 Apache/Lighttpd!</strong></div>';
$txt['minimize_files'] = 'Minimize CSS and JavaScript files';
$txt['queryless_urls_note'] = '仅Apache/Lighttpd';
$txt['enableReportPM'] = '启用检举不当简讯功能';
$txt['max_pm_recipients'] = 'Maximum number of recipients allowed in a personal message<div class="smalltext">(0=不限制, admins are exempt)</div>';
$txt['max_pm_recipients_note'] = '(0表示没有限制，管理员是免除的)';
$txt['pm_posts_verification'] = '文章数太少的话, 传送简讯时必须输入验证码<div class="smalltext">(0=不限制, 管理员豁免)</div>';
$txt['pm_posts_verification_note'] = '(0表示没有限制，管理员是免除的)';
$txt['pm_posts_per_hour'] = 'Number of personal messages a user may send in an hour<div class="smalltext">(0=不限制, moderators are exempt)</div>';
$txt['pm_posts_per_hour_note'] = '(0表示无限制, 版主为免除)';
$txt['compactTopicPagesEnable'] = '限制显示页面链接数';
$txt['contiguous_page_display'] = '相邻页面显示';
$txt['to_display'] = '显示';
$txt['todayMod'] = '启用缩短日期显示';
$txt['today_disabled'] = '停用';
$txt['today_only'] = '只有今天';
$txt['yesterday_today'] = '今天 &amp; 昨天';
$txt['onlineEnable'] = 'Show online/offline status in posts and PMs';
$txt['defaultMaxMembers'] = '会员名单一页的显示数量';
$txt['timeLoadPageEnable'] = '显示读取页面花费的时间';
$txt['disableHostnameLookup'] = '禁用主机名查询';
$txt['who_enabled'] = '启用在线名单';
$txt['meta_keywords'] = '符合论坛内容的关键词<div class="smalltext">能够让搜寻引擎容易找到。(空白=不设定。)</div>';
$txt['meta_keywords_note'] = '用于搜索引擎。留空为默认引擎。';
$txt['settings_error'] = '警告：更新 Settings.php 失败，设置无法保存。';
$txt['image_proxy_enabled'] = '启用图像代理';
$txt['image_proxy_secret'] = '图像代理';
$txt['image_proxy_maxsize'] = '要缓存的最大文件大小(KB)';
$txt['force_ssl'] = '论坛 SSL 模式';
$txt['force_ssl_off'] = '禁用 SSL';
$txt['force_ssl_complete'] = '在整个论坛强制使用 SSL';
$txt['search_language'] = 'Fulltext Search Language';

// Like settings.
$txt['enable_likes'] = 'Enable Likes';

// Mention settings.
$txt['enable_mentions'] = 'Enable Mentions';

$txt['caching_information'] = 'SMF supports caching through the use of accelerators. The currently supported accelerators include:
<ul class="normallist">
	<li>APCu</li>
	<li>Memcached</li>
	<li>SQLite3</li>
	<li>PostgreSQL</li>
	<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
</ul>
Caching will work best if you have PHP compiled with one of the above optimizers, or have memcached available. If you do not have any optimizer installed SMF will do file based caching.';
$txt['detected_no_caching'] = 'SMF has not been able to detect a compatible accelerator on your server. File based caching can be used instead.';
$txt['detected_accelerators'] = 'SMF has detected the following accelerators: %1$s';

$txt['cache_enable'] = '快取等级';
$txt['cache_off'] = '停用快取';
$txt['cache_level1'] = 'Level 1 快取 (建议)';
$txt['cache_level2'] = 'Level 2 快取';
$txt['cache_level3'] = 'Level 3 快取 (不建议)';
$txt['cache_accelerator'] = '缓存加速器';
$txt['filebased_cache'] = 'SMF file based caching';
$txt['sqlite_cache'] = 'SQLite3 database based caching';
$txt['postgres_cache'] = 'PostgreSQL caching';
$txt['cachedir_sqlite'] = 'SQLite3 database cache directory';
$txt['apcu_cache'] = 'APCu';
$txt['memcacheimplementation_cache'] = 'Memcache';
$txt['memcachedimplementation_cache'] = 'Memcached';
$txt['zend_cache'] = 'Zend 平台/性能套装';
$txt['cache_filebased_settings'] = 'SMF file based caching settings';
$txt['cache_sqlite_settings'] = 'SQLite3 database caching settings';
$txt['cache_memcached_settings'] = 'Memcache/Memcached settings';
$txt['cache_memcached_servers'] = 'Memcache/Memcached servers';
$txt['cache_memcached_servers_subtext'] = 'Example: 127.0.0.1:11211,127.0.0.2';

$txt['loadavg_warning'] = 'Please note: the settings below are to be edited with care. Setting any of them too low may render your forum <strong>unusable</strong>! The current load average is <strong>%01.2f</strong>';
$txt['loadavg_enable'] = '按负载平均值启用负载平衡';
$txt['loadavg_auto_opt'] = '禁用自动数据库优化的阈值';
$txt['loadavg_search'] = '禁用搜索的阈值';
$txt['loadavg_allunread'] = '禁用所有未读主题的阈值';
$txt['loadavg_unreadreplies'] = '禁用未读回复的阈值';
$txt['loadavg_show_posts'] = '禁用显示用户帖子的阈值';
$txt['loadavg_userstats'] = '禁用显示用户统计数据的阈值';
$txt['loadavg_bbc'] = '显示帖子时禁用BBC 格式的阈值';
$txt['loadavg_forum'] = '禁用论坛 <strong>的阈值完全为</strong>';
$txt['loadavg_disabled_windows'] = 'Load balancing support is not available on Windows.';
$txt['loadavg_disabled_osx'] = 'Load balancing support is not available on OS:X.';
$txt['loadavg_disabled_conf'] = 'Load balancing support is disabled by your host configuration.';

$txt['setting_password_strength'] = '会员密码强度要求';
$txt['setting_password_strength_low'] = '低 - 最少 4 个字符';
$txt['setting_password_strength_medium'] = '中 - 不能包含账号';
$txt['setting_password_strength_high'] = '高 - 混合字符';
$txt['setting_enable_password_conversion'] = '允许密码哈希转换';

$txt['antispam_Settings'] = '反垃圾信验证';
$txt['antispam_Settings_desc'] = '这里让您设定验证方式以确定会员是真人(而不是机器人)。';
$txt['setting_reg_verification'] = '注册账号时必须输入验证码';
$txt['posts_require_captcha'] = '文章数太少的话, 发表文章时必须输入验证码';
$txt['posts_require_captcha_desc'] = '(0=不限制, 板主不限制)';
$txt['search_enable_captcha'] = '访客搜寻时必须输入验证码';
$txt['setting_guests_require_captcha'] = '访客发表文章时必须输入验证码';
$txt['setting_guests_require_captcha_desc'] = '(如果您有设定下面的文章数, 这个功能自动启用)';
$txt['question_not_defined'] = '您需要为论坛的默认语言(%1$s)添加一个问题和回答，否则用户将无法填写验证码。 表示没有注册。';

$txt['configure_verification_means'] = '配置验证方式';
$txt['setting_qa_verification_number'] = '必须回答的题目验证数量';
$txt['setting_qa_verification_number_desc'] = '(0=停用; 在下面设定题目)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Below you can set which anti-spam features you wish to have enabled whenever a user needs to verify they are a human. Note that the user will have to pass <em>all</em> verification so if you enable both a verification image and a question/answer test they need to complete both to proceed.</span>';
$txt['setting_visual_verification_type'] = '图片验证显示';
$txt['setting_visual_verification_type_desc'] = '愈复杂的图片, 机器人愈来破解';
$txt['setting_image_verification_off'] = '停用';
$txt['setting_image_verification_vsimple'] = '非常简单 - 纯文字';
$txt['setting_image_verification_simple'] = '简单 - 彩色文字, 没有噪声';
$txt['setting_image_verification_medium'] = '一般 - 彩色文字, 包含噪声和线条';
$txt['setting_image_verification_high'] = '复杂 - 变形文字, 包含大量噪声和线条';
$txt['setting_image_verification_extreme'] = '非常复杂 - 变形文字, 噪声, 线条和色块';
$txt['setting_image_verification_sample'] = '范例';

// reCAPTCHA
$txt['recaptcha_configure'] = 'reCAPTCHA Verification System';
$txt['recaptcha_configure_desc'] = 'Configure the reCAPTCHA Verification System. Don\'t have a key for reCAPTCHA? <a href="https://www.google.com/recaptcha/admin">Get your reCAPTCHA key here</a>.';
$txt['recaptcha_enabled'] = 'Use reCAPTCHA Verification System';
$txt['recaptcha_enable_desc'] = 'This augments the built-in visual verification';
$txt['recaptcha_theme'] = 'reCAPTCHA Theme';
$txt['recaptcha_theme_light'] = 'Light';
$txt['recaptcha_theme_dark'] = 'Dark';
$txt['recaptcha_site_key'] = 'Site Key';
$txt['recaptcha_site_key_desc'] = 'This will be set in the HTML code your site serves to users.';
$txt['recaptcha_secret_key'] = 'Secret Key';
$txt['recaptcha_secret_key_desc'] = 'This is for communication between your site and Google. Be sure to keep it a secret.';
$txt['recaptcha_no_key_question'] = 'Don\'t have a key for reCAPTCHA?';
$txt['recaptcha_get_key'] = 'Get your reCAPTCHA key here.';
$txt['languages_recaptcha'] = 'ReCAPTCHA language';

$txt['setting_image_verification_nogd'] = '<strong>注意:</strong> 如果这个主机没有安装 GD 函式库, 各种复杂的设定不会作用。';
$txt['setup_verification_questions'] = '题目验证';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">如果您想要会员回答题目去验证是否为机器人, 您必须在下面设定题目。您应该选择简单的题目; 答案是不分大小写。您的题目可以使用 BB码。如果想移除题目的话, 请把题目那栏的内容删除。</span>';
$txt['setup_verification_question'] = '题目';
$txt['setup_verification_answer'] = '答案';
$txt['setup_verification_add_more'] = '新增其它问题';
$txt['setup_verification_add_answer'] = '添加另一个答案';

$txt['moderation_settings'] = '管理设置';
$txt['setting_warning_enable'] = 'Enable User Warning System';
$txt['setting_warning_watch'] = 'Warning level for user watch<div class="smalltext">The user warning level after which a user watch is put in place - 0=停用.</div>';
$txt['setting_warning_watch_note'] = '用户警告级别，然后设置用户监视。';
$txt['setting_warning_moderate'] = 'Warning level for post moderation<div class="smalltext">The user warning level after which a user has all posts moderated - 0=停用.</div>';
$txt['setting_warning_moderate_note'] = '用户警告级别，用户在此之后有所有帖子被审核。';
$txt['setting_warning_mute'] = 'Warning level for user muting<div class="smalltext">The user warning level after which a user cannot post any further - 0=停用.</div>';
$txt['setting_warning_mute_note'] = '用户警告级别之后用户不能再发帖。';
$txt['setting_user_limit'] = 'Maximum user warning points per day<div class="smalltext">This value is the maximum amount of warning points a single moderator can assign to a user in a 24 hour period - 0=不限制.</div>';
$txt['setting_user_limit_note'] = '此值是单个版主可以在 24 小时内指派给用户的最大警告点数量 - 0 为无限制。';
$txt['setting_warning_decrement'] = 'Warning points to decrement from users every 24 hours<div class="smalltext">Only applies to users not warned within last 24 hours - set to 0=停用.</div>';
$txt['setting_warning_decrement_note'] = '仅适用于过去24小时内未发出警告的用户。';
$txt['setting_view_warning_any'] = 'Users who can see any warning status';
$txt['setting_view_warning_own'] = 'Users who can see their own warning status';

$txt['signature_settings'] = '签名档设定';
$txt['signature_settings_desc'] = '使用此页面上的设置来决定如何在SMF中处理会员签名。';
// argument(s): session_id, session_var, scripturl
$txt['signature_settings_warning'] = 'Note that settings are not applied to existing signatures by default. <a href="%3$s?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">Apply changes now</a>';
$txt['signature_settings_applied'] = '更新的规则已经适用于现有的签名。';
$txt['signature_enable'] = '启用签名';
$txt['signature_max_length'] = 'Maximum allowed characters<div class="smalltext">(0 for no max.)</div>';
$txt['signature_max_lines'] = 'Maximum amount of lines<div class="smalltext">(0 for no max)</div>';
$txt['signature_max_images'] = 'Maximum image count<div class="smalltext">(0 for no max - excludes smileys)</div>';
$txt['signature_max_images_note'] = '(0表示无最大值 - 排除表情)';
$txt['signature_allow_smileys'] = '允许签名中的表情符号';
$txt['signature_max_smileys'] = 'Maximum smiley count<div class="smalltext">(0 for no max)</div>';
$txt['signature_max_image_width'] = 'Maximum width of signature images (pixels)<div class="smalltext">(0 for no max)</div>';
$txt['signature_max_image_height'] = 'Maximum height of signature images (pixels)<div class="smalltext">(0 for no max)</div>';
$txt['signature_max_font_size'] = 'Maximum font size allowed in signatures<div class="smalltext">(0 for no max)</div>';
$txt['signature_bbc'] = '启用的 BBC 标签';

$txt['custom_profile_title'] = '自定义配置文件字段';
$txt['custom_profile_desc'] = '从这个页面您可以创建适合您自己的论坛要求的自定义配置文件字段';
$txt['custom_profile_active'] = '已启用';
$txt['custom_profile_fieldname'] = '字段名称';
$txt['custom_profile_fieldtype'] = '字段类型';
$txt['custom_profile_fieldorder'] = '字段顺序';
$txt['custom_profile_make_new'] = '新建字段';
$txt['custom_profile_none'] = '您尚未创建任何自定义配置文件字段！';
$txt['custom_profile_icon'] = '图标';

$txt['custom_profile_type_text'] = '文本';
$txt['custom_profile_type_textarea'] = '大文本';
$txt['custom_profile_type_select'] = '选择框';
$txt['custom_profile_type_radio'] = '单选按钮';
$txt['custom_profile_type_check'] = '复选框';

$txt['custom_add_title'] = 'Add Profile Field';
$txt['custom_edit_title'] = 'Edit Profile Field';
$txt['custom_edit_general'] = '显示设置';
$txt['custom_edit_input'] = '输入设置';
$txt['custom_edit_advanced'] = '高级设置';
$txt['custom_edit_name'] = '名称';
$txt['custom_edit_name_desc'] = 'You can use translatable tokens in this field.';
$txt['custom_edit_desc'] = '描述';
$txt['custom_edit_profile'] = '配置文件部分';
$txt['custom_edit_profile_desc'] = 'Section of profile the users will be able to edit this in.';
$txt['custom_edit_profile_none'] = '无';
$txt['custom_edit_registration'] = '在注册时显示';
$txt['custom_edit_registration_disable'] = '否';
$txt['custom_edit_registration_allow'] = '否';
$txt['custom_edit_registration_require'] = '是的，并需要条目';
$txt['custom_edit_display'] = '在主题视图中显示';
$txt['custom_edit_mlist'] = '在成员列表中显示';
$txt['custom_edit_picktype'] = '字段类型';

$txt['custom_edit_max_length'] = '最大长度';
$txt['custom_edit_max_length_desc'] = '(0=不限制)';
$txt['custom_edit_dimension'] = '尺寸';
$txt['custom_edit_dimension_row'] = '行';
$txt['custom_edit_dimension_col'] = '列';
$txt['custom_edit_bbc'] = '允许 BBC';
$txt['custom_edit_options'] = '备选方案';
$txt['custom_edit_options_desc'] = '将选项框留空以移除。单击按钮选择默认选项。';
$txt['custom_edit_options_more'] = '更多';
$txt['custom_edit_default'] = '默认状态';
$txt['custom_edit_active'] = '已启用';
$txt['custom_edit_active_desc'] = '如果未选中此字段将不会显示给任何人。';
$txt['custom_edit_privacy'] = '隐私';
$txt['custom_edit_privacy_desc'] = '谁可以查看和编辑此字段。';
$txt['custom_edit_privacy_all'] = '用户可以看到此领域；所有者可以编辑它';
$txt['custom_edit_privacy_see'] = '用户可以看到此字段，只有管理员可以编辑';
$txt['custom_edit_privacy_owner'] = '用户无法看到此字段。所有者和管理员可以编辑它。';
$txt['custom_edit_privacy_none'] = '此字段仅对管理员可见';
$txt['custom_edit_can_search'] = '可搜索';
$txt['custom_edit_can_search_desc'] = '可以从成员列表中搜索此字段。';
$txt['custom_edit_mask'] = 'Input Mask';
$txt['custom_edit_mask_desc'] = '对于文本字段，可以选择一个输入掩码来验证数据。';
$txt['custom_edit_mask_email'] = 'Valid Email';
$txt['custom_edit_mask_number'] = 'Numeric';
$txt['custom_edit_mask_nohtml'] = '无 HTML';
$txt['custom_edit_mask_regex'] = '正则表达式(高级)';
$txt['custom_edit_enclose'] = '在文本内显示内嵌(可选)';
$txt['custom_edit_enclose_desc'] = 'We <strong>strongly</strong> recommend to use an input mask to validate the input supplied by the user.';

$txt['custom_edit_order_move'] = '移动 ';
$txt['custom_edit_order_up'] = '上移';
$txt['custom_edit_order_down'] = '向下';
$txt['custom_edit_placement'] = '选择位置';
$txt['custom_profile_placement'] = '位置';
$txt['custom_profile_placement_standard'] = 'Standard';
$txt['custom_profile_placement_icons'] = 'With Icons';
$txt['custom_profile_placement_above_signature'] = 'Above Signature';
$txt['custom_profile_placement_below_signature'] = 'Below Signature';
$txt['custom_profile_placement_below_avatar'] = 'Below Avatar';
$txt['custom_profile_placement_above_member'] = 'Above Username';
$txt['custom_profile_placement_bottom_poster'] = 'Bottom poster info';
$txt['custom_profile_placement_before_member'] = 'Before Username';
$txt['custom_profile_placement_after_member'] = 'After Username';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Are you sure you wish to delete this field - all related user data will be lost!';

$txt['standard_profile_title'] = 'Standard Profile Fields';
$txt['standard_profile_field'] = 'Field';
$txt['standard_profile_field_timezone'] = 'Timezone';

$txt['languages_lang_name'] = 'Language Name';
$txt['languages_native_name'] = 'Native Name of Language';
$txt['languages_locale'] = 'Locale';
$txt['languages_default'] = 'Default';
$txt['languages_character_set'] = 'Character Set';
$txt['languages_users'] = 'Users';
$txt['language_settings_writable'] = 'Warning: Settings.php is not writable so the default language setting cannot be saved.';
$txt['edit_languages'] = 'Edit Languages';
$txt['lang_file_not_writable'] = '<strong>Warning:</strong> The primary language file (%1$s) is not writable. You must make this writable before you can make any changes.';
$txt['lang_entries_not_writable'] = '<strong>Warning:</strong> The language file you wish to edit (%1$s) is not writable. You must make this writable before you can make any changes.';
$txt['languages_ltr'] = 'Right to Left';

$txt['add_language'] = 'Add Language';
$txt['add_language_smf'] = 'Download from Simple Machines';
$txt['add_language_smf_browse'] = 'Type name of language to search for or leave blank to search for all.';
$txt['add_language_smf_install'] = 'Install';
$txt['add_language_found_title'] = 'Found Languages';
$txt['add_language_smf_found'] = 'The following languages were found. Click the install link next to the language you wish to install, you will then be taken to the package manager to install.';
$txt['add_language_error_no_response'] = 'The Simple Machines site is not responding. Please try again later.';
$txt['add_language_error_no_files'] = 'No files could be found.';
$txt['add_language_smf_desc'] = 'Description';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Version';

$txt['edit_language_entries_primary'] = 'Below are the primary language settings for this language pack.';
$txt['edit_language_entries'] = 'Edit Language Entries';
// argument(s): $scripturl, $txt['themeadmin_edit_title']
$txt['edit_language_entries_desc'] = 'You can customize the individual text entries for this language. Select a file to load its entries, and then edit them below.<br><br>When you edit (or remove) an entry, a commented out version of the original is preserved in the file. If you ever need to restore your edited strings to their original state, or if you need more advanced access to these language files, go to <a href="%1$s?action=admin;area=theme;sa=edit">%2$s</a>, browse to the file you are looking for, and then edit it directly using SMF\'s built-in text editor.';
$txt['edit_language_entries_file'] = 'Select entries to edit';
$txt['languages_dictionary'] = 'Dictionary';
$txt['languages_rtl'] = 'Enable &quot;Right to Left&quot; Mode';

$txt['lang_file_desc_index'] = 'General Strings';
$txt['lang_file_desc_EmailTemplates'] = 'Email Templates';

$txt['languages_download'] = 'Download Language Pack';
$txt['languages_download_note'] = 'This page lists all the files that are contained within the language pack and some useful information about each one. All files that have their associated check box marked will be copied.';
$txt['languages_download_info'] = '<strong>Note:</strong>
	<ul class="normallist">
		<li>Files which have the status &quot;Not Writable&quot; means SMF will not be able to copy this file to the directory at the present and you must make the destination writable either using an FTP client or by filling in your details at the bottom of the page.</li>
		<li>The Version information for a file displays the last SMF version which it was updated for. If it is indicated in green then this is a newer version than you have at current. If amber this indicates it\'s the same version number as at current, red indicates you have a newer version installed than contained in the pack.</li>
		<li>Where a file already exists on your forum the &quot;Already Exists&quot; column will have one of two values. &quot;Identical&quot; indicates that the file already exists in an identical form and need not be overwritten. &quot;Different&quot; means that the contents vary in some way and overwriting is probably the optimum solution.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Primary Files';
$txt['languages_download_filename'] = 'File Name';
$txt['languages_download_dest'] = 'Destination';
$txt['languages_download_writable'] = 'Writable';
$txt['languages_download_version'] = 'Version';
$txt['languages_download_older'] = 'You have a newer version of this file installed, overwriting is not recommended.';
$txt['languages_download_exists'] = 'Already Exists';
$txt['languages_download_exists_same'] = 'Identical';
$txt['languages_download_exists_different'] = 'Different';
$txt['languages_download_overwrite'] = 'Overwrite';
$txt['languages_download_not_chmod'] = 'You cannot proceed with the installation until all files selected to be copied are writable.';
$txt['languages_download_illegal_paths'] = 'Package contains illegal paths - please contact Simple Machines';
$txt['languages_download_complete'] = 'Installation Complete';
$txt['languages_download_complete_desc'] = 'Language pack installed successfully. Please click <a href="%1$s">here</a> to return to the languages page';
$txt['languages_delete_confirm'] = 'Are you sure you want to delete this language?';
$txt['languages_max_inputs_warning'] = 'You can only save %1$s edits at a time. Please click the Save button now, and then continue editing once this page has reloaded.';
$txt['languages_txt'] = 'Standard text strings';
$txt['languages_helptxt'] = 'Help text';
$txt['languages_editortxt'] = 'User interface for the editor';
$txt['languages_tztxt'] = 'Time zone descriptions';
$txt['languages_txt_for_timezones'] = 'Place names';
$txt['languages_txt_for_email_templates'] = 'Email message templates';
$txt['languages_enter_key'] = 'Enter a variable name for this text string';
$txt['languages_invalid_key'] = 'Sorry, but this variable name is invalid: ';

$txt['allow_cors'] = 'Allow CORS (Cross Origin Resource Sharing)';
$txt['allow_cors_credentials'] = 'Allow sending credentials over CORS';
$txt['cors_domains'] = 'Additional CORS domains';
$txt['cors_headers'] = 'Additional CORS headers';

$txt['setting_frame_security'] = 'Frame Security Options';
$txt['setting_frame_security_SAMEORIGIN'] = 'Allow Same Origin';
$txt['setting_frame_security_DENY'] = 'Deny all frames';
$txt['setting_frame_security_DISABLE'] = 'Disabled';

$txt['setting_proxy_ip_header'] = 'Reverse Proxy IP Header';
$txt['setting_proxy_ip_header_disabled'] = 'Do not allow any Proxy IP Headers';
$txt['setting_proxy_ip_header_autodetect'] = 'Auto-detect Proxy IP header';
$txt['setting_proxy_ip_servers'] = 'Reverse Proxy Servers IPs';

$txt['select_boards_from_list'] = 'Select boards which apply';

$txt['topic_move_any'] = 'Allow moving of topics to read-only boards';

$txt['defaultMaxListItems'] = 'Maximum number of items per page in lists';

$txt['tfa_mode'] = 'Two-Factor Authentication';
$txt['tfa_mode_forced'] = 'Force on selected membergroups';
$txt['tfa_mode_forcedall'] = 'Force for ALL users';
$txt['tfa_mode_forced_help'] = 'Please enable 2FA in your account in order to be able to force 2FA on other users!';
$txt['tfa_mode_enabled'] = 'Enabled';
$txt['tfa_mode_disabled'] = 'Disabled';
$txt['tfa_mode_subtext'] = 'Allows users to have a second layer of security while logging in, users would need an app like Google Authenticator paired with their account';

$txt['export_settings_description'] = 'Members can export copies of their profile data, optionally including their posts and personal messages.<br>To avoid overtaxing server resources, SMF slowly compiles the exported data to a downloadable file stored in a secured directory.';
$txt['export_dir'] = 'Directory for profile data export files';
$txt['export_expiry'] = 'Automatically delete profile data export files after';
$txt['export_min_diskspace_pct'] = 'Pause exports if free space on disk is less than';
$txt['export_rate'] = 'Rate at which to process posts & personal messages for export';
$txt['export_rate_desc'] = 'Higher values will compile exports more quickly, but could affect forum performance.';

?>