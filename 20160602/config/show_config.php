<?php
include("./link.php");
	
	$key = $_GET["key"];

	$sql = "select * from ts_config where cfgname_en='{$key}'"; 
	
	$row = mysql_fetch_assoc(mysql_query($sql));


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>

	
</head>
<body>

	<?php echo $row["cfgvalue"];?>
	
</body>
</html>