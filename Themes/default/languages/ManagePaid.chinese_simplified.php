<?php
// Version: 2.1.0; ManagePaid

global $boardurl;

// Some payment gateways need language specific information.
$txt['lang_paypal'] = '美国';

// Symbols.
$txt['usd_symbol'] = '$%1.2f';
$txt['eur_symbol'] = '&euro;%1.2f';
$txt['gbp_symbol'] = '&pound;%1.2f';
$txt['cad_symbol'] = 'C$%1.2f';
$txt['aud_symbol'] = 'A$%1.2f';

$txt['usd'] = '美元 ($)';
$txt['eur'] = 'EUR (&euro;)';
$txt['gbp'] = '英镑 (&pound;)';
$txt['cad'] = 'CAD (C$)';
$txt['aud'] = 'AUD (A$)';
$txt['other'] = '其它';

$txt['paid_username'] = '用户名';

$txt['paid_subscriptions_desc'] = '您可以从本节添加、删除和编辑您论坛的付费订阅方法。';
$txt['paid_subs_settings'] = '设定';
$txt['paid_subs_settings_desc'] = '从这里您可以编辑您的用户可用的支付方法。';
$txt['paid_subs_view'] = '检视 Subscriptions';
$txt['paid_subs_view_desc'] = '您可以从本节查看您所有可用的订阅。';

// Setting type strings.
$txt['paid_enabled'] = '启用付费订购';
$txt['paid_enabled_desc'] = 'This must be checked the paid subscriptions to be used on the forum.';
$txt['paid_email'] = '传送 Email 通知';
$txt['paid_email_desc'] = '当订阅自动改变时通知管理员。';
$txt['paid_email_to'] = 'Email 通信';
$txt['paid_email_to_desc'] = '以逗号分隔的 Email 列表去通知管理员以外的人。';
$txt['paidsubs_test'] = '启用测试模式';
$txt['paidsubs_test_desc'] = '这就使付费订阅到 &quot;测试&quot; 模式，这将尽可能使用沙盒付款方式在 PayPal 中，Authorize 中。 等。除非您知道自己在做什么，否则不启用！';
$txt['paidsubs_test_confirm'] = '您确定要启用测试模式？';
$txt['paid_email_no'] = '不要传送任何通知';
$txt['paid_email_error'] = '订阅失败时通知';
$txt['paid_email_all'] = '通知所有自动订阅更改';
$txt['paid_currency'] = '选择货币';
$txt['paid_currency_code'] = '货币代码';
$txt['paid_currency_code_desc'] = '付款商人使用的代码';
$txt['paid_currency_symbol'] = '付款方式使用的符号';
$txt['paid_currency_symbol_desc'] = 'Use \'%1.2f\' to specify where number goes. For example $%1.2f, %1.2f EUR etc';
$txt['paid_settings_save'] = '储存';

$txt['paypal_email'] = 'Paypal Email';
$txt['paypal_email_desc'] = '如果不要使用 paypal 请留空白。';
$txt['paypal_additional_emails'] = 'Primary PayPal email address';
$txt['paypal_additional_emails_desc'] = 'If different (for business account)';
$txt['paypal_sandbox_email'] = 'PayPal sandbox email address';
$txt['paypal_sandbox_email_desc'] = '如果禁用测试模式或不使用PayPal，可以留空。';

// argument(s): $boardurl
$txt['paid_note'] = '<strong class="alert">Note:</strong><br>
SMF currently supports <strong>PayPal</strong> as the installed payment method.
<ul class="bbc_list">
	<li>It is not necessary to enable IPN in your PayPal account; but if you do, the forum will receive payment notifications for all payments made to your account, and this will generate Paid Subscriptions errors for payments that are not subscription related.</li>
	<li>You must have a business or premier account to use recurring payments.</li>
	<li>You must provide your primary PayPal email address for validation purposes.</li>
</ul>
<br>
If you install a different payment gateway, you may need to set up a return URL for payment notification. For all payment types, this return URL should be set as:
<br><br>
<ul class="bbc_list">
	<li><strong>%1$s/subscriptions.php</strong></li>
</ul>
<br>
You can normally find it in your customer panels, usually under the term &quot;Return URL&quot; or &quot;Callback URL&quot;.';

