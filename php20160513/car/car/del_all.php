<?php
session_start();

$_SESSION["car"]=array();//清空购物车

header("location:./car.php");
	
?>