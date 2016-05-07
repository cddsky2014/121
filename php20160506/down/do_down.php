<?php
	//print_r($_POST);
	$url = $_POST["url"];
	//$filename = $_POST["filename"];

	ob_start();
	readfile($url);
	$file = ob_get_contents();
	ob_clean();

	
	//判断用户是否写了文件名
	if(isset($_POST["filename"])==true&&$_POST["filename"]!=""){
		$file_name = $_POST["filename"];
	}else{
		//获取文件名
		$url_arr = explode("/",$url);
		$file_name = end($url_arr);
	}
	
	file_put_contents("./$file_name",$file);

	echo "下载成功<a href='./download.php'>继续下载</a>"
?>