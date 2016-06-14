<?php
/*
    serialize(对象|数组) 将一个对象转换为字符串
    unserialize()将一个序列化的字符串转换为对象
 */
class A{
    public $name='tom';
    
    public function get(){
        echo $this->name;        
    }
}
$a = new A;
var_dump($a);
echo '<hr>';
$stra = serialize($a);
$c = unserialize($stra);
echo $c->name;
var_dump($c);
echo '<hr>';
$arr = array(1,3,4,5);//$arr = [1,2,3,4,5];
echo serialize($arr);






