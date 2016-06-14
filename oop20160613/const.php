<?php

//define('SEX', 'boy');
class A{
    const SEX = 'boy';     
    public $name='tom';
    public function test(){
        echo $this->name;        
        echo self::SEX;  //A::SEX;      
    }
}
$a = new A;
$a->test();
//echo $a->name;
//echo $a->SEX;
//echo A::SEX;




