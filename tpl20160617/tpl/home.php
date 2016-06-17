<?php
/*
require("./smarty/Autoloader.php");
Smarty_Autoloader::registerBC();
	$smarty = new SmartyBC();
$smarty->template_dir = "./template"; 
$smarty->compile_dir = "./comp";
$smarty->cache_dir = "./cache";
$smarty->display('home.html');
*/
require('guestbook/setup.php');$smarty = new Smarty_GuestBook();$smarty->assign('name','Ned');$smarty->display('index.tpl');