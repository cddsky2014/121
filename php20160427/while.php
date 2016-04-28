<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>while</title>
</head>
<body>
	<?php
		/*
			$初始变量=值;
			while(表达式){
				执行语句;
				初始变量++|--;
			}
		
		for($i=1;$i<=5;$i++){
			echo $i;
		}

		$i=1;
		while($i<=5){
			echo $i;
			$i++;
		}*/
	
	?>

	<table border="1px">
		<?php
			//外层循环显示行
			$i = 1;			
			while($i<=9){
				echo "<tr>";
					//内层循环显示列
					$j = 1;
					while($j<=$i){
						$r = $i*$j;
						echo "<td>{$j}×{$i}={$r}</td>";
						$j++;
					}
					echo "</tr>";				
				$i++;
			}
		?>
	
	</table>
	
</body>
</html>