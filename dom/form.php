<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>
	<form id="form1" action="">
		用户名<input type="text" name="uname" value="123">
		密码<input type="password" name="pwd">
		<input type="button" value="注册" onclick="reg()">	
	</form>

	<script>
		var reg = function(){
			var uname=form1.uname.value;
			console.log(uname);
			var pwd=form1.pwd.value;
			console.log(pwd);		
		}
	</script>
	
</body>
</html>