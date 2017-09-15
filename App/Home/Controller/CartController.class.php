<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends CommonController {
	public function index(){
		$cart=D('Cart');
		$goods=$cart->where('uid='.$_SESSION['home']['id'])->select();
		//dump($goods);exit;
		if(empty($goods)){
			//dump($goods);exit;
			$this->redirect("Cart/index0");
		}else{
			$this->assign('list',$goods);
			$this->display();
		}
	}
	public function del(){
		//dump($_GET);exit;
		$id=$_GET['id'];
		//dump($_GET);exit;
		$cart=D('Cart');
		$res=$cart->delete($id);
		$this->redirect("Cart/index");
	}
	public function dell(){
		$id=$_GET['id'];
		$Cart=D('cart');
		$res=$Cart->delete($id);
			if ($res) {
				$this->ajaxReturn(1);
			}
	}

}
