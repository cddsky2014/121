<?php
namespace Controller\Login;
use Lib\DB\DB;
class Login extends DB{
    public function index(){        
        print_r($this->query('ts_users'));
        echo 'login';
    }    
    public function login(){
        echo '登陆';
    }
      public function login2(){
        echo '登陆2';
    }
}