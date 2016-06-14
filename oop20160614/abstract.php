<?php
abstract class Guoxiaotian{
    //public $revenge = '完颜洪烈 段天德';
    abstract public function revenge();
    abstract public function revenge1();
    abstract public function revenge2();
}

class Guojing extends Guoxiaotian{
    public function revenge(){
        echo 'kill 完颜洪烈 段天德';
    }
    public function revenge1(){}
    public function revenge2(){}
}


