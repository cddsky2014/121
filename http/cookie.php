<?php
header("Set-Cookie: testcookie=中文;");
print_r($_COOKIE);

//setCookie('name','lucy');
/*
GET /http/cookie.php HTTP/1.1
Host:
Cookie: name=lucy
*/