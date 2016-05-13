<?php
session_start();
//保存绝对路径公共部分
define("HOST","http://127.0.0.1/php20160513/car");
define("ROOT_DIR","E:/121/php20160513/car");

//商品信息（以后会从库里取出）
//include 不能使用网络绝对路径
include(ROOT_DIR."/data.php");

/*
	绝对路径：
		盘符：d:/a/b/c.php
		网络:http://12.0.0.1/b/c.php

	html标签中所有需要使用路径的地方只能设置网络绝对路径或相对路径

*/

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="stylesheet" href="<?php echo HOST?>/css/base.css">
</head>
<body>
<div class="wrap">
	<div class="tbar">		
		<ul class="tbar_r">
			<li><a href="<?php echo HOST;?>/home.php">首页</a></li>
			<li><a href="<?php echo HOST;?>/car/car.php">我的购物车(<?php echo count($_SESSION["car"]);?>)</a></li>
			<li><a href="">我的订单(0)</a></li>
		</ul>		
	</div>