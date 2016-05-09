<?php
header("content-type:text/html;charset=utf-8");
	$url = $_POST["url"];
	//获取下载文件的内容
	ob_start();//开启文档流
	readfile($url);//读取输出文件
	$str = ob_get_contents();//获取文件内容
	ob_clean();//请示文档流输出	
	//获取文件名
	$url_arr = explode("/",$url);
	$file_name = end($url_arr);
	//将下载内容写入文件
	$res = file_put_contents("./downfile/$file_name ",$str);
	if($res==true){
		echo "下载成功!<a href='./showfile.php'>返回</a>";
	}else{
		echo "下载失败!<a href='./showfile.php'>返回</a>";
	}
?>