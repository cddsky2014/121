<?php
namespace Think;
use Think\Ext\GD\Image;
use Think\Ext\GD\Verify;
use Think\Ext\Upload;
use Think\Ext\Valid;
class Controller{
    protected $smarty=null;
    protected $image=null;
    protected $verify=null;
    protected $upload=null;
	protected $valid=null;
    public function __construct() {   
        $this->smarty=Smarty(); 
        $this->image = new Image;
        $this->verify = new Verify;
		$this->upload = new Upload;
		$this->valid = new Valid;
    }
    public function __call($name,$arguments){
        echo '类'.__CLASS__.'中'.$name.'方法不存在！';
    }
}
