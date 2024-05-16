<?php
// Version: 2.1.0; EmailTemplates

// Since all of these strings are being used in emails, numeric entities should be used.

// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally, do not translate the @additional_params: line or the variable names in the lines that follow it. You may
//   translate the description of the variable. Do not translate @description:, however you may translate the rest of that line.

// Do not use block comments in this file, they will have special meaning.

global $txtBirthdayEmails;

/**
@additional_params: resend_activate_message
REALNAME: The display name for the member receiving the email.
USERNAME:  The user name for the member receiving the email.
ACTIVATIONLINK:  The URL link to activate the member's account.
ACTIVATIONCODE:  The code needed to activate the member's account.
ACTIVATIONLINKWITHOUTCODE: The URL to the page where the activation code can be entered.
FORGOTPASSWORDLINK: The URL to the "forgot password" page.
@description:
 */
$txt['resend_activate_message_subject'] = '欢迎来到 {FORUMNAME}';
$txt['resend_activate_message_body'] = '感谢注册 {FORUMNAME} ，你的用户名是 {USERNAME} 。如果你忘记密码，你可以访问此链接重置：{FORGOTPASSWORDLINK} 。

在你登录之前，你必须先访问以下链接以激活账号：
{ACTIVATIONLINK}

如果激活时出现问题，请访问 {ACTIVATIONLINKWITHOUTCODE} 并使用激活码”{ACTIVATIONCODE}”激活。

{REGARDS}';

/**
@additional_params: resend_pending_message
REALNAME: The display name for the member receiving the email.
USERNAME:  The user name for the member receiving the email.
@description:
 */
$txt['resend_pending_message_subject'] = '欢迎来到 {FORUMNAME}';
$txt['resend_pending_message_body'] = '{REALNAME} 你好，你在 {FORUMNAME} 的注册请求已经收到。

你注册时使用的用户名是 {USERNAME} 。

在你可以登录并使用论坛之前，你的请求将需要被审核。

{REGARDS}';

/**
@additional_params: mc_group_approve
USERNAME: The user name for the member receiving the email.
GROUPNAME: The name of the membergroup that the user was accepted into.
@description: The request to join a particular membergroup has been accepted.
 */
$txt['mc_group_approve_subject'] = '审核群组身份';
$txt['mc_group_approve_body'] = '{USERNAME},

我们很高兴地通知您，您加入 {FORUMNAME} 上的“{GROUPNAME}”群组的申请已被接受，并且您的帐户已更新以包含此新成员群组。

{REGARDS}';

/**
@additional_params: mc_group_reject
USERNAME: The user name for the member receiving the email.
GROUPNAME: The name of the membergroup that the user was rejected from.
@description: The request to join a particular membergroup has been rejected.
 */
$txt['mc_group_reject_subject'] = '拒绝群组身份';
$txt['mc_group_reject_body'] = '{USERNAME},

我们很遗憾地通知您，您加入 {FORUMNAME} 的“{GROUPNAME}”群组的申请已被拒绝。

{REGARDS}';

/**
@additional_params: mc_group_reject_reason
USERNAME: The user name for the member receiving the email.
GROUPNAME: The name of the membergroup that the user was rejected from.
REASON: Reason for the rejection.
@description: The request to join a particular membergroup has been rejected with a reason given.
 */
$txt['mc_group_reject_reason_subject'] = '拒绝群组身份';
$txt['mc_group_reject_reason_body'] = '{USERNAME},

我们很遗憾地通知您，您加入 {FORUMNAME} 的“{GROUPNAME}”群组的申请已被拒绝。

这是由于以下原因造成的：{REASON}

{REGARDS}';

/**
@additional_params: admin_approve_accept
NAME: The display name of the member.
USERNAME: The user name for the member receiving the email.
PROFILELINK: The URL of the profile page.
FORGOTPASSWORDLINK: The URL of the "forgot password" page.
@description:
 */
$txt['admin_approve_accept_subject'] = '欢迎来到 {FORUMNAME}';
$txt['admin_approve_accept_body'] = '{NAME}，欢迎。

你的账号已被管理员手动审核通过，你现在可以登录并使用论坛了。你的用户名是：{USERNAME} 。如果你忘记了你的密码，你可以使用此链接更改密码： {FORGOTPASSWORDLINK} 。

{REGARDS}';

/**
@additional_params: admin_approve_activation
USERNAME: The user name for the member receiving the email.
ACTIVATIONLINK:  The URL link to activate the member's account.
ACTIVATIONLINKWITHOUTCODE: The URL to the page where the activation code can be entered.
ACTIVATIONCODE: The activation code.
@description:
 */
$txt['admin_approve_activation_subject'] = '欢迎来到 {FORUMNAME}';
$txt['admin_approve_activation_body'] = '欢迎, {USERNAME}!

