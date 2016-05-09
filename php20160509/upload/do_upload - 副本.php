<?php
header("content-type:text/html;charset=utf-8");
	//print_r("firl");
	/*
	echo "文件名".$file_name = $_FILES["file"]["name"];
	echo "<br>";
	echo "文件类型".$file_type = $_FILES["file"]["type"];
	echo "<br>";
	echo "临时文件".$file_tmp_name = $_FILES["file"]["tmp_name"];
	echo "<br>";
	echo "文件大小".$file_tmp_name = $_FILES["file"]["size"];
	echo "<br>";
	echo "错误码".$file_error = $_FILES["file"]["error"];
	echo "<br>";
	*/
	$file_tmp_name = $_FILES["file"]["tmp_name"];
	move_uploaded_file($file_tmp_name,"./up/1.php");	

?>