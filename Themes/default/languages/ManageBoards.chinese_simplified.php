<?php
// Version: 2.1.0; ManageBoards

$txt['boards_and_cats'] = '管理版块与类别';
$txt['order'] = '顺序';
$txt['full_name'] = '版块名称';
$txt['name_on_display'] = '这个名称会显示出来。';
$txt['boards_and_cats_desc'] = '在这里编辑类别和版块。若是有多位版主, 请以 <em>"版主帐号1", "版主帐号2"</em> 的格式排列。(请输入帐号, 不是昵称！)<br />增加新的版块, 请点击"新增版块"按钮。修改为子版块, 请把版块的顺序选择"母版块为..."。';
$txt['parent_members_only'] = '一般会员';
$txt['parent_guests_only'] = '访客';
$txt['cat_delete_confirm'] = 'Do you really want to delete this category?';
$txt['board_delete_confirm'] = 'Do you really want to delete this board?';

$txt['cat_edit'] = 'Edit Category';
$txt['collapse_enable'] = '收合';
$txt['collapse_desc'] = '允许使用者将这个类别的版块隐藏吗？';
$txt['cat_modify'] = '(modify)';

$txt['mboards_order_after'] = '之后 ';
$txt['mboards_order_inside'] = '在 ';
$txt['mboards_order_first'] = '第一位';

$txt['mboards_new_board'] = '新增版块';
$txt['mboards_new_cat_name'] = '新类别';
$txt['mboards_add_cat_button'] = '新增类别';
$txt['mboards_new_board_name'] = '新版块';

$txt['mboards_name'] = '名称';
$txt['mboards_modify'] = '修改';
$txt['mboards_permissions'] = '权限';
// Don't use entities in the below string.
$txt['mboards_permissions_confirm'] = '您确定要把这个版块转换成区域权限吗？';

$txt['mboards_delete_cat'] = '删除类别';
$txt['mboards_delete_board'] = '删除版块';

$txt['mboards_delete_cat_contains'] = '删除这个类别, 并把类别里的所有版块, 所有主题, 帖子和附件都删除';
$txt['mboards_delete_option1'] = '删除这个类别和类别里所有的版块。';
$txt['mboards_delete_option2'] = '删除这个类别, 并移动类别里所有的版块到';
$txt['mboards_delete_board_contains'] = '删除这个版块, 并将版块里所有的子版块、帖子和附件都删除';
$txt['mboards_delete_board_option1'] = '删除版块, 然后移动子版块到类别里。';
$txt['mboards_delete_board_option2'] = '删除版块, 然后移动子版块到';
$txt['mboards_delete_what_do'] = '请选择对这些版块进行什么动作';
$txt['mboards_delete_confirm'] = '确定';
$txt['mboards_delete_cancel'] = '取消';

$txt['mboards_category'] = '类别';
$txt['mboards_description'] = '简介';
$txt['mboards_description_desc'] = '这个版块的简短描述。';
$txt['mboards_cat_description_desc'] = 'A short description of your category. HTML is not allowed, you can use the following BBC tags: {allowed_tags}';
$txt['mboards_groups'] = '允许群组';
$txt['mboards_groups_desc'] = '允许进入这个版块的群组。<br /><em>注意: 只要是允许的群组成员, 不管加入多少群组, 都可以进入这个版块。</em>';
$txt['mboards_groups_regular_members'] = '这个群组包含没有主要群组的会员';
$txt['mboards_groups_post_group'] = '这个群组是帖子群组。';
$txt['mboards_moderators'] = '版主';
$txt['mboards_moderators_desc'] = '这个版块的版主。注意: 管理员管理这个版块, 是不需要加入版主名单。 ';
$txt['mboards_moderator_groups'] = '版主组';
$txt['mboards_moderator_groups_desc'] = '其成员在此看板上拥有管理权限的小组。请注意，这仅限于非基于帖子而非“隐藏”的小组。';
$txt['mboards_count_posts'] = '计算帖子';
$txt['mboards_count_posts_desc'] = '在这个看版发表/回覆帖子会增加帖子数。';
$txt['mboards_unchanged'] = '没有变更';
$txt['mboards_theme'] = '版块布景';
$txt['mboards_theme_desc'] = '可以指定这个版块使用固定的布景。';
$txt['mboards_theme_default'] = '(使用默认布景。)';
$txt['mboards_override_theme'] = '忽视会员使用的布景';
$txt['mboards_override_theme_desc'] = '使用版块布景, 即使会员的选择其他布景。';

$txt['mboards_redirect'] = '转址';
$txt['mboards_redirect_desc'] = '启用这个选项, 任何人点击这个版块之后, 会转址到指定的网址。';
$txt['mboards_redirect_url'] = '转址到';
$txt['mboards_redirect_url_desc'] = '例如: &quot;http://www.simplemachines.org&quot;。';
$txt['mboards_redirect_reset'] = '重设点击次数';
$txt['mboards_redirect_reset_desc'] = '选择这个, 会把这版块的点击次数设为 0';
$txt['mboards_current_redirects'] = '目前: %1$s';

$txt['mboards_order_before'] = '之前';
$txt['mboards_order_child_of'] = '母版块为';
$txt['mboards_order_in_category'] = '于类别里';
$txt['mboards_current_position'] = '目前位置';
$txt['no_valid_parent'] = '版块 %1$s 目前没有母版块。请使用搜寻与修复功能修复这个错误。';

$txt['mboards_recycle_disabled_delete'] = '注意: 您在删除这个版块之前, 必须选择另一个版块为帖子回收桶或是停用帖子回收功能。';

$txt['mboards_settings_desc'] = '编辑版块与类别的设定。';
$txt['groups_manage_boards'] = '可以管理版块和类别的群组';
$txt['mboards_settings_submit'] = '保存';
$txt['recycle_enable'] = '启用帖子回收桶';
$txt['recycle_board'] = '帖子回收桶';
$txt['redirect_board_desc'] = '用户访问时重定向的版面';
$txt['recycle_board_unselected_notice'] = '您已经启用了帖子回收的功能, 但未指定放置帖子回收的版块。这功能将不会启用, 直到您指定特定的版块为止。';
$txt['boardindex_max_depth'] = 'Maximum depth of sub-boards to check for new posts, etc.';
$txt['countChildPosts'] = '子版块的帖子数纳入母版块的帖子数';
$txt['allow_ignore_boards'] = '允许版块被忽视';
$txt['deny_boards_access'] = '启用基于会员组拒绝看板访问的选项';
$txt['boardsaccess_option_desc'] = '对于每个权限，您可以选择 \'allow\' (A)，\'Disallow\' (X)，或 <span class="alert">\'Deny\' (D)</span>。<br><br>如果您拒绝访问，该组中的任何成员 (包括版主) 将被拒绝访问。<br>出于这个原因，你应该谨慎地拒绝，只有在 <strong>必要的</strong>的情况下才能拒绝；而另一方面，除非另外给予，否则不允许否认。';

$txt['mboards_select_destination'] = '选择版块 \'<strong>%1$s</strong>\' 移动的目的地';
$txt['mboards_cancel_moving'] = '取消移动';
$txt['mboards_move'] = '移动';

$txt['mboards_no_cats'] = '目前没有设定类别和版块。';

?>