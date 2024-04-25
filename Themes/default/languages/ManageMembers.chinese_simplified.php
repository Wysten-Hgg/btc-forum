<?php
// Version: 2.1.0; ManageMembers

global $context;

$txt['groups'] = '群组';
$txt['viewing_groups'] = '检视群组';

$txt['membergroups_title'] = '管理群组';
$txt['membergroups_description'] = '同一个群组的会员有类似的权限设定、显示资料和读取权限。而帖子群组是以帖子数来区分的。您可以在会员的帐号设定中指定他的群组。';
$txt['membergroups_modify'] = '修改';

$txt['membergroups_add_group'] = '增加群组';
$txt['membergroups_regular'] = '一般群组';
$txt['membergroups_post'] = '帖子群组';
$txt['membergroups_guests_na'] = 'n/a';

$txt['membergroups_group_name'] = '群组名称';
$txt['membergroups_new_board'] = '可见版块';
$txt['membergroups_new_board_desc'] = '允许这个群组的成员进入的版块。';
$txt['membergroups_new_board_post_groups'] = '<em>注意: 通常帖子群组不需要设定，因为依据一般会员的权限。</em>';
$txt['membergroups_new_as_inherit'] = '继承自';
$txt['membergroups_new_as_type'] = '依照类型';
$txt['membergroups_new_as_copy'] = '按照';
$txt['membergroups_new_copy_none'] = '(没有)';
$txt['membergroups_can_edit_later'] = '您之后还可以编辑。';
$txt['membergroups_can_manage_access'] = '这个组可以看到所有看板，因为他们有权管理看板。';

$txt['membergroups_cannot_delete_paid'] = '这个组不能被删除，它目前正在被以下付费订阅(s)： %1$s';

$txt['membergroups_edit_group'] = '编辑群组';
$txt['membergroups_edit_name'] = '群组名称';
$txt['membergroups_edit_inherit_permissions'] = '继承权限';
$txt['membergroups_edit_inherit_permissions_desc'] = '选择 &quot;不要&quot; 启用群组自己的权限档。';
$txt['membergroups_edit_inherit_permissions_no'] = '不要 - 使用自己的权限';
$txt['membergroups_edit_inherit_permissions_from'] = '继承自';
$txt['membergroups_edit_hidden'] = '能见度';
$txt['membergroups_edit_hidden_no'] = '可见';
$txt['membergroups_edit_hidden_boardindex'] = '可见 - 除了在首页的群组标识';
$txt['membergroups_edit_hidden_all'] = '隐藏';
// Do not use numeric entities in the below string.
$txt['membergroups_edit_hidden_warning'] = '您确定要禁止这个群组成为会员的主要群组吗？\n\n这会让这个群组只能是次要群组, 而且会更新所有&quot;主要&quot;会员的次要群组有它。';
$txt['membergroups_edit_desc'] = '群组描述';
$txt['membergroups_edit_group_type'] = '群组类型';
$txt['membergroups_edit_select_group_type'] = '选择群组类型';
$txt['membergroups_group_type_private'] = '私立 <span class="smalltext">(会员身份必须用指定的)</span>';
$txt['membergroups_group_type_protected'] = '受保护的 <span class="smalltext">(只有管理员可以管理和分配)</span>';
$txt['membergroups_group_type_request'] = '申请 <span class="smalltext">(会员可以申请加入)</span>';
$txt['membergroups_group_type_free'] = '自由 <span class="smalltext">(会员可以自己加入或退出)</span>';
$txt['membergroups_group_type_post'] = '帖子 <span class="smalltext">(会员身份根据帖子数)</span>';
$txt['membergroups_min_posts'] = '要求的帖子数';
$txt['membergroups_online_color'] = '线上名单上的颜色';
$txt['membergroups_icon_count'] = '图标图像数量';
$txt['membergroups_icon_image'] = '图标图像文件名';
$txt['membergroups_icon_image_note'] = 'You can upload custom images to the forum\'s default theme directory to be able to select them here. Different images can be used in different themes, just give them the same name.';
$txt['membergroups_icon_image_size'] = 'Max size allowed 128x32px';
$txt['membergroups_max_messages'] = '简讯容量';
$txt['membergroups_max_messages_note'] = '0=不限制';
$txt['membergroups_tfa_force'] = '强制此成员组的双重身份验证(2FA)';
$txt['membergroups_tfa_force_note'] = '一定要在您激活之前警告您的用户 ！';
$txt['membergroups_edit_save'] = '保存';
$txt['membergroups_delete'] = '删除';
$txt['membergroups_confirm_delete'] = '您确定要删除这个群组?!';
$txt['membergroups_confirm_delete_mod'] = '此组被分配给管理一个或多个看板。您确定要删除它吗？';
$txt['membergroups_swap_mod'] = '此组被分配给管理一个或多个看板。 将其改为一个帖子组将导致该组不再担任这些板的主持人。';

