<?php
	/*
		打开目录`opendir(路径) ` 
		操作readdir
		关闭closedir($dir);

		readdir 逐个文件读取文件夹的内容，（读取当前指针所指的那个文件，并指向下个文件）
	*/

	$dir = opendir("./root");
	while($file = readdir($dir)){
		if($file=="."||$file==".."){continue;}
		echo $file."<br>";
		/*
		if($file!="." && $file!=".."){
			echo $file."<br>";
		}*/
		
	}
	/*
	while(true){
		$file = readdir($dir);
		if($file==false){break;}
		echo $file;
	}*/
	

	closedir($dir);
?>