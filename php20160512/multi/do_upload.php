<?php
	header("content-type:text/html;charset=utf-8");
	/*
	获取数据 $_GET,$_POST,$_FILES
	处理数据
	返回处理结果

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
	//print_r($_FILES);
	//判断上传目录是否存在，不存在就创建

function upload($ctrl_name,&$err=array(),$allow_type=array("jpg","png"),$path = "./upload/",$allow_max_size=2){	
	if(is_dir($path)==false){
		@mkdir($path,0777);
	}	
	$res = array();

	for($i=0;$i<count($_FILES[$ctrl_name]["name"]);$i++){
		$count = $i+1;

		$file_name = $_FILES[$ctrl_name]["name"][$i];
		$tmp_name = $_FILES[$ctrl_name]["tmp_name"][$i];
		$error = $_FILES[$ctrl_name]["error"][$i];
		$size = $_FILES[$ctrl_name]["size"][$i];
		
		//判断是否有文件上传
		if(empty($file_name)==true){
			//exit("请选择要上传文件！");
			$err[] = "请选择第{$count}文件！";
			continue;
		}

		if(is_dir($path)==false){
			@mkdir($path,0777);
		}
		//4、判断文件类型是否合法
		$file_name_arr = explode(".",$file_name);
		$pfix = end($file_name_arr);//或取后缀名
		
		if(in_array($pfix,$allow_type)==false){
			$err[] = "第{$count}文件类型非法,允许的类型是".implode(",",$allow_type);
			continue;
		}
		//5、判断错误类型
		if($error!=0){
			$err[] = "第{$count}文件上传出错！";
			continue;
		}
		//6、判断临时文件是否存在
		if(is_file($tmp_name)==false){
			$err[] = "第{$count}文件临时文件不存在！";
			continue;
		}
		//判断文件上传大小
		
		
		if($size>$allow_max_size*1024*1024){
			$err[] = "第{$count}文件大小超出限制";
			continue;
		}

		//生成文件名
		$file_name = md5(time().rand(1111,9999)).".".$pfix;

		if(move_uploaded_file($tmp_name,$path.$file_name)==false){
			$err[] = "第{$count}文件上传失败";			
		}else{
			$res[]=$file_name;
			//echo "第{$count}文件上传成功";
		}
	}
	return $res;
}

print_r(upload("file"));

?>