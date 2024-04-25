<?php
// Version: 2.1.4; Errors

global $scripturl, $modSettings;

$txt['no_access'] = '您无法进入';
$txt['not_found'] = '抱歉，此部分此时不可用。';

$txt['mods_only'] = '只有版主可以直接删除, 请透过<b>修改</b>功能编辑帖子内容。';
$txt['no_name'] = '您没有输入名字, 请重新输入。';
$txt['no_email'] = '您没有输入 Email, 请重新输入。';
$txt['topic_locked'] = 'This topic is locked, you are not allowed to post or modify messages.';
$txt['no_password'] = '您忘记输入密码';
$txt['already_a_user'] = '您所选择的帐号已经被注册。';
$txt['cant_move'] = 'You are not allowed to move topics.';
$txt['passwords_dont_match'] = '您的密码不同。';
$txt['register_to_use'] = '抱歉, 必须加入会员才可使用这个功能。';
$txt['password_invalid_character'] = '您输入的密码有误。';
$txt['name_invalid_character'] = '您输入的帐号有问题。';
$txt['email_invalid_character'] = '您输入的 Email 有问题。';
$txt['username_reserved'] = '您输入的帐号含有保留字 \'%1$s\'。请选择另一个帐号。';
$txt['numbers_one_to_nine'] = '只能输入数字 0-9';
$txt['not_a_user'] = '您查询的帐号资料不存在。';
$txt['not_a_topic'] = '这篇主题不存在这个版块。';
$txt['email_in_use'] = 'That email address (%1$s) is already being used by a registered member. If you feel this is a mistake, go to the login page and use the password reminder with that address.';
$txt['attachments_no_write'] = '附件文件夹无法写入。你的档案或头像无法储存。';
$txt['avatars_no_write'] = 'The avatars directory is not writable';
$txt['attachment_not_created'] = 'The attachment could not be created';
$txt['export_dir_not_writable'] = 'The export directory is not writable';
$txt['export_dir_forced_change'] = '%1$s is not writable. Retrying at %2$s';
$txt['export_low_diskspace'] = 'Insufficient disk space to continue member profile export. Current minimum disk space is set to %1$d%%. The export process will automatically attempt to resume tomorrow.';

$txt['didnt_select_vote'] = '您没有选择投票项目。';
$txt['poll_error'] = '这个投票不存在, 可能已经被封锁, 或者您已经投过票了。';
$txt['members_only'] = '只有会员能使用...';
$txt['locked_by_admin'] = '已经被管理员封锁, 您无法解除。';
$txt['feature_disabled'] = '抱歉, 这个功能已经停用。';
$txt['feature_no_exists'] = '抱歉，此功能不存在。';
$txt['couldnt_connect'] = '无法连接服务器或无法搜寻档案';
$txt['no_board'] = '您指定的版块不存在';
$txt['no_message'] = '消息已不可用';
$txt['cant_split'] = '无法分拆主题';
$txt['cant_merge'] = '无法合并主题';
$txt['no_topic_id'] = '您指定一个错误的主题编号。';
$txt['split_first_post'] = 'The first post of a topic cannot be split.';
$txt['topic_one_post'] = '这个主题只有一篇帖子, 所以无法分拆。';
$txt['no_posts_selected'] = '没有选择任何帖子';
$txt['selected_all_posts'] = '无法分折。因为您选择所有的帖子';
$txt['cant_find_messages'] = '找不到帖子';
$txt['cant_find_user_email'] = '找不到使用者的 Email';
$txt['cant_insert_topic'] = '无法插入主题';
$txt['already_a_mod'] = '您选择的帐号是位版主。请选择其他帐号';
$txt['session_timeout'] = '您的工作阶段已过期, 请重试一次。';
$txt['session_verify_fail'] = 'Session 验证失败。请登出后再重新登录。';
$txt['verify_url_fail'] = '无法验证来源网址。请重试一次。';
$txt['token_verify_fail'] = '令牌验证失败。请返回并重试。';
$txt['guest_vote_disabled'] = '访客不能投票。';

