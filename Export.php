<?php
require_once './vendor/autoload.php';
use Spatie\SimpleExcel\SimpleExcelWriter;

function downLoad($file,$data) {
    $writer = SimpleExcelWriter::streamDownload($file);
        foreach ($data as $k => $val) {
            $writer->addRow([
                'ID' => $k+1,
                'PID' => $val['pid'],
                'Username' => $val['member_name'],
                'Realname' => $val['real_name'],
                'Address' => $val['address'],
                'Amount' => $val['amount'],
                'TokenAmount' => $val['real_amount'],
                'state' => $val['state'],
                'complete' => $val['complete'],
                'Time' => date('Y-m-d H:i:s',$val['create_at']),
            ]);
            if ($k % 1000 === 0) {
                flush(); // Flush the buffer every 1000 rows
            }
        }
       $writer ->toBrowser();
}
function downLoadXP($file,$data) {
    $writer = SimpleExcelWriter::streamDownload($file);
    foreach ($data as $k => $val) {
        $writer->addRow([
            'ID' => $k+1,
            'PID' => $val['pid'],
            'Username' => $val['member_name'],
            'Address' => $val['address'],
            'XPAmount' => $val['amount'],
            'FLMAmount' => $val['real_amount'],
            'state' => $val['state'],
            'complete' => $val['complete'],
            'Time' => date('Y-m-d H:i:s',$val['create_at']),
        ]);
        if ($k % 1000 === 0) {
            flush(); // Flush the buffer every 1000 rows
        }
    }
    $writer ->toBrowser();
}
