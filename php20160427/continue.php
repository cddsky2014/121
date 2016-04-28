<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>continue</title>
</head>
<body>
	<?php
		/*
			continue 
				结束本次循环进入下次循环
		*/

		for($i=1;$i<=10;$i++){
			if($i==5){
				//break;
				continue;
			}
			echo $i;
		}
	?>
	
</body>
</html>