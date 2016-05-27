<?php
	include("../ctg/link.php");
	include("../ctg/functions.php");
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

<form action="./do_add.php" method="post" enctype="multipart/form-data">
	名称：<input type="text" name="pname"><br>
	价格：<input type="text" name="price"><br>
	优惠价：<input type="text" name="sprice"><br>
	分类：<?php echo infinite_select($ctgs,"ctg","cid","cname"); ?><br>
	颜色：<input checked type="checkbox" name="color[]" value="red"><span style="color:red;font-size:20px;">●</span>
	<input type="checkbox" name="color[]" value="#ccffff"><span style="color:#ccffff;font-size:20px;">●</span>
	<input type="checkbox" name="color[]" value="#ff66ff"><span style="color:#ff66ff;font-size:20px;">●</span><br>
	尺寸：<input type="checkbox" name="size[]" value="XL">XL
		<input type="checkbox" name="size[]" value="L">L
		<input type="checkbox" name="size[]" value="M">M
		<input type="checkbox" name="size[]" value="S">S<br>
	描述：<textarea name="descr"></textarea><br>
	缩略图：<br><input type="file" name="thumb[]"><br>
	展示图：<br><input type="file" name="imgs[]"><br>
			<input type="file" name="imgs[]"><br>
			<input type="file" name="imgs[]"><br>
			<input type="file" name="imgs[]"><br>
	<hr>
	<input type="submit" value="添加商品"><br>

</form>
	
</body>
</html>

