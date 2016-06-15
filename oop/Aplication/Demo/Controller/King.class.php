<?php
namespace Aplication\Demo\Controller;
use \Core\DB;
class King extends DB{
    public function say(){
       $res =  $this->query('ts_users');
       include './Aplication/Demo/View/King/a.php';
    }
}
/*
$k = new King;
$k->say();
?m=Demo&c=King&a=say;
*/