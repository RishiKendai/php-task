<?php

require_once '../vendor/autoload.php';

$redis = new Predis\Client();
// echo $redis->ping();

$isValidKey = $redis->get('uid');
if ($isValidKey) {
    $redis->set('uid', 'tamannaah bhaita');
    // $isValidKey = $redis->get('uid');
    echo $isValidKey;
} else {
    $redis->set('uid', 'shriya saren');
    // echo $redis->get('uid');
    // echo 'set redis';
    // $redis->expire('uid', 5);
}
