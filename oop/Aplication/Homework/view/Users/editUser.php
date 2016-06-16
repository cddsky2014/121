<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>编辑用户</title>
        <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>

    <form action="?m=Homework&c=Users&a=doEditUser&uid=<?php echo $res[0]['uid'];?>" method="post">
		
        用户名：<input name="uname" type="text" value="<?php echo $res[0]['uname'];?>"><br>
    邮  箱：<input name="email" type="text" value="<?php echo $res[0]['email'];?>"><br>
    手  机：<input name="tel" type="text" value="<?php echo $res[0]['tel'];?>"><br>
    <input type="submit" value="编辑用户"><br>
	
	</form>

	
</body>
</html>