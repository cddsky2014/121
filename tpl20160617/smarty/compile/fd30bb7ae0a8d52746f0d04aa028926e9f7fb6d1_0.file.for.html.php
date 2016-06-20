<?php /* Smarty version 3.1.27, created on 2016-06-17 06:44:26
         compiled from "E:\121\tpl20160617\smarty\template\for.html" */ ?>
<?php
/*%%SmartyHeaderCode:389657639c4aef9e78_57880651%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd30bb7ae0a8d52746f0d04aa028926e9f7fb6d1' => 
    array (
      0 => 'E:\\121\\tpl20160617\\smarty\\template\\for.html',
      1 => 1466145863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '389657639c4aef9e78_57880651',
  'variables' => 
  array (
    'name' => 0,
    'i' => 0,
    'myColors' => 0,
    'color' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57639c4b07afa6_57296788',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57639c4b07afa6_57296788')) {
function content_57639c4b07afa6_57296788 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '389657639c4aef9e78_57880651';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php echo $_smarty_tpl->tpl_vars['name']->value;?>


<ul>
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) min(ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 100+1 - (101) : 101-(100)+1)/abs($_smarty_tpl->tpl_vars['i']->step)),10);
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 101, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>    
	<li><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</li>
<?php }} else { ?>
	<b>逻辑不正确</b>
<?php }  ?>
</ul>

<?php if (isset($_smarty_tpl->tpl_vars['myColors'])) {$_smarty_tpl->tpl_vars['myColors'] = clone $_smarty_tpl->tpl_vars['myColors'];
$_smarty_tpl->tpl_vars['myColors']->value = array(1,2,3,4); $_smarty_tpl->tpl_vars['myColors']->nocache = null; $_smarty_tpl->tpl_vars['myColors']->scope = 0;
} else $_smarty_tpl->tpl_vars['myColors'] = new Smarty_Variable(array(1,2,3,4), null, 0);?>
<ul>
<?php
$_from = $_smarty_tpl->tpl_vars['myColors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['color'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['color']->_loop = false;
$_smarty_tpl->tpl_vars['color']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->_loop = true;
$_smarty_tpl->tpl_vars['color']->index++;
$foreach_color_Sav = $_smarty_tpl->tpl_vars['color'];
?>    
<li><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</li>
<?php echo $_smarty_tpl->tpl_vars['color']->index;?>

<?php
$_smarty_tpl->tpl_vars['color'] = $foreach_color_Sav;
}
?>
</ul>
	
</body>
</html><?php }
}
?>