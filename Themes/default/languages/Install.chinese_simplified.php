<?php
// Version: 2.1.3; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = '0';

$txt['install_step_welcome'] = '欢迎';
$txt['install_step_writable'] = '可写检查';
$txt['install_step_forum'] = '论坛设置';
$txt['install_step_databaseset'] = '数据库设置';
$txt['install_step_databasechange'] = '数据库填充';
$txt['install_step_admin'] = '管理员帐户';
$txt['install_step_delete'] = '完成安装';

$txt['smf_installer'] = 'SMF安装程序';
$txt['installer_language'] = '语言';
$txt['installer_language_set'] = '设置';
$txt['congratulations'] = '恭喜您，安装过程已完成！';
$txt['congratulations_help'] = '如果您需要帮助支持或是在SMF不能正常工作时，请记住，您可以随时到我们的官方论坛<a href="http://www.simplemachines.org/community/index.php" target="_blank">求助</a>（英文）。';
$txt['still_writable'] = 'Your installation directory is still writable. It is a good idea to chmod it, so that it is not writable for security reasons.';
$txt['delete_installer'] = '点击这里立即删除install.php文件。';
$txt['delete_installer_maybe'] = '<em>(does not work on all servers.)</em>';
$txt['go_to_your_forum'] = '现在你可以访问<a href="%1$s">您新安装的论坛</a>并开始使用它。在您访问管理员中心前，您应先确保您已处于登陆状态。';
$txt['good_luck'] = '祝你好运！<br>Simple Machines';

$txt['install_welcome'] = '欢迎';
$txt['install_welcome_desc'] = 'Welcome to SMF. This script will guide you through the process for installing %1$s. We will gather a few details about your forum over the next few steps, and after a couple of minutes your forum will be ready for use.';
$txt['install_no_https'] = 'Your environment does not support https streams.  Certain functions, e.g., receiving updates from simplemachines.org, will not work.';
$txt['install_no_mbstring'] = 'Your environment does not support the required mbstring library.  Please enable mbstring and try again.';
$txt['install_no_fileinfo'] = 'Your environment does not support the required fileinfo library.  Please enable fileinfo and try again.';
$txt['install_all_lovely'] = 'We have completed some initial tests on your server and everything appears to be in order. Simply click the &quot;Continue&quot; button below to get started.';

$txt['user_refresh_install'] = '论坛已刷新';
$txt['user_refresh_install_desc'] = '在安装过程中，安装程序使用您提供的详细信息发现数据库中已存在本安装程序曾经创建的一个或多个表。<br>安装程序使用默认数据重新创建了安装中缺少的任何表，但未在现有的表中删除任何数据。';

$txt['default_topic_subject'] = '欢迎使用SMF！';
$txt['default_topic_message'] = '欢迎来到Simple Machines论坛！<br><br>我们希望您喜欢使用您的论坛。如果您有任何问题，请随时访问[url=http://www.simplemachines.org/community/index.php]寻求帮助[/url].<br><br>谢谢！<br>Simple Machines';
$txt['default_board_name'] = '一般交流';
$txt['default_board_description'] = '在该版块中，您可以随意谈论任何一切事情。';
$txt['default_category_name'] = '一般分类';
$txt['default_time_format'] = '%Y年%m月%d日 %H:%M';
$txt['default_news'] = 'SMF — 刚刚安装！';
$txt['default_reserved_names'] = 'Admin\nWebmaster\nGuest\nroot\n管理员\n版主\n游客';
$txt['default_fugue_smileyset_name'] = 'Fugue组';
$txt['default_alienine_smileyset_name'] = 'Alienine\'s Set';
$txt['default_aaron_smileyset_name'] = 'Aaron组';
$txt['default_akyhne_smileyset_name'] = 'Akyhne组';
$txt['default_legacy_smileyset_name'] = '2.0 Default';
$txt['default_theme_name'] = 'SMF 默认主题 - Curve2';

$txt['default_administrator_group'] = '管理员';
$txt['default_global_moderator_group'] = '超级版主';
$txt['default_moderator_group'] = '版主';
$txt['default_newbie_group'] = '新人';
$txt['default_junior_group'] = '初级会员';
$txt['default_full_group'] = '正式会员';
$txt['default_senior_group'] = '高级会员';
$txt['default_hero_group'] = '荣誉会员';

