<?php
session_start();
header("content-type:text/html;charset=utf-8");
if(isset($_SESSION["admin"])==false){
	exit("请先登陆！<a href='../login/login.php'>返回</a>");	
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<h1>用户管理</h1>
</body>
</html>