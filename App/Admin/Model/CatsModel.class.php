<?php
namespace Admin\Model;
use Think\Model;
class CatsModel extends Model {
	
	//声明一个生成分级下拉列表的方法
	function formSelect($formName){
		
		//查询商品分类
		$cats=D('Cate');
		$goods=D('Goods');
	
		$allCats=$cats->field("id,pid,name,concat(path,id,',') as abspath")->order('abspath')->select();
		//dump($allCats);
		//<!--计算路径中-的个数-->
		
		//循环生成select标签的字符串 返回
		$selectStr='<select name="'.$formName.'">';

		foreach($allCats as &$cats){
			//计算分级等级
			$cats['level']=substr_count($cats['abspath'],'-');
			//添加分级缩进
			$cats['subfix']=str_repeat('&nbsp;|-',$cats['level']);
			//添加分级颜色
			if($cats['level']==1){
				
	$selectStr.='<option disabled  value="'.$cats['id'].'">'.$cats['subfix'].$cats['name'].'</option>';
 //             }elseif($cats['level']==2) {
				
	// $selectStr.='<option disabled value="'.$cats['id'].'">'.$cats['subfix'].$cats['catename'].'</option>';

			}else{
	$selectStr.='<option style="background:cyan" value="'.$cats['id'].'">'.$cats['subfix'].$cats['name'].'</option>';

			}	
			//生成select标签字符串
		}
		
		return $selectStr;
	}
}