您在 {FORUMNAME} 上的帐户已获得论坛管理员的批准。 在登录之前，您必须首先通过选择以下链接激活您的帐户：

{ACTIVATIONLINK}

如果您在激活时遇到任何问题，请访问 {ACTIVATIONLINKWITHOUTCODE} 并输入代码“{ACTIVATIONCODE}”。

{REGARDS}';

/**
@additional_params: admin_approve_reject
USERNAME: The user name for the member receiving the email.
@description:
 */
$txt['admin_approve_reject_subject'] = '注册已被拒绝';
$txt['admin_approve_reject_body'] = '{USERNAME},

遗憾的是，您加入“{FORUMNAME}”的申请已被拒绝。

{REGARDS}';

/**
@additional_params: admin_approve_delete
USERNAME: The user name for the member receiving the email.
@description:
 */
$txt['admin_approve_delete_subject'] = '账户已删除';
$txt['admin_approve_delete_body'] = '{USERNAME},

您在 {FORUMNAME} 上的帐户已被删除。 这可能是因为您从未激活过帐户，在这种情况下您应该可以再次注册。

{REGARDS}';

/**
@additional_params: admin_approve_remind
USERNAME: The user name for the member receiving the email.
ACTIVATIONLINK:  The URL link to activate the member's account.
ACTIVATIONLINKWITHOUTCODE: The URL to the page where the activation code can be entered.
ACTIVATIONCODE: The activation code.
@description:
 */
$txt['admin_approve_remind_subject'] = '注册提醒';
$txt['admin_approve_remind_body'] = '{USERNAME},
您尚未激活您在 {FORUMNAME} 的帐户。

请使用下面的链接激活您的帐户：

{ACTIVATIONLINK}

如果您在激活时遇到任何问题，请访问 {ACTIVATIONLINKWITHOUTCODE} 并输入代码“{ACTIVATIONCODE}”。

{REGARDS}';

/**
@additional_params:
USERNAME: The user name for the member receiving the email.
ACTIVATIONLINK:  The URL link to activate the member's account.
ACTIVATIONLINKWITHOUTCODE: The URL to the page where the activation code can be entered.
ACTIVATIONCODE: The activation code.
@description:
 */
$txt['admin_register_activate_subject'] = '欢迎来到{FORUMNAME}';
$txt['admin_register_activate_body'] = '感谢您在 {FORUMNAME} 注册。 您的用户名是 {USERNAME}，密码是 {PASSWORD}。

在登录之前，您必须首先通过选择以下链接激活您的帐户：

{ACTIVATIONLINK}

如果您在激活时遇到任何问题，请访问 {ACTIVATIONLINKWITHOUTCODE} 并输入代码“{ACTIVATIONCODE}”。

{REGARDS}';

$txt['admin_register_immediate_subject'] = '欢迎来到{FORUMNAME}';
$txt['admin_register_immediate_body'] = '感谢您在 {FORUMNAME} 注册。 您的用户名是 {USERNAME}，您的密码是 {PASSWORD}，论坛网址是：{SCRIPTURL}。

{REGARDS}';

/**
@additional_params: new_announcement
TOPICSUBJECT: The subject of the topic being announced.
MESSAGE: The message body of the first post of the announced topic.
TOPICLINK: A link to the topic being announced.
UNSUBSCRIBELINK: Link to unsubscribe from announcements.
@description:
 */
$txt['new_announcement_subject'] = '新公告： {TOPICSUBJECT}';
$txt['new_announcement_body'] = '{MESSAGE}

您可以通过以下链接查看完整公告：
{TOPICLINK}

要取消订阅这些公告，请点击以下链接：
{UNSUBSCRIBELINK}

要更好地控制您收到的电子邮件通知，请登录论坛并转到您的个人资料中的通知区域。

{REGARDS}';

/**
@additional_params: notify_boards_once_body
TOPICSUBJECT: The subject of the topic causing the notification
TOPICLINK: A link to the topic.
MESSAGE: This is the body of the message.
UNSUBSCRIBELINK: Link to unsubscribe from notifications.
@description:
 */
$txt['notify_boards_once_body_subject'] = '新主题： {TOPICSUBJECT}';
$txt['notify_boards_once_body_body'] = '您正在观看的论坛上已创建了一个新主题 {TOPICSUBJECT}。

你可以在以下位置看到它：
{TOPICLINK}

可能会发布更多主题，但在您返回讨论区并阅读其中一些主题之前，您不会收到有关此讨论区的更多电子邮件通知。

主题正文如下所示：
{MESSAGE}

使用此链接取消订阅该论坛的新主题：

{REGARDS}';

/**
@additional_params: notify_boards_once
TOPICSUBJECT: The subject of the topic causing the notification
TOPICLINK: A link to the topic.
UNSUBSCRIBELINK: Link to unsubscribe from notifications.
@description:
 */
