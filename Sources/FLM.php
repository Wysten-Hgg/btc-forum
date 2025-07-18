<?php

function SetSourceUser() {
    global $scripturl, $context,$smcFunc,$user_info;
    // Make sure they can view the memberlist.
    isAllowedTo(['admin_forum','flm_manage']);

    loadTemplate('FLM');
    $context['post_url'] = $scripturl . '?action=flm;save';
    $context['delete_url'] = $scripturl . '?action=flm';
    $request = $smcFunc['db_query']('', '
                    SELECT  sflm
                    FROM {db_prefix}property
                    WHERE id_member = {int:id}
                    LIMIT 1',
        array(
            'id' => 0,
        )
    );
    $pool = $smcFunc['db_fetch_assoc']($request);
    $smcFunc['db_free_result']($request);
    $context['pool_amount'] = $pool['sflm'];
    if (isset($_POST['work']) && $_POST['work'] == 'delete') {
        checkSession();
        if (isset($_POST['transfer']) && $_POST['transfer'] == 'Transfer sRCP') {
            $amount = $_POST['amount'];
            foreach ($amount as $v) {
                if (!empty($v)){
                    greaterThan($v,0);
                }
            }
            $sum = array_sum($amount);
            $id_member = $_POST['id_member'];
            if ($sum > $pool['sflm']) {
                $_SESSION['pass-max'] = true;
                redirectexit('action=flm');
            }
            $smcFunc['db_query']('', '
                        UPDATE {db_prefix}property
                        SET sflm = {int:sflm}
                        WHERE id_member = {int:id}',
                array(
                    'sflm' =>$pool['sflm'] - $sum,
                    'id' => 0
                )
            );

            foreach ($amount as $k=> $v) {
                if(!empty($v)){
                    $request = $smcFunc['db_query']('', '
                    SELECT  id_member,sflm
                    FROM {db_prefix}property
                    WHERE id_member = {int:id_member}
                    LIMIT 1',
                        array(
                            'id_member' => $id_member[$k],
                        )
                    );
                    $exists = $smcFunc['db_fetch_assoc']($request);
                    $smcFunc['db_free_result']($request);
                    if (!empty($exists)){
                        $smcFunc['db_query']('', '
                        UPDATE {db_prefix}property
                        SET sflm = {int:sflm}
                        WHERE id_member = {int:id}',
                                array(
                                    'sflm' => $exists['sflm'] + $v,
                                    'id' => $id_member[$k]
                            )
                        );
                    }else{
                        $smcFunc['db_insert']('',
                            '{db_prefix}property',
                            array(
                                'id_member' => 'int',
                                'sflm' => 'int'
                            ),
                            [$id_member[$k],$v],
                            array()
                        );
                    }
                    $smcFunc['db_insert']('',
                        '{db_prefix}property_transfer_log',
                        array(
                            'from' => 'int',
                            'to' => 'int',
                            'amount' => 'int',
                            'create_at' => 'int',
                            'pool' => 'int',
                            'property' => 'string',
                        ),
                        [$user_info['id'],$id_member[$k],$v,time(),0,'sflm'],
                        array()
                    );
                }
            }

            $_SESSION['adm-save'] = true;


        }else{
            $delete = $_POST['delete'];
            $smcFunc['db_query']('', '
		DELETE FROM {db_prefix}source_user
		WHERE source = {int:source} AND id IN ({array_int:users})',
                array(
                    'source'=>1,
                    'users' => $delete
                )
            );
        }

        redirectexit('action=flm');
    }
    if (isset($_SESSION['adm-save']))
    {
        if ($_SESSION['adm-save'] === true)
            $context['saved_successful'] = true;
        else
            $context['saved_failed'] = $_SESSION['adm-save'];

        unset($_SESSION['adm-save']);
    }
    if (isset($_SESSION['not-found']))
    {
        if ($_SESSION['not-found'] === true)
            $context['not_found_user'] = true;
        else
            $context['saved_failed'] = $_SESSION['adm-save'];

        unset($_SESSION['not-found']);
    }
    if (isset($_SESSION['exists']))
    {
        if ($_SESSION['exists'] === true)
            $context['exists'] = true;
        else
            $context['saved_failed'] = $_SESSION['adm-save'];

        unset($_SESSION['exists']);
    }
    if (isset($_SESSION['pass-max']))
    {
        if ($_SESSION['pass-max'] === true)
            $context['pass-max'] = true;
        else
            $context['saved_failed'] = $_SESSION['adm-save'];

        unset($_SESSION['pass-max']);
    }
    // member-lists
    $request = $smcFunc['db_query']('', '
			SELECT  sou.id as id,mem.id_member, mem.member_name,mem.address,pro.sflm as sflm
			FROM {db_prefix}source_user AS sou
				INNER JOIN {db_prefix}members AS mem ON (sou.id_member = mem.id_member)
				LEFT JOIN {db_prefix}property AS pro ON (pro.id_member = sou.id_member) WHERE sou.source = {int:source}',
        array(
            'source' => 1
        )
    );

    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['users'][] = $row;
    }


    if (isset($_GET['save']))
    {
        checkSession();
        $username = $_POST['username'];
        $request = $smcFunc['db_query']('', '
			SELECT  address, id_member,  member_name
			FROM {db_prefix}members
			WHERE member_name = {string:username}
			LIMIT 1',
            array(
                'username' => $username,
            )
        );
        $user_settings = $smcFunc['db_fetch_assoc']($request);
        if (empty($user_settings)){
            $_SESSION['not-found'] = true;
            redirectexit('action=flm');
        }
        $request = $smcFunc['db_query']('', '
			SELECT  id_member
			FROM {db_prefix}source_user
			WHERE source = {int:source} AND id_member = {int:id_member}
			LIMIT 1',
            array(
                'source' => 1,
                'id_member' => $user_settings['id_member'],
            )
        );
        $exists = $smcFunc['db_fetch_assoc']($request);
        if (!empty($exists)){
            $_SESSION['exists'] = true;
            redirectexit('action=flm');
        }
        $smcFunc['db_insert']('',
            '{db_prefix}source_user',
            array(
                'id_member' => 'int',
                'source' => 'int',
                'create_at' => 'int'
            ),
            [$user_settings['id_member'],1,time()],
            array()
        );
        $_SESSION['adm-save'] = true;
        redirectexit('action=flm');
    }
}
function FLMMain(){
    global $smcFunc;
    $request = $smcFunc['db_query']('', '
			SELECT  id,flm_max_limit
			FROM {db_prefix}property_max
			WHERE id = {int:id}
			LIMIT 1',
        array(
            'id' => 2
        )
    );
    $result = $smcFunc['db_fetch_assoc']($request);
    $smcFunc['db_free_result']($request);
    $ret = $result['flm_max_limit'] ?? 0;
    if ($ret == 1) {
        fatal_error('Feature has been disabled');
    }
    $sa = isset($_GET['sa']) ? $_GET['sa'] : '';
    $meritFunction = [
        ''=>'SetSourceUser',
        'sflmtransfer'=>'sFLMTransfer',
        'sflm'=>'sflm',
        'flmexchange'=>'flmexchange',
        'not'=>'notReview',
        'reviewed'=>'reviewed',
        'usersflmTransfer'=>'usersflmTransfer',
        'complete'=>'complete',
        'sendrcp'=>'sendrcp',
        'sendRcpData'=>'sendRcpData',
    ];
    call_helper($meritFunction[$sa]);
}
function usersflmTransfer(){
    global $scripturl, $context,$smcFunc,$modSettings;
    // Make sure they can view the memberlist.
    isAllowedTo(['admin_forum','flm_manage']);

    loadTemplate('FLM');
    $context['sub_template'] = 'usersFLMTransfer';

    $request = $smcFunc['db_query']('', '
			SELECT COUNT(*)
			FROM {db_prefix}property_transfer_log WHERE pool = {int:id} AND property = {string:property}',
        array(
            'id' => 1,
            'property' => 'sflm'
        )
    );
    list ($context['num_members']) = $smcFunc['db_fetch_row']($request);
    $smcFunc['db_free_result']($request);
    $_REQUEST['start'] =  $_REQUEST['start']  ?? 0;
    $context['page_index'] = constructPageIndex($scripturl . '?action=flm;sa=usersflmTransfer', $_REQUEST['start'], $context['num_members'], $modSettings['defaultMaxMembers']);
    $limit = $_REQUEST['start'];
    $context['start'] = $_REQUEST['start'];
    // member-lists
    $request = $smcFunc['db_query']('', '
				SELECT   sou.id as id,mem.member_name as a,mem2.member_name as b,amount,create_at
			FROM {db_prefix}property_transfer_log AS sou 
				LEFT JOIN {db_prefix}members AS mem ON (sou.from = mem.id_member)
				LEFT JOIN {db_prefix}members AS mem2 ON (sou.to = mem2.id_member) WHERE pool = {int:id} AND property = {string:property} ORDER BY id DESC LIMIT {int:start}, {int:max}',
        array(
            'id' => 1,
            'start' => $limit,
            'property' => 'sflm',
            'max' => $modSettings['defaultMaxMembers'],
        )
    );
    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['users'][] = $row;
    }
}
function sFLMTransfer(){
    global $scripturl, $context,$smcFunc,$modSettings;
    // Make sure they can view the memberlist.
    isAllowedTo(['admin_forum','flm_manage']);

    loadTemplate('FLM');
    $context['sub_template'] = 'sFLMTransfer';

    $request = $smcFunc['db_query']('', '
			SELECT COUNT(*)
			FROM {db_prefix}property_transfer_log WHERE pool = {int:id} AND property = {string:property}',
        array(
            'id' => 0,
            'property' => 'sflm',
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
				SELECT   sou.id as id,mem.member_name as a,mem2.member_name as b,amount,create_at
			FROM {db_prefix}property_transfer_log AS sou 
				LEFT JOIN {db_prefix}members AS mem ON (sou.from = mem.id_member)
				LEFT JOIN {db_prefix}members AS mem2 ON (sou.to = mem2.id_member) WHERE pool = {int:id} AND property = {string:property} ORDER BY id DESC LIMIT {int:start}, {int:max}',
        array(
            'id' => 0,
            'property' => 'sflm',
            'start' => $limit,
            'max' => $modSettings['defaultMaxMembers'],
        )
    );
    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['users'][] = $row;
    }
}
function sflm(){
    global $scripturl, $context,$smcFunc,$user_info,$modSettings;
    // Make sure they can view the memberlist.
    isAllowedTo(['admin_forum','flm_manage']);

    loadTemplate('FLM');
    $context['sub_template'] = 'sFLM';
    if (isset($_SESSION['adm-save']))
    {
        if ($_SESSION['adm-save'] === true)
            $context['saved_successful'] = true;
        else
            $context['saved_failed'] = $_SESSION['adm-save'];

        unset($_SESSION['adm-save']);
    }
    if (isset($_SESSION['exceeded-maximum']))
    {
        if ($_SESSION['exceeded-maximum'] === true)
            $context['exceeded_maximum'] = true;

        unset($_SESSION['exceeded-maximum']);
    }
    $context['post_url'] = $scripturl . '?action=flm;save;sa=sflm';

    $request = $smcFunc['db_query']('', '
			SELECT SUM(amount)
			FROM {db_prefix}property_logs WHERE property = {string:property}',
        array(
            'property' => 'sflm'
        )
    );
    list ($context['total_issue']) =   $smcFunc['db_fetch_row']($request);

    $request = $smcFunc['db_query']('', '
			SELECT  sflm
			FROM {db_prefix}property
			WHERE id_member = {int:id}
			LIMIT 1',
        array(
            'id' => 0,
        )
    );
    $poolAmount = $smcFunc['db_fetch_assoc']($request);
    $context['pool_amount'] = $poolAmount['sflm'] ?? 0;

    $request = $smcFunc['db_query']('', '
			SELECT  SUM(sflm)
			FROM {db_prefix}property
			WHERE id_member != {int:id}',
        array(
            'id' => 0,
        )
    );
    list ($context['user_holder']) = $smcFunc['db_fetch_row']($request);
    $smcFunc['db_free_result']($request);
    $request = $smcFunc['db_query']('', '
			SELECT COUNT(*)
			FROM {db_prefix}property_logs as a where a.from != {int:id} AND property = {string:property}',
        array(
            'id' => 0,
            'property' => 'sflm'
        )
    );
    list ($context['num_members']) = $smcFunc['db_fetch_row']($request);
    $smcFunc['db_free_result']($request);
    $request = $smcFunc['db_query']('', '
			SELECT   mem.member_name,SUM(sou.amount) AS amount
			FROM {db_prefix}property_logs AS sou 
				INNER JOIN {db_prefix}members AS mem ON (sou.id_member = mem.id_member) where sou.from != {int:id} AND property = {string:property}  GROUP BY mem.member_name',
        array(
            'id'=>0,
            'property' => 'sflm'
        )
    );
    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['users_total'][] = $row;
    }
    $smcFunc['db_free_result']($request);
    $_REQUEST['start'] =  $_REQUEST['start']  ?? 0;
    $context['page_index'] = constructPageIndex($scripturl . '?action=flm;sa=sflm', $_REQUEST['start'], $context['num_members'], $modSettings['defaultMaxMembers']);
    $limit = $_REQUEST['start'];
    $context['start'] = $_REQUEST['start'];
    // member-lists
    $request = $smcFunc['db_query']('', '
			SELECT  sou.id as id,sou.amount,sou.create_at, mem.member_name
			FROM {db_prefix}property_logs AS sou
				INNER JOIN {db_prefix}members AS mem ON (sou.id_member = mem.id_member) where sou.from != {int:id} AND property = {string:property} ORDER BY id DESC LIMIT {int:start}, {int:max}',
        array(
            'id' => 0,
            'start' => $limit,
            'max' => $modSettings['defaultMaxMembers'],
            'property' => 'sflm'
        )
    );
    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['users'][] = $row;
    }
    if (isset($_GET['save'])){
        checkSession();
        $amount = $_POST['amount'];
        greaterThan($amount,0);
        $request = $smcFunc['db_query']('', '
			SELECT  id,flm_max_limit
			FROM {db_prefix}property_max
			WHERE id = {int:id}
			LIMIT 1',
            array(
                'id' => 1
            )
        );
        $result = $smcFunc['db_fetch_assoc']($request);
        $smcFunc['db_free_result']($request);
        $ret = $result['flm_max_limit'] ?? 0;
        if ($amount > $ret) {
            $_SESSION['exceeded-maximum'] = true;
            redirectexit('action=flm;sa=sflm');
        }
        $request = $smcFunc['db_query']('', '
			SELECT  id_member,sflm
			FROM {db_prefix}property
			WHERE id_member = {int:id}
			LIMIT 1',
            array(
                'id' => 0,
            )
        );
        $user_settings = $smcFunc['db_fetch_assoc']($request);
        if (empty($user_settings)){
            $smcFunc['db_insert']('',
                '{db_prefix}property',
                array(
                    'id_member' => 'int',
                    'sflm' => 'int'
                ),
                [0,$amount],
                array()
            );
        } else {
            $smcFunc['db_query']('', '
					UPDATE {db_prefix}property
					SET sflm = {int:sflm}
					WHERE id_member = {int:id}',
                array(
                    'sflm' => $user_settings['sflm'] + $amount,
                    'id' => 0
                )
            );
        }
        $smcFunc['db_insert']('',
            '{db_prefix}property_logs',
            array(
                'id_member' => 'int',
                'amount' => 'int',
                'from' => 'int',
                'create_at' => 'int',
                'property' => 'string',
            ),
            [$user_info['id'],$amount,1,time(),'sflm'],
            array()
        );
        $_SESSION['adm-save'] = true;
        redirectexit('action=flm;sa=sflm');
    }

}

