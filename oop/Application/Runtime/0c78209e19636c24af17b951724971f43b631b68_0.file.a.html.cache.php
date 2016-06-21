<?php /* Smarty version 3.1.27, created on 2016-06-21 07:04:19
         compiled from "E:\121\oop\Application\Demo\View\Index\a.html" */ ?>
<?php
/*%%SmartyHeaderCode:318785768e6f3a1bf15_52901316%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c78209e19636c24af17b951724971f43b631b68' => 
    array (
      0 => 'E:\\121\\oop\\Application\\Demo\\View\\Index\\a.html',
      1 => 1466492654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318785768e6f3a1bf15_52901316',
  'has_nocache_code' => true,
  'version' => '3.1.27',
  'unifunc' => 'content_5768e6f3a89525_95356278',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5768e6f3a89525_95356278')) {
function content_5768e6f3a89525_95356278 ($_smarty_tpl) {
echo '/*%%SmartyNocache:318785768e6f3a1bf15_52901316%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_insert_getTime\')) require_once \'E:\\\\121\\\\oop\\\\Think\\\\Ext\\\\Smarty\\\\plugins\\\\insert.getTime.php\';
?>/*/%%SmartyNocache:318785768e6f3a1bf15_52901316%%*/';

$_smarty_tpl->properties['nocache_hash'] = '318785768e6f3a1bf15_52901316';
?>
时间1：<?php echo time();?>

<hr>
时间2：<?php echo Smarty_Internal_Nocache_Insert::compile ('smarty_insert_getTime',array(), $_smarty_tpl, 'null');

}
}
?>