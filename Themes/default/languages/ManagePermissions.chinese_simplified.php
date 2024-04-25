<?php
// Version: 2.1.0; ManagePermissions

$txt['permissions_title'] = '管理权限';
$txt['permissions_modify'] = '修改';
$txt['permissions_view'] = '查看';
$txt['permissions_allowed'] = '允许的';
$txt['permissions_denied'] = '被拒绝';
$txt['permission_cannot_edit'] = '<strong>Note:</strong> You cannot edit this permission profile as it is a predefined profile included within the forum software by default. If you wish to change the permissions of this profile you must first create a duplicate profile. You can carry out this task by clicking <a href="%1$s">here</a>.';

$txt['permissions_for_profile'] = '个人资料权限';
$txt['permissions_boards_desc'] = '下面的列表显示您论坛上的每个棋盘已经分配了哪些权限。 您可以通过点击面板名称或从页面底部选择 &quot;编辑所有&quot; 来编辑分配的权限配置文件。 要编辑配置文件本身，请单击配置文件名称。';
$txt['permissions_board_all'] = '全部编辑';
$txt['permission_profile'] = '权限配置';
$txt['permission_profile_desc'] = '哪些 <a href="%1$s">权限设置了</a> 板应该使用。';
$txt['permission_profile_inherit'] = '从父看板';

$txt['permissions_profile'] = '个人信息';
$txt['permissions_profiles_desc'] = '权限配置文件被分配给个别看板，以便您能够轻松地管理您的安全设置。 您可以在此区域创建、编辑和删除权限配置文件。';
$txt['permissions_profiles_change_for_board'] = '编辑权限配置文件: &quot;%1$s&quot;';
$txt['permissions_profile_default'] = '默认设置';
$txt['permissions_profile_no_polls'] = '没有调查';
$txt['permissions_profile_reply_only'] = '只回复';
$txt['permissions_profile_read_only'] = '只读';

$txt['permissions_profile_rename'] = '重命名所有';
$txt['permissions_profile_edit'] = '编辑配置文件';
$txt['permissions_profile_new'] = '新建配置文件';
$txt['permissions_profile_new_create'] = '创建';
$txt['permissions_profile_name'] = '配置文件名称';
$txt['permissions_profile_used_by'] = '使用';
$txt['permissions_profile_used_by_one'] = '1 個棋盘';
$txt['permissions_profile_used_by_many'] = '%1$d 看板';
$txt['permissions_profile_used_by_none'] = '无看板';
$txt['permissions_profile_do_edit'] = '编辑';
$txt['permissions_profile_do_delete'] = '删除';

$txt['permissionname_profile_signature'] = '编辑签名';
$txt['permissionhelp_profile_signature'] = 'Allow members to edit the signature field in their profiles';
$txt['permissionname_profile_signature_own'] = '我的签名';
$txt['permissionname_profile_signature_any'] = '任何签名';
$txt['permissionname_profile_forum'] = '允许论坛个人资料编辑';
$txt['permissionhelp_profile_forum'] = 'This option will allow members to edit their Forum Profiles';
$txt['permissionname_profile_forum_own'] = '我的个人资料';
$txt['permissionname_profile_forum_any'] = '任何个人资料';
$txt['permissionname_profile_website'] = 'Edit website';
$txt['permissionhelp_profile_website'] = 'Allow members to edit the website fields in their profiles';
$txt['permissionname_profile_website_own'] = 'Own profile';
$txt['permissionname_profile_website_any'] = 'Any profile';
$txt['permissionname_profile_blurb'] = '编辑个人文本';
$txt['permissionhelp_profile_blurb'] = 'Allow members to edit the personal text field in their profiles';
$txt['permissionname_profile_blurb_own'] = '我的个人资料';
$txt['permissionname_profile_blurb_any'] = '任何个人资料';
$txt['permissions_profile_copy_from'] = 'Copy Permissions from';

$txt['permissions_includes_inherited'] = '继承的组';

$txt['permissions_all'] = '所有的';
$txt['permissions_none'] = '无';
$txt['permissions_set_permissions'] = '设置权限';

