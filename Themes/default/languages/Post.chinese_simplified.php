<?php
// Version: 2.1.4; Post

global $context;

$txt['post_reply'] = '回覆帖子';
$txt['message_icon'] = '帖子图示';
$txt['subject_not_filled'] = '帖子没有标题。';
$txt['message_body_not_filled'] = '帖子没有内容。';
// Use numeric entities in the below string.
$txt['add_bbc'] = '加入 BB码';

$txt['disable_smileys'] = '停用表情符号';
$txt['dont_use_smileys'] = '不使用表情符号';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_on'] = '发表时间';
$txt['standard'] = '标准';
$txt['thumbs_up'] = '推';
$txt['thumbs_down'] = '嘘';
$txt['exclamation_point'] = 'Exclamation point';
$txt['question_mark'] = '问号';
$txt['icon_poll'] = 'Poll';
$txt['lamp'] = '灯泡';
$txt['add_smileys'] = '加入表情符号';
$txt['topic_notify_no'] = '没有订阅任何帖子。';
// post_too_long seems unused (duplicate in Errors: error_post_too_long
$txt['post_too_long'] = '您的帖子内容过长, 请稍微减少帖子字数。';

// Use numeric entities in the below five strings.
$txt['notifyUnsubscribe'] = '请点我来取消订阅这篇帖子的回覆通知';

$txt['lock_after_post'] = '发表后封锁帖子';
$txt['notify_replies'] = '回覆通知';
$txt['lock_topic'] = '封锁主题';
$txt['shortcuts'] = 'Shortcuts: ALT+S post or ALT+P preview';
$txt['shortcuts_drafts'] = 'Shortcuts: ALT+S post, ALT+P preview, ALT+D save draft';
$txt['shortcuts_firefox'] = 'Shortcuts: SHIFT+ALT+S post, SHIFT+ALT+P preview';
$txt['shortcuts_drafts_firefox'] = 'Shortcuts: SHIFT+ALT+S post, SHIFT+ALT+P preview, SHIFT+ALT+D save draft';
$txt['shortcuts_mac'] = 'Shortcuts: ⌃⌥S post or ⌃⌥P preview';
$txt['shortcuts_drafts_mac'] = 'Shortcuts: ⌃⌥S post, ⌃⌥P preview, ⌃⌥D save draft';
$txt['option'] = '选项';
$txt['reset_votes'] = '重新计算票数';
$txt['reset_votes_check'] = '如果您想要让票数归零, 请选择此处。';
$txt['votes'] = '票';
$txt['attach'] = '上传附件';
$txt['attachment'] = 'Attachment';
$txt['attachments'] = 'Attachments';
$txt['clean_attach'] = 'Clear attachments';
$txt['attached'] = '已经上传';
$txt['allowed_types'] = '允许的档案类型';
$txt['attach_add'] = 'Add files';
$txt['attach_drop_zone'] = 'Click or drag files here to attach them.';
$txt['attach_drop_unlimited'] = 'unlimited';
$txt['attach_drop_zone_no'] = 'Your browser does not support drag and drop file uploads';
$txt['cant_upload_type'] = '您无法上传这种档案, 我们允许的档案类型只有';
$txt['uncheck_unwatchd_attach'] = '请将要删除的附件取消勾选';
$txt['restricted_filename'] = '这个档名无法使用, 请重新命名。';
$txt['topic_locked_no_reply'] = '警告: 本主题目前是封锁状态!<br />只有版主及站长可以回覆。';
$txt['awaiting_approval'] = '等待审核';
$txt['attachment_requires_approval'] = '注意: 附件需要版主和管理员审核, 才会显示';
$txt['error_temp_attachments'] = 'There are attachments found, which you have attached before but not posted. These attachments are now attached to this post. If you do not want to include them in this post, you can remove them <a href="#postAttachment">here</a>.';
// Use numeric entities in the below string.
$txt['js_post_will_require_approval'] = '注意: 这篇帖子需要版主和管理员审核, 才会显示';

