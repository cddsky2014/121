<?php
header("content-type:text/html;charset=utf-8");
	/*
	1、判断是否通过Post提交
	2、判断是否有文件上传
	3、判断上传目录是否存在，不存在就创建（mkdir）	is_dir
	4、判断文件类型是否符合
			1、符合什么  jpg jpeg gif png bmp
			2、什么类型	
	5、判断错误类型
	6、判断临时文件是否存在   		
	7、判断上传是否成功
	*/
	
	//print_r($_FILES);
	$file_name = $_FILES["file"]["name"];
	//判断是否有文件上传
	if($file_name==""){
		exit("请选择上传文件！<a href='./upload.php'>返回</a>");
	}
	//判断上传目录是否存在，不存在就创建
	if(is_dir("./up/")==false){
		mkdir("./up/",0777);
	}
	//判断文件类型是否符合
	$name_arr = explode(".",$file_name);
	$pfix = end($name_arr);//取文件后缀名
	$allow_type = array("jpg","png","gif","php");//允许上传的文件类型
	if(in_array($pfix,$allow_type)==false){
		exit("文件类型非法！<a href='./upload.php'>返回</a>");
	}


?>