<?php

/*
- ob_start():   开启输出流
- ob_get_contents():得到输出流中缓冲的内容
- ob_clean:关闭输出流
*/
echo 1;
echo 2;
ob_start();
echo 3;
echo 4;
echo 5;
$str = ob_get_contents();
ob_clean();
echo 6;
echo 7;
echo $str;


?>