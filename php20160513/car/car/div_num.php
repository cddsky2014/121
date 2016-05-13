<?php
session_start();

$pid = $_GET["pid"];
//删除商品数量，不能少于1
if($_SESSION["car"][$pid]["nums"]>1){
	$_SESSION["car"][$pid]["nums"]--;
}


header("location:./car.php");

?>