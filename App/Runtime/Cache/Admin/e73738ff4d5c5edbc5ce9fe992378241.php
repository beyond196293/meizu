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
  <div class="panel-head"><strong><span class="icon-key"></span> 添加用户</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">
      <div class="form-group">
        <div class="label">
          <label for="sitename">用户名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="mpass" name="name" size="50" placeholder="用户名" />       
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label for="sitename">密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" id="mpass" name="password" size="50" placeholder="请输入密码" data-validate="required:请输入原始密码,length#>=6:密码不能小于6位" />       
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label for="sitename">确认密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" name="repassword" size="50" placeholder="请输入密码" data-validate="required:请输入确认密码" />         
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label for="sitename">权限：</label>
        </div>
        <div class="field">
           <select name="role" class="input w50">
               <option value="0">管理员</option>
               <option value="1">普通用户</option>
           </select>       
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