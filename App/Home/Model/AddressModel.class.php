<?php
namespace Home\Model;
use Think\Model;
class AddressModel extends Model {
	public function getAll(){
		$address=$this->select();
		$mask=array('备份地址','默认地址');
		foreach($address as $key=>$val){
           $address[$key]['mask']=$mask[$val['mask']];
		}
		
		return $address;
	}
}
