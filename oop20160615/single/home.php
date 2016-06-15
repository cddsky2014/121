<?php
//自动加载类
function __autoload($name){
    $path = explode('\\', $name);//分割类名
    array_pop($path);
    //通过类名获取类文件路径
    $file = './'.implode('/', $path).'.class.php';
    //判断类文件是否存在，不存在就报错
    is_file($file) or die($file.'-类文件不存在！');
    include $file;//引入类文件
}

$classname = $_GET['m'].'\\'.$_GET['c'].'\\'.$_GET['c'];
$action = $_GET['a'];//login
$home = new $classname;
$home->$action();//login();

