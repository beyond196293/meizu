<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/shoppingobject/Public/Admin/css/pintuer.css">
<link rel="stylesheet" href="/shoppingobject/Public/Admin/css/admin.css">
<script src="/shoppingobject/Public/Admin/js/jquery.js"></script>
<script src="/shoppingobject/Public/Admin/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 修改内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="" enctype="multipart/form-data">    <!--当方法名与文件名一直的时候action里面可以不加U地址;-->
      <div class="form-group">
        <div class="label">
          <label>编号：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo ($list["id"]); ?>" name="id" readonly="readonly" />
          <div class="tips"></div>
        </div>
      </div>
     <input type="hidden" class="input w50" value="<?php echo ($i); ?>" name="i" readonly="readonly" />
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <img src="/shoppingobject/Public/Uploads/<?php echo ($list["image"]); ?>" alt="" width="120" height="50" />
          <input type="file" name="image" class="input tips" style="width:25%; float:left;"  value="" data-toggle="hover" data-place="right"/>
          <input type="hidden" name="image2" class="input tips" style="width:25%; float:left;"  value="<?php echo ($list["image"]); ?>" data-toggle="hover" data-place="right"/>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>商品名称：</label>
        </div>
        <div class="field">
          <select name="goodsid" class="input w50">
          <?php if(is_array($lis)): foreach($lis as $key=>$val): ?><option value="<?php echo ($val["name"]); ?>" selected><?php echo ($val["name"]); ?></option><?php endforeach; endif; ?>
          </select>
        </div>
      </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>