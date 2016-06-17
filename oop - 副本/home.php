<?php
session_start();
include('./Core/functions.php');
include('./Core/DB.class.php');
//自动加载类文件
function __autoload($name){    
    $file = './'.str_replace('\\', '/', $name).'.class.php';
    is_file($file) or die($file.'文件不存在！');
    include $file;
}
class Think{
    public function run(){        
        $m=I('get.m','Home');//$m = $_GET['m']; 获取模块       
        $c=I('get.c','Index');//$c = $_GET['c'];获取控制器
        $a=I('get.a','start'); //$a = $_GET['a'];获取要调用的方法
        $classname = '\\Aplication\\'.$m.'\\Controller\\'.$c;
        $obj = new $classname;
        $obj->$a();
    }
}
$thik = new Think;
$thik->run();