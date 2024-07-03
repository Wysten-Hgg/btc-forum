<?php
function getAvatar(){
    global $memberContext;
    $userId = $_GET['id_member'];
    loadMemberData($userId);
    loadMemberContext($userId,true);
    echo json_encode($memberContext[$userId]['avatar']);die;
}
function acode(){
    global $smcFunc;
    $request = $smcFunc['db_query']('', '
			SELECT  id_member
			FROM {db_prefix}members 
				where code is null',
//        array(
//            'code' => null,
//        )
    );
    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $smcFunc['db_query']('', '
					UPDATE {db_prefix}members
					SET code = {string:code}
					WHERE id_member = {int:id}',
            array(
                'code' =>createInvitationCode(),
                'id' =>$row['id_member']
            )
        );
    }
    die;
}
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
				FROM {db_prefix}members  WHERE code = {string:code} LIMIT 1',
        array(
            'code' => $invitation,
        )
    );

    $result = $smcFunc['db_fetch_assoc']($request);
//    $codeUserId = $result['created_user'];
//    $codeId = $result['id'];
    if (empty($invitation) || empty($result)){
        echo json_encode(['status'=>1,'msg'=>'邀请码错误','account'=>$user]) ;die;
    }
    $time = time();
    $startTimestamp = strtotime("monday this week", $time);

    // 获取周日的结束时间戳
    $endTimestamp = strtotime("sunday this week", $time) + 86399; // 加上86399秒得到23:59:59

    $userGroupCodePower = [
        9 => 999999,
        10 =>500,
        11=>300,
        12=>200,
        13=>100,
        14=>80,
        15=>50,
        16=>30
    ];
    $idGroup = intval($result['id_group']);
    $allCount = isset($userGroupCodePower[$idGroup]) ? $userGroupCodePower[$idGroup] : 10;
    $request = $smcFunc['db_query']('', '
				SELECT count(*)
				FROM {db_prefix}members  WHERE date_registered >= {int:min} and date_registered <= {int:max} and parent_id = {int:id}',
        array(
            'min' => $startTimestamp,
            'max'=>$endTimestamp,
            'id'=>$result['id_member']
        )
    );

    list($usedCount) =$smcFunc['db_fetch_row']($request);
    $smcFunc['db_free_result']($request);
    if ($usedCount == $allCount){
        echo json_encode(['status'=>1,'msg'=>'本周邀请码次数已被用完','account'=>$user]) ;die;
    }

    $code = createInvitationCode();
    $regOptions = array(
        'interface' => 'guest',
        'username' => $user,
        'real_name' => $realName,
        'parent_id' => $result['id_member'],
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
//        $smcFunc['db_query']('', '
//					UPDATE {db_prefix}invitation_code
//					SET used_user = {int:user},
//					used_time = {int:time}
//					WHERE id = {int:id}',
//            array(
//                'user' =>$memberID,
//                'id' => $codeId,
//                'time'=>time()
//            )
//        );
        echo json_encode(['status'=>0,'msg'=>'Ok','account'=>$user]);
    }else{
        echo json_encode( ['status'=>1,'msg'=>$memberID,'account'=>$user]);
    }
    die;
}
