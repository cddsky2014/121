<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件下载</title>
</head>
<body>

	<form action="./do_down.php" method="post">
		<table>
			<tr>
				<td>URL</td>
				<td><input type="text" name="url"></td>
			</tr>
			<tr>
				<td>文件名</td>
				<td><input type="text" name="filename"></td>
			</tr>
			<tr>
				<td colspan=2>
					<input type="submit" value="下载">
				</td>
			</tr>
		</table>
	
	</form>
	
</body>
</html>