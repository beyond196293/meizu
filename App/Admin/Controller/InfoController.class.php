<?php
namespace Admin\Controller;
use Think\Controller;
class InfoController extends Controller {
	public function info(){
		//统计销量
		$goods=D('Goods');
		$info=$goods->select();
		$a=0;
		foreach($info as $key=>$val){
			$a=$a+$val['sale_num'];
			//dump($val['sale_num']);
		}
		//dump($a);
		//统计普通用户
		$user=D('User');
		$users=$user->where('role=0')->count("id");
		//dump($users);
		//统计营业额
		$order=D('Order');
		$money=$order->where('status=3')->select();
		$b=0;
		foreach($money as $key=>$val){
			$b=$b+$val['total'];
		}
		//统计订单数量
		$d=$order->where('status!=4')->count();
		$this->assign('a',$a);
		$this->assign('b',$b);
		$this->assign('c',$users);
		$this->assign('d',$d);
		$this->display(); 
	}
    	
}