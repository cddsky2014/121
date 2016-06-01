<?php
$pid = $_GET["pid"];
$oid = $_GET["oid"];

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="./do_comment.php" method="post">
		<input type="hidden" value="<?php echo $pid;?>" name="pid">	
		<input type="hidden" value="<?php echo $oid;?>" name="oid">		
		<textarea name="content"></textarea><br>
		<input type="submit" value="提交">
	
	</form>

	
</body>
</html>