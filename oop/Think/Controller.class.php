<?php
namespace Think;
use Think\Model\DB;
class Controller{
    public function __construct() {
        $this->db = new DB;
    }
    public function __call($name,$arguments){
        echo '类'.__CLASS__.'中'.$name.'方法不存在！';
    }
}