$txt['notify_boards_once_subject'] = '新主题： {TOPICSUBJECT}';
$txt['notify_boards_once_body'] = '您正在观看的论坛上已创建了一个新主题 {TOPICSUBJECT}。

你可以在以下位置看到它：
{TOPICLINK}

可能会发布更多主题，但在您返回讨论区并阅读其中一些主题之前，您不会收到有关此讨论区的更多电子邮件通知。

使用此链接取消订阅该论坛的新主题：
{UNSUBSCRIBELINK}

{REGARDS}';

/**
@additional_params: notify_boards_body
TOPICSUBJECT: The subject of the topic causing the notification
TOPICLINK: A link to the topic.
MESSAGE: This is the body of the message.
UNSUBSCRIBELINK: Link to unsubscribe from notifications.
@description:
 */
$txt['notify_boards_body_subject'] = '新主题： {TOPICSUBJECT}';
$txt['notify_boards_body_body'] = '您正在观看的论坛上已创建了一个新主题 {TOPICSUBJECT}。

你可以在以下位置看到它：
{TOPICLINK}

主题正文如下所示：
{MESSAGE}

使用此链接取消订阅该论坛的新主题：
{UNSUBSCRIBELINK}

{REGARDS}';

/**
@additional_params: notify_boards
TOPICSUBJECT: The subject of the topic causing the notification
TOPICLINK: A link to the topic.
UNSUBSCRIBELINK: Link to unsubscribe from notifications.
@description:
 */
$txt['notify_boards_subject'] = '新主题： {TOPICSUBJECT}';
$txt['notify_boards_body'] = '您正在观看的论坛上已创建了一个新主题 {TOPICSUBJECT}。

你可以在以下位置看到它：
{TOPICLINK}

使用此链接取消订阅该论坛的新主题：
{UNSUBSCRIBELINK}

{REGARDS}';

/**
@additional_params: alert_unapproved_reply
SUBJECT: The subject of the topic causing the notification
LINK: A link to the topic.
@description:
 */
$txt['alert_unapproved_reply_subject'] = '主题回复：{SUBJECT}';
$txt['alert_unapproved_reply_body'] = '{POSTERNAME} 已在“{SUBJECT}”中发布了回复。

You can see it at
{LINK}

{REGARDS}';

/**
@additional_params: unapproved_attachment
SUBJECT: The subject of the topic causing the notification
LINK: A link to the message with the attachment.
@description:
 */
$txt['unapproved_attachment_subject'] = '新的未经批准的附件：{SUBJECT}';
$txt['unapproved_attachment_body'] = '{SUBJECT} 中已添加新附件，需要批准。

您可以通过下面的链接批准或拒绝此附件，该链接会将您带到该附件所属的邮件。

{LINK}

{REGARDS}';

/**
@additional_params: alert_unapproved_post
SUBJECT: The subject of the topic causing the notification
LINK: A link to the topic.
@description:
 */
$txt['alert_unapproved_post_subject'] = '新的未批准帖子：{SUBJECT}';
$txt['alert_unapproved_post_body'] = '已发布新帖子，需要批准：{SUBJECT}

您可以使用以下链接批准或拒绝此帖子：
{LINK}

{REGARDS}';

/**
@additional_params: alert_unapproved_topic
SUBJECT: The subject of the topic causing the notification
LINK: A link to the topic.
@description:
 */
$txt['alert_unapproved_topic_subject'] = '新的未批准主题：{SUBJECT}';
$txt['alert_unapproved_topic_body'] = '已创建一个需要批准的新主题：{SUBJECT}

您可以使用以下链接批准或拒绝此主题：
{LINK}

{REGARDS}';

/**
@additional_params: request_membership
RECPNAME: The name of the person receiving the email
APPLYNAME: The name of the person applying for group membership
GROUPNAME: The name of the group being applied to.
REASON: The reason given by the applicant for wanting to join the group.
MODLINK: Link to the group moderation page.
@description:
 */
$txt['request_membership_subject'] = '新的群组应用程序';
$txt['request_membership_body'] = '{RECPNAME},

{APPLYNAME} 已请求加入“{GROUPNAME}”群组。 用户给出的理由如下：

{REASON}

您可以使用以下链接批准或拒绝此申请：

{MODLINK}

{REGARDS}';

/**
@additional_params: paid_subscription
REALNAME: The real (display) name of the person receiving the email.
PROFILE_LINK: Link to profile of member receiving email where can renew.
SUBSCRIPTION: Name of the subscription.
END_DATE: Date it expires.
@description:
 */
$txt['paid_subscription_reminder_subject'] = '订阅即将在 {FORUMNAME} 到期';
$txt['paid_subscription_reminder_body'] = '{REALNAME},

