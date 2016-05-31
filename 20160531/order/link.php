<?php
header("content-type:text/html;charset=utf-8");
session_start();
/*
1、链接服务器
2、选择数据库
3、设置编码
4、增删改查
5、关闭数据库
*/
$link = mysql_connect("127.0.0.1","root","") or die("链接失败");
mysql_select_db("thinkshop",$link) or die("数据库不存在");
mysql_query("set names utf8");
?>