<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>九九乘法表</title>
</head>
<body>
	<table border="2">
		<?php 
		//1行1列 1行2列...
		//2行1列 2行2列...
			for($i=1;$i<=9;$i++){
				echo "<tr>";
				for($j=1;$j<=$i;$j++){
					$res = $j*$i;
					echo "<td>$j x $i = $res </td>";
				}
				echo "</tr>";
			}
		?>
	</table>

	<table border="2">
		<?php 
		//1行1列 1行2列...
		//2行1列 2行2列...
			for($i=9;$i>=1;$i--){
				echo "<tr>";
				for($j=1;$j<=$i;$j++){
					$res = $j*$i;
					echo "<td>$j x $i = $res </td>";
				}
				echo "</tr>";
			}
		?>
	</table>

	
	<table border="2">
		<?php 
		//1行1列 1行2列...
		//2行1列 2行2列...
			for($i=1;$i<=9;$i++){
				echo "<tr>";
				for($k=9;$k>$i;$k--){					
					echo "<td> </td>";
				}
				
				for($j=$i;$j>=1;$j--){
					
					$res = $j*$i;
					echo "<td>$j x $i = $res </td>";
				}
				echo "</tr>";
			}
		?>
	</table>
	<table border="2">
		<?php 
		//1行1列 1行2列...
		//2行1列 2行2列...
			for($i=9;$i>=1;$i--){
				echo "<tr>";
				for($k=9;$k>$i;$k--){					
					echo "<td> </td>";
				}
				
				for($j=$i;$j>=1;$j--){
					
					$res = $j*$i;
					echo "<td>$j x $i = $res </td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>