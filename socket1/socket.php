<?php
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_connect($socket, '127.0.0.1', 1937);
$str = 'good';
socket_write($socket, $str, strlen($str));

/*
error_reporting(E_ALL);
set_time_limit(0);

$port = 1937;
$ip = "127.0.0.1";

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

if ($socket < 0) {
    echo "socket_create() failed: reason: " . socket_strerror($socket) . "\n";
}

$result = socket_connect($socket, $ip, $port);

if ($result < 0) {
    echo "socket_connect() failed.\nReason: ($result) " . socket_strerror($result) . "\n";
}


$in = "Ho \r\n";
$in .= "first blood \r\n";
$out = '';

if(!socket_write($socket, $in, strlen($in))) {
    echo "socket_write() failed: reason: " . socket_strerror($socket) . "\n";
}else {
    echo "发送到服务器信息成功！\n";
    echo "发送的内容为:<font color='red'>$in</font> <br>";
}

echo "<hr />";

while($out = socket_read($socket, 8192)) {
    echo "接收服务器回传信息成功！\n";
    echo "接受的内容为:",$out;
}

socket_close($socket);
*/
?>