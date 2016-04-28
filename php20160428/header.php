<?php
/*
header() 调用前不能有任何输出(php:echo print var_dump);
	1、设置字符集编码"content-type:text/html;charset=utf-8"
	2、"location:http://www.baidu.com"网址跳转
*/


header("content-type:text/html;charset=utf-8");
header("location:http://www.baidu.com");
echo "我是中文"

?>

我是中文