<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="/obj/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/obj/Public/Admin/css/admin.css">
    <script src="/obj/Public/Admin/js/jquery.js"></script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="/obj/Public/admin/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="<?php echo U('Home/Index/index');?>" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="<?php echo U('Admin/Login/login');?>"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-pencil-square-o"></span>基本设置</h2>
  <ul>
    <!--<li><a href="<?php echo U('Admin/Info/info');?>" target="right"><span class="icon-caret-right"></span>数据统计</a></li>-->
    <li><a href="<?php echo U('Admin/Pass/pass');?>" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
    <li><a href="<?php echo U('Admin/Adv/adv');?>" target="right"><span class="icon-caret-right"></span>首页轮播</a></li>   
    <li><a href="<?php echo U('Admin/Column/column');?>" target="right"><span class="icon-caret-right"></span>链接管理</a></li>
    <!--<li><a href="<?php echo U('Admin/Feedback/feedback');?>" target="right"><span class="icon-caret-right"></span>意见反馈</a></li>-->
  </ul>   
  	<!--<h2><span class="icon-pencil-square-o"></span>网站配置</h2>
  	<ul>
  	<li><a href="<?php echo U('config/index');?>" target="right"><span class="icon-caret-right"></span>网站信息</a></li>
  	<li><a href="<?php echo U('config/def');?>" target="right"><span class="icon-caret-right"></span>维护网站</a></li>
  </ul>-->
  <h2><span class="icon-pencil-square-o"></span>用户管理</h2>
  
  <ul>
	  <li><a href="<?php echo U('Admin/User/user');?>" target="right"><span class="icon-caret-right"></span>用户列表</a></li>
	  <li><a href="<?php echo U('Admin/User/add');?>" target="right"><span class="icon-caret-right"></span>添加用户</a></li>
  </ul> 
  <h2><span class="icon-pencil-square-o"></span>分类管理</h2>
  <ul>
  <li><a href="<?php echo U('Admin/Cate/cate');?>" target="right"><span class="icon-caret-right"></span>商品分类</a></li>
    <li><a href="<?php echo U('Admin/Cate/cateadd');?>" target="right"><span class="icon-caret-right"></span>添加顶级分类</a></li> 
    </ul>
  <h2><span class="icon-pencil-square-o"></span>商品管理</h2>
  <ul>
    <li><a href="<?php echo U('Admin/Goods/index');?>" target="right"><span class="icon-caret-right"></span>商品列表管理</a></li>
    <li><a href="<?php echo U('Admin/Goods/add');?>" target="right"><span class="icon-caret-right"></span>添加商品</a></li>
  </ul>  
  <h2><span class="icon-pencil-square-o"></span>订单管理</h2>
  <ul>
  <li><a href="<?php echo U('Admin/Order/order');?>" target="right"><span class="icon-caret-right"></span>订单详情</a></li>
  </ul>
   <h2><span class="icon-pencil-square-o"></span>公告管理</h2>
     <ul>
  <li><a href="<?php echo U('Admin/Notice/notice');?>" target="right"><span class="icon-caret-right"></span>公告详情</a></li>
   <li><a href="<?php echo U('Admin/Notice/noticeadd');?>" target="right"><span class="icon-caret-right"></span>添加公告</a></li>
  </ul>
   <h2><span class="icon-pencil-square-o"></span>评论管理</h2>
  <ul>
	  <li><a href="<?php echo U('Admin/Comment/comment');?>" target="right"><span class="icon-caret-right"></span>未回复评论</a></li>
	  <li><a href="<?php echo U('Admin/Comment/recomment');?>" target="right"><span class="icon-caret-right"></span>已回复评论</a></li>
  </ul> 
    <!--<h2><span class="icon-pencil-square-o"></span>统计管理</h2>
  <ul>
	<li><a href="<?php echo U('Admin/Statistics/index');?>" target="right"><span class="icon-caret-right"></span>商品销量</a></li>
  <li><a href="<?php echo U('Admin/Statistics/index0');?>" target="right"><span class="icon-caret-right"></span>总数统计</a></li>
  </ul>
    <h2><span class="icon-pencil-square-o"></span>广告管理</h2>
  <ul>
  <li><a href="<?php echo U('Admin/Advert/advert');?>" target="right"><span class="icon-caret-right"></span>广告详情</a></li>
  </ul>-->
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<ul class="bread">
    <li><a href="<?php echo U('Admin/Info/info');?>" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <li><b></b><span style="color:red;"><?php echo ($session["name"]); ?></span>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="<?php echo U('Admin/Info/info');?>" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">
<p>来源:<a href="" target="_blank">呵呵</a></p>
</div>
</body>
</html>