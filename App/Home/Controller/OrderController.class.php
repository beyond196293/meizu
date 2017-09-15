<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends CommonController {
    public function index(){
		$order=D('Order');
		$image=D('Goods');
		$detail=D('Detail');
		$info=$order->field('de.id,ord.status,ord.uid,ord.total,ord.time,ord.order_num,de.goodsname,de.price,de.num')->table('mz_order ord,mz_detail de')->where('de.orderid=ord.id AND ord.uid='.$_SESSION['home']['id'])->order('ord.time desc')->getAll();
		foreach($info as $key=>$val){
			//$img[]=$val['goodsname'];
			$imgs[]=$image->field('im.name,goods.id')->table('mz_image im,mz_goods goods')->where("im.goods_id=goods.id AND goods.name="."'".$val['goodsname']."'")->find();
			//echo $image->getLastSql();
			//dump($imgs);
			foreach($imgs as $a=>$b){
					$info[$key]['image']=$b['name'];
					$info[$key]['gid']=$b['id'];
				}
		}
		//dump($info);
		$info0=$order->field('de.id,ord.status,ord.uid,ord.total,ord.time,ord.order_num,de.goodsname,de.price,de.num')->table('mz_order ord,mz_detail de')->where('de.orderid=ord.id AND ord.status=0 AND ord.uid='.$_SESSION['home']['id'])->order('ord.time desc')->getAll();
		foreach($info0 as $key=>$val){
			//$img[]=$val['goodsname'];
			$imgs[]=$image->field('im.name,goods.id')->table('mz_image im,mz_goods goods')->where("im.goods_id=goods.id AND goods.name="."'".$val['goodsname']."'")->find();
			//echo $image->getLastSql();
			//dump($imgs);exit;
			foreach($imgs as $a=>$b){
					$info0[$key]['image']=$b['name'];
					$info[$key]['gid']=$b['id'];
				}
		}
		$info1=$order->field('de.id,ord.status,ord.uid,ord.total,ord.time,ord.order_num,de.goodsname,de.price,de.num')->table('mz_order ord,mz_detail de')->where('de.orderid=ord.id AND ord.status=1 AND ord.uid='.$_SESSION['home']['id'])->order('ord.time desc')->getAll();
		foreach($info1 as $key=>$val){
			//$img[]=$val['goodsname'];
			$imgs[]=$image->field('im.name,goods.id')->table('mz_image im,mz_goods goods')->where("im.goods_id=goods.id AND goods.name="."'".$val['goodsname']."'")->find();
			//echo $image->getLastSql();
			//dump($imgs);exit;
			foreach($imgs as $a=>$b){
					$info1[$key]['image']=$b['name'];
					$info[$key]['gid']=$b['id'];
				}
		}
		$info2=$order->field('de.id,ord.status,ord.uid,ord.total,ord.time,ord.order_num,de.goodsname,de.price,de.num')->table('mz_order ord,mz_detail de')->where('de.orderid=ord.id AND ord.status=2 AND ord.uid='.$_SESSION['home']['id'])->order('ord.time desc')->getAll();
		foreach($info2 as $key=>$val){
			//$img[]=$val['goodsname'];
			$imgs[]=$image->field('im.name,goods.id')->table('mz_image im,mz_goods goods')->where("im.goods_id=goods.id AND goods.name="."'".$val['goodsname']."'")->find();
			//echo $image->getLastSql();
			//dump($imgs);exit;
			foreach($imgs as $a=>$b){
					$info2[$key]['image']=$b['name'];
					$info[$key]['gid']=$b['id'];
				}
		}
		//dump($info2);
		$this->assign('info',$info);
		$this->assign('info0',$info0);
		$this->assign('info1',$info1);
		$this->assign('info2',$info2);
        $this->display();
    }
	//订单详情
	public function detail(){
		//dump($_SESSION['home']);
		$a=$_GET;
		//dump($a['status']);
		$goods=D('Goods');
		$info=$goods->field('im.name')->table('mz_image im,mz_goods goods')->where("im.goods_id=goods.id AND im.is_face=1 AND goods.name="."'".$a['goodsname']."'")->getAll($a);
		//$info['length']=$length;
		//dump($a['status']);
		//dump($info);
		$address=D('Address');
		$infos=$address->where('uid='.$_SESSION['home']['id'])->find();
		//dump($infos);
		$this->assign('address',$infos);
		$this->assign('a',$info);
		$this->display('detail');
	}
	//支付页面的遍历
	public function pay(){
		//dump($_GET);
		if($_GET['discount_id']){
			//=$_GET['discount_id'];
			$discount=D('Discount');
			$del=$discount->where('id='.$_GET['discount_id'])->delete();
			//dump($_SESSION);
		}
		if($_GET['buyback_id']){
			//$_SESSION['buyback']=$_GET['buyback'];
			$buyback=D('Buyback');
			$del=$buyback->where('id='.$_GET['buyback_id'])->delete();
			//dump($_SESSION['buyback']);
		}
		$order=D('Order');
		$detail_id=$_GET['detail'];
		//判断是直接支付的还是从订单列表中支付的
		if($_GET['order_id']){
			$order_id=$_GET['order_id'];
			$info1=$order->where('id='.$order_id)->find();
		}else{
			$order_num=$_GET['order_num'];
			$info1=$order->where('order_num='.$order_num)->find();
		}
		//dump($info1);
		$detail=D('Detail');
		$info2=$detail->where('id='.$detail_id)->find();
		$address=D('Address');
		$info3=$address->where('mask=1 AND uid='.$_SESSION['home']['id'])->find();
		$this->assign('info3',$info3);
		$this->assign('info1',$info1);
		$this->assign('info2',$info2);
		$this->display('pay');
	}
	public function car_pay(){
		if($_GET['discount_id']){
			//=$_GET['discount_id'];
			$discount=D('Discount');
			$del=$discount->where('id='.$_GET['discount_id'])->delete();
			//dump($_SESSION);
		}
		if($_GET['buyback_id']){
			//$_SESSION['buyback']=$_GET['buyback'];
			$buyback=D('Buyback');
			$del=$buyback->where('id='.$_GET['buyback_id'])->delete();
			//dump($_SESSION['buyback']);
		}
		$order=D('Order');
		$detail_id=$_GET['detail'];
		dump($_GET['order_id']);
		//判断是直接支付的还是从订单列表中支付的
		if($_GET['order_id']){
			$order_id=$_GET['order_id'];
			$info1=$order->where('id='.$order_id)->find();
		}else{
			$order_num=$_GET['order_num'];
			$info1=$order->where('order_num='.$order_num)->find();
		}
		//dump($info1);
		$detail=D('Detail');
		$info2=$detail->where('orderid='.$_GET['order_id'])->select();
		//echo $detail->getLastSql();exit;
		//dump($info2);
		$address=D('Address');
		$info3=$address->where('mask=1 AND uid='.$_SESSION['home']['id'])->find();
		$this->assign('info3',$info3);
		$this->assign('info1',$info1);
		$this->assign('info2',$info2);
		$this->display('car_pay');
	}
	//支付成功将订单状态改为已付款
	public function status(){
		$id=$_GET['order_id'];
		$order=D('Order');
		$detail=D('Deatil');
		$integral=D('Integral');
		//dump($_SESSION['car']);exit;
		$order->status=1;
		$info=$order->where('id='.$id)->save();
		if($info){
			$a=$integral->where('uid='.$_SESSION['home']['id'])->find();
			//dump($info['total']);
			$b=$order->where('id='.$id)->find();
			//dump($a['integral']+$b['total']);exit;
			$integral->integral=$a['integral']+$b['total'];
			$new=$integral->where('uid='.$_SESSION['home']['id'])->save();
			//exit;
			$this->success('支付成功',U('Order/index'));
		}else{
			//$infos=$detail->where('orderid='.$id)->select();
			$this->error('支付出现错误啦！');
		}
	}
	//取消订单
	public function outorder(){
		$order_num=$_GET['order_num'];
		$order=D('Order');
		$detail=D('Detail');
		$order->status='4';
		$info=$order->where('order_num='.$order_num)->save();
		//订单取消成功，销量减一，库存加一
		if($info){
			$order_id=$order->where('order_num='.$order_num)->find();
			$infos=$detail->where('orderid='.$order_id['id'])->select();
			//echo $detail->getLastSql();
			//dump($infos);exit;
			foreach($infos as $key=>$val){
				$a[$key]['goodsname']=$val['goodsname'];
				$a[$key]['num']=$val['num'];
			}
			//dump($a);exit;
			foreach($a as $key=>$val){
				$goods=D('Goods');
				$list=$goods->where('name='."'".$val['goodsname']."'")->find();
				//$b[]=$list;
				//dump($b);
				$c['sale_num']=$list['sale_num']-$val['num'];
				$c['stoke']=$list['stoke']+$val['num'];
				if($c['sale_num']<0)$c['sale_num']=0;
				if($c['stoke']<0)$c['stoke']=0;
				//dump($c);
				$goods->where('name='."'".$val['goodsname']."'")->save($c);
			}
			//exit;
		}
		$this->redirect('index');
	}
	public function go(){
		$order_num=$_GET['order_num'];
		
		$order=D('Order');
		$order->status='3';
		$info=$order->where('order_num='.$order_num)->save();
		$this->redirect('index');
	}
}
