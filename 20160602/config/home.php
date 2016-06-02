<?php

include("./link.php");

$sql = "select * from ts_config"; 
$res = mysql_query($sql);
$config = array();
while($row = mysql_fetch_assoc($res)){
	$config[$row["cfgname_en"]]=$row["cfgvalue"];
}
print_r($config);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $config["sitetitle"];?></title>
	<meta http-equiv="keyword" content="<?php echo $config["keyword"]?>">
</head>
<body>


<hr>

<a href="./show_config.php?key=concat">联系方式</a> <a href="./show_config.php?key=about">关于我们</a>
	
</body>
</html>