$txt['enter_comment'] = '请输入意见';
// Use numeric entities in the below two strings.
$txt['reported_post'] = '检举的帖子';
$txt['reported_to_mod_by'] = '作者';
$txt['report_submit'] = 'Submit';
// Use numeric entities in the below four strings.
$txt['report_following_post'] = '帖子 "%1$s", 作者是';
$txt['reported_by'] = '已经被会员';
$txt['board_moderate'] = '检举, 请前往查看';
$txt['report_comment'] = '检举人留下意见';

// Use numeric entities in the below three strings.
$txt['report_profile'] = 'Report profile of \'%1$s\'';
$txt['reported_profile'] = 'Reported user';
$txt['report_following_user'] = 'The profile of "%1$s" at %2$s';

$txt['attach_restrict_attachmentPostLimit'] = 'maximum total size %1$s KB';
$txt['attach_restrict_attachmentPostLimit_MB'] = 'maximum total size %1$s MB';
$txt['attach_restrict_attachmentSizeLimit'] = 'maximum individual size %1$s KB';
$txt['attach_restrict_attachmentSizeLimit_MB'] = 'maximum individual size %1$s MB';
$txt['attach_restrict_attachmentNumPerPostLimit'] = '每篇帖子 %1$d';
$txt['attach_restrictions'] = '限制:';

$txt['post_additionalopt_attach'] = 'Attachments and other options';
$txt['post_additionalopt'] = '进阶选项(包含帖子状态和附件)...';
$txt['sticky_after_posting'] = 'Sticky this topic';
$txt['move_after_posting'] = 'Move this topic';
$txt['back_to_topic'] = 'Return to this topic';
$txt['approve_this_post'] = '核淮这篇帖子';

$txt['retrieving_quote'] = '取得引言中...';

$txt['post_visual_verification_label'] = '验证码';
$txt['post_visual_verification_desc'] = '请输入图片中的代码';

$txt['poll_options'] = '投票设定';
$txt['poll_run'] = '投票天数设定';
$txt['poll_run_limit'] = '(空白=不限制。)';
$txt['poll_results_visibility'] = '检视投票结果';
$txt['poll_results_anyone'] = '所有人都可以检视投票结果。';
$txt['poll_results_voted'] = '投票过后才能检视投票结果。';
$txt['poll_results_after'] = '投票截止后才显示结果';
$txt['poll_max_votes'] = '每人最多票数';
$txt['poll_do_change_vote'] = '允许会员变更投票';
$txt['poll_too_many_votes'] = '你选择太多选项。这个投票只能投 %1$s 个。';
$txt['poll_add_option'] = '增加选项';
$txt['poll_guest_vote'] = '允许访客投票';

$txt['spellcheck_done'] = '拼字检查完成。';
$txt['spellcheck_change_to'] = '变为: ';
$txt['spellcheck_suggest'] = '建议: ';
$txt['spellcheck_change'] = '变更';
$txt['spellcheck_change_all'] = '变更全部';
$txt['spellcheck_ignore'] = '略过';
$txt['spellcheck_ignore_all'] = '略过全部';

$txt['more_attachments'] = '增加附件';
// Don't use entities in the below string.
$txt['more_attachments_error'] = '抱歉, 您无法上传新的附件。';

$txt['more_smileys'] = '更多表情';
$txt['more_smileys_title'] = '附加表情符号';
$txt['more_smileys_pick'] = '点选表情';
$txt['more_smileys_close_window'] = '关闭视窗';

$txt['error_new_reply'] = '注意 - 在您回覆帖子的时候有 1 篇新回覆。您可能需要阅读和修改帖子。';
$txt['error_new_replies'] = '注意 - 在您回覆帖子的时候有 %1$d 篇新回覆。您可能需要阅读和修改帖子。';
$txt['error_new_reply_reading'] = '注意 - 在您阅读帖子的时候有 1 篇新回覆';
$txt['error_new_replies_reading'] = '注意 - 在您阅读帖子的时候有 %1$d 篇新回覆';

