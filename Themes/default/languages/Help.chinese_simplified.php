<?php
// Version: 2.1.3; Help

global $helptxt, $scripturl;

$txt['close_window'] = '关闭视窗';

$helptxt['manage_boards'] = '
	<strong>编辑版块</strong><br />
	这个页面可以让你建立/排序/移除版块, 以及版块的类别。
	例如: 您的论坛资讯很广泛, 包含 &quot;运动&quot;, &quot;汽车&quot; 和 &quot;音乐&quot;,
	这些可以建立成最上层的类别, 底下您可以建立 &quot;子类别&quot; 或 &quot;版块&quot;
	而帖子是在版块里面。下面是一个简单的阶层结构: <br />
	<ul class="normallist">
		<li>
			<strong>运动</strong>
			&nbsp;- &quot;类别&quot;
		</li>
		<ul class="normallist">
			<li>
				<strong>棒球</strong>
				&nbsp;- &quot;运动&quot 类别底下的版块;
			</li>
			<ul class="normallist">
				<li>
					<strong>统计</strong>
					&nbsp;- &quot;棒球&quot 底下的子版块;
				</li>
			</ul>
			<li><strong>足球</strong>
			&nbsp;- &quot;运动&quot; 底下的版块</li>
		</ul>
	</ul>
	类别可以让您明显地分类版块的主题 (&quot;汽车, 运动&quot;),
	而底下的 &quot;版块&quot; 可以让会员发表帖子。
	会员如果对于 Pintos 有兴趣, 他可以在 &quot;汽车->Pinto&quot; 发表帖子。
	类别让大家快速寻找自己想要的: 您可以去逛 &quot;硬体&quot; 和 &quot;服饰&quot; 店, 而不是只能去 &quot;商店&quot;。
	这样可以简化您搜寻 &quot;pipe joint compound&quot;, 因为您可以到硬体店 &quot;类别&quot; 而不需要去服饰店(您不可能在服饰店找到 pipe joint compound)。<br />
	如上所述, 版块是类别底下的主要议题。
	如果您要讨论 &quot;Pintos&quot; 您要在 &quot;汽车&quot; 类别底下的 &quot;Pinto&quot; 版块发表您的意见。<br />
	这个选单项目的管理功能是建立版块, 排序版块 (让 &quot;Pinto&quot; 在 &quot;Chevy&quot; 之后), 或删除版块。';

$helptxt['edit_news'] = '
	<ul class="normallist">
		<li>
			<strong>最新消息</strong><br />
			这个让您设定显示在论坛首页的最新消息项目。
			增加您要的项目 (例如: "不要忘记星期二的会议")。每个项目会随机轮播。
		</li>
		<li>
			<strong>电子报</strong><br />
			这个让您透过简讯或 Email 传送电子报给会员。首先, 选择您想传送的群组和您不想传送的群组。您也可以另外增加传送的会员或 Email。最后, 输入电子报的内容并选择用简讯或 Email 传送。
		</li>
		<li>
			<strong>设定</strong><br />
			这里可以选择最新消息和电子报的设定, 包含选择可以编辑或传送电子报的群组。这里也可以设定是否启用 feed, 并且设定 feed 中每篇帖子显示的长度。
		</li>
	</ul>';

$helptxt['view_members'] = '
	<ul class="normallist">
		<li>
			<strong>View all Members</strong><br>
			View all members of the forum. You are presented with a hyperlinked list of member names. You may click
			on any of the names to find details of the members (homepage, age, etc.), and as Administrator
			you are able to modify these parameters. You have complete control over members, including the
			ability to delete them from the forum.<br><br>
		</li>
		<li>
			<strong>Awaiting approval</strong><br>
			This page is only shown if you have enabled admin approval of all new registrations. Anyone who registers to join your
			forum will only become a full member once they have been approved by an admin. The page lists all those members who
			are still awaiting approval, along with their email and IP address. You can choose to either accept or reject (delete)
			any member on the list by checking the box next to the member and choosing the action from the drop-down box at the bottom
			of the page. When rejecting a member you can choose to delete the member either with or without notifying them of your decision.<br><br>
		</li>
		<li>
			<strong>Awaiting activation</strong><br>
			This page will only be visible if you have email activation of new member accounts enabled on the forum. This page will list all
			members who have still not activated their new accounts. From this page you can choose to either accept, reject or remind
			members with outstanding registrations. As above you can also choose to email the member to inform them of the
			action you have taken.<br><br>
		</li>
	</ul>';

$helptxt['ban_members'] = '<strong>阻挡会员</strong><br />
	SMF 可以让你 &quot;禁用&quot; 会员, 如果他们违反了论坛的规定.
	管理员可以禁止他们浏览论坛. 在会员发布的帖子里你可以看到他们的 IP.
	只要把 IP 输入到这里就可以禁止他们发布任何帖子.注意: 有些会员的 IP 会改变.<br />或输入他们的电子邮件阻挡会员.';

$helptxt['featuresettings'] = '<strong>Edit Features and Options</strong><br />
	There are several features in this section that can be changed to your preference.';

$helptxt['modsettings'] = '<strong>修改特色及选项</strong><br />
	这里可以任意修改论坛的特色. 外挂的选项通常也会在这里出现.';

