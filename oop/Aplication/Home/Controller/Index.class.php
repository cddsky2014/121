<?php
namespace Aplication\Home\Controller;
class Index{
    public function Login(){
        echo __FUNCTION__;
    }
    public function home(){
        $title = '首页2';
        include './Aplication/Home/View/Index/home.php';
    }    
    public function addUser(){
        echo '用户名<input>';
    }
}
