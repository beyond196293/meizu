<?php
namespace Admin\Model;
use Think\Model;
class ImageModel extends Model{
	public function getAll(){
		$image=$this->select();
		$is_face=array('','封面');
		foreach($image as $key=>$val){
			$image[$key]['is_face']=$is_face[$val['is_face']];
		}
		return $image;
	}
}