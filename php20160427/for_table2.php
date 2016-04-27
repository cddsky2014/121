<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>循环嵌套</title>
</head>
<body>
	
	<table border="1px;">
		<?php 
			for($i=1;$i<=9;$i++){
				echo "<tr>";
				for($j=1;$j<=$i;$j++){
					$r = $j*$i;
					echo "<td>{$j}×{$i}={$r}</td>";	
				}				
				echo "</tr>";
			}
		?>
	
	</table>

</body>
</html>