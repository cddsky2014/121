<?php

/*
	`setCookie("变量名","值","有效时间","cookie有效目录","cookie的作用域名") `

	session和cookie的区别
	1、session是保存在服务器端，cookie是保存在用户端的
	2、session的生命周期是从网站打开到网站关闭，cookie是可以手动设置的
	3、设置方式不一样
	4、安全级别不一样

*/

//echo strtotime("2016/5/15");

//$_COOKIE
setCookie("name","lucy",time()+10);//$_COOKIE["name"]="lucy";
echo $_COOKIE["name"];

?>