您在 {FORUMNAME} 的订阅即将到期。 如果您选择自动续订，则无需采取任何行动； 否则，您可能希望考虑再次订阅。 详情如下：

订阅名称：{SUBSCRIPTION}
到期时间：{END_DATE}

要编辑您的订阅，请访问以下 URL：
{PROFILE_LINK}

{REGARDS}';

/**
@additional_params: activate_reactivate
ACTIVATIONLINK:  The URL link to reactivate the member's account.
ACTIVATIONCODE:  The code needed to reactivate the member's account.
ACTIVATIONLINKWITHOUTCODE: The URL to the page where the activation code can be entered.
@description:
 */
$txt['activate_reactivate_subject'] = '欢迎回到{FORUMNAME}';
$txt['activate_reactivate_body'] = '为了重新验证您的电子邮件地址，您的帐户已被停用。 单击以下链接再次激活：
{ACTIVATIONLINK}

如果您在激活时遇到任何问题，请访问 {ACTIVATIONLINKWITHOUTCODE} 并使用代码“{ACTIVATIONCODE}”。

{REGARDS}';

/**
@additional_params: forgot_password
REALNAME: The real (display) name of the person receiving the reminder.
REMINDLINK: The link to reset the password.
IP: The IP address of the requester.
MEMBERNAME:
@description:
 */
$txt['forgot_password_subject'] = '{FORUMNAME} 的新密码';
$txt['forgot_password_body'] = '亲爱的{REALNAME}，
发送此邮件是因为您的帐户已应用“忘记密码”功能。 要设置新密码，请单击以下链接：
{REMINDLINK}

IP: {IP}
用户名: {MEMBERNAME}

{REGARDS}';

/**
@additional_params: send_email
EMAILSUBJECT: The subject the user wants to email.
EMAILBODY: The body the user wants to email.
SENDERNAME: The name of the member sending the email.
RECPNAME: The name of the person receiving the email.
@description:
 */
$txt['send_email_subject'] = '{EMAILSUBJECT}';
$txt['send_email_body'] = '{EMAILBODY}';

/**
@additional_params: report_to_moderator
TOPICSUBJECT: The subject of the reported post.
POSTERNAME: The reported post's author's name.
REPORTERNAME: The name of the person reporting the post.
TOPICLINK: The URL of the post that is being reported.
REPORTLINK: The URL of the moderation center report.
COMMENT: The comment left by the reporter, hopefully to explain why they are reporting the post.
@description: When a user reports a post this email is sent out to moderators and admins of that board.
 */
$txt['report_to_moderator_subject'] = '举报帖子：{TOPICSUBJECT}，作者：{POSTERNAME}';
$txt['report_to_moderator_body'] = '{REPORTERNAME} 在您主持的论坛上举报了 {POSTERNAME} 发布的以下帖子“{TOPICSUBJECT}”：

主题：{TOPICLINK}
审核中心：{REPORTLINK}

记者对此作出如下评论：
{COMMENT}

{REGARDS}';

/**
@additional_params: report_to_moderator
TOPICSUBJECT: The subject of the reported post.
POSTERNAME: The reported post's author's name.
COMMENTERNAME: The name of the person who replied to the report.
TOPICLINK: The URL of the post that is being reported.
REPORTLINK: The URL of the moderation center report.
@description: When a moderator replies to a moderation report, this can be sent to the other moderators who previously replied.
 */
$txt['reply_to_moderator_subject'] = '举报帖子的后续内容：{TOPICSUBJECT}，作者：{POSTERNAME}';
$txt['reply_to_moderator_body'] = '之前，“{TOPICSUBJECT}”已报告给版主。

此后，{COMMENTERNAME} 向该报告添加了评论。 更多信息可以在论坛上找到。

主题：{TOPICLINK}
审核中心：{REPORTLINK}

{REGARDS}';

/**
@additional_params: report_user_profile
MEMBERNAME: The display name of the reported user
REPORTERNAME: The name of the person reporting the profile
PROFILELINK: The link to the profile that was reported
COMMENT: The comment left by the reporter.
@description: When a user's profile is reported
 */
$txt['report_member_profile_subject'] = '举报的个人资料：{MEMBERNAME}';
$txt['report_member_profile_body'] = '{REPORTERNAME} 已举报“{MEMBERNAME}”的个人资料。

个人资料：{PROFILELINK}
审核中心：{REPORTLINK}

记者对此作出如下评论：
{COMMENT}

{REGARDS}';

/**
@additional_params: report_user_profile
MEMBERNAME: The display name of the reported user
COMMENTERNAME: The name of the person who added the comment
PROFILELINK: The link to the profile that was reported
@description: When someone replies to a report about a profile, this can be sent to others who replied
 */
$txt['reply_to_member_report_subject'] = '举报个人资料的后续行动：{MEMBERNAME}';
$txt['reply_to_member_report_body'] = '之前，{MEMBERNAME} 的个人资料已被举报。

