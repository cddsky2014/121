<?php

namespace Aplication\Homework\Controller;

use Core\DB;

class Users extends DB {

    public function ulist() {
        $res = $this->query('ts_users');
        include './Aplication/Homework/View/Users/users.php';
    }

    public function addUser() {
        include './Aplication/Homework/View/Users/addUser.php';
    }
    public function doAddUser() {
        $uname = I('post.uname'); //$uname = $_POST['uname'];
        $email = I('post.email');
        $tel = I('post.tel');
        $data = array(
            'uname' => $uname,
            'email' => $email,
            'tel' => $tel
        );
        $this->add('ts_users', $data);
        header('location:./home.php?m=Homework&c=Users&a=ulist');
    }
    public function editUser() {        
        $uid = I('get.uid');
        $res = $this->query('ts_users','*',"uid='{$uid}'");
        
        include './Aplication/Homework/View/Users/editUser.php';
    }    
    public function doEditUser() {
        $uid = I('get.uid');
        $uname = I('post.uname'); //$uname = $_POST['uname'];
        $email = I('post.email');
        $tel = I('post.tel');
        $data = array(
            'uname' => $uname,
            'email' => $email,
            'tel' => $tel
        );
        $this->edit('ts_users', $data,"uid='{$uid}'");
        header('location:./home.php?m=Homework&c=Users&a=ulist');
    }
    


}

//?m=Homework&c=Users&a=ulist