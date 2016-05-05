<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		/*
		$_GET
			/do_login.php?name=lili&age=23&addr=usa
		*/
		$_GET[] = 1;				print_r($_GET);
		$_POST["addr"]="USA";
		print_r($_POST);

	?>
</body>
</html>

