<?php
header("content-type:text/html;charset=utf-8");
	$uname = $_POST["uname"];
	$pwd = $_POST["pwd"];


	if($uname=="lucy" && $pwd=="123456"){
		setCookie("uname",$uname);
		setCookie("pwd",$pwd);
		echo "登陆成功<a href='./login.php'>返回</a>";
	}else{
		echo "登陆失败<a href='./login.php'>返回</a>";
	}

?>