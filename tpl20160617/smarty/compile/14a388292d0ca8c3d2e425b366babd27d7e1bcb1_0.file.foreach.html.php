<?php /* Smarty version 3.1.27, created on 2016-06-17 08:04:46
         compiled from "E:\121\tpl20160617\smarty\template\foreach.html" */ ?>
<?php
/*%%SmartyHeaderCode:148715763af1eebee69_18747723%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14a388292d0ca8c3d2e425b366babd27d7e1bcb1' => 
    array (
      0 => 'E:\\121\\tpl20160617\\smarty\\template\\foreach.html',
      1 => 1466149271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148715763af1eebee69_18747723',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5763af1f0e0231_08590130',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5763af1f0e0231_08590130')) {
function content_5763af1f0e0231_08590130 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '148715763af1eebee69_18747723';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<ul>
	<?php
$_from = $_smarty_tpl->tpl_vars['info']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
$_smarty_tpl->tpl_vars['v']->iteration=0;
$_smarty_tpl->tpl_vars['v']->index=-1;
$_smarty_tpl->tpl_vars['v']->show = ($_smarty_tpl->tpl_vars['v']->total > 0);
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['v']->iteration++;
$_smarty_tpl->tpl_vars['v']->index++;
$_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index == 0;
$_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->index + 1 == $_smarty_tpl->tpl_vars['v']->total;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<?php if ($_smarty_tpl->tpl_vars['v']->first) {?>
			<b>这是第一次循环</b>
		<?php } elseif ($_smarty_tpl->tpl_vars['v']->last) {?>
			<b>这是最后一次循环</b>
		<?php } else { ?>
			<li><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
		<?php }?>	
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>	
</ul>

<?php if (isset($_smarty_tpl->tpl_vars['info'])) {$_smarty_tpl->tpl_vars['info'] = clone $_smarty_tpl->tpl_vars['info'];
$_smarty_tpl->tpl_vars['info']->value = array(1,2,3,4); $_smarty_tpl->tpl_vars['info']->nocache = null; $_smarty_tpl->tpl_vars['info']->scope = 0;
} else $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable(array(1,2,3,4), null, 0);?>
<ul>
	<?php
$_from = $_smarty_tpl->tpl_vars['info']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
$_smarty_tpl->tpl_vars['v']->iteration=0;
$_smarty_tpl->tpl_vars['v']->index=-1;
$_smarty_tpl->tpl_vars['v']->show = ($_smarty_tpl->tpl_vars['v']->total > 0);
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['v']->iteration++;
$_smarty_tpl->tpl_vars['v']->index++;
$_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index == 0;
$_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->index + 1 == $_smarty_tpl->tpl_vars['v']->total;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<li><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
		<?php if ($_smarty_tpl->tpl_vars['v']->last) {?>
		<li>本次循环总次数<?php echo $_smarty_tpl->tpl_vars['v']->total;?>
</li>
		<?php }?>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
		12345678
	<?php
}
?>
	<?php if ($_smarty_tpl->tpl_vars['v']->show == false) {?>
		没有值
	<?php }?>

</ul>

	
</body>
</html><?php }
}
?>