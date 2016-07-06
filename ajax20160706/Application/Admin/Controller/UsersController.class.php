<?php
namespace Admin\Controller;
use Think\Controller;
class UsersController extends Controller {
	public function users(){
		$admins = M('admins');
		$res = $admins->select();

		$this->assign('users',$res);

		$this->display();
	}

	public function delUser(){
		$aid = I('get.aid');
		$admins = M('admins');
		$admins->delete($aid);

	}

	public function getUser(){
		if(IS_AJAX==false){			
			$this->error('非法请求');
		}
		$aid = I('get.aid');
		$admins = M('admins');
		$res = $admins->find($aid);
		//echo json_encode($res);
		$this->ajaxReturn($res);
	}

	public function doEdit(){
		
		$admins = D('admins');
		if($admins->create(I('post.'))){
			$admins->save();
		}	

		echo "修改成功";

	}


}