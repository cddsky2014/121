<?php

while(true){

	$str = fgets(STDIN);//等待用户的输入

    //创建并返回一个套接字，客户端
    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    //和服务器端建立链接
    socket_connect($socket, '192.168.34.29', 1314);
    //向服务器端送信息
    //socket_write($socket,发送的内容,发送的字节数)
	//$str = 'hello';
    socket_write($socket, $str, strlen($str));
    //关闭释放资源
    socket_close($socket);
}
?>