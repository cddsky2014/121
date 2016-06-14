<?php
/*
    __toString() echo 一个对象的时候执行
 */

class A{
    public function __toString() {
        echo '我是一个对象';
        exit;
    }
}
$a = new A;
echo $a;
