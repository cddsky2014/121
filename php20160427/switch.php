<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>switch</title>
</head>
<body>
	<?
		/*
			switch开关语句
			
		
		switch(变量){
			case 值:
				执行语句;
				break;
			case 值:
				执行语句;
				break;
			default:
				执行语句;
				break;
		}
		$date = "8-1";
		switch($date){
			case "6-1":
				echo "儿童节";
				break;
			case "5-1":
				echo "劳动节";
				break;
			default:
				echo "不知道";
				break;
		}*/

		$num = 30;
		//$num = $num%2;
		$num %= 2;
		switch($num){
			case 1:
				echo "奇数";
				break;
			default:
				echo "偶数";
				break;
		}

		
	
	?>
	
</body>
</html>