<?php
include("./link.php");

$addr = $_POST["addr"];
$tel = $_POST["tel"];
$goods = json_encode($_SESSION["car"]);
$ctime = time();
$onum = date("YmdHis").rand(1111,9999);
$uid=$_SESSION["uid"];


$sql = "insert into ts_orders(uid,status,addr,tel,goods,ctime,onum)values('{$uid}','1','{$addr}','{$tel}',
'{$goods}','{$ctime}','{$onum}')";

mysql_query($sql);
$_SESSION["car"]=array();
echo "success！<a href='./order.php'>order</a>";

?>