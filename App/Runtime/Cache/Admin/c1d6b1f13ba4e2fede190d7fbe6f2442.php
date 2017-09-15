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
  <div class="panel-head" id="add"><strong>网站维护</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo U('Config/update');?>"  enctype="multipart/form-data">  
      <div class="form-group">
        <div class="label">
          <label>网站状态</label>
        </div>
        <div class="field">
            <input type="radio" name="switch" value="0" <?php if($res['switch'] == 0): ?>checked<?php endif; ?>/>开启
            <input type="radio" name="switch" value="1" <?php if($res['switch'] == 1): ?>checked<?php endif; ?>/>关闭
        </div>
      </div>
       <div class="form-group">
        <!-- <div class="label">
        </div> -->
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit">确认操作</button>
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