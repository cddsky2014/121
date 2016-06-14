<?php
/*
` __sleep()`序列化`serialize()`的时候执行
` __wakeup()`反序列化`unserialize()`的时候执行
 */
class A{
    public function __sleep() {
        echo '序列化';
        exit;
    }
    public function __wakeup() {
        echo '反序列化';
        exit;
    }
}
$a = new A;
$str = serialize($a);
unserialize($str);