// View subscription strings.
$txt['paid_name'] = '名称';
$txt['paid_status'] = '状态';
$txt['paid_cost'] = '价格';
$txt['paid_duration'] = '期限';
$txt['paid_active'] = '已启用';
$txt['paid_pending'] = '待付款';
$txt['paid_finished'] = '已完成';
$txt['paid_total'] = '总计';
$txt['paid_is_active'] = '已激活';
$txt['paid_none_yet'] = '您尚未设置任何订阅。';
$txt['paid_payments_pending'] = '待付款';
$txt['paid_order'] = '订购';

$txt['yes'] = '否';
$txt['no'] = '否';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = '新增 Subscription';
$txt['paid_edit_subscription'] = '编辑 Subscription';
$txt['paid_delete_subscription'] = '删除 Subscription';

$txt['paid_mod_name'] = '订阅名称';
$txt['paid_mod_desc'] = '描述';
$txt['paid_mod_reminder'] = '传送 Email 提醒';
$txt['paid_mod_reminder_desc'] = 'Days before subscription is due to expire to send reminder. (In days, 0 to disable)';
$txt['paid_mod_email'] = '完成后发送邮件';
$txt['paid_mod_email_desc'] = 'Where {NAME} is members name; {FORUM} is community name. Email subject should be on first line. Blank for no email notification.';
$txt['paid_mod_cost_usd'] = '费用 (美元)';
$txt['paid_mod_cost_eur'] = 'Cost (EUR)';
$txt['paid_mod_cost_gbp'] = '成本 (GBP)';
$txt['paid_mod_cost_cad'] = '成本 (CAD)';
$txt['paid_mod_cost_aud'] = '成本 (AUD)';
$txt['paid_mod_cost_blank'] = '留空不提供这种货币。';
$txt['paid_mod_span'] = '订阅长度';
$txt['paid_mod_span_days'] = '天';
$txt['paid_mod_span_weeks'] = '周';
$txt['paid_mod_span_months'] = '月';
$txt['paid_mod_span_years'] = '年';
$txt['paid_mod_active'] = '已启用';
$txt['paid_mod_active_desc'] = '订阅必须是活跃的新会员才能加入。';
$txt['paid_mod_prim_group'] = '订阅后的主要组';
$txt['paid_mod_prim_group_desc'] = '当用户订阅时的主要群组。';
$txt['paid_mod_add_groups'] = '订阅后添加组';
$txt['paid_mod_add_groups_desc'] = '订阅后添加用户到其他群组。';
$txt['paid_mod_no_group'] = '不要更改';
$txt['paid_mod_edit_note'] = '注意，因为该组已有订阅者，无法更改群组设置！';
$txt['paid_mod_delete_warning'] = '<strong>WARNING</strong><br /><br />If you delete this subscription all users currently subscribed will lose any access rights granted by the subscription. Unless you are sure you want to do this it is recommended that you simply deactivate a subscription rather than delete it.<br />';
$txt['paid_mod_repeatable'] = '允许用户自动续订此订阅';
$txt['paid_mod_fixed_price'] = '固定价格和周期的订阅';
$txt['paid_mod_flexible_price'] = '订购时的订阅价格变化';
$txt['paid_mod_price_breakdown'] = '弹性价格明细表';
$txt['paid_mod_price_breakdown_desc'] = 'Define here how much the subscription should cost dependant on the period they subscribe for. For example, it could cost 12USD to subscribe for a month, but only 100USD for a year. If you don\'t want to define a price for a particular period of time leave it blank.';
$txt['flexible'] = '弹性的';

$txt['paid_per_day'] = 'Price Per Day';
$txt['paid_per_week'] = 'Price Per Week';
$txt['paid_per_month'] = 'Price Per Month';
$txt['paid_per_year'] = 'Price Per Year';
$txt['day'] = '日';
$txt['week'] = '周';
$txt['month'] = '月';
$txt['year'] = '年份';

// View subscribed users.
$txt['viewing_users_subscribed'] = '查看用户';
$txt['view_users_subscribed'] = 'Viewing users subscribed to: &quot;%1$s&quot;';
$txt['no_subscribers'] = 'There are currently no subscribers to this subscription!';
$txt['add_subscriber'] = 'Add New Subscriber';
$txt['edit_subscriber'] = '编辑订阅者';
$txt['delete_selected'] = '删除选中的';
$txt['complete_selected'] = 'Complete Selected';

// @todo These strings are used in conjunction with JavaScript. Use numeric entities.
$txt['delete_are_sure'] = '您确定要删除所有选择的订购记录吗？';
$txt['complete_are_sure'] = '您确定要完成选定的订阅吗？';

