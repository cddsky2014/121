<?php

$email = 'admin1@qq.com';

/*

*/

try{
	if($email != 'admin@qq.com'){
		//die("邮箱错误");
		throw new Exception('邮箱错误');
	}
}catch(Exception $e){
	echo $e->getLine().'<br>';//错误行
    echo $e->getfile().'<br>';//错误文件
    echo $e->getMessage().'<br>';//错误信息
}
