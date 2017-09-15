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
<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 修改内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="" enctype="multipart/form-data">    
      <div class="form-group">
        <div class="label">
          <label>编码：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo ($list["id"]); ?>" name="id" readonly="readonly" />
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <img src="/mz_shop/Public/Uploads/<?php echo ($list["image"]); ?>" alt="" width="120" height="50" />
          <input type="file" name="image" class="input tips" style="width:25%; float:left;"  value="" data-toggle="hover" data-place="right"/>
          <input type="hidden" name="image2" class="input tips" style="width:25%; float:left;"  value="<?php echo ($list["image"]); ?>" data-toggle="hover" data-place="right"/>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo ($list["name"]); ?>" name="name" data-validate="required:请输入名称" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>链接地址：</label>
        </div>
        <div class="field">
          <textarea type="text" class="input" name="bewrite" style="height:120px;" ><?php echo ($list["bewrite"]); ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="sort" value="<?php echo ($list["sort"]); ?>"  data-validate="required:,number:排序必须为数字" readonly="readonly"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>