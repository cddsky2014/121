<?php
include("../head.php");

if(isset($_GET["pid"])==false){
	exit("非法访问");
}

$pid = $_GET["pid"];
unset($_SESSION["car"][$pid]);

echo "删除成功！<a href='./car.php'>【返回购物车】</a>";

include("../foot.php");

?>