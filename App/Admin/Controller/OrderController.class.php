<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends Controller {
  

    	public function Order(){
			if(!empty($_GET['order']))$map['order_num']=$_GET['order'];
			$order=D('Order');
			$total=$order->count();
			$page=new \Think\Page($total,5);
			$page->setConfig('prev',上一页);
			$page->setConfig('next',下一页);
			$goods=$order->where($map)->limit($page->firstRow.','.$page->listRows)->getAll();
			//dump($goods);exit;
			$pageButton=$page->show();
			$this->assign('pageButton',$pageButton);
			$this->assign('goods',$goods);
			$this->display('Order');

		}
		public function detail(){
			$oid=$_GET['id'];
			$uid=$_GET['uid'];
			$detail=D('Detail');
			//$a['orderid']=$oid;
			$info=$detail->field('adds.name,adds.address,adds.tel,de.id,de.goodsname,de.num,de.price,de.version')->table('mz_detail de,mz_address adds')->where('adds.mask=1 AND de.orderid='.$oid.' AND adds.uid='.$uid)->select();
			//$info=$detail->where('orderid=1')->select();
			//dump($info);exit;
			//echo $detail->getLastSql();exit;
			
			$this->ajaxReturn($info);
		}
		public function go(){
			$id=$_GET['id'];
			//dump($id);
			$order=D('Order');
			$order->status=2;
			$info=$order->where('id='.$id)->save();
			if($info){
				$this->redirect('Order/order');
			}else{
				$this->error('发货失败，请重新发货');
			}
		}
}
