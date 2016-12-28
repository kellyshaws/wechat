<?php

define('TOKEN', 'solashaw');

$signature = $_GET["signature"];
$timestamp = $_GET["timestamp"];
$nonce = $_GET["nonce"];
$echoStr = $_GET["echostr"];

$tmpArr = array(TOKEN, $timestamp, $nonce);
sort($tmpArr);
$tmpStr = implode($tmpArr);
$tmpStr = sha1($tmpStr);

if($tmpStr == $signature) {
    echo $echoStr;
}