$txt['cannot_like_content'] = '您不能喜欢该内容。';
$txt['cannot_view_likes'] = '您无法查看谁喜欢该内容。';
$txt['cannot_access_mod_center'] = '你没有权限进入版务中心';
$txt['cannot_admin_forum'] = '没有权限管理这个论坛。';
$txt['cannot_announce_topic'] = '没有权限在这个版块发表公告。';
$txt['cannot_approve_posts'] = '没有权限审核这些项目。';
$txt['cannot_post_unapproved_attachments'] = '没有权限上传未审核附件。';
$txt['cannot_post_unapproved_topics'] = '没有权限发表未审核的主题。';
$txt['cannot_post_unapproved_replies_own'] = '没有权限在自己的主题回覆未审核的帖子。';
$txt['cannot_post_unapproved_replies_any'] = '没有权限回覆未审核的帖子。';
$txt['cannot_calendar_edit_any'] = '无法编辑日历活动。';
$txt['cannot_calendar_edit_own'] = '您没有权限编辑自己的活动。';
$txt['cannot_calendar_post'] = '抱歉 - 无法建立活动。';
$txt['cannot_calendar_view'] = '抱歉, 您无法检视日历。';
$txt['cannot_remove_any'] = 'Sorry, but you don\'t have the privilege to remove this topic. Check to make sure this topic wasn\'t just moved to another board.';
$txt['cannot_remove_own'] = '抱歉, 在这个版块您无法删除自己的主题, 检查并确定这个主题没有被移动到其他版块。';
$txt['cannot_edit_news'] = '无法编辑论坛的最新消息。';
$txt['cannot_pm_read'] = '抱歉, 您无法阅读自己的简讯。';
$txt['cannot_pm_send'] = '无法传送简讯。';
$txt['cannot_lock_any'] = 'You are not allowed to lock this topic.';
$txt['cannot_lock_own'] = '抱歉, 您没有权限封锁自己的主题。';
$txt['cannot_make_sticky'] = '您没有权限顶置这篇主题。';
$txt['cannot_manage_attachments'] = '您没有权限管理附件或头像。';
$txt['cannot_manage_bans'] = '您没有权限修改黑名单';
$txt['cannot_manage_boards'] = '您没有权限管理版块和类别。';
$txt['cannot_manage_membergroups'] = '您没有权限管理群组。';
$txt['cannot_manage_permissions'] = '您没有权限管理权限';
$txt['cannot_manage_smileys'] = '您没有权限管理表情符号';
$txt['cannot_merge_any'] = '在这些版块, 您没有权限合并主题。';
$txt['cannot_merge_redirect'] = '您选择的一个或多个主题是一个重定向主题，不能合并。';
$txt['cannot_moderate_forum'] = '没有权限管理论坛。';
$txt['cannot_moderate_board'] = '您无权管理此看板。';
$txt['cannot_modify_any'] = 'You aren\'t allowed to modify posts.';
$txt['cannot_modify_own'] = '抱歉, 您没有权限修改自己的帖子。';
$txt['cannot_modify_replies'] = '您没有权限修改回覆自己主题的帖子。';
$txt['cannot_move_own'] = '在这个版块, 您没有权限移动自己的帖子。';
$txt['cannot_move_any'] = '您在这个版块没有权限移动帖子。';
$txt['cannot_poll_add_own'] = '抱歉, 您在这个版块没有权限在自己的主题举办投票。';
$txt['cannot_poll_add_any'] = '您没有权限在这篇主题举办投票。';
$txt['cannot_poll_edit_own'] = '您没有权限编辑自己的投票。';
$txt['cannot_poll_edit_any'] = '您在这个版块没有权限编辑投票。';
$txt['cannot_poll_lock_own'] = '您在这个版块没有权限封锁自己的投票。';
$txt['cannot_poll_lock_any'] = 'Sorry, but you aren\'t allowed to lock polls.';
$txt['cannot_poll_post'] = '您在这个版块没有权限发表举办投票的帖子。';
$txt['cannot_poll_remove_own'] = '您没有权限移除自己主题的投票。';
$txt['cannot_poll_remove_any'] = 'You cannot remove polls on this board.';
$txt['cannot_poll_view'] = '您在这个版块无法检视任何投票。';
$txt['cannot_poll_vote'] = '抱歉, 您在这个版块没有权限投票。';
$txt['cannot_post_attachment'] = '您没有权限上传附件。';
$txt['cannot_post_new'] = '抱歉, 您在这个版块没有权限发表新主题。';
$txt['cannot_post_reply_any'] = '您在这个版块没有权限回覆帖子。';
$txt['cannot_post_reply_own'] = 'You are not allowed to post replies, even to your own topics, in this board.';
$txt['cannot_post_redirect'] = '您不能在重定向板中发帖。';
$txt['cannot_profile_remove_own'] = '抱歉, 您没有权限删除自己的帐号。';
$txt['cannot_profile_remove_any'] = '您没有权限删除任何人的帐号！';
$txt['cannot_profile_extra_any'] = '您没有权限修改任何人的个人资料。';
$txt['cannot_profile_identity_any'] = '您没有权限编辑任何人的帐号设定。';
$txt['cannot_profile_title_any'] = 'You cannot edit custom titles.';
$txt['cannot_profile_extra_own'] = '抱歉, 您无法编辑自己的个人资料。';
$txt['cannot_profile_identity_own'] = 'You can\'t change your identity at the moment.';
$txt['cannot_profile_title_own'] = '您没有权限编辑自己的自订头衔。';
$txt['cannot_profile_server_avatar'] = '您没有权限使用默认的头像。';
$txt['cannot_profile_upload_avatar'] = '您没有权限上传头像。';
$txt['cannot_profile_remote_avatar'] = '您没有权限使用外部网址的头像。';
$txt['cannot_profile_view'] = 'Many apologies, but you can\'t view profiles.';
$txt['cannot_delete_own'] = 'You are not allowed to delete your own posts on this board.';
$txt['cannot_delete_replies'] = '抱歉, 您没有权限删除回覆自己主题的帖子。';
$txt['cannot_delete_any'] = 'Deleting posts in this board is not allowed.';
$txt['cannot_report_any'] = '您在这个版块没有权限检举帖子。';
$txt['cannot_search_posts'] = '您没有权限搜寻帖子。';
$txt['cannot_send_mail'] = '您没有权限 Email 给任何人。';
$txt['cannot_issue_warning'] = '抱歉, 您没有权限对会员发出警告。';
$txt['cannot_send_email_to_members'] = '对不起，管理员不允许在这个版面上发送电子邮件。';
$txt['cannot_split_any'] = 'Splitting topics is not allowed in this board.';
$txt['cannot_view_attachments'] = '您在这个版块没有权限下载或检视附件。';
$txt['cannot_view_mlist'] = 'You can\'t view the memberlist because you don\'t have permission to do so.';
$txt['cannot_view_stats'] = '您没有权限检视论坛的统计资料。';
$txt['cannot_who_view'] = 'Sorry, you don\'t have the proper permissions to view the Who\'s Online list.';

