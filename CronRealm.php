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
$currentBlock = file_get_contents("https://mempool.space/testnet/api/blocks/tip/height");
$diffBlock = $currentBlock - $block;
$smcFunc = array();
if ($currentBlock > $block) {
    getFRP($diffBlock);
    file_put_contents("lastblock",$currentBlock);
}
function getFRP($diffBlock){
    global  $modSettings, $sourcedir;
    require_once($sourcedir . '/Load.php');
    require_once($sourcedir . '/Subs-Members.php');
    require_once($sourcedir . '/Subs.php');
    require_once($sourcedir . '/Security.php');
    require_once($sourcedir . '/Logging.php');
    require_once($sourcedir . '/Errors.php');
    $client = new GuzzleHttp(array_merge(['timeout' => 60, 'verify' => false]));
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
                $length = strlen($result->{'$request_subrealm'});
                $radios = getFRPRadio();
                $radio = $radios['single'][$length] ?? 0;
                $FRPAmount = $diffBlock + $diffBlock * $radio;
                echo "更新个人积分:" .$FRPAmount .PHP_EOL;
                //single
                updateFRP($val[0],$FRPAmount);

                $secondSubRealms = request($client,'blockchain.atomicals.find_subrealms', $subRealm->atomical_id);
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
                }
            }

        }
    } catch (Exception $exception) {
        echo 'error:'.$exception->getMessage().PHP_EOL;
    }

}
function getFRPRadio(){
    global $smcFunc;
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
    $result = $smcFunc['db_fetch_assoc']($request);
    $smcFunc['db_free_result']($request);
    $single = [
        1 => $result['single_one'],
        2 => $result['single_two'],
        3 => $result['single_three'],
        4 => $result['second'],
    ];
    $group = [
        1 => $result['group_one'],
        2 => $result['group_two'],
        3 => $result['group_three'],
    ];
    return ['single'=>$single,'group'=>$group];
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
