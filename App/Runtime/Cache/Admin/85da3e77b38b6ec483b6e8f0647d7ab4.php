<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>  
    <link rel="stylesheet" href="/obj/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/obj/Public/Admin/css/admin.css">
    <script src="/obj/Public/Admin/js/jquery.js"></script>
    <script src="/obj/Public/Admin/js/pintuer.js"></script>  
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">  
  <a class="button border-yellow" href="<?php echo U('Admin/Column/column_add');?>"><span class="icon-plus-square-o"></span> 添加内容</a>
  </div> 
  <table class="table table-hover text-center">

    <tr>
      <th width="5%">ID</th>     
      <th>栏目名称</th>  
      <th>链接地址</th>     
      <th width="250">操作</th>
    </tr>
   <?php if(is_array($list)): foreach($list as $key=>$val): ?><tr>
      <td><?php echo ($val["id"]); ?></td>      
      <td><?php echo ($val["name"]); ?></td>  
      <td><?php echo ($val["link"]); ?></td>      
      <td>
      <div class="button-group">
      <a type="button" class="button border-main" href="<?php echo U('Admin/Column/column_edit?id='.$val['id']);?>"><span class="icon-edit"></span>修改</a>
       <a class="button border-red" href="<?php echo U('Admin/Column/del?id='.$val['id']);?>" onclick="return del(17)"><span class="icon-trash-o"></span> 删除</a>
      </div>
      </td>
    </tr><?php endforeach; endif; ?>
    <tr>
        <td colspan="8">
        <div class="pagelist"> 
          <?php echo ($page); ?>
        </div></td>
      </tr>
  </table>
</div>
<script>
function del(id){
	if(confirm("您确定要删除吗?")){
		 return true;
	}else{
     return false;
  }
}
</script>

</body></html>