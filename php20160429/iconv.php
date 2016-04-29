<?php
header("content-type:text/html;charset=utf-8");

/*
	格式iconv(参数1,参数2,参数3)
		参数1：输入的字符集。
		参数2：输出的字符集。
		参数3：要转换的字符串。
*/

$str="我是中文";

echo iconv("utf-8","GBK",$str);


?>