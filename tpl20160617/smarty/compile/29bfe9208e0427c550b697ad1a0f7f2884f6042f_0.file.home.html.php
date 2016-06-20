<?php /* Smarty version 3.1.27, created on 2016-06-17 08:29:12
         compiled from "E:\121\tpl20160617\smarty\template\include\home.html" */ ?>
<?php
/*%%SmartyHeaderCode:270545763b4d84903d1_91804642%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29bfe9208e0427c550b697ad1a0f7f2884f6042f' => 
    array (
      0 => 'E:\\121\\tpl20160617\\smarty\\template\\include\\home.html',
      1 => 1466151933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270545763b4d84903d1_91804642',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5763b4d8511263_96010419',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5763b4d8511263_96010419')) {
function content_5763b4d8511263_96010419 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '270545763b4d84903d1_91804642';
?>

<?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div>显示内容</div>
<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>