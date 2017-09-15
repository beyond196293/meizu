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
			<th width="10%">ID</th>
			<th>网站名称</th>       
			<th>网站logo</th>
			<th>关键字</th>
			<th>网站版权</th>
			<th>网站备案号</th>
			<th>网站许可证</th>
			<th>网站状态</th>
			<th width="10%">操作</th>
		</tr>
		<tr>
			<td><?php echo ($info["id"]); ?></td>
			<td><?php echo ($info["name"]); ?></td>
			<td><img src="/obj<?php echo ($info['logo']); ?>"/></td>
			<td><?php echo ($info["keywords"]); ?></td>
			<td><?php echo ($info["copyright"]); ?></td>
			<td><?php echo ($info["number"]); ?></td>
			<td><?php echo ($info["allow"]); ?></td>
			<td>
				
			<?php if(($info['switch']) == "0"): ?>开启<?php endif; ?>
			<?php if(($info['switch']) == "1"): ?>关闭<?php endif; ?>
			</td>
			<td><div class="button-group"> <a class="button border-main" href="<?php echo U('Config/edit');?>"><span class="icon-edit"></span> 修改</a></td>
			
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