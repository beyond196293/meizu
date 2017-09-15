<?php
namespace Home\Controller;
use Think\Controller;
class ConfimorderController extends CommonController {
    public function index(){
    	if($_POST==null){
			$this->error('出错啦');exit;
		}
		$_SESSION['nowbuy']=array_merge($_SESSION['nature'],$_POST);
		unset($_SESSION['nature']);
		if($_SESSION['nowbuy']==null){
			$this->error('出错啦');exit;
		}
		$address=D('Address');
		$id=$_SESSION['home']['id'];
		$info=$address->where('mask=1 AND uid='.$id)->find();
		if($info){
			//dump($info);
		//遍历出用户的优惠券
		$discount=D('Discount');
		$money=$discount->where('uid='.$_SESSION['home']['id'])->getAll();
		//dump($money);
		$this->assign('discount',$money);
		$this->assign('a',$_SESSION['nowbuy']);
		$this->assign('info',$info);
		$this->display();
		}else{
			$this->error('请添加默认地址',U('/Home/Address/index'));
		}
    }
	//添加到确认订单
	public function affirm(){
		//dump($_GET);
		//dump($_GET['total']);exit;
		if($_GET==null){
			$this->error('出错啦');exit;
		}
		//向订单表插入数据
		$a['uid']=$_SESSION['home']['id'];
		$a['status']=0;
		$a['total']=$_GET['total'];
		$a['time']=time();
		$a['order_num']=$a['time'].mt_rand(100,999);
		$order=D('Order');
		$info=$order->add($a);
		//echo $order->getLastSql();
	
		if($info){
			//向订单详情表插入数据
			$detail=D('Detail');
			$b['orderid']=$info;
			$b['num']=$_GET['num'];
			$b['price']=$_GET['total'];
			$b['goodsname']=$_GET['gname'];
			$b['version']=$_GET['net']." ".$_GET['memory']." ".$_GET['colors'];
			$order_num=$detail->add($b);
			if($order_num){
				$goods=D('Goods');
				$infos=$goods->where('name='."'".$b['goodsname']."'")->find();
				//echo $goods->getLastSql();exit;
				//dump($infos);exit;
				$c['sale_num']=$infos['sale_num']+$b['num'];
				$c['stoke']=$infos['stoke']-$b['num'];
				if($c['sale_num']<0)$c['sale_num']=0;
				if($c['stoke']<0)$c['stoke']=0;
				$goods->where('name='."'".$b['goodsname']."'")->save($c);
				//如果使用优惠券
				if($_GET['discount']){
					$this->redirect('Order/pay',array('order_id'=>$info,'detail'=>$order_num,'discount_id'=>$_GET['discount']));
				//如果使用回购券
				}elseif($_GET['buyback']){
					$this->redirect('Order/pay',array('order_id'=>$info,'detail'=>$order_num,'buyback_id'=>$_GET['buyback']));
				//什么优惠都没有使用
				}else{
					$this->redirect('Order/pay',array('order_id'=>$info,'detail'=>$order_num));
				}
				
				//echo $goods->getLastSql();
			}else{
				$order->where('id='.$info)->delete();
				$this->error('订单提交出错啦!!');
			}
			//echo $detail->getLastSql();
			
			//$this->success('购买成功',U('Order/index'));
		}else{
			$this->error('订单提交出错啦!');
		}
		
	}
	public function car(){
		//dump($_SESSION['car']);
		//dump($total);
		foreach($_SESSION['car'] as $val){
			$cart=D('Cart');
			$info=$cart->where('id='.$val)->find();
			$infos[]=$info;
		}
		//dump($infos);exit;
		$total=$_GET['total'];
		$order=D('Order');
		$a['uid']=$_SESSION['home']['id'];
		$a['status']=0;
		$a['total']=$total;
		$a['time']=time();
		$a['order_num']=$a['time'].mt_rand(100,999);
		$list=$order->add($a);
		if($list){
			//dump($list);
			//向订单详情表里添加数据
			foreach($infos as $key=>$val){
				$detail=D('Detail');
				$b['goodsname']=$val['gname'];
				$b['price']=$val['price'];
				$b['num']=$val['num'];
				$b['orderid']=$list;
				$b['version']=$val['net']." ".$val['memory']." ".$val['colors'];
				$detail_id=$detail->add($b);
				$c[]=$detail_id;
				
			}
			//dump($c);exit;
			foreach($c as $val){
				$goods=D('Goods');
				$detail=D('Detail');
				$list1=$detail->where('id='.$val)->find();
				$d[]=$list1;
			}
			//dump($d);exit;
			foreach($d as $key=>$val){
				$e[$key]['goodsname']=$val['goodsname'];
				$e[$key]['num']=$val['num'];
			}
			//dump($e);
			foreach($e as $key=>$val){
				$goods=D('Goods');
				$f=$goods->where('name='."'".$val['goodsname']."'")->find();
				//dump($f);
				$g['sale_num']=$f['sale_num']+$val['num'];
				$g['stoke']=$f['stoke']-$val['num'];
				if($g['sale_num']<0)$g['sale_num']=0;
				if($g['stoke']<0)$g['stoke']=0;
				$goods->where('name='."'".$val['goodsname']."'")->save($g);
			}
			//exit;
			if($c){
					
					$cart=D('cart');
					foreach($_SESSION['car'] as $val){
						
						$a=$cart->where('id='.$val)->delete();
						//unset($_SESSION['car']);
					}
					if($_GET['discount']){
							$this->redirect('Order/car_pay',array('order_id'=>$list,'discount_id'=>$_GET['discount']));
						//如果使用回购券
					}elseif($_GET['buyback']){
						$this->redirect('Order/car_pay',array('order_id'=>$list,'buyback_id'=>$_GET['buyback']));
						//什么优惠都没有使用
					}else{
						$this->redirect('Order/car_pay',array('order_id'=>$list));
					}
					
				}else{
					$order->where('id='.$list)->delete();
					$this->error('订单提交出错啦!!');
				}
		}else{
			$this->error('订单提交出错啦!');
		}
		
	}
}
