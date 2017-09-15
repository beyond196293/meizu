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
<form method="post" action="">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 用户列表</strong></div>
    <table class="table table-hover text-center">
		<tr>
			<th width="120">编号</th>
			<th>用户名</th>       
			<th>权限</th>
			<th>锁定</th>
			<th>注册时间</th>
			<th width="25%">操作</th>
		</tr> 
		<?php if(!empty($list)): if(is_array($list)): foreach($list as $key=>$val): ?><tr>
			<td><?php echo ($val["id"]); ?></td>
			<td><a href="<?php echo U('Admin/User/detail',array('id'=>$val['id']));?>"><?php echo ($val["name"]); ?></a></td>
			<td><?php echo ($val["role"]); ?></td>
			<td><?php echo ($val["lock"]); ?></td>
			<td><?php echo ($val["date"]); ?></td>
			<td><div class="button-group"> <a class="button border-main" href="<?php echo U('Admin/User/edit',array('id'=>$val['id']));?>"><span class="icon-edit"></span> 修改</a></td>
		</tr><?php endforeach; endif; ?>
		<?php else: ?>
		<tr>
			<td colspan="6">查无数据</td>
		</tr><?php endif; ?>
		<tr>
			<td colspan="8"><div class="pagelist"><?php echo ($pageButton); ?></div></td>
		</tr>
    </table>
  </div>
</form>
<script type="text/javascript">

function del(id){
	if(confirm("您确定要删除吗?")){
		return true;
	}else{
		return false;
	}
}

$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

function DelSelect(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false; 		
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

</script>
</body></html>