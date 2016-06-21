<?php /* Smarty version 3.1.27, created on 2016-06-21 03:52:39
         compiled from "E:\121\oop\Application\Home\View\Home\modify.html" */ ?>
<?php
/*%%SmartyHeaderCode:275805768ba07759cc9_18772995%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73627494c16760eecff4c1edb70eb3769595231e' => 
    array (
      0 => 'E:\\121\\oop\\Application\\Home\\View\\Home\\modify.html',
      1 => 1466481143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275805768ba07759cc9_18772995',
  'variables' => 
  array (
    'name' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5768ba07830a75_82407011',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5768ba07830a75_82407011')) {
function content_5768ba07830a75_82407011 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_len')) require_once 'E:\\121\\oop\\Think\\Ext\\Smarty\\plugins\\modifier.len.php';
if (!is_callable('smarty_modifier_color')) require_once 'E:\\121\\oop\\Think\\Ext\\Smarty\\plugins\\modifier.color.php';
if (!is_callable('smarty_function_html_ul')) require_once 'E:\\121\\oop\\Think\\Ext\\Smarty\\plugins\\function.html_ul.php';

$_smarty_tpl->properties['nocache_hash'] = '275805768ba07759cc9_18772995';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable('lucyfdfdfdf', null, 0);?>

<?php echo smarty_modifier_len($_smarty_tpl->tpl_vars['name']->value);?>

<?php echo smarty_modifier_color($_smarty_tpl->tpl_vars['name']->value,'ff0033');?>




<?php echo smarty_function_html_ul(array('data'=>$_smarty_tpl->tpl_vars['info']->value),$_smarty_tpl);?>


	
</body>
</html><?php }
}
?>