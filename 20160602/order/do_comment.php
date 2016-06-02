<?php
include("./link.php");

$pid = $_POST["pid"];
$content=$_POST["content"];
$oid=$_POST["oid"];
$ctime = time();
$uid=$_SESSION["uid"];

//判断商品是否被评价过
$com_num = mysql_num_rows(mysql_query("select * from ts_comment where oid='{$oid}' && uid='{$uid}'&&pid='{$pid}'"));
if($com_num!=0){
	exit("不能重复评价商品");
}

$sql = "insert into ts_comment(oid,pid,content,ctime,uid) values('{$oid}','{$pid}','{$content}','{$ctime}','{$uid}')";
mysql_query($sql);

header("location:./order.php");

?>