$helptxt['time_format'] = '<strong>时间格式</strong><br />
	你可以修改时间格式给你自己. 这里用了很多简写, 但是非常简单. PHP 的strftime函数用法如下
	(详细的用法可到 <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	时间格式可用以下简写: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - 周日简称<br />
	&nbsp;&nbsp;%A - 周日名称<br />
	&nbsp;&nbsp;%b - 月份简称<br />
	&nbsp;&nbsp;%B - 月份名称<br />
	&nbsp;&nbsp;%d - 日子 (01 to 31) <br />
	&nbsp;&nbsp;%D<strong>*</strong> - 如同 %m/%d/%y <br />
	&nbsp;&nbsp;%e<strong>*</strong> - 日子 (1 to 31) <br />
	&nbsp;&nbsp;%H - 24-hour 格式 (range 00 to 23) <br />
	&nbsp;&nbsp;%I - 12-hour 格式 (range 01 to 12) <br />
	&nbsp;&nbsp;%m - 数字月份 (01 to 12) <br />
	&nbsp;&nbsp;%M - 分钟 <br />
	&nbsp;&nbsp;%p - 可用 &quot;am&quot; 或 &quot;pm&quot; 上午或下午<br />
	&nbsp;&nbsp;%R<strong>*</strong> - 时间以24小时标记 <br />
	&nbsp;&nbsp;%S - 秒数以小数计算 <br />
	&nbsp;&nbsp;%T<strong>*</strong> - 目前时间, 等于 %H:%M:%S <br />
	&nbsp;&nbsp;%y - 2 位数年份 (00 to 99) <br />
	&nbsp;&nbsp;%Y - 4 位数年份<br />
	&nbsp;&nbsp;%Z - 时区 <br />
	&nbsp;&nbsp;%% - \'%\' 符号 <br />
	<br />
	<i>* 无法用在 Windows-based 伺服器.</i></span>';

$helptxt['live_news'] = '<strong>Live 公告</strong><br />
	这里会出现 <a href="http://www.simplemachines.org/">www.simplemachines.org 的最新注意事项</a>
	这里会常出现更新档, 新论坛下载, 或 Simple Machines Team 的重要事件.';

$helptxt['registrations'] = '<strong>注册管理</strong><br />
	这里可以让你用各种功能管理会员注册. 依据你论坛的设定, 你会看到不同的区块及功能. 这些是:<br /><br />
	<ul>
		<li>
			<strong>注册新会员</strong><br />
			这里你可以注册新的会员. 当你的论坛已不开放注册或你需要新增测试会员时可以用这个功能. . 如果你要求新会员启用帐号,
			启用邮件会寄到他们的信箱里, 他们必须依照邮件的指示启动帐号. 你也可以选择寄密码给会员.
		</li>
		<li>
			<strong>修改注册同意条款</strong><br />
			当新会员注册时会看到论坛的同意条款. 你可以完全改变, 移除, 或修改 SMF 原有的同意条款内容.<br /><br />
		</li>
		<li>
			<strong>保留帐号</strong><br />
			这里你可以禁止会员使用某些帐号.<br /><br />
		</li>
		<li>
			<strong>设定</strong><br />
			这个页面只有在可管理论坛的权限下出现。这里个让您改变注册的设定，和其他相关的设定。
		</li>
	</ul>';

$helptxt['modlog'] = '<strong>管理纪录</strong><br />
	任何版主的管理纪录都会在这出现, 譬如说删除帖子及删除会员. 任何纪录一定会在这出现, 如果版主要删除必须等24小时过后.
	版主的动作变数都会出现在 \'物件\' 栏里.';
$helptxt['adminlog'] = '<strong>Administration Log</strong><br />
	This section allows members of the admin team to track some of the administrative actions that have occurred on the forum. To ensure that
	admins cannot remove references to the actions they have performed, entries may not be deleted until 24 hours after the action was taken.';
$helptxt['userlog'] = '<strong>Profile Edits Log</strong><br>
	This page allows members of the admin team to view changes users make to their profiles, and is available from inside a user\'s profile area.';
$helptxt['warning_enable'] = '<strong>User Warning System</strong><br />
	This feature enables members of the admin and moderation team to issue warnings to users - and to use a users warning level to determine the
	actions available to them on the forum. Upon enabling this feature a permission will be available within the permissions section to define
	which groups may assign warnings to users. Warning levels can be adjusted from a users profile. The following additional options are available:
	<ul>
		<li>
			<strong>Warning Level for User Watch</strong><br />
			This setting defines the percentage warning level a user must reach to automatically assign a &quot;watch&quot; to the user.
			Any user who is being &quot;watched&quot; will appear in the relevant area of the moderation center.
		</li>
		<li>
			<strong>Warning Level for Post Moderation</strong><br />
			Any user passing the value of this setting will find all their posts require moderator approval before they appear to the forum
			community. This will override any local board permissions which may exist related to post moderation.
		</li>
		<li>
			<strong>Warning Level for User Muting</strong><br />
			If this warning level is passed by a user they will find themselves under a post ban. The user will lose all posting rights.
		</li>
		<li>
			<strong>Maximum User Warning Point per Day</strong><br />
			This setting limits the amount of points a moderator may add/remove to any particular user in a twenty four hour period. This will
			can be used to limit what a moderator can do in a small period of time. This setting can be disabled by setting to a value of zero. Note that
			any users with administrator permissions are not affected by this value.
		</li>
	</ul>';
$helptxt['warning_watch'] = 'This setting defines the percentage warning level a member must reach to automatically assign a &quot;watch&quot; to the member. Any member who is being &quot;watched&quot; will appear in the watched members list in the moderation center.';
$helptxt['warning_moderate'] = '任何成员通过此设置的值都会发现他们的所有帖子都需要版主批准，然后才能出现到论坛社区。 这将覆盖与帖子管理相关的任何本地棋盘权限。';
$helptxt['warning_mute'] = '如果这个警告级别被一个成员传递，他们会发现自己处于禁止发布的状态。该成员将失去所有发布权限。';
$helptxt['user_limit'] = 'This setting limits the amount of points a moderator may add/remove to any particular member in a twenty four hour period. This
			can be used to limit what a moderator can do in a small period of time. This can be disabled by setting it to a value of zero. Note that
			any members with administrator permissions are not affected by this value.';

$helptxt['error_log'] = '<strong>错误纪录</strong><br />
	错误纪录会纪录所有会用使用论坛时而发生错误的纪录. 所有错误是依照发生日期出现, 你也可以按日期旁边的箭头来进行类别.
	此外你可以按错误旁的图片来进行过滤. 譬如说过滤会员只会陈列你所过滤的会员.';
$helptxt['theme_settings'] = '<strong>布景设定</strong><br />
	这里可以让你改变布景的设定. 设定包括布景的文件夹及 URL 的资料. 其他的选项可以让你对布景进行规划.
	有些布景提供不同的选项任你规划你所喜欢的论坛.';
$helptxt['smileys'] = '<strong>表情图案中心</strong><br />
	在这里您可以新增或移除表情图案和表情套图. 注意如果一个表情图案在一个表情套图里面, 他必须也出现在每个图案集.
	要不然会无法显示.<br /><br />

	您也可以在这里编辑帖子的图示，如果有开启这个功能。';
$helptxt['calendar'] = '<strong>管理日历</strong><br />
	这里可以让您修改目前的日历设定，也可以新增或移除假期。';
$helptxt['cal_export'] = '导出用于导入其他日历应用程序的 iCal 格式的文本文件';
$helptxt['cal_highlight_events'] = '此设置允许您高亮显示Mini Calendars 上的事件，这两个地方都是主要日历，或者禁用事件高亮。';
$helptxt['cal_highlight_holidays'] = '此设置允许您在 Mini Calendars 上高亮显示节日（即主要日历），或禁用事件高亮。';
$helptxt['cal_highlight_birthdays'] = '此设置允许您在 Mini Calendars 上高亮显示生日，即主要日历，或禁用事件高亮。';
$helptxt['cal_disable_prev_next'] = '如果选中此设置，页面左侧的三个月区块将被禁用。';
$helptxt['cal_display_type'] = '此设置允许您更改日历的显示类型。<br><br><strong>兼容性:</strong> 使日历行变得更加庞大。<br><strong>协约：</strong> 使日历行变得很小。';
$helptxt['cal_week_links'] = '如果选中此设置，将在日历中每周同时添加链接。';
$helptxt['cal_prev_next_links'] = '如果选中此设置，上个月和下个月的链接将被添加到每个月的顶部以便于浏览。';
// argument(s): $txt['months_short'][1], $txt['months_titles'][1]
$helptxt['cal_short_months'] = 'If this setting is checked, month names within the calendar will be shortened.<br><br><strong>Enabled:</strong> %1$s 1<br><strong>Disabled:</strong> %2$s 1';
// argument(s): $txt['days_short'][1], $txt['days'][1]
$helptxt['cal_short_days'] = 'If this setting is checked, day names within the calendar will be shortened.<br><br><strong>Enabled:</strong> %1$s<br><strong>Disabled:</strong> %2$s';

$helptxt['serversettings'] = '<strong>Server Settings</strong><br>
	Here you can perform some core configuration for your forum. This page includes the database and URL settings, as well as other
	important configuration items such as mail settings and caching. Think carefully whenever editing these settings as an error may
	render the forum inaccessible';
$helptxt['manage_files'] = '
	<ul>
		<li>
			<strong>Browse Files</strong><br />
			Browse through all the attachments, avatars and thumbnails stored by SMF.<br /><br />
		</li><li>
			<strong>Attachment Settings</strong><br />
			Configure where attachments are stored and set restrictions on the types of attachments.<br /><br />
		</li><li>
			<strong>Avatar Settings</strong><br />
			Configure where avarars are stored and manage resizing of avatars.<br /><br />
		</li><li>
			<strong>File Maintenance</strong><br />
			Check and repair any error in the attachment directory and delete selected attachments.<br /><br />
		</li>
	</ul>';

$helptxt['topicSummaryPosts'] = '这里可以让你选择出现在主题回覆时该出现的帖子数.';
$helptxt['enableAllMessages'] = '这里可以让您设定显示 全部 连结的 <em>最多</em> 帖子数量。如果这个设定是小于 &quot;主题页面显示的帖子数&quot; 表示永远不会显示 全部 的连结，如果设定太高可能会让您的论坛变慢。';
$helptxt['allow_guestAccess'] = '不勾选这个栏位会让访客无法进行任何动作，除了使用登录，忘记密码功能等等。这个跟禁止访客进入版块的权限不同。';
$helptxt['userLanguage'] = '使用这个选项可以让会员改变论坛语言, 但是不会改变默认值.';
$helptxt['trackStats'] = '统计:<br />这个可以让会员浏览最新的帖子或最受欢迎的帖子. 其他的统计像最高线上人数, 最新注册会员, 及最新帖子也会出现.<hr />
		点阅数:<br />添加新的统计栏显示论坛的点阅数.';
$helptxt['titlesEnable'] = '变更自订头衔是让允许管理员为会员建立特殊的头衔。自订头衔会显示在昵称下面。<br /><em>例如:</em><br />Jeff<br />Cool Guy';
$helptxt['onlineEnable'] = '这个选项会显示会员在线或不在线的图示';
$helptxt['todayMod'] = '显示 &quot;今天&quot; 或 &quot;昨天&quot; 取代日期。<br /><br />
		<strong>例如:</strong><br /><br />
		<dt>
			<dt>停用</dt>
			<dd>十月 3, 2009 12:59:18 am</dd>
			<dt>只有今天</dt>
			<dd>今天 12:59:18 am</dd>
			<dt>今天 &amp; 昨天</dt>
			<dd>今天 09:36:55 pm</dd>
		</dt>';
$helptxt['disableCustomPerPage'] = 'Check this option to stop users from customizing the amount of messages and topics to display per page on the Message Index and Topic Display page respectively.';
$helptxt['enablePreviousNext'] = '显示连结到下篇其上篇的帖子.';
$helptxt['pollMode'] = '你可以选择使用会禁止使用投票. 如果禁止使用投票, 任何现有的投票将会被隐藏. 你可以继续显示现有的主题如果你准许
		&quot;显示现有投票为主题&quot;.<br /><br />权限选单可让你选择谁可以发表投票. 请记住这个选项如果投票功能出现问题.';
$helptxt['enableCompressedOutput'] = '这个选项可以让你使用 zlib 来压缩带宽. 一定要安装 zlib 才可使用.';
$helptxt['httponlyCookies'] = 'Cookies 将无法使用 JavaScript 等脚本语言访问。此设置可以帮助通过XSS 攻击减少身份盗窃。 这可能造成第三方脚本问题，但应尽可能在任何地方使用。';
$helptxt['samesiteCookies'] = 'The SameSite attribute of the Set-Cookie HTTP response header allows you to declare if your cookie should be restricted to a first-party or same-site context. For further information, please refer to <a href="https://developer.mozilla.org/docs/Web/HTTP/Headers/Set-Cookie/SameSite">MDN</a>';
$helptxt['databaseSession_enable'] = '此项功能将使用资料库来管理工作阶段。最好使用在有负载平衡功能的服务器，也可能让您的论坛更快。';
$helptxt['databaseSession_loose'] = '启用此项功能会减少您论坛使用的宽频, 但是如果您按回上页不过更新您的页面.';
$helptxt['databaseSession_lifetime'] = '您可以选择工作阶段的时间 (已秒计算), 最好是高于2400.';
$helptxt['tfa_mode'] = 'You can add a second level of security to your forum by enabling <a href="https://en.wikipedia.org/wiki/Two_factor_authentication">Two Factor Authentication</a>. 2FA forces your users to add a enter a machine-generated code after the regular login. You need to configure 2FA to yourself before you are able to force it to other users!';
$helptxt['cache_enable'] = 'SMF 在不同级别执行缓存。缓存级别越高，启用的 CPU 时间越长，将被用来检索缓存信息。 如果您的机器上有缓存，建议您先尝试缓存1级。';
$helptxt['cache_memcached'] = 'If you are using memcached you need to provide the server details. This should be entered as a comma separated list as shown in the example below:<br><br>	&quot;server1,server2,server3:port,server4&quot;<br><br>Note that if no port is specified SMF will use port 11211 unless the host contains a slash, then it is assumed to be an alternative transport and the port will be set to 0. SMF will attempt to perform rough/random load balancing across the specified servers.';
$helptxt['cache_cachedir'] = '此设置仅适用于基于smf文件的缓存系统。它指定了到缓存目录的路径。 建议您将此设置为 /tmp/ 如果您要使用此设置，尽管它将适用于任何目录';
$helptxt['cache_sqlite_cachedir'] = 'This setting is only for the SQLite database cache system. It specifies the path to the cache directory. It is recommended that you place this in /tmp/ if you are going to use this, although it will work in any directory';
$helptxt['enableErrorLogging'] = '这个会纪录任何错误, 譬如说无法登录等等.';
$helptxt['enableErrorQueryLogging'] = 'This will include the full query sent to the database in with any database error.  Requires error logging to be turned on.<br /><br /><strong>Note:  This will affect the ability to filter the error log by the error message.</strong>';
$helptxt['disallow_sendBody'] = '这个选项会在回覆的通知信件内移除帖子内容。<br /><br />通常会员会直接回复通知信件，表示只有管理员才会收到回覆的讯息。';
$helptxt['enable_ajax_alerts'] = 'This option allows your members to receive AJAX notifications. This means that members don\'t need to refresh the page to get new notifications.<br><strong>DO NOTE:</strong> This option might cause a severe load at your server with many users online.';
$helptxt['alerts_auto_purge'] = 'Once an alert has been read, it is rarely needed again. For performance reasons, it is a good idea to automatically delete them after a while.';
$helptxt['jquery_source'] = 'This will determine the source used to load the jQuery Library. <em>Google CDN, jQuery CDN</em> and <em>Microsoft CDN</em> will load the jQuery library from those respective CDN networks. <em>Local</em> will only use the local source. <em>Custom</em> allows you to specify a custom URL for the library.';
$helptxt['compactTopicPagesEnable'] = '页码显示的数量。<br /><em>例如:</em>
		&quot;3&quot; 显示为: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; 显示为: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = '在论坛的最下方显示 SMF 开启主页所花的时间.';
$helptxt['removeNestedQuotes'] = '引用帖子的时候, 这个功能会移除原文中的巢状引言。';
$helptxt['max_image_width'] = '设定帖子贴图的最大值. 不会影响小于最大值的图片.';
$helptxt['mail_type'] = '让你选择使用默认的 PHP 邮件软体或你自己的邮件伺服器. 除了 sendmail 之外请输入发出邮件的伺服器.';
$helptxt['attachment_manager_settings'] = 'Attachments are files that members can upload, and attach to a post.<br /><br />
		<strong>Check attachment extension</strong>:<br /> Do you want to check the extension of the files?<br />
		<strong>Allowed attachment extensions</strong>:<br /> You can set the allowed extensions of attached files.<br />
		<strong>Attachments directory</strong>:<br /> The path to your attachment folder<br />(example: /home/sites/yoursite/www/forum/attachments)<br />
		<strong>Max attachment folder space</strong> (in KB):<br /> Select how large the attachment folder can be, including all files within it.<br />
		<strong>Max attachment size per post</strong> (in KB):<br /> Select the maximum filesize of all attachments made per post.  If this is lower than the per-attachment limit, this will be the limit.<br />
		<strong>Max size per attachment</strong> (in KB):<br /> Select the maximum filesize of each separate attachment.<br />
		<strong>Max number of attachments per post</strong>:<br /> Select the number of attachments a person can make, per post.<br />
		<strong>Display attachment as picture in posts</strong>:<br /> If the uploaded file is a picture, this will show it underneath the post.<br />
		<strong>Resize images when showing under posts</strong>:<br /> If the above option is selected, this will save a separate (smaller) attachment for the thumbnail to decrease bandwidth.<br />
		<strong>Maximum width and height of thumbnails</strong>:<br /> Only used with the &quot;Resize images when showing under posts&quot; option, the maximum width and height to resize attachments down from.  They will be resized proportionally.';
$helptxt['attachmentCheckExtensions'] = '对于某些社区，您可能希望通过检查扩展来限制用户可以上传的文件类型： . myphoto.jpg 有一个 jpg 扩展。';
// References setting attachmentCheckExtensions
$helptxt['attachmentExtensions'] = 'If "check attachment\'s extension" above is enabled, these are the extensions that will be permitted for new attachments.';
$helptxt['attachmentUploadDir'] = '服务器<br>上的附件文件夹路径(例如：/home/sites/yoursite/www/forum/attaches)';
$helptxt['attachmentDirSizeLimit'] = 'Select how large the attachment folder can be, including all files within it.';
$helptxt['attachmentPostLimit'] = 'Select the maximum filesize (in KB) of all attachments made per post. If this is lower than the per-attachment limit, this will be the limit.';
$helptxt['attachmentSizeLimit'] = '选择每个单独附件的最大文件大小.';
$helptxt['attachmentNumPerPostLimit'] = 'Select the number of attachments a person can make per post.';
$helptxt['attachmentShowImages'] = '如果上传的文件是图片，它将显示在帖子底下。';
$helptxt['attachmentThumbnails'] = '如果选择上面的设置，这将为缩略图另存一个(较小的)附件，以减少带宽。';
$helptxt['attachmentThumbWidth'] = 'Only used with the &quot;Resize images when showing under posts&quot; setting. This is the maximum width to resize attachments down to. They will be resized proportionally.';
$helptxt['attachmentThumbHeight'] = 'Only used with the &quot;Resize images when showing under posts&quot; setting. This is the maximum height to resize attachments down to. They will be resized proportionally.';
$helptxt['attachmentDirFileLimit'] = '每个目录的最大文件数';
$helptxt['attachmentEnable'] = 'This setting enables you to configure how attachments can be made.<br><br>
	<ul class="normallist">
		<li>
			<strong>Disable all attachments</strong><br>
			All attachments are disabled. Existing attachments are not deleted, but they are hidden from view (even administrators cannot see them). New attachments cannot be made either, regardless of permissions.<br><br>
		</li>
		<li>
			<strong>Enable all attachments</strong><br>
			Everything behaves as normal, users who are permitted to view attachments can do so, users who are permitted to upload can do so.<br><br>
		</li>
		<li>
			<strong>Disable new attachments</strong><br>
			Existing attachments are still accessible, but no new attachments can be added, regardless of permission.
		</li>
	</ul>';
$helptxt['attachment_image_paranoid'] = '选择此设置将允许对图像附件进行非常严格的安全检查。 <strong>警告！</strong> 这些广泛的检查也可能在有效的图像上失败。 强烈建议仅使用此设置和图像重新编码， 为了让SMF尝试重置安全检查失败的图像：如果成功，它们将被清理和上传。 否则，如果图像重新编码未启用，所有附件校验失败将被拒绝。';
$helptxt['attachment_image_reencode'] = '选择此设置将启用尝试重新编码上传的图像附件。图像重新编码可以提供更好的安全性。 但请注意，图像的重新编码也会使所有动画图像变成静态的。 <br> 此功能只有在您的服务器上安装GD模块时才可用。';
$helptxt['attachment_thumb_memory'] = '源图片越大(大小和宽度x高度)，内存要求就越高，系统就会成功创建缩略图图像。<br>检查此设置，系统将估计所需的内存，然后请求这笔金额。 如果成功，只有那时它才会尝试创建缩略图。<br>这将导致较少的白页错误，但可能导致较少的缩略图被创建。 不选中此操作总是会导致系统尝试创建缩略图(有固定数量的内存)。 这可能导致更多的白页错误。';
$helptxt['attachmentRecodeLineEndings'] = '脚本将根据您的服务器重新编码行尾。';
$helptxt['automanage_attachments'] = '默认情况下，SMF将新附件放入单个文件夹。 对于大多数站点来说，这不是一个问题，但随着站点的增长，可以有多个文件夹来存储附件。<br><br>此设置允许您自己设置是否管理这些文件夹 (e). 。创建第二个文件夹并在您准备好后移动到它。或者您是否根据标准让SMF执行它。 例如当当前目录达到特定大小时，或者在非常繁忙的站点中按年甚至数月分解文件夹。';
$helptxt['dont_show_attach_under_post'] = 'If enabled, the attachments embedded in the post won\'t appear under the post, but are still subject to be deleted.';
$helptxt['use_subdirectories_for_attachments'] = '创建新目录。';
$helptxt['max_image_height'] = '和最大宽度一样，此设置表示张贴图片的最大高度。';
$helptxt['avatar_paranoid'] = 'Selecting this setting will enable very strict security checks on avatars. <strong>Warning!</strong> These extensive checks can fail on valid images too. It is strongly recommended to only use this setting together with avatar re-encoding, in order to have SMF try to resample the images which fail the security checks: if successful, they will be sanitized and uploaded. Otherwise, if re-encoding of avatars is not enabled, all avatars failing checks will be rejected.';
$helptxt['avatar_reencode'] = '选择此设置将允许尝试重新编码上传的头像。图像重新编码可以提供更好的安全性。 但请注意，图像的重新编码也会使所有动画图像变成静止的。 <br> 此功能只有在您的服务器上安装GD模块时才可用。';
$helptxt['cal_enabled'] = '日历可以显示会员的生日及重要的公告.<br /><br />
		<strong>显示连结日期到 \'发表事件\'</strong>:<br />当会员点选日期时可以让他们发布事件.<br />
		<strong>显示周数</strong>:<br />显示第几个礼拜.<br />
		<strong>论坛首页显示的天数</strong>:<br />如果您设定的是7, 那一周内的事件都会出现在论坛首页.<br />
		<strong>主页里显示假期</strong>:<br />主页里会显示今天是什么假期.<br />
		<strong>主页里显示生日</strong>:<br />主页里会显示今天是谁的生日.<br />
		<strong>主页里显示事件</strong>:<br />主页里会显示今天的事件.<br />
		<strong>事件将出现到的版块</strong>:<br />您想要发表的事件出现在哪个版块内?<br />
		<strong>允许事件不连到帖子</strong>:<br />可以直接让会员发布事件，不需选择出现在哪个帖子内。<br />
		<strong>年份的最小值</strong>:<br />设定日历的 &quot;第一年&quot;.<br />
		<strong>年份的最大值</strong>:<br />设定日历的 &quot;最后一年&quot;.<br />
		<strong>生日颜色</strong>:<br />输入生日的颜色<br />
		<strong>事件颜色</strong>:<br />输入事件的颜色<br />
		<strong>假期颜色</strong>:<br />输入假期的颜色<br />
		<strong>允许事件维持数日</strong>:<br />勾选如果你允许同样的事件维持多天.<br />
		<strong>事件可维持日数</strong>:<br />选择事件可以维持的日数.<br /><br />
		记得会员使用日历的功能 (发布事件, 浏览事件等等) 可以在权限选单里面开启.';
$helptxt['cal_link_postevent'] = 'This will allow members to post events for that day, when they click on that date';
$helptxt['cal_maxdays_advance'] = 'If this is set to 7, the next week\'s worth of events will be shown';
$helptxt['cal_allow_unlinkedevents'] = 'Allow members to post events without requiring them to be linked with a post in a board';
$helptxt['cal_min_year'] = 'Select the &quot;first&quot; year on the calendar list';
$helptxt['cal_max_year'] = 'Select the &quot;last&quot; year on the calendar list';
$helptxt['cal_maxevent_span'] = 'Select the maximum number of days that an event can span';
$helptxt['localCookies'] = 'SMF 使用 cookies 来保存登录资料到会员的电脑里.
	Cookies 可以用全区性的方式保存 (myserver.com) 或以区域性的方式来保存 (myserver.com/path/to/forum).<br />
	使用这个选项如果会员无法永久登录, 或自动登出.<hr />
	普遍式保存比较不安全如果你使用分享的伺服器 (譬如 Kimo 的免费网址).<hr />
	地区式保存无法到论坛的文件夹外使用, 如果你的论坛安装在 www.myserver.com/forum, 网页像 www.myserver.com/index.php 将无法使用帐户的资料.
	如果使用 SSI.php, 建议您使用全区性来保存.';
$helptxt['enableBBC'] = '使用这个选项可让会员使用 Bulletin Board Code (BBCode 代码). BBCode 代码可让会员改变帖子内容的形式.';
$helptxt['legacy_bbc'] = 'Legacy BBCodes are obsolete and cannot be used in new posts. However, they will be parsed in existing posts if enabled here.<br><br>Enabling legacy BBCodes is only useful if your forum was upgraded from a previous version of SMF.<br><br>Also, even when they are enabled, some legacy BBCodes will not be rendered in the same way that they once were. For example, the [flash] BBCode will simply show a link to the Flash content instead of embedding it.';
$helptxt['default_timezone'] = 'This is the default timezone used for the display of times throughout the forum.';
$helptxt['timezone_priority_countries'] = 'This setting lets you push the time zones for a certain country or countries to the top of the list of selectable time zones that is shown when users are configuring their profiles, creating calendar events, etc.<br><br>For example, if many of your forum\'s members live in New Zealand or Fiji, you may enter "NZ,FJ" to make it easier for them to find the most relevant time zones quickly.<br><br>You can find the complete list of ISO country codes by searching the Internet for "<a href="https://www.google.com/search?q=iso+3166-1+alpha-2" target="_blank" rel="noopener">ISO 3166-1 alpha-2</a>".';
$helptxt['spamWaitTime'] = '你可以在这选择会员发布帖子时该等的时间. 这个功能可以禁止会员灌水.';

$helptxt['enablePostHTML'] = '允许使用基本的 HTML:
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes_manage'] = 'Here you can install new themes and select which themes your users can choose from, the default theme that new users and guests will use, as well as other theme selection settings.';
$helptxt['theme_install'] = '这里可以让你安装新的布景. 你可以用已建的文件夹, 然后上传你要的布景, 或者复制默认的布景.<br /><br />
	注意: 在布景的文件夹里必须要有 <tt>theme_info.xml</tt> 定义档.';
$helptxt['xmlnews_enable'] = '允许会员连结 <a href="%1$s?action=.xml;sa=news">最新消息</a>
	及相关的资料。建议你限制最近公告及帖子的使用值, 因为有些使用 RSS 数据的软体会缩短公告的资料 (例如 Trillian)。';
$helptxt['xmlnews_attachments'] = 'Allows links to attachments to be enclosed within your XML/RSS feeds. Turn this on if you want to use your forum as a podcasting, broadcatching, or similar content distribution platform.
	<br><br>
	The "view attachments" permission affects this setting. Members and guests will only see a post\'s attachments in the feed if they can also see the attachments on the post\'s web page. Keep in mind that most feed readers will access your feeds as a guest.
	<br><br>
	Some feed formats only allow one enclosed attachment per post. If a post has multiple attachments, SMF will enclose the largest one in these feeds.';
$helptxt['globalCookies'] = '允许使用次级域名的 Cookies. 例如, 如果...<br />
	您的网址是 http://www.simplemachines.org/,<br />
	您的论坛在 http://forum.simplemachines.org/,<br />
	使用此项可以让你使用论坛的 cookie 在您的网址里。请勿使用这项功能如果次网域 (像 hacker.simplemachines.org 不是您所拥有)。';
$helptxt['globalCookiesDomain'] = 'When using subdomain independent cookies (global cookies), you can specify which domain should be used for them. This should, of course, be set to your main domain - for example, if you are using <em>forum.example.com</em> and <em>www.example.com</em>, the domain is <em>example.com</em> in this case. You should not put the <em>http://</em> or <em>https://</em> part in front of it.';
$helptxt['secureCookies'] = 'Enabling this option will force the cookies created for users on your forum to be marked as secure. Only enable this option if you are using HTTPS throughout your site as it will break cookie handling otherwise!';
$helptxt['securityDisable'] = 'When enabled, this <em>disables</em> the additional password check for the administration page. This is not recommended!';
$helptxt['securityDisable_why'] = 'Enter your current password. (The same one you use to login.)<br><br>The requirement to enter this helps ensure that you want to do whatever administration you are doing, and that it is <strong>you</strong> doing it.';
$helptxt['securityDisable_moderate'] = 'When enabled, this <em>disables</em> the additional password check for the moderation page. This setting is enabled by default.';
$helptxt['securityDisable_moderate_why'] = 'Enter your current password. (The same one you use to login.)<br><br>The requirement to enter this helps ensure that you want to do whatever moderation you are doing, and that it is <strong>you</strong> doing it.';
$helptxt['allow_cors'] = 'Cross Origin Resource Sharing or CORS is a policy for modern browsers to trust resources being requested across different domains.  If enabled, this will attempt to resolve CORS policy for scripts accessing the forum resources from different domains.  If subdomain independent cookies (global cookies) are enabled, attempts are made to determine the proper domain.  Supplying the Additional CORS domains with a comma separated list of domains allows for additional domains.  The format should be {SCHEMA}://{DOMAIN}.  If a wildcard (*) is supplied in the domain, attempts are made to resolve the wildcard.  If a wildcard (*) is supplied as the only additional domain, all domains are allowed and this may present a security risk to your forum and should not be used except in extreme cases.  Additional headers can be supplied in a comma separated list and will be allowed during requests containing these headers and wildcard (*) is allowed.';
$helptxt['frame_security'] = '现代浏览器现在理解一个由称为X-Framework-Option的服务器显示的安全标题。 通过设置此选项，您可以指定如何允许您的站点在框架集或iframe 中。 禁用将不会发送任何页眉，也是最不安全的，但是允许了最大的自由。 拒绝将完全阻止所有帧，并且是最严格和安全的。 允许相同的起源只允许您的域发布任何帧，并为前两个选项提供一个中间位置。';
$helptxt['proxy_ip_header'] = '这是由SMF信任的服务器头，因为它包含实际用户IP地址。 更改此设置可能会导致成员意外的 IP 结果。 在更改这些设置之前，请与您的服务器管理员、CDN提供商或代理管理员进行检查。 大多数供应商将理解并使用 HTTP_X_FORWARDED_FOR。 您应该填写发送反向代理头安全的服务器列表，以确保这些头只来自有效的来源。';
$helptxt['email_members'] = 'In this message you can use a few &quot;variables&quot;. These are:<br>
	{$board_url} - The URL to your forum.<br>
	{$current_time} - The current time.<br>
	{$member.email} - The current member\'s email.<br>
	{$member.link} - The current member\'s link.<br>
	{$member.id} - The current member\'s id.<br>
	{$member.name} - The current member\'s name. (for personalization).<br>
	{$latest_member.link} - The most recently registered member\'s link.<br>
	{$latest_member.id} - The most recently registered member\'s id.<br>
	{$latest_member.name} - The most recently registered member\'s name.';

$helptxt['failed_login_threshold'] = '设定错误登录的数量, 之后转向到忘记密码页面.';
$helptxt['loginHistoryDays'] = '在用户个人资料跟踪下保留登录历史的天数。默认值为30天。';
$helptxt['oldTopicDays'] = '如果使用这个功能，会员在回覆帖子时会检查主题的日期，如果主题已很久没有回复，会员会收到警告的讯息。设为 0 表示关闭此功能。';
$helptxt['edit_wait_time'] = '如果会员在设定的时间内编辑帖子，帖子将不会显示最后编辑时间的讯息。';
$helptxt['edit_disable_time'] = '设定会员在帖子发表之后, 超过多少时间(分钟)不能再修改帖子。0=停用。<br /><br /><em>注意: 这不会影响有权限编辑别人帖子的人。</em>';
$helptxt['preview_characters'] = '这个设置设置第一和最后消息主题预览的可用字符数。';
$helptxt['quote_expand'] = 'This setting allows large quotes to be collapsed, giving the user the option to expand them to their full length. Quotes smaller than this setting won\'t be affected.';
$helptxt['posts_require_captcha'] = 'This setting will force users to enter a code shown on a verification image each time they make a post to the board. Only users with a post count below the number set will need to enter the code - this should help combat automated spamming scripts.';
$helptxt['disable_wysiwyg'] = '此设置禁止所有用户使用帖子页面上的 WYSIWYG (&quot;你看到的是你得到的&quot;) 编辑器。';
$helptxt['lastActive'] = '显示时间已内的在线会员. 默认值是15分钟.';

$helptxt['customoptions'] = 'This section defines the options that a user may choose from a drop down list. There are a few key points to note in this section:
	<ul>
		<li><strong>Default Option:</strong> Whichever option box has the &quot;radio button&quot; next to it selected will be the default selection for the user when they enter their profile.</li>
		<li><strong>Removing Options:</strong> To remove an option simply empty the text box for that option - all users with that selected will have their option cleared.</li>
		<li><strong>Reordering Options:</strong> You can reorder the options by moving text around between the boxes. However - an important note - you must make sure you do <strong>not</strong> change the text when reordering options as otherwise user data will be lost.</li>
	</ul>';

$helptxt['autoFixDatabase'] = 'This will automatically fix broken tables and resume as if nothing happened. It does email you when this happens.<br>If you choose to disable this option, your forum will be down until you notice and manually fix the problem.';
// argument(s): scripturl
$helptxt['pgFulltextSearch'] = 'This setting defines the language to use for PostgreSQL\'s fulltext search. Choose the language that most closely matches the language your forum actually uses. If your forum\'s language is not listed, or if your forum is multi-lingual, choose the "simple" option. <br>
This setting is independent of your main SMF language settings and not related to the installed language for SMF. <br>
When you change this setting you need to <a href="%1$s?action=admin;area=managesearch;sa=method" target="_blank" rel="noopener">rebuild the fulltext search index</a>.<br>
If a language you need is not listed, ask your database admin to install PostgreSQL language support for that language.';

$helptxt['enableParticipation'] = '这个会显示会员发表的主题图示。';

$helptxt['db_persist'] = '延续线路使伺服器永远在线. 通常会增加论坛速度但是有些服务器会产生问题.';
$helptxt['ssi_db_user'] = '在您使用SSI.php时使用不同的数据库用户和密码的可选设置。';

// argument(s): either $helptxt['queryless_urls_supported'] or $helptxt['queryless_urls_unsupported'], depending on whether the server uses a supported webserver
$helptxt['queryless_urls'] = 'This changes the format of URLs a little so search engines will like them better. They will look like index.php/topic,1.0.html.<br><br>%1$s';
// is conditionally used as part of $helptxt['queryless_urls']
$helptxt['queryless_urls_supported'] = 'This feature will work on your server.';
// is conditionally used as part of $helptxt['queryless_urls']
$helptxt['queryless_urls_unsupported'] = 'This feature will not work on your server.';
$helptxt['minimize_files'] = 'This option will minimize the CSS and JavaScript files used by your forum, reducing the request calls to your server and speeding up load times for your users.<br><br>You should normally leave this option enabled. The only time you might want to disable it temporarily is while you are in the process of altering the CSS or JavaScript files used on your site (for example, when editing your theme files or developing a modification).';
$helptxt['boardindex_max_depth'] = 'This setting controls how many sub-board levels SMF will check when looking for new posts in sub-boards. It also affects which boards are included when the "Count sub-board\'s posts in parent\'s totals" option is enabled.<br><br>For example, if this is set to 1, a sub-board will only be marked "new" on the index page if the sub-board itself contains a new post. If it is set to 2, the sub-board will be marked "new" if there is a new post in the sub-board or in a sub-sub-board. If it is set to 10, the sub-board will be marked "new" if there is a new post in the sub-board, a sub-sub-board, a sub-sub-sub-board, etc., up to 10 levels deep.<br><br>Large, active forums may want to set this value to a low number in order to conserve server resources.';
$helptxt['countChildPosts'] = '勾选这个功能表示子版块内的帖子也会计算在论坛首页显示的帖子数。<br /><br />这会让论坛变慢，同时也表示没有帖子的母版块不会显示 0 篇帖子。';
$helptxt['allow_ignore_boards'] = '勾选这个功能会允许会员选择他们想忽视的版块。';
$helptxt['deny_boards_access'] = '勾选此设置将允许您根据成员组访问权限拒绝某些看板';

// argument(s): scripturl
$helptxt['who_enabled'] = 'This setting allows you to turn on or off the <a href="%1$s?action=who" target="_blank" rel="noopener">Who\'s Online</a> page, which shows who is browsing the forum and what they are doing.';

$helptxt['recycle_enable'] = ' 将 &quot;回收帖子&quot; 移到到选择的版块.';

$helptxt['enableReportPM'] = '这可以让您的会员检举不当的私人讯息。';
$helptxt['max_pm_recipients'] = '这个选项可以让您设定每个会员最多一次能够寄件给多少会员。这是为了避免私人讯息的系统被滥用。记得如果会员能够寄送新闻信件，他们不会被这个设定限制。设定 0 如果不限制收件者的上限。';
$helptxt['pm_posts_verification'] = '这个设定会强制会员在传送私人讯息时输入验证码。只有帖子少于某数量的会员需要输入验证码 - 这可以用来防止自动的垃圾攻击。';
$helptxt['pm_posts_per_hour'] = '这个设定会限制会员在一个小时内传送的私人讯息数量，但不限于管理员和版主。';

$helptxt['default_personal_text'] = '设定新会员默认的 &quot;个人讯息&quot;。';

$helptxt['registration_method'] = '您可以设定哪种会员注册的方法, 您可以选择:<br /><br />
	<ul>
		<li>
			<strong>禁止注册:</strong><br />
				禁止新会员注册.<br />
		</li><li>
			<strong>马上注册</strong><br />
				新注册会员可马上发布帖子.<br />
		</li><li>
			<strong>启用帐号</strong><br />
				新注册用户会收到论坛的启用邮件, 用户必须启用帐号才可成为会员.<br />
		</li><li>
			<strong>核准帐号</strong><br />
				新注册用户必须等管理员核准才可成为会员.
		</li>
	</ul>';

$helptxt['send_validation_onChange'] = '当使用这项功能时, 改变电子邮件的会员必须重新启用帐号';
$helptxt['approveAccountDeletion'] = '当选中此设置时，任何用户请求删除他自己的帐户必须经管理员批准';

$helptxt['send_welcomeEmail'] = '当使用这项功能时, 新注册会员会收到欢迎信件';
$helptxt['password_strength'] = '这个设定可以让您使用不同的密码困难度。越困难的密码表示越难被骇。
	可用的设定是：
	<ul>
		<li><strong>低：</strong> 密码必须多于 4 个字元。</li>
		<li><strong>中：</strong> 密码必须多于 8 个字元，不能包括会员名称和电子邮件。</li>
		<li><strong>高：</strong> 跟中相同，但是密码必须有大小写的字母和至少一个数字。</li>
	</ul>';
$helptxt['enable_password_conversion'] = '启用此设置，SMF将尝试检测以其他格式存储的密码并将其转换为SMF格式的格式。 这通常用于转换为 SMF 的论坛，但也可能有其他用途。 禁用此功能会阻止用户在转换后使用密码登录，他们需要重置密码。';

$helptxt['coppaAge'] = '这个数值可以让您限制会员的年龄，如果年龄多于设定的年龄，会员可马上登录。
	在注册时会员必须提供年龄，如果年龄太小，您可以选择马上拒绝注册，或等待审核。
	如果输入 0 表示不限制年龄。';
$helptxt['coppaType'] = '如果使用年龄限制的功能，这里的设定可以让您选择对年龄过小的会员所进行的动作，有两个选择：
	<ul>
		<li>
			<strong>马上拒绝注册：</strong><br />
				年龄太小会马上被拒绝注册。<br />
		</li><li>
			<strong>需要监护人认可</strong><br />
				任何年龄太小的会员需要监护人的认可才能注册，注册会标示为等待认可。之后论坛会显示认可的表单。
				会员必须请监护人认可后将表单寄回或传真给管理员。
		</li>
	</ul>';
$helptxt['coppaPost'] = '这里的栏位必须填写如果论坛有限制会员的年龄。资料会显示给年龄过小的会员，会员必须要监护人的认可才能注册完成。至少需要提供地址或传真号码的资料。';

$helptxt['allow_hideOnline'] = '允许使用此项功能可让会员隐藏自己, 只有管理员才能看到他们. 如果不允许, 只有版主才能隐藏上线资料.';
$helptxt['meta_keywords'] = 'These keywords are sent in the output of every page to indicate to search engines (etc) the key content of your site. They should be a comma seperated list of words, and should not use HTML. If this is left blank the default set is sent. As means of an example the default set is:<br /><div class="smalltext">&quot;PHP, MySQL, bulletin, board, free, open, source, smf, simple, machines, forum&quot;</div>';

$helptxt['latest_themes'] = '这里会显示 <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> 的最新及最受欢迎的布景. 如果未显示任何东西表示您无法连接到 <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = '因为安全问题, 您问题的答案 (以及密码) 都是用 SMF 的方法来加密. SMF 有办法确认您的身分如果您提供正确的答案, 但是从不会显示您的答案或密码.';
$helptxt['moderator_why_missing'] = '您必须在 <a href="javascript:window.open(\'%1$s?action=manageboards\'); self.close();">版块管理介面</a> 选择版主。';

$helptxt['permissions'] = '权限页面允许你设定组群所能做的事.<br /><br />你可以从选单来更改权限, 然后套用到版块.';
$helptxt['permissions_board'] = '如果版块的设定值是 \'全区性,\' 表示这个版块无特别的权限.  \'区域性\' 表示版块有自己的权限 - 跟全区性不同. 如果有些版块的权限跟别区不同, 您可以用区域性设定, 这样您就不用一个版块一个版块设定.';
$helptxt['permissions_quickgroups'] = '您可以用 &quot;默认&quot; 权限 - 普通表示 \'无特别权限\', 限制表示 \'访客的权限\', 版主表示 \'版主的权限\', 及 \'维修权限\' 表示跟版主接近的权限.';
$helptxt['permissions_deny'] = '停用的权限会让会员无法使用某种功能。您可以新增一个群组，给它停用的权限，然后把将会员加入到那个群组。<br /><br />记住，停用的权限会完全禁止会员使用某种功能，不管会员是不是属于其它的群组。';
$helptxt['permissions_postgroups'] = '开启依帖子数的群组可以让您依照会员的帖子数来改变会员的权限。帖子数的权限会 <em>加在</em> 特殊群组的权限内。';
$helptxt['membergroup_guests'] = '访客的群组是任何未登录的使用者。';
$helptxt['membergroup_regular_members'] = '普通会员是已登录的会员，但是不属于任何特殊群组。';
$helptxt['membergroup_administrator'] = '管理员可以管理任何版块和任何设定。您不能改变管理员的权限。';
$helptxt['membergroup_moderator'] = '版主的群组是特殊群组。它的权限只有在<em>版主可管理的版块才有效</em>。在其他版块就跟其他会员相同。';
$helptxt['membergroups'] = 'In SMF there are two types of groups that your members can be part of. These are:
	<ul class="normallist">
		<li><strong>Regular Groups:</strong> A regular group is a group in which members are not automatically placed. To assign a member to be in a group simply go to their profile and click &quot;Account Settings&quot;. From here you can assign them any number of regular groups to which they will be part.</li>
		<li><strong>Post Groups:</strong> Unlike regular groups post based groups cannot be assigned. Instead, members are automatically assigned to a post based group when they reach the minimum number of posts required to be in that group.</li>
	</ul>';

$helptxt['calendar_how_edit'] = '您可以点名称旁的红色 (*) 来修改事件.';

$helptxt['maintenance_backup'] = '这里您可以备份帖子, 设定, 会员资料, 及其他消息.<br /><br />建议您作好防御措施, 要时常备份以免无法修复论坛的错误.';
$helptxt['maintenance_rot'] = '这个功能会<strong>完全地</strong>并且<strong>无法回复地</strong>移除旧的主题。强烈建议您执行之前先备份, 以防止您移除您想保留的帖子。<br /><br />使用这个功能必须谨慎小心。';
$helptxt['maintenance_members'] = 'This allows you to <strong>completely</strong> and <strong>irrevocably</strong> remove member accounts from your forum.  It is <strong>highly</strong> recommended that you try to make a backup first, just in case you remove something you didn\'t mean to.<br /><br />Use this option with care.';

$helptxt['avatar_server_stored'] = 'This allows your members to pick from avatars stored on your server itself. By default they are stored in the "avatars" directory.<br>As a tip, if you create directories in that folder, you can make "categories" of avatars.';
$helptxt['avatar_external'] = 'With this enabled, your members can type in a URL to their own avatar.  The downside of this is that, in some cases, they may use avatars that are overly large or portray images you don\'t want on your forum.';
$helptxt['avatar_download_external'] = 'With this setting enabled, external avatars will be downloaded from the URLs given by the users. On success, the avatars will be treated like uploaded avatars.';
$helptxt['avatar_action_too_large'] = 'This setting lets you reject images (from other sites) that are too big, or tells the user\'s browser to resize them, or to download them to your server.<br><br>If users put in very large images as their avatars and resize in the browser, it could cause very slow loading for your users - it does not actually resize the file, it just displays it smaller. So a digital photo, for example, would still be loaded in full and then resized only when displayed - so for users this could get quite slow and use a lot of bandwidth.<br><br>On the other hand, downloading them means using your bandwidth and server space, but you also ensure that images are smaller, so it should be faster for users. (Note: downloading and resizing requires either the GD library, or ImageMagick using either the Imagick or MagickWand extensions)';
$helptxt['avatar_upload'] = 'This setting is much like &quot;external avatars&quot;, except that you have better control over the avatars, a better time resizing them, and your members do not have to have somewhere to put avatars.<br><br>However, the downside is that it can take a lot of space on your server.';
$helptxt['avatar_download_png'] = 'PNGs 档通常较大, 但是压缩品质较好. 如果您不允许 PNG 档, 图档会使用 JPEG. JPEG 档较小但是品质较差.';

$helptxt['disableHostnameLookup'] = '这项禁止使用搜索服务器名称, 但是有些伺服器会变慢. 可能会让您禁止用户的方法较无作用.';

$helptxt['smiley_sameall'] = 'If checking "Same image for all sets", the same image will be added to all your smiley sets. If you uncheck the box, a different image can be uploaded for every installed smiley set. Note that an image needs to be provided for every smiley set.';

$helptxt['search_weight_frequency'] = '搜寻重量是用来决定适当的搜寻结果。您可以对符合论坛的重要性来改变这些重量。例如一个新闻的论坛，较高的 \'最后一篇帖子的日期\' 的数值会比较好。全部的数值必须是正数。<br /><br />这个重量会计算符合的帖子的数量，然后除于主题内的帖子数。';
$helptxt['search_weight_age'] = '搜寻重量是用来决定适当的搜寻结果。您可以对符合论坛的重要性来改变这些重量。例如一个新闻的论坛，较高的 \'最后一篇帖子的日期\' 的数值会比较好。全部的数值必须是正数。<br /><br />这个重量会找主题内最后一篇帖子的日期。越新的日期，分数越高。';
$helptxt['search_weight_length'] = '搜寻重量是用来决定适当的搜寻结果。您可以对符合论坛的重要性来改变这些重量。例如一个新闻的论坛，较高的 \'最后一篇帖子的日期\' 的数值会比较好。全部的数值必须是正数。<br /><br />这个重量会计算主题的帖子数量。越多帖子的主题，分数越高。';
$helptxt['search_weight_subject'] = '搜寻重量是用来决定适当的搜寻结果。您可以对符合论坛的重要性来改变这些重量。例如一个新闻的论坛，较高的 \'最后一篇帖子的日期\' 的数值会比较好。全部的数值必须是正数。<br /><br />这个重量会在主题的标题内找搜寻字。';
$helptxt['search_weight_first_message'] = '搜寻重量是用来决定适当的搜寻结果。您可以对符合论坛的重要性来改变这些重量。例如一个新闻的论坛，较高的 \'最后一篇帖子的日期\' 的数值会比较好。全部的数值必须是正数。<br /><br />这个重量会在主题内的第一篇帖子内找搜寻字。';
$helptxt['search_weight_sticky'] = '搜寻重量是用来决定适当的搜寻结果。您可以对符合论坛的重要性来改变这些重量。例如一个新闻的论坛，较高的 \'最后一篇帖子的日期\' 的数值会比较好。全部的数值必须是正数。<br /><br />这个重量会看主题是不是顶置主题，如果是，它的分数越高。';
$helptxt['search'] = '这里可以改变搜寻功能的设定。';
$helptxt['search_why_use_index'] = 'A search index can greatly improve the performance of searches on your forum. Especially when the number of messages on a forum grows bigger, searching without an index can take a long time and increase the pressure on your database. If your forum is bigger than 50.000 messages, you might want to consider creating a search index to assure peak performance of your forum.<br><br>Note that a search index can take up quite some space. A fulltext index is a built-in index of MySQL and PostgreSQL. It\'s relatively compact (approximately the same size as the message table), but a lot of words aren\'t indexed and it can, in some search queries, turn out to be very slow. The custom index is often bigger (depending on your configuration it can be up to 3 times the size of the messages table) but it\'s performance is better than fulltext and relatively stable.';

$helptxt['see_admin_ip'] = 'IP位址可让版主追踪会员的动作, 但是有些IP经常改变. 会员也可以看到自己的IP.';
$helptxt['see_member_ip'] = '只有会员自己和版主可以看到IP. 其他的会员无法看到您的IP, 您也不能看到其他会员的IP, 除非您是管理员.';
$helptxt['whytwoip'] = 'SMF uses various methods to detect user IP addresses. Usually these two methods result in the same address but in some cases more than one address may be detected. In this case SMF logs the two most recent addresses, and uses them both for ban checks (etc). You can click on either address to track that IP and ban if necessary.';

$helptxt['ban_cannot_post'] = '\'不能发布\' 的限制会禁止被阻挡的会员进行发言。他们将不能发布主题，回覆帖子，寄送私人讯息或参与投票。不过他们还是可以阅读私人讯息和帖子。<br /><br />论坛会显示警告讯息给这些会员。';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<strong>帖子设定</strong><br />
			改变发布帖子和显示帖子的设定。这里也可以让您开启拼字功能。
		</li><li>
			<strong>Bulletin Board Code</strong><br />
			开启 BBC 的功能。也可以选择允许和不允许的 BBC。
		</li><li>
			<strong>封锁的字元</strong>
			为了避免论坛出现不正当的发言，您可以将某些字封锁不让会员使用。这个功能可以让您将封锁的字改成其它的显示方法。
		</li><li>
			<strong>主题设定</strong>
			改变主题的设定。您可以改变每页显示的主题数，使用顶至主题，或是热门主题的数量等等。
		</li>
	</ul>';

$helptxt['spider_mode'] = 'Sets the logging level.<br>
Standard - Logs minimal spider activity.<br>
Moderate - Provides more accurate statistics.<br>
Aggressive - Same as &quot;Moderate&quot;, but logs data about each page visited.';

$helptxt['spider_group'] = 'By selecting a restrictive group, when a guest is detected as a search crawler it will automatically be assigned any &quot;deny&quot; permissions of this group in addition to the normal permissions of a guest. You can use this to provide lesser access to a search engine than you would a normal guest. You might for example wish to create a new group called &quot;Spiders&quot; and select that here. You could then deny permission for that group to view profiles to stop spiders indexing your members profiles.<br>Note: Spider detection is not perfect and can be simulated by users so this feature is not guaranteed to restrict content only to those search engines you have added.';
$helptxt['show_spider_online'] = 'This setting allows you to select whether spiders should be listed in the who\'s online list on the board index and &quot;Who\'s Online&quot; page. Options are:
	<ul class="normallist">
		<li>
			<strong>Not at All</strong><br />
			Spiders will simply appear as guests to all users.
		</li><li>
			<strong>Show Spider Quantity</strong><br />
			The Board Index will display the number of spiders currently visiting the forum.
		</li><li>
			<strong>Show Spider Names</strong><br />
			Each spider name will be revealed, so users can see how many of each spider is currently visiting the forum - this takes effect in both the Board Index and Who\'s Online page.
		</li><li>
			<strong>Show Spider Names - Admin Only</strong><br />
			As above except only Administrators can see spider status - to all other users spiders appear as guests.
		</li>
	</ul>';

$helptxt['birthday_email'] = 'Choose the index of the birthday email message to use.  A preview will be shown in the Email Subject and Email Body fields.<br /><strong>Note:</strong> Setting this option does not automatically enable birthday emails.  To enable birthday emails use the <a href="%1$s?action=admin;area=maintain;sa=tasks;%3$s=%2$s" target="_blank" class="new_win">Scheduled Tasks</a> page and enable the birthday email task.';
$helptxt['pm_bcc'] = 'When sending a personal message you can choose to add a recipient as BCC or &quot;Blind Carbon Copy&quot;. BCC recipients do not have their identities revealed to other recipients of the message.';

$helptxt['move_topics_maintenance'] = '这将允许您将所有帖子从一个面板移动到另一个面板。';
$helptxt['maintain_reattribute_posts'] = '您可以使用此函数将您的看板上的访客帖子赋予注册会员。 例如，如果这样做是有用的 一个用户删除了他们的帐户，改变了他们的心态，希望他们的旧帖子与他们的帐户相关联。';
$helptxt['chmod_flags'] = '您可以手动设置所选文件的权限。 要做到这一点，请输入chmod 值作为数字(octet)值。 注意：这些标志将不会影响微软Windows操作系统。';

$helptxt['postmod'] = 'This section allows members of the moderation team (with sufficient permissions) to approve any posts and topics before they are shown.';

$helptxt['field_show_enclosed'] = 'Encloses the user input between some text or html. This will allow you to add more instant message providers, images or an embed etc. For example:<br><br>
		&lt;a href="https://example.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.png" alt="{INPUT}" /&gt;&lt;/a&gt;<br><br>
		Note that you can use the following variables:<br>
		<ul class="normallist">
			<li>{INPUT} - The input specified by the user.</li>
			<li>{SCRIPTURL} - Web address of forum.</li>
			<li>{IMAGES_URL} - URL to images directory in the users current theme.</li>
			<li>{DEFAULT_IMAGES_URL} - URL to the images directory in the default theme.</li>
			<li>{KEY} - Used when a field has multiple options, is the unique numeric ID used to identify it.</li>
		</ul>';

$helptxt['custom_mask'] = '输入遮罩对于论坛的安全性很重要。验证会员输入的内容, 以确保是合法字串。下面是正规表式的简单说明。<br /><br />
	<div class="smalltext" style="margin: 0 2em">
		&quot;[A-Za-z]+&quot; - Match all upper and lower case alphabet characters.<br />
		&quot;[0-9]+&quot; - Match all numeric characters.<br />
		&quot;[A-Za-z0-9]{7}&quot; - Match all upper and lower case alphabet and numeric characters seven times.<br />
		&quot;[^0-9]?&quot; - Forbid any number from being matched.<br />
		&quot;^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$&quot; - Only allow 3 or 6 character hexcodes.<br />
	</div><br /><br />
	Additionally, special metacharacters ?+*^$ and {xx} can be defined.
	<div class="smalltext" style="margin: 0 2em">
		? - None or one match of previous expression.<br />
		+ - One or more of previous expression.<br />
		* - None or more of previous expression.<br />
		{xx} - An exact number from previous expression.<br />
		{xx,} - An exact number or more from previous expression.<br />
		{,xx} - An exact number or less from previous expression.<br />
		{xx,yy} - An exact match between the two numbers from previous expression.<br />
		^ - Start of string.<br />
		$ - End of string.<br />
		\\\\ - Escapes the next character.<br />
	</div><br /><br />
	更多资讯和技巧可以在网路上找得到。';

$helptxt['topic_move_any'] = '如果选中，用户将被允许将主题移动到他们可以看到的任何板上。 否则，他们只能将他们移到董事会，以便能够张贴新的主题。';

$helptxt['alert_pm_new'] = '新的个人消息通知不会出现在警报窗格中，而是出现在“我的消息”列表中。';
$helptxt['alert_event_new'] = '如果添加了一个新的日历事件，这将根据请求发送警告或电子邮件。 然而，如果该事件被张贴并添加一个话题， 如果您已经跟随了该棋盘，您将不会收到事件的提醒 - 从关注棋盘中发出的警告将涵盖这个问题。';

$helptxt['force_ssl'] = '<strong>Test SSL and HTTPS on your server properly before enabling this, it may cause your forum to become inaccessible.</strong> Enable maintenance mode if you are unable to access the forum after enabling this.<br><br><strong>Changing this setting will update your forum\'s primary URL, as well as the URLs for your theme files and images, smileys, and avatars, setting them to either http: or https: based on your selection. Customized URLs will not be affected.</strong>';
$helptxt['image_proxy_enabled'] = '在完整的 SSL 时嵌入外部图像需要';
$helptxt['image_proxy_secret'] = '将此设置为秘密，保护您的论坛免受热链接图片的伤害。更改它以使当前热链接的图像变得毫无用处。';
$helptxt['image_proxy_maxsize'] = 'SSL 图像代理缓存的最大图像大小：较大的图像将不被缓存。 缓存图像存储在您的 SMF 缓存文件夹中，所以请确保您有足够的可用空间。';

$helptxt['enable_sm_stats'] = 'If enabled, this will allow Simple Machines to visit your site once a month to collect basic statistics. This will help us make decisions as to which configurations to optimize the software for. For more information please visit our <a href="https://www.simplemachines.org/about/stats.php" target="_blank" rel="noopener">info page</a>.';

$helptxt['field_reg_require'] = 'If this field is required during registration, it will also be required on profile changes.';

$helptxt['translatable_fields'] = 'If you wish to provide multi-language support for your custom profile fields you can use translatable tokens on both the name and description fields.<br><br>
Anything enclosed with braces <span class="monospace">{}</span> will be considered as a token and will be matched against a $txt string. For example, the token <span class="monospace">{gender}</span> will be replaced by the value of $txt[\'gender\']<br><br>
It is <strong>very important</strong> to add the matched $txt string to <strong>ALL</strong> currently installed languages. To do this, go to the <a href="%1$s?action=admin;area=languages;sa=edit;%3$s=%2$s" class="bbc_link" target="_blank" rel="noopener">Edit Languages</a> page and complete the following steps for each installed language:
<ol class="bbc_list" style="list-style-type: decimal">
	<li>Click the "Edit" button next to the language name.</li>
	<li>In the "Select entries to edit" menu, choose "Modifications".</li>
	<li>Scroll to bottom and click the "Add Another Item" button.</li>
	<li>Follow the prompts to add your new string.</li>
</ol>';

// argument(s): $boarddir, $boardurl
$helptxt['cron_is_real_cron'] = 'By default, SMF adds to every page a small bit of JavaScript that prompts the user\'s browser to trigger SMF\'s cron.php in the background. This approach allows SMF to execute its scheduled tasks on a regular basis without requiring the admin to do any extra server configuration. However, some admins might prefer to configure their servers to directly execute cron.php on a regular basis. If you have done this, you can disable the JavaScript method.<br><br><strong>Note:</strong> Configuring your server to run scheduled tasks this way cannot be done from within SMF. You will need to use your server configuration software to do so. Typical tools for this purpose include <code>cron</code> (for Linux servers), <code>schtasks.exe</code> (for Windows servers), and <code>launchd</code> (for macOS servers). Most web hosting companies provide some sort of control panel interface to allow their customers to access these tools.<br><br>The path and URL for your forum\'s cron.php are:<br>Path: %1$s/cron.php<br>URL: %2$s/cron.php';

$helptxt['languages_txt'] = 'These language entries are used throughout SMF to define localized versions of text for different languages.<br><br>If you see a value like <code>&#37;1$s</code> in an entry, it is a placeholder that SMF fills in with a real value at runtime. Make sure to keep such placeholders in your customized text.';
$helptxt['languages_helptxt'] = 'These language entries are used to show floating help text popups (like this one).';
$helptxt['languages_editortxt'] = 'These language entries are used for user interface elements in the post editor.';
$helptxt['languages_tztxt'] = 'These language entries are used to build descriptions for time zones.<br><br>For example, the <code>Europe_Western</code> string may be combined with the <code>daylight_saving_time_false</code> string to produce "Western European Standard Time".<br><br>Note: If no description is provided for a given time zone, SMF will generate a description using a list of locations within that time zone.';
$helptxt['languages_txt_for_timezones'] = 'These language entries allow you to do the following:<br><ol class="bbc_list" style="list-style-type: decimal;"><li>Edit the names shown for individual locations anywhere they might be used in a context related to time zones. For example, you can tell SMF to show "Qaanaaq" for the location "America/Thule" instead of "Thule".</li><li>Edit the names shown for different countries. This can be done by editing the relevant <code>iso3166[]</code> string.</li></ol>';
$helptxt['languages_txt_for_email_templates'] = 'These language entries are used to create the email messages that SMF sends to your members.';
$helptxt['languages_native_name'] = 'The language\'s name for itself, represented in its own script.';
$helptxt['languages_character_set'] = 'The character encoding used for this language. As of SMF 2.1, this should always be "UTF-8".';
$helptxt['languages_locale'] = 'The locale code is used to determine various formatting conventions, etc.<br><br>The locale code typically takes the form of a two character language code, optionally followed by an underscore and a two character country code. For example, <code>en</code> would identify generic English, while <code>en_AU</code> would identify Australian English in particular.';
$helptxt['languages_rtl'] = 'Enter a "1" here if this language reads from right to left (e.g. Hebrew, Arabic).  Leave it "0" for left to right languages.';
$helptxt['languages_dictionary'] = 'This defines the main language dictionary that will be used by the <a href="https://php.net/function.pspell-new" target="_blank" rel="noopener">pSpell</a> spellchecker (if installed).';
$helptxt['languages_recaptcha'] = 'The language code to use for the reCAPTCHA verification widget.<br><br>See Google\'s reCAPTCHA documentation for its <a href="https://developers.google.com/recaptcha/docs/language" target="_blank" rel="noopener" class="bbc_link">list of supported languages</a>.';
// The GDPR page of the EU exists in several languages; change the language code at the end of the url
$helptxt['requireAgreement'] = 'This setting is recommended to be enabled in order to comply with the rules of the <a href="https://ec.europa.eu/info/law/law-topic/data-protection/eu-data-protection-rules_en" target="_blank" rel="noopener" class="bbc_link">GDPR</a>.';
// The GDPR page of the EU exists in several languages; change the language code at the end of the url
$helptxt['requirePolicyAgreement'] = 'This setting is recommended to be enabled in order to comply with the rules of the <a href="https://ec.europa.eu/info/law/law-topic/data-protection/eu-data-protection-rules_en" target="_blank" rel="noopener" class="bbc_link">GDPR</a>.';
$helptxt['gravatar'] = 'Gravatar is Globally Recognized Avatars. Register an account at <a href="https://www.gravatar.com" target="_blank" rel="noopener">https://www.gravatar.com</a> to select an avatar image. This avatar is then available at every site that supports gravatars. If you don\'t have a gravatar account, a default image will be used.';

?>