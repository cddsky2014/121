<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>if语句</title>
</head>
<body>

<?php

	/*
		三元运算符：
		(表达式)?值1:值2;
		如果(表达式)的值为真返回值1 否则返回值2
	
	$a=123;
	$b=356;

	echo ($a>$b)?1:2;
*/
	/*

	if(表达式){
		执行语句
	}elseif(表达式){
		执行语句
	}elseif(表达式){
		执行语句
	}else{
		执行语句
	}

		
		日期 5-1
		如果 日期是5-1 
		那么 劳动节
		如果 日期是3-8
		那么 妇女节
		如果 日期是 1-1
		那么 光棍节
		如果 日期4-1
		那么 愚人节
		其他的 
			不知道	

	$date = "1-1";
	if($date=="5-1"){
		echo "劳动节";
	}elseif($data=="3-8"){
		echo "妇女节";
	}elseif($date=="1-1"){
		echo "光棍节";
	}else{
		echo "不知道";
	}
		

	$person = "男";

	if($person=="男"){
		echo "boy";
	}else{
		echo "girl";
	}
	$person = "女";
	if($person=="男"){
		echo "boy";
	}elseif($person=="女"){
		echo "girl";
	}else{
		echo "未知";
	}*/

	/*
		如果成绩在0-60 
			那么输出 下
		如果成绩在60-70
			那么输出 中
		如果成绩在70-80
			那么输出 良
		如果成绩在80-100
			那么输出 优
		其他
			输出 做错卷子了

	$sorce =-1;
	if($sorce>=0 && $sorce<60){
		echo "下";
	}elseif($sorce>=60 && $sorce<70){
		echo "中";
	}elseif($sorce>=70 && $sorce<80){
		echo "良";
	}elseif($sorce>=80 && $sorce<=100){
		echo "优";
	}else{
		echo "做错卷子了";
	}
	*/

	$num = 10;
	
	if(($num%2)==0){
		echo "偶数";
	}else{
		echo "奇数";
	}



	





?>
	
</body>
</html>