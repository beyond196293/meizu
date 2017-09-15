<?php
namespace Admin\Controller;
//use Think\Controller;
class GoodsController extends CommonController {
  

    public function index(){

		$goods=D('Goods');
        $where=[];
        //商品名条件搜索
        if(!empty($_GET['name'])){
          	$where['goods.name'] = array('LIKE',"%{$_GET['name']}%");
        }
        $total=$goods->where($where)->count();
        //实例化分页类
        $page=new \Think\Page($total,5);
        $page->setConfig('prev',上一页);
        $page->setConfig('next',下一页);
        $goodslist = $goods->field('img.name iname,goods.name,goods.id gid,c.name cname,goods.price,goods.stoke,goods.status,goods.is_hot,goods.is_new,goods.sale_num,goods.describe')->table('mz_goods goods,mz_image img,mz_cate c')->where($where)->where('goods.id=img.goods_id and img.is_face=1 and c.id=goods.cate_id')->limit($page->firstRow.','.$page->listRows)->getAll();
        //dump($goodslist);exit;
        $pageButton=$page->show();
        $this->assign('goodslist',$goodslist);
        $this->assign('pageButton',$pageButton);
        $this->display('list');
    }
    	//输出模板
	public function add(){
		$cats=D('Cate');
		$cateSelect=$cats->formSelect('cate_id');
		//dump($cateSelect);
		//分配到模板
		$this->assign('cateSelect',$cateSelect);
		$this->display();
	}
    //添加商品
	public function insert(){
		foreach($_POST as $value){
            if($value==''){
                $this->error('添加失败',U('goods/add'));
            }
        }
        $color=implode(',',$_POST['color']);
        $net=implode(',',$_POST['net']);
        $memory=implode(',',$_POST['memory']);
        $_POST['color']=$color;
        $_POST['net']=$net;
        $_POST['memory']=$memory;
        //dump($_POST);exit;
        $upload=new \Think\Upload();// 实例化上传类  
        $upload->maxSize=3145728 ;// 设置附件上传大小   
        $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
        $upload->savePath=''; 
        $upload->rootPath='./Public/Uploads/'; // 设置附件上传目录    // 上传文件   
        $info=$upload->upload();          
        if(!$info){// 上传错误提示错误信息     
           $this->error($upload->getError());    
        }
        //拼装添加商品数据
        $pram=[];
		$pram['name']=$info['img']['savepath'].$info['img']['savename'];
		//dump($pram);exit;
        $_POST['addtime']=time(); 
        //实例化商品表
        $goods=D('goods');
        $ff=$goods->create();
        if($ff){
            $res= $goods->add($_POST);
            if($res){
                $pram['goods_id']=$res;
                $image=D('image');
                $image->create();
                $res=$image->add($pram);
                if($res){
                    $this->success('添加成功',U('goods/index'));
                }else{
                    $this->error('添加失败',U('goods/add'));
                }       
            }else{
                $this->error('添加失败',U('goods/add'));
            }
        }else{
            $this->error($goods->getError());
        }
        
	}
    //编辑商品回填
	public function edit(){
		$cats=D('Cate');
		$cateSelect=$cats->formSelect('cate_id');
		//dump($cateSelect);
		//分配到模板
		$this->assign('cateSelect',$cateSelect);
		//dump($_GET);
		$goods=D('Goods');
		$arr=[];
		$arr['id']=$_GET['gid'];
		$goodsinfo=$goods->where($arr)->find();
		$this->assign('info',$goodsinfo);
		$this->display('edit');
	}
    //修改商品
	public function update(){
		//dump($_POST);
		$info=D('Goods');
		$res=$info->save($_POST);
		if($res){
			$this->success('修改成功',U('Goods/index'));
		}else{
			$this->error('修改失败');
		}
	}
    //删除商品
	public function del(){
		$del=D('Goods');
        $img=D('Image');
        $id=$_GET['id'];
        $name=$img->where('goods_id='.$id)->select();
        foreach($name as $val){
            @unlink('./Public/Uploads/'.$val['name']);
            $img->where('id='.$val['id'])->delete();
        }
		$res=$del->where($_GET)->delete();
		if($res){
			$this->ajaxReturn(1);
		}else{
			$this->ajaxReturn(0);
		}
	}
	public function hidd(){
		$cate=$_GET['cate'];
		$cat=D('Cate');
		$res1=$cat->where('pid=1 and id='.$cate)->select();
		$res2=$cat->where($cate.'=1')->select();
		$res=$res1 || $res2;
		$this->ajaxReturn($res);
	}
    //上架 新品 热销 的是否
	public function show(){
            $id=$_GET['id'];
            $aa=$_GET['aa'];
            $goods=D('Goods');
            $info=$goods->find($id);
            $info[$aa]="".abs($info[$aa]-1);
            $goods->save($info);
            if($info[$aa]==0){
            	$this->ajaxReturn('否');
            }else{
            	$this->ajaxReturn('是');
            }                   
        }
}