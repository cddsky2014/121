<?php
namespace Admin\Controller;
//use Think\Controller;
use Admin\Controller\BaseController;
class UserController extends BaseController {
	public  function _initialize(){	//_initialize		
		//$base = new BaseController;
		if(!$this->isLogin()){
			$this->error('请先登陆',U('Index/Login'));
		}	
	}
	public function userAdd(){
		$this->display();
	} 
	public function doUserAdd(){
		M('admin')->add(array(
			'uname'=>'lucy',	
			'pwd'=>md5('abc'),	
			'ltime'=>time(),	
			'lip'=>'127.0.0.1',	
		
		));
	} 

	public function doUserDel(){
		
	} 

	public function userMod(){
	
	} 
	public function doUuserMod(){
		
	} 
	
	public function userList(){
		$admin = M('admin');
		$p = I('get.p',1);
		$pagesize = 4;
		$res = $admin->page("{$p},{$pagesize}")->select();
		$this->assign('admins',$res);
		$this->display();
	}
	

	public function showUser(){
		$pagenums = ceil(M('admin')->count()/4);
		$this->assign('pagenums',$pagenums);
		$this->display();
	
	} 

//http://127.0.0.1/index.php/Admin/User/showUser/p/2
}