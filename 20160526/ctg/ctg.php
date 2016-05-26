<?php
include("./link.php");
include("./functions.php");

$sql="select * from ts_goods_ctg";
$res = mysql_query($sql);
$ctgs = array();
while($row=mysql_fetch_assoc($res)){
	$ctgs[]=$row;
}

$ctgs=infinite_ctg($ctgs,array("0","fid","cid"));

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分类</title>
</head>
<body>

<table border=1>
	<tr>
		<td>cid</td>
		<td>cname</td>
		<td>fid</td>
		<td>操作</td>
	</tr>
	<?php foreach($ctgs as $v){?>
	<form action="./edit.php" method="post">
		<input name="cid" type="hidden" value="<?php echo $v["cid"]?>">
	<tr>
		<td><?php echo $v["cid"];?></td>
		<td><?php echo str_repeat("--",$v["level"])?>
		<input name="cname" type="text" value="<?php echo $v["cname"]?>">		
		</td>
		<td>
		<?php 		
		echo infinite_select($ctgs,"ctg","cid","cname",$v["fid"]);	
		?>
		</td>
		<td><input type="submit" value="保存"></td>
	</tr>
	</form>
	<?php }?>
</table>

	
	
</body>
</html>