$txt['permissions_advanced_options'] = '高级选项';
$txt['permissions_with_selection'] = '选中项';
$txt['permissions_apply_pre_defined'] = '应用预定义的权限集';
$txt['permissions_select_pre_defined'] = '选择一个预定义的配置文件';
$txt['permissions_copy_from_board'] = '从此看板复制权限';
$txt['permissions_select_board'] = '选择棋盘';
$txt['permissions_like_group'] = '设置权限类似此组';
$txt['permissions_select_membergroup'] = '选择会员组';
$txt['permissions_add'] = '添加权限';
$txt['permissions_remove'] = '清除权限';
$txt['permissions_deny'] = '拒绝权限';
$txt['permissions_select_permission'] = '选择权限';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = '您只能选择一个操作来修改权限';
$txt['permissions_no_action'] = '未选择动作';
$txt['permissions_deny_dangerous'] = '您将拒绝一个或多个权限。\n如果您没有确保您拒绝授予权限的群组中没有任何人\\"意外\\"，这可能是危险的，并导致意外结果。\n\n您确定要继续吗？';

$txt['permissions_modify_group'] = '修改群组';
$txt['permissions_general'] = '常规权限';
$txt['permissions_board'] = '默认看板配置文件权限';
$txt['permissions_board_desc'] = '<strong>备注</strong>: 更改这些看板权限将会影响当前分配的 &quot;默认&quot; 权限配置文件的所有看板。 不使用 &quot;默认&quot; 配置文件的看板将不会受到此页面更改的影响。';
$txt['permissions_commit'] = '保存更改';
$txt['permissions_on'] = '在个人资料中';
$txt['permissions_local_for'] = '组权限';
$txt['permissions_option_own'] = '自己的';
$txt['permissions_option_any'] = '任何';
$txt['permissions_option_on'] = '&#x2705;';
$txt['permissions_option_off'] = '&mdash;';
$txt['permissions_option_deny'] = '&#x1F6AB;';
$txt['permissions_option_desc'] = 'For each permission you can pick either \'Allow\' (&#x2705;), \'Disallow\' (&mdash;), or <span class="red">\'Deny\' (&#x1F6AB;)</span>.<br><br>Remember that if you deny a permission, any member - whether moderator or otherwise - that is in that group will be denied that as well.<br>For this reason, you should use deny carefully, only when <strong>necessary</strong>. Disallow, on the other hand, denies unless otherwise granted.';

$txt['permissiongroup_general'] = 'A. 概况';
$txt['permissionname_view_stats'] = '查看论坛统计';
$txt['permissionhelp_view_stats'] = '论坛统计是一个概述论坛所有统计数据的页面，例如成员统计、每日员额数目和数个前10个统计数字。 启用此权限，将链接添加到棋盘索引底部(“[更多统计]”)。';
$txt['permissionname_view_mlist'] = '查看会员列表和组';
$txt['permissionhelp_view_mlist'] = '会员列表显示已注册到您论坛的所有会员。列表可以排序和搜索。 会员列表通过点击成员数量从董事会索引和统计页面链接起来。 它也适用于该小组成员的小组网页。';
$txt['permissionname_who_view'] = 'View Who\'s Online page';
$txt['permissionhelp_who_view'] = '谁在线展示了目前在线的所有成员以及他们当时正在做什么。 此权限只有在您在“功能和选项”中启用它时才能起作用。 您可以通过点击板索引的“用户在线”部分中的链接访问“谁在线”屏幕。 即使被拒绝，成员们仍然能够看到谁在线，而不会看到他们在哪里。';
$txt['permissionname_search_posts'] = '搜索帖子和主题';
$txt['permissionhelp_search_posts'] = '搜索权限允许用户搜索他或她允许访问的所有看板。 当启用搜索权限时，将会将“搜索”按钮添加到论坛按钮栏。';