此后，{COMMENTERNAME} 向该报告添加了评论。 更多信息可以在论坛中找到。

个人资料：{PROFILELINK}
审核中心：{REPORTLINK}

{REGARDS}';

/**
@additional_params: change_password
USERNAME: The user name for the member receiving the email.
PASSWORD: The password for the member.
@description:
 */
$txt['change_password_subject'] = '新密码详情';
$txt['change_password_body'] = '亲爱的{USERNAME}，

您在 {FORUMNAME} 的登录详细信息已更改，您的密码已重置。 以下是您的新登录详细信息。

您的用户名是“{USERNAME}”，密码是“{PASSWORD}”。

您可以在登录后前往个人资料页面进行更改，或者在登录后访问此页面：
{SCRIPTURL}？Action=profile

{REGARDS}';

/**
@additional_params: register_activate
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
PASSWORD: The password for the member.
ACTIVATIONLINK:  The URL link to reactivate the member's account.
ACTIVATIONLINKWITHOUTCODE: The URL to the page where the activation code can be entered.
ACTIVATIONCODE:  The code needed to reactivate the member's account.
FORGOTPASSWORDLINK: The URL to the "forgot password" page.
@description:
 */
$txt['register_activate_subject'] = '欢迎来到{FORUMNAME}';
$txt['register_activate_body'] = '感谢您在 {FORUMNAME} 注册。 您的用户名是{USERNAME}。 如果您忘记密码，可以访问 {FORGOTPASSWORDLINK} 重置密码。

在登录之前，您首先需要激活您的帐户。 为此，请点击以下链接：

{ACTIVATIONLINK}

如果您在激活时遇到任何问题，请访问 {ACTIVATIONLINKWITHOUTCODE} 并使用代码“{ACTIVATIONCODE}”。

{REGARDS}';

/**
@additional_params: register_coppa
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
PASSWORD: The password for the member.
COPPALINK:  The URL link to the coppa form.
FORGOTPASSWORDLINK: The URL to the "forgot password" page.
@description:
 */
$txt['register_coppa_subject'] = '欢迎来到{FORUMNAME}';
$txt['register_coppa_body'] = '感谢您在 {FORUMNAME} 注册。 您的用户名是{USERNAME}。 如果您忘记密码，可以在 {FORGOTPASSWORDLINK} 进行更改

在您登录之前，管理员需要您的家长/监护人同意您才能加入社区。 您可以通过以下链接获取更多信息：

{COPPALINK}

{REGARDS}';

/**
@additional_params: register_immediate
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
PASSWORD: The password for the member.
FORGOTPASSWORDLINK: The URL to the "forgot password" page.
@description:
 */
$txt['register_immediate_subject'] = '欢迎来到{FORUMNAME}';
$txt['register_immediate_body'] = '感谢您在 {FORUMNAME} 注册。 您的用户名是{USERNAME}。 如果您忘记了密码，可以在 {FORGOTPASSWORDLINK} 进行更改。

{REGARDS}';

/**
@additional_params: register_pending
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
PASSWORD: The password for the member.
FORGOTPASSWORDLINK: The URL to the "forgot password" page.
@description:
 */
$txt['register_pending_subject'] = '欢迎来到{FORUMNAME}';
$txt['register_pending_body'] = '{REALNAME}，您好，我们已收到您在 {FORUMNAME} 的注册请求。

您要注册的用户名是 {USERNAME}。 如果您忘记了密码，可以通过 {FORGOTPASSWORDLINK} 进行更改。

在您登录并开始使用论坛之前，您的请求将经过审核和批准。

{REGARDS}';

/**
@additional_params: notification_reply
TOPICSUBJECT:
POSTERNAME:
TOPICLINK:
UNSUBSCRIBELINK:
@description:
 */
$txt['notification_reply_subject'] = '主题回复：{TOPICSUBJECT}';
$txt['notification_reply_body'] = '在您正在观看的主题中，{POSTERNAME} 已发布回复。

查看回复：{TOPICLINK}

使用以下链接取消订阅此主题：{UNSUBSCRIBELINK}

{REGARDS}';

/**
@additional_params: notification_reply_body
TOPICSUBJECT:
POSTERNAME:
TOPICLINK:
UNSUBSCRIBELINK:
MESSAGE:
@description:
 */
$txt['notification_reply_body_subject'] = '主题回复：{TOPICSUBJECT}';
$txt['notification_reply_body_body'] = '在您正在观看的主题中，{POSTERNAME} 已发布回复。

查看回复：{TOPICLINK}

使用以下链接取消订阅此主题：{UNSUBSCRIBELINK}

回复正文如下所示：
{MESSAGE}

{REGARDS}';

