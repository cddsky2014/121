<?php /* Smarty version 3.1.27, created on 2016-06-17 06:17:28
         compiled from "E:\121\tpl20160617\smarty\template\if.html" */ ?>
<?php
/*%%SmartyHeaderCode:26027576395f8b542f9_33740860%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '688adb432b4f8ef83e099636dd978110e487fb93' => 
    array (
      0 => 'E:\\121\\tpl20160617\\smarty\\template\\if.html',
      1 => 1466144246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26027576395f8b542f9_33740860',
  'variables' => 
  array (
    'x' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576395f8c00125_14667466',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576395f8c00125_14667466')) {
function content_576395f8c00125_14667466 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26027576395f8b542f9_33740860';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php if (isset($_smarty_tpl->tpl_vars['x'])) {$_smarty_tpl->tpl_vars['x'] = clone $_smarty_tpl->tpl_vars['x'];
$_smarty_tpl->tpl_vars['x']->value = 60; $_smarty_tpl->tpl_vars['x']->nocache = null; $_smarty_tpl->tpl_vars['x']->scope = 0;
} else $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(60, null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['x']->value == 50) {?>
<b>不及格</b>
<?php } elseif ($_smarty_tpl->tpl_vars['x']->value == 60) {?>
<b>及格</b>
<?php } else { ?>
<b>我也不知道</b>
<?php }?>

<?php if ((1 & $_smarty_tpl->tpl_vars['x']->value)) {?>
<b>奇数</b>
<?php } else { ?>
<b>偶数</b>
<?php }?>




</body>
</html><?php }
}
?>