$txt['no_theme'] = '这个布景不存在。';
$txt['theme_dir_wrong'] = '默认的布景文件夹有问题, 请点击此连结并修正。';
$txt['registration_disabled'] = '抱歉, 已经停止注册。';
$txt['registration_no_secret_question'] = '会员没有设定密码提示问题。';
$txt['poll_range_error'] = '抱歉, 投票天数至少 1天';
$txt['delFirstPost'] = '您没有权限删除主题的第一篇帖子。<p>如果您要删除这篇主题, 请点击移除主题, 或请版主/管理员帮您删除。</p>';
$txt['parent_error'] = '无法新增版块！';
$txt['login_cookie_error'] = '您无法登录。请检查 cookie 的设定。';
$txt['login_ssl_required'] = '您只能通过 HTTPS 登录';
$txt['register_ssl_required'] = '您只能通过 HTTPS 注册';
$txt['incorrect_answer'] = '抱歉, 您的答案是错误的。请重试一次, 或者按后退两次用默认的方法取得您的密码。';
$txt['no_mods'] = '找不到版主！';
$txt['parent_not_found'] = '版块结构已经毁损: 找不到母版块';
$txt['modify_post_time_passed'] = 'You may not modify this post, as the time limit for edits has passed.';

$txt['calendar_off'] = '日历功能已经停用, 您无法进入。';
$txt['calendar_export_off'] = '您不能导出日历事件，因为该功能目前已禁用。';
$txt['invalid_month'] = '月份错误。';
$txt['invalid_year'] = '年份错误。';
$txt['invalid_day'] = '日子错误';
$txt['event_month_missing'] = '找不到活动的月份。';
$txt['event_year_missing'] = '找不到活动的年份。';
$txt['event_day_missing'] = '找不到活动日子。';
$txt['event_title_missing'] = '找不到活动标题。';
$txt['invalid_date'] = '日期错误。';
$txt['no_event_title'] = '未输入活动标题。';
$txt['missing_event_id'] = '找不到活动编号。';
$txt['cant_edit_event'] = '您没有权限编辑这个活动。';
$txt['missing_board_id'] = '找不到版块编号。';
$txt['missing_topic_id'] = '找不到主题编号。';
$txt['topic_doesnt_exist'] = '主题不存在。';
$txt['not_your_topic'] = '您不是这篇主题的作者。';
$txt['board_doesnt_exist'] = '这个版块不存在。';
$txt['invalid_days_numb'] = '持续天数错误。';

$txt['moveto_noboards'] = '主题移动的目标版块不存在！';
$txt['topic_already_moved'] = '此主题 %1$s 已被移动到棋盘 %2$s，请检查其新位置，然后再移动。';

$txt['already_activated'] = '您的帐号已经启用。';
$txt['still_awaiting_approval'] = '您的帐号正在等待管理员审核。';

$txt['invalid_email'] = '错误的 Email / Email 范围。<br />例如, Email: bill.gates@microsoft.com。<br />Email 范围: *@*.microsoft.com';
$txt['invalid_expiration_date'] = '错误的截止日期';
$txt['invalid_hostname'] = '错误的网域 / 网域范围。<br />例如, 网域: proxy4.microsoft.com<br />网域范围: *.microsoft.com';
$txt['invalid_ip'] = '错误的 IP / IP 范围。<br />例如, IP: 127.0.0.1<br />IP 范围: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = '错误 IP / IP 范围。<br />例如, IP: 127.0.0.1<br />IP 范围: 127.0.0.*';
$txt['invalid_username'] = '找不到会员帐号';
$txt['no_user_selected'] = '找不到会员';
$txt['no_ban_admin'] = 'You may not ban an admin - you must demote them first!';
$txt['no_bantype_selected'] = '未选择黑名单类型';
$txt['ban_not_found'] = '找不到黑名单';
$txt['ban_unknown_restriction_type'] = '未知的限制类型';
$txt['ban_name_empty'] = '黑名单的名称是空白的';
$txt['ban_id_empty'] = '未找到封禁ID';
$txt['ban_no_triggers'] = '未指定禁止触发器';
$txt['ban_ban_item_empty'] = '未找到禁止触发器';
$txt['impossible_insert_new_bangroup'] = '插入新的封禁时出错';

