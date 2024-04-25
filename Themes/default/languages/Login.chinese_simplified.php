<?php
// Version: 2.1.2; Login

// Registration agreement page.
$txt['registration_agreement'] = '服务条款';
$txt['agreement_agree'] = '我接受并同意服务条款。';
$txt['agreement_agree_coppa_above'] = '我接受并同意服务条款, 而且我年满 %1$d 岁。';
$txt['agreement_agree_coppa_below'] = '我接受并同意服务条款, 而且我未满 %1$d 岁。';
$txt['privacy_policy'] = 'Privacy Policy';
$txt['agreement_policy_agree'] = 'I accept the terms of the agreement and privacy policy.';
$txt['agreement_policy_agree_coppa_above'] = 'I accept the terms of the agreement and privacy policy, and I am at least %1$d years old.';
$txt['agreement_policy_agree_coppa_below'] = 'I accept the terms of the agreement and privacy policy, and I am younger than %1$d years old.';
$txt['policy_agree'] = 'I accept the terms of the privacy policy.';
$txt['policy_agree_coppa_above'] = 'I accept the terms of the privacy policy, and I am at least %1$d years old.';
$txt['policy_agree_coppa_below'] = 'I accept the terms of the privacy policy, and I am younger than %1$d years old.';
$txt['agree_coppa_above'] = '我至少是 %1$d 的年龄。';
$txt['agree_coppa_below'] = '我还不到 %1$d 岁。';

// Registration form.
$txt['registration_form'] = '注册表单';
$txt['need_username'] = '请输入您的帐号。';
$txt['no_password'] = '您没有输入密码。';
$txt['incorrect_password'] = '密码错误';
$txt['choose_username'] = '选择帐号';
$txt['maintain_mode'] = '维护模式';
$txt['registration_successful'] = '注册成功';
$txt['now_a_member'] = '完成！恭喜您成为本论坛的会员。';
// Use numeric entities in the below string.
$txt['your_password'] = '您的密码是';
$txt['valid_email_needed'] = '请输入惯用的 Email, %1$s。';
$txt['required_info'] = '必填的资讯';
$txt['identification_by_smf'] = '这是登录用的帐号。';
$txt['additional_information'] = '进阶资讯';
$txt['warning'] = '警告！';
$txt['only_members_can_access'] = '本区只有会员才能进入。';
$txt['login_below'] = '请在下方登录或';
$txt['login_below_or_register'] = '请登录在下方或 <a href="%1$s">注册一个帐户</a> %2$s';

// Use numeric entities in the below two strings.
$txt['may_change_in_profile'] = '如果要变更个人资料, 您可以在登录后, 在个人资料页面修改, 或是这个页面: ';
$txt['your_username_is'] = '您的帐号是: ';

$txt['login_hash_error'] = '密码保护措施已更新, 请重新输入您的密码。';

$txt['ban_register_prohibited'] = '抱歉, 您没办法注册本论坛。';

$txt['activate_account'] = '帐号启用';
$txt['activate_success'] = '您的帐号已经启用了, 现在您可以登录论坛。';
$txt['activate_not_completed1'] = '在登录之前, 您的 Email 必须要通过验证。';
$txt['activate_not_completed2'] = '重新传送启用信？';
$txt['activate_after_registration'] = '感谢您的注册。您将会收到一封启用信, 内含启用帐号的连结。如果经过一段时间还是没收到, 请检查是不是被误判为垃圾信。';
$txt['invalid_userid'] = '会员不存在';
$txt['invalid_activation_code'] = '启用码错误';
$txt['invalid_activation_username'] = '帐号或 Email';
$txt['invalid_activation_new'] = '如果您注册填错了 Email, 请在这里修改成正确的 Email 和论坛的登录密码。';
$txt['invalid_activation_new_email'] = '新的 Email';
$txt['invalid_activation_password'] = '旧的密码';
$txt['invalid_activation_resend'] = '重新传送启用信';
$txt['invalid_activation_known'] = '请在这里输入您的启用码。';
$txt['invalid_activation_retry'] = '启用码';
$txt['invalid_activation_submit'] = '进行启用';

$txt['coppa_no_consent'] = 'The administrator has still not received parent/guardian consent for your account.';
$txt['coppa_need_more_details'] = '更多资讯？';

$txt['awaiting_delete_account'] = '您的帐号最近会被删除！<br />如果您想回复帐号, 请勾选 &quot;重新启用帐号&quot; 的栏位, 然后重新登录。';
$txt['undelete_account'] = '重新启用帐号';

// Use numeric entities in the below three strings.
$txt['change_password'] = '新密码的内容';
$txt['change_password_login'] = '您的登录资料';
$txt['change_password_new'] = '已经被更改。下面是您新的登录资料。';

$txt['in_maintain_mode'] = 'This forum is in Maintenance Mode.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = '请阅读并同意本论坛的服务修款。';
$txt['register_passwords_differ_js'] = '您两次输入的密码不相同。';

$txt['approval_after_registration'] = '感谢您的注册。本论坛的注册申请都需要管理员审核, 审核结果将以 Email 通知, 谢谢。';

