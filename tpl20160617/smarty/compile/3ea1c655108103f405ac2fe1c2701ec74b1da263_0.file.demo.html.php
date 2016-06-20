<?php /* Smarty version 3.1.27, created on 2016-06-19 15:26:29
         compiled from "E:\121\tpl20160617\smarty\template\demo.html" */ ?>
<?php
/*%%SmartyHeaderCode:108845766b9a5daa8d9_28452068%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ea1c655108103f405ac2fe1c2701ec74b1da263' => 
    array (
      0 => 'E:\\121\\tpl20160617\\smarty\\template\\demo.html',
      1 => 1466349985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108845766b9a5daa8d9_28452068',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5766b9a5e69f76_40958151',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5766b9a5e69f76_40958151')) {
function content_5766b9a5e69f76_40958151 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_radios')) require_once 'E:\\121\\tpl20160617\\smarty\\smarty\\plugins\\function.html_radios.php';
if (!is_callable('smarty_function_html_select_date')) require_once 'E:\\121\\tpl20160617\\smarty\\smarty\\plugins\\function.html_select_date.php';
if (!is_callable('smarty_function_html_select_time')) require_once 'E:\\121\\tpl20160617\\smarty\\smarty\\plugins\\function.html_select_time.php';

$_smarty_tpl->properties['nocache_hash'] = '108845766b9a5daa8d9_28452068';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	
		smarty标签不会被解析
		{$ada}
	
<input type="radio" name="" value="">显示
	<?php echo smarty_function_html_radios(array('name'=>'','output'=>'','values'=>'','checked'=>'','separator'=>''),$_smarty_tpl);?>

	<?php echo smarty_function_html_radios(array('name'=>'','output'=>'','values'=>'','checked'=>'','separator'=>''),$_smarty_tpl);?>


	<?php echo smarty_function_html_select_date(array('start_year'=>"1900",'end_year'=>"2016"),$_smarty_tpl);?>


	<?php echo smarty_function_html_select_time(array(),$_smarty_tpl);?>


	<?php echo smarty_function_html_select_time(array('use_24_hours'=>true),$_smarty_tpl);?>

</body>
</html><?php }
}
?>