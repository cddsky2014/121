<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php0</title>
</head>
<body>

	<!--
		1、php是对HTML的补充
	-->

	<?php
		$co = "加拿大";
	?>

	<p>小明的国籍是<?php echo $co;?></p>
	<p>小黑的国籍是<?php echo $co;?></p>
	<p>小王的国籍是<?php echo $co;?></p>
	<p>韩梅梅的国籍是<?php echo $co;?></p>
	<p>李磊国籍是<?php echo $co;?></p>
	<p>lucy的国籍是英国</p>
	<p>tom的国籍是美国</p>
	<p>老王的国籍是隔壁</p>

	
	<?php
		for($i=1;$i<=100;$i++){
	?>
	<div>I MISS YOU</div>
	<?php }?>
</body>
</html>