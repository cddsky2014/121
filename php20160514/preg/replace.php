<?php
header("content-type:text/html;charset=utf-8");
	
	/*
	preg_replace(正则, 替换字符, 原字符);执行一个正则表达式的搜索和替换
	*/

	$str = "abc1abc2adb3aec4de5afc";
	/*
		数字，字母，符号，汉字，空格
			0-9
			a-z
			A-Z
		[]一个单元
	*/
	//echo preg_replace("/[a-z]/","饕",$str);

	/*
		通用字符
		\d：代表一个0-9的数字
		\D:反义,代表一个不是0-9的字符
		\s:匹配一个空字符 空格 \f \r \n \t\v
		\S:匹配非空字符
		\w:匹配一个字母,数字和下划线
		\W:匹配除数字,字母,下划线以外的任意一个字符.
	*/
	//$str = "123456abc-?";
	//echo preg_replace("/\d/","饕",$str);//[0-9]
	//echo preg_replace("/\D/","饕",$str);//[0-9]
	/*$str = "a b		123
	hhhh";
	echo preg_replace("/\s/","*",$str);
	echo preg_replace("/\w/","*",$str);
	*/
	
?>