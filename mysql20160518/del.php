<?php
header("content-type:text/html;charset=utf-8");



//防止用户直接访问此页面
if(isset($_GET["sid"])==false){
	exit("非法访问");
}
/*
	获取数据
	加工数据
	返回结果
*/

//链接数据库服务器
$link = @mysql_connect("127.0.0.1","root","") or exit("服务器链接失败");
//选择数据库
mysql_select_db("thinkshop") or exit("数据库不存在");
//设置字符集
mysql_query("set names utf8");


$sid = $_GET["sid"];//获取要删除记录的编号
//组织SQL语句
$sql = "delete from students where sid='{$sid}'";
$res = mysql_query($sql);//执行SQL语句
//判断是否删除成功
if($res==false){
	echo "删除失败<a href='./home.php'>返回</a>";
}else{
	echo "删除成功<a href='./home.php'>返回</a>";
}





?>