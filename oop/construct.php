<?php
class A{
    public $x=1;
    public $y=2;    
    public function __construct() {
       echo $this->x;//$a->x;
       echo $this->y;
    }
    public function add(){
           echo "add";       
    } 
}
$a = new A;
//$a->__construct();