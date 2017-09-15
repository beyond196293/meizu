<?php
namespace Admin\Controller;
use Think\Controller;
class AdvertController extends Controller {
	public function advert(){
	        $Column = D('imgleft'); // 实例化User对象
            $Advert = D('advert');
            $Col = $Column->count();// 查询满足要求的总记录数
            $Adv = $Advert->count();
            $count = $Col;
            $Page = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $Page->setConfig('prev',上一页);
            $Page->setConfig('next',下一页);
            $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $goods = $Column->limit($Page->firstRow.','.$Page->listRows)->select();
            $good = $Advert->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('list',$good);// 赋值数据集
            $this->assign('lis',$goods);
            $this->assign('page',$show);
            $this->display();
	}
	public function advert_add(){
            $goods=M('goods');
            $re=$goods->select();
            $this->assign('list',$re);
    		$upload=new \Think\Upload();// 实例化上传类  
            $upload->maxSize=3145728 ;// 设置附件上传大小   
            $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
            $upload->savePath=''; 
            $upload->rootPath='./Public/Uploads/'; // 设置附件上传目录    // 上传文件   
            $info=$upload->upload(); 
            if(!empty($_POST)){  
                $_POST['image']=$info['image']['savepath'].$info['image']['savename'];
                $temp=D('advert');  
                $res=$temp->add($_POST);  
                if($res){  
                    $this->redirect("Advert");
                }else{  
                    echo "添加失败";  
                }  
            }else{  
                echo "内容为空";  
                $this->display();  
            }
	}
	public function del(){
			$id=$_GET['id'];//从页面获取id
			$cate=D('advert');//您要删除的表
            $left=D('imgleft');
			$res=$cate->delete($id);
            $re=$left->delete($id);
			$this->redirect("Advert");
	}
        public function advert_alter(){
            if(IS_POST){
                if (!empty($_POST['i'])) {
                    $upload=new \Think\Upload();// 实例化上传类  
                    $upload->maxSize=3145728 ;// 设置附件上传大小   
                    $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
                    $upload->savePath=''; 
                    $upload->rootPath='./Public/Uploads/'; // 设置附件上传目录    // 上传文件  \
                    //dump($upload);exit;
                    $info=$upload->upload(); 
                    if(!$info){// 上传错误提示错误信息     
                        $info=$_POST['image2'];
                    }else{
                        @unlink('./Public/Uploads/'.$_POST['image2']);
                        $_POST['image']=$info['image']['savepath'].$info['image']['savename'];
                        }
                        $user=D('imgleft');
                        $id=$_POST['id'];
                        $info=$user->create();
                    if(!$info){
                        $this->error($user->getError());
                    }else{
                        $user->where('id='.$id)->save($info);
                        $this->redirect('advert');
                    }

                }else{
                    $upload=new \Think\Upload();// 实例化上传类  
                    $upload->maxSize=3145728 ;// 设置附件上传大小   
                    $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
                    $upload->savePath=''; 
                    $upload->rootPath='./Public/Uploads/'; // 设置附件上传目录    // 上传文件  \
                    $info=$upload->upload(); 
                    if(!$info){// 上传错误提示错误信息     
                       $info=$_POST['image2'];
                    }else{
                        @unlink('./Public/Uploads/'.$_POST['image2']);
                        $_POST['image']=$info['image']['savepath'].$info['image']['savename'];
                    }
                    $user=D('advert');
                    $id=$_POST['id'];
                    $info=$user->create();
                    if(!$info){
                        $this->error($user->getError());
                    }else{
                        $user->where('id='.$id)->save($info);
                        $this->redirect('advert');
                    }
            }
            }else{
                if (!empty($_GET['i'])) {
                    $goods=M('goods');
                    $i=$_GET['i'];
                    $res=$goods->select();
                    $this->assign('lis',$res);
                    $id=$_GET['id'];
                    $user=D('imgleft');
                    $userlist=$user->find($id);
                    $this->assign('list',$userlist);
                    $this->assign('i',$i);
                    $this->display('advert_alter0');
                }else{
                    $goods=M('goods');
                    $res=$goods->select();
                    $this->assign('lis',$res);
                    $id=$_GET['id'];
                    $user=D('advert');
                    $userlist=$user->find($id);
                    $this->assign('list',$userlist);
                    $this->display('advert_alter');
            }
        }
        }
}