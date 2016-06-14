<?php

/*
    - `this` 通过对象访问类成员 public private protacted
    - `self` 类内访问类成员 const static
    - `parent` 子类访问父类类成员 const static
    - `类名` 访问类常量和静态成员 const static
 */

class A{    
    const SEX='girl';
    static $sex = 'girl';
    public $name = 'lucy';    
    public function get(){
        echo $this->name;
        echo self::SEX;
        echo self::$sex;
    }    
}
class B extends A{    
     public function __construct(){
         parent::SEX;
         parent::$sex;
    }   
}

