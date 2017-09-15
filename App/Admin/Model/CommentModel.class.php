<?php
namespace Admin\Model;
use Think\Model;
class CommentModel extends Model {
		public function getTime(){
			$times=$this->select();
			foreach($times as $key=>$val){
				$times[$key]['time']=date('Y-m-d',$val['time']); 
			}
			return $times;
		}
}