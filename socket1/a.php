<?php
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP );
socket_bind($socket ,'127.0.0.1',11211 );
socket_listen($socket);
while(true){
    $con = socket_accept( $socket );
    if( $con !==false ){
        socket_write($con, 'init', 4 );
        while(  $str = socket_read( $con,1024 ) ){
            echo 'client:'.$str."\n";
            $ret = fgets(STDIN);
        }
        socket_close( $con );
    }
}