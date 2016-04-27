<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>for循环语句</title>
</head>
<body>

	<?php
		/*
			for(初始变量;表达式;初始化变量++或--){
				执行语句
			}
			1、初始变量的赋值只在第一循环的时候被执行
			2、必须要写初始变量的变化规则

		for($num=100;$num>0;$num--){ //99 98 97
			echo $num;//100 99 98
			echo "<br>";
		}
		for($i=1;$i<=100;$i++){
			echo $i;
		}
		
		//10;
		$num = 1;//1
		$num = $num+2;//3
		$num = $num+3;
		$num = $num+4;
		$num = $num+5;
		$num = $num+6;
		$num = $num+7;
		$num = $num+8;
		$num = $num+9;
		$num = $num+10;

		echo $num;
	

		//从1累加到任意数字
		$sum = 0;
		for($i=1;$i<=100;$i++){
			$sum = $sum+$i;
		}
		echo $sum;
	

		//将所有奇数或偶数累加
		$sum = 0;
		for($i=1;$i<=100;$i++){
			if($i%2==0){
				$sum = $sum+$i;
			}			
		}
		echo $sum;
*/
		//判断闰年和平年

		for($year=2000;$year<=2016;$year++){
			if(($year%4==0&&$year%100!=0)||($year%400==0)){
				echo $year."闰年"."<hr>";
			}else{
				echo $year."平年"."<hr>";
			}	
			
		}






	?>
	
</body>
</html>