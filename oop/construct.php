<?php
class A{
    public $x=1;
    public $y=2;
    public function add(){
           echo "add";
    }
    public function test(){        
        $this->add();
    }   
    public function __construct($a,$b) {
        echo $a+$b; 
    }
    public function __destruct() {
        echo __FUNCTION__;
    }
}
$a = new A(1,2);
//$a->__construct();
//$a->add();
//$a->test();