$txt['ban_name_exists'] = '黑名单的名称重复。请选择不同的名称。';
$txt['ban_trigger_already_exists'] = '此封禁触发器 (%1$s) 已存在于 %2$s 中。';

$txt['recycle_no_valid_board'] = '还没选择正确的版块存放被删除的帖子';
$txt['post_already_deleted'] = '主题或消息已经被移动到回收站。 您确定要完全删除它吗？<br>如果是按照 <a href="%1$s">此链接</a>';

$txt['login_threshold_fail'] = '抱歉, 您尝试登录的次数已经超过门槛。请稍后再试。';
$txt['login_threshold_brute_fail'] = '抱歉, 您尝试登录的次数已经超过门槛。请30秒后再尝试。';

$txt['who_off'] = '您无法浏览线上会员, 因为这个功能已经停用';

$txt['merge_create_topic_failed'] = '建立主题时发生错误。';
$txt['merge_need_more_topics'] = 'Merge topics requires at least two topics to merge.';

$txt['post_WaitTime_broken'] = '您的 IP 最后一次发布少于 %1$d 秒前。请稍后再试。';
$txt['register_WaitTime_broken'] = '你刚刚注册了 %1$d 秒前！';
$txt['login_WaitTime_broken'] = '对不起，您将不得不等待大约 %1$d 秒才能再次登录。';
$txt['pm_WaitTime_broken'] = 'The last personal message from your IP was less than %1$d seconds ago. Please try again later.';
$txt['reporttm_WaitTime_broken'] = '您的 IP 最后一次主题报告少于 %1$d 秒前。请稍后再试。';
$txt['sendmail_WaitTime_broken'] = '您的 IP 发出的最后一封电子邮件少于 %1$d 秒前。请稍后再试。';
$txt['search_WaitTime_broken'] = '您上次搜索少于 %1$d 秒前。请稍后再试。';
$txt['remind_WaitTime_broken'] = '您最后一次提醒少于 %1$d 秒前。请稍后再试。';

$txt['email_missing_data'] = '您必须在标题和内容栏位都输入文字。';

$txt['topic_gone'] = '这个主题或版块不存在, 或是没有权限浏览。';
$txt['theme_edit_missing'] = 'The file you are trying to edit cannot be found.';

$txt['pm_not_yours'] = 'The personal message you are trying to quote is not your own or does not exist, please go back and try again.';
$txt['mangled_post'] = '毁损的资料 - 请返回再试一次。';
$txt['too_many_groups'] = 'Sorry, you selected too many groups, please remove some from your selection.';
$txt['post_upload_error'] = 'The post data is missing. This error can be caused by trying to submit a file larger than allowed by the server. Please contact your administrator if this problem continues.';
$txt['quoted_post_deleted'] = '您想要引用的帖子已经不存在, 可能被删除或无法检视。';
$txt['pm_too_many_per_hour'] = '您已经超出每小时 %1$d 封简讯数的限制';

$txt['register_only_once'] = 'Sorry, but you are not allowed to register multiple accounts at the same time from the same computer.';
$txt['admin_setting_coppa_require_contact'] = '您必须输入传真号码, 需要父母/监护人的同意';

$txt['error_long_name'] = '您要的名称字数过多。';
$txt['error_no_name'] = '没有输入名称。';
$txt['error_bad_name'] = 'The name you submitted cannot be used, because it is, or contains, a reserved name.';
$txt['error_no_email'] = '没有 Email。';
$txt['error_bad_email'] = '您的 Email 是错误的.';
$txt['error_no_event'] = '没有活动名称。';
$txt['error_no_subject'] = '没有输入标题。';
$txt['error_no_question'] = '没有输入投票选项。';
$txt['error_no_message'] = '帖子内容是空的。';
$txt['error_long_message'] = '您的帖子内容超过字数限制 (%1$d 字)。';
$txt['error_no_comment'] = '评论字段留空。';
// duplicate of post_too_long in Post.{language}.php
$txt['error_post_too_long'] = '您的消息太长。请返回并缩短，然后重试。';
$txt['error_session_timeout'] = '您的工作阶段已过期, 请试着重新传送。';
$txt['error_no_to'] = '没有指定收件人。';
$txt['error_bad_to'] = '找不到收件人。';
$txt['error_bad_bcc'] = '找不到密件收件人。';
$txt['error_form_already_submitted'] = 'You have already submitted this post!  You might have accidentally double clicked or tried to refresh the page.';
$txt['error_poll_few'] = '您必须输入二个以上的投票选项！';
$txt['error_poll_many'] = '您的选择不能超过 256 个。';
$txt['error_need_qr_verification'] = '请输入验证码才能送出帖子。';
$txt['error_wrong_verification_code'] = 'The letters you typed do not match the letters that were shown in the picture.';
$txt['error_wrong_verification_recaptcha'] = 'Verification failed, invalid captcha value.';
$txt['error_wrong_verification_answer'] = '您的回答不正确。';
$txt['error_need_verification_code'] = '请输入验证码才能继续。';
$txt['error_bad_file'] = '抱歉, 指定的档案无法开启: %1$s';
$txt['error_bad_line'] = '您指定的那行无效。';
$txt['error_draft_not_saved'] = '保存草稿时出错';
$txt['error_topic_locked_already'] = 'This topic has already been locked by another moderator action.';
$txt['error_topic_unlocked_already'] = 'This topic has already been unlocked by another moderator action.';
$txt['error_topic_sticky_already'] = 'This topic has already been stickied by another moderator action.';
$txt['error_topic_nonsticky_already'] = 'This topic has already been unstickied by another moderator action.';

