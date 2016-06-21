<?php /* Smarty version 3.1.27, created on 2016-06-21 02:01:26
         compiled from "E:\121\oop\Application\Home\View\head.html" */ ?>
<?php
/*%%SmartyHeaderCode:2730957689ff6697bf0_96313295%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f7de43936c5ebee1a65b63e0d93bd040c430598' => 
    array (
      0 => 'E:\\121\\oop\\Application\\Home\\View\\head.html',
      1 => 1466474484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2730957689ff6697bf0_96313295',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57689ff673bd23_64274104',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57689ff673bd23_64274104')) {
function content_57689ff673bd23_64274104 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2730957689ff6697bf0_96313295';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css">

	<style type="text/css">
		.mg-r-20{margin-right:20px;}
	</style>

</head>
<body>

<div class="container">
	<div class="navbar navbar-default">
		<span class="navbar-text"><a href="">我的购物车</a></span>
		<span class="navbar-text"><a href="">我的订单</a></span>
		
		<?php if (!isset($_SESSION['uname'])) {?>
		<span class="navbar-text navbar-right mg-r-20">
			<a href="?m=Home&c=Home&a=login">登陆</a>
		</span>
		<span class="navbar-text navbar-right">
			<a href="?m=Home&c=Home&a=regist">注册</a>
		</span>
		<?php } else { ?>
		
		<span class="navbar-text navbar-right  mg-r-20">
			<a href="?m=Home&c=Home&a=logout">注销</a>
		</span>
		<span class="navbar-text navbar-right">
			欢迎:<?php echo $_SESSION['uname'];?>

		</span>		
		<?php }?>
	</div><?php }
}
?>