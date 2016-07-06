<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">	

	<div class="row">
		
		
	
	<table class="table">
		<tr>
			<td>用户名</td>
			<td>邮箱</td>
			<td>手机</td>
			<td>操作</td>
		</tr>

		<?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="tr_<?php echo ($vo["aid"]); ?>">
			<td class="aname"><?php echo ($vo["aname"]); ?></td>
			<td class="email"><?php echo ($vo["email"]); ?></td>
			<td class="tel"><?php echo ($vo["tel"]); ?></td>
			<td>
				<span data-aid="<?php echo ($vo["aid"]); ?>" class="btn btn-primary btn-xs del">删除</span>

				<span data-aid="<?php echo ($vo["aid"]); ?>" data-email="<?php echo ($vo["email"]); ?>" data-tel="<?php echo ($vo["tel"]); ?>" data-aname="<?php echo ($vo["aname"]); ?>"class="btn btn-primary btn-xs edit">修改</span>
			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>	
	</table>

	<input type="hidden" value="" name="aid"><br>

	姓名：<input type="text" name="aname"><br>
	邮箱：<input type="text" name="email"><br>
	电话：<input type="text" name="tel"><br>
	<input class="doedit" type="button" value="修改"><br>

	
	
	
	</div>
	

</div>

<script src="/Public/jquery.js"></script>
<script src="/Application/Admin/Public/js/base.js"></script>

</body>
</html>