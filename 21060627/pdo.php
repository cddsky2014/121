<?php
/*
	数据库的链接
*/
$dsn = 'mysql:dbname=advmysql;host=127.0.0.1;charset=utf8';
$pdo = new PDO($dsn,'root','');
/*
	执行sql语句
*/
//$pdo->query('set names utf8');
$pdo->query('insert into users (uname) values("rose")');//mysql_query();
echo $pdo->lastInsertId();
/*
	逐条读取表数据
 PDO::FETCH_NUM或3:		记录集返回索引数组
 PDO::FETCH_ASSOC或2:	记录集返回的关联数组
 PDO::FETCH_BOTH或4:	记录返回的是既有关联数组也有索引数

while($row=$sth->fetch(2)){
	print_r($row);
}
*/
//var_dump($sth->fetchAll());