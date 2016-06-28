<?php /* Smarty version Smarty-3.1.6, created on 2016-06-28 14:54:48
         compiled from "./App/Home/View\Index\addAdmin.html" */ ?>
<?php /*%%SmartyHeaderCode:3194357721ac241d1f6-81493263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12b08fe4f184159adca9fdf37c6f4c643d60fe52' => 
    array (
      0 => './App/Home/View\\Index\\addAdmin.html',
      1 => 1467096704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3194357721ac241d1f6-81493263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57721ac24b191',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57721ac24b191')) {function content_57721ac24b191($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="<?php echo U('Index/doAddAdmin');?>
" method="post">
		uname<input type="text"  name="uname"><br>
		eamil<input type="text"  name="email"><br>
		tel<input type="text"  name="tel">
		<input type="submit" value="添加"><br>
	
	</form>
	
</body>
</html><?php }} ?>