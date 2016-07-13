<?php
//确保在连接客户端时不会超时
//set_time_limit(0);

$ip = '127.0.0.1';
$port = 1937;

$socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
socket_bind($socket,$ip,$port);
socket_listen($socket);

while(true){
	$str = 'okk';
	$msg = socket_accept($socket);
	//socket_write($msg, $str, strlen($str));
	echo socket_read($msg,1);
}

/*
$count = 0;

do {
	$msgsock = socket_accept($sock); // 获取连接socket的客户端连接
    if ($msgsock < 0) {
        echo "socket_accept() failed: reason: " . socket_strerror($msgsock) . "\n";
        break;
    } else {
        //发到客户端
        $msg ="测试成功！\n".time();
        socket_write($msgsock, $msg, strlen($msg));

        $buf = socket_read($msgsock,8192);
        $talkback = "收到的信息:$buf\n";
        echo $talkback.time();

    }
    socket_close($msgsock);
} while (true);

socket_close($sock);*/
?>