$txt['permissiongroup_pm'] = '个人消息';
$txt['permissionname_pm_read'] = '阅读个人消息';
$txt['permissionhelp_pm_read'] = '此权限允许用户访问个人信息部分并阅读个人信息。 没有此权限，用户无法发送个人消息。';
$txt['permissionname_pm_send'] = '发送个人消息';
$txt['permissionhelp_pm_send'] = '向其他注册成员发送个人消息，需要“阅读个人消息”权限。';

$txt['permissiongroup_calendar'] = '日程表';
$txt['permissionname_calendar_view'] = '查看日历';
$txt['permissionhelp_calendar_view'] = 'The calendar shows for each month the birthdays, events and holidays. This permission allows access to this calendar. When this permission is enabled, a button will be added to the top button bar and a list will be shown at the bottom of the board index with current and upcoming birthdays, events and holidays. The calendar needs be enabled from \'Forum - Calendar\'.';
$txt['permissionname_calendar_post'] = '在日历中创建事件';
$txt['permissionhelp_calendar_post'] = '事件是一个与某个日期或日期范围相关联的主题。可以从日历中创建事件。 只有当创建活动的用户被允许发布新主题时，事件才能被创建。';
$txt['permissionname_calendar_edit'] = '编辑日历中的事件';
$txt['permissionhelp_calendar_edit'] = '事件是一个与某个日期或日期范围相关联的主题。 事件可以通过点击日历视图中事件旁边的红色星号(*)来编辑。 为了能够编辑一个事件， 用户必须有足够的权限来编辑与事件相关联的主题的第一条消息。';
$txt['permissionname_calendar_edit_own'] = '自己的事件';
$txt['permissionname_calendar_edit_any'] = '任何事件';

$txt['permissiongroup_maintenance'] = '论坛管理';
$txt['permissionname_admin_forum'] = '管理论坛和数据库';
$txt['permissionhelp_admin_forum'] = 'This permission allows a user to:<ul class="normallist"><li>change forum, database and theme settings</li><li>manage packages</li><li>use the forum and database maintenance tools</li><li>view the error and mod logs</li></ul> Use this permission with caution, as it is very powerful.';
$txt['permissionname_manage_boards'] = '管理看板和类别';
$txt['permissionhelp_manage_boards'] = 'This permission allows creation, editing, and removal of boards and categories.<br><br>Users with this permission can see all boards.';
$txt['permissionname_manage_attachments'] = '管理附件和头像';
$txt['permissionhelp_manage_attachments'] = '此权限允许访问附件中心，在该中心列出所有论坛附件和头像并可以删除。';
$txt['permissionname_manage_smileys'] = '管理表情和消息图标';
$txt['permissionhelp_manage_smileys'] = '这允许访问微笑中心。在微笑中心您可以添加、编辑和移除微笑和微笑集。 如果您启用了自定义的消息图标，您也可以通过此权限添加和编辑消息图标。';
$txt['permissionname_edit_news'] = '编辑新闻';
$txt['permissionhelp_edit_news'] = 'The news function allows a random news line to appear on each screen. In order to use the news function, enable it in the forum settings.';
$txt['permissionname_access_mod_center'] = '访问审核中心';
$txt['permissionhelp_access_mod_center'] = '有了这个权限，该组的任何成员都可以从哪里访问调节中心，从哪里他们可以访问功能以便于调节. 请注意，这本身并不给予任何适度特权。';

