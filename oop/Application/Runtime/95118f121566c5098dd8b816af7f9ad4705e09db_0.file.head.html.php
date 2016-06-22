<?php /* Smarty version 3.1.27, created on 2016-06-22 01:57:22
         compiled from "E:\121\oop\Application\Admin\View\head.html" */ ?>
<?php
/*%%SmartyHeaderCode:87705769f082910ea0_61884366%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95118f121566c5098dd8b816af7f9ad4705e09db' => 
    array (
      0 => 'E:\\121\\oop\\Application\\Admin\\View\\head.html',
      1 => 1466560640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87705769f082910ea0_61884366',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5769f0829a1741_29123227',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5769f0829a1741_29123227')) {
function content_5769f0829a1741_29123227 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '87705769f082910ea0_61884366';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>

<div class="container">

	<?php if (isset($_SESSION['admin'])) {?>
	欢迎：<?php echo $_SESSION['admin'];?>

	<a href="?m=Admin&c=Admin&a=logout">注销</a>
	<?php }
}
}
?>