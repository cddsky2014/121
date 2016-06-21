<?php
namespace Application\Home\Controller;
use Think\Controller;

class Home extends Controller{
	
	public function index(){
		$info = array(
			'name'=>'tom',	
			'age'=>'23',	
			'sex'=>'boy',	
			'addr'=>'USA',	
		);
		$this->smarty->assign('info',$info);


		$this->smarty->display('modify.html');
	}

	public function regist(){
		$this->smarty->display('regist.html');
	}

	public function doRegist(){
		
		$this->verify->check(I('post.code')) or die('验证码填写错误');

		$data = array(
			'uname'=>I('post.uname'),	
			'pwd'=>md5(I('post.pwd')),	
			'email'=>I('post.email')	
		);

		M('ts_users')->add($data);
		
		header('location:?m=Home&c=Home&a=index');
		
	}
	public function verify(){
	
		$this->verify->codeSet='123456789';
		$this->verify->entry();
	}

	public function login(){
	
		$this->smarty->display('login.html');
	}

	public function doLogin(){
		$this->verify->check(I('post.code')) or die('验证码填写错误');

		$uname = I('post.uname');
		$pwd = md5(I('post.pwd'));

		$res = M('ts_users')->query('*',"uname='{$uname}' && pwd='{$pwd}'");

		if(count($res)==1){
			$_SESSION['uname']=$uname;
			$_SESSION['uid']=$res[0]['uid'];
			header('location:?m=Home&c=Home&a=index');
		}else{
			echo '登陆失败';
		}
	}

	public function logout(){
		session_destroy();
		header('location:?m=Home&c=Home&a=index');
	}

}