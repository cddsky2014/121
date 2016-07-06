<?php
$link = @mysql_connect('127.0.0.1','root','');

mysql_select_db('advmysql');

mysql_query('set names utf8');

$sname = $_POST['sname'];
$age = $_POST['age'];
$sex = $_POST['sex'];

$res = mysql_query("insert into ts_students (sname,age,sex) values('$sname','$age','$sex')");

echo '插入成功';