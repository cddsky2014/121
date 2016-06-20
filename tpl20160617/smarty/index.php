<?php
require './smarty/Autoloader.php';
Smarty_Autoloader::registerBC();
$smarty = new SmartyBC();

$smarty->template_dir = "./template"; 
$smarty->compile_dir = "./compile";
$smarty->cache_dir = "./cache";
//-------------------------------------

$smarty->assign('name','tom');//$name = 'tom';

$info = array(
	'name'=>'lili',
	'age'=>20,
	'sex'=>'girl',
	'addr'=>'南京'
);
$smarty->assign('info',$info);


$smarty->assign('info',array(1=>'江苏',2=>'安徽',3=>'江西'));


//$smarty->display('if.html');//include
//$smarty->display('for.html');//include
//$smarty->display('foreach.html');
//$smarty->display('include/home.html');
//$smarty->display('varfilter.html');

$smarty->display('plugin.html');