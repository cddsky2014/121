<?php /* Smarty version 3.1.27, created on 2016-06-20 03:32:28
         compiled from "E:\121\tpl20160617\smarty\template\plugin.html" */ ?>
<?php
/*%%SmartyHeaderCode:18423576763ccb1e616_49988677%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f54afef938e88e7915c6dbe8bb32159e15e66328' => 
    array (
      0 => 'E:\\121\\tpl20160617\\smarty\\template\\plugin.html',
      1 => 1466393547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18423576763ccb1e616_49988677',
  'variables' => 
  array (
    'info' => 0,
    'key' => 0,
    'v' => 0,
    'data' => 0,
    'tr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576763ccc3b8e0_05478088',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576763ccc3b8e0_05478088')) {
function content_576763ccc3b8e0_05478088 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'E:\\121\\tpl20160617\\smarty\\smarty\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_html_table')) require_once 'E:\\121\\tpl20160617\\smarty\\smarty\\plugins\\function.html_table.php';
if (!is_callable('smarty_function_html_select_date')) require_once 'E:\\121\\tpl20160617\\smarty\\smarty\\plugins\\function.html_select_date.php';

$_smarty_tpl->properties['nocache_hash'] = '18423576763ccb1e616_49988677';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>插件</title>
</head>
<body>

	<select name="foo" id="">
		<?php
$_from = $_smarty_tpl->tpl_vars['info']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
		
	<?php echo smarty_function_html_options(array('name'=>'foo1','options'=>$_smarty_tpl->tpl_vars['info']->value),$_smarty_tpl);?>


	<br>

	<?php if (isset($_smarty_tpl->tpl_vars['data'])) {$_smarty_tpl->tpl_vars['data'] = clone $_smarty_tpl->tpl_vars['data'];
$_smarty_tpl->tpl_vars['data']->value = array(1,2,3,4,5,6,7,8,9,0); $_smarty_tpl->tpl_vars['data']->nocache = null; $_smarty_tpl->tpl_vars['data']->scope = 0;
} else $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable(array(1,2,3,4,5,6,7,8,9,0), null, 0);?>

	<?php if (isset($_smarty_tpl->tpl_vars['tr'])) {$_smarty_tpl->tpl_vars['tr'] = clone $_smarty_tpl->tpl_vars['tr'];
$_smarty_tpl->tpl_vars['tr']->value = array('bgcolor="red"','bgcolor="blue"','bgcolor="green"'); $_smarty_tpl->tpl_vars['tr']->nocache = null; $_smarty_tpl->tpl_vars['tr']->scope = 0;
} else $_smarty_tpl->tpl_vars['tr'] = new Smarty_Variable(array('bgcolor="red"','bgcolor="blue"','bgcolor="green"'), null, 0);?>

	<?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['data']->value,'cols'=>'first,second,third,fourth','inner'=>'rows','tr_attr'=>$_smarty_tpl->tpl_vars['tr']->value),$_smarty_tpl);?>


	<hr>
	<?php echo smarty_function_html_select_date(array('start_year'=>1900,'end_start'=>2016),$_smarty_tpl);?>


</body>
</html><?php }
}
?>