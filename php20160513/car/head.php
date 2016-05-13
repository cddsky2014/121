<?php
//保存绝对路径公共部分
	define("HOST","http://127.0.0.1/php20160513/car");
	//商品信息（以后会从库里取出）
	$data = array(
		array("pid"=>1,"ptitle"=>"商品1","sprice"=>100,"thumb"=>"1.jpg","sunm"=>10),
		array("pid"=>2,"ptitle"=>"商品2","sprice"=>101,"thumb"=>"2.jpg","sunm"=>11),
		array("pid"=>3,"ptitle"=>"商品3","sprice"=>102,"thumb"=>"3.jpg","sunm"=>12),
		array("pid"=>4,"ptitle"=>"商品4","sprice"=>103,"thumb"=>"4.jpg","sunm"=>13),
	);

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
			<li><a href="<?php echo HOST;?>/car/car.php">我的购物车(0)</a></li>
			<li><a href="">我的订单(0)</a></li>
		</ul>		
	</div>