<?php
function __autoload($name){
    $path = explode('\\', $name);
    array_pop($path);
    $file = './'.implode('/', $path).'.class.php';
    is_file($file) or die($file.'-类文件不存在！');
    include $file;
}

use Lib\DB1\DB;
$db = new DB;
