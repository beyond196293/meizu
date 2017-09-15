<?php
namespace Admin\Model;
use Think\Model;
class GoodsModel extends Model {
	protected $_validate =array( 
		array('name','','该商品已存在！',0,'unique',1),
		); 
	public function getAll(){
		$goods=$this->select();
        $hot=array('否','是');
        $new=array('否','是');
        $status=array('否','是');
		foreach($goods as $key=>$val){
			$goods[$key]['is_hot']=$hot[$val['is_hot']]; 
			$goods[$key]['is_new']=$new[$val['is_new']]; 
			$goods[$key]['status']=$status[$val['status']]; 
		}
		return $goods;
	}
}
