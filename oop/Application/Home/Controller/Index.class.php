<?php
namespace Application\Home\Controller;

use \Think\Controller;

class Index extends Controller{

	public function home(){
		$this->smarty->display('home.html');
	}

	public function regist(){
		$this->smarty->display('regist.html');
	}

	public function doRegist(){

		$this->verify->check(I('post.code')) or die('验证码输入错误');
		
		$data = array(
			'uname'=>I('post.uname'),	
			'pwd'=>md5(I('post.pwd')),
			'tel'=>I('post.tel')
		);
		M('ts_users')->add($data);

		header('location:?m=Home&c=Index&a=home');
	}

	public function verify(){
		$this->verify->fontSize=14;
		$this->verify->codeSet='12345';
		$this->verify->entry();
	}
	
}