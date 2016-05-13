<?php
include("../head.php");
if(isset($_GET["pid"])==false){
	exit("非法访问！");
}
$pid = $_GET["pid"];
//只有当购物车不存在的时候才会初始化购物车
if(isset($_SESSION["car"])==false){
	$_SESSION["car"]=array();//初始化购物车
}
//pid,购买的数量, 相同商品会互相覆盖
$_SESSION["car"][$pid]=array("pid"=>$pid,"nums"=>1);

echo "添加成功!<a href='./car.php'>【查看购物车】</a>";





include("../foot.php");
?>