$txt['default_smiley_smiley'] = '表情';
$txt['default_wink_smiley'] = '眨眼';
$txt['default_cheesy_smiley'] = '调皮';
$txt['default_grin_smiley'] = '微笑';
$txt['default_angry_smiley'] = '生气';
$txt['default_sad_smiley'] = '悲伤';
$txt['default_shocked_smiley'] = '吃惊';
$txt['default_cool_smiley'] = '酷';
$txt['default_huh_smiley'] = '咦？';
$txt['default_roll_eyes_smiley'] = '翻白眼';
$txt['default_tongue_smiley'] = '吐舌';
$txt['default_embarrassed_smiley'] = '尴尬';
$txt['default_lips_sealed_smiley'] = '不说话';
$txt['default_undecided_smiley'] = '犹豫不决';
$txt['default_kiss_smiley'] = '吻';
$txt['default_cry_smiley'] = '哭';
$txt['default_evil_smiley'] = '坏笑';
$txt['default_azn_smiley'] = 'Azn';
$txt['default_afro_smiley'] = '阿夫罗文';
$txt['default_laugh_smiley'] = '笑';
$txt['default_police_smiley'] = '警察';
$txt['default_angel_smiley'] = '天使';

$txt['error_message_click'] = '点击这里';
$txt['error_message_try_again'] = '再次尝试这一步';
$txt['error_message_bad_try_again'] = '尝试安装，但要注意的是我们<em>强烈</em>不推荐这样做。';

$txt['install_settings'] = '论坛设置';
$txt['install_settings_info'] = '该页面要求您为论坛定义几个关键设置。SMF已经为您自动检测到关键设置。';
$txt['install_settings_name'] = '论坛名称';
$txt['install_settings_name_info'] = '此处填写您的论坛的名称，比如“测试论坛”';
$txt['install_settings_name_default'] = '我的社区';
$txt['install_settings_url'] = '论坛网址';
$txt['install_settings_url_info'] = '此处填写您论坛的网址（URL），<strong>末尾不要添加\'/\'！</strong><br>在大多数情况下，您可以保留此处的默认值——这通常是正确的。';
$txt['install_settings_reg_mode'] = '注册模式';
$txt['install_settings_reg_modes'] = '注册模式';
$txt['install_settings_reg_immediate'] = '即时注册';
$txt['install_settings_reg_email'] = '电子邮件激活';
$txt['install_settings_reg_admin'] = '管理员审批';
$txt['install_settings_reg_disabled'] = '禁用注册';
$txt['install_settings_reg_mode_info'] = '该选项允许您在安装时更改注册模式，以防止不必要的注册。';
$txt['install_settings_compress'] = 'Gzip输出';
$txt['install_settings_compress_title'] = '压缩输出以节省带宽。';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = 'This function does not work properly on all servers, but it can save you a lot of bandwidth.<br>Click <a href="install.php?obgz=1&amp;pass_string=PASS" onclick="return reqWin(this.href, 200, 60);" target="_blank" rel="noopener">here</a> to test it. (it should just say "PASS".)';
$txt['install_settings_dbsession'] = '数据库会话';
$txt['install_settings_dbsession_title'] = '使用数据库而不是使用文件来记录会话(sessions)。';
$txt['install_settings_dbsession_info1'] = '使用这个功能几乎总是最好的，因为这能使会话更可靠。';
$txt['install_settings_dbsession_info2'] = 'This feature is generally a good idea, but it may not work properly on this server.';
$txt['install_settings_stats'] = '允许统计数据收集';
$txt['install_settings_stats_title'] = '允许Simple Machines每月收集基本数据';
$txt['install_settings_stats_info'] = '如果启用此选项，将允许Simple Machines每月访问您的站点一次，以收集基本统计数据。这将帮助我们做出关于优化软件配置的决策。要了解更多信息，请访问我们的<a href="http://www.simplemachines.org/about/stats.php" target="_blank">信息页面</a>（英文）。';
$txt['install_settings_proceed'] = '继续';