function flmexchange(){
    global $scripturl, $context,$smcFunc,$user_info,$modSettings;
    // Make sure they can view the memberlist.
    isAllowedTo(['admin_forum','flm_manage']);

    loadTemplate('FLM');
    $context['sub_template'] = 'flmexchange';
    $context['post_url'] = $scripturl . '?action=flm;sa=flmexchange;save';
    $context['limit_url'] = $scripturl . '?action=flm;sa=flmexchange;limit';
    $context['modify_url'] = $scripturl . '?action=flm;sa=flmexchange;modify';
    $request = $smcFunc['db_query']('', '
                    SELECT *
                    FROM {db_prefix}fcp_config
                 ',
    );
    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['tokens'][] = $row;
    }

    $request = $smcFunc['db_query']('', '
                    SELECT  min,max,level
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
    $context['level'] = $pool['level']  ?? 0;


    if (isset($_SESSION['adm-save']))
    {
        if ($_SESSION['adm-save'] === true)
            $context['saved_successful'] = true;
        else
            $context['saved_failed'] = $_SESSION['adm-save'];

        unset($_SESSION['adm-save']);
    }
    if (isset($_GET['modify']))
    {
        checkSession();
        if (isset($_POST['do_state'])){
            $id = $_POST['id'];
            $radio= $_POST['radio'];
            $pause= $_POST['pause'];
            if (!empty($id)){
                foreach ($id as $k => $value) {
                    $paused = in_array($value,$pause) ? 1 : 0;
                    $smcFunc['db_query']('', '
					UPDATE {db_prefix}fcp_config
					SET radio = {string:radio},
					pause = ({int:pause})
					WHERE id = ({int:id})',
                        array(
                            'radio' => $radio[$k],
                            'pause' => $paused,
                            'id' => $value
                        )
                    );
                }

            }
        }
        $_SESSION['adm-save'] = true;
        redirectexit('action=flm;sa=flmexchange');
    }
    if (isset($_GET['save']))
    {
        checkSession();
        $token= $_POST['token'];
        $radio = $_POST['radio'];

            $smcFunc['db_insert']('',
                '{db_prefix}fcp_config',
                array(
                    'token' => 'string',
                    'radio' => 'string',
                ),
                [$token,$radio],
                array()
            );

        $_SESSION['adm-save'] = true;
        redirectexit('action=flm;sa=flmexchange');

    }
    if (isset($_GET['limit']))
    {
        checkSession();
        $min = $_POST['min'];
        $max = $_POST['max'];
        $level = $_POST['level'];
        if (empty($pool)){
            $smcFunc['db_insert']('',
                '{db_prefix}exchange_limit',
                array(
                    'min' => 'int',
                    'max' => 'int',
                    'level' => 'int',
                    'property' => 'string',
                ),
                [$min,$max,$level,'flm'],
                array()
            );
        }else{
            $smcFunc['db_query']('', '
                UPDATE {db_prefix}exchange_limit
                SET min = {int:min},
                max = {int:max},
                level = {int:level}
                WHERE property = {string:property}',
                array(
                    'min' => $min,
                    'max' => $max,
                    'level' => $level,
                    'property' => 'flm'
                )
            );
        }
        $_SESSION['adm-save'] = true;
        redirectexit('action=flm;sa=flmexchange');

    }

    $request = $smcFunc['db_query']('', '
			SELECT COUNT(*)
			FROM {db_prefix}apply_withdraw WHERE type = {string:type}',
        array(
            'type' => 'flm',
        )
    );
    list ($context['num_members']) = $smcFunc['db_fetch_row']($request);
    $smcFunc['db_free_result']($request);
    $_REQUEST['start'] =  $_REQUEST['start']  ?? 0;
    $context['page_index'] = constructPageIndex($scripturl . '?action=flm;sa=flmexchange', $_REQUEST['start'], $context['num_members'], $modSettings['defaultMaxMembers']);
    $limit = $_REQUEST['start'];
    $context['start'] = $_REQUEST['start'];
    // member-lists
    $request = $smcFunc['db_query']('', '
				SELECT   a.*,mem.member_name,mem.real_name,fcp.token
			FROM {db_prefix}apply_withdraw as a LEFT JOIN {db_prefix}members AS mem ON (a.id_member = mem.id_member) LEFT JOIN {db_prefix}fcp_config AS fcp ON (a.token_id = fcp.id) WHERE type = {string:type} ORDER BY id DESC LIMIT {int:start}, {int:max}',
        array(
            'type' => 'flm',
            'start' => $limit,
            'max' => $modSettings['defaultMaxMembers'],
        )
    );
    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['users'][] = $row;
    }

}
function notReview(){
    global $scripturl, $context,$smcFunc,$user_info,$modSettings,$boarddir;
    // Make sure they can view the memberlist.
    isAllowedTo(['admin_forum','flm_manage']);

    loadTemplate('FLM');
    $context['sub_template'] = 'notReview';
    $context['modify_url'] = $scripturl . '?action=flm;sa=not;modify';
    $context['download_url'] = $scripturl . '?action=flm;sa=not;download';
    if (isset($_SESSION['adm-save']))
    {
        if ($_SESSION['adm-save'] === true)
            $context['saved_successful'] = true;
        else
            $context['saved_failed'] = $_SESSION['adm-save'];

        unset($_SESSION['adm-save']);
    }
    if (isset($_GET['download']))
    {
        $exportData = [];
        require_once($boarddir . '/Export.php');
        $request = $smcFunc['db_query']('', '
				SELECT   a.*,mem.member_name,mem.real_name,fcp.token
			FROM {db_prefix}apply_withdraw as a LEFT JOIN {db_prefix}members AS mem ON (a.id_member = mem.id_member) LEFT JOIN {db_prefix}fcp_config AS fcp ON (a.token_id = fcp.id)  WHERE type = {string:type} AND state = {int:state}  ORDER BY id DESC',
            array(
                'type' => 'flm',
                'state'=>0
            )
        );
        while ($row = $smcFunc['db_fetch_assoc']($request)) {
            switch ($row['state']) {
                case '1':
                    $state = 'Pass';
                    break;
                case '2':
                    $state = 'Reject';
                    break;
                default:
                    $state = 'Unaudited';
                    break;
            }
            $row['state'] = $state;
            $row['complete'] = $row['complete'] == 0 ? 'No' : 'Yes';
            $exportData[] = $row;
        }

        downLoad('notreview.xlsx',$exportData);


    }
    if (isset($_GET['modify']))
    {
        checkSession();
        if (isset($_POST['do_state'])){
            $pass = $_POST['pass'];
            $reject = $_POST['reject'];
            if (!empty($pass)){
                $smcFunc['db_query']('', '
					UPDATE {db_prefix}apply_withdraw
					SET state = {int:state}
					WHERE id IN ({array_int:id})',
                    array(
                        'state' => 1,
                        'id' => $pass
                    )
                );
                foreach ($pass as $v){
                    $request = $smcFunc['db_query']('', '
				SELECT * FROM {db_prefix}apply_withdraw WHERE id = ({int:id}) limit 1',
                        array(
                            'id' => intval($v),
                        )
                    );
                    $row = $smcFunc['db_fetch_assoc']($request);
                    $request = $smcFunc['db_query']('', '
                        SELECT  eflm
                        FROM {db_prefix}property
                        WHERE id_member = {int:id_member}
                        LIMIT 1',
                        array(
                            'id_member' => $row['id_member'],
                        )
                    );
                    $userProperty = $smcFunc['db_fetch_assoc']($request);
//                    $smcFunc['db_free_result']($request);
                    $flmAmount = $userProperty['eflm'];
                    $smcFunc['db_query']('', '
					UPDATE {db_prefix}property
					SET eflm = {string:flm}
					WHERE id_member = {int:id}',
                        array(
                            'flm' => $flmAmount + $row['amount'] * 0.8,
                            'id' => $row['id_member']
                        )
                    );

                }
//                var_dump($smcFunc['db_fetch_assoc']($request));die;
//                while ($row = $smcFunc['db_fetch_assoc']($request)) {
//                    var_dump($row['id']);
//                    $request = $smcFunc['db_query']('', '
//                        SELECT  eflm
//                        FROM {db_prefix}property
//                        WHERE id_member = {int:id_member}
//                        LIMIT 1',
//                        array(
//                            'id_member' => $row['id_member'],
//                        )
//                    );
//
//                    $userProperty = $smcFunc['db_fetch_assoc']($request);
////                    $smcFunc['db_free_result']($request);
////                    var_dump($userProperty);
//                    $flmAmount = $userProperty['eflm'];
////                    var_dump($flmAmount);
////                    var_dump($row['amount'] /2);
//                    $smcFunc['db_query']('', '
//					UPDATE {db_prefix}property
//					SET eflm = {string:flm}
//					WHERE id_member = {int:id}',
//                        array(
//                            'flm' => $flmAmount + $row['amount'] /2,
//                            'id' => $row['id_member']
//                        )
//                    );
//                }
//                echo 123;

            }
            if (!empty($reject)){

                $smcFunc['db_query']('', '
					UPDATE {db_prefix}apply_withdraw
					SET state = {int:state}
					WHERE id IN ({array_int:id})',
                    array(
                        'state' => 2,
                        'id' => $reject
                    )
                );
                $request = $smcFunc['db_query']('', '
				SELECT * FROM {db_prefix}apply_withdraw WHERE id IN ({array_int:id})',
                    array(
                        'id' => $reject,
                    )
                );
                while ($row = $smcFunc['db_fetch_assoc']($request)) {
                    $request = $smcFunc['db_query']('', '
                        SELECT  flm
                        FROM {db_prefix}property
                        WHERE id_member = {int:id_member}
                        LIMIT 1',
                            array(
                                'id_member' => $row['id_member'],
                            )
                        );
                    $userProperty = $smcFunc['db_fetch_assoc']($request);
                    $flmAmount = $userProperty['flm'];
                    $smcFunc['db_query']('', '
					UPDATE {db_prefix}property
					SET flm = {int:flm}
					WHERE id_member = {int:id}',
                        array(
                            'flm' => $flmAmount + $row['amount'],
                            'id' => $row['id_member']
                        )
                    );
                }

            }
        }
        $_SESSION['adm-save'] = true;
        redirectexit('action=flm;sa=not');

    }

    $request = $smcFunc['db_query']('', '
			SELECT COUNT(*)
			FROM {db_prefix}apply_withdraw WHERE type = {string:type} AND state = {int:state}',
        array(
            'type' => 'flm',
            'state'=>0,
        )
    );
    list ($context['num_members']) = $smcFunc['db_fetch_row']($request);
    $smcFunc['db_free_result']($request);
    $_REQUEST['start'] =  $_REQUEST['start']  ?? 0;
    $context['page_index'] = constructPageIndex($scripturl . '?action=flm;sa=not', $_REQUEST['start'], $context['num_members'], $modSettings['defaultMaxMembers']);
    $limit = $_REQUEST['start'];
    $context['start'] = $_REQUEST['start'];
    // member-lists
    $request = $smcFunc['db_query']('', '
				SELECT   a.*,mem.member_name,mem.real_name,fcp.token
			FROM {db_prefix}apply_withdraw as a LEFT JOIN {db_prefix}members AS mem ON (a.id_member = mem.id_member) LEFT JOIN {db_prefix}fcp_config AS fcp ON (a.token_id = fcp.id)  WHERE type = {string:type} AND state = {int:state} ORDER BY id DESC LIMIT {int:start}, {int:max}',
        array(
            'type' => 'flm',
            'state'=>0,
            'start' => $limit,
            'max' => $modSettings['defaultMaxMembers'],
        )
    );
    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['users'][] = $row;
    }

}
function reviewed(){
    global $boarddir,$scripturl, $context,$smcFunc,$user_info,$modSettings;
    // Make sure they can view the memberlist.
    isAllowedTo(['admin_forum','flm_manage']);

    loadTemplate('FLM');
    $context['sub_template'] = 'reviewed';
    $context['modify_url'] = $scripturl . '?action=flm;sa=reviewed;modify';
    $context['download_url'] = $scripturl . '?action=flm;sa=reviewed;download';
    if (isset($_SESSION['adm-save']))
    {
        if ($_SESSION['adm-save'] === true)
            $context['saved_successful'] = true;
        else
            $context['saved_failed'] = $_SESSION['adm-save'];

        unset($_SESSION['adm-save']);
    }
    if (isset($_GET['download']))
    {
        $exportData = [];
        require_once($boarddir . '/Export.php');
        $request = $smcFunc['db_query']('', '
				SELECT   a.*,mem.member_name,mem.real_name,fcp.token
			FROM {db_prefix}apply_withdraw as a LEFT JOIN {db_prefix}members AS mem ON (a.id_member = mem.id_member) LEFT JOIN {db_prefix}fcp_config AS fcp ON (a.token_id = fcp.id)  WHERE type = {string:type} AND state = {int:state} AND complete = {int:complete} ORDER BY id DESC',
            array(
                'type' => 'flm',
                'state'=>1,
                'complete'=>0,
            )
        );
        while ($row = $smcFunc['db_fetch_assoc']($request)) {
            switch ($row['state']) {
                case '1':
                    $state = 'Pass';
                    break;
                case '2':
                    $state = 'Reject';
                    break;
                default:
                    $state = 'Unaudited';
                    break;
            }
            $row['state'] = $state;
            $row['complete'] = $row['complete'] == 0 ? 'No' : 'Yes';
            $exportData[] = $row;
        }

        downLoad('reviewed.xlsx',$exportData);


    }
    if (isset($_GET['modify']))
    {
        checkSession();
        if (isset($_POST['do_state'])){
            $complete = $_POST['complete'];
            if (!empty($complete)){
                $smcFunc['db_query']('', '
					UPDATE {db_prefix}apply_withdraw
					SET complete = {int:complete}
					WHERE id IN ({array_int:id})',
                    array(
                        'complete' => 1,
                        'id' => $complete
                    )
                );
            }
        }
        $_SESSION['adm-save'] = true;
        redirectexit('action=flm;sa=reviewed');

    }

    $request = $smcFunc['db_query']('', '
			SELECT COUNT(*)
			FROM {db_prefix}apply_withdraw WHERE type = {string:type} AND state = {int:state} AND complete = {int:complete}',
        array(
            'type' => 'flm',
            'state'=>1,
            'complete'=>0,
        )
    );
    list ($context['num_members']) = $smcFunc['db_fetch_row']($request);
    $smcFunc['db_free_result']($request);
    $_REQUEST['start'] =  $_REQUEST['start']  ?? 0;
    $context['page_index'] = constructPageIndex($scripturl . '?action=flm;sa=reviewed', $_REQUEST['start'], $context['num_members'], $modSettings['defaultMaxMembers']);
    $limit = $_REQUEST['start'];
    $context['start'] = $_REQUEST['start'];
    // member-lists
    $request = $smcFunc['db_query']('', '
				SELECT   a.*,mem.member_name,mem.real_name,fcp.token
			FROM {db_prefix}apply_withdraw as a LEFT JOIN {db_prefix}members AS mem ON (a.id_member = mem.id_member) LEFT JOIN {db_prefix}fcp_config AS fcp ON (a.token_id = fcp.id) WHERE type = {string:type} AND state = {int:state} AND complete = {int:complete} ORDER BY id DESC LIMIT {int:start}, {int:max}',
        array(
            'type' => 'flm',
            'state'=>1,
            'complete'=>0,
            'start' => $limit,
            'max' => $modSettings['defaultMaxMembers'],
        )
    );
    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['users'][] = $row;
    }

}
function complete(){
    global $scripturl, $context,$smcFunc,$user_info,$modSettings;
    // Make sure they can view the memberlist.
    isAllowedTo(['admin_forum','flm_manage']);

    loadTemplate('FLM');
    $context['sub_template'] = 'complete';
    $context['modify_url'] = $scripturl . '?action=flm;sa=complete;modify';
    if (isset($_SESSION['adm-save']))
    {
        if ($_SESSION['adm-save'] === true)
            $context['saved_successful'] = true;
        else
            $context['saved_failed'] = $_SESSION['adm-save'];

        unset($_SESSION['adm-save']);
    }
    if (isset($_GET['modify']))
    {
        checkSession();
        if (isset($_POST['do_state'])){
            $complete = $_POST['complete'];
            if (!empty($complete)){
                $smcFunc['db_query']('', '
					UPDATE {db_prefix}apply_withdraw
					SET complete = {int:complete}
					WHERE id IN ({array_int:id})',
                    array(
                        'complete' => 1,
                        'id' => $complete
                    )
                );
            }
        }
        $_SESSION['adm-save'] = true;
        redirectexit('action=flm;sa=reviewed');

    }

    $request = $smcFunc['db_query']('', '
			SELECT COUNT(*)
			FROM {db_prefix}apply_withdraw WHERE type = {string:type} AND complete = {int:complete}',
        array(
            'type' => 'flm',
            'complete'=>1,
        )
    );
    list ($context['num_members']) = $smcFunc['db_fetch_row']($request);
    $smcFunc['db_free_result']($request);
    $_REQUEST['start'] =  $_REQUEST['start']  ?? 0;
    $context['page_index'] = constructPageIndex($scripturl . '?action=flm;sa=complete', $_REQUEST['start'], $context['num_members'], $modSettings['defaultMaxMembers']);
    $limit = $_REQUEST['start'];
    $context['start'] = $_REQUEST['start'];
    // member-lists
    $request = $smcFunc['db_query']('', '
				SELECT   a.*,mem.member_name,mem.real_name,fcp.token
			FROM {db_prefix}apply_withdraw as a LEFT JOIN {db_prefix}members AS mem ON (a.id_member = mem.id_member) LEFT JOIN {db_prefix}fcp_config AS fcp ON (a.token_id = fcp.id)  WHERE type = {string:type} AND complete = {int:complete} ORDER BY id DESC LIMIT {int:start}, {int:max}',
        array(
            'type' => 'flm',
            'complete'=>1,
            'start' => $limit,
            'max' => $modSettings['defaultMaxMembers'],
        )
    );
    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['users'][] = $row;
    }

}
function emerit(){
    global $scripturl, $context,$smcFunc,$user_info,$modSettings;
    // Make sure they can view the memberlist.
    isAllowedTo(['admin_forum','flm_manage']);

    loadTemplate('Merits');
    $context['sub_template'] = 'emerit';

    $request = $smcFunc['db_query']('', '
			SELECT COUNT(*)
			FROM {db_prefix}smerit_logs as a where a.from != {int:id}',
        array(
            'id' => 1
        )
    );
    list ($context['num_members']) = $smcFunc['db_fetch_row']($request);
    $smcFunc['db_free_result']($request);
    $_REQUEST['start'] =  $_REQUEST['start']  ?? 0;
    $context['page_index'] = constructPageIndex($scripturl . '?action=flm;sa=emerit', $_REQUEST['start'], $context['num_members'], $modSettings['defaultMaxMembers']);
    $limit = $_REQUEST['start'];
    // member-lists
    $request = $smcFunc['db_query']('', '
			SELECT  sou.id as id,sou.amount,sou.create_at, mem.member_name
			FROM {db_prefix}emerit_logs AS sou
				INNER JOIN {db_prefix}members AS mem ON (sou.id_member = mem.id_member) ORDER BY id DESC LIMIT {int:start}, {int:max}',
        array(
            'start' => $limit,
            'max' => $modSettings['defaultMaxMembers'],
        )
    );
    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['users'][] = $row;
    }

}
function sendrcp()
{
    global  $user_info,$context,$smcFunc,$scripturl;
    // Make sure they can view the memberlist.
    isAllowedTo(['admin_forum','flm_manage']);
    $context['post_url'] = $scripturl . '?action=flm;sa=sendrcp;save';
    loadTemplate('FLM');
    $context['sub_template'] = 'sendrcp';
    if (isset($_SESSION['adm-save']))
    {
        if ($_SESSION['adm-save'] === true)
            $context['saved_successful'] = true;
        else
            $context['saved_failed'] = $_SESSION['adm-save'];

        unset($_SESSION['adm-save']);
    }
    $request = $smcFunc['db_query']('', '
		SELECT id_cat,name
		FROM {db_prefix}categories
		ORDER BY cat_order',
        array(
        )
    );
    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['cats'][] = $row;
    }
    $request = $smcFunc['db_query']('', '
		SELECT id_group,group_name
		FROM {db_prefix}membergroups',
        array(
        )
    );
    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['groups'][] = $row;
    }

    $smcFunc['db_free_result']($request);
    if (isset($_GET['save']))
    {
        checkSession();
        $topic_id = $_POST['topic_id'];
        $group = $_POST['group'];
        $count = $_POST['count'];
        $start_time = strtotime($_POST['date'] . " " .$_POST['start_time']);
        $end_time = strtotime($_POST['date'] . " " .$_POST['end_time']);
        if ($topic_id <= 0 || $start_time <= 0 || $end_time <= 0 || $start_time > $end_time || $count < 0) {
           fatal_error('参数不正确');
        }
        $_SESSION['adm-save'] = true;
        $request = $smcFunc['db_query']('', '
    SELECT DISTINCT m.id_member
    FROM {db_prefix}messages AS m
    JOIN {db_prefix}topics AS t ON m.id_topic = t.id_topic
    JOIN {db_prefix}members AS mem ON m.id_member = mem.id_member
    WHERE m.id_topic = {int:topic_id}
      AND m.poster_time BETWEEN {int:start_time} AND {int:end_time}
      AND m.id_member > 0
      AND m.id_member != t.id_member_started
      AND (mem.id_group = {int:group_id} OR FIND_IN_SET({int:group_id}, mem.additional_groups) > 0)
    ORDER BY m.id_member ASC',
            array(
                'topic_id' => $topic_id,
                'start_time' => $start_time,
                'end_time' => $end_time,
                'group_id'=>$group
            )
        );

        $user_ids = [];
        while ($row = $smcFunc['db_fetch_assoc']($request)) {
            $user_ids[] = $row['id_member'];
        }
        if (empty($user_ids)){
            fatal_error('不存在符合条件的用户');
        }
        $user_ids = array_unique($user_ids);
        $request = $smcFunc['db_query']('', '
			SELECT  id_member,sflm
			FROM {db_prefix}property
			WHERE id_member = {int:id}
			LIMIT 1',
            array(
                'id' => $user_info['id'],
            )
        );
        $ret = $smcFunc['db_fetch_assoc']($request);
        $allAmount =  $count * count($user_ids);
        if ($ret['sflm'] < $allAmount) {
            $_SESSION['not-found'] = true;
            fatal_error('Not enough quantity');
        }

        $case_points = '';
        foreach ($user_ids as $user_id){
            $request = $smcFunc['db_query']('', '
    SELECT m.id_msg, m.poster_time
    FROM {db_prefix}messages AS m
    WHERE m.id_topic = {int:id_topic}
      AND m.id_member = {int:id_member}
      AND m.poster_time BETWEEN {int:start_time} AND {int:end_time}
    ORDER BY m.poster_time ASC
    LIMIT 1',
                array(
                    'id_topic' => $topic_id,
                    'id_member' => $user_id,
                    'start_time' => $start_time,
                    'end_time' => $end_time,
                )
            );

            if ($row = $smcFunc['db_fetch_assoc']($request)) {
                // 成功找到第一条回帖
                echo json_encode([
                    'id_msg' => $row['id_msg'],
                    'poster_time' => $row['poster_time'],
                ]);
                $smcFunc['db_insert']('',
                    '{db_prefix}sender_property',
                    array(
                        'id_topic' => 'int',
                        'id_msg' => 'int',
                        'id_member' => 'int',
                        'amount' => 'int',
                        'create_at' => 'int',
                        'property'=>'string'
                    ),
                    [$topic_id,$row['id_msg'],$user_info['id'],$count,time(),'sflm'],
                    array()
                );
                $smcFunc['db_insert']('',
                    '{db_prefix}property_transfer_log',
                    array(
                        'from' => 'int',
                        'to' => 'int',
                        'amount' => 'int',
                        'create_at' => 'int',
                        'pool' => 'int',
                        'property' => 'string',
                    ),
                    [$user_info['id'],$user_id,$count,time(),1,'sflm'],
                    array()
                );

            }
            $case_points .= "WHEN id_member = $user_id THEN $count ";
        }
        $smcFunc['db_query']('', '
			UPDATE {db_prefix}property
			SET sflm = {int:sflm}
			WHERE id_member = {int:from}',
            array(
                'from' => $user_info['id'],
                'sflm' => $ret['sflm'] - $allAmount,
            )
        );
        $sql = "
    UPDATE {db_prefix}property
    SET 
        flm = flm + CASE $case_points END
    WHERE id_member IN (" . implode(',', $user_ids) . ")
";

// 执行更新
        $smcFunc['db_query']('', $sql);
        $smcFunc['db_free_result']($request);
        redirectexit('action=flm;sa=sendrcp');
    }

}
function sendRcpData(){
    global  $context,$smcFunc,$scripturl;
    // Make sure they can view the memberlist.
    isAllowedTo(['admin_forum','flm_manage']);
    $id  = $_GET['id'];
    $items = explode('-',$id);
    $type = $items[0];
    $data = [];
    $topics = array();

        if ($type == 'cat'){
            $request = $smcFunc['db_query']('', '
		SELECT id_board,name
		FROM {db_prefix}boards
		where id_cat = {int:id}
		ORDER BY board_order',
                array(
                    'id'=>$items[1]
                )
            );

            while ($row = $smcFunc['db_fetch_assoc']($request)) {
                $data[] = $row;
            }
            $smcFunc['db_free_result']($request);
        }else if ($type == 'board'){
            $request = $smcFunc['db_query']('', '
		SELECT id_board,name
		FROM {db_prefix}boards
		where id_parent = {int:id}
		ORDER BY board_order',
                array(
                    'id'=>$items[1]
                )
            );

            while ($row = $smcFunc['db_fetch_assoc']($request)) {
                $data[] = $row;
            }
            $smcFunc['db_free_result']($request);
            $request = $smcFunc['db_query']('', '
    SELECT 
        u.member_name AS username,
        t.id_topic,
        m.subject AS topic_title
    FROM {db_prefix}topics AS t
    JOIN {db_prefix}messages AS m ON t.id_first_msg = m.id_msg
    JOIN {db_prefix}members AS u ON t.id_member_started = u.id_member
    WHERE t.id_board = {int:board_id}
    ORDER BY u.member_name ASC, t.id_topic ASC',
                array(
                    'board_id' => $items[1],
                )
            );

            $usedata = [];
            while ($row = $smcFunc['db_fetch_assoc']($request)) {
                $username = $row['username'];

                // 如果该用户还未出现在结果中，初始化
                if (!isset($usedata[$username])) {
                    $usedata[$username] = [];
                }

                // 将主题添加到该用户的主题列表中
                $usedata[$username][] = [
                    'id_topic' => $row['id_topic'],
                    'title' => $row['topic_title']
                ];
            }
            $smcFunc['db_free_result']($request);
            $response = [];
            foreach ($usedata as $username => $topics) {
                $response[] = [
                    'username' => $username,
                    'topics' => $topics
                ];
            }
        }
        $response = ['select'=>$data,'users'=>$response];

        echo json_encode($response);die;



}
