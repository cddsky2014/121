<?php
	include("./link.php");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<a href="./home.php">首页</a>
<table border=1>
	<tr>
		<td>商品图片</td>
		<td>商品名称</td>
		<td>价格</td>
		<td>数量</td>
		<td>小计</td>
		<td>操作</td>
	</tr>

	<?php foreach($_SESSION["car"] as $v){
		$pid=$v["pid"];
		$cur = mysql_fetch_assoc(mysql_query("select * from ts_goods where pid='{$pid}'"));

		$subtotal=$cur["sprice"]*$v["snums"];
	?>
	<tr>
		<td><img width="80px" src="../upload/<?php echo $cur["thumb"];?>" alt=""></td>
		<td><?php echo $cur["pname"];?></td>
		<td><?php echo $cur["sprice"];?></td>
		<td><?php echo $v["snums"];?></td>
		<td><?php echo $subtotal;?></td>
		<td><a href="./car_del.php?pid=<?php echo $cur["pid"];?>">删除</a></td>
	</tr>	
	<?php }?>


</table>

<form action="./pay.php" method="post">
	地址：<input type="text" name="addr"><br>
	手机：<input type="text" name="tel"><br>
	<input type="submit" value="立即购买"> <br>

</form>

	
</body>
</html>