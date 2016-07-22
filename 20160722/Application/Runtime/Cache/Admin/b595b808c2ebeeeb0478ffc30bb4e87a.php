<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="http://apps.bdimg.com/libs/jqueryui/1.9.2/themes/base/jquery-ui.css">
</head>
<body>
	欢迎<?php echo session('uname');?>
	首页
	<a href="<?php echo U('Index/logout');?>">注销</a>
	<hr>
	<div class="menu">
		<span class="User/userAdd">添加用户</span>
		<span class="Product/productList">商品管理</span>	
		<span class="Product/productAdd">商品添加</span>	
	</div>

	<hr>
	<div class="content">		
	
	</div>
	<div class="foot"></div>
	
	<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="http://apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	
	<script>
		$(function(){			
			$(".menu span").click(function(){				
				var action = $(this).attr("class");
				$.get("/index.php/Admin/"+action,function(res){		
					$(".content").html(res);				
				});
			
			});	
		
		});
	
	</script>

</body>
</html>