<?php
function getAvatar(){
    global $memberContext;
    $userId = $_GET['id_member'];
    loadMemberData($userId);
    loadMemberContext($userId,true);
    echo json_encode($memberContext[$userId]['avatar']);die;
}
