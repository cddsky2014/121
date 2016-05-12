<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>多文件上传</title>
</head>
<body>
	
	<form action="do_upload.php" enctype="multipart/form-data" method="post">
		<input type="file" name="file[]">
		<input type="file" name="file[]">
		<input type="file" name="file[]">
		<input type="submit" value="上传">
	</form>

	
</body>
</html>
