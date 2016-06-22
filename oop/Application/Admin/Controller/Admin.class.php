<?php

namespace Application\Admin\Controller;

use Think\Controller;

class Admin extends Controller{

	public function __construct(){
		parent::__construct();		
		$a = I('get.a');//获取调用的方法
		//如果方法不需要通过登陆验证，就直接调用执行
		if(in_array($a,array('doLogin','verify'))){
			$this->$a();
			exit();
		}

		if(!isset($_SESSION['admin'])){
			$this->login();
			exit();
		}		
	}
	public function index(){
		$this->smarty->display('index.html');	
	}
	
	public function login(){
		$this->smarty->display('login.html');	
	}	
	public function doLogin(){		
		$this->verify->check(I('post.code')) or die('验证码错误');
		$uname = I('post.uname');
		$pwd = md5(I('post.pwd'));
		$res = M('ts_admins')->query('*',"uname='{$uname}' && pwd='{$pwd}'");
		if(count($res)==1){
			$_SESSION['admin']=$uname;
			$_SESSION['admin_id']=$res[0]['uid'];
			header('location:?m=Admin&c=Admin&a=index');
		}else{
			die('登陆失败');
		}
			
	}

	public function verify(){
	
		$this->verify->codeSet='123456789';
		$this->verify->entry();
	}


	public function logout(){
		session_destroy();
		header('location:?m=Admin&c=Admin&a=login');
	}
}