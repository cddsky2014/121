<?php
header("content-type:text/html;charset=utf-8");
session_start();
include("../../link.php");

/*
	获取数据
	处理数据
	返回结果
*/
$uname = $_POST["uname"];
$pwd = $_POST["pwd"];
$pwd = md5($pwd);
$sql = "select * from ts_users where uname='{$uname}' && pwd='{$pwd}'";
$res = mysql_query($sql);
$row = mysql_fetch_assoc($res);//通过数据库验证
if($row!=false){	
	$_SESSION["uname"]=$uname;
	//更新登陆时间
	$ltime=time();
	mysql_query("update ts_users set ltime='{$ltime}' where uname='{$uname}'");

	echo "登陆成功<a href='../../home.php'>返回</a>";
}else{
	echo "登陆失败<a href='./login.php'>返回</a>";
}

?>