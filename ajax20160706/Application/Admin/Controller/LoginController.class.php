<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function __construct(){
		parent::__construct();
		if(session('?admin')){
			$this->error('非法访问',U('Index/index'));
		}
	}
	public function Login(){
        $this->display();
    }
}