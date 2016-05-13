<?php
session_start();
include("../data.php");

$pid = $_GET["pid"];
//获取库存
foreach($data as $v){
	if($v["pid"]==$pid){
		$snum = $v["snum"];
		break;
	}
}

//增加商品数量

if($_SESSION["car"][$pid]["nums"]<$snum){
	$_SESSION["car"][$pid]["nums"]++;
}


header("location:./car.php");

?>