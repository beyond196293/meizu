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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo U('Config/updates');?>"  enctype="multipart/form-data">  
    <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>"/>
      <div class="form-group">
        <div class="label">
          <label>网站名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="name" value="<?php echo ($info["name"]); ?>" data-validate="required:请输入网站名称" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站关键字：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="keywords" value="<?php echo ($info["keywords"]); ?>" data-validate="required:请输入网站关键字"/>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站logo：</label>
        </div>
       <div class="field">
          <input type="file" class="button bg-blue margin-left" class="input tips" name="logo" value="+ 浏览上传"  style="float:left;">
          <div class="tipss"></div>
        </div>
      </div>  
       <div class="form-group">
        <div class="label">
          <label>网站版权：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="copyright" value="<?php echo ($info["copyright"]); ?>" data-validate="required:请输入网站关键字"/>
        </div>
      </div>
       <div class="form-group">
        <div class="label">
          <label>网站备案号：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="number" value="<?php echo ($info["number"]); ?>" data-validate="required:请输入网站关键字"/>
        </div>
      </div>
       <div class="form-group">
        <div class="label">
          <label>网站许可证：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="allow" value="<?php echo ($info["allow"]); ?>" data-validate="required:请输入网站关键字"/>
        </div>
      </div>   
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit">修改</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
<script>
function check(obj){
    var cate=obj.value;
    $.get("<?php echo U('Admin/Goods/hidd');?>",{'cate':cate},function(result){
		//alert(result);
		if(!result){
		    $(".hidd").attr('style','display:none').css('disabled','true');
		}else{
		    $(".hidd").attr('style','display:block');
		}
    },'json');
}

</script>
</html>