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
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">   
      <input type="hidden" name="id"  value="" />  
      <div class="form-group">
        <div class="label">
          <label>商品销售总额：</label>
        </div>
        <div class="field">      
          <div class="tips"><?php echo ($mary); ?></div>
        </div>
      </div> 
      <div class="form-group">
        <div class="label">
          <label>商品销售总数：</label>
        </div>
        <div class="field">
          <div class="tips"><?php echo ($pnum); ?></div>
        </div>
      </div> 
      <div class="form-group">
        <div class="label">
          <label>网站总用户：</label>
        </div>
        <div class="field">
          <div class="tips"><?php echo ($us); ?></div>
        </div>
      </div>

     <div class="form-group">
        <div class="label">
          <label></label>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>