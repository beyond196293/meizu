<?php
namespace Home\Model;
use Think\Model;
class NoticeModel extends Model {
	public function getAll(){
		$noticelist=$this->select();
		foreach($noticelist as $key=>$val){
            $noticelist[$key]['time']=date('Y-m-d H:i:s',$noticelist[$key]['time']);
           
		}
		
		return $noticelist;
	}
}
