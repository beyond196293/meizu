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
<form method="get" action="<?php echo U('Admin/Goods/index');?>" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 商品列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main icon-plus-square-o" href="<?php echo U('Admin/Goods/add');?>"> 添加商品</a> </li>
        <li>搜索：</li>
        
        
        <li>
          <input type="text" placeholder="请输入商品名" name="name" class="input" style="width:250px; line-height:17px;display:inline-block" value="<?php echo ($_GET['name']); ?>"/>
          <button class="button bg-main icon-check-square-o" type="submit">搜索</button>
        </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="5%" style="text-align:left; padding-left:20px;">选择</th>
        
        <th>图片</th>
		<th width="8%">名称</th>
        <th>描述</th>
        <th width="5%">价格</th>
        <th width="5%">库存</th>
        <th width="8%">是否上架</th>
        <th width="8%">分类名称</th>
        <th width="8%">是否新品</th>
        <th width="8%">是否热销</th>
        <th width="270">操作</th>
      </tr>
      <volist name="list" id="vo">
    <?php if(is_array($goodslist)): foreach($goodslist as $key=>$val): ?><tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="<?php echo ($val["gid"]); ?>" /></td>
          <td width="10%"><img src="/obj/Public/Uploads/<?php echo ($val["iname"]); ?>" alt="" width="70" height="50" /></td>
		  <td><?php echo ($val["name"]); ?></td>
          <td><?php echo ($val["describe"]); ?></td>
          <td>￥<?php echo ($val["price"]); ?></td>
          <td><?php echo ($val["stoke"]); ?></td>
          <td><a id="status<?php echo ($val["gid"]); ?>" onclick="test(<?php echo ($val["gid"]); ?>,'status')" href="javascript:;"><?php echo ($val["status"]); ?></a></td>
          <td><?php echo ($val["cname"]); ?></td>
          <td><a id="is_new<?php echo ($val["gid"]); ?>" onclick="test(<?php echo ($val["gid"]); ?>,'is_new')" href="javascript:;"><?php echo ($val["is_new"]); ?></a></td>
          <td><a id="is_hot<?php echo ($val["gid"]); ?>" onclick="test(<?php echo ($val["gid"]); ?>,'is_hot')" href="javascript:;"><?php echo ($val["is_hot"]); ?></a></td>
          <td><div class="button-group"><a class="button border-main" href="<?php echo U('Admin/Goods/edit',array('gid'=>$val['gid']));?>"><span class="icon-edit"></span> 修改</a>
		  <a class="button border-main" href="<?php echo U('Admin/Image/index',array('gid'=>$val['gid']));?>"><span class="icon-edit"></span>图片管理</a>
		  <a class="button border-red" href="javascript:;" onclick="del(<?php echo ($val["gid"]); ?>)" id="dell<?php echo ($val["gid"]); ?>"><span class="icon-trash-o"></span> 删除</a></div></td>
        </tr><?php endforeach; endif; ?>
      <tr>
        <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
          全选 </td>
        <td colspan="7" style="text-align:left;padding-left:20px;"><a href="javascript:void(0)" class="button border-red icon-trash-o" style="padding:5px 15px;" onclick="DelSelect()"> 删除</a>
         
          
          </td>
      </tr>
      <tr>
        <td colspan="8"><div class="pagelist"><?php echo ($pageButton); ?></div></td>
      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">

//搜索
function changesearch(){	
		
}

//单个删除
function del(id){
	if(confirm("您确定要删除吗?")){
		$.get("<?php echo U('Admin/Goods/del');?>",{'id':id},function(result){
			if(result){
			$("#dell"+id).parents().eq(2).remove();
			}
		});
	}else{
		return false;
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
		if (t==false){
			return false;
		}else{
			$("input[name='id[]']:checked").each(function(){
				var id=$(this).val();
				$.get("<?php echo U('Admin/Goods/del');?>",{'id':id},function(result){
					$("input[value="+id+"]").parent().parent().remove().empty();
				})
			})
		}
				
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

function test(id,aa){
    $.get("<?php echo U('Admin/Goods/show');?>",{'id':id,'aa':aa},function(result){  
    //console.log(result);
    $('#'+aa+id).html(result);
	},'json');
}
</script>
</body>
</html>