$txt['permissiongroup_member_admin'] = '会员管理';
$txt['permissionname_moderate_forum'] = '管理论坛成员';
$txt['permissionhelp_moderate_forum'] = 'This permission includes all important member moderation functions:<ul class="normallist"><li>access to registration management</li><li>access to the view/delete members screen</li><li>extensive profile info, including track IP/user and online status (even if hidden)</li><li>activate accounts</li><li>get approval notifications and approve accounts</li><li>immune to ignore PM</li><li>several small things</li></ul>';
$txt['permissionname_manage_membergroups'] = '管理和分配会员组';
$txt['permissionhelp_manage_membergroups'] = '此权限允许用户编辑会员组并将会员组分配给其他会员。';
$txt['permissionname_manage_permissions'] = '管理权限';
$txt['permissionhelp_manage_permissions'] = '此权限允许用户编辑会员组的所有权限，全局或个别看板。';
$txt['permissionname_manage_bans'] = '管理封禁列表';
$txt['permissionhelp_manage_bans'] = '此权限允许用户添加或删除用户名、IP地址、主机名和电子邮件地址到被禁用户列表。 它还允许用户查看和移除尝试登录的被禁用户的日志条目。';
$txt['permissionname_send_mail'] = '向会员发送论坛电子邮件';
$txt['permissionhelp_send_mail'] = '通过电子邮件或个人消息批发所有论坛成员，或只是少数成员群组(后者需要“发送个人信息”权限)。';
$txt['permissionname_issue_warning'] = '向会员发出警告';
$txt['permissionhelp_issue_warning'] = '向论坛成员发出警告并更改论坛成员的警告级别。需要启用警告系统。';

$txt['permissiongroup_profile'] = '会员资料';
$txt['permissionname_profile_view'] = '查看其他会员的简档摘要和统计页面';
$txt['permissionhelp_profile_view'] = '此权限允许用户点击用户名查看其他用户个人资料设置、某些统计数据及其帖子的摘要。';
$txt['permissionname_profile_extra'] = '编辑附加配置文件设置';
$txt['permissionhelp_profile_extra'] = '附加配置文件设置包括头像、主题首选项、通知和个人信息的设置。';
$txt['permissionname_profile_extra_own'] = '我的个人资料';
$txt['permissionname_profile_extra_any'] = '任何个人资料';
$txt['permissionname_profile_title'] = '编辑自定义标题';
$txt['permissionhelp_profile_title'] = '自定义标题显示在主题显示页面，每个用户都有自定义标题。';
$txt['permissionname_profile_title_own'] = '我的个人资料';
$txt['permissionname_profile_title_any'] = '任何个人资料';
$txt['permissionname_profile_server_avatar'] = '从服务器选择头像';
$txt['permissionhelp_profile_server_avatar'] = '如果启用，这将允许用户从服务器上安装的头像收藏中选择头像。';
$txt['permissionname_profile_upload_avatar'] = '上传头像到服务器';
$txt['permissionhelp_profile_upload_avatar'] = '此权限将允许用户上传个人头像到服务器。';
$txt['permissionname_profile_remote_avatar'] = '选择一个远程存储的头像';
$txt['permissionhelp_profile_remote_avatar'] = '因为头像可能会对页面创建时间产生负面影响，所以可以禁止某些会员组使用外部服务器的头像。';

$txt['permissiongroup_profile_account'] = '会员帐户';
$txt['permissionname_profile_identity'] = '编辑帐户设置';
$txt['permissionhelp_profile_identity'] = '账户设置是个人资料的基本设置，如密码、电子邮件地址、会员组和首选语言。';
$txt['permissionname_profile_identity_own'] = '我的个人资料';
$txt['permissionname_profile_identity_any'] = '任何个人资料';
$txt['permissionname_profile_displayed_name'] = '编辑显示的名称';
$txt['permissionhelp_profile_displayed_name'] = '允许会员编辑个人资料中显示的名称字段';
$txt['permissionname_profile_displayed_name_own'] = '自己显示的名称';
$txt['permissionname_profile_displayed_name_any'] = '任何显示的名称';
$txt['permissionname_profile_password'] = '更改密码';
$txt['permissionhelp_profile_password'] = '允许会员更改密码或秘密问题字段';
$txt['permissionname_profile_password_own'] = '我的个人资料';
$txt['permissionname_profile_password_any'] = '任何个人资料';
$txt['permissionname_profile_remove'] = '删除帐户';
$txt['permissionhelp_profile_remove'] = '此权限允许用户在设置为“自己的帐户”时删除他的帐户。';
$txt['permissionname_profile_remove_own'] = '自己的帐户';
$txt['permissionname_profile_remove_any'] = '任何账户';
$txt['permissionname_view_warning'] = '查看警告状态';
$txt['permissionname_view_warning_own'] = '自己的帐户';
$txt['permissionname_view_warning_any'] = '任何账户';
$txt['permissionhelp_view_warning'] = '允许用户查看自己的警告状态和历史(\'自己的帐户\')或任何用户的状态和历史(\'任何帐户\')';

