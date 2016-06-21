<?php
namespace Think;
use Think\Ext\GD\Image;
use Think\Ext\GD\Verify;
use Think\Ext\Upload;
class Controller{
    protected $smarty=null;
    protected $image=null;
    protected $verify=null;
    protected $upload=null;
    public function __construct() {   
        $this->smarty=Smarty(); 
        $this->image = new Image;
        $this->verify = new Verify;
		$this->upload = new Upload;
    }
    public function __call($name,$arguments){
        echo '类'.__CLASS__.'中'.$name.'方法不存在！';
    }
}
