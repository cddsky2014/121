<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function __construct(){
		parent::__construct();

		if(!session('?admin')){
			$this->error('非法访问',U('Login/login'));
		}
	}
	public function index(){		
        $this->display();
    }
}