$txt['admin_settings_desc'] = '这里可以变更注册相关的设定。';

$txt['setting_registration_method'] = '新会员的注册方式';
$txt['setting_registration_disabled'] = '注册停用';
$txt['setting_registration_standard'] = '直接启用';
$txt['setting_registration_activate'] = 'Email 启用';
$txt['setting_registration_approval'] = '管理员审核';
$txt['setting_send_welcomeEmail'] = '传送欢迎信给新会员';

$txt['setting_coppaAge'] = '注册的年龄限制';
$txt['setting_coppaType'] = '未满限制年龄的使用者, 采取';
$txt['setting_coppaType_reject'] = '拒绝注册';
$txt['setting_coppaType_approval'] = '需要家长/监护人同意';
$txt['setting_coppaPost'] = '同意书的收件地址';
$txt['setting_coppaPost_desc'] = '此栏位只会显示于年龄未满, 而且需要家长/监护人同意的使用者';
$txt['setting_coppaFax'] = '同意书收件的传真号码';
$txt['setting_coppaPhone'] = '提供给家长的连络电话';

$txt['admin_register'] = '新会员注册';
$txt['admin_register_desc'] = '这里您可以增加新会员, 并且传送 Email 通知他们详请。';
$txt['admin_register_username'] = '新帐号';
$txt['admin_register_email'] = 'Email';
$txt['admin_register_password'] = '密码';
$txt['admin_register_username_desc'] = '新会员的帐号';
$txt['admin_register_email_desc'] = '新会员的 Email';
$txt['admin_register_password_desc'] = '新会员的密码';
$txt['admin_register_email_detail'] = 'Email 密码给新会员';
$txt['admin_register_email_detail_desc'] = 'Email 是必填的, 即使没有勾选';
$txt['admin_register_email_activate'] = '要求会员启用帐号';
$txt['admin_register_group'] = '主要会员群组';
$txt['admin_register_group_desc'] = '这个会员将会成为主要会员群组的一员';
$txt['admin_register_group_none'] = '(没有会员群组)';
$txt['admin_register_done'] = '会员 %1$s 已经完成注册！';

$txt['coppa_title'] = '限制年龄的论坛';
// argument(s): $context['forum_name_html_safe']
$txt['coppa_after_registration'] = 'Thank you for signing up with %1$s.<br><br>Because you fall under the age of {MINIMUM_AGE}, it is a legal requirement
	to obtain your parent or guardian\'s permission before you may begin to use your account. To arrange for account activation please print off the form below:';
$txt['coppa_form_link_popup'] = '在新视窗开启表单';
$txt['coppa_form_link_download'] = '下载表单';
$txt['coppa_send_to_one_option'] = '然后请家长/监护人将表单传送给管理员: ';
$txt['coppa_send_to_two_options'] = '然后请家长/监护人将表单以其中一个方式, 传送给管理员: ';
$txt['coppa_send_by_post'] = '邮寄: ';
$txt['coppa_send_by_fax'] = '传真: ';
$txt['coppa_send_by_phone'] = '您也可以请家长/监护人打电话给管理员, 电话是: {PHONE_NUMBER}。';

// argument(s): $context['forum_name_html_safe']
$txt['coppa_form_title'] = 'Permission form for registration at %1$s';
$txt['coppa_form_address'] = '地址';
$txt['coppa_form_date'] = '日期';
// argument(s): $context['forum_name_html_safe']
$txt['coppa_form_body'] = 'I {PARENT_NAME},<br><br>Give permission for {CHILD_NAME} (child name) to become a fully registered member of the forum: %1$s, with the username: {USER_NAME}.<br><br>I understand that certain personal information entered by {USER_NAME} may be shown to other users of the forum.<br><br>Signed:<br>{PARENT_NAME} (Parent/Guardian).';

$txt['visual_verification_sound_again'] = '重新播放';
$txt['visual_verification_sound_close'] = '关闭视窗';
$txt['visual_verification_sound_direct'] = '听不清楚验证码吗？请试试直接点击它。';

// Use numeric entities in the below.
$txt['registration_username_available'] = '帐号可以使用';
$txt['registration_username_unavailable'] = '帐号不能使用';
$txt['registration_username_check'] = '确认帐号是否可以使用';
$txt['registration_password_short'] = '密码太短';
$txt['registration_password_reserved'] = '密码包含您的帐号/Email';
$txt['registration_password_numbercase'] = '密码必须包含大小写字母和数字';
$txt['registration_password_no_match'] = '密码不匹配';
$txt['registration_password_valid'] = '密码有效';

$txt['registration_errors_occurred'] = '您的注册发生下列错误。请更正才能继续进行: ';
$txt['registration_agreement_missing'] = 'The registration agreement file, agreement.txt, is either missing or empty. Registrations have been disabled until this is fixed';
$txt['registration_policy_missing'] = 'The privacy policy is either missing or empty. Registrations have been disabled until this is fixed';

// Logout
$txt['logout_confirm'] = 'Are you sure you want to log out?';
$txt['logout_notice'] = 'You are about to be logged out of the forum and continue browsing as a guest!';
$txt['logout_return'] = 'Stay logged in and return to browsing as a member.';

?>