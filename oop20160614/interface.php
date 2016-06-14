<?php
/*
abstract class Guoxiaotian{
    //public $revenge = '完颜洪烈 段天德';
    abstract public function revenge();
    abstract public function revenge1();
    abstract public function revenge2();
}
*/
interface Guoxiaotian{
    public function revenge();
    public function revenge1();
    public function revenge2(); 
}

interface Guoxiaotian2{
    public function revenge3();
    public function revenge4();
    public function revenge5(); 
}
//class Guojing extends Guoxiaotian{}
class Guojing implements Guoxiaotian,Guoxiaotian2{
    public function revenge(){
        echo 'kill 完颜洪烈 段天德';
    }
    public function revenge1(){}
    public function revenge2(){}    
    public function revenge3(){}
    public function revenge4(){}
    public function revenge5(){}
}