$txt['db_settings'] = '数据库服务器设置';
$txt['db_settings_info'] = 'These are the settings to use for your database server. If you do not know the values, you should ask your host what they are.';
$txt['db_settings_type'] = '数据库类型';
$txt['db_settings_type_info'] = 'Multiple supported database types were detected, which do you wish to use? Please note that running pre-SMF 2.0 RC3 along with newer SMF versions in the same PostgreSQL database is not supported. You need to upgrade your older installations in that case.';
$txt['db_settings_server'] = '服务器名称';
$txt['db_settings_server_info'] = 'This is nearly always localhost, so if you do not know, try localhost.';
$txt['db_settings_username'] = '用户名';
$txt['db_settings_username_info'] = 'Fill in the username you need to connect to your database here.<br>If you do not know what it is, try the username of your ftp account, most of the time they are the same.';
$txt['db_settings_password'] = '密码';
$txt['db_settings_password_info'] = 'Put the password you need to connect to your database here.<br>If you do not know this, you should try the password to your ftp account.';
$txt['db_settings_database'] = '数据库名称';
$txt['db_settings_database_info'] = '此处填写用于SMF存储其数据的数据库的名称。';
$txt['db_settings_database_info_note'] = '如果此数据库不存在，此安装程序将尝试创建它。';
$txt['db_settings_port'] = '数据库端口';
$txt['db_settings_port_info'] = '保留空白以使用默认值';
$txt['db_settings_prefix'] = '表前缀';
$txt['db_settings_prefix_info'] = 'The prefix for every table in the database. <strong>Do not install two forums with the same prefix!</strong><br>This key allows for multiple installations in one database.';
$txt['db_populate'] = '已填充数据库';
$txt['db_populate_info'] = '您的设置现在已经保存，数据库已经填充了使您的论坛正常使用所需的所有数据。填充数据总计：';
$txt['db_populate_info2'] = '点击“继续”以进入管理员帐户创建页面。';
$txt['db_populate_inserts'] = '插入了%1$d行。';
$txt['db_populate_tables'] = '创建了%1$d张表。';
$txt['db_populate_insert_dups'] = '忽略%1$d条重复插入。';
$txt['db_populate_table_dups'] = '忽略%1$d张重复表。';

$txt['user_settings'] = 'Create your account';
$txt['user_settings_info'] = '现在，安装程序将为您创建一个新的管理员帐户。';
$txt['user_settings_username'] = '您的用户名';
$txt['user_settings_username_info'] = '选择你想要登录名。<br>您可以在稍后更改此名称。';
$txt['user_settings_password'] = '密码';
$txt['user_settings_password_info'] = 'Fill in your preferred password here and remember it well!';
$txt['user_settings_again'] = '密码';
$txt['user_settings_again_info'] = '(just for verification).';
$txt['user_settings_admin_email'] = '管理员电子邮件地址';
$txt['user_settings_admin_email_info'] = '提供你的电子邮件地址。这必须是有效的电子邮件地址！';
$txt['user_settings_server_email'] = '网站管理员电子邮箱地址';
$txt['user_settings_server_email_info'] = '供<strong>SMF发送电子邮件的电子邮箱地址</strong>。这必须是一个有效的电子邮件地址！';
$txt['user_settings_database'] = '数据库密码';
$txt['user_settings_database_info'] = 'For security reasons, the installer requires that you supply the database password to create an administrator account.';
$txt['user_settings_skip'] = '跳过';
$txt['user_settings_skip_sure'] = '您确定要跳过管理员帐户创建吗？';
$txt['user_settings_proceed'] = '完成';

$txt['ftp_checking_writable'] = 'Checking files are writable';
$txt['ftp_setup'] = 'FTP连接信息';
$txt['ftp_setup_info'] = 'This installer can connect via FTP to fix the files that need to be writable and are not. If this does not work for you, you will have to go in manually and make the files writable. Please note that this does not support SSL right now.';
$txt['ftp_setup_why'] = '这一步是做什么的？';
$txt['ftp_setup_why_info'] = 'Some files need to be writable for SMF to work properly. This step allows you to let the installer make them writable for you. However, in some cases it will not work. In this case, please make the following files 777 (writable, 755 on some hosts):';
$txt['ftp_setup_again'] = '以再次测试这些文件是否可以写入。';

