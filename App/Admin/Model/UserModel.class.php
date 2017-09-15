<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
	protected $_validate =array(
		array('name','require','用户名不能为空'), 
		array('name','','帐号名称已经存在！',0,'unique',1),
		array('repassword','password','确认密码不正确',1,'confirm',3),
		);
		protected $_auto = array(
			array('password',md5,3,'function'),
		); 
	public function getAll(){
		$userlist=$this->select();
		$role=array('普通用户','管理员','超级管理员');
		$lock=array('未锁定','锁定');
		foreach($userlist as $key=>$val){
			$userlist[$key]['role']=$role[$val['role']];
			$userlist[$key]['lock']=$lock[$val['lock']];
			$userlist[$key]['date']=date('Y-m-d H:i:s',$userlist[$key]['date']);
		}
		
		return $userlist;
	}
}