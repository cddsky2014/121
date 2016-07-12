<?php

$ch = curl_init();
// action='./do_upload.php'
curl_setopt($ch,CURLOPT_URL,'http://127.0.0.1/curl/up/do_upload.php');

//method="post"
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,array(
	'name'=>'lucy',
	'file[0]'=> new CURLFile('E:\121\curl\58.jpg'),
	'file[1]'=> new CURLFile('E:\121\curl\58.jpg'),
	'file[2]'=> new CURLFile('E:\121\curl\58.jpg')
	)
);
curl_exec($ch);
echo curl_error($ch);
curl_close($ch);

