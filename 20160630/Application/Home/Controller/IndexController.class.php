<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

	public function login(){

    }

	public function doLogin(){

    }
	public function regist(){

		$this->display();

    }

	public function doRegist(){

		dump(I('post.'));

    }

	public function verify(){
		$verify = new \Think\Verify();
		$verify->entry();
	}
}