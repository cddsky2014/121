<?php
function connect($host='127.0.0.1',$uname='root',$pwd='',$dbname='thinkshop'){
    @mysql_connect($host, $uname, $pwd);
    mysql_select_db($dbname);
    mysql_query('set names utf8');
}
function query($sql) {
    connect();
    $res = mysql_query($sql);
    $arr = array();
    while ($row = mysql_fetch_assoc($res)) {
        $arr[] = $row;
    }
    return $arr;
}
$r = query('select * from ts_users');
function del($sql) {
    connect();
    $res = mysql_query($sql);
    return $res;
}
function update( $sql){
    connect();
    $res = mysql_query($sql);
    return $res;
}

function add($sql){
    connect();
    $res = mysql_query($sql);
    if($res==true){        
        return mysql_insert_id();
    }else{
        return false;        
    }
}
