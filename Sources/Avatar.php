<?php
function getAvatar(){
    global $memberContext;
    $userId = $_GET['id_member'];
    loadMemberData($userId);
    loadMemberContext($userId,true);
    echo json_encode($memberContext[$userId]['avatar']);die;
}
//function acode(){
//    global $smcFunc;
//    $request = $smcFunc['db_query']('', '
//			SELECT  sou.id as id,sou.amount,sou.create_at, mem.member_name
//			FROM {db_prefix}emerit_logs AS sou
//				INNER JOIN {db_prefix}members AS mem ON (sou.id_member = mem.id_member) ORDER BY id DESC LIMIT {int:start}, {int:max}',
//        array(
//            'start' => $limit,
//            'max' => $modSettings['defaultMaxMembers'],
//        )
//    );
//    while ($row = $smcFunc['db_fetch_assoc']($request)) {
//        $context['users'][] = $row;
//    }
//}
function imRegister(){
    global  $modSettings, $sourcedir,$apiKey;
    require_once($sourcedir . '/Load.php');
    global $smcFunc;
    require_once($sourcedir . '/Subs-Members.php');
    require_once($sourcedir . '/Subs.php');
    require_once($sourcedir . '/Security.php');
    require_once($sourcedir . '/Logging.php');
    require_once($sourcedir . '/Errors.php');
    loadDatabase();
    reloadSettings();
    $user = $_POST['username'];
    $password = $_POST['password'];
    $realName= $_POST['realName'];
    $sendKey = $_POST['key'];
    if ($sendKey != $apiKey){
        echo json_encode(['status'=>1,'msg'=>'key error','account'=>$user]) ;die;
    }
    $invitation = $_POST['invitation'];
    $request = $smcFunc['db_query']('', '
				SELECT *
				FROM {db_prefix}invitation_code  WHERE code = {string:code} LIMIT 1',
        array(
            'code' => $invitation,
        )
    );

    $result = $smcFunc['db_fetch_assoc']($request);
    $codeUserId = $result['created_user'];
    $codeId = $result['id'];
    if (empty($invitation) || empty($result)){
        echo json_encode(['status'=>1,'msg'=>'邀请码错误','account'=>$user]) ;die;
    }
    if ($result['used_user'] != 0) {
        echo json_encode(['status'=>1,'msg'=>'邀请码已经被使用','account'=>$user]) ;die;
    }
    if ($result['expire_time'] < time()) {
        echo json_encode(['status'=>1,'msg'=>'邀请码已过期','account'=>$user]) ;die;
    }
    $code = createInvitationCode();
    $regOptions = array(
        'interface' => 'guest',
        'username' => $user,
        'real_name' => $realName,
        'parent_id' => $codeUserId,
        'password' => $password,
        'code'=>$code,
        'password_check' => '',
        'check_reserved_name' => true,
        'check_password_strength' => true,
        'check_email_ban' => true,
        'send_welcome_email' => false,
        'require' => 'nothing',
        'extra_register_vars' => array(),
        'theme_vars' => array(),
    );
    $request = $smcFunc['db_query']('', '
		SELECT id_member
		FROM {db_prefix}members
		WHERE member_name = {string:username}

		LIMIT 1',
        array(
            'username' => $user,
        )
    );
    // @todo Separate the sprintf?
    if ($smcFunc['db_num_rows']($request) != 0){
        echo json_encode(['status'=>1,'msg'=>'exists','account'=>$user]) ;
    }
    $memberID = registerMember($regOptions, true,true);
    if (!is_array($memberID)) {
        $smcFunc['db_query']('', '
					UPDATE {db_prefix}invitation_code
					SET used_user = {int:user},
					used_time = {int:time}
					WHERE id = {int:id}',
            array(
                'user' =>$memberID,
                'id' => $codeId,
                'time'=>time()
            )
        );
        echo json_encode(['status'=>0,'msg'=>'Ok','account'=>$user]);
    }else{
        echo json_encode( ['status'=>1,'msg'=>$memberID,'account'=>$user]);
    }
    die;
}
