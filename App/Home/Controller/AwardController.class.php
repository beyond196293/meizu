<?php
namespace Home\Controller;
use Think\Controller;
class AwardController extends CommonController {
	public function index(){
		$integral=D('Integral');
		$data['uid']=$_SESSION['home']['id'];
		$inte=$integral->where($data)->find();
		$this->assign('inte',$inte['integral']);
		$this->display();
	}
	public function edit(){
		$integral=D('Integral');
		$discount=D('Discount');
		$money=$_GET['money'];
		$data['uid']=$_SESSION['home']['id'];
		$inte=$integral->where($data)->find();
		$data['discount']=$money;
		$where['uid']=$_SESSION['home']['id'];
		if($money!=0){
			$resi=$integral->where($where)->setDec('integral',100);
			$resd=$discount->add($data);
		}
		$this->ajaxReturn($inte['integral']);
	}
	public function judge(){
		$integral=D('Integral');
		$_GET['uid']=$_SESSION['home']['id'];
		$inte=$integral->field('integral')->where($_GET)->find();
		if($inte['integral']<1000){
			$this->ajaxReturn('false');
		}else{
			$this->ajaxReturn('true');
		}
	}    
}
