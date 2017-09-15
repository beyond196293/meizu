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
<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo U('Admin/Advert/advert_add');?>" enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="image" class="input tips" style="width:25%; float:left;"  value="" data-toggle="hover" data-place="right"/>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>商品名称：</label>
        </div>
        <div class="field">
          <select name="goodsid" class="input w50">
          <?php if(is_array($list)): foreach($list as $key=>$val): ?><option value="<?php echo ($val["name"]); ?>"><?php echo ($val["name"]); ?></option><?php endforeach; endif; ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit" >提交 </button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>