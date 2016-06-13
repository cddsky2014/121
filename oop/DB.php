<?php

class DB {

    public function connect($host = '127.0.0.1', $uname = 'root', $pwd = '', $dbname = 'thinkshop') {
        $link = @mysql_connect($host, $uname, $pwd);
        mysql_select_db($dbname);
        mysql_query('set names utf8');
        return $link;
    }

    public function query($sql) {
        $this->connect();
        $res = mysql_query($sql);
        $arr = array();
        while ($row = mysql_fetch_assoc($res)) {
            $arr[] = $row;
        }
        return $arr;
    }

}

$db = new DB;

echo $db->connect();

$r = $db->query('select * from ts_users');

print_r($r);