$txt['start_date'] = '开始日期';
$txt['end_date'] = '结束日期';
$txt['start_date_and_time'] = '开始日期和时间';
$txt['end_date_and_time'] = '结束日期和时间';
$txt['edit'] = '编辑';
$txt['one_username'] = '请只输入一个用户名。';
$txt['minute'] = '分钟';
$txt['error_member_not_found'] = '找不到输入的会员';
$txt['member_already_subscribed'] = '该成员已经订阅了此订阅。请编辑他们现有的订阅。';
$txt['search_sub'] = '查找用户';

// Make payment.
$txt['paid_confirm_payment'] = '确认付款';
$txt['paid_confirm_desc'] = 'To continue through to payment please check the details below and hit &quot;Order&quot;';
$txt['paypal'] = 'Paypal';
$txt['paid_confirm_paypal'] = 'To pay using <a href="http://www.paypal.com">PayPal</a> please click the button below. You will be directed to the PayPal site for payment.';
$txt['paid_paypal_order'] = '使用 PayPal 订单';
$txt['paid_done'] = '支付完成';
$txt['paid_done_desc'] = '感谢您的付款。一旦交易得到验证，订阅将被激活。';
$txt['paid_sub_return'] = '返回订阅';
$txt['paid_current_desc'] = '下面是您当前和以前订阅的列表。要延长现有订阅，只需从上面的列表中选择它。';
$txt['paid_admin_add'] = '添加此订阅';

$txt['paid_not_set_currency'] = '您尚未设定货币种类。请进入<a href="%1$s">设定页面</a>设定完成后再继续。';
$txt['paid_no_cost_value'] = '您必须输入费用和订阅长度。';
$txt['paid_invalid_duration'] = '您必须输入此订阅的有效期限。';
$txt['paid_invalid_duration_D'] = '如果设置订阅长度以天计量，您只能使用1-90天。 如果你想要订阅这么长时间，你应该使用数周、数月或数年。';
$txt['paid_invalid_duration_W'] = 'If putting in a subscription length measured in weeks, you can only use 1 to 52 weeks. If you want a subscription that long, you should use months or years.';
$txt['paid_invalid_duration_M'] = 'If putting in a subscription length measured in months, you can only use 1 to 24 months. If you want a subscription that long, you should use years.';
$txt['paid_invalid_duration_Y'] = '如果按年计入订阅长度，您只能使用1-5年。';
$txt['paid_all_freq_blank'] = '您必须输入至少四个持续时间中的一个。';

// Some error strings.
$txt['paid_no_data'] = '没有有效的数据被发送到脚本。';

$txt['paypal_could_not_connect'] = '无法连接 PayPal 主机';
$txt['paid_sub_not_active'] = 'That subscription is not taking any new users!';
$txt['paid_disabled'] = 'Paid subscriptions are currently disabled!';
$txt['paid_unknown_transaction_type'] = '未知的付费订阅交易类型。';
$txt['paid_empty_member'] = '付费订阅处理程序无法恢复会员 ID';
$txt['paid_could_not_find_member'] = '付费订阅处理程序找不到与 ID: %1$d 的成员';
$txt['paid_count_not_find_subscription'] = '付费订阅处理程序找不到会员ID: %1$s, 订阅 ID: %2$s';
$txt['paid_count_not_find_subscription_log'] = '付费订阅处理程序找不到会员ID的订阅日志: %1$s, 订阅 ID: %2$s';
$txt['paid_count_not_find_outstanding_payment'] = '找不到会员ID的未付付款条目： %1$s，订阅 ID： %2$s 因此忽略';
$txt['paid_admin_not_setup_gateway'] = '对不起，管理员尚未完成设置付费订阅。请稍后再试。';
$txt['paid_make_recurring'] = '使它成为一次性付款';

$txt['subscriptions'] = '付费订购';
$txt['subscription'] = '订阅';
$txt['paid_subs_desc'] = '下面是本论坛上所有订阅的列表。';
$txt['paid_subs_none'] = 'There are currently no paid subscriptions available!';

$txt['paid_current'] = '现有订阅';
$txt['pending_payments'] = '待付款';
$txt['pending_payments_desc'] = '该成员试图为此订阅支付以下款项，但论坛尚未收到确认书。 如果您确定已收到付款，单击 &quot;接受&quot; 以采取行动订阅。 或者，您可以点击 &quot;移除&quot; 移除所有付款的引用内容。';
$txt['pending_payments_value'] = '值';
$txt['pending_payments_accept'] = '接受';
$txt['pending_payments_remove'] = '移除';

?>