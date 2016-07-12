<?php

$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,'127.0.0.1/weixin/global.php');
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch, CURLOPT_POSTFIELDS, array('name'=>'lucy'));

curl_exec($ch);