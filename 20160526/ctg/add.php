<?php
	include("./link.php");
	include("./functions.php");
	$sql = "select * from ts_goods_ctg";
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
	<title></title>
</head>
<body>

	<form action="./do_add.php" method="post">
		上级分类:
		<?php			
			echo infinite_select($ctgs,"ctg","cid","cname");
		?>

		分类名称：<input type="text" name="cname">
		<input type="submit" value="添加分类">
	
	</form>
	
</body>
</html>