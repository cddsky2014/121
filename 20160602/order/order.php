<?php
include("./link.php");
$uid = $_SESSION["uid"];
$sql = "select * from ts_orders where uid='{$uid}' order by oid desc";

$res = mysql_query($sql);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<a href="./home.php">首页</a>
	
	<?php while( $row = mysql_fetch_assoc($res)){
		$goods = json_decode($row["goods"],true);
	?>
	<h2>订单编号：<?php echo $row["onum"];?></h2>
	<div>
	<?php
		$status = array(1=>"待发货",2=>"已发货",3=>"已收货");
		
		echo $status[$row["status"]];
		if($row["status"]==2){
			echo "<a href='./confrim.php?oid={$row['oid']}'>确认收货</a>";
		}
	?>
	</div>
	<table border=1>
		<?php foreach($goods as $v){
			$pid = $v["pid"];
			$pcur = mysql_fetch_assoc(mysql_query("select * from ts_goods where pid='{$pid}'"));
		?>			
			<tr>
				<td><img width="40px;" src="../upload/<?php echo $pcur["thumb"];?>" alt=""></td>
				<td><?php echo $pcur["pname"];?></td>	
				<?php 
					if($row["status"]==3){
						$pid = $pcur["pid"];
						$oid = $row["oid"];
						echo "<td><a href='./comment.php?pid={$pid}&oid={$oid}'>点评</a></td>";
					}	
				?>

			</tr>		
	
		<?php }?>

		</table>
	<?php }?>




	
</body>
</html>