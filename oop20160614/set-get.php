<?php
class Person{
    public $name = 'tom';
    public $age = 18;
    private $sex = 0;//男
    public function getAge(){
        echo $this->age;
    }
    public function __get($n){
        if($n=='sex'){
            $arr = array('女','男');
            echo $arr[$this->$n];//$arr[1]
        }
    }
}
$p = new Person;
echo $p->sex;