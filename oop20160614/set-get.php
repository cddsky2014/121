<?php
/*
- ` __get()` 读取不可访问属性的值时，`__get()` 会被调用。 
- `__set()` 在给不可访问属性赋值时，`__set()` 会被调用。
  */

class Person{
    private $name = 'tom';
    private $age = 18;
    private $sex = 0;//男
    private $money = 1000;
    public function getAge(){
        echo $this->age;
    }
    public function __get($n){
        if($n=='sex'){
            $arr = array('女','男');
            echo $arr[$this->$n];//$arr[1]
        }elseif($n=='money'){
            echo $this->$n.'万元';           
        }else{
           echo $this->$n; 
        }
    }    
    public function __set($name,$value){
        $this->$name=$value;        
    }
}
$p = new Person;
echo $p->sex;
$p->money=10000000000;
echo $p->money;