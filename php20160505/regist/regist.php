<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
</head>
<body>
<form action="./do_regist.php" method="post">
	<table>
		<tr>
			<td>用户名</td>
			<td><input type="text" name="uname">
			<input type="hidden" value="uuuuname" name="uuname">
			</td>
		</tr>
		<tr>
			<td>密码</td>
			<td><input type="password" name="pwd"></td>
		</tr>

		<tr>
			<td>确认密码</td>
			<td><input type="password" name="pwd2"></td>
		</tr>

		<tr>
			<td>性别</td>
			<td>
				<input value="1" checked type="radio" name="sex">男
				<input value="2" type="radio" name="sex">女
				<input value="3" type="radio" name="sex">保密
			</td>
		</tr>

		<tr>
			<td>爱好</td>
			<td>
				<input type="checkbox" name="hobby[]" value="1">琴
				<input type="checkbox" name="hobby[]" value="2">棋
				<input type="checkbox" name="hobby[]" value="3">书
				<input type="checkbox" name="hobby[]" value="4">画
			</td>
		</tr>

		<tr>
			<td>籍贯</td>
			<td>
				<select name="pro">
					<option value="1">江苏</option>
					<option value="2">安徽</option>
					<option value="3">天津</option>
					<option value="4">上海</option>
				</select>
			</td>
		</tr>	

		<tr>
			<td>头像</td>
			<td>
				<input type="file" name="photo">
			</td>
		</tr>

		<tr>
			<td>个人简介</td>
			<td>
				<textarea name="intro"></textarea>
			</td>
		</tr>

		<tr>
			<td colspan=2><input type="submit" value="注册"></td>
		</tr>


	
	</table>
	
</form>
	
	
</body>
</html>