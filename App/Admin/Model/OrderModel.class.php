<?php
namespace Admin\Model;
use Think\Model;
class OrderModel extends Model {
		public function getAll(){
			$goods=$this->select();
            $status=array('待付款','待发货','已发货','交易完成','订单取消');
			foreach($goods as $key=>$val){
				$goods[$key]['status']=$status[$val['status']]; 
			}
			return $goods;
		}
}
