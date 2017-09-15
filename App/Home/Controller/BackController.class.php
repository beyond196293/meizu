<?php
namespace Home\Controller;
use Think\Controller;
class BackController extends CommonController {
    public function index(){
    	$back=D('Back');
    	$info=$back->where('type=0')->select();
    	//dump($info);
    	$this->assign('info',$info);
        $this->display();
    }
    public function assecc(){
    	$id=$_GET['id'];
    	$back=D('Back');
    	$info=$back->find($id);
    	//dump($info);
    	$this->assign('info',$info);
        $this->display();
    }
    public function add(){
    	//dump($_POST);
    	$id=$_POST['id'];
    	$back=D('Back');
    	$info=$back->find($id);
    	$price=$info['money'];
    	unset($_POST['id']);
    	$money=($price+100)*pow(0.9,array_sum($_POST));
    	$money=floor($money);
    	//dump($money);
    	$this->assign('info',$info);
    	$this->assign('money',$money);
    	$this->display('asseccs');
    }
    public function buy(){
    	$id=$_SESSION['home']['id'];
    	$money=$_GET['id'];
    	//dump($money);
    	//dump($id);
    	$buyback=D('Buyback');
    	$data['uid']=$id;
    	$data['sale_money']=$money;
    	$data['code']=time().mt_rand(100,999);
    	$buyback->add($data);
    	$this->ajaxReturn($data['code']);
    }
	public function sel(){
		$code=$_GET['code'];
		$buyback=D('Buyback');
		$a['code']=$code;
		$info=$buyback->where($a)->find();
		$a=$info['sale_money'].','.$info['id'];
		$this->ajaxReturn($a);
	}
}
