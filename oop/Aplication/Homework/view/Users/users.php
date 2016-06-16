<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户列表</title>
        <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	
    <table class="table table-bordered">
		<tr>
			<td>用户名</td>
			<td>email</td>
			<td>手机</td>
			<td>操作</td>
		</tr>
		<?php foreach($res as $v){?>
		<tr>
			<td><?php echo $v['uname'];?></td>
			<td><?php echo $v['email'];?></td>
			<td><?php echo $v['tel'];?></td>
                        <td>
                            <a class="btn btn-primary btn-xs" href="./home.php?m=Homework&c=Users&a=editUser&uid=<?php echo $v['uid'];?>">编辑</a>
                            
                        </td>
		</tr>	
		<?php }?>
	</table>

    <a class="btn btn-primary btn-xs" href="./home.php?m=Homework&c=Users&a=addUser">添加</a>

	
</body>
</html>