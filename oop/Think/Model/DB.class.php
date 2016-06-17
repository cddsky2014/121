<?php
namespace Think\Model; 
class DB {
    public function __construct($host = '127.0.0.1', $uname = 'root', $pwd = '', $dbname = 'thinkshop') {
        @mysql_connect($host, $uname, $pwd);
        mysql_select_db($dbname);
        mysql_query('set names utf8');
    }
    public function query($table, $fields = '*', $where = '1=1') {
        $sql = sprintf('select %s from %s where %s', $fields, $table, $where);
        $res = mysql_query($sql);
        $arr = array();
        while ($row = mysql_fetch_assoc($res)) {
            $arr[] = $row;
        }
        return $arr;
    }
    public function add($table, $data) {
        $fields = '';
        $values = '';
        foreach ($data as $k => $v) {
            $fields .= $k . ',';
            $values .='\'' . $v . '\',';
        }
        $fields = rtrim($fields, ',');
        $values = rtrim($values, ',');
        $sql = sprintf('insert into %s(%s) values(%s)', $table, $fields, $values);
        $res = mysql_query($sql);
        if ($res == true) {
            return mysql_insert_id();
        } else {
            return false;
        }
    }
    public function del($table, $where = false) {
        if (!$where) {
            return '筛选条件不能为空！';
        }
        $sql = sprintf('delete from %s where %s', $table, $where);
        return mysql_query($sql);
    }
    public function edit($table, $data, $where = false) {
        if (!$where) {
            return '筛选条件不能为空！';
        }
        $fields = '';
        foreach ($data as $k => $v) {
            $fields .= sprintf('%s=\'%s\',', $k, $v);
        }
        $fields = rtrim($fields, ',');
        $sql = sprintf('update %s set %s where %s', $table, $fields, $where);
        return mysql_query($sql);
    }
}