$txt['smiley_not_found'] = '找不到表情符号。';
$txt['smiley_has_no_code'] = '未提供表情代码。';
$txt['smiley_has_no_filename'] = '未提供表情档名。';
$txt['smiley_not_unique'] = '您提供的表情代码原本就存在。';
$txt['smiley_set_already_exists'] = '表情套图和网址原本就存在';
$txt['smiley_set_not_found'] = '找不到表情套图';
$txt['smiley_set_dir_not_found'] = 'smiley set %1$s 的目录或者无效或者无法访问';
$txt['smiley_set_path_already_used'] = '您提供的网址已经被其他的表情套图使用。';
$txt['smiley_set_unable_to_import'] = '无法汇入表情套图。文件夹可能是错的或是无法读取。';

$txt['smileys_upload_error'] = '上传档案失败。';
$txt['smileys_upload_error_blank'] = '所有的表情套图必须至少一张图片！';
$txt['smileys_upload_error_name'] = '所有的表情符号必须有相同的档名！';
$txt['smileys_upload_error_illegal'] = 'Illegal image type.';

$txt['search_invalid_weights'] = 'Search weights are not properly configured. At least one weight should be configured to be non-zero. Please report this error to an administrator.';
$txt['unable_to_create_temporary'] = '搜寻功能无法建立暂存的资料表, 请稍候再试。';

$txt['package_no_file'] = '找不到扩展档案！';
$txt['packageget_unable'] = '无法连接服务器。请试着使用<a href="%1$s" target="_blank" class="new_win">这个网址</a>代替。';
$txt['not_on_simplemachines'] = '抱歉, 扩展必须从 simplemachines.org 官网下载。';
$txt['package_cant_uninstall'] = 'This package was either never installed or was already uninstalled - you cannot uninstall it now.';
$txt['package_cant_download'] = 'You cannot download or install new packages because the Packages directory, or one of the files in it, is not writable!';
$txt['package_upload_error_nofile'] = '您没有选择上传的扩展。';
$txt['package_upload_error_failed'] = '无法上传扩展, 请检查文件夹权限！';
$txt['package_upload_error_exists'] = '您上传的档案已经存在, 请删除它之后再上传。';
$txt['package_upload_error_supports'] = '扩展管理只允许下列档案类型: %1$s。';
$txt['package_upload_error_broken'] = '扩展上传失败因为下列错误:<br />&quot;%1$s&quot;';
$txt['package_theme_upload_error_broken'] = '主题上传失败，原因如下：<br>&quot;%1$s&quot;';

$txt['package_get_error_not_found'] = '找不到您尝试安装的扩展。您可能要手动上传到扩展文件夹.';
$txt['package_get_error_missing_xml'] = '您尝试安装的扩展缺少 package-info.xml, 这个档案必须放在扩展文件夹的根目录';
$txt['package_get_error_is_zero'] = 'Although the package was downloaded to the server it appears to be empty. Please check the Packages directory and the &quot;temp&quot; sub-directory are both writable. If you continue to experience this problem you should try extracting the package on your PC and uploading the extracted files into a subdirectory in your Packages directory and try again. For example, if the package was called shout.tar.gz you should:<br>1) Download the package to your local PC and extract it into files.<br>2) Using an FTP client create a new directory in your &quot;Packages&quot; folder, in this example you may call it "shout".<br>3) Upload all the files from the extracted package to this directory.<br>4) Go back to the package manager browse page and the package will be automatically found by SMF.';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF 无法在找到 package-info.xml 和扩展里找到有效的资讯。这个扩展有问题, 或是损坏。';
$txt['package_get_error_is_theme'] = 'You cannot install a Theme from this section, please use the <a href="{MANAGETHEMEURL}">Themes and Layout</a> management page to upload it';
$txt['package_get_error_is_mod'] = 'You cannot install a mod from this section, please use the <a href="{MANAGEMODURL}">Package manager</a> page to upload it';
$txt['package_get_error_theme_not_compatible'] = '您的主题没有显示它与 %1$s兼容。请联系主题作者。';
$txt['package_get_error_theme_no_based_on_found'] = 'The theme you are trying to install depends on another theme: %1$s. You need to install that theme first.';
$txt['package_get_error_theme_no_new_version'] = 'The theme you are trying to install is already installed or is an outdated version of it. The version already installed is: %2$s and the version you\'re trying to install is: %1$s.';

