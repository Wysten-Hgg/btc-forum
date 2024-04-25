<?php
function ManageFRP()
{
    global $txt, $context, $scripturl,$smcFunc;
    // Only admins, only EVER admins!
    isAllowedTo('admin_forum');

    // Let's get our things running...
    loadTemplate('ManageFRP');

//    loadLanguage('Reports');
    $context['page_title'] = 'managefrp';
    $context['post_url'] = $scripturl . '?action=admin;area=managefrp;save=limit';
    $context['set_url'] = $scripturl . '?action=admin;area=managefrp;save=set';
    $context['radio_url'] = $scripturl . '?action=admin;area=managefrp;save=radio';
    $context['delete_url'] = $scripturl . '?action=admin;area=managefrp';
    if (isset($_POST['work']) && $_POST['work'] == 'delete') {
        checkSession();
        $delete = $_POST['delete'];
        $smcFunc['db_query']('', '
		DELETE FROM {db_prefix}member_roles
		WHERE id IN ({array_int:users}) AND role_id = {int:role_id}',
            array(
                'users' => $delete,
                'role_id' => 4
            )
        );
        redirectexit('action=admin;area=managefrp');
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
    $request = $smcFunc['db_query']('', '
			SELECT  id,flm_max_limit
			FROM {db_prefix}property_max
			WHERE id = {int:id}
			LIMIT 1',
        array(
            'id' => 3
        )
    );
    $result = $smcFunc['db_fetch_assoc']($request);
    $smcFunc['db_free_result']($request);
    $context['limit'] = $result['flm_max_limit'] ?? 0;

    $context['pause'] = $result['flm_max_limit'] ?? 0;
    $request = $smcFunc['db_query']('', '
			SELECT  *
			FROM {db_prefix}realm_power
			WHERE id = {int:id}
			LIMIT 1',
        array(
            'id' => 1
        )
    );
    $result = $smcFunc['db_fetch_assoc']($request);
    $smcFunc['db_free_result']($request);
    $context['single_one'] = $result['single_one'];
    $context['single_two'] = $result['single_two'];
    $context['single_three'] = $result['single_three'];
    $context['single_four'] = $result['single_four'];
    $context['single_five'] = $result['single_five'];
    $context['single_six'] = $result['single_six'];
    $context['single_seven'] = $result['single_seven'];
    $context['boost_one'] = $result['boost_one'];
    $context['boost_two'] = $result['boost_two'];
    $context['boost_three'] = $result['boost_three'];
    $context['boost_four'] = $result['boost_four'];
    $context['boost_five'] = $result['boost_five'];
    // member-lists

    $request = $smcFunc['db_query']('', '
			SELECT  rol.id as id,mem.id_member, mem.member_name,mem.btcaddress
			FROM {db_prefix}member_roles AS rol
				INNER JOIN {db_prefix}members AS mem ON (rol.id_member = mem.id_member)
			WHERE rol.role_id = {int:role_id}',
        array(
            'role_id' => 4
        )
    );

    while ($row = $smcFunc['db_fetch_assoc']($request)) {
        $context['users'][] = $row;
    }

    $smcFunc['db_free_result']($request);


    // Saving the settings?
    if (isset($_GET['save']))
    {
        checkSession();
        if ($_GET['save'] === 'limit'){
            $limit = $_POST['limit'];
//            greaterThan($limit,0);
            $request = $smcFunc['db_query']('', '
			SELECT  id
			FROM {db_prefix}property_max
			WHERE id = {int:id}
			LIMIT 1',
                array(
                    'id' => 3,
                )
            );
            $result = $smcFunc['db_fetch_assoc']($request);
            if (empty($result)){
                $smcFunc['db_insert']('',
                    '{db_prefix}property_max',
                    array(
                        'id' => 'int', 'flm_max_limit' => 'int'
                    ),
                    [3,$limit],
                    array()
                );
            }else{
                $smcFunc['db_query']('', '
					UPDATE {db_prefix}property_max
					SET flm_max_limit = {int:flm_max_limit}
					WHERE id = {int:id}',
                    array(
                        'flm_max_limit' => $limit,
                        'id' => 3
                    )
                );
            }
        }
        if ($_GET['save'] === 'set') {
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
                redirectexit('action=admin;area=managefrp');
            }
            $request = $smcFunc['db_query']('', '
			SELECT  id_member
			FROM {db_prefix}member_roles
			WHERE id_member = {int:id_member}
			AND role_id = {int:role_id}
			LIMIT 1',
                array(
                    'id_member' => $user_settings['id_member'],
                    'role_id' => 4
                )
            );
            $exists = $smcFunc['db_fetch_assoc']($request);
            if (!empty($exists)){
                $_SESSION['exists'] = true;
                redirectexit('action=admin;area=managefrp');
            }
            $smcFunc['db_insert']('',
                '{db_prefix}member_roles',
                array(
                    'id_member' => 'int',
                    'role_id' => 'int',
                    'create_at' => 'int'
                ),
                [$user_settings['id_member'],4,time()],
                array()
            );
        }
        if ($_GET['save'] === 'radio') {
            $single_one= $_POST['single_one'];
            $single_two= $_POST['single_two'];
            $single_three= $_POST['single_three'];
            $single_four= $_POST['single_four'];
            $single_five= $_POST['single_five'];
            $single_six= $_POST['single_six'];
            $single_seven= $_POST['single_seven'];
            $boost_one= $_POST['boost_one'];
            $boost_two= $_POST['boost_two'];
            $boost_three= $_POST['boost_three'];
            $boost_four= $_POST['boost_four'];
            $boost_five= $_POST['boost_five'];
//            greaterThan($limit,0);
            $request = $smcFunc['db_query']('', '
			SELECT  id
			FROM {db_prefix}realm_power
			WHERE id = {int:id}
			LIMIT 1',
                array(
                    'id' => 1,
                )
            );
            $result = $smcFunc['db_fetch_assoc']($request);
            if (empty($result)){
                $smcFunc['db_insert']('',
                    '{db_prefix}realm_power',
                    array(
                        'id' => 'int',
                        'single_one' => 'string',
                        'single_two' => 'string',
                        'single_three' => 'string',
                        'single_four' => 'string',
                        'single_five' => 'string',
                        'single_six' => 'string',
                        'single_seven' => 'string',
                        'boost_one' => 'string',
                        'boost_two' => 'string',
                        'boost_three' => 'string',
                        'boost_four' => 'string',
                        'boost_five' => 'string',
                    ),
                    [1,$single_one,$single_two,$single_three,$single_four,$single_five,$single_six,$single_seven,$boost_one,$boost_two,$boost_three,$boost_four,$boost_five],
                    array()
                );
            }else{
                $smcFunc['db_query']('', '
					UPDATE {db_prefix}realm_power
					SET single_one = {string:single_one},
					single_two = {string:single_two},
					single_three = {string:single_three},
					single_four = {string:single_four},
					single_five = {string:single_five},
					single_six = {string:single_six},
					single_seven = {string:single_seven},
					boost_one = {string:boost_one},
					boost_two = {string:boost_two},
					boost_three = {string:boost_three},
					boost_five = {string:boost_five},
					boost_four = {string:boost_four}
					WHERE id = {int:id}',
                    array(
                        'single_one' => $single_one,
                        'single_two' => $single_two,
                        'single_three' => $single_three,
                        'single_four' => $single_four,
                        'single_five' => $single_five,
                        'single_six' => $single_six,
                        'single_seven' => $single_seven,
                        'boost_one' => $boost_one,
                        'boost_two' => $boost_two,
                        'boost_three' => $boost_three,
                        'boost_four' => $boost_four,
                        'boost_five' => $boost_five,

                        'id' => 1
                    )
                );
            }
        }
        $_SESSION['adm-save'] = true;
        redirectexit('action=admin;area=managefrp');
    }

}
