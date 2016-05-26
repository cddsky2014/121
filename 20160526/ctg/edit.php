<?php
include("./link.php");
/*
	获取数据
	处理数据
	返回结果
*/

//print_r($_POST);
$cname = $_POST["cname"];
$cid = $_POST["cid"];
$fid = $_POST["ctg"];
echo $sql="update ts_goods_ctg set 
cname='{$cname}',fid='{$fid}' where cid='{$cid}'";

mysql_query($sql);

echo "执行成功";

?>