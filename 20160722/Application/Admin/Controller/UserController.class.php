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

	} 

	public function doUserDel(){
		
	} 

	public function userMod(){
	
	} 
	public function doUuserMod(){
		
	} 


}