<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>数组</title>
</head>
<body>

	<table border=1>
		<tr>
			<td>用户名</td><td>密码</td><td>性别</td>
		</tr>
		<?php

		$info = array();
		$info[]=array("uname"=>"lucy","pwd"=>123456,"sex"=>"girl");
		$info[]=array("uname"=>"jack","pwd"=>6666,"sex"=>"boy");
		$info[]=array("uname"=>"tom","pwd"=>668866,"sex"=>"boy");
			foreach($info as $v){
				$uname=$v["uname"];
				echo "<tr>
					<td>{$uname}</td>
					<td>".$v["pwd"]."</td>
					<td>".$v["sex"]."</td>
				</tr>";
			}
		
		?>
	</table>


	<?php
		$data = array(
			array("title"=>"商品标题1","sprice"=>120.00,"addr"=>"南京","img"=>"1.jpg"),
			array("title"=>"商品标题2","sprice"=>130.00,"addr"=>"南京","img"=>"2.jpg"),
			array("title"=>"商品标题3","sprice"=>140.00,"addr"=>"南京","img"=>"3.jpg"),
		);
	
	?>
	
</body>
</html>