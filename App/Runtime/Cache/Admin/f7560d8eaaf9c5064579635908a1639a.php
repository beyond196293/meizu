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
		<link rel="stylesheet" type="text/css" href="/obj/Public/Admin/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="/obj/Public/Admin/css/style_common.css" />
        <link rel="stylesheet" type="text/css" href="/obj/Public/Admin/css/style10.css" />
		<script src="/obj/Public/Admin/js/jquery.js"></script>
		<script src="/obj/Public/Admin/js/pintuer.js"></script>
	</head>
<body>
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 图片列表</strong>
	    <div class="padding border-bottom">
		<form method="post" action="<?php echo U('Image/add?gid='.$gid);?>" id="listform" enctype="multipart/form-data">
	        <ul class="search" style="padding-left:10px;">
	        	<li>添加预览图片：</li>      
	        	<input type="file" class="border-main" name="file"/>
	        	<button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
	        	        	<!-- <button class="button bg-main icon-check-square-o" type="submit"> 提交</button> -->
	        </ul>
	  	</form>
	    </div>
	    <div class="container">
		    <?php if(is_array($imglist)): foreach($imglist as $key=>$val): ?><div class="view view-tenth ff">
		            <img src="/obj/Public/Uploads/<?php echo ($val["name"]); ?>" height="200px"/>
		            <div class="mask">
		                <h2>魅族 meizu</h2>
		                <br/><h3><?php echo ($val["is_face"]); ?></h3>
		                <a href="javascript:;" class="info" onclick="face(<?php echo ($val['id']); ?>,<?php echo ($gid); ?>)">设为封面</a>
		                <a class="info" id="del<?php echo ($val['id']); ?>" onclick="del(<?php echo ($val['id']); ?>)">删除</a>
		            </div>
		        </div><?php endforeach; endif; ?>
	    </div>
		<div style="width:640px;margin:10px auto 20px auto; padding:0 0 0 380px;overflow:hidden"></div>    
	    <div class="padding border-bottom">
		<form method="post" action="<?php echo U('Image/addinfo?gid='.$gid);?>" id="listform" enctype="multipart/form-data">
	      	<ul class="search" style="padding-left:10px;">
	      		<li>添加详情图片：</li>      
	      		<input type="file" class="border-main" name="img"/>
	      		<button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
	      	</ul>
	    </form>
	    </div>
	    <div class="container">
	    	<?php if(is_array($infolist)): foreach($infolist as $key=>$infoval): ?><div class="view view-tenth">
		            <img src="/obj/Public/Uploads/300/<?php echo ($infoval['name']); ?>"/>
		            <div class="mask">
		                <h2>Hover Style #10</h2>
		                <br><br><br>
		                <a href="javascript:;" class="info" id="info<?php echo ($infoval['id']); ?>" onclick="dinfo(<?php echo ($infoval['id']); ?>)">删除</a>
		            </div>
		    	</div><?php endforeach; endif; ?>
			<div style="width:640px;margin:10px auto 20px auto; padding:0 0 0 380px;overflow:hidden"></div>
    	</div>
  	</div>

<script type="text/javascript">

//搜索
function changesearch(){	
		
}

//删除预览图
function del(id){
	if($("#del"+id).prev().prev().html()){
		alert('封面禁止删除');
	}else if(confirm("您确定要删除吗?")){
			$.get("<?php echo U('Admin/Image/del');?>",{'id':id},function(result){
				if(result){
					$("#del"+id).parent().parent().remove();
				}else{
					alert('删除失败');
				}
			});
		}
}
//删除信息图
function dinfo(id){
	if(confirm("您确定要删除吗?")){
		$.get("<?php echo U('Admin/Image/dinfo');?>",{'id':id},function(result){
			if(result){
				$("#info"+id).parent().parent().remove();
			}else{
				alert('删除失败');
			}
		});
	}
}
//设置封面
function face(id,gid){
	if($("#del"+id).prev().prev().html()=='封面'){
		alert("已经是封面啦");
	}else{
		$.get("<?php echo U('Admin/Image/face');?>",{'id':id,'gid':gid},function(result){
			if(result){
				$(".ff").each(function(){
					$(this).children().next().children().eq(1).next().html('');
				});
				$("#del"+id).prev().prev().html('封面');
			}
		});
	}
}
//全选
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

//批量删除
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
		$("#listform").submit();		
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}
</script>
</body>
</html>