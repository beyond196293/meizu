<?php
namespace Home\Model;
use Think\Model;
class DiscountModel extends Model {
	public function getAll(){
		$info=$this->select();
		foreach($info as $key=>$val){
			$sel.="<option value='{$key}' aa={$val['id']}>{$val['discount']}</option>";
		}
		return $sel;
	}
}
