<?php
header("content-type:text/html;charset=utf-8");
	/*
		链接数据库服务器
		选择数据库
		增删改查
		释放资源
	
	*/
	//链接数据库服务器
	$link = @mysql_connect("127.0.0.1","root","") or exit("服务器链接失败");
	//选择数据库
	mysql_select_db("thinkshop") or exit("数据库不存在");
	//设置字符集
	mysql_query("set names utf8");

	$sql = "select * from students";
	$res = mysql_query($sql);
	//echo mysql_num_rows($res);//返回结果集记录的条数	
	
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生表</title>
</head>
<body>	

<a href="./add.php">添加</a>
	<table border=1>
		<tr>
			<td>编号</td>
			<td>姓名</td>
			<td>性别</td>
			<td>年龄</td>
			<td>出生</td>
			<td>介绍</td>
			<td>手机</td>
			<td>操作</td>
		</tr>

		<?php while($row = mysql_fetch_assoc($res)){?>
		<tr>
			<td><?php echo $row["sid"];?></td>
			<td><?php echo $row["sname"];?></td>
			<td><?php
				$sex_arr = array(0=>"女",1=>"男",2=>"保密");	
				echo $sex_arr[$row["sex"]];?></td>
			<td><?php echo $row["age"];?></td>
			<td><?php echo date("Y-m-d",$row["birth"]);?></td>
			<td><?php echo $row["intro"];?></td>
			<td><?php echo $row["tel"];?></td>
			<td>
			<a href="./del.php?sid=<?php echo $row["sid"];?>">删除</a>
			<a href="./edit.php?sid=<?php echo $row["sid"];?>">编辑</a>

			
			</td>
		</tr>
		<?php }?>
	</table>
	
</body>
</html>

<?php
	//mysql_free_result($res);
	//mysql_close($link);
?>