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
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => true,
  'version' => '3.1.27',
  'unifunc' => 'content_5768e6f3aa0c32_00971872',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5768e6f3aa0c32_00971872')) {
function content_5768e6f3aa0c32_00971872 ($_smarty_tpl) {

$_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_insert_getTime')) require_once 'E:\\121\\oop\\Think\\Ext\\Smarty\\plugins\\insert.getTime.php';
?>时间1：1466492659
<hr>
时间2：<?php echo smarty_insert_getTime(array (
),$_smarty_tpl);
}
}
?>