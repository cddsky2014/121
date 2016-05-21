<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>valid</title>
</head>
<body>
	<form id="frm" action="./add.php" method="post">
		用户名：<input type="text" name="uname">
			<span id="uname">用户名必须填写</span><br>
		密码：<input type="password" name="pwd">
			<span id="pwd">密码不能为空</span><br>
		确认密码：<input type="password" name="pwd2">
			<span id="pwd2"></span><br>
		<input onclick="valid();" type="button" value="提交">
		<input type="submit" value="submit">

		<span onclick="valid();">提交</span>
		
	</form>
	<script src="./valid.js"></script>	
</body>
</html>