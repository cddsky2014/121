<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>编辑器</title>
</head>
<body>

	<form action="./do_edit.php" method="post">
		个人简介：
		<textarea id="editor" name="intro"></textarea>
		<hr>
		<input type="submit" value="提交">		
	</form>
	<script src="./ue/ueditor.config.js"></script>
	<script src="./ue/ueditor.all.min.js"></script>
	<script>
		var conf={"toolbars":[[
			'fullscreen','bold', 'italic', 'underline', 'fontborder',
		]]};
		UE.getEditor("editor",conf);	
	</script>
	
</body>
</html>