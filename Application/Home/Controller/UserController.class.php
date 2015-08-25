<?php
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller
{ //Home模块，User控制器。
    public function showLogin() //登录界面
    {
		if(session("id")){
            //已登录
            $this->redirect("Main/showMain");
        }
		$m['title']= 'LMS - 用户登陆';
        $m['action'] = U('User/doLogin');
        $this->assign($m);
        $this->display(); //模板渲染输出
    }
	public function doLogin() //登录操作
    {
        if (I('post.username') && I('post.password')) { //判断数据完整
            $user = M("User");
            $user->getByUsername(I('post.username'));
            if (I('post.password') == $user->password) {
                session('username', $user->username);
                session('id', $user->id);
                $user->lastlogintime = time();
                $user->lastloginip = get_client_ip();
                $user->save();
                if(session("nologurl")){
                    $this->success('登陆成功! 现在带您回到登陆前页面!', U('Main/'.session("nologurl")));
                    session("nologurl",null);
                }else{
                    $this->success('登陆成功!', U('Main/showMain'));
                }
            } else {
                $this->error("密码错误!");
            }
        } else {
            $this->error("输入不完整");
        }
    }

    public function doLogout() //登出操作
    { //登出操作
        session('id', null);
        $this->success("您已成功登出系统", U('User/showLogin'));
    }
	public function doReg() //注册操作
    {
        $rules=array(
            array('username','require','用户名未填写！'),
            array('password','require','密码未填写！'),
            array('username','3,10','用户名至少3个字符！',0,'length'),
            array('password','6,16','密码长度请控制在6-16位！',0,'length'),
            array('password2','password','两次输入的密码不一致！',0,'confirm'),
            array('number','','您输入的用户名已被注册！',0,'unique',1),
        );
        $user=M("User");
        if(!$user->validate($rules)->field('username,password,password2')->create()){ 
            $this->error($user->getError());
        }
        if($user->add()){
            $this->success('注册完毕!请登录!', U('User/showLogin'));
        }

      
		
    }
	public function showReg(){
			$m['title']="LMS - 账号注册";	
			$m['action'] = U('User/doReg');
			$this-> assign($m);			
			$this->display();
			}


}