$txt['no_membergroup_selected'] = '没有选择群组';
$txt['membergroup_does_not_exist'] = 'The membergroup does not exist or is invalid.';

$txt['at_least_one_admin'] = '论坛至少要有一个管理员！';

$txt['error_functionality_not_windows'] = '抱歉, 这个功能目前无法运行在 Windows 服务器上。';

// Don't use entities in the below string.
$txt['attachment_not_found'] = '找不到附件';

$txt['error_no_boards_selected'] = '没有选择正确的版块！';
$txt['error_no_boards_available'] = '抱歉，您目前没有可用的看板。';
$txt['error_invalid_search_string'] = '您忘记输入搜寻的关键字吗？';
$txt['error_invalid_search_string_blacklist'] = 'Your search query contained too many trivial words. Please try again with a different query.';
$txt['error_search_string_small_words'] = '每个词必须最少二个字元长。';
$txt['error_query_not_specific_enough'] = 'Your search query did not return any matches.';
$txt['error_no_messages_in_time_frame'] = '在指定的日期内搜寻不到您要的资料。';
$txt['error_no_labels_selected'] = '没有选择标签！';
$txt['error_no_search_daemon'] = '无法读取搜寻常驻程式';

$txt['profile_errors_occurred'] = '保存您的个人资料时发生下面错误';
$txt['profile_error_bad_offset'] = '时区设定有错误';
$txt['profile_error_bad_timezone'] = '指定的时区无效';
$txt['profile_error_no_name'] = '名称栏位空白';
$txt['profile_error_digits_only'] = '“帖子数量”框只能包含数字。';
$txt['profile_error_name_taken'] = '这个会员名称已经有人使用';
$txt['profile_error_name_too_long'] = 'The selected name is too long. It should be no greater than 60 characters in length';
$txt['profile_error_no_email'] = 'Email 栏位空白';
$txt['profile_error_bad_email'] = '您没有输入正确的 Email';
$txt['profile_error_email_taken'] = '输入的 Email 已经有人使用';
$txt['profile_error_no_password'] = '您没有输入密码';
$txt['profile_error_bad_new_password'] = '输入的新密码不相同';
$txt['profile_error_bad_password'] = '输入的密码错误';
$txt['profile_error_bad_avatar'] = '您选择的头像太大, 或是有其他错误';
$txt['profile_error_bad_avatar_invalid_url'] = 'The URL you specified is invalid, please check it.';
$txt['profile_error_bad_avatar_url_too_long'] = 'The avatar URL you specified is too long, please use a shorter URL.';
$txt['profile_error_bad_avatar_too_large'] = 'The image you are trying to use surpasses the max width/height settings, please use a smaller one.';
$txt['profile_error_bad_avatar_fail_reencode'] = '您上传的图像已损坏，尝试恢复失败了。';
// argument(s): the minimum length of user passwords as stored in the settings
$txt['profile_error_password_short'] = 'Your password must be at least %1$s characters long.';
$txt['profile_error_password_restricted_words'] = '您的密码不能包含名称, Email, 或是常见的单字。';
$txt['profile_error_password_chars'] = '您的密码必须包括大小写和数字。';
$txt['profile_error_already_requested_group'] = '您已经发出加入这个群组的请求！';
$txt['profile_error_signature_not_yet_saved'] = '签名尚未保存。';
$txt['profile_error_personal_text_too_long'] = '个人文字太长。';
$txt['profile_error_user_title_too_long'] = '自定义标题太长。';
$txt['profile_error_website_title_too_long'] = 'The website title is too long.';
$txt['profile_error_custom_field_mail_fail'] = 'The mail validation check returned an error, you need to enter an email in a valid format (user@domain).';
$txt['profile_error_custom_field_regex_fail'] = 'The regex verification returned an error. If you are unsure about what to type here, please contact the forum administrator.';
$txt['profile_error_custom_field_nohtml_fail'] = 'HTML tags are not allowed.';
$txt['profile_error_posts_out_of_range'] = 'The number of posts is out of range';

// Registration form.
$txt['under_age_registration_prohibited'] = '抱歉，但 %1$d 年龄以下的用户不允许在此论坛注册。';
$txt['error_too_quickly'] = '您的注册速度太快，比正常情况更快。请给它一点时间，然后再试一次。';
$txt['mysql_error_space'] = ' - 检查资料库的可用空间或是通知管理员。';

$txt['icon_not_found'] = '图示不在默认的布景内 - 请确定图示已经正确的上传完成, 然后重试一次。';
$txt['icon_after_itself'] = '图示不能放置在它自己的后面！';
$txt['icon_name_too_long'] = '图示的名称不能超过 16 个字元';

$txt['name_censored'] = '抱歉, 您要使用的名称 %1$s 含有禁止的文字。请使用其它名称。';

$txt['poll_already_exists'] = '主题只能够有一个投票！';
$txt['poll_not_found'] = '这篇主题没有投票！';

