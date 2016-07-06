<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

	public function login(){
		$this->display();
    }

	public function doLogin(){
		$verify = new \Think\Verify();
		if($verify->check(I('post.code'))==false){			
			//$this->error('验证码填写不正确');
		}
		$uname = I('post.uname');
		$pwd = md5(I('post.pwd'));
		$code = I('post.code');

		$users = M('users')->where(['uname'=>$uname,'pwd'=>$pwd])->find();

		if($users){
			session('uname',$uname);
			session('uid',$users['uid']);
			session('photo',$users['photo']);
			$this->success('登陆成功',U('Index/index'));
		}else{
			$this->error('登陆失败');
		}

    }
	public function regist(){
		if(session('?uname')){
			$this->error('非法访问',U('Index/index'));
		}
		$this->display();
    }

	public function doRegist(){
		$verify = new \Think\Verify();
		if($verify->check(I('post.code'))==false){			
			$this->error('验证码填写不正确');
		}
		//文件上传
		$upload = new \Think\Upload();// 实例化上传类录
		// 上传文件 
		$upload->rootPath = './Uploads/'; // 设置附件上传根目录

		$info = $upload->upload();
		if(!$info) {// 上传错误提示错误信息
			$this->error($upload->getError());
		}else{// 上传成功
			$photo = $info[0]['savepath'].$info[0]['savename'];
		}		
		$users = D('users');
		$data = I('post.');
		$data['photo']=$photo;
		$data['ip']=get_client_ip();

		if($res = $users->create($data)){
			$users->add();
			$this->success('注册成功');
			
		}else{
			$this->error($users->getError());
		}
		

    }

	public function verify(){
		$verify = new \Think\Verify();
		$verify->entry();
	}
}