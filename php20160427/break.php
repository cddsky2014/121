<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>break</title>
</head>
<body>
	<?php
		/*	
			break
				提前结束执行程序
		*/

		for($i=1;$i<=10;$i++){
			break;
			echo $i;
		}

		$date = "6-1";
		switch($date){
			case "5-1":
				echo "劳动节";
				break;
			case "6-1":
				echo "儿童节";
				break;
			case "10-1":
				echo "国庆节";
				break;
			default:
				echo "不知道";
				break;
		}
	
	?>
	
</body>
</html>