<?php


class A {
    public $x = 1;
    public $y = 2;

    public function add($a, $b) {
        return $a + $b;
    }
}
//类外调用属性和方法
$a = new A;
echo $a->add($a->x,$a->y);
