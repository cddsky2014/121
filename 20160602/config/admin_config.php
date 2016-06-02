<?php

include("./link.php");

$sql = "select * from ts_config";

$res = mysql_query($sql);




?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action="./do_config.php" method="post">
	<?php 
	while($row = mysql_fetch_assoc($res)){	
		
		extract($row);

		if($cfgtype=="text"){
			echo "{$cfgname_zh}:<input name='{$cfgname_en}' type='text' value='{$cfgvalue}'><br>";
		}
		if($cfgtype=="textarea"){
			echo "{$cfgname_zh}:<textarea name='{$cfgname_en}'  name=''>{$cfgvalue}</textarea><br>";
		}
	}
	?>
	
	<input type="submit" value="提交">
	
</form>
	
</body>
</html>