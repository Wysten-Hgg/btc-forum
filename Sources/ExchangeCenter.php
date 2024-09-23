<?php
function flmExChangeCenter(){
    global $scripturl, $context,$smcFunc,$user_info,$modSettings;
    $context['post_url'] = $scripturl . '?action=profile;area=flmchange;save';
    $context['address_url'] = $scripturl . '?action=profile;area=flmchange;address';
    $request = $smcFunc['db_query']('', '
                    SELECT  flm
                    FROM {db_prefix}property
                    WHERE id_member = {int:id_member}
                    LIMIT 1',
        array(
            'id_member' => $user_info['id'],
        )
    );
    $userProperty = $smcFunc['db_fetch_assoc']($request);
    $flmAmount = $userProperty['flm'];
    $request = $smcFunc['db_query']('', '
                    SELECT  min,max
                    FROM {db_prefix}exchange_limit
                    WHERE property = {string:property}
                    LIMIT 1',
        array(
            'property' => 'flm',
        )
    );
    $pool = $smcFunc['db_fetch_assoc']($request);
    $context['min'] = $pool['min'] ?? 0;
    $context['max'] = $pool['max']  ?? 0;
    $context['flm']=$flmAmount;
    $context['address']=$user_info['address'];
    $request = $smcFunc['db_query']('', '
                    SELECT *
                    FROM {db_prefix}fcp_config
                 ',
    );
    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['tokens'][] = $row;
    }
    if (isset($_SESSION['adm-save']))
    {
        if ($_SESSION['adm-save'] === true)
            $context['saved_successful'] = true;
        else
            $context['saved_failed'] = $_SESSION['adm-save'];

        unset($_SESSION['adm-save']);
    }
    if(isset($_GET['address'])){
        $address = $_POST['address'];
        if (!empty($address)){
            $smcFunc['db_query']('', '
					UPDATE {db_prefix}members
					SET address = {string:address}
					WHERE id_member = {int:id}',
                array(
                    'address' =>$address,
                    'id' => $user_info['id']
                )
            );
        }
        $_SESSION['adm-save'] = true;
        redirectexit('action=profile;area=flmchange;u='.$user_info['id']);
    }
    if (isset($_GET['save']))
    {
//        checkSession();
        $amount = $_POST['amount'];
        $select = $_POST['select'];
        $request = $smcFunc['db_query']('', '
                    SELECT  *
                    FROM {db_prefix}fcp_config
                    WHERE id = {int:id}
                    LIMIT 1',
            array(
                'id' => $select,
            )
        );
        $config = $smcFunc['db_fetch_assoc']($request);
        if (empty($select) || empty($config)){
            fatal_error('Please select the token that needs to be redeemed');
        }
        greaterThan($amount,0);
        if ($flmAmount < $amount) {
            fatal_error('Insufficient FCP quantity');
        }
        if ($amount < $context['min'] || $amount > $context['max']) {
            fatal_error("The number of applications does not meet the requirements.Min:{$context['min']},Max:{$context['max']}");
        }
        $request = $smcFunc['db_query']('', '
			SELECT COUNT(*)
			FROM {db_prefix}apply_withdraw WHERE type = {string:type}',
            array(
                'type' => 'flm',
            )
        );
        list ($count) = $smcFunc['db_fetch_row']($request);
        $realmAmount = round($amount / 2  * $config['radio'] ?? 1 ,2);
        $smcFunc['db_insert']('',
            '{db_prefix}apply_withdraw',
            array(
                'id_member' => 'int',
                'amount' => 'int',
                'type' => 'string',
                'create_at' => 'int',
                'order_id' => 'int',
                'token_id' => 'int',
                'address' => 'string',
                'real_amount'=>'string'
            ),
            [$user_info['id'],$amount,'flm',time(),$count + 1,$select,$user_info['address'],$realmAmount],
            array()
        );
        $smcFunc['db_query']('', '
					UPDATE {db_prefix}property
					SET flm = {int:flm}
					WHERE id_member = {int:id}',
            array(
                'flm' => $flmAmount - $amount,
                'id' => $user_info['id']
            )
        );

        $_SESSION['adm-save'] = true;
        redirectexit('action=profile;area=flmchange;u='.$user_info['id']);
    }
    $request = $smcFunc['db_query']('', '
			SELECT COUNT(*)
			FROM {db_prefix}apply_withdraw WHERE type = {string:type} AND id_member = {int:id}',
        array(
            'id' => $user_info['id'],
            'type' => 'flm',
        )
    );
    list ($context['num_members']) = $smcFunc['db_fetch_row']($request);
    $smcFunc['db_free_result']($request);
    $_REQUEST['start'] =  $_REQUEST['start']  ?? 0;
    $context['page_index'] = constructPageIndex($scripturl . '?action=flm;sa=sflmtransfer', $_REQUEST['start'], $context['num_members'], $modSettings['defaultMaxMembers']);
    $limit = $_REQUEST['start'];
    $context['start'] = $_REQUEST['start'];
    // member-lists
    $request = $smcFunc['db_query']('', '
				SELECT   a.*,mem.token
			FROM {db_prefix}apply_withdraw as a LEFT JOIN {db_prefix}fcp_config AS mem ON (a.token_id = mem.id)  WHERE type = {string:type} AND a.id_member = {int:id} ORDER BY id DESC LIMIT {int:start}, {int:max}',
        array(
            'id' => $user_info['id'],
            'type' => 'flm',
            'start' => $limit,
            'max' => $modSettings['defaultMaxMembers'],
        )
    );
    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['users'][] = $row;
    }
}
function xpExChangeCenter(){
    global $scripturl, $context,$smcFunc,$user_info,$modSettings;
    $context['post_url'] = $scripturl . '?action=profile;area=xpchange;save';
    $request = $smcFunc['db_query']('', '
			SELECT  id,pause,min,max,radio
			FROM {db_prefix}zealy_config
			WHERE id = {int:id}
			LIMIT 1',
        array(
            'id' => 1
        )
    );
    $result = $smcFunc['db_fetch_assoc']($request);
    $smcFunc['db_free_result']($request);
    $context['min'] = $result['min'] ?? 0;
    $context['max'] = $result['max'] ?? 0;
    $context['radio'] = $result['radio'] ?? 0;
    $request = $smcFunc['db_query']('', '
			SELECT  SUM(amount) as amount
			FROM {db_prefix}apply_withdraw
			WHERE id_member = {int:id_member} AND type = {string:type} AND state != {int:state}
			LIMIT 1',
        array(
            'id_member' => $user_info['id'],
            'type' => 'xp',
            'state' => 2
        )
    );
    $result = $smcFunc['db_fetch_assoc']($request);
    $smcFunc['db_free_result']($request);
    $context['apply_amount'] = $result['amount'] ?? 0;
//    $ret  = curlGet("https://api.zealy.io/communities/{$zealySubdomain}/users?",['ethAddress'=>$user_info['address']],["x-api-key:{$zealyUserApiKey}"]);
//    $xpAmount = 0;
//    $ret = json_decode($ret,1);
//    if (isset($ret['xp'])) {
////        $xpAmount = 100;
//        $xpAmount = $ret['xp'];
//    }
    $xpAmount = getUserXP();
    $context['xpAmount'] = $xpAmount;
    if (isset($_SESSION['adm-save']))
    {
        if ($_SESSION['adm-save'] === true)
            $context['saved_successful'] = true;
        else
            $context['saved_failed'] = $_SESSION['adm-save'];

        unset($_SESSION['adm-save']);
    }
    if (isset($_GET['save']))
    {
//        checkSession();
        $amount = $_POST['amount'];
        greaterThan($amount,0);

        if ($xpAmount - $context['apply_amount'] < $amount) {
            fatal_error('Insufficient XP quantity');
        }
        if ($amount < $context['min'] || $amount > $context['max']) {
            fatal_error("The number of applications does not meet the requirements.Min:{$context['min']},Max:{$context['max']}");
        }
        if ($amount % $context['radio'] !=0 ) {
            fatal_error('Please enter an integer multiple of '.$context['radio']);
        }
        $request = $smcFunc['db_query']('', '
			SELECT COUNT(*)
			FROM {db_prefix}apply_withdraw WHERE type = {string:type}',
            array(
                'type' => 'xp',
            )
        );
        list ($count) = $smcFunc['db_fetch_row']($request);
        $smcFunc['db_insert']('',
            '{db_prefix}apply_withdraw',
            array(
                'id_member' => 'int',
                'amount' => 'int',
                'type' => 'string',
                'create_at' => 'int',
                'real_amount' => 'int',
                'order_id' => 'int'
            ),
            [$user_info['id'],$amount,'xp',time(),$amount / $context['radio'],$count + 1],
            array()
        );

        $_SESSION['adm-save'] = true;
        redirectexit('action=profile;area=xpchange;u='.$user_info['id']);
    }
    $request = $smcFunc['db_query']('', '
			SELECT COUNT(*)
			FROM {db_prefix}apply_withdraw WHERE type = {string:type} AND id_member = {int:id}',
        array(
            'id' => $user_info['id'],
            'type' => 'xp',
        )
    );
    list ($context['num_members']) = $smcFunc['db_fetch_row']($request);
    $smcFunc['db_free_result']($request);
    $_REQUEST['start'] =  $_REQUEST['start']  ?? 0;
    $context['page_index'] = constructPageIndex($scripturl . '?action=profile;area=xpchange;u='.$user_info['id'], $_REQUEST['start'], $context['num_members'], $modSettings['defaultMaxMembers']);
    $limit = $_REQUEST['start'];
    $context['start'] = $_REQUEST['start'];
    // member-lists
    $request = $smcFunc['db_query']('', '
				SELECT   a.*,mem.address
			FROM {db_prefix}apply_withdraw as a LEFT JOIN {db_prefix}members AS mem ON (a.id_member = mem.id_member)  WHERE type = {string:type} AND a.id_member = {int:id} ORDER BY id DESC LIMIT {int:start}, {int:max}',
        array(
            'id' => $user_info['id'],
            'type' => 'xp',
            'start' => $limit,
            'max' => $modSettings['defaultMaxMembers'],
        )
    );
    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['users'][] = $row;
    }
}
