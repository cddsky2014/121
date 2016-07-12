<?php


$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,'http://127.0.0.1/curl/response.php?name=lili');

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

echo curl_exec($ch);