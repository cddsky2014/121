<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
</head>
<body>
	<?php
		print_r($_POST);

	?>
	<table border=1>
		<tr>
			<td>用户名</td>
			<td><?php echo $_POST["uname"];?></td>
		</tr>
		<tr>
			<td>密码</td>
			<td><?php echo $_POST["pwd"];?></td>
		</tr>

		<tr>
			<td>重复密码</td>
			<td><?php echo $_POST["pwd2"];?></td>
		</tr>
		<tr>
			<td>性别</td>
			<td><?php 
			$sex_arr = array(1=>"男",2=>"女",3=>"保密");
			echo $sex_arr[$_POST["sex"]];?></td>
		</tr>

		<tr>
			<td>爱好</td>
			<td>
				<?php
					$hobby_arr = array(1=>"琴",2=>"棋",3=>"书",4=>"画");
					foreach($_POST["hobby"] as $v){
						echo $hobby_arr[$v];
					}			
				?>
			</td>
		</tr>

		<tr>
			<td>籍贯</td>
			<td>
				<?php
					$pro_arr = array(1=>"江苏",2=>"安徽",3=>"天津",4=>"上海");
					echo $pro_arr[$_POST["pro"]];
				?>
			</td>
		</tr>

		<tr>
			<td>性格</td>
			<td>
				<?php				
				$nature_arr = array(1=>"安静",2=>"婉约",3=>"温柔",4=>"豪放",5=>"风流");
				$nature = array_flip($_POST["nature"]);
				echo implode(",",array_intersect_key($nature_arr,$nature));

				/*foreach($_POST["nature"] as $v){
					echo $nature_arr[$v];
				}*/	


				?>
			
			</td>
		</tr>

	

		
	
	</table>
	
</body>
</html>