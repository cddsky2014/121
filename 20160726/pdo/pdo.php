<?php

$dsn = 'mysql:host=127.0.0.1;dbname=test;charset=utf8';

try{
	$pdo = new PDO($dsn,'root','');
}catch(Exception $e){//$e= new Exception();	
	echo '错误：'.$e->getMessage();	
}


try {   
	$pdo->beginTransaction();//开启事务

	$pdo->exec("insert into ts_admin (uname) values ('tom3')"); 

	$pdo->exec("insert into ts_admin (uname) values ('tom4')");

	throw new Exception('缺钱缺钱缺钱');

	$pdo->commit();//提交
} catch (Exception $e) {
	$pdo->rollBack();//回滚
	echo "操作失败：".$e->getMessage();
}
