<?php
namespace Home\Model;
use Think\Model;
class GoodsModel extends Model {
	public function getAll($a){
		$info=$this->find();
		//dump($a);
		switch($a['status']){
			case '待付款':
				$length='0%';
				break;
			case '待发货':
				$length='27%';
				break;
			case '待收货':
				$length='56%';
				break;
			case '交易完成':
				$length='84%';
				break;
			case '订单取消':
				$length='0';
				break;
		}
		//dump($a);
		$a['image']=$info['name'];
		$a['length']=$length;
		//dump($a);
		return $a;
	}
}