$txt['error_missing_files'] = '无法在此程序的目录中找到关键的安装文件！<br><br>请确保您上传了整个安装包（包括sql文件），然后再试一次。';
$txt['error_session_save_path'] = 'Please inform your host that the <strong>session.save_path specified in php.ini</strong> is not valid!  It needs to be changed to a directory that <strong>exists</strong> and is <strong>writable</strong> by the user PHP is running under.<br>';
$txt['error_windows_chmod'] = 'You are on a windows server and some crucial files are not writable. Please ask your host to give <strong>write permissions</strong> to the user PHP is running under for the files in your SMF installation. The following files or directories need to be writable:';
$txt['settings_error'] = 'Your settings could not be saved to Settings.php.';
$txt['error_ftp_no_connect'] = '使用这些信息无法连接到FTP服务器。';
$txt['error_db_file'] = '未找到数据库源脚本！请检查文件%1$s是否在您的论坛源代码目录中。';
$txt['error_db_connect'] = '使用提供的信息无法连接到数据库服务器。<br><br>如果您不确定要输入什么内容，请与您的主机管理员联系。';
$txt['error_db_connect_settings'] = 'Cannot connect to the database server.<br><br>Please check that the database info variables are correct in Settings.php.';
$txt['error_db_database'] = 'The installer was unable to access the &quot;<em>%1$s</em>&quot; database. With some hosts, you have to create the database in your administration panel before SMF can use it. Some also add prefixes, such as your username, to your database names.';
$txt['error_db_queries'] = '某些查询未被正确执行。这可能是由于您的数据库软件版本不受支持（开发版或旧版本）引起的。<br><br>有关这些查询的技术信息如下：';
$txt['error_db_queries_line'] = '第#行';
$txt['error_db_missing'] = '安装程序无法检测到PHP中的任何数据库支持。 请询问您的主机管理员以确保PHP在编译时已载入所需的数据库类库，且已加载正确的扩展库。';
$txt['error_db_script_missing'] = '安装程序未找到任何安装检测到的数据库所需要的脚本文件。请检查您是否已将必要的安装脚本文件上传到您的论坛目录，例如“%1$s”';
$txt['error_session_missing'] = 'The installer was unable to detect sessions support in your server\'s installation of PHP. Please ask your host to ensure that PHP was compiled with session support (which in fact is the PHP default, meaning your host currently has explicitly disabled it).';
$txt['error_user_settings_again_match'] = '您输入了两个完全不同的密码！';
$txt['error_user_settings_no_password'] = '您的密码长度必须至少有四个字符。';
$txt['error_user_settings_taken'] = '对不起，该用户名或电子邮件地址已被注册。<br><br>尚未创建新帐户。';
$txt['error_user_settings_query'] = '尝试创建管理员帐户时发生数据库错误。错误信息如下：';
$txt['error_sourcefile_missing'] = 'Unable to find the Sources/%1$s file. Please make sure it was uploaded properly, and then try again.';
$txt['error_db_alter_priv'] = 'The database account you specified does not have permission to ALTER, CREATE, and/or DROP tables in the database. This is necessary for SMF to function properly.';
$txt['error_versions_do_not_match'] = '安装程序检测到您已经安装了另一个SMF的特定版本。如果您想要升级，您应该使用升级程序，而不是安装程序。<br><br>若您希望重新安装，请对已安装论坛进行备份，然后后删除当前数据库中的数据。';
$txt['error_mod_security'] = '安装程序检测到 mod_security 模块已安装在您的Web服务器上。mod_security 模块会阻止提交表单，甚至在SMF检查表单内容之前。SMF内置了一个安全扫描程序，它将比 mod_security 模块更有效地工作，并且不会阻止提交表单。<br><br><a href="http://www.simplemachines.org/redirect/mod_security">有关禁用 mod_security 的更多信息（英文）</a>';
$txt['error_mod_security_no_write'] = '安装程序检测到 mod_security 模块已安装在您的Web服务器上。mod_security 模块会阻止提交表单，甚至在SMF检查表单内容之前。SMF内置了一个安全扫描程序，它将比 mod_security 模块更有效地工作，并且不会阻止提交表单。<br><br><a href="http://www.simplemachines.org/redirect/mod_security">有关禁用 mod_security 的更多信息（英文）</a><br><br>或者，您可能希望使用ftp客户端将论坛目录下的 .htaccess 的权限更改为可写（777），然后刷新此页面。';
$txt['error_utf8_version'] = '当前版本的数据库不支持UTF-8字符集的使用。您仍然可以安装SMF，安装程序将不再对UTF-8支持进行检查。若将来你想切换到UTF-8字符集下（例如，在论坛的数据库服务器升级到 %1$s 或更新的版本后）您可以通过管理面板将您的论坛字符集转换为UTF-8。';
$txt['error_valid_admin_email_needed'] = '您尚未为管理员帐户输入有效的电子邮件地址。';
$txt['error_valid_server_email_needed'] = '您尚未输入有效的网站管理员电子邮箱地址。';
$txt['error_already_installed'] = 'The installer has detected that you already have SMF installed. It is strongly advised that you do <strong>not</strong> try to overwrite an existing installation, continuing with installation <strong>may result in the loss or corruption of existing data</strong>.<br><br>If you wish to upgrade please visit the <a href="https://www.simplemachines.org">Simple Machines Website</a> and download the latest <em>upgrade</em> package.<br><br>If you wish to overwrite your existing installation, including all data, it is recommended that you delete the existing database tables and replace Settings.php and try again.';
$txt['error_warning_notice'] = '警告！';
$txt['error_script_outdated'] = 'This install script is out of date! The current version of SMF is %1$s, but this install script is for %2$s.<br><br>
	It is recommended that you visit the <a href="https://www.simplemachines.org">Simple Machines</a> website to ensure you are installing the latest version.';
