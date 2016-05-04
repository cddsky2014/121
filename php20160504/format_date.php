<?php
	date_default_timezone_set("PRC");

	/*
		date 格式化时间戳

		Y年，m月，d日，H时，i分，s秒
	*/	
	$t = time();
	//echo date("Y年m月d日 H时i分s秒 星期",$t);
	//echo date("w");
	$week = array(0=>"日",1=>"一",2=>"二",3=>"三",4=>"四",5=>"五",6=>"六");
	//echo $week[date("w")]
	echo date("Y年m月d日 H时i分s秒 星期",$t).$week[date("w")];

?>