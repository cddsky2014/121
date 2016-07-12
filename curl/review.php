

<?php
/*
<a href="./login.php?name=lili">login</a>

form  实现post和get请求

ajax

http

cURL 浏览器

*/
//echo file_get_contents('url');

$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,'www.baidu.com');

curl_exec($ch);
