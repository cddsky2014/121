<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>do_while</title>
</head>
<body>
	<?php
		
		/*	
			$初始变量=值;
			do{
				执行语句;
				$初始变量++;
			}while(表达式);

			dowhile和while的区别：
				dowhile无论是否满足判断条件至少执行一次循环。
		$i=6;
		while($i<=5){
			echo $i;
			$i++;
		}
		
		$i=1;
		do{
			echo $i;
			$i++;
		}while($i<=8);
*/
	
	
	?>


	<table border="1px">

		<?php 
			$i = 1;
			do{
				echo "<tr>";
					$j=1;
					do{
						$r = $i*$j;
						echo "<td>{$j}×{$i}=$r</td>";
						$j++;
					}while($j<=$i);				
				echo "</tr>";				
				$i++;			
			}while($i<=9);
		?>	
	</table>
	
</body>
</html>