<?php
namespace Home\Model;
use Think\Model;
class OrderModel extends Model {
	public function getAll(){
		$list=$this->select();
		$status=array('待付款','待发货','待收货','交易完成','订单取消');
		foreach($list as $key=>$val){
      
					$list[$key]['status']=$status[$val['status']];
			
           
		}
		
		return $list;
	}
}