$txt['error_db_prefix_numeric'] = '您所选的数据库类型不支持使用数字前缀。';
$txt['error_pg_scs'] = 'PostgreSQL is configured incorrectly. Please turn on the standard_conforming_strings configuration parameter.';
$txt['error_invalid_characters_username'] = '用户名中使用的字符无效。';
$txt['error_username_too_long'] = 'Username may only be up to 25 characters long.';
$txt['error_username_left_empty'] = '用户名字段为空。';
$txt['error_db_prefix_reserved'] = '输入的前缀是保留前缀。请输入其他前缀。';
$txt['error_utf8_support'] = 'The database you are trying to use is not using UTF-8 charset';

$txt['ftp_login'] = '您的FTP连接信息';
$txt['ftp_login_info'] = '此Web安装程序需要您的FTP信息才能为您自动安装。请注意，安装过程中这些信息仅用于设置SMF，而不会被保存。';
$txt['ftp_server'] = '服务器';
$txt['ftp_server_info'] = 'FTP服务器的地址(通常是localhost)和端口。';
$txt['ftp_port'] = '端口';
$txt['ftp_username'] = '用户名';
$txt['ftp_username_info'] = '要用其登录的用户名。<em>该用户名将不会被保存。</em>';
$txt['ftp_password'] = '密码';
$txt['ftp_password_info'] = '要用其登录的密码。<em>该密码将不会被保存。</em>';
$txt['ftp_path'] = '安装路径';
$txt['ftp_path_info'] = 'This is the <em>relative</em> path you use in your FTP client.';
$txt['ftp_path_found_info'] = '上方文本框中的路径已被自动检测到。';
$txt['ftp_path_help'] = 'Your FTP path is the path you see when you log in to your FTP client. It commonly starts with &quot;<pre>www</pre>&quot;, &quot;<pre>public_html</pre>&quot;, or &quot;<pre>httpdocs</pre>&quot;, but it should include the directory SMF is in too, such as &quot;/public_html/forum&quot;. It is different from your URL and full path.<br><br>Files in this path may be overwritten, so make sure it is correct.';
$txt['ftp_path_help_close'] = '关闭';
$txt['ftp_connect'] = '链接';

$txt['force_ssl'] = '启用 SSL';
$txt['force_ssl_label'] = '在全论坛中强制使用SSL';
$txt['force_ssl_info'] = '<b>请确保全论坛都支持SSL和HTTPS，否则您的论坛可能无法访问</b>';

$txt['chmod_linux_info'] = '若您有shell帐户权限，下面的命令可以方便地自动更正对这些文件的权限';

// The upgrader needs text strings too!
$txt['upgrade_step_login'] = 'Login';
$txt['upgrade_step_options'] = 'Upgrade Options';
$txt['upgrade_step_backup'] = 'Backup';
$txt['upgrade_step_database'] = 'Database Changes';
$txt['upgrade_step_convertutf'] = 'Convert to UTF-8';
$txt['upgrade_step_convertjson'] = 'Convert serialized strings to JSON';
$txt['upgrade_step_delete'] = 'Delete Upgrade.php';

$txt['upgrade_upgrade_utility'] = 'SMF 升级实用程序';
$txt['upgrade_warning'] = '警告！';
$txt['upgrade_critical_error'] = '严重错误！';
$txt['upgrade_continue'] = '继续';
$txt['upgrade_skip'] = '跳过';
$txt['upgrade_note'] = '注意！';
$txt['upgrade_step'] = '步骤';
$txt['upgrade_steps'] = '步骤';
$txt['upgrade_progress'] = '进度';
$txt['upgrade_overall_progress'] = '总进度';
$txt['upgrade_step_progress'] = '当前步骤进度';
$txt['upgrade_time_elapsed'] = '已耗时';
$txt['upgrade_time_mins'] = '分钟';
$txt['upgrade_time_secs'] = '秒';
$txt['upgrade_username'] = 'Username:';
$txt['upgrade_wrong_username'] = 'Username Incorrect';
$txt['upgrade_password'] = 'Password:';
$txt['upgrade_wrong_password'] = 'Password Incorrect';
$txt['upgrade_script_timeout_minutes'] = 'This upgrade script cannot be run until %1$s has been inactive for at least %2$d minutes';
$txt['upgrade_script_timeout_seconds'] = 'This upgrade script cannot be run until %1$s has been inactive for at least %2$d seconds';

