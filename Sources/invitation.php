<?php
function invitation(){
    global $scripturl, $context,$smcFunc,$user_info,$modSettings;
    $context['post_url'] = $scripturl . '?action=profile;area=invitation;save';
//    $context['address_url'] = $scripturl . '?action=profile;area=invitation;address';
    $request = $smcFunc['db_query']('', '
			SELECT  *
			FROM {db_prefix}settings
			WHERE variable = {string:variable}
			LIMIT 1',
        array(
            'variable' => 'invitation_amount'
        )
    );
    $result = $smcFunc['db_fetch_assoc']($request);
    $smcFunc['db_free_result']($request);
    $context['invitation_amount'] = $result['value'] ?? 0;
    $request = $smcFunc['db_query']('', '
			SELECT COUNT(*)
			FROM {db_prefix}invitation_code WHERE created_user = {int:id}',
        array(
            'id' => $user_info['id'],
        )
    );
    list ($context['num_members']) = $smcFunc['db_fetch_row']($request);
    $smcFunc['db_free_result']($request);
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
        greaterThan($amount,0);
        if ( $context['invitation_amount'] - $context['num_members'] < $amount) {
            fatal_error('Insufficient invitation code quantity');
        }
        for ($i = 0 ; $i < $amount; $i++){
            $code = createInvitationCode();
            $smcFunc['db_insert']('',
                '{db_prefix}invitation_code',
                array(
                    'created_user' => 'int',
                    'code' => 'string',
                ),
                [$user_info['id'],$code],
                array()
            );
        }
        $_SESSION['adm-save'] = true;
        redirectexit('action=profile;area=invitation;u='.$user_info['id']);
    }

    $_REQUEST['start'] =  $_REQUEST['start']  ?? 0;
    $context['page_index'] = constructPageIndex($scripturl . '?action=profile;sa=invitation', $_REQUEST['start'], $context['num_members'], $modSettings['defaultMaxMembers']);
    $limit = $_REQUEST['start'];
    $context['start'] = $_REQUEST['start'];
    // member-lists
    $request = $smcFunc['db_query']('', '
				SELECT   a.*,mem.member_name as name1,mem2.member_name as name2
			FROM {db_prefix}invitation_code as a LEFT JOIN {db_prefix}members AS mem ON (a.created_user = mem.id_member) LEFT JOIN {db_prefix}members AS mem2 ON (a.used_user = mem2.id_member)  WHERE  a.created_user = {int:id} ORDER BY id DESC LIMIT {int:start}, {int:max}',
        array(
            'id' => $user_info['id'],
            'start' => $limit,
            'max' => $modSettings['defaultMaxMembers'],
        )
    );
    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['users'][] = $row;
    }
}

