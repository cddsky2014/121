<?php

$ip = '192.168.34.29';
$port = 1314;

    //创建并返回一个套接字，也称作一个通讯节点。一个典型的网络连接由 2 个套接字构成，一个运行在客户端，另一个运行在服务器端。 
    $socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);

    //给通讯节点绑定IP地址和端口号
    socket_bind($socket,$ip,$port);

    //设置监听来自客户端的请求
    socket_listen($socket);
	
    while(true){
        //获取客户端的请求信息    
        $msg = socket_accept($socket);
		//获取用户IP
		socket_getpeername($msg,$uip);
		//echo $uip;
        //读取并输出客户端的请求信息
        //socket_read($msg,接收的字节数)
		$str = $uip.':';
		while($tmp_str=socket_read($msg,1024)){
			$str .= $tmp_str;
		}
		echo $str;
        //关闭释放资源
        socket_close($msg);
    }
    //关闭释放资源
    socket_close($socket);
?>