$txt['error_topic_locked'] = 'Warning - while you were typing the topic was locked. Please check the "Lock this topic" box under "Attachments and other options" below if you do not wish to undo this action.';
$txt['error_topic_unlocked'] = 'Warning - while you were typing the topic was unlocked. Please uncheck the "Lock this topic" box under "Attachments and other options" below if you do not wish to undo this action.';
$txt['error_topic_stickied'] = 'Warning - while you were typing the topic was stickied. Please check the "Sticky this topic" box under "Attachments and other options" below if you do not wish to undo this action.';
$txt['error_topic_unstickied'] = 'Warning - while you were typing the topic was unstickied. Please uncheck the "Sticky this topic" box under "Attachments and Other Options" below if you do not wish to undo this action.';

$txt['announce_this_topic'] = '公告这篇主题的给会员: ';
$txt['announce_title'] = '传送论坛公告';
$txt['announce_desc'] = '这个表单可以让您选择要传送公告的会员群组';
$txt['announce_sending'] = '传送公告中';
$txt['announce_done'] = '完成';
$txt['announce_continue'] = '继续';
$txt['announce_topic'] = 'Announce topic';
$txt['announce_regular_members'] = '一般会员';

$txt['digest_subject_daily'] = '每天精华';
$txt['digest_subject_weekly'] = '每周精华';
$txt['digest_intro_daily'] = '下面是您在 %1$s 订阅版块和主题的今日摘要。请点击以下连结可以取消订阅。';
$txt['digest_intro_weekly'] = '下面是本周您在 %1$s 订阅版块和帖子的摘要。如果要取消订阅, 请点击下面的连结。';
$txt['digest_new_topics'] = '以下是新发起的主题';
$txt['digest_new_topics_line'] = '"%1$s" 在 "%2$s"';
$txt['digest_new_replies'] = '以下是有回覆的主题';
$txt['digest_new_replies_one'] = '1 篇回覆在 "%1$s"';
$txt['digest_new_replies_many'] = '%1$d 篇回覆在 "%2$s"';
$txt['digest_mod_actions'] = '以下是采取了的管理动作';
$txt['digest_mod_act_sticky'] = '置顶 "%1$s"';
$txt['digest_mod_act_lock'] = '封锁 "%1$s"';
$txt['digest_mod_act_unlock'] = '解锁 "%1$s"';
$txt['digest_mod_act_remove'] = '移除 "%1$s"';
$txt['digest_mod_act_move'] = '搬移 "%1$s"';
$txt['digest_mod_act_merge'] = '合并 "%1$s"';
$txt['digest_mod_act_split'] = '分拆 "%1$s"';

$txt['attach_error_title'] = 'Error uploading attachments.';
$txt['attach_warning'] = 'There was a problem during the uploading of <strong>%1$s</strong>.';
$txt['attach_check_nag'] = 'Unable to continue due to incomplete data (%1$s).';
$txt['attach_max_total_file_size'] = 'Sorry, you are out of attachment space. The total attachment size allowed per post is %1$s KB. Space remaining is %2$s KB.';
$txt['attach_max_total_file_size_current'] = 'Sorry, you are out of attachment space. The current total attachment size allowed per post is {currentTotal} KB. The total amount of the selected files is {currentRemain} KB. Please delete one or more attachments.';
$txt['attach_max_size_progress'] = 'The current total attachment size allowed per post is {currentTotal} KB. The total amount of the selected files is {currentRemain} KB.';
$txt['attach_folder_warning'] = 'The attachments directory can not be located. Please notify an administrator of this problem.';
$txt['attach_folder_admin_warning'] = 'The path to the attachments directory (%1$s) is incorrect. Please correct it in the attachment settings area of your admin panel.';
$txt['attach_limit_nag'] = 'You have reached the maximum number of attachments allowed per post.';
$txt['attach_no_upload'] = 'There was a problem and your attachments could not be uploaded';
$txt['attach_remaining'] = '<span class="attach_remaining">%1$d</span> remaining';
$txt['attach_available'] = '%1$s KB available';
$txt['attach_kb'] = ' (%1$s KB)';
$txt['attach_0_byte_file'] = 'The file appears to be empty. Please contact your forum administrator if this continues to be a problem';
$txt['attached_files_in_session'] = 'The above underlined file(s) have been uploaded but will not be attached to this post until it is submitted.';
$txt['attached_file_uploaded'] = 'Attachment successfully uploaded!';
$txt['attached_file_delete'] = 'Delete';
$txt['attached_file_cannot'] = 'You cannot upload attachments';
$txt['attached_file_deleted'] = 'The attachment was successfully deleted.';
$txt['attached_file_deleted_error'] = 'There was an error while performing the deletion.';
$txt['attached_insert_bbc'] = 'Insert';
$txt['attached_cancel_all'] = 'Cancel all';
$txt['attached_upload_all'] = 'Upload all';
$txt['attachments_left'] = 'There are a few attachments left, please upload them or cancel them before posting.';
$txt['attached_insert_width'] = 'Insert width (px):';
$txt['attached_insert_height'] = 'Insert height (px):';