$txt['permissionname_report_user'] = '报告用户资料';
$txt['permissionhelp_report_user'] = '此权限将允许会员向管理员报告其他用户的配置文件，提醒他们在配置文件中的垃圾信息或其他不恰当内容。';

$txt['permissiongroup_general_board'] = 'A. 概况';
$txt['permissionname_moderate_board'] = '管理版面';
$txt['permissionhelp_moderate_board'] = '管理版面权限添加了几个小的权限，使版主成为真正的版主。 权限包括回复锁定的主题，更改投票过期时间和查看投票结果。';

$txt['permissiongroup_topic'] = '主题';
$txt['permissionname_post_new'] = '发布新主题';
$txt['permissionhelp_post_new'] = '此权限允许用户发布新主题。它不允许发布对主题的回复。';
$txt['permissionname_merge_any'] = '合并任何主题';
$txt['permissionhelp_merge_any'] = '合并两个或多个主题。合并主题中的消息顺序将根据消息创建时间。 一个用户只能在那些用户被允许合并的板上合并主题。 为了一次合并多个主题，用户必须在其配置文件设置中启用快速审核。';
$txt['permissionname_split_any'] = '分割任何主题';
$txt['permissionhelp_split_any'] = '将一个主题分成两个单独的主题。';
$txt['permissionname_make_sticky'] = '将主题置于粘性状态';
$txt['permissionhelp_make_sticky'] = '置顶的主题是总是留在板上的主题。它们可以用于发布公告或其他重要信息。';
$txt['permissionname_move'] = '移动主题';
$txt['permissionhelp_move'] = '将主题从一个面板移动到另一个面板。用户只能选择允许访问的目标面板。';
$txt['permissionname_move_own'] = '我的主题';
$txt['permissionname_move_any'] = '任何主题';
$txt['permissionname_lock'] = '锁定主题';
$txt['permissionhelp_lock'] = 'This permission allows a user to lock a topic. This can be done in order to make sure no one can reply to a topic. Only users with a \'Moderate board\' permission can still post in locked topics.';
$txt['permissionname_lock_own'] = '我的主题';
$txt['permissionname_lock_any'] = '任何主题';
$txt['permissionname_remove'] = '删除主题';
$txt['permissionhelp_remove'] = '全部删除主题。请注意，此权限不允许删除主题中的特定消息！';
$txt['permissionname_remove_own'] = '我的主题';
$txt['permissionname_remove_any'] = '任何主题';
$txt['permissionname_post_reply'] = '对主题的回复';
$txt['permissionhelp_post_reply'] = '此权限允许回复主题。';
$txt['permissionname_post_reply_own'] = '我的主题';
$txt['permissionname_post_reply_any'] = '任何主题';
$txt['permissionname_modify_replies'] = '修改回复到自己的主题';
$txt['permissionhelp_modify_replies'] = '此权限允许开始主题的用户修改其主题的所有回复。';
$txt['permissionname_delete_replies'] = '删除对自己主题的回复';
$txt['permissionhelp_delete_replies'] = '此权限允许开始主题的用户删除对其主题的所有回复。';
$txt['permissionname_announce_topic'] = '发布主题';
$txt['permissionhelp_announce_topic'] = '这允许用户向所有成员或少数成员群组发送有关主题的通知邮件。';

$txt['permissiongroup_post'] = '员额';
$txt['permissionname_delete'] = '删除帖子';
$txt['permissionhelp_delete'] = '删除帖子。这不允许用户删除主题的第一个帖子。';
$txt['permissionname_delete_own'] = '我的帖子';
$txt['permissionname_delete_any'] = '任何帖子';
$txt['permissionname_modify'] = '修改帖子';
$txt['permissionhelp_modify'] = '编辑帖子';
$txt['permissionname_modify_own'] = '我的帖子';
$txt['permissionname_modify_any'] = '任何帖子';
$txt['permissionname_report_any'] = '向版主报告帖子';
$txt['permissionhelp_report_any'] = '此权限为每条消息添加一个链接，允许用户向版主报告帖子。 关于汇报， 该板上的所有版主都会收到一封电子邮件，其中包含与报告帖子的链接以及问题的描述(由报告用户提供)。';

