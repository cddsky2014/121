<?php
session_start();
$pid=$_POST["pid"];
$snums=$_POST["snums"];
//购物车初始化
if(!isset($_SESSION["car"])){
	$_SESSION["car"]=array();
}

$_SESSION["car"][$pid]=array(
	"pid"=>$pid,
	"snums"=>$snums
);


print_r($_SESSION["car"]);


?>