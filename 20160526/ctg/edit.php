<?php
include("./core.php");
/*
	获取数据
	处理数据
	返回结果
*/
$cname = post("cname") or exit("分类名错误");
$fid = post("ctg");
$cid = post("cid");
$data=array(
	"cname"=>$cname,
	"fid"=>$fid,
);
db_query()
db_edit("goods_ctg",$data,"cid='$cid'");

db_add("goods_ctg",array(
	"cname"=>"good",
	"fid"=>2
));

db_del("goods_ctg","cid=2");







/*
$cname = $_POST["cname"];
$cid = $_POST["cid"];
$fid = $_POST["ctg"];
echo $sql="update ts_goods_ctg set 
cname='{$cname}',fid='{$fid}' where cid='{$cid}'";

mysql_query($sql);

echo "执行成功";
*/
?>