<?php
namespace Application\Home\Controller;
use Think\Controller;
class Index extends Controller {   
    public function add(){
        var_dump($this->db->query('ts_users'));
    }
}
