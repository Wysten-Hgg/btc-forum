<?php
require_once './vendor/autoload.php';
require_once(dirname(__FILE__) . '/Settings.php');
use Web3\Contract;
use GuzzleHttp\Client as GuzzleHttp;
define('SMF', 1);
define('SMF_VERSION', '2.1.3');
define('SMF_FULL_VERSION', 'SMF ' . SMF_VERSION);
define('SMF_SOFTWARE_YEAR', '2022');

define('JQUERY_VERSION', '3.6.0');
define('POSTGRE_TITLE', 'PostgreSQL');
define('MYSQL_TITLE', 'MySQL');
define('SMF_USER_AGENT', 'Mozilla/5.0 (' . php_uname('s') . ' ' . php_uname('m') . ') AppleWebKit/605.1.15 (KHTML, like Gecko)  SMF/' . strtr(SMF_VERSION, ' ', '.'));
define('RPC_URL','https://eptest.wizz.cash/proxy/');
define('PARENT_REALM_ID','7189eceba798711469728fcd197f651f9d04ef3bb445894446ed7063e5d4a803i0');
set_time_limit(0);
$block = file_get_contents("lastblock");
$block = str_replace(array(" ", "\n", "\r"), "", $block);
global $rewardUsers,$currentBlock;
$currentBlock = file_get_contents("https://mempool.space/testnet/api/blocks/tip/height");
$diffBlock = $currentBlock - $block;
$smcFunc = array();
if ($currentBlock > $block) {
    getFRP($diffBlock);
    file_put_contents("lastblock",$currentBlock);
}

