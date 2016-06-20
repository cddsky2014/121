<?php
namespace Application\Home\Controller;

use \Think\Controller;

class Index extends Controller{

	public function showUsers(){
		
			

		$res = M('ts_users')->query();
		
		$this->smarty->assign('res',$res);

		$this->smarty->display('showUsers.html');
		
	}
	
	public function editUser(){
		$uid = I('get.uid');//$_GET['uid']
		$res = M('ts_users')->query('*',"uid='{$uid}'");

		$this->smarty->assign('res',$res);

		$this->smarty->display('editUser.html');
	}

	public function doEditUser(){
		//print_r(I('post.'));//$_POST
		
		$this->verify->check(I('post.code')) or die('验证码输入错误');

		$uid = I('get.uid');
 		$data = array(
			'uname'=>I('post.uname'),	
			'email'=>I('post.email'),	
			'tel'=>I('post.tel')
		);
		M('ts_users')->edit($data,"uid='{$uid}'");
		header('location:?m=Home&c=Index&a=showUsers');
	}


	public function verify(){
		$this->verify->length=3;
		$this->verify->fontSize=14;
		$this->verify->codeSet='012345';
		$this->verify->entry();
	}
}