$txt['attach_php_error'] = 'Due to an error, your attachment could not be uploaded. Please contact the forum administrator if this problem continues.';
$txt['php_upload_error_1'] = 'The uploaded file exceeds the upload_max_filesize directive in php.ini. Please contact your host if you are unable to correct this issue.';
$txt['php_upload_error_3'] = 'The uploaded file was only partially uploaded. This is a PHP related error. Please contact your host if this problem continues.';
$txt['php_upload_error_4'] = 'No file was uploaded. This is a PHP related error. Please contact your host if this problem continues.';
$txt['php_upload_error_6'] = 'Unable to save. Missing a temporary directory. Please contact your host if you are unable to correct this problem.';
$txt['php_upload_error_7'] = 'Failed to write file to disk. This is a PHP related error. Please contact your host if this problem continues.';
$txt['php_upload_error_8'] = 'A PHP extension stopped the file upload. This is a PHP related error. Please contact your host if this problem continues.';
$txt['error_temp_attachments_new'] = 'There are attachments which you had previously attached but not posted. These attachments are still attached to this post. This post does need to be submitted before these attachments are either saved or removed. You can do that <a href="#postAttachment">here</a>';
$txt['error_temp_attachments_found'] = 'The following attachments were found which you had previously attached to another post but not posted. It is advisable that you do not post until these are either removed or that post has been submitted.<br>Click <a href="%1$s">here</a> to remove those attachments. Or <a href="%2$s">here</a> to return to that post.%3$s';
$txt['error_temp_attachments_lost'] = 'The following attachments were found which you had previously attached to another post but not posted. It is advisable that you do not upload any more attachments until these are removed or that post has been submitted.<br>Click <a href="%1$s">here</a> to remove these attachments.%2$s';
$txt['error_temp_attachments_gone'] = 'Those attachments have now been removed and you have been returned to the page you were previously on';
$txt['error_temp_attachments_flushed'] = 'Please note that any files which had been previously attached but not posted have now been removed.';
$txt['error_cannot_post_attachment'] = 'You don\'t have permission to post attachments in %1$s. They have been removed.';
$txt['error_topic_already_announced'] = 'Please note that this topic has already been announced.';

$txt['cant_access_upload_path'] = 'Cannot access attachments upload path!';
$txt['file_too_big'] = 'Your file is too large. The maximum attachment size allowed is %1$s KB.';
$txt['attach_timeout'] = 'Your attachment couldn\'t be saved. This might happen because it took too long to upload or the file is bigger than the server will allow.<br><br>Please consult your server administrator for more information.';
$txt['bad_attachment'] = 'Your attachment has failed security checks and cannot be uploaded. Please consult the forum administrator.';
$txt['ran_out_of_space'] = 'The upload directory is full. Please contact an administrator about this problem.';
$txt['attachments_no_write'] = 'The attachments upload directory is not writable. Your attachment cannot be saved.';
$txt['avatars_no_write'] = 'The avatars upload directory is not writable. Your avatar cannot be saved.';
$txt['attachments_no_create'] = 'Unable to create a new attachment directory. Your attachment or avatar cannot be saved.';
$txt['attachments_limit_per_post'] = 'You may not upload more than %1$d attachments per post';

$txt['approval_status'] = 'Approval status';
$txt['approval_status_1'] = 'Approved';
$txt['approval_status_0'] = 'Awaiting approval';

?>