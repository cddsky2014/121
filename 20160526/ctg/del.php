<?php

include("./link.php");

$cid = $_GET["cid"];

if(mysql_num_rows(mysql_query("select * from  ts_goods_ctg where fid='{$cid}'"))!=0){
	exit("请先删除子分类<a href='./ctg.php'>back</a>");
}

$sql = "delete from ts_goods_ctg where cid='{$cid}'";

mysql_query($sql);

echo "<a href='./ctg.php'>back</a>";

?>