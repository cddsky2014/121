<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function login(){
		if($this->isLogin()){
			$this->redirect('Index/index');		
		}
		
		$this->display();
    }

	public function logout(){
		session('[destroy]');
		$this->success('注销成功',U('Index/login'));
    }

	public function doLogin(){
		if(!IS_POST){
			$this->error('非法登陆');
		}

		$uname = I('post.uname');
		$pwd = md5(I('post.pwd'));
		
		$admin = M('admin');
		$res = $admin->where(array('uname'=>$uname,'pwd'=>$pwd))->find();

		if($res){
			$lip = get_client_ip();
			$ltime = time();
			$admin->where(array('uid'=>$res['uid']))->data(array('ltime'=>$ltime,'lip'=>$lip))->save();

			session('uname',$res['uname']);
			session('uid',$res['uid']);

			$this->success('登陆成功',U('index'));
		}else{
			$this->error('登陆失败',U('login'));
		}

    }

	public function index(){
		if(!$this->isLogin()){
			$this->error('请先登陆',U('Index/login'));
		}
	    $this->display();
    }
	
	public function isLogin($key='uname'){

		return session("?{$key}");
	
	}

}