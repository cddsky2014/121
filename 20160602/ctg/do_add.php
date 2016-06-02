<?php
include("./link.php");
	
	$fid=$_POST["ctg"];
	$cname=$_POST["cname"];

	echo $sql = "insert into ts_goods_ctg(cname,fid) values('{$cname}','{$fid}')";
	
 mysql_query($sql);

 echo "<a href='./ctg.php'>back</a>";


?>