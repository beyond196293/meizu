<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/mz_shop/Public/Admin/css/pintuer.css">
<link rel="stylesheet" href="/mz_shop/Public/Admin/css/admin.css">
<script src="/mz_shop/Public/Admin/js/jquery.js"></script>
<script src="/mz_shop/Public/Admin/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">编号</th>
      <th width="20%">图片</th>
      <th width="10%">名称</th>
      <th width="30%">链接地址</th>
      <th width="5%">排序</th>
      <th width="25%">操作</th>
    </tr>
    <?php if(is_array($list)): foreach($list as $key=>$val): ?><tr>
      <td><?php echo ($val["id"]); ?></td>     
      <td><img src="/mz_shop/Public/Uploads/<?php echo ($val["image"]); ?>" alt="" width="100" height="50" /></td>   
      <td><?php echo ($val["name"]); ?></td>
      <td><?php echo ($val["bewrite"]); ?></td>
      <td><?php echo ($val["sort"]); ?></td>
      <td><div class="button-group">
      <a class="button border-main" href="<?php echo U('Admin/Adv/adv_alter?id='.$val['id']);?>"><span class="icon-edit"></span> 修改</a>
      </div></td>
    </tr><?php endforeach; endif; ?>
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
  $('img').hover(function(){
    $(this).animate({width:"150px"},200)
  },function(){
    $(this).animate({width:"100px"},200)
  })
</script>
</body></html>