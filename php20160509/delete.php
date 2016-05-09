<?php
	/*
		unlink()//删除文件
		rmdir();//删除文件夹，只能删除空文件夹
	*/
	//var_dump(rmdir("./root/"));
	//删除非空文件夹
	/*
	$file_arr = scandir("./root/");
	if(count($file_arr)==2){		
		rmdir("./root/");//如果是空目录直接删除
	}else{
		foreach($file_arr as $v){
			if($v=="." || $v==".."){continue;}
			if(is_dir("./root/$v/")==true){
				rmdir("./root/$v/");
			}else{
				unlink("./root/$v");
			}
		}
		rmdir("./root/");
	}
	
	*/



/*
    自定义的删除函数,可以删除文件和递归删除文件夹
*/
 function delfile($path){
    if(is_dir($path)){
		$file_list= scandir($path);
		foreach ($file_list as $file){
			if( $file!='.' && $file!='..'){
				delfile($path.'/'.$file);
			}
		}
		@rmdir($path);//这种方法不用判断文件夹是否为空,  因为不管开始时文件夹是否为空,到达这里的时候,都是空的     
    }else{
        @unlink($path);//这两个地方最好还是要用@屏蔽一下warning错误,看着闹心
    } 
}

delfile("./root/");
?>