/**
@additional_params: notification_reply_once
TOPICSUBJECT:
POSTERNAME:
TOPICLINK:
UNSUBSCRIBELINK:
@description:
 */
$txt['notification_reply_once_subject'] = '主题回复：{TOPICSUBJECT}';
$txt['notification_reply_once_body'] = '在您正在观看的主题中，{POSTERNAME} 已发布回复。

查看回复：{TOPICLINK}

使用以下链接取消订阅此主题：{UNSUBSCRIBELINK}

可能会发布更多回复，但在您访问该主题之前，您不会再收到有关该主题的任何通知。

{REGARDS}';

/**
@additional_params: notification_reply_body_once
TOPICSUBJECT:
POSTERNAME:
TOPICLINK:
UNSUBSCRIBELINK:
MESSAGE:
@description:
 */
$txt['notification_reply_body_once_subject'] = '主题回复：{TOPICSUBJECT}';
$txt['notification_reply_body_once_body'] = '在您正在观看的主题中，{POSTERNAME} 已发布回复。

查看回复：{TOPICLINK}

使用以下链接取消订阅此主题：{UNSUBSCRIBELINK}

回复正文如下所示：
{MESSAGE}

可能会发布更多回复，但在您访问该主题之前，您不会再收到有关该主题的任何通知。

{REGARDS}';

/**
@additional_params: notification_sticky
@description:
 */
$txt['notification_sticky_subject'] = '粘贴主题：{TOPICSUBJECT}';
$txt['notification_sticky_body'] = '您正在观看的主题已被标记为置顶主题。

查看主题：{TOPICLINK}

使用以下链接取消订阅此主题：{UNSUBSCRIBELINK}

{REGARDS}';

/**
@additional_params: notification_lock
@description:
 */
$txt['notification_lock_subject'] = '主题已锁定：{TOPICSUBJECT}';
$txt['notification_lock_body'] = '您正在观看的主题已被锁定。

查看主题：{TOPICLINK}

使用以下链接取消订阅此主题：{UNSUBSCRIBELINK}

{REGARDS}';

/**
@additional_params: notification_unlock
@description:
 */
$txt['notification_unlock_subject'] = '主题已解锁：{TOPICSUBJECT}';
$txt['notification_unlock_body'] = '您正在观看的主题已被解锁。

查看主题：{TOPICLINK}

使用以下链接取消订阅此主题：{UNSUBSCRIBELINK}

{REGARDS}';

/**
@additional_params: notification_remove
@description:
 */
$txt['notification_remove_subject'] = '已删除主题：{TOPICSUBJECT}';
$txt['notification_remove_body'] = '您正在观看的主题已被删除。

{REGARDS}';

/**
@additional_params: notification_move
@description:
 */
$txt['notification_move_subject'] = '主题已移动：{TOPICSUBJECT}';
$txt['notification_move_body'] = '您正在观看的主题已移至另一个版块。

查看主题：{TOPICLINK}

使用以下链接取消订阅此主题：{UNSUBSCRIBELINK}

{REGARDS}';

/**
@additional_params: notification_merged
@description:
 */
$txt['notification_merge_subject'] = '合并主题：{TOPICSUBJECT}';
$txt['notification_merge_body'] = '您正在观看的主题已与另一个主题合并。

查看新合并的主题：{TOPICLINK}

使用以下链接取消订阅此主题：{UNSUBSCRIBELINK}

{REGARDS}';

/**
@additional_params: notification_split
@description:
 */
$txt['notification_split_subject'] = '主题分割：{TOPICSUBJECT}';
$txt['notification_split_body'] = '您正在观看的主题已被分成两个或多个主题。

查看此主题的剩余内容：{TOPICLINK}

使用以下链接取消订阅此主题：{UNSUBSCRIBELINK}

{REGARDS}';

/**
@additional_params: admin_notify
USERNAME:
PROFILELINK:
@description:
 */
$txt['admin_notify_subject'] = '新成员已加入';
$txt['admin_notify_body'] = '{USERNAME} 刚刚注册成为您论坛的新会员。 单击下面的链接查看他们的个人资料。
{PROFILELINK}

{REGARDS}';

/**
@additional_params: admin_notify_approval
USERNAME:
PROFILELINK:
APPROVALLINK:
@description:
 */
$txt['admin_notify_approval_subject'] = '新成员已加入';
$txt['admin_notify_approval_body'] = '{USERNAME} 刚刚注册成为您论坛的新会员。 单击下面的链接查看他们的个人资料。
{PROFILELINK}

该成员必须先获得其帐户的批准才能开始发帖。 单击下面的链接转到批准屏幕。
{APPROVALLINK}

{REGARDS}';

/**
@additional_params: admin_attachments_full
REALNAME:
@description:
 */
$txt['admin_attachments_full_subject'] = 'Urgent！附件目录几乎已满';
$txt['admin_attachments_full_body'] = '{REALNAME},

