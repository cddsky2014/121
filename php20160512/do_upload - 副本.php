<?php
header("content-type:text/html;charset=utf-8");
/*
	获取数据 $_POST,$_GET,$_FILES
	处理数据
	返回结果
*/

/*
		1、判断是否通过Post提交
		2、判断是否有文件上传
		3、判断上传目录是否存在，不存在就创建（mkdir）	is_dir
		4、判断文件类型是否符合
				1、符合什么  jpg jpeg gif png bmp
				2、什么类型	
		5、判断错误类型
		   - error: 错误码  
				0. 上传到临时路径成功
				1. （upload_max_filesize  2M ）
				2. 超过html隐藏域设置的大小 
				3. 文件部分上传
				4. 没有文件被上传                
				6. 找不到临时文件夹
				7. 写入临时文件夹中出错
		6、判断临时文件是否存在   		
		7、判断上传是否成功

*/
$file_name = $_FILES["file"]["name"];//文件名
//2、判断是否有文件上传
//if($file_name==""){
if(empty($file_name)==true){
	exit("请选择文件!<a href='./upload.php'>返回</a>");
}
$path = "./upload/";
//判断上传目录是否存在，不存在就创建
if(is_dir($path)==false){
	@mkdir($path,0777);
}

//判断文件类型是否符合
$file_name_arr = explode(".",$file_name);
$pfix = end($file_name_arr);//获取文件后缀名
$allow_type = array("jpg","png","gif");
if(in_array($pfix,$allow_type)==false){
	exit("非法文件类型，允许上传的类型'jpg','png','gif'!<a href='./upload.php'>返回</a>");
}
//5、判断错误类型
$error = $_FILES["file"]["error"];
if($error!=0){
	exit("文件上传失败!<a href='./upload.php'>返回</a>");
}

//6、判断临时文件是否存在
$tmp_name = $_FILES["file"]["tmp_name"];//获取临时文件 
if(is_file($tmp_name)==false){
	exit("文件上传失败(临时文件不存在)!<a href='./upload.php'>返回</a>");
}
//判断文件上传大小是否超出限制
$size = $_FILES["file"]["size"];
$max_size = 2*1024*1024;//2M php.ini 200M
if($size>$max_size){
	exit("文件上传大小超出限制!<a href='./upload.php'>返回</a>");
}

//命名文件（保证每个文件名唯一）
$file_name = md5(time().rand("1111","9999")).".".$pfix;

if(move_uploaded_file($tmp_name,$path.$file_name)==false){
	exit("文件上传失败！！<a href='./upload.php'>重新上传</a>");
}else{
	exit("文件上传成功！！<a href='./upload.php'>继续上传</a>");
}

?>