$txt['upgrade_wait'] = 'Please wait while a backup is created. For large forums this may take some time!';
$txt['upgrade_wait2'] = 'Please wait while your database is converted to UTF-8. For large forums this may take some time!';
$txt['upgrade_sec_login'] = 'For security purposes please login with your admin account to proceed with the upgrade.';
$txt['upgrade_incomplete'] = '未完成';
$txt['upgrade_not_quite_done'] = '尚未完成！';
$txt['upgrade_paused_overload'] = 'This upgrade has been paused to avoid overloading your server. Do not worry, nothing is wrong. Simply click the <label for="contbutt">continue button</label> below to keep going.';
$txt['upgrade_continue_step'] = 'Continue from step reached during last execution of upgrade script.';
$txt['upgrade_bypass'] = '<strong>Note:</strong> If necessary, the above security check can be bypassed for users who may administrate a server, but may not have admin rights on the forum. In order to bypass the above check, simply open &quot;upgrade.php&quot; in a text editor and replace &quot;$disable_security = false;&quot; with &quot;$disable_security = true;&quot; and refresh this page.';
$txt['upgrade_areyouready'] = 'Before the upgrade gets underway, please review the options below and press &quot;Continue&quot; when you are ready to begin.';
$txt['upgrade_backup_table'] = 'Perform a tables backup in your database with the prefix';
$txt['upgrade_backup_complete'] = 'Backup Complete! Click Continue to Proceed.';
$txt['upgrade_recommended'] = 'recommended!';
$txt['upgrade_maintenance'] = 'Put the forum into maintenance mode during upgrade.';
$txt['upgrade_maintenance_title'] = 'Maintenance Title:';
$txt['upgrade_maintenance_message'] = 'Maintenance Message:';
$txt['upgrade_customize'] = 'Customize';
$txt['upgrade_debug_info'] = 'Output extra debugging information.';
$txt['upgrade_empty_errorlog'] = 'Empty error log before upgrading.';
$txt['upgrade_delete_karma'] = 'Delete all karma settings and info from the DB';
$txt['upgrade_reprocess_attachments'] = 'Rerun attachment conversion';
$txt['upgrade_stats_collection'] = 'Allow Simple Machines to collect basic stats monthly.';
$txt['upgrade_stats_info'] = 'If enabled, this will allow Simple Machines to visit your site once a month to collect basic statistics. This will help us make decisions as to which configurations to optimise the software for. For more information please visit our <a href="%1$s" target="_blank" rel="noopener">info page</a>.';
$txt['upgrade_migrate_settings_file'] = 'Migrate to a new Settings file.';
$txt['upgrade_db_changes'] = 'Executing database changes';
$txt['upgrade_db_patient'] = 'Please be patient - this may take some time on large forums. The time elapsed increments from the server to show progress is being made.';
$txt['upgrade_db_complete'] = '1 Database Updates Complete! Click Continue to Proceed.';
$txt['upgrade_db_complete2'] = 'Database Updates Complete! Click Continue to Proceed.';
$txt['upgrade_script'] = 'Executing upgrade script';
$txt['upgrade_error'] = 'Error!';
$txt['upgrade_unknown_error'] = 'Unknown Error!';
/* Same sentence, 3 different strings */
$txt['upgrade_completed'] = 'Completed';
$txt['upgrade_outof'] = 'out of';
$txt['upgrade_tables'] = 'tables.';

$txt['upgrade_run_script'] = 'We recommend that you do not run this script unless you are sure that';
$txt['upgrade_run_script2'] = 'has completed their upgrade.';
$txt['upgrade_run'] = 'You can choose to either run the upgrade again from the beginning or continue from the last step reached during the most recent upgrade.';

$txt['upgrade_completed_table'] = 'Completed Table:';
$txt['upgrade_current_table'] = 'Current Table:';
$txt['upgrade_fulltext'] = 'Please note that your fulltext index was dropped to facilitate the conversion and will need to be recreated in the admin area after the upgrade is complete.';
$txt['upgrade_conversion_proceed'] = 'Conversion Complete! Click Continue to Proceed.';
$txt['upgrade_convert_datajson'] = 'Converting data from serialize to JSON...';
$txt['upgrade_json_completed'] = 'Convert to JSON Complete! Click Continue to Proceed.';
$txt['upgrade_executing'] = 'Executing:';
$txt['upgrade_of'] = 'of';
$txt['upgrade_admin_login'] = 'Admin Login:';
$txt['upgrade_admin_disabled'] = '(DISABLED)';
$txt['upgrade_done'] = 'Upgrade complete. Now you are ready to use <a href="%1$s/index.php">your installation of SMF</a>. Hope you like it!';

$txt['upgrade_delete_now'] = 'Delete upgrade.php and its data files now';
$txt['upgrade_delete_server'] = '(does not work on all servers).';
$txt['upgrade_problems'] = 'If you had any problems with this upgrade, or have any problems using SMF, please do not hesitate to <a href="%1$s">ask us for assistance</a>.';
$txt['upgrade_luck'] = 'Best of luck,';

