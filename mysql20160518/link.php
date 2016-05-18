<?php
header("content-type:text/html;charset=utf-8");
//链接数据库服务器
$link = @mysql_connect("127.0.0.1","root","") or exit("服务器链接失败");
//选择数据库
mysql_select_db("thinkshop") or exit("数据库不存在");
//设置字符集
mysql_query("set names utf8");