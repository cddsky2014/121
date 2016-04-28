<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<?php
		function print_table($style){
			$str = "";
			$str .= "<table style='{$style}'>";
			$str .= "</table>";
			return $str;
		}
		echo print_table("color:red;");
	?>
	
</body>
</html>