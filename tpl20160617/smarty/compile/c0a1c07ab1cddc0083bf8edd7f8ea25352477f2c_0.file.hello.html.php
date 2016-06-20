<?php /* Smarty version 3.1.27, created on 2016-06-17 06:00:20
         compiled from "E:\121\tpl20160617\smarty\template\hello.html" */ ?>
<?php
/*%%SmartyHeaderCode:19830576391f4c12e99_32227877%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0a1c07ab1cddc0083bf8edd7f8ea25352477f2c' => 
    array (
      0 => 'E:\\121\\tpl20160617\\smarty\\template\\hello.html',
      1 => 1466143196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19830576391f4c12e99_32227877',
  'variables' => 
  array (
    'x' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576391f4ca3736_99691756',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576391f4ca3736_99691756')) {
function content_576391f4ca3736_99691756 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19830576391f4c12e99_32227877';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!--我是HTML注释-->

<?php if (isset($_smarty_tpl->tpl_vars['x'])) {$_smarty_tpl->tpl_vars['x'] = clone $_smarty_tpl->tpl_vars['x'];
$_smarty_tpl->tpl_vars['x']->value = 123; $_smarty_tpl->tpl_vars['x']->nocache = null; $_smarty_tpl->tpl_vars['x']->scope = 0;
} else $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(123, null, 0);?>

<?php echo $_smarty_tpl->tpl_vars['x']->value;?>


<?php if (isset($_smarty_tpl->tpl_vars['arr'])) {$_smarty_tpl->tpl_vars['arr'] = clone $_smarty_tpl->tpl_vars['arr'];
$_smarty_tpl->tpl_vars['arr']->value = array(1,2,3,4); $_smarty_tpl->tpl_vars['arr']->nocache = null; $_smarty_tpl->tpl_vars['arr']->scope = 0;
} else $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable(array(1,2,3,4), null, 0);?>

<?php echo print_r($_smarty_tpl->tpl_vars['arr']->value);?>


<?php echo '<h1>Hello Smarty</h1>';?>




	
</body>
</html><?php }
}
?>