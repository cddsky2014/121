<?php
$socket =  socket_create(AF_INET, SOCK_STREAM, SOL_TCP );
socket_connect( $socket ,'127.0.0.1', 11211 );
while( $t = socket_read( $socket,1024) ){
    echo 'server:'.$t."\n";
    $str = trim(fgets(STDIN));
    if( $str ){
        socket_write($socket, $str, strlen($str) );
    }
}
socket_close( $socket );