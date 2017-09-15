<?php
namespace Admin\Model;
use Think\Model;
class CateModel extends Model {
	//声明一个生成分级下拉列表的方法
	function formSelect($formName){		
		//查询商品分类
		$cats=D('Cate');
		$allCats=$cats->field("id,pid,name,concat(path,id,',') as abspath")->order('abspath')->select();
		//<!--计算路径中-的个数-->		
		//循环生成select标签的字符串 返回
		$selectStr='<select name="'.$formName.'" class="input w50" onblur="check(this)" data-validate="required:请选择分类">';
		foreach($allCats as $cats){
			//计算分级等级
			$cats['level']=substr_count($cats['abspath'],',');
			//添加分级缩进
			$cats['subfix']=str_repeat('&nbsp;--',$cats['level']);
			//添加分级颜色
			if($cats['level']==2){				
				$selectStr.='<option value="'.$cats['id'].'">'.$cats['subfix'].$cats['name'].'</option>';
			}else{
				$selectStr.='<option style="background:#ccc" value="'.$cats['id'].'">'.$cats['subfix'].$cats['name'].'</option>';
			}				
		}		
		$selectStr.='</select>';
		return $selectStr;
	}


	public function getAll(){
			$catelist = $this->select();
            $role = array('隐藏','显示');
            //dump($catelist);
            foreach($catelist as $key=>$val){
                //dump($val);
                $catelist[ $key ]['display'] = $role[ $val['display'] ]; 
                //dump($catelist);

			}
			return $catelist;

    }
}