$txt['permissiongroup_likes'] = '喜欢的';
$txt['permissionname_likes_like'] = '可以喜欢任何内容';
$txt['permissionhelp_likes_like'] = 'This permission allows a user to like any content. Users aren\'t allowed to like their own content.';

$txt['permissiongroup_mentions'] = '提及内容';
$txt['permissionname_mention'] = '通过 @name 提及其他';
$txt['permissionhelp_mention'] = '此权限允许用户通过@name提及其他用户。 例如，用户在授予此权限时可以使用 @Jack 来提及用户 Jack 。';

$txt['permissiongroup_poll'] = '调查';
$txt['permissionname_poll_view'] = '查看投票';
$txt['permissionhelp_poll_view'] = '此权限允许用户查看民意测验。没有此权限，用户只能查看主题。';
$txt['permissionname_poll_vote'] = '在投票中投票';
$txt['permissionhelp_poll_vote'] = '此权限允许用户投一票。 <br><br><strong>关于访客投票的说明：</strong> SMF 使用 cookie 来尝试阻止访客多次投票。 然而，应当指出，根本无法完全阻止来宾两次投票，因此，结果可能不可靠。 还注意到每次投票必须能够进行客人投票。';
$txt['permissionname_poll_post'] = '后期调查';
$txt['permissionhelp_poll_post'] = '此权限允许用户发布新的民意测验。用户需要获得“发布新主题”的权限。';
$txt['permissionname_poll_add'] = '将投票添加到主题';
$txt['permissionhelp_poll_add'] = '在主题中添加民意测验允许用户在主题创建后添加调查。 此权限需要足够的权限来编辑主题的第一个帖子。';
$txt['permissionname_poll_add_own'] = '自己的主题';
$txt['permissionname_poll_add_any'] = '任何主题';
$txt['permissionname_poll_edit'] = '编辑投票';
$txt['permissionhelp_poll_edit'] = '此权限允许用户编辑投票选项并重置调查。 为了编辑最大投票数和到期时间，用户需要获得“管理板”权限。';
$txt['permissionname_poll_edit_own'] = '自己的调查';
$txt['permissionname_poll_edit_any'] = '任何投票';
$txt['permissionname_poll_lock'] = '锁定调查';
$txt['permissionhelp_poll_lock'] = '锁定投票阻止投票接受更多选票。';
$txt['permissionname_poll_lock_own'] = '自己的调查';
$txt['permissionname_poll_lock_any'] = '任何投票';
$txt['permissionname_poll_remove'] = '删除投票';
$txt['permissionhelp_poll_remove'] = '此权限允许删除投票。';
$txt['permissionname_poll_remove_own'] = '自己的调查';
$txt['permissionname_poll_remove_any'] = '任何投票';

$txt['permissionname_post_draft'] = '保存新帖子草稿';
$txt['permissionhelp_post_draft'] = '此权限允许用户保存帖子草稿，然后才能完成。';
$txt['permissionname_pm_draft'] = '保存个人信息草稿';
$txt['permissionhelp_pm_draft'] = '此权限允许用户保存个人消息草稿，以便他们能够稍后完成。';

