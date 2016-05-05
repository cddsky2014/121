<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
</head>
<body>
	<?php
	//清洗用户输入
	function clear_input($str){
		$str = addslashes($str);//转义
		$str = strip_tags($str);//删除php和html
		$str = str_replace(" ","",$str);//删除空格
		return $str;
	}	
	
	if(isset($_POST["uname"])==true){
		$uname = clear_input($_POST["uname"]);
		if($uname==""){
			exit("用户名不存在<a href='./regist.php'>返回</a>");
		}
	}else{
		exit("用户名不存在<a href='./regist.php'>返回</a>");
	}

	exit();
		
	


		$pwd = $_POST["pwd"];
		$pwd2 = $_POST["pwd2"];
		$sex = $_POST["sex"];
		$hobby = $_POST["hobby"];
		$pro = $_POST["pro"];
		$photo = $_POST["photo"];
		$intro = $_POST["intro"];

	?>
	<table border=1>
		<tr>
			<td>用户名</td>
			<td><?php echo $uname;?></td>
		</tr>
		<tr>
			<td>密码</td>
			<td><?php echo $pwd;?></td>
		</tr>

		<tr>
			<td>重复密码</td>
			<td><?php echo $pwd2;?></td>
		</tr>
		<tr>
			<td>性别</td>
			<td><?php 
			$sex_arr = array(1=>"男",2=>"女",3=>"保密");
			echo $sex_arr[$sex];?></td>
		</tr>

		<tr>
			<td>爱好</td>
			<td>
				<?php
					$hobby_arr = array(1=>"琴",2=>"棋",3=>"书",4=>"画");
					foreach($hobby as $v){
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
					echo $pro_arr[$pro];
				?>
			</td>
		</tr>


	

		
	
	</table>
	
</body>
</html>