{FORUMNAME} 中的附件目录几乎已满。 请访问论坛来解决此问题。

一旦附件目录达到允许的最大大小，用户将无法继续发布附件或上传自定义头像（如果启用）。

{REGARDS}';

/**
@additional_params: paid_subscription_refund
NAME: Subscription title.
REALNAME: Recipients name
REFUNDUSER: Username who took out the subscription.
REFUNDNAME: User's display name who took out the subscription.
DATE: Today's date.
PROFILELINK: Link to members profile.
@description:
 */
$txt['paid_subscription_refund_subject'] = '退款付款订阅';
$txt['paid_subscription_refund_body'] = '{REALNAME},

一名会员收到了付费订阅的退款。 以下是本次订阅的详细信息：

订阅：{NAME}
用户名：{REFUNDNAME} ({REFUNDUSER})
日期：{DATE}

您可以点击以下链接查看该会员的个人资料：

{REGARDS}';

/**
@additional_params: paid_subscription_new
NAME: Subscription title.
REALNAME: Recipients name
SUBEMAIL: Email address of the user who took out the subscription
SUBUSER: Username who took out the subscription.
SUBNAME: User's display name who took out the subscription.
DATE: Today's date.
PROFILELINK: Link to members profile.
@description:
 */
$txt['paid_subscription_new_subject'] = '新付费订阅';
$txt['paid_subscription_new_body'] = '{REALNAME},

一名会员已进行新的付费订阅。 以下是本次订阅的详细信息：

订阅：{NAME}
用户名：{SUBNAME} ({SUBUSER})
用户电子邮件：{SUBEMAIL}
价格：{PRICE}
日期：{DATE}

您可以点击以下链接查看该会员的个人资料：
{PROFILELINK}

{REGARDS}';

/**
@additional_params: paid_subscription_error
ERROR: Error message.
REALNAME: Recipients name
@description:
 */
$txt['paid_subscription_error_subject'] = '支付订阅错误';
$txt['paid_subscription_error_body'] = '亲爱的{REALNAME}，

处理付费订阅时出现以下错误
---------------------------------------------------------------
{ERROR}

{REGARDS}';

/**
@additional_params: new_pm
SUBJECT: The personal message subject.
SENDER:  The user name for the member sending the personal message.
READLINK:  The link to directly access the read page.
REPLYLINK:  The link to directly access the reply page.
@description: A notification email sent to the receivers of a personal message
 */
$txt['new_pm_subject'] = '新个人消息：{SUBJECT}';
$txt['new_pm_body'] = '{SENDER} 刚刚在 {FORUMNAME} 上向您发送了一条私人消息。

重要提示：请记住，这只是一个通知。 请不要回复这封邮件。

在此阅读此个人消息：{READLINK}

在此回复此个人消息：{REPLYLINK}

{REGARDS}';

/**
@additional_params: new_pm_body
SUBJECT: The personal message subject.
SENDER:  The user name for the member sending the personal message.
MESSAGE:  The text of the personal message.
REPLYLINK:  The link to directly access the reply page.
@description: A notification email sent to the receivers of a personal message
 */
$txt['new_pm_body_subject'] = '新个人消息：{SUBJECT}';
$txt['new_pm_body_body'] = '{SENDER} 刚刚在 {FORUMNAME} 上向您发送了一条私人消息。

重要提示：请记住，这只是一个通知。 请不要回复这封邮件。

他们发给你的消息是：

{MESSAGE}

在此回复此个人消息：{REPLYLINK}

{REGARDS}';

/**
@additional_params: new_pm_tolist
SUBJECT: The personal message subject.
SENDER:  The user name for the member sending the personal message.
READLINK:  The link to directly access the read page.
REPLYLINK:  The link to directly access the reply page.
TOLIST:  The list of users that will receive the personal message.
@description: A notification email sent to the receivers of a personal message
 */
$txt['new_pm_tolist_subject'] = '新个人消息：{SUBJECT}';
$txt['new_pm_tolist_body'] = '{SENDER} 刚刚在 {FORUMNAME} 上向您和 {TOLIST} 发送了一条私人消息。

重要提示：请记住，这只是一个通知。 请不要回复这封邮件。

在此阅读此个人消息：{READLINK}

在此回复此个人消息（仅限发件人）：{REPLYLINK}

{REGARDS}';

/**
@additional_params: new_pm_body_tolist
SUBJECT: The personal message subject.
SENDER:  The user name for the member sending the personal message.
MESSAGE:  The text of the personal message.
REPLYLINK:  The link to directly access the reply page.
TOLIST:  The list of users that will receive the personal message.
@description: A notification email sent to the receivers of a personal message
 */