$txt['permissiongroup_approval'] = '帖子审核';
$txt['permissionname_approve_posts'] = '批准等待审核的项目';
$txt['permissionhelp_approve_posts'] = '此权限允许用户批准板上所有未经批准的项目。';
$txt['permissionname_post_unapproved_replies'] = '发布对主题的答复，但隐藏直到批准';
$txt['permissionhelp_post_unapproved_replies'] = '此权限允许用户发布对某个主题的回复。在管理员批准之前，回复将不会显示。';
$txt['permissionname_post_unapproved_replies_own'] = '我的主题';
$txt['permissionname_post_unapproved_replies_any'] = '任何主题';
$txt['permissionname_post_unapproved_topics'] = '发布新主题，但隐藏直到批准';
$txt['permissionhelp_post_unapproved_topics'] = '此权限允许用户在显示之前发布一个需要审批的新主题。';
$txt['permissionname_post_unapproved_attachments'] = '发布附件，但隐藏直到批准';
$txt['permissionhelp_post_unapproved_attachments'] = '此权限允许用户将文件附加到他们的帖子。附加的文件在显示给其他用户之前需要批准。';

$txt['permissiongroup_attachment'] = '附件';
$txt['permissionname_view_attachments'] = '查看附件';
$txt['permissionhelp_view_attachments'] = '附件是附加到发布消息的文件。此功能可以在“附件和头像”中启用和配置。 由于无法直接访问附件，您可以保护他们不被没有此权限的用户下载。';
$txt['permissionname_post_attachment'] = '发布附件';
$txt['permissionhelp_post_attachment'] = '附件是附加到已发布消息的文件。一个消息可以包含多个附件。';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = '权限设置';
$txt['groups_manage_permissions'] = '允许管理权限的成员组';
$txt['permission_settings_submit'] = '保存';
$txt['permission_settings_enable_deny'] = '启用此选项以拒绝权限';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = '关闭此选项将更新 \\\'Deny\\\'-permissions to \\\'Disallow\\\'。';
$txt['permission_by_board_desc'] = '您可以在此设置板使用的权限配置文件。您可以从 &quot;编辑配置文件&quot; 菜单创建新的权限配置文件。';
$txt['permission_settings_desc'] = '在这里您可以设置谁有权更改权限，以及权限系统应该是多么复杂。';
$txt['permission_settings_enable_postgroups'] = '启用基于帖子计数组的权限';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Turning off this option will remove permissions currently set to post count based groups.';

$txt['permissions_post_moderation_desc'] = '从这个页面，您可以在经常论坛成员可见之前配置保持用户帖子的能力。 包括哪些组或用户组可以批准。 其职位被批准的用户仍然能够看到他们的帖子以及核准人的答复。 。主持人关于使一个帖子合适的反馈意见。';
$txt['permissions_post_moderation_enable'] = '启用帖子审核';
$txt['permissions_post_moderation_deny_note'] = 'Note that while you have advanced options enabled you cannot apply the &quot;deny&quot; permission from this page. Please edit the permissions directly if you wish to apply a deny permission.';
$txt['permissions_post_moderation_select'] = '选择配置文件';
$txt['permissions_post_moderation_new_topics'] = '新主题';
$txt['permissions_post_moderation_replies_own'] = '自己的回复';
$txt['permissions_post_moderation_replies_any'] = '任何回复';
$txt['permissions_post_moderation_attachments'] = '附件';
$txt['permissions_post_moderation_legend'] = '图例';
$txt['permissions_post_moderation_allow'] = '可以创建';
$txt['permissions_post_moderation_moderate'] = '可以创建但需要批准';
$txt['permissions_post_moderation_disallow'] = '无法创建';
$txt['permissions_post_moderation_group'] = '组别';

$txt['auto_approve_topics'] = '发布新主题，无需批准';
$txt['auto_approve_replies'] = '发布对主题的答复，不需要批准';
$txt['auto_approve_attachments'] = '发布附件，不需要批准';

$txt['permissiongroup_bbc'] = 'BBCode';
$txt['permissionname_bbc'] = 'Use the [%1$s] BBCode';
$txt['permissionhelp_bbc_html'] = 'This permission allows a member to use the [html] BBCode to embed arbitrary HTML in posts, personal messages, etc.<br><br><strong>Embedding arbitrary HTML can break your site and create major security risks. <u>Do not grant this permission to anyone unless you completely trust them not to break your website!</u></strong>';
$txt['permissionnote_bbc_html'] = 'Creates a security risk!';

?>