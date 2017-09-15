<?php
namespace Admin\Controller;
use Think\Controller;
class ConfigController extends Controller {
        public function index(){
            $info=D('Config')->find();
            $this->assign('info',$info);
            $this->display();
        }
        public function edit(){
            $info=D('Config')->find();
            //dump($info);
            $this->assign('info',$info);
            $this->display();
        }
        public function def(){
            //先查询出网站的状态
			$res=D('Config')->find();
			$this->assign('res',$res);  
            $this->display();
        }
        public function update(){
			//获取数据直接对网站状态进行更改
			$res= M('config')->where('id=1')->save($_POST);
			if($res){
				$this->success('操作成功',U('Admin/config/index'));
			}else{
				$this->error('操作失败',U('Admin/config/index'));
			}
        }
            public function updates(){
            //获取id
            $id['id']=$_POST['id'];
            //接受上传图片操作
            $logo=$_FILES['logo'];
            //判断是否有图片上传0
            if($logo['error']==4){
                //图片没上传直接更改数据
                $res=M('config')->where($id)->save($_POST);
                if($res){
                    $this->success('更改成功',U('Admin/config/index'));
                }else {
                    $this->error('更改失败',U('Admin/config/edit'));
                }
            }else{
                $upload = new \Think\Upload();
                 // 设置附件上传大小
                $upload->maxSize   = 3145728 ;
                 // 设置附件上传类型   
                $upload->exts      = array('jpg', 'gif', 'png', 'jpeg');
                // 设置附件上传目录 以每天自己创建文件夹  
                $upload->rootPath  = './Public/Uploads/' ;
                // 上传文件     
                $info=$upload->upload();
                dump($info);
                //拼接图片的路径
                $_POST['logo'] = trim($upload->rootPath,'.').$info['logo']['savepath'].$info['logo']['savename'];
                dump($_POST['logo']);
                //创建模板
                $friend =D('Config');
                //先获取原图片路径信息
                $info = $friend->find($id);
                //原图片路径拼接 做删除原图片准备
                $path = '.'.$info['logo'];
                //进行更改操作
                $res=D('Config')->where($id)->save($_POST);
                //判断
                if($res){
                    unlink($path);
                    $this->success('修改成功',U('Admin/config/index'),1);
                }else{
                    $this->error('修改失败',U('Admin/config/edit'),1);
                }
            }

        }
}