$txt['error_while_adding_poll'] = '新增投票时, 发生下列错误';
$txt['error_while_editing_poll'] = '编辑投票时, 发生下列错误';

$txt['loadavg_search_disabled'] = '因为服务器负荷过重, 搜寻功能暂时关闭, 请稍后再试。';
$txt['loadavg_generic_disabled'] = '抱歉, 因为服务器负荷过重, 此功能目前无法使用.。';
$txt['loadavg_allunread_disabled'] = '服务器负荷过重, 所以无法找到您未阅读的帖子。';
$txt['loadavg_unreadreplies_disabled'] = '目前服务器负荷过重, 请稍候再试。';
$txt['loadavg_show_posts_disabled'] = '因为服务器的负荷过重, 这位会员的帖子无法浏览。请稍后再试。';
$txt['loadavg_unread_disabled'] = '服务器的资源暂时处于过高的需求, 以致于无法列出您未读的帖子。';
$txt['loadavg_userstats_disabled'] = 'This member\'s statistics are not currently available due to high load on the server. Please try again later.';

$txt['cannot_edit_permissions_inherited'] = '您不能直接编辑继承的权限, 您必须编辑母群组或是会员群组的继承关系。';

$txt['mc_no_modreport_specified'] = '您必须指定要检视的报告。';
$txt['mc_no_modreport_found'] = 'The specified report either does not exist or is off limits to you';

$txt['st_cannot_retrieve_file'] = '无法取回档案 %1$s。';
$txt['admin_file_not_found'] = '不能读取要求的档案: %1$s。';

$txt['themes_none_selectable'] = '至少选择一个布景。';
$txt['themes_default_selectable'] = '必须选择目前论坛默认的布景。';
$txt['ignoreboards_disallowed'] = '未启用忽视版块的选项。';

$txt['mboards_delete_error'] = '没有选择类别！';
$txt['mboards_delete_board_error'] = '没有选择版块！';

$txt['mboards_parent_own_child_error'] = 'You cannot make a board into a sub-board of itself.';
$txt['mboards_board_own_child_error'] = 'You cannot make a board into its own sub-board.';

$txt['smileys_upload_error_notwritable'] = '下列的表情符号文件夹唯读: %1$s';
$txt['smileys_upload_error_types'] = '图片档案只允许下列副档名: %1$s.';

$txt['change_email_success'] = '您的 Email 变更完成, 新的认证信已经寄出。';
$txt['resend_email_success'] = '新的认证信已经成功寄出。';

$txt['custom_option_need_name'] = '自订的个人资料栏位必须要有名称！';
$txt['custom_option_not_unique'] = '栏位名称重复！';
$txt['custom_option_regex_error'] = '您输入的正则表达式无效';

$txt['warning_no_reason'] = 'You must enter a reason for altering the warning level of a member';
$txt['warning_notify_blank'] = '您通知这个会员, 但是没有填写标题/讯息';

$txt['cannot_connect_doc_site'] = '无法取得 Simple Machines 线上手册。请检查对外连线, 然后重试一次。';

$txt['movetopic_no_reason'] = '您必须输入移动帖子的理由, 如果不输入理由请把\'发表转址主题。\'选项取消。';

$txt['error_custom_field_too_long'] = '&quot;%1$s&quot; 栏位不能超过 %2$d 个字元。';
$txt['error_custom_field_invalid_email'] = '&quot;%1$s&quot; 栏位必须是合法的 email。';
$txt['error_custom_field_not_number'] = '&quot;%1$s&quot; 栏位必须是数字。';
$txt['error_custom_field_inproper_format'] = '&quot;%1$s&quot; 栏位是不合法的格式。';
$txt['error_custom_field_empty'] = '&quot;%1$s&quot; 栏位不能是空白。';

$txt['email_no_template'] = '找不到 Email 样版 &quot;%1$s&quot;。';

$txt['search_api_missing'] = '找不到搜寻 API。请通知管理员检查是否上传正确的档案。';
$txt['search_api_not_compatible'] = '选择的搜寻 API 是过期的 - 返回标准搜寻。请检查档案 %1$s。';

// Registration Agreement
$txt['error_no_agreement'] = 'There is no registration agreement to display!';
$txt['error_no_privacy_policy'] = 'A privacy policy has not been created for this forum.';

// Unsubscribe
$txt['unsubscribe_invalid'] = 'The unsubscribe link that brought you here does not appear to be valid.';

// Handling hook calls
$txt['hook_fail_loading_file'] = '钩调用：路径上的文件： %s 无法加载。';
$txt['hook_fail_call_to'] = '无法调用文件 %2$s 中的 Hook 调用: 函数 "%1$s"。';

$txt['file_not_created'] = 'The file at "%1$s" could not be created. Please make sure the parent directory has the appropriate permissions.';
$txt['file_minimize_fail'] = 'The file "%1$s" could not be located on the current or the default theme and, therefore, it was not included in the minified file.';
$txt['unlink_minimized_fail'] = 'The following files could not be deleted. Please check the file permissions of the files themselves and the parent directory.<br>%1$s';

