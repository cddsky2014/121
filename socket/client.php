<?php

    //创建并返回一个套接字，客户端
    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);


    //和服务器端建立链接
    socket_connect($socket, '127.0.0.1', 1314);
    //向服务器端送信息
    socket_write($socket, 'hello', 1024);

    //关闭释放资源
    socket_close($socket);
?>