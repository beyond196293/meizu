<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        if(IS_POST){
        $verify = new \Think\Verify();   
		$result =$verify->check($_POST['yzm']);
	    if(!$result)$this->error('验证码错误');
        $name=$_POST['name'];
        $map['name']=$name;
        $map['role']=0;
        $user=D('User');
        $res=$user->where($map)->find();
        if($res){  
        if($res['lock']==1)$this->error('您已被封号s9再见');
        if($res['password']=md5($_POST['password'])){
        unset($res['password']);
        $_SESSION['home']=$res;
        $this->redirect('Index/index');
        }else{
        $this->error('用户名或密码不正确!!');
        }
        }else{
        $this->error('用户名或密码不正确!');
        }
        }
        $this->display();
    }
    public function signup(){
        if(IS_POST){
            //dump($_POST);
            $user=D('User');
            $inte=D('Integral');
            $name['name']=$_POST['name'];
            $result=$user->where($name)->select();
            if($result){
                $this->error('用户名已存在');
            }else{
            $_POST['password']=md5($_POST['password']);
            $_POST['role']=0;
            $_POST['lock']=0;
            $_POST['date']=time();
            //dump($_POST);
            $res=$user->add($_POST);
            if($res){
                $data['uid']=$res;
                $inte->add($data);
                $this->success('注册成功',U('index'));
            }else{
                $this->error('注册失败');
            }
          }  
        }
        $this->display();
    }
    	public function yzm(){
		$config = array(  
		  	'fontSize'    =>    30,    // 验证码字体大小 
		   	'length'      =>    3,     // 验证码位数    
		   	'useNoise'    =>    false, // 关闭验证码杂点
		  );
		$Verify = new \Think\Verify($config);
		$Verify->entry();

        }
    public function outlogin(){
        unset($_SESSION['home']);
        $this->success('退出成功',U('Index/index'));
    }
}

