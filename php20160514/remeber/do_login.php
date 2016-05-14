<?php
header("content-type:text/html;charset=utf-8");
	$uname = $_POST["uname"];
	$pwd = $_POST["pwd"];
	$time=$_POST["time"]*24*3600;

	if($uname=="lucy" && $pwd=="123456"){
		setCookie("uname",$uname,time()+$time);
		setCookie("pwd",$pwd,time()+$time);
		echo "登陆成功<a href='./login.php'>返回</a>";
	}else{
		echo "登陆失败<a href='./login.php'>返回</a>";
	}

?>