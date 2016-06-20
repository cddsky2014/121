<?php /* Smarty version 3.1.27, created on 2016-06-20 01:58:27
         compiled from "E:\121\tpl20160617\smarty\template\foo.conf" */ ?>
<?php
/*%%SmartyHeaderCode:%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c0c6c797d5b1fa12d8a467fb7a0fddb92cfc3c0' => 
    array (
      0 => './foo.conf',
      1 => 1466387405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57674dc351fc61_80439564',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57674dc351fc61_80439564')) {
function content_57674dc351fc61_80439564 ($_smarty_tpl) {

Smarty_Internal_Extension_Config::loadConfigVars($_smarty_tpl, array (
  'sections' => 
  array (
  ),
  'vars' => 
  array (
    'host' => '127.0.0.1',
    'username' => 'root',
    'pwd' => '1234',
    'dbname' => 'thinkshop',
  ),
));
}
}
?>