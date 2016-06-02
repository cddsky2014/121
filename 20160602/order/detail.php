<?php
include("./link.php");
$pid = $_GET["pid"];

$sql = "select * from ts_goods where pid='{$pid}'";
$cur = mysql_fetch_assoc(mysql_query($sql));

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="./add_car.php" method="post">
<input type="hidden" name="pid" value="<?php echo $cur["pid"];?>">
	<h2><?php echo $cur["pname"];?></h2>
	<div><?php echo $cur["sprice"];?></div>
	<div>
		数量：<a href="">-</a>
		<span><input name="snums" type="text" value="1"></span>
		<a href="">+</a>
	</div>
	<div>
		<input type="submit" value="加入购物车">
	</div>
</form>
	

	
</body>
</html>