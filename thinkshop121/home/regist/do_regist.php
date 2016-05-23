<?php
session_start();
header("content-type:text/html;charset=utf-8");
include("../../link.php");
	
//print_r($_POST);
$uname = $_POST["uname"];
$pwd = $_POST["pwd"];
$pwd2 = $_POST["pwd2"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$ctime=time();

$code = $_POST["code"];
if($code!=$_SESSION["code"]){
	exit("验证码错误！<a href='./regist.php'>返回</a>");
}

$pwd = md5($pwd);
//验证用户是否已经被注册
if(mysql_num_rows(mysql_query("select * from ts_users where uname='{$uname}'"))!=0){
	exit("此用户名已经被使用！<a href='./regist.php'>返回</a>");
}

$sql = "insert into ts_users(uname,pwd,email,tel,ctime) values('{$uname}','{$pwd}','{$email}','{$tel}','{$ctime}')";

$res = mysql_query($sql);

if($res!=false){
	echo "注册成功！<a href='../../home.php'>返回</a>";
}else{
	echo "注册失败！<a href='./regist.php'>返回</a>";
}

?>