$txt['membergroups_members_title'] = '检视群组';
$txt['membergroups_members_group_members'] = '群组成员';
$txt['membergroups_members_no_members'] = '这个群组没有任何成员';
$txt['membergroups_members_add_title'] = '新增会员到这个群组';
$txt['membergroups_members_add_desc'] = '要加入的会员名称';
$txt['membergroups_members_add'] = '增加会员';
$txt['membergroups_members_remove'] = '移除会员';
$txt['membergroups_members_last_active'] = '上次登录';
$txt['membergroups_members_additional_only'] = '只加为次要群组。';
$txt['membergroups_members_group_moderators'] = '群组组长';
$txt['membergroups_members_description'] = '描述';
// Use javascript escaping in the below.
$txt['membergroups_members_deadmin_confirm'] = '您确定要将自己从管理员群组中移除吗？';

$txt['membergroups_postgroups'] = '帖子群组';
$txt['membergroups_settings'] = '群组设定';
$txt['groups_manage_membergroups'] = '允许变更群组的群组';
$txt['membergroups_select_permission_type'] = '选择权限档';
$txt['membergroups_images_url'] = '{theme URL}/images/';
$txt['membergroups_select_visible_boards'] = '显示版块';
$txt['membergroups_members_top'] = '会员';
$txt['membergroups_name'] = '名称';
$txt['membergroups_icons'] = '图标';

$txt['admin_browse_approve'] = '等待审核的帐号';
$txt['admin_browse_approve_desc'] = '这里可以让您管理等待审核的会员帐号。';
$txt['admin_browse_activate'] = '等待启用的会员';
$txt['admin_browse_activate_desc'] = '这个页面会列出全部尚未启用帐号的会员。';
$txt['admin_browse_awaiting_approval'] = '等待审核 (%1$d)';
$txt['admin_browse_awaiting_activate'] = '等待启用 (%1$d)';

$txt['admin_browse_username'] = '帐号';
$txt['admin_browse_email'] = 'Email';
$txt['admin_browse_ip'] = 'IP';
$txt['admin_browse_registered'] = '注册';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = '选择进行';
$txt['admin_browse_no_members_approval'] = '没有等待审核的会员。';
$txt['admin_browse_no_members_activate'] = '没有尚未启用的会员。';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = '所有选择的会员？';
$txt['admin_browse_outstanding_warn'] = '所有影响的会员？';
$txt['admin_browse_w_approve'] = '核淮';
$txt['admin_browse_w_activate'] = '启用';
$txt['admin_browse_w_delete'] = '删除';
$txt['admin_browse_w_reject'] = '拒绝';
$txt['admin_browse_w_remind'] = '提醒';
$txt['admin_browse_w_approve_deletion'] = '核准 (删除帐号)';
$txt['admin_browse_w_email'] = '和传送 Email';
$txt['admin_browse_no_email'] = '(no email)';
$txt['admin_browse_w_approve_require_activate'] = '核准和需要启用帐号';

$txt['admin_browse_filter_by'] = '过滤';
$txt['admin_browse_filter_show'] = '显示';
$txt['admin_browse_filter_type_0'] = '尚未启用的新帐号';
$txt['admin_browse_filter_type_2'] = '尚未启用的 Email 变更';
$txt['admin_browse_filter_type_3'] = '尚未审核的新帐号';
$txt['admin_browse_filter_type_4'] = '尚未审核的删除帐号';
$txt['admin_browse_filter_type_5'] = 'Unapproved underage accounts';

$txt['admin_browse_outstanding'] = '未完成的会员';
$txt['admin_browse_outstanding_days_1'] = '会员的注册日期在';
$txt['admin_browse_outstanding_days_2'] = '天以前';
$txt['admin_browse_outstanding_perform'] = '执行下面动作';
$txt['admin_browse_outstanding_go'] = '执行动作';

$txt['check_for_duplicate'] = '检查重复';
$txt['dont_check_for_duplicate'] = '不要检查重复';
$txt['duplicates'] = '重复';

$txt['not_activated'] = '尚未启用';

?>