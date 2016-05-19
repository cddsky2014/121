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

//获取记录的总条数
$total = mysql_num_rows(mysql_query("select * from students"));
$total_page = ceil($total/$size);//获取总页码
//获取页码
/*
if(isset($_GET["p"])==false){
	$pagenum = 1;
}else{
	if(preg_match("/^[1-9]\d*$/",$_GET["p"])!=0){
		if($_GET["p"]>$total_page){
			$pagenum = $total_page;
		}else{
			$pagenum = $_GET["p"];//获取当前页码
		}
	}else{
		$pagenum = 1;
	}
}
*/

if(isset($_GET["p"])==true && preg_match("/^[1-9]\d*$/",$_GET["p"])!=0 &&$_GET["p"]<=$total_page){
	$pagenum = $_GET["p"];
}else{
	$pagenum = 1;
}


//计算起始值
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
<a href="?p=1;?>">&lt;&lt;</a>
<a href="?p=<?php echo $pagenum-1;?>">&lt;</a>
<?php	
	//显示页码
	for($i=1;$i<=$total_page;$i++){
		echo "<a href='?p={$i}'>{$i}</a>";
	}
?>
<a href="?p=<?php echo $pagenum+1;?>">&gt;</a>
<a href="?p=<?php echo $total_page;?>">&gt;&gt;</a>

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