<?php

function template_main()
{
    global $context, $txt;

    if (!empty($context['saved_successful']))
        echo '
					<div class="infobox">', $txt['save'], '</div>';
    if (!empty($context['not_found_user']))
        echo '
					<div class="errorbox">', $txt['username_no_exist'], '</div>';
    if (!empty($context['exists']))
        echo '
					<div class="errorbox">', $txt['exists_this_user'], '</div>';
    if (!empty($context['pass-max']))
        echo '
					<div class="errorbox">', $txt['pass_max'], '</div>';

    echo '
		<div class="cat_bar">
			<h3 class="catbg">Manage RCP</h3>
		</div>
		<p class="information">
Function to add or remove users from the Merit Source list as distributors of sRCP.				</p>
		<div id="report_buttons">';

    echo '
		</div>';
    template_flm_menu('flm');
    echo '<div class="cat_bar">
			<h3 class="catbg">Set RCPS Source User</h3>
		</div>
		<div class="windowbg">
								<dl class="settings">
								  <form method="post" action="', $context['post_url'], '" >    
									<dt>
										<a id="setting_reg_verification"></a> <span><label for="reg_verification">Add Source Users</label></span>
									</dt>
									<dd>
										<input type="text" name="username" id="recaptcha_site_key" value="">
									</dd>
			
									<input type="hidden" name="', $context['session_var'], '" value="', $context['session_id'], '">
				<input type="submit" value="Add" class="button" style="float: right">
				</form> 
								</dl>	
								</div>';
    echo '<div class="cat_bar">
			<h3 class="catbg">
				Members List
			</h3>
		</div>';

    // Go through each table!
    echo '	<strong class="">Total Amount of sRCP in Current Pool:	 ' . $context['pool_amount'] . '</strong><form  action="' . $context['delete_url'] . '" method="post"><table class="table_grid" id="member_list">
			<thead>
				<tr class="title_bar">
					<th scope="col" id="header_member_list_id_member" class="id_member">
						Member ID
					</th>
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Username 
					</th>		
						<th scope="col" id="header_member_list_user_name" class="user_name">
					Address 
					</th>	<th scope="col" id="header_member_list_user_name" class="user_name">
					sRCP 
					</th>
						<th scope="col" id="header_member_list_user_name" class="user_name">
					Transfer sRCP 
					</th>
					<th scope="col" id="header_member_list_check" class="check centercol">
						<input type="checkbox" onclick="invertAll(this, this.form);">
					</th>
					
				</tr>
			</thead>
			<tbody>';
    foreach ($context['users'] as $val) {
        $merit = $val['sflm'] ?? 0;
        echo '
				<tr class="windowbg" id="list_member_list_0">
					<td class="id_member">
						' . $val['id_member'] . '
					</td>
					<td class="user_name">
						<a href="http://forum02.firedao.online/index.php?action=profile;u=' . $val['id_member'] . '">' . $val['member_name'] . '</a>
					</td>
					<td class="display_name">
						' . $val['address'] . '
					</td><td class="display_name">
						' . $merit . '
					</td>
					<td class="user_name"><input type="number" name="amount[]"><input type="hidden" name="id_member[]" value="' . $val['id_member'] . '"></td>
					<td class="check centercol">
						<input type="checkbox" name="delete[]" value="' . $val['id'] . '">
					</td>
				</tr>';
    }
    echo '
			</tbody>
		</table>
          <div class="flow_auto">
			<div class="additional_row">
				<input type="hidden" name="', $context['session_var'], '" value="', $context['session_id'], '">
				<input type="hidden" name="work" value="delete">
				<input type="submit" name="delete_members" value="Remove Selected Members" style="float: right" data-confirm="Are you sure you want to delete the selected members?" class="button you_sure">
			    <input type="submit" name="transfer" value="Transfer sRCP" style="float: right" class="button">
			</div>
		</div>
            </form>';
}
function template_usersFLMTransfer(){
    global $context, $txt;

    if (!empty($context['saved_successful']))
        echo '
					<div class="infobox">', $txt['save'], '</div>';
    if (!empty($context['not_found_user']))
        echo '
					<div class="errorbox">', $txt['username_no_exist'], '</div>';
    if (!empty($context['exists']))
        echo '
					<div class="errorbox">', $txt['exists_this_user'], '</div>';
    echo '
		<div class="cat_bar">
			<h3 class="catbg">Manage RCP</h3>
		</div>
		<p class="information">
Function to add or remove users from the Merit Source list as distributors of sRCP.				</p>
		<div id="report_buttons">';

    echo '
		</div>';
    template_flm_menu('usersFLMTransfer');

    // Go through each table!
    echo '<form  method="post"><table class="table_grid" id="member_list">
			<thead>
				<tr class="title_bar">
					<th scope="col" id="header_member_list_id_member" class="id_member">
						 ID
					</th>
					<th scope="col" id="header_member_list_user_name" class="user_name">
					From 
					</th>		
						<th scope="col" id="header_member_list_user_name" class="user_name">
					To 
					</th>		
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Amount 
					</th>
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Time 
					</th>
				</tr>
			</thead>
			<tbody>';
    foreach ($context['users'] as $k=> $val) {
        $id = $k+$context['start'] + 1;
        echo '
				<tr class="windowbg" id="list_member_list_0">
					<td class="id_member">
						' . $id . '
					</td>
					<td class="user_name">
			        ' . $val['a'] . '
					</td>
					<td class="user_name">
			        ' . $val['b'] . '
					</td>
					<td class="display_name">
						' . $val['amount'] . '
					</td>
					<td class="check centercol">
					' . date('Y-m-d H:i:s',$val['create_at']) . '
					</td>
				</tr>';
    }
    echo '
			</tbody>
		</table>
       	<div class="pagesection">
			<div class="pagelinks floatleft">', $context['page_index'], '</div>
        </div>
            </form>';
}
function template_sFLMTransfer(){
    global $context, $txt;

    if (!empty($context['saved_successful']))
        echo '
					<div class="infobox">', $txt['save'], '</div>';
    if (!empty($context['not_found_user']))
        echo '
					<div class="errorbox">', $txt['username_no_exist'], '</div>';
    if (!empty($context['exists']))
        echo '
					<div class="errorbox">', $txt['exists_this_user'], '</div>';
    echo '
		<div class="cat_bar">
			<h3 class="catbg">Manage RCP</h3>
		</div>
		<p class="information">
Function to add or remove users from the Merit Source list as distributors of sRCP.				</p>
		<div id="report_buttons">';

    echo '
		</div>';
    template_flm_menu('sFLMTransfer');

    // Go through each table!
    echo '<form  method="post"><table class="table_grid" id="member_list">
			<thead>
				<tr class="title_bar">
					<th scope="col" id="header_member_list_id_member" class="id_member">
						 ID
					</th>
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Operator 
					</th>		
						<th scope="col" id="header_member_list_user_name" class="user_name">
					To 
					</th>		
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Amount 
					</th>
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Time 
					</th>
				</tr>
			</thead>
			<tbody>';
    foreach ($context['users'] as $k=> $val) {
        $id = $k+$context['start'] + 1;
        echo '
				<tr class="windowbg" id="list_member_list_0">
					<td class="id_member">
						' .$id . '
					</td>
					<td class="user_name">
			        ' . $val['a'] . '
					</td>
					<td class="user_name">
			        ' . $val['b'] . '
					</td>
					<td class="display_name">
						' . $val['amount'] . '
					</td>
					<td class="check centercol">
					' . date('Y-m-d H:i:s',$val['create_at']) . '
					</td>
				</tr>';
    }
    echo '
			</tbody>
		</table>
       	<div class="pagesection">
			<div class="pagelinks floatleft">', $context['page_index'], '</div>
        </div>
            </form>';
}
function template_sFLM()
{
    global $context, $txt;

    if (!empty($context['saved_successful']))
        echo '
					<div class="infobox">', $txt['save'], '</div>';
    if (!empty($context['not_found_user']))
        echo '
					<div class="errorbox">', $txt['username_no_exist'], '</div>';
    if (!empty($context['exists']))
        echo '
					<div class="errorbox">', $txt['exists_this_user'], '</div>';
    if (!empty($context['exceeded_maximum']))
        echo '
					<div class="errorbox">', $txt['exceeded_maximum'], '</div>';
    echo '
		<div class="cat_bar">
			<h3 class="catbg">Manage RCP</h3>
		</div>
		<p class="information">
Function to add or remove users from the Merit Source list as distributors of sRCP.				</p>
		<div id="report_buttons">';

    echo '
		</div>';
    template_flm_menu('sFLM');
    echo '<div class="half_content">
		<div class="cat_bar">
			<h3 class="catbg">
				
				<a href="http://forum02.firedao.online/index.php?action=groups;sa=requests" id="group_requests_link">sRCP Detail</a>
			</h3>
		</div>
		<div class="windowbg" id="group_requests_panel">
			<ul>
				<li>
					<p><strong class="smalltext">Total Amount of Current sRCP Pool:', $context['pool_amount'], '</strong></p>
					<p><strong class="smalltext">Total Burnt:', $context['total_issue'] -  $context['user_holder'] - $context['pool_amount'], '</strong></p>
					<p><strong class="smalltext">Total sRCP of Current sRCP Holders:', $context['user_holder'], '</strong></p>
					<p><strong class="smalltext">Total issued:', $context['total_issue'], '</strong></p>
				</li>
			</ul>
		</div><!-- #group_requests_panel -->
</div><div class="half_content">
		<div class="cat_bar">
			<h3 class="catbg">
				issue sRCP
			</h3>
		</div>
		<div class="windowbg" id="group_requests_panel">
			<ul>
				<li>
				<form  method="post" action="', $context['post_url'], '" >
					<strong class="smalltext">issue amount</strong>
					<input type="number" name="amount" style="width:80px">
					<input type="hidden" name="', $context['session_var'], '" value="', $context['session_id'], '">
					<input type="submit" value="issue" class="button">
				</form>
				<br/>	<br/>	<br/>
				</li>
			</ul>
		</div><!-- #group_requests_panel -->
</div>';
    echo '<div class="cat_bar">
			<h3 class="catbg">
				Manager Total Issue sRCP 
			</h3>
		</div>';

    // Go through each table!
    echo '<form  action="' . $context['delete_url'] . '" method="post"><table class="table_grid" id="member_list">
			<thead>
				<tr class="title_bar">
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Username 
					</th>		
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Amount 
					</th>
				</tr>
			</thead>
			<tbody>';
    foreach ($context['users_total'] as $k=> $val) {
        echo '
				<tr class="windowbg" id="list_member_list_0">
					<td class="user_name">
			        ' . $val['member_name'] . '
					</td>
					<td class="display_name">
						' . $val['amount'] . '
					</td>
				
				</tr>';
    }
    echo '
			</tbody>
		</table>
       
            </form> <br/><hr/><br/>';

    echo '<div class="cat_bar">
			<h3 class="catbg">
				Manager Issue sRCPS Records
			</h3>
		</div>';

    // Go through each table!
    echo '<form  action="' . $context['delete_url'] . '" method="post"><table class="table_grid" id="member_list">
			<thead>
				<tr class="title_bar">
					<th scope="col" id="header_member_list_id_member" class="id_member">
						 ID
					</th>
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Username 
					</th>		
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Amount 
					</th>
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Time 
					</th>
				</tr>
			</thead>
			<tbody>';
    foreach ($context['users'] as $k => $val) {
        $id = $k + $context['start'] + 1;
        echo '
				<tr class="windowbg" id="list_member_list_0">
					<td class="id_member">
						' . $id . '
					</td>
					<td class="user_name">
			        ' . $val['member_name'] . '
					</td>
					<td class="display_name">
						' . $val['amount'] . '
					</td>
					<td class="check centercol">
					' . date('Y-m-d H:i:s',$val['create_at']) . '
					</td>
				</tr>';
    }
    echo '
			</tbody>
		</table>
       	<div class="pagesection">
			<div class="pagelinks floatleft">', $context['page_index'], '</div>
        </div>
            </form>';

}
function template_flmexchange()
{
    global $context, $txt;

    if (!empty($context['saved_successful']))
        echo '
					<div class="infobox">', $txt['save'], '</div>';
    if (!empty($context['not_found_user']))
        echo '
					<div class="errorbox">', $txt['username_no_exist'], '</div>';
    if (!empty($context['exists']))
        echo '
					<div class="errorbox">', $txt['exists_this_user'], '</div>';
    echo '
		<div class="cat_bar">
			<h3 class="catbg">RCP Swap Center</h3>
		</div>
		<p class="information">
Function to add or remove users from the Merit Source list as distributors of sRCP.				</p>
		<div id="report_buttons">';

    echo '
		</div>';
    template_flm_menu('flmexchange');
    echo '<div class="cat_bar">
			<h3 class="catbg">Set RCP Exchange Limit</h3>
		</div>
		<div class="windowbg">
								<dl class="settings">
								  <form method="post" action="', $context['limit_url'], '" >    
									<h1>Single Min: <input type="number" name="min" id="recaptcha_site_key" value="', $context['min'], '"></h1>
									<br>
									<h1>Single Max: <input type="number" name="max" id="recaptcha_site_key" value="', $context['max'], '"></h1>
                                    <br>
									<h1>User invitation level: <input type="number" name="level" id="recaptcha_site_key" value="', $context['level'], '"></h1>
									<input type="hidden" name="', $context['session_var'], '" value="', $context['session_id'], '">
				<input type="submit" value="Modify" class="button">
				</form> 
								</dl>	
								</div>';
    echo '<div class="cat_bar">
			<h3 class="catbg">Set RCP Exchange Tokens</h3>
		</div>
		<div class="windowbg">
								<dl class="settings">
								  <form method="post" action="', $context['post_url'], '" >    
									<h1>token <input type="text" name="token" id="recaptcha_site_key"></h1>
									<br>
									<h1>radio: <input type="number" name="radio" id="recaptcha_site_key"></h1>
									<input type="hidden" name="', $context['session_var'], '" value="', $context['session_id'], '">
				<input type="submit" value="Add" class="button">
				</form> 
								</dl>	
								</div>';


    // Go through each table!
    echo '<div class="cat_bar">
			<h3 class="catbg">Exchange List(The radio is RCP:Token is ?)</h3>
		</div><form  method="post" action="', $context['modify_url'], '"><table class="table_grid" id="member_list">
			<thead>
				<tr class="title_bar">
					<th scope="col" id="header_member_list_id_member" class="id_member">
						 ID
					</th>
						<th scope="col" id="header_member_list_id_member" class="id_member">
						 token
					</th>
					<th scope="col" id="header_member_list_user_name" class="user_name">
					ratio 
					</th>		
					<th scope="col" id="header_member_list_user_name" class="user_name">
					status 
					</th>		
				</tr>
			</thead>
			<tbody>';
    foreach ($context['tokens'] as $k=> $val) {

//        $id = $k+$context['start'] + 1;

        echo '
				<tr class="windowbg" id="list_member_list_0">
					<td class="id_member">
						' . $val['id'] .  '
					<input type="hidden" name="id[]" value="	' . $val['id'] .  '">
					<td class="user_name">
			        ' . $val['token'] . '
					</td>
						<td class="user_name"><input type="text" name="radio[]"  value="'.$val['radio'].'">
					</td>
					
					<td class="display_name">';

            echo 'Disabled<input type="checkbox" name="pause[]" ',$val['pause'] == 0  ? '' : ' checked', ' value="	' . $val['id'] .  '">';
        echo '
					
				</tr>';
    }
    echo '
			</tbody>
			
		</table>
		<div class="additional_row">
				<input type="hidden" name="', $context['session_var'], '" value="', $context['session_id'], '">
				<input type="submit" name="do_state" value="Modify State" style="float: right" class="button">
			</div>
            </form>';


    template_apply_menu('all');


    // Go through each table!
    echo '<div class="cat_bar">
			<h3 class="catbg">All List</h3>
		</div><form  method="post" action="', $context['modify_url'], '"><table class="table_grid" id="member_list">
			<thead>
				<tr class="title_bar">
					<th scope="col" id="header_member_list_id_member" class="id_member">
						 ID
					</th>
						
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Username 
					</th>		
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Realname 
					</th>	
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Address 
					</th>		
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Token 
					</th>
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Amount 
					</th>	
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Token Amount 
					</th>	
					<th scope="col" id="header_member_list_user_name" class="user_name">
					state 
					</th>	
					<th scope="col" id="header_member_list_user_name" class="user_name">
					complete 
					</th>
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Time 
					</th>
				</tr>
			</thead>
			<tbody>';
    foreach ($context['users'] as $k=> $val) {
//        $id = $k+$context['start'] + 1;
        switch ($val['state']) {
            case '1':
                $state = 'Pass';
                break;
            case '2':
                $state = 'Reject';
                break;
            default:
                $state = 'Not Reviewed';
                break;
        }
        $comp = $val['complete'] == 0 ? 'No' : 'Yes';
        echo '
				<tr class="windowbg" id="list_member_list_0">
					<td class="id_member">
						' . $val['order_id'] .  '
					
					<td class="user_name">
			        ' . $val['member_name'] . '
					</td>
					<td class="user_name">
			        ' . $val['real_name'] . '
					</td>
						<td class="user_name">
			        ' . $val['address'] . '
					</td>
					</td>
						<td class="user_name">
			        ' . $val['token'] . '
					</td>
					<td class="display_name">
						' . $val['amount'] . '
					</td>
					<td class="display_name">
						' . $val['real_amount'] . '
					</td>
					<td class="display_name">
                     ' . $state . '
					</td>
						<td class="display_name">
						   ' . $comp . '
                         </td>
					<td class="check centercol">
					' . date('Y-m-d H:i:s',$val['create_at']) . '
					</td>
				</tr>';
    }
    echo '
			</tbody>
		</table>
		
       	<div class="pagesection">
			<div class="pagelinks floatleft">', $context['page_index'], '</div>
        </div>
        
            </form>';

}
function template_notReview()
{
    global $context, $txt;

    if (!empty($context['saved_successful']))
        echo '
					<div class="infobox">', $txt['save'], '</div>';
    if (!empty($context['not_found_user']))
        echo '
					<div class="errorbox">', $txt['username_no_exist'], '</div>';
    if (!empty($context['exists']))
        echo '
					<div class="errorbox">', $txt['exists_this_user'], '</div>';
    echo '
		<div class="cat_bar">
			<h3 class="catbg">RCP Swap Center</h3>
		</div>
		<p class="information">
Function to add or remove users from the Merit Source list as distributors of sRCP.				</p>
		<div id="report_buttons">';

    echo '
		</div>';

    template_apply_menu('not');
    // Go through each table!

    echo '<a class="button" style="float: right" href="', $context['download_url'], '" >Export Data</a> <br/><br/>
<div class="cat_bar">
			<h3 class="catbg">Not Reviewed List</h3>
		</div><form  method="post" action="', $context['modify_url'], '"><table class="table_grid" id="member_list">
			<thead>
				<tr class="title_bar">
					<th scope="col" id="header_member_list_id_member" class="id_member">
						 ID
					</th>
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Username 
					</th>		
						<th scope="col" id="header_member_list_user_name" class="user_name">
					Realname 
					</th>	
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Address 
					</th>		
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Token 
					</th>		
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Amount 
					</th>	
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Token Amount 
					</th>	
					<th scope="col" id="header_member_list_user_name" class="user_name">
					state 
					</th>	
					<th scope="col" id="header_member_list_user_name" class="user_name">
					complete 
					</th>
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Time 
					</th>
				</tr>
			</thead>
			<tbody>';
    foreach ($context['users'] as $k=> $val) {
        $id = $k+$context['start'] + 1;
        switch ($val['state']) {
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
        $comp = $val['complete'] == 0 ? 'No' : 'Yes';
        echo '
				<tr class="windowbg" id="list_member_list_0">
					<td class="id_member">
						' . $id . '
					</td>
					
					<td class="user_name">
			        ' . $val['member_name'] . '
					</td>
					<td class="user_name">
			        ' . $val['real_name'] . '
					</td>
						<td class="user_name">
			        ' . $val['address'] . '
					</td>
					<td class="user_name">
			        ' . $val['token'] . '
					</td>
					<td class="display_name">
						' . $val['amount'] . '
					</td>
					<td class="display_name">
						' . $val['real_amount'] . '
					</td>
					<td class="display_name">';
        if ($val['state'] == 0){
            echo 'Pass<input type="checkbox" name="pass[]" value="' . $val['id'] . '"> reject<input type="checkbox" name="reject[]" value="' . $val['id'] . '">';
        }else{
            echo $state;
        }


        echo '
					</td>
						<td class="display_name">';
        if ($val['complete'] == 0){
            echo 'complete<input type="checkbox" name="complete[]" value="' . $val['id'] . '">';
        } else{
            echo $comp;
        }
        echo '</td>
					<td class="check centercol">
					' . date('Y-m-d H:i:s',$val['create_at']) . '
					</td>
				</tr>';
    }
    echo '
			</tbody>
		</table>
		
       	<div class="pagesection">
			<div class="pagelinks floatleft">', $context['page_index'], '</div>
        </div>
          <div class="flow_auto">
			<div class="additional_row">
				<input type="hidden" name="', $context['session_var'], '" value="', $context['session_id'], '">
				<input type="submit" name="do_state" value="Modify State" style="float: right" class="button">
			</div>
		</div>
            </form>';

}
function template_reviewed()
{
    global $context, $txt;

    if (!empty($context['saved_successful']))
        echo '
					<div class="infobox">', $txt['save'], '</div>';
    if (!empty($context['not_found_user']))
        echo '
					<div class="errorbox">', $txt['username_no_exist'], '</div>';
    if (!empty($context['exists']))
        echo '
					<div class="errorbox">', $txt['exists_this_user'], '</div>';
    echo '
		<div class="cat_bar">
			<h3 class="catbg">RCP Swap Center</h3>
		</div>
		<p class="information">
Function to add or remove users from the Merit Source list as distributors of sRCP.				</p>
		<div id="report_buttons">';

    echo '
		</div>';

    template_apply_menu('reviewed');
    // Go through each table!
    echo '<a class="button" style="float: right" href="', $context['download_url'], '" >Export Data</a> <br/><br/>
<div class="cat_bar">
			<h3 class="catbg"> Reviewed List</h3>
		</div><form  method="post" action="', $context['modify_url'], '"><table class="table_grid" id="member_list">
			<thead>
				<tr class="title_bar">
					<th scope="col" id="header_member_list_id_member" class="id_member">
						 ID
					</th>
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Username 
					</th>	
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Realname 
					</th>		
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Address 
					</th>		
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Token 
					</th>		
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Amount 
					</th>	
						<th scope="col" id="header_member_list_user_name" class="user_name">
					Token Amount 
					</th>	
					<th scope="col" id="header_member_list_user_name" class="user_name">
					state 
					</th>	
					<th scope="col" id="header_member_list_user_name" class="user_name">
					complete 
					</th>
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Time 
					</th>
				</tr>
			</thead>
			<tbody>';
    foreach ($context['users'] as $k=> $val) {
        $id = $k+$context['start'] + 1;
        switch ($val['state']) {
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
        $comp = $val['complete'] == 0 ? 'No' : 'Yes';
        echo '
				<tr class="windowbg" id="list_member_list_0">
					<td class="id_member">
						' . $id . '
					</td>
				
					<td class="user_name">
			        ' . $val['member_name'] . '
					</td>
					<td class="user_name">
			        ' . $val['real_name'] . '
					</td>
						<td class="user_name">
			        ' . $val['address'] . '
					</td>
					<td class="user_name">
			        ' . $val['token'] . '
					</td>
					<td class="display_name">
						' . $val['amount'] . '
					</td>
						<td class="display_name">
						' . $val['real_amount'] . '
					</td>
					<td class="display_name">
                        ' . $state. '
					</td>
						<td class="display_name">';
        if ($val['complete'] == 0){
            echo 'Yes<input type="checkbox" name="complete[]" value="' . $val['id'] . '">';
        } else{
            echo $comp;
        }
        echo '</td>
					<td class="check centercol">
					' . date('Y-m-d H:i:s',$val['create_at']) . '
					</td>
				</tr>';
    }
    echo '
			</tbody>
		</table>
		
       	<div class="pagesection">
			<div class="pagelinks floatleft">', $context['page_index'], '</div>
        </div>
          <div class="flow_auto">
			<div class="additional_row">
				<input type="hidden" name="', $context['session_var'], '" value="', $context['session_id'], '">
				<input type="submit" name="do_state" value="Modify complete" style="float: right" class="button">
			</div>
		</div>
            </form>';

}
function template_complete()
{
    global $context, $txt;

    if (!empty($context['saved_successful']))
        echo '
					<div class="infobox">', $txt['save'], '</div>';
    if (!empty($context['not_found_user']))
        echo '
					<div class="errorbox">', $txt['username_no_exist'], '</div>';
    if (!empty($context['exists']))
        echo '
					<div class="errorbox">', $txt['exists_this_user'], '</div>';
    echo '
		<div class="cat_bar">
			<h3 class="catbg">RCP Swap Center</h3>
		</div>
		<p class="information">
Function to add or remove users from the Merit Source list as distributors of sRCP.				</p>
		<div id="report_buttons">';

    echo '
		</div>';

    template_apply_menu('complete');

    // Go through each table!
    echo '<div class="cat_bar">
			<h3 class="catbg">complete List</h3>
		</div><form  method="post"><table class="table_grid" id="member_list">
			<thead>
				<tr class="title_bar">
					<th scope="col" id="header_member_list_id_member" class="id_member">
						 ID
					</th>
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Username 
					</th>		
						<th scope="col" id="header_member_list_user_name" class="user_name">
					Realname 
					</th>	
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Address 
					</th>	
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Token 
					</th>			
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Amount 
					</th>	
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Token Amount 
					</th>	
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Time 
					</th>
				</tr>
			</thead>
			<tbody>';
    foreach ($context['users'] as $k=> $val) {
        $id = $k+$context['start'] + 1;
        echo '
				<tr class="windowbg" id="list_member_list_0">
					<td class="id_member">
						' . $id . '
					</td>
			
					<td class="user_name">
			        ' . $val['member_name'] . '
					</td>
					<td class="user_name">
			        ' . $val['real_name'] . '
					</td>
						<td class="user_name">
			        ' . $val['address'] . '
					</td>
					<td class="user_name">
			        ' . $val['token'] . '
					</td>
					<td class="display_name">
						' . $val['amount'] . '
					</td>
						<td class="display_name">
						' . $val['real_amount'] . '
					</td>
					<td class="check centercol">
					' . date('Y-m-d H:i:s',$val['create_at']) . '
					</td>
				</tr>';
    }
    echo '
			</tbody>
		</table>
		
       	<div class="pagesection">
			<div class="pagelinks floatleft">', $context['page_index'], '</div>
        </div>
    
            </form>';

}

function template_emerit()
{
    global $context, $txt;

    if (!empty($context['saved_successful']))
        echo '
					<div class="infobox">', $txt['save'], '</div>';
    if (!empty($context['not_found_user']))
        echo '
					<div class="errorbox">', $txt['username_no_exist'], '</div>';
    if (!empty($context['exists']))
        echo '
					<div class="errorbox">', $txt['exists_this_user'], '</div>';
    echo '
		<div class="cat_bar">
			<h3 class="catbg">Manage RCP</h3>
		</div>
		<p class="information">
Function to add or remove users from the Merit Source list as distributors of sRCP.				</p>
		<div id="report_buttons">';

    echo '
		</div>';
    template_flm_menu('emerit');


    // Go through each table!
    echo '<form  method="post"><table class="table_grid" id="member_list">
			<thead>
				<tr class="title_bar">
					<th scope="col" id="header_member_list_id_member" class="id_member">
						 ID
					</th>
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Username 
					</th>		
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Amount 
					</th>
					<th scope="col" id="header_member_list_user_name" class="user_name">
					Time 
					</th>
				</tr>
			</thead>
			<tbody>';
    foreach ($context['users'] as $val) {
        echo '
				<tr class="windowbg" id="list_member_list_0">
					<td class="id_member">
						' . $val['id'] . '
					</td>
					<td class="user_name">
			        ' . $val['member_name'] . '
					</td>
					<td class="display_name">
						' . $val['amount'] . '
					</td>
					<td class="check centercol">
					' . date('Y-m-d H:i:s',$val['create_at']) . '
					</td>
				</tr>';
    }
    echo '
			</tbody>
		</table>
       	<div class="pagesection">
			<div class="pagelinks floatleft">', $context['page_index'], '</div>
        </div>
            </form>';

}

function template_sendrcp()
{
    global $context, $txt;

    if (!empty($context['saved_successful']))
        echo '
					<div class="infobox">', $txt['save'], '</div>';
    if (!empty($context['not_found_user']))
        echo '
					<div class="errorbox">', $txt['username_no_exist'], '</div>';
    if (!empty($context['exists']))
        echo '
					<div class="errorbox">', $txt['exists_this_user'], '</div>';
    echo '
		<div class="cat_bar">
			<h3 class="catbg">Reply post send RCP</h3>
		</div>
	
		<div id="report_buttons">';

    echo '
		</div>';

    template_flm_menu('sendrcp');

    // Go through each table!
    echo '<div class="cat_bar">
			<h3 class="catbg">详情</h3>
	
		</div><br><form  method="post" action="', $context['post_url'], '" ><table class="table_grid" id="member_list">
			<p>一级板块<select id="select1" class="wh-board">
			';
    foreach ($context['cats'] as $val) {
        echo '<option value="cat-', $val['id_cat'], '">', $val['name'], '</option>
				';
    }
    echo '
		</select>
	    </p>
	    	<br/>
		<p>二级板块<select id="select2" class="wh-board">
		<option value="">--Select--</option>
			';
    echo '
		</select>
		</p>
		<br/>
		<p>三级板块<select id="select3" class="wh-board">
		<option value="">--Select--</option>
			';

    echo '

		</select>
		</p>
		<br/>
		<p>四级板块<select id="select4" class="wh-board">
			<option value="">--Select--</option>
			';

    echo '

		</select>
		</p>
		<br/>
		<p>选择作者<select id="selUser">
			<option value="">--Select--</option>
			';

    echo '

		</select>
		</p>
		<br/>
		<p>选择主题<select id="topic-select" name="topic_id">
			<option value="">--Select--</option>
			';

    echo '
		</select>
		</p>
		<br/> 
		<p>选择日期<input type="date" name="date">
			';
    echo '
		</p>
		<br/>
		<p>开始时间<input type="time" name="start_time">
			';
    echo '
结束时间<input type="time" name="end_time">
		</p>
		<br>
		<p>
			';
    echo '
			<p>选择群组<select id="group" name="group" class="wh2-board">
			';
    foreach ($context['groups'] as $val) {
        echo '<option value="', $val['id_group'], '">', $val['group_name'], '</option>
				';
    }
    echo '</select>	<br>	<br>
RCP数量<input type="number" name="count">
		</p>
		
       <p>	<input type="hidden" name="', $context['session_var'], '" value="', $context['session_id'], '">
				<input type="submit" value="发送" class="button" style="float: left"></p>
    
            </form>';
}
