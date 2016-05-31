<?php

include("../ctg/functions.php");
include("../ctg/link.php");

//print_r($_POST);

//print_r($_FILES);

$pname = $_POST["pname"];
$price = $_POST["price"];
$sprice = $_POST["sprice"];
$ctg = $_POST["ctg"];
$color = implode(",",$_POST["color"]);
$size = implode(",",$_POST["size"]);
$descr = $_POST["descr"];
$thumb = implode(",",upload("thumb",array("png","jpg"),"../upload/"));
$imgs = implode(",",upload("imgs",array("png","jpg"),"../upload/"));
$ctime = time();
$mtime = time();
echo $sql = "insert into ts_goods(pname,price,sprice,ctg,color,size,descr,thumb,imgs,ctime,mtime) values('$pname','$price','$sprice','$ctg','$color','$size','$descr','$thumb','$imgs','$ctime','$mtime')";

var_dump(mysql_query($sql));

echo "success";
?>