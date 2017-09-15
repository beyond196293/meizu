<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<script charset="utf-8" src="%E4%BC%9A%E5%91%98%E4%B8%AD%E5%BF%83-%E6%B6%88%E6%81%AF%E6%8F%90%E9%A3%8E%E6%A0%BC%E5%8C%96%E9%86%92_files/v.htm"></script>
<script src="/obj/Public/Home/js/hm.js"></script>
<script src="/obj/Public/Home/js/flow.js"></script>
<script src="/obj/Public/Home/js/analytics-min.js"></script>
<script src="/obj/Public/Home/js/jquery.js"></script>
<script charset="utf-8" src="/obj/Public/Home/js/v.js"></script>
<link href="/obj/Public/Home/css/add-b464169420.css" rel="stylesheet" charset="UTF-8">
<link rel="stylesheet" href="/obj/Public/Home/css/layout-ea436a570a.css">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>魅族官网在线商店-提供魅族 PRO 5、魅族MX系列、魅蓝note系列、魅蓝metal系列产品的预约和购买</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="http://store.res.meizu.com/resources/php/store/java/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon">
    <link href="http://store.res.meizu.com/resources/php/store/java/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon">
    <meta name="description" content="魅族商城是魅族面向全国服务的官方电商平台，提供魅族 PRO 系列、MX系列、魅蓝note系列和魅蓝metal系列的手机，配件和智能硬件的预约和购买。官方正品，全国联保，全场包邮，7天无理由退货，15天换货保障。">
    <meta name="Keywords" content="魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城">
	<style>
    .sureGet .ui-pop-main .ui-pop-cont {
        line-height: 28px !important;
        margin: 64px auto 30px !important;
        padding: 0 30px;
    }

    .font-14 {
        font-size: 14px;
    }

    .big-font {
        font-size: 18px;
    }
    .site-gotop{position:fixed;width:44px;bottom:50px;left:50%;margin-left:640px;display:none}
    .gotop-suggest,.gotop-arrow{display:inline-block;width:44px;height:44px;background:#b4b4b4 no-repeat 50%50%;cursor:pointer}
	</style>

    <!--[if lt IE 9]>
    <script src="//store.res.meizu.com/resources/php/store/java/layout/js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="//store.res.meizu.com/resources/php/store/java/layout/js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
<!--<link rel="stylesheet" href="/obj/Public/Home/css/bootstrap.min.css">-->
<link rel="stylesheet" href="/obj/Public/Home/css/pkg-home.css">
<link rel="stylesheet" href="/obj/Public/Home/css/site-base.css">
<link rel="stylesheet" href="/obj/Public/Home/css/aio.css">

</head>
<body>
<!-- common header -->
<div class="layout-topbar clearfix" id="topbar">
    <div class="mzcontainer">
        <ul class="layout-topbar-left clearfix">
            <li id="ddv" class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第2个" data-mtype="store_index_yt_2" href="<?php echo U('Home/Index/index');?>">网站导航</a>
            <div id="qwer"; style="border:1px solid #0CBBEF;width:300px;height:78px;position:absolute;top:40px;display:none;position:absolute;background-color:#FFFFFF;">
            <?php if(is_array($column)): foreach($column as $key=>$val): ?><div style="margin-right:10px;margin-top:12px;margin-left:10px;float:left;"><a href="<?php echo ($val["link"]); ?>"><?php echo ($val["name"]); ?></a></div><?php endforeach; endif; ?>
            </div></li>
             <script type="text/javascript">
                var qwer=document.getElementById('qwer');
                var ddv=document.getElementById('ddv');
                ddv.onmouseover=function(){
                    //alert(1);
                    qwer.style.display='block';
                    ddv.style.background='#FFFFFF';
                }
                ddv.onmouseout=function(){
                    qwer.style.display='none';
                }
            </script>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第2个" data-mtype="store_index_yt_2" href="<?php echo U('Home/Index/index');?>">魅族商城</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第4个" data-mtype="store_index_yt_4" target="_self" href="">专卖店</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第5个" data-mtype="store_index_yt_5" target="_self" href="">服务</a></li>
        </ul>
        <ul class="layout-topbar-right clearfix">
            <li class="layout-topbar-right-links pop">
                <div class="layout-topbar-pop" id="topbarPop">
                    <a class="layout-topbar-pop-title" data-mdesc="页头消息气泡" data-mtype="store_index_yt_qp" href=""></a>
                    <div class="layout-tpobar-pop-close"></div>
                </div>
        </li>
            <li class="layout-topbar-right-links signin"><a id="topbarMsg" class="layout-topbar-link" data-mdesc="页头-消息" data-mtype="store_index_yt_msg " target="_self" href="">消息</a></li>
            <li class="layout-topbar-right-links"><a class="layout-topbar-link" data-mdesc="页头-收藏   " data-mtype="store_index_yt_collect" target="_self" href="<?php echo U('Home/Collect/index');?>">我的收藏<i class="layout-icon layout-icon-new"></i></a></li>
            <li class="layout-topbar-right-links"><a class="layout-topbar-link" data-mdesc="页头-收藏   " data-mtype="store_index_yt_collect" target="_self" href="<?php echo U('Home/Cart/index');?>">购物车</a></li>
            <li class="layout-topbar-right-links"><a id="topbarOrderMsg" class="layout-topbar-link" data-mdesc="页头-我的订单" data-mtype="store_index_yt_order" target="_self" href="<?php echo U('Home/Order/index');?>">我的订单</a></li>
            <li class="layout-topbar-right-links <?php if(empty($_SESSION['home'])): ?>signout<?php else: ?>signin<?php endif; ?>"><a class="layout-topbar-link" href="<?php echo U('Home/Login/index');?>">登录</a></li>
            <li class="layout-topbar-right-links <?php if(empty($_SESSION['home'])): ?>signout<?php else: ?>signin<?php endif; ?> "><a class="layout-topbar-link" target="_self" href="<?php echo U('Home/login/signup');?>">注册</a></li>
            <li class="layout-topbar-right-links member <?php if(empty($_SESSION['home'])): ?>signin<?php else: ?>signout<?php endif; ?>">
            <a class="layout-topbar-link" target="_self" href="<?php echo U('Home/Center/index');?>"><span class="layout-topbar-username" id="topbarUser"><?php echo ($_SESSION['home']['name']); ?></span>的商城<i class="layout-topbar-triangle"></i></a>

                <ul class="layout-topbar-downmenu">
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link" data-mdesc="我的商城下拉框1" data-mtype="store_index_yt_my_1" target="_blank" href="<?php echo U('Home/Address/index');?>">地址管理</a></li>
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link" data-mdesc="我的商城下拉框2" data-mtype="store_index_yt_my_2" target="_blank" href="">我的回购券</a></li>
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link" data-mdesc="我的商城下拉框3" data-mtype="store_index_yt_my_3" target="_blank" href="">问题反馈</a></li>
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link exit" data-mdesc="我的商城下拉框4" data-mtype="store_index_yt_my_4" href="<?php echo U('Login/outlogin');?>">退出</a></li>
                </ul>
                </li>
        </ul>
    </div>
</div>
<div class="layout-header clearfix">
    <div class="mzcontainer">
        <div class="layout-header-logo">
            <a target="_self" href="<?php echo U('Home/Index/index');?>" class="layout-header-logo-link" alt="魅族科技"><img src="/obj<?php echo ($zzk["logo"]); ?>"></a>
        </div>
        <ul class="layout-header-nav clearfix" id="layoutHeaderNav">
                <?php if(is_array($goodslist)): foreach($goodslist as $key=>$val): ?><li class="layout-header-nav-item">
                <a href="javascript:;" class="layout-header-nav-link"><?php echo ($key); ?></a>
                    <div class="layout-header-nav-child">
                        <div class="mzcontainer">
                            <ul class="layout-header-nav-child-list">
                                <?php if(is_array($val)): foreach($val as $key=>$goods): ?><li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link" data-mtype="store_index_dh_1_1" data-mdesc="导航中第1个下第1个坑" target="_blank" href="<?php echo U('Home/Details/index',array('id'=>$goods['gid']));?>">
                                                <p><img src="/obj/Public/Uploads/<?php echo ($goods["iname"]); ?>" class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name"><?php echo ($goods["gname"]); ?></p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price"><?php echo ($goods["gprice"]); ?></span>

                                                </p>
                                            </a>
                                        </li><?php endforeach; endif; ?>       
                                <!-- more -->
                            </ul>
                        </div>
                    </div>
                </li><?php endforeach; endif; ?>
        </ul>
        <div class="layout-header-nav-downmenu" id="layoutHeaderNavDownmenu"></div>
    </div>
</div>


<div class="store-wrap">
    <div class="crumbs">
        <a href="http://store.meizu.com/">首页&gt;</a><a href="http://me.meizu.com/member/index" class="active">我的商城</a>
    </div>
    <div class="main clearfix">
    <div class="left-nav f-fl">
        <div class="nav-main">
            <a href="javascript:;" class="type-title"><i class="iconfont icon-orderCenter"></i>订单中心</a>
            <a href="http://ordercenter.meizu.com/list/index.html" class="ml ">我的订单</a>
            <a href="http://me.meizu.com/member/repo/index" class="ml ">我的回购单</a>
            <a href="http://insurance.meizu.com/list/insurance.html" class="ml ">我的意外保</a>
            <a href="javascript:;" class="type-title"><i class="iconfont icon-selfCenter"></i>个人中心</a>
            <a href="http://me.meizu.com/member/address/index" class="ml ">地址管理</a>
            <a href="http://me.meizu.com/member/favorite/index" class="ml ">我的收藏</a>
            <a href="http://me.meizu.com/member/message/index" class="ml ">消息提醒</a>
            <a href="http://me.meizu.com/member/advice/index" class="ml ">建议反馈</a>
            <a href="javascript:;" class="type-title"><i class="iconfont icon-moneyCenter"></i>资产中心</a>
            <a href="http://me.meizu.com/member/coupon/index" class="ml ">我的优惠券</a>
            <a href="http://me.meizu.com/member/redenvelop/index" class="ml ">我的红包</a>
            <a href="http://me.meizu.com/member/repo_ticket/index" class="ml ">我的回购券</a>
            <a href="javascript:;" class="type-title"><i class="iconfont icon-serverCenter"></i>服务中心</a>
            <a href="http://store.meizu.com/member/returned/index" class="ml" style="width: 105px">退款/退换货跟踪</a>
            <a href="http://me.meizu.com/member/service/insurance" class="ml ">意外保</a>
            <a href="http://me.meizu.com/member/service/recovery" class="ml ">以旧换新</a>
        </div>
    </div>
        <div class="right-content f-fr">
            <div class="index-main">
                <div class="top clearfix">
                    <div class="information clearfix f-fl">
                        <div class="pic f-fl">
                            <img src='<?php if(empty($image["name"])): ?>/obj/Public/Home/images/head.png<?php else: ?>/obj/Public/Uploads/<?php echo ($image["name"]); endif; ?>' alt="">                           
                        </div>
                        <div class="name f-fl">
                            <span>用户<?php echo ($_SESSION['home']['name']); ?></span>
                            <span>欢迎您回来！</span>
                            <br/><br/>
                            <span class="edit"   id="update" style="cursor:pointer;color:#A8C5FF">修改密码</span>   
                        </div>
                        <div style="display:block" id="info" class="info f-fl">
                            <ul>
                                <li>真实姓名：<span><?php echo ($res["truename"]); ?></span></li>
                                <li>电话：<span><?php echo ($res["tel"]); ?></span></li>
                                <li>性别：<span>
                                <?php if(($res['sex']) == "0"): ?>女<?php endif; ?>
							    <?php if(($res['sex']) == "1"): ?>男<?php endif; ?>
                                </span></li>
                                <li class="emailText">邮箱地址：<span><?php echo ($res["email"]); ?></span></li>
                            </ul>
                                <a class="edit" id="xg" href="javascript:;">完善个人信息 &gt;</a>
                        </div>
                                <form action="<?php echo U('info');?>" method="post">
                        <div style="display:none" id="add" class="info f-fl">
                            <ul>
                               
                                <li style="">真实姓名：<span><input type="text" name="truename" value="<?php echo ($res["truename"]); ?>" ></span></li>
                                <li>电话：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><input type="text" name="tel" value="<?php echo ($res["tel"]); ?>" ></span></li>
                                <li>性别：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><input type="text" name="sex" value="<?php echo ($res["sex"]); ?>" ></span></li>
                                <li>邮箱地址：<span><input type="text" name="email"  value="<?php echo ($res["email"]); ?>"></span></li>
                            </ul>
                        <div style="margin-top:20px" id="tj"><input  style="background:#0CBBEF;width:80px;height:30px;border:0px;color:#fff"type="submit" value="提交" >&nbsp;&nbsp;&nbsp;&nbsp;<span class="edit"   id="back1" style="cursor:pointer;color:#A8C5FF">取消</span></div>
                        </div>
                                </form>

                                <form action="<?php echo U('edit');?>" method="post">
                        <div style="display:none" id="pass" class="info f-fl">
                            <ul>
                               
                                <li style="">新密码：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><input placeholder="请输入6-16位" type="password" name="password"  ></span></li>
                                <li class="emailText">确认密码：<span><input type="password" name="repass"  ></span></li>
                            </ul>
                            <div style="margin-top:20px" id="tj"><input  style="background:#0CBBEF;width:80px;height:30px;border:0px;color:#fff" type="submit" value="提交" >&nbsp;&nbsp;&nbsp;&nbsp;<span class="edit"   id="back2" style="cursor:pointer;color:#A8C5FF">取消</span>
                            
                        </div>
                                </form>
                        </div>
                   
                    </div>
                    <div  class="backCouponNum f-fl">
                        <p>
                        <form action="<?php echo U('head');?>" method="post"  enctype="multipart/form-data">
                                修改头像:<input  style="background:#0CBBEF;width:199px;height:30px;border:1px;color:#fff" type="file" name="file"/><br/>
	        	                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input  style="background:#0CBBEF;width:80px;height:30px;border:1px solid gray;color:#fff" type="submit" value="提交">  
                            </form>
                        </p>
                    </div>
                    </div>
                <script>
                var info=document.getElementById('info');
                var pass=document.getElementById('pass');
                var add=document.getElementById('add');
                var update=document.getElementById('update');
                var back1=document.getElementById('back1');
                var back2=document.getElementById('back2');
                var xg=document.getElementById('xg');
                update.onclick=function(){
                pass.style.display="block";
                add.style.display="none";
                info.style.display="none";

                }
                back1.onclick=function(){
                pass.style.display="none";
                add.style.display="none";
                info.style.display="block";
                }
                back2.onclick=function(){
                pass.style.display="none";
                add.style.display="none";
                info.style.display="block";
                }
                xg.onclick=function(){
                pass.style.display="none";
                add.style.display="block";
                info.style.display="none";
                }
                
                </script>
                <div class="bottom clearfix">
                    <div class="orderState f-fl">
                        <div class="title clearfix">
                            <span class="f-fl">订单状态</span>
                            <a class="detail f-fr" href="http://ordercenter.meizu.com/list/index.html">查看全部订单 &gt;</a>
                        </div>
                        <div class="content">
                            <div class="waitPay clearfix">
                                <span class="f-fl cercl">
                                <i class="iconfont icon-waitingPay"></i>
                                </span>
                                <div class="text f-fl">
                                    <p>待付款订单：<span class="num">1</span></p>
                                    <a class="detail" href="http://ordercenter.meizu.com/list/index.html?type=0">查看全部待付款订单 &gt;</a>
                                </div>
                            </div>
                            <div class="waitDeliver clearfix">
                                <span class="f-fl cercl">
                                <i class="iconfont icon-waitingDeliver"></i>
                                </span>
                                <div class="text f-fl">
                                    <p>待发货订单：<span class="num">1</span></p>
                                    <a class="detail" href="http://ordercenter.meizu.com/list/index.html?type=1">查看全部待发货订单 &gt; </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="message f-fl">
                        <div class="title clearfix">
                            <span class="f-fl">活动消息</span>
                            <a class="f-fr detail" href="http://me.meizu.com/member/message/index">查看全部消息 &gt;</a>
                        </div>
                        <div id="tableList" class="list"><ul>
                                <?php if(is_array($content)): foreach($content as $key=>$val): ?><li class="clearfix">
      <p class="f-fl time">
          <input class="_timeFull" value="1479888175000" type="hidden">
          <span class="fullTime"><?php echo ($val["time"]); ?></span>
          <!--<span class="firstMounth">11-23</span>-->
          <!--<span class="smallTime">16:02</span>-->
      </p>
      <p class="f-fl content">
      <a href="http://hd.meizu.com/sale/thanksgiving2016.html?rc=xx" target="_blank"><i class="contentNum"><?php echo ($val["content"]); ?></i><span class="detail"> 点击查看详细 &gt;</span></a>
      </p>
  </li><?php endforeach; endif; ?>
</ul>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="layout-footer clearfix">
    <div class="mzcontainer">
        <ul class="layout-footer-service clearfix">
            <li class="layout-footer-service-item">
                <i ><img src="/obj/Public/Home/images/7.png"/></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">7天</span>无理由退货
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i><img src="/obj/Public/Home/images/15.png"/></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">15天</span>换货保障
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i><img src="/obj/Public/Home/images/nian.png"/></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">1年</span>免费保修
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i><img src="/obj/Public/Home/images/speed.png"/></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">百城</span>速达
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i><img src="/obj/Public/Home/images/baoyou.png"/></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">全场</span>包邮
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i><img src="/obj/Public/Home/images/map.png"/></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">2000多家</span>专卖店
                </p>
            </li>
        </ul>
        <ul class="layout-footer-nav clearfix">
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">帮助说明</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link" target="_blank" href="">支付方式</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="">配送说明</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="">售后服务</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="">付款帮助</a></li>
                </ul>
            </li>
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">Flyme</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link" href="" target="_blank">开放平台</a></li>
                    <li><a class="layout-footer-nav-link" href="" target="_blank">固件下载</a></li>
                    <li><a class="layout-footer-nav-link" href="" target="_blank">软件商店</a></li>
                    <li><a class="layout-footer-nav-link" href="" target="_blank">查找手机</a></li>
                </ul>
            </li>
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">关于我们</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link" target="_blank" href="<?php echo U('Home/Aboutus/meizhu');?>">关于魅族</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="<?php echo U('Home/Aboutus/feedback');?>">意见反馈</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="<?php echo U('Home/Aboutus/callwe');?>">联系我们</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="<?php echo U('Home/Aboutus/law');?>">法律声明</a></li>
                </ul>

            </li>
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">关注我们</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link" target="_blank" href="">新浪微博</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="">腾讯微博</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="">QQ空间</a></li>
                    <li>
                        <a class="layout-footer-nav-link layout-footer-nav-wechat" href="javascript:;">
                            官方微信
                            <img class="layout-footer-nav-wechat-img" src="/obj/Public/Home/images/wx-code_a645982.png" alt="微信二维码">
                        </a>
                    </li>
                </ul>
            </li>
            <li class="layout-footer-nav-item ">
                <p class="layout-footer-nav-title tel">24小时全国服务热线</p>
                <p><a class="layout-footer-nav-tel" href="tel:400-788-3333">400-788-3333</a></p>
                <p>
                    <a class="layout-footer-nav-btn" href="javascript:;" onclick="window.open('http://live-i.meizu.com/live800/chatClient/chatbox.jsp?companyID=8957&amp;configID=4&amp;enterurl='+ encodeURIComponent(document.URL) + '&amp;pagereferrer=' + encodeURIComponent(document.referrer) + '&amp;info=&amp;k=1', '_blank','height=775,width=1200,fullscreen=3,top=100,left=100,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no,fullscreen=no');">
                        <i class="layout-font layout-font-talk"></i>24小时在线客服
                    </a>
                </p>
            </li>
        </ul>
        <div class="layout-footer-copyright">
            <?php echo ($zzk["copyright"]); ?>
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo ($zzk["number"]); ?></a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://www2.res.meizu.com/zh_cn/images/common/icp2.jpg" target="_blank"><?php echo ($zzk["allow"]); ?></a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://www2.res.meizu.com/zh_cn/images/common/com_licence.jpg" target="_blank">营业执照</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://210.76.65.188/" rel="nofollow" target="_blank">
                <i class="layout-icon layout-icon-license"></i>
            </a>
            <a class="layout-footer-copyright-link" hidefocus="true" href=" rel="nofollow" target="_blank">
                <i class="layout-icon layout-icon-wel"></i>
            </a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="" rel="nofollow" target="_blank">
                <i class="layout-icon layout-icon-trust"></i>
            </a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="" rel="nofollow" target="_blank">
                <i class="layout-icon layout-icon-official"></i>
            </a>
        </div>
    </div>
</div>
<script src="%E9%AD%85%E6%97%8F%E5%AE%98%E7%BD%91%E5%9C%A8%E7%BA%BF%E5%95%86%E5%BA%97-%E6%8F%90%E4%BE%9B%E9%AD%85%E6%97%8F%20PRO%205%E3%80%81%E9%AD%85%E6%97%8FMX%E7%B3%BB%E5%88%97%E3%80%81%E9%AD%85%E8%93%9Dnote%E7%B3%BB%E5%88%97%E3%80%81%E9%AD%85%E8%93%9Dmetal%E7%B3%BB%E5%88%97%E4%BA%A7%E5%93%81%E7%9A%84%E9%A2%84%E7%BA%A6%E5%92%8C%E8%B4%AD%E4%B9%B0_files/hm.htm"></script><script src="/obj/Public/Home/js/flow.js"></script>
<script src="/obj/Public/Home/js/analytics-min.js"></script>
<script src="/obj/Public/Home/js/layout-208548c914.js" type="text/javascript"></script>
<script>var global = {current: 1, totalNum:  13, bid: 111};</script>
<script type="text/javascript" src="/obj/Public/Home/js/infoRemain.js"></script>
<script type="text/javascript" src="/obj/Public/Home/js/pkg-home.js"></script>
<script type="text/javascript" src="/obj/Public/Home/js/memberCommon.js"></script>
<script type="text/javascript" src="/obj/Public/Home/js/index.js"></script><div class="search-downmenu"></div>
<script type="text/javascript" src="/obj/Public/Home/js/common.js"></script>
<script type="text/javascript" src="/obj/Public/Home/js/appraisal.js"></script><div class="search-downmenu"></div>
<script>require('member:app/script/page/infoRemain');</script>
<script charset="utf-8">var $=require("common:lib/jquery/jquery-1.11.3");
$(function(){
    require("home:widgets/settlement-ad/settlement-ad"),
    require("home:widgets/home-slider/home-slider"),
    require("home:widgets/home-recommend/home-recommend"),
    require("home:widgets/home-category/home-category"),
    require("home:widgets/home-gotop/home-gotop"),
    require("home:js/jquery.lazyload/jquery.lazyload"),
    $("img.home-img-lazy").lazyload({})
});
</script>
<script>
    var __mzt = __mzt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "/obj/Public/Home/js/analytics-min.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>



</body></html>