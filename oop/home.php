<?php
//自动加载类文件
function __autoload($name){    
    $file = './'.str_replace('\\', '/', $name).'.class.php';
    is_file($file) or die($file.'文件不存在！');
    include $file;
}
class Think{
    public function run(){
        $m = $_GET['m'];
        $c = $_GET['c'];
        $a = $_GET['a'];
        $classname = '\\Aplication\\'.$m.'\\Controller\\'.$c;
        $obj = new $classname;
        $obj->$a();
    }
}
$thik = new Think;
$thik->run();