$txt['new_pm_body_tolist_subject'] = '新个人消息：{SUBJECT}';
$txt['new_pm_body_tolist_body'] = '{SENDER} 刚刚在 {FORUMNAME} 上向您和 {TOLIST} 发送了一条私人消息。

重要提示：请记住，这只是一个通知。 请不要回复这封邮件。

他们发给你的消息是：

{MESSAGE}

在此回复此个人消息（仅限发件人）：{REPLYLINK}

{REGARDS}';

/**
@additional_params: msg_quote
CONTENTSUBJECT: The post subject.
QUOTENAME:  The user name for the member creating the quote
MEMBERNAME:  The user name for the member being quoted
CONTENTLINK:  The post's link
@description: A notification email sent to the members who've been quoted in a post
 */
$txt['msg_quote_subject'] = '您已在帖子中被引用：{CONTENTSUBJECT}';
$txt['msg_quote_body'] = '您好{MEMBERNAME}，

您已在 {QUOTENAME} 标题为“{CONTENTSUBJECT}”的帖子中被引用，您可以在此处查看该帖子：
{CONTENTLINK}

{REGARDS}';

/**
@additional_params: msg_mention
CONTENTSUBJECT: The post subject.
MENTIONNAME:  The user name for the member creating the mention
MEMBERNAME:  The user name for the member being mentioned
CONTENTLINK:  The post's link
@description: A notification email sent to the members who've been mentioned in a post
 */
$txt['msg_mention_subject'] = '帖子中提到了您：{CONTENTSUBJECT}';
$txt['msg_mention_body'] = '您好{MEMBERNAME}，

{MENTIONNAME} 在题为“{CONTENTSUBJECT}”的帖子中提到了您，您可以在此处查看该帖子：
{CONTENTLINK}

{REGARDS}';

/**
@additional_params: happy_birthday
REALNAME: The real (display) name of the person receiving the birthday message.
@description: A message sent to members on their birthday.
 */
$txtBirthdayEmails['happy_birthday_subject'] = '{FORUMNAME} 生日快乐。';
$txtBirthdayEmails['happy_birthday_body'] = '亲爱的{REALNAME}，

我们{FORUMNAME}祝您生日快乐。 愿这一天和来年充满欢乐。

{REGARDS}';
$txtBirthdayEmails['happy_birthday_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>';

$txtBirthdayEmails['karlbenson1_subject'] = '生日...';
$txtBirthdayEmails['karlbenson1_body'] = '我们本可以给你寄一张生日贺卡。 我们本可以送你一些鲜花或蛋糕。

但我们没有。

我们甚至可以向您发送其中一条自动生成的消息来祝您生日快乐，而我们甚至不需要替换 INSERT NAME。

但我们没有。

我们专门为你写了这份生日祝福。

我们祝您度过一个非常特别的生日。

{REGARDS}

//:: 此消息是自动生成的 :://';
$txtBirthdayEmails['karlbenson1_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>';

$txtBirthdayEmails['nite0859_subject'] = '生日快乐！';
$txtBirthdayEmails['nite0859_body'] = '您在 {FORUMNAME} 的朋友想抽出一点时间祝您生日快乐，{REALNAME}。 如果您最近没有这样做，请访问我们的社区，以便其他人有机会转达他们的热情问候。

尽管今天是您的生日，{REALNAME}，我们还是想提醒您，您在我们社区的会员资格是迄今为止给我们最好的礼物。

最好的祝愿，
{FORUMNAME} 的工作人员';
$txtBirthdayEmails['nite0859_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>';

$txtBirthdayEmails['zwaldowski_subject'] = '给 {REALNAME} 的生日祝福';
$txtBirthdayEmails['zwaldowski_body'] = '亲爱的{REALNAME}，

你生命中又一年过去了。 我们{FORUMNAME}希望它充满了幸福，并祝您在接下来的日子里好运。

{REGARDS}';
$txtBirthdayEmails['zwaldowski_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>';

$txtBirthdayEmails['geezmo_subject'] = '生日快乐，{REALNAME}！';
$txtBirthdayEmails['geezmo_body'] = '你知道今天谁过生日吗，{REALNAME}？

我们知道……你！

生日快乐！

你现在长大了一岁，但我们希望你比去年更快乐。

祝你今天愉快，{REALNAME}！

- 来自您的{FORUMNAME}家庭';
$txtBirthdayEmails['geezmo_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>';

$txtBirthdayEmails['karlbenson2_subject'] = '你的生日问候中';
$txtBirthdayEmails['karlbenson2_body'] = '我们希望您的生日是有史以来最好的； 阴天、晴天或任何天气。
享受很多生日蛋糕和乐趣，并告诉我们你做了什么。

我们希望这条信息给您带来欢乐，并让它持续下去，直到明年的同一时间同一地点。

{REGARDS}';
$txtBirthdayEmails['karlbenson2_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>';

?>