// SubActions failed attempt.
$txt['sub_action_fail'] = 'The callable %s could not be called.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = '您不能回复主题的第一篇帖子。';
$txt['parent_topic_missing'] = '您试着回复这篇帖子的母主题已经被删除了。';
$txt['restored_disabled'] = '回复主题的功能已停用。';
$txt['restore_not_found'] = '下列帖子无法回复; 原主题可能被移除: <ul style="margin-top: 0px;">%1$s</ul> 您需要手动移动它。';

$txt['error_invalid_dir'] = '您输入的文件夹是无效的。';

// json errors.
$txt['json_JSON_ERROR_DEPTH'] = 'JSON decode error: The maximum stack depth has been exceeded';
$txt['json_JSON_ERROR_STATE_MISMATCH'] = 'JSON decode error: Invalid or malformed JSON';
$txt['json_JSON_ERROR_CTRL_CHAR'] = 'JSON decode error: Control character error, possibly incorrectly encoded';
$txt['json_JSON_ERROR_SYNTAX'] = 'JSON decode error: Syntax error, malformed JSON';
$txt['json_JSON_ERROR_UTF8'] = 'JSON decode error: Malformed UTF-8 characters, possibly incorrectly encoded';
$txt['json_JSON_ERROR_RECURSION'] = 'JSON decode error: One or more recursive references in the value to be encoded';
$txt['json_JSON_ERROR_INF_OR_NAN'] = 'JSON decode error: One or more NAN or INF values in the value to be encoded';
$txt['json_JSON_ERROR_UNSUPPORTED_TYPE'] = 'JSON decode error: A value of a type that cannot be encoded was given';
$txt['json_unknown'] = 'Unknown error';

// The following strings are used with various trigger_error calls. Most include the function that they're called from.
// Board errors
$txt['create_board_missing_options'] = 'createBoard(): One or more of the required options is not set';
$txt['move_board_no_target'] = 'createBoard(): Target board is not set';
$txt['modify_board_move_to_incorrect'] = 'modifyBoard(): the move_to value \'%s\' is incorrect';

// Category errors
$txt['create_category_no_name'] = 'createCategory(): A category name is required';
$txt['cannot_move_to_deleted_category'] = 'deleteCategories(): You cannot move the boards to a category that\'s being deleted';

// Package manager error
$txt['undefined_xml_attribute'] = 'Undefined XML attribute: %s';
$txt['undefined_xml_element'] = 'Undefined XML element: %s';

// loadMemberData() error
$txt['invalid_member_data_set'] = 'loadMemberData(): Invalid member set: \'%s\'';

// loadMemberContext() error
$txt['user_not_loaded'] = 'loadMemberContext(): member id \'%d\' not previously loaded by loadMemberData()';

// logActions() errors
$txt['logActions_not_array'] = 'logActions(): data is not an array with action \'%s\'';
$txt['logActions_topic_not_numeric']  = 'logActions(): data\'s topic is not a number';
$txt['logActions_message_not_numeric'] = 'logActions(): data\'s message is not a number';
$txt['logActions_member_not_numeric'] = 'logActions(): data\'s member is not a number';
$txt['logActions_board_not_numeric'] = 'logActions(): data\'s board is not a number';
$txt['logActions_board_to_not_numeric'] = 'logActions(): data\'s board_to is not a number';

// Login error
$txt['login_no_session_cookie'] = 'Login2(): Cannot be logged in without a session or cookie';

// PM error (see isAccessiblePM function)
$txt['pm_invalid_validation_type'] = 'Undefined validation type given';

$txt['check_submit_once_invalid_action'] = 'checkSubmitOnce(): Invalid action \'%s\'';

$txt['get_server_versions_no_database'] = 'getServerVersions(): you need to be connected to the database in order to get its server version';

// Subs-Db-postgresql.php line 801
$txt['postgres_id_not_int'] = 'Trying to return an ID field which is not an Int';

$txt['add_members_to_group_invalid_type'] = 'addMembersToGroup(): Unknown type \'%s\'';

$txt['get_members_online_stats_invalid_sort'] = 'Sort method for getMembersOnlineStats() function is not allowed';

$txt['get_board_list_cannot_include_and_exclude'] = 'getBoardList(): Setting both excluded_boards and included_boards is not allowed.';

$txt['parse_path_filename_required'] = 'parse_path(): There should never be an empty filename';
$txt['parse_modification_filename_not_full_path'] = 'parseModification(): The filename \'%s\' is not a full path!';
$txt['parse_boardmod_filename_not_full_path'] = 'parseBoardMod(): The filename \'%s\' is not a full path!';
$txt['package_flush_cache_not_writable'] = 'package_flush_cache(): some files are still not writable';

$txt['create_post_invalid_member_id'] = 'createPost(): invalid member id \'%d\'';

$txt['invalid_statistic_type'] = 'updateStats(): invalid statistic type \'%s\'';

$txt['fetch_web_data_bad_url'] = 'fetch_web_data(): Bad URL';

?>