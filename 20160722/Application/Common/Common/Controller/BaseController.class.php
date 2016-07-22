<?php
namespace Common\Controller;
use Think\Controller;
class BaseController extends Controller {
	public function __initialize(){
		echo "heloooo";
	}
    public function index(){
        echo 'olcms的项目公用控制器';
        $this->display();
    }
}