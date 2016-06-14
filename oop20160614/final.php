<?php
//修饰类，类不能被继承
//修饰方法，方法不能被重写
class Guoxiaotian{
    public $country = '宋';
    public $enemy = '段天德、完颜洪烈';
    final public function kungfu(){
        echo '啸转天地';
    }
}
class Guojing extends Guojing{
    public function kungfu(){
        echo '123';
    }  
}
$gj = new Guojing;
