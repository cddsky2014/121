<?php
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,'http://127.0.0.1/curl/response.php?age=20');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, array('name'=>'lucy'));
echo curl_exec($ch);