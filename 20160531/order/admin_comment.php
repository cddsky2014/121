<?php 
include("./link.php");
$sql = "select * from ts_comment";
$res = mysql_query($sql)
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
	<table border=1>
		<tr>
			<td>用户</td>
			<td>订单</td>
			<td>商品</td>
			<td>内容</td>
			<td>时间</td>
			<td>状态</td>
		</tr>
		<?php while($row = mysql_fetch_assoc($res)){?>
		<tr>
			<td><?php echo $row["uid"]?></td>
			<td><?php echo $row["oid"]?></td>
			<td><?php echo $row["pid"]?></td>
			<td><?php echo $row["content"]?></td>
			<td><?php echo $row["ctime"]?></td>
			<td><?php 
				$status = array(1=>"未审核",2=>"通过");
				echo $status[$row["status"]];
				$comid = $row["comid"];
				if($row["status"]==1){
					echo "<a href='./pass_comment.php?comid={$comid}'>通过</a>";
				}
			?></td>
		</tr>
		<?php }?>

	</table>
	
	
</body>
</html>