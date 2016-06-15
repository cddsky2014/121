<?php
namespace NS1{    
    class A{
        public $name = 'NS1 A';
    }
}
namespace NS2{
    class A{
        public $name = 'NS2 A';        
    }
    $a = new A;
    echo $a->name;    
    $a1 = new \NS1\A;    
    echo $a1->name;
}

