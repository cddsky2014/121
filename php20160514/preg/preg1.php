<?php
header("content-type:text/html;charset=utf-8");
	$str = "abc123";

	//[0-9]==\d
	/*
	- : 表示区间
	[ : 表示一个单元表达式开始
	] : 表示一个单元表达式结束
	| : 或
	*/
	//echo preg_replace("/[b|1|2|a]/","*",$str);//匹配b或1
	//[1|2|3|4|5|6|7|8|8|0]==[0-9]==\d
	//[a|b|c..|z]==[a-z]
	//[A|B|C..|Z]==[A-Z]

	/*
		限定符
		{最小重复配次数,最大重复次数}
		{x,} 最大重复次数不填，表示0-无限次
		()将多个正则单元组合成一个单元
	*/
	$str = "a1-b2v2d2-c3-j7-k8";
	//echo preg_replace("/[a][a][a]/","*",$str);
	//echo preg_replace("/[a]{2,4}/","*",$str);//[aaa|aa|aaaa]
	//echo preg_replace("/[a]{1,}/","*",$str);	
	//echo preg_replace("/([a][b][c]){1,3}/","*",$str);//(abc){1,3}
	//echo preg_replace("/([a-z][0-9]){2,}/","*",$str);

	/*
		* {0,}
		+ {1,}
		? {0,1}
	*/
	//$str = "aabbaaaancccnaaaaaa";
	//echo preg_replace("/[a]+/","*",$str);
	//echo "<br>";
	//echo preg_replace("/[a]*/","-",$str);
	
	/*
		. 表示匹配任意字符
		^ 表示匹配开始位置
		$ 表示匹配结束位置
	*/
	//$str = "asdsad///sdsdsd,.,.dsds";
	//echo preg_replace("/.+/","-",$str);

	//$str = "absdsdsdscde";
	//echo preg_replace("/^[a][a-z]+[e]$/","-",$str);
	
	//$uname = "lucy1234a";//字母开始，字母数字下划线组合，6-18位	
	//echo preg_replace("/^[a-zA-Z]\w{6,18}/","饕",$uname);
	/*
	`\f` 分页
	`\n` 换行
	`\r` 回车 
	`\t` 制表符
	`\v` 垂直制表符
		
	$str = "abc abc		bcd
	123";
	echo preg_replace("/\s/","饕",$str);//[\n|\f|\r..]

*/
	/*
		^ 取反 
			/^ /匹配开始
			/[^]/取反
	*/
	//$str = "abc123";
	//echo preg_replace("/[^a-z]/","饕",$str);


	/*
	修正符
	i :不区分大小写;
	x :忽略正则表达式中的空白;
	m :将字符串视为多行,每一行都看作是独立的字符串;
	s :将字符串视为一行
	U :第一次匹配后停止(非贪婪)
	*/
	
	//$str = "a bc123ABC";
	//echo preg_replace("/[a-z]/i","饕",$str);
	//echo preg_replace("/[a-z] /x","饕",$str);
	
	$str = "abc123
	abc123";
	echo preg_replace("/[a].+[3]/m","饕",$str);

	$str = "abc123abc123";
	echo preg_replace("/[a].+[3]/U","饕",$str);



	



	
	



	


?>	