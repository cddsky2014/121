<?php /* Smarty version 3.1.27, created on 2016-06-21 07:22:18
         compiled from "E:\121\oop\Application\Admin\View\Index\addGoods.html" */ ?>
<?php
/*%%SmartyHeaderCode:177805768eb2ad89c98_81061103%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f58a243af400053e1fee352af660d297db852bca' => 
    array (
      0 => 'E:\\121\\oop\\Application\\Admin\\View\\Index\\addGoods.html',
      1 => 1466493736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177805768eb2ad89c98_81061103',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5768eb2add4026_08880972',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5768eb2add4026_08880972')) {
function content_5768eb2add4026_08880972 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '177805768eb2ad89c98_81061103';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
	<form action="?m=Admin&c=Index&a=doAddGoods" method="post" enctype="multipart/form-data">

		<input type="file" name="file[]"> 

		<input type="submit" value="上传">	
	
	</form>

		
</body>
</html><?php }
}
?>