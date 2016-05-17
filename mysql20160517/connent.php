<?php
/*
	mysql_connect(服务器地址,用户名,密码)

	首先，要用PHP函数对数据库进行操作，要先开启apache的扩展功能
	1、将PHP.ini的extensiondir 修改为				extension_dir="ext的路径"
		extension_dir = "./ext"
	2、将extension=php_mysql.dll前面的分号去掉
	
	
	3. 对httpd操作
		在httpd.conf文件中在LoadModule后面加上
		Loadfile "E:\webserver\php\php5ts.dll"
		Loadfile "E:\webserver\php\libmysql.dll"


	use 库；
*/

//链接mysql服务器
$link = mysql_connect("127.0.0.1","root","");
//打开数据库
mysql_select_db("thinkshop",$link);
//增删改查
$sql = "select * from students";//查
//$sql = "delete from students where sid='1'";
//$sql = "update students set age='9999'";
mysql_query("set names utf8");//设置字符集

$res = mysql_query($sql);

print_r(mysql_fetch_assoc($res));//0
print_r(mysql_fetch_assoc($res));//1

?>