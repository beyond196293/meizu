<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/obj/Public/Admin/css/pintuer.css">
<link rel="stylesheet" href="/obj/Public/Admin/css/admin.css">
<script src="/obj/Public/Admin/js/jquery.js"></script>
<script src="/obj/Public/Admin/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">  
  <button type="hidden" class="button border-yellow" onclick="window.location.href='<?php echo U('Admin/Advert/advert_add');?>'"><span class="icon-plus-square-o"></span> 添加内容</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">编号</th>
      <th width="30%">图片</th>
      <th width="10%">商品名称</th>
      <th width="5%">位置</th>
      <th width="30%">操作</th>
    </tr>
    <?php if(is_array($list)): foreach($list as $key=>$val): ?><tr>
      <td><?php echo ($val["id"]); ?></td>     
      <td><img src="/obj/Public/Uploads/<?php echo ($val["image"]); ?>" alt="" width="80" height="50" /></td>     
      <td><?php echo ($val["goodsid"]); ?></td>
      <td>中间<?php echo ($val["id"]); ?></td>
      <td><div class="button-group">
      <a class="button border-main" href="<?php echo U('Admin/Advert/advert_alter?id='.$val['id']);?>"><span class="icon-edit"></span> 修改</a>
      <!--<a class="button border-red" href="<?php echo U('Admin/Advert/del?id='.$val['id']);?>" onclick="return del(1,2)"><span class="icon-trash-o"></span> 删除</a>-->
      </div></td>
    </tr><?php endforeach; endif; ?>
    <?php if(is_array($lis)): foreach($lis as $key=>$asd): ?><tr>
      <td><?php echo ($asd["id"]); ?></td>     
      <td><img src="/obj/Public/Uploads/<?php echo ($asd["image"]); ?>" alt="" width="80" height="50" /></td>     
      <td><?php echo ($asd["gid"]); ?></td>
      <td>左侧<?php echo ($asd["id"]); ?></td>
      <td><div class="button-group">
      <a class="button border-main" href="<?php echo U('Admin/Advert/advert_alter',array('id'=>$asd['id'],'i'=>1));?>"><span class="icon-edit"></span> 修改</a>
      <!--<a class="button border-red" href="<?php echo U('Admin/Advert/del?id='.$val['id']);?>" onclick="return del(1,2)"><span class="icon-trash-o"></span> 删除</a>-->
      </div></td>
    </tr><?php endforeach; endif; ?>
    <tr>
      <td colspan="8">
        <div class="pagelist"> 
          <?php echo ($page); ?>
        </div></td>
      </tr>
  </table>
</div>
<script type="text/javascript">
function del(id,mid){
	if(confirm("您确定要删除吗?")){
	     return true;
	}else{
       return false;
  }
}

</script>
</body></html>