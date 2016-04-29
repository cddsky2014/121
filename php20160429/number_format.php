<?php
header("content-type:text/html;charset=utf-8");

/*
	number_format
	格式number_format(参数1[,参数2,参数3,参数4])
		参数1: 你要格式化的数字
		参数2: 要保留的小数位数
		参数3: 指定小数点显示的字符
		参数4: 指定千位分隔符显示的字符
*/

$num = 1234567890;
echo number_format($num,2,".",",");

?>