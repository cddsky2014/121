<?php
include("./link.php");

//limit 起始位置,取记录的条数
/*
	10条数据 每页2条
	（页码-1）*每页显示的条数=起始位置
	0--1	1页  limit 0,2  (1-1)*2=0
	2--3	2页  limit 2,2  (2-1)*2=2
	4--5	3页  limit 4,2  (3-1)*2=4
*/
$size=2;//每页显示的条数
$pagenum = $_GET["p"];//当前页码
$start = ($pagenum-1)*$size;
$sql = "select * from students limit {$start},{$size}";

$res = mysql_query($sql);


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分页</title>
</head>
<body>
		<table border=1>
		<tr>
			<td>编号</td>
			<td>姓名</td>
			<td>性别</td>
			<td>年龄</td>
			<td>出生</td>
			<td>介绍</td>
			<td>手机</td>
		</tr>

		<?php while($row = mysql_fetch_assoc($res)){?>
		<tr>
			<td><?php echo $row["sid"];?></td>
			<td><?php echo $row["sname"];?></td>
			<td><?php echo $row["sex"];?></td>
			<td><?php echo $row["age"];?></td>
			<td><?php echo $row["birth"];?></td>
			<td><?php echo $row["intro"];?></td>
			<td><?php echo $row["tel"];?></td>
		</tr>
		<?php }?>
	</table>


</body>
</html>