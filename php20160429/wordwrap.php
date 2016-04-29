<?php
header("content-type:text/html;charset=utf-8");

/*
	wordwrap()
	- 格式 `wordwrap(参数1,参数2,参数3)`
		- 参数1: 输入字符串。
		- 参数2: 列宽度。
		- 参数3: 使用可选的 break 参数打断字符串。 
*/

$str = "This is for abc everyone";
echo wordwrap($str,7,"<br>");

?>