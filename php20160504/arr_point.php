<?php

$arr = array(1,2,3,4,6);

/*
echo next($arr);
echo next($arr);
echo next($arr);
echo next($arr);
echo next($arr);//6
var_dump(next($arr));//移空就返回false
*/
echo "<hr>";
echo end($arr);
echo prev($arr);
echo prev($arr);
echo prev($arr);
echo prev($arr);
//echo prev($arr);//移空就返回false
var_dump(current($arr));



?>