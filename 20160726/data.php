<?php

$dsn = 'mysql:host=127.0.0.1;dbname=test;charset=utf8';

try{
	$pdo = new PDO($dsn,'root','');
}catch(Exception $e){//$e= new Exception();	
	echo '错误：'.$e->getMessage();	
}

$sth = $pdo->query('select * from ts_city where fid='.$_GET['id']);

$pro = $sth->fetchAll();

echo "<option value=''>请选择</option>";
foreach($pro as $v){

	$cname = $v['cname'];
	$cid = $v['cid'];
	
	echo "<option value='{$cid}'>{$cname}</option>";
}


?>





