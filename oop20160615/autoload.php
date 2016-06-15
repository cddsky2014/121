<?php
function __autoload($name){
    $path_arr = explode('\\',$name);
    array_pop($path_arr);
    $path = implode('/', $path_arr); 
    include "./{$path}.class.php";
}

new lib\DB1\abc;