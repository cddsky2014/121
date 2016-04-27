<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>循环输出表格</title>
</head>
<body>	
	<table border="1px">
		<?php
			for($i=1;$i<=3;$i++){			
				echo "<tr>
						<td>{$i}</td>
						<td>{$i}</td>
						<td>{$i}</td>
					</tr>";
			}	
		?>
		<?php for($i=1;$i<=3;$i++){?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $i;?></td>
			<td><?php echo $i;?></td>
		</tr>
		<?php }?>

	</table>
	
</body>
</html>