<?php
header("content-type:text/html;charset=utf-8");
session_start();

print_r($_POST);

$uname = $_POST["uname"];
$pwd = $_POST["pwd"];

if($uname=="lucy" && $pwd=="123abc"){
	$_SESSION["uname"]=$uname;
	exit("登陆成功！<a href='./home.php'>返回首页</a>");
}else{
	exit("登陆失败！<a href='./login.php'>返回首页</a>");
}

?>