$txt['upgrade_ftp_login'] = 'Your FTP connection information';
$txt['upgrade_ftp_perms'] = 'The upgrader can fix any issues with file permissions to make upgrading as simple as possible. Simply enter your connection information below or alternatively click <a href="#" onclick="warning_popup();">here</a> for a list of files which need to be changed.';
$txt['upgrade_ftp_warning'] = 'Warning';
$txt['upgrade_ftp_files'] = 'The following files need to be made writable to continue:';
$txt['upgrade_ftp_shell'] = 'If you have a shell account, the command below can automatically correct permissions on these files';
$txt['upgrade_ftp_error'] = 'The following error was encountered when trying to connect:';

$txt['upgrade_ready_proceed'] = 'Thank you for choosing to upgrade to SMF %1$s. All files appear to be in place and the upgrade can now proceed.';
$txt['upgrade_error_script_js'] = '升级程序找不到 script.js 文件，或者它已经过期。请确保 theme（主题）目录的路径正确。您可以从<a href="http://www.simplemachines.org">Simple Machines 官方网站（英文）</a>下载设置检查工具。';
$txt['upgrade_warning_lots_data'] = '本升级程序检测到您的论坛包含大量需要升级的数据。升级过程可能需要相当长的时间，这取决于您的服务器和论坛大小，对于非常大的论坛（约30万条帖子与回复），可能需要几个小时才能完成。';
$txt['upgrade_warning_out_of_date'] = '该升级程序已过期！当前SMF的最新版本是 <em id="smfVersion" style="white-space: nowrap;">??</em>，但该升级程序仅可升级至 <em id="yourVersion" style="white-space: nowrap;">%1$s</em>。<br><br>建议您访问<a href="http://www.simplemachines.org">Simple Machines 官方网站（英文）</a>以确保您正在升级到最新版本。';

$txt['upgrade_forumdir_settings'] = 'It looks as if your forum directory settings <em>might</em> be incorrect. Your forum directory is currently set to &quot;%1$s&quot;, but should probably be &quot;%2$s&quot;. Settings.php currently lists your paths as:';
$txt['upgrade_forumdir'] = 'Forum Directory:';
$txt['upgrade_sourcedir'] = 'Source Directory:';
$txt['upgrade_cachedir'] = 'Cache Directory:';
$txt['upgrade_incorrect_settings'] = 'If these seem incorrect please open Settings.php in a text editor before proceeding with this upgrade. If they are incorrect due to you moving your forum to a new location please download and execute the <a href="https://download.simplemachines.org/?tools">Repair Settings</a> tool from the Simple Machines website before continuing.';

$txt['upgrade_fulltext_error'] = 'Your fulltext search index was dropped to facilitate the conversion. You will need to recreate it.';
$txt['upgrade_writable_files'] = 'The following files need to be writable to continue the upgrade. Please ensure the Windows permissions are correctly set to allow this:';
$txt['upgrade_time_user'] = '&quot;%1$s&quot; is running the upgrade script.';

// We represent the time here in backwards variables, as it makes the code easier.
$txt['upgrade_time_hms'] = 'The upgrade script has been running for the last %3$d hours, %2$d minutes and %1$d seconds.';
$txt['upgrade_time_ms'] = 'The upgrade script has been running for the last %2$d minutes and %1$d seconds.';
$txt['upgrade_time_s'] = 'The upgrade script has been running for the last %1$d seconds.';
$txt['upgrade_time_updated_hms'] = 'The upgrade script was last updated %3$d hours, %2$d minutes and %1$d seconds ago.';
$txt['upgrade_time_updated_hm'] = 'The upgrade script was last updated %2$d minutes and %1$d seconds ago.';
$txt['upgrade_time_updated_s'] = 'The upgrade script was last updated %1$d seconds ago.';
$txt['upgrade_completed_time_hms'] = 'Upgrade completed in %3$d hours, %2$s minutes and %1$s seconds';
$txt['upgrade_completed_time_ms'] = 'Upgrade completed in %2$s minutes and %1$s seconds';
$txt['upgrade_completed_time_s'] = 'Upgrade completed in %1$s seconds';
$txt['upgrade_success_time_db'] = 'Successful! Database upgrades completed in %3$d hours, %2$d minutes and %1$d seconds.';

