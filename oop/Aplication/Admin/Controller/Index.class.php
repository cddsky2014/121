<?php
namespace Aplication\Admin\Controller;
use \Core\DB;
class Index extends DB{
    public function users(){
        $res = $this->query('ts_users');
        include('./Aplication/Admin/View/Index/users.php');
    }    
    public function delete(){
        $uid = $_GET['uid'];
        $this->del('ts_users',"uid='{$uid}'");        
        header('location:./home.php?m=Admin&c=index&a=users');  
    }
}