function getFRP($diffBlock){
    global  $modSettings, $sourcedir,$rewardUsers;
    require_once($sourcedir . '/Load.php');
    require_once($sourcedir . '/Subs-Members.php');
    require_once($sourcedir . '/Subs.php');
    require_once($sourcedir . '/Security.php');
    require_once($sourcedir . '/Logging.php');
    require_once($sourcedir . '/Errors.php');
    $client = new GuzzleHttp(array_merge(['timeout' => 60, 'verify' => false]));
    $userRewardAmounts = [];
    try {
        $subRealms = request($client,'blockchain.atomicals.find_subrealms', PARENT_REALM_ID);
        foreach ($subRealms as $subRealm) {
            $val = [];
            $result = request($client,'blockchain.atomicals.get_location', $subRealm->atomical_id);
            $hexScript = $result->location_info[0]->script;
            $command = "node ./node-verify-message/script-address.js  {$hexScript}";
            exec($command, $val, $err);
            if (isset($val[0]) && strlen($val[0]) == 62) {
                echo "当前一级子领域:" . $result->{'$request_subrealm'} .PHP_EOL;
                echo "当前子领域所有者:" . $val[0] .PHP_EOL;
//                $length = strlen($result->{'$request_subrealm'});
                $radio = getFRPRadio($val[0],$result->{'$request_subrealm'});
                $FRPAmount = $diffBlock + $diffBlock * $radio;
                echo "获取个人积分:" .$FRPAmount .PHP_EOL;
                $userRewardAmounts[$val[0]] = isset($userRewardAmounts[$val[0]]) ? $userRewardAmounts[$val[0]] + $FRPAmount : $FRPAmount;
                //single
//                updateFRP($val[0],$FRPAmount);

                /*$secondSubRealms = request($client,'blockchain.atomicals.find_subrealms', $subRealm->atomical_id);
                foreach ($secondSubRealms as $secondSubRealm){
                    $secondVal = [];
                    $result = request($client,'blockchain.atomicals.get_location', $secondSubRealm->atomical_id);
                    $hexScript = $result->location_info[0]->script;
                    $command = "node ./node-verify-message/script-address.js  {$hexScript}";
                    exec($command, $secondVal, $err);
                    if (isset($secondVal[0]) && strlen($secondVal[0]) == 62) {
                        echo "当前二级子领域:" . $result->{'$request_subrealm'} .PHP_EOL;
                        echo "当前子领域所有者:" . $secondVal[0] .PHP_EOL;
                        $radios = getFRPRadio();
                        $radio = $radios['single'][4] ?? 0;
                        $parentRadio = $radios['group'][$length];
                        $FRPAmount = $diffBlock + $diffBlock * $radio;
                        $parentFRPAmount = $diffBlock + $diffBlock * $parentRadio;
                        //single
                        echo "更新二级个人积分:" .$FRPAmount .PHP_EOL;
                        updateFRP($secondVal[0],$FRPAmount);
                        //group
                        echo "更新二级团队积分:" .$parentFRPAmount .PHP_EOL;
                        updateFRP($val[0],$parentFRPAmount);
                    }
                }*/
            }

        }
        foreach ($userRewardAmounts as $k => $userRewardAmount) {
            $boostPower = max($rewardUsers[$k]);
            $reward = $userRewardAmount + $userRewardAmount * $boostPower;
            $reward = $reward + $reward * getEarlyBirdReward();
            $reward = $reward + $reward * getHolderReward();
            updateFRP($k,$reward);
        }
    } catch (Exception $exception) {
        echo 'error:'.$exception->getMessage().PHP_EOL;
    }

}
function getEarlyBirdReward() {
    global $currentBlock;
    $startBlock = 840000;
    $intervalBlock = 144;
    $rewardDatas = [
        0 => 7 ,
        1 => 6 ,
        2 => 5,
        3 => 4,
        4 => 3,
        5 => 2
    ];
    if ($currentBlock >= $startBlock) {
        $diffBlock = $currentBlock - $startBlock;
        $cycle = intval($diffBlock / $intervalBlock);
        return $rewardDatas[$cycle];
    }else{
        return  0;
    }
}
function getHolderReward(){
    global $currentBlock;
    $rewardDatas = [
        0 => 7 ,
        1 => 6.5 ,
        2 => 6,
        3 => 5.5,
        4 => 5,
        5 => 4.5,
        6 => 4,
        7 => 3.5,
        8 => 3,
        9 => 2.5,
        10 => 2,
        11 => 1.5,
        12 => 1,
        13 => 0.5
    ];
    $startBlock = 840000;
    $durationBlock = 10000;
    $rewardDuration = 14;
    $intervalBlock = 144;
    $rewardLastBlock = $startBlock + $durationBlock;
    if($currentBlock + $rewardDuration * $intervalBlock >= $rewardLastBlock && $currentBlock <= $rewardLastBlock) {
        $diffBlock = $rewardLastBlock - $currentBlock;
        $cycle = intval($diffBlock / $intervalBlock);
        return $rewardDatas[$cycle];
    }else{
        return  0;
    }
}
function getFRPRadio($address,$string){
    global $smcFunc,$rewardUsers;
    loadDatabase();
    reloadSettings();
    $request = $smcFunc['db_query']('', '
			SELECT *
			FROM {db_prefix}realm_power
			WHERE id = {int:id}
			LIMIT 1',
        array(
            'id' => 1
        )
    );
    $luckNumber = getLuckyNumber();
    $luckArrs = getLuckyMultiple();
    $luckyRadio= getLuckyRadio();
    $result = $smcFunc['db_fetch_assoc']($request);
    $smcFunc['db_free_result']($request);
    $boostRadio =  0;
    $level = 0;
    if(preg_match('/^[0-9]$/', $string)){
        $rewardUsers[$address][] = $result['boost_one'];
        $boostRadio = $result['single_one'] ;
        $level = 1;
    }elseif (preg_match('/^[A-Za-z]$/',$string)){
        $rewardUsers[$address][] = $result['boost_two'];
        $boostRadio = $result['single_two'];
        $level = 2;
    }elseif (preg_match('/^\d{1,2}$/',$string)){
        $rewardUsers[$address][] = $result['boost_three'];
        $boostRadio = $result['single_three'];
        $level = 3;
    }elseif (preg_match('/^[A-Za-z]{2}$/',$string)){
        $rewardUsers[$address][] = $result['boost_four'];
        $boostRadio = $result['single_four'];
        $level = 4;
    }elseif (preg_match('/^\d{3}$/', $string)){
        $rewardUsers[$address][] = $result['boost_five'];
        $boostRadio =  $result['single_five'];
        $level = 5;
    }elseif (preg_match('/^\d{4}$/', $string)){
        $boostRadio = $result['single_six'];
        $level = 6;
    }elseif (preg_match('/^[A-Za-z]{3}$/',$string)){
        $boostRadio = $result['single_seven'];
        $level = 7;
    }
    $addLuckyRadio =  isset($luckArrs[$level]) ? (in_array($luckNumber,$luckArrs[$level]) ? $luckyRadio[$level] : 0) : 0;
    return $boostRadio + $addLuckyRadio;
}
function getLuckyMultiple(){
    return [
        1 => [1,2,3,4,5,6] ,
        2 => [7,8,9,10] ,
        3 => [11,12,13],
        4 => [14,15],
        5 => [16,17],
        6 => [18,19],
        7 => [20],
    ];
}
function getLuckyRadio(){
    return [
        1=>1  ,
        2=>1  ,
        3=>1 ,
        4=>2 ,
        5=>3 ,
        6=>5 ,
        7=>10 ,
    ];
}
function getLuckyNumber() {
    global $currentBlock;
    $blockHash = file_get_contents("https://mempool.space/api/block-height/".$currentBlock);
    $blockFourL = substr($blockHash, -4);
    $decNumber = hexdec($blockFourL);
    $rounding = intval($decNumber / 21);
    $lastNumber = $rounding * 21 ;
    return intval($decNumber - $lastNumber);
}
function request($client,$method, $params){
    $params = '?params=["' . $params . '"]';
    $url = RPC_URL.$method.$params;
    $res = $client->get($url);

    $body = json_decode($res->getBody());

    if (isset($body->error) && !empty($body->error)) {
        throw new \Exception($body->error->message . " [Method] {$method}", $body->error->code);
    }
    return $body->response->result;
}
function updateFRP($address,$frp){
    global $smcFunc;
    loadDatabase();
    reloadSettings();
    $request = $smcFunc['db_query']('', '
			SELECT  address,passwd, id_member, id_group, lngfile, is_activated, email_address, additional_groups, member_name, password_salt,
				passwd_flood, tfa_secret
			FROM {db_prefix}members
			WHERE btcaddress = {string:btcaddress}
			LIMIT 1',
        array(
            'btcaddress' => $address,
        )
    );
    $user_settings = $smcFunc['db_fetch_assoc']($request);

    if (empty($user_settings)){
        return;
    }
    $smcFunc['db_free_result']($request);
    $request = $smcFunc['db_query']('', '
                    SELECT  id_member,frp
                    FROM {db_prefix}property
                    WHERE id_member = {int:id_member}
                    LIMIT 1',
        array(
            'id_member' => $user_settings['id_member'],
        )
    );
    $exists = $smcFunc['db_fetch_assoc']($request);
    $smcFunc['db_free_result']($request);
    if (!empty($exists)){
        $smcFunc['db_query']('', '
                        UPDATE {db_prefix}property
                        SET frp = {int:frp}
                        WHERE id_member = {int:id}',
            array(
                'frp' => $exists['frp'] + $frp,
                'id' => $user_settings['id_member']
            )
        );
    }else{
        $smcFunc['db_insert']('',
            '{db_prefix}property',
            array(
                'id_member' => 'int',
                'frp' => 'int'
            ),
            [$user_settings['id_member'],$frp],
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
        [0,$user_settings['id_member'],$frp,time(),0,'frp'],
        array()
    );
    $request = $smcFunc['db_query']('', '
                    SELECT  id_member,frp
                    FROM {db_prefix}property
                    WHERE id_member = {int:id_member}
                    LIMIT 1',
        array(
            'id_member' => 0,
        )
    );
    $sysExists = $smcFunc['db_fetch_assoc']($request);
    $smcFunc['db_free_result']($request);
    $smcFunc['db_query']('', '
                        UPDATE {db_prefix}property
                        SET frp = {int:frp}
                        WHERE id_member = {int:id}',
        array(
            'frp' => $sysExists['frp'] - $frp,
            'id' => 0
        )
    );

}
