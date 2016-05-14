<?php
//判断键名在cookie中是否被设置
	if(isset($_COOKIE["uname"])==true){
		$uname = $_COOKIE["uname"];
	}else{
		$uname="";
	}
	if(isset($_COOKIE["pwd"])==true){
		$pwd = $_COOKIE["pwd"];
	}else{
		$pwd="";
	}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>记住密码</title>
</head>
<body>
	<form action="do_login.php" method="post">
		用户名：<input type="text" name="uname" value="<?php echo $uname;?>">
		密码：<input type="password" name="pwd" value="<?php echo $pwd;?>">
		保存：<select name="time">
			<option value="">不保存</option>
			<option value="1">保存1天</option>
			<option value="7">保存1周</option>
		</select>
		<input type="submit" value="登陆">
	</form>	
</body>
</html>