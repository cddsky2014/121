<?php
header("content-type:text/html;charset=utf-8");



//链接数据库服务器
$link = @mysql_connect("127.0.0.1","root","") or exit("服务器链接失败");
//选择数据库
mysql_select_db("thinkshop") or exit("数据库不存在");
//设置字符集
mysql_query("set names utf8");

//判断用户是否通过表单提交
if(isset($_POST["sub"])==false){
	exit("非法访问");
}

$sname = $_POST["sname"];
if(preg_match("/^[a-zA-Z]\w{5,17}$/",$sname)==0){
	exit("姓名非法");
}

$sex = $_POST["sex"];
if($sex==""){
	exit("性别不能为空");
}

$age =$_POST["age"];
if(preg_match("/^[1-9][0-9]{0,2}$/",$age)==0){
	exit("年龄非法");
}

$tel = $_POST["tel"];
if(preg_match("/^1[3|4|5|8|7]\d{9}$/",$tel)==0){
	exit("手机非法");
}

$birth = $_POST["birth"];
$birth = strtotime($birth);
if($birth==false){
	exit("出生日期非法");
}


$intro = $_POST["intro"];



$sql = "insert into students(sname,sex,tel,birth,intro,age) values('{$sname}','{$sex}','{$tel}','{$birth}','{$intro}','{$age}')";


$res = mysql_query($sql);
if($res==false){
	echo "添加失败<a href='./home.php'>返回</a>";
}else{
	echo "添加成功<a href='./home.php'>返回</a>";
}



?>