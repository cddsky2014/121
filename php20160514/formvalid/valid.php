<?php
header("content-type:text/html;charset=utf-8");
	print_r($_POST);
	/*
		preg_match("正则表达式",匹配字符串):匹配某个字符串中是否具有与正则模式相同的字符，如果有就返回正确int(1)，没有就返回错误int(0)
	*/

	//用户名验证
	$uname = $_POST["uname"];//字母开始，字母下划线数字重复，数字下划线字母结束，6-18位，	
	if(preg_match("/^[a-zA-Z]\w{4,16}\w$/",$uname)==0){
		exit("用户名非法！");
	}
	//邮箱验证 admin@qq.com
	$email = $_POST["email"];
 	if(preg_match("/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/",$email)==0){
		exit("邮箱非法！");
	}

	//手机 18911111111
	$tel= $_POST["tel"];
 	if(preg_match("/^1[3|4|5|8|7]\d{9}$/",$tel)==0){
		exit("手机非法！");
	}

	//身份证
	

	$card= $_POST["card"];
 	if(preg_match("/^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}(\d|x|X)$/",$card)==0){
		exit("身份证非法！");
	}
	

	//插入数据库


?>