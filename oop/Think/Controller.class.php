<?php
namespace Think;
use Think\Ext\GD\Image;
use Think\Ext\GD\Verify;
class Controller{
    protected $smarty=null;
    protected $image=null;
    protected $verify=null;
    public function __construct() {   
        $this->smarty=Smarty(); 
        $this->image = new Image;
        $this->verify = new Verify;
    }
    public function __call($name,$arguments){
        echo '类'.__CLASS__.'中'.$name.'方法不存在！';
    }
}