$txt['upgrade_unsuccessful'] = 'Unsuccessful!';
$txt['upgrade_thisquery'] = 'This query:';
$txt['upgrade_causerror'] = 'Caused the error:';
$txt['upgrade_completedtables_outof'] = 'Completed <span id="tab_done">%1$d</span> out of %2$d tables.';
$txt['upgrade_success'] = 'Successful!';
$txt['upgrade_loop'] = 'Upgrade script appears to be going into a loop - step: ';
$txt['upgrade_respondtime'] = 'Server has not responded for %1$d seconds. It may be worth waiting a little longer before trying again.';
$txt['upgrade_respondtime_clickhere'] = 'Click here to try again.';
$txt['mtitle'] = 'Upgrading the forum...';
$txt['mmessage'] = 'Don\'t worry, your forum will be updated shortly. It will only be a minute ;).';

// Upgrader error messages
// argument(s): template name (if applicable)
$txt['error_unexpected_template_call'] = 'Error: Unexpected call to use the %1$s template. Please copy and paste all the text above and visit the SMF support forum to let the developers know that there is a bug.';
$txt['error_invalid_template'] = 'Upgrade aborted!  Invalid template: template_%1$s';
$txt['error_lang_index_missing'] = 'The upgrader was unable to find language files for the selected language, %1$s.<br>SMF will not work in this language without the language files installed.<br><br>Please either install them, or <a href="%2$s?step=0;lang=english">try English instead</a>.';
$txt['error_upgrade_files_missing'] = 'The upgrader was unable to find some crucial files.<br><br>Please make sure you uploaded all of the files included in the package, including the Themes, Sources, and other directories.';
$txt['error_upgrade_old_files'] = 'The upgrader found some old or outdated files.<br><br>Please make certain you uploaded the new versions of all the files included in the package.';
$txt['error_upgrade_old_lang_files'] = 'The upgrader found some old or outdated language files for the selected language, %1$s.<br><br>Please make certain you uploaded the new versions of all the files included in the package, even the theme and language files for the default theme.<br>&nbsp;&nbsp;&nbsp;[<a href="%2$s?skiplang">SKIP</a>] [<a href="%2$s?lang=english">Try English</a>]';
$txt['error_php_too_low'] = '警告！您的Web服务器上安装的PHP版本不符合SMF的<strong>最低安装要求</strong>。<br>如果您不是管理员，那么您需要请求主机管理员升级或使用其他服务器；否则请将PHP升级到最新版本。<br><br>如果你知道你的PHP版本已符合要求，你可以选择继续安装，但是我们非常不鼓励这样做。';
$txt['error_db_too_low'] = '数据库服务器的版本过旧，不符合SMF的最低要求。<br><br>请让您的主机管理员升级数据库服务器版本或提供一个新的数据库服务器。否则请尝试其他的主机。';
$txt['error_db_privileges'] = 'The %1$s user you have set in Settings.php does not have proper privileges.<br><br>Please ask your host to give this user the ALTER, CREATE, and DROP privileges.';
$txt['error_dir_not_writable'] = 'The directory: %1$s has to be writable to continue the upgrade. Please make sure permissions are correctly set to allow this.';
$txt['error_cache_not_found'] = 'The cache directory could not be found.<br><br>Please make sure you have a directory called &quot;cache&quot; in your forum directory before continuing.';
$txt['error_agreement_not_writable'] = 'The upgrader was unable to obtain write access to agreement.txt.<br><br>If you are using a linux or unix based server, please ensure that the file is chmod\'d to 777, or if it does not exist that the directory this upgrader is in is 777.<br>If your server is running Windows, please ensure that the internet guest account has the proper permissions on it or its folder.';
$txt['error_not_admin'] = 'You need to be an admin to perform an upgrade!';

$txt['warning_lang_old'] = 'The language files for your selected language, %1$s, have not been updated to the latest version. Upgrade will continue with the forum default, %2$s.';
$txt['warning_lang_missing'] = 'The upgrader could not find the &quot;Install&quot; language file for your selected language, %1$s. Upgrade will continue with the forum default, %2$s.';

// Attachment & Avatar folder checks
$txt['warning_av_missing'] = 'Warning! Avatar directory not found. Continuing may be unsafe. Please confirm folder settings before proceeding.';
$txt['warning_custom_av_missing'] = 'Warning! Custom avatar directory not found. Continuing may be unsafe. Please confirm folder settings before proceeding.';
$txt['warning_att_dir_missing'] = 'Warning! One or more attachment directories not found. Continuing may be unsafe. Please confirm folder settings before proceeding.';

// Page titles
$txt['updating_smf_installation'] = 'Updating Your SMF Installation!';
$txt['upgrade_options'] = 'Upgrade Options';
$txt['backup_database'] = 'Backup Database';
$txt['database_changes'] = 'Database Changes';
$txt['upgrade_complete'] = 'Upgrade Complete';
$txt['converting_utf8'] = 'Converting to UTF-8';
$txt['converting_json'] = 'Converting to JSON';

?>