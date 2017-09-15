<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<script charset="utf-8" src="%E4%BC%9A%E5%91%98%E4%B8%AD%E5%BF%83-%E6%B6%88%E6%81%AF%E6%8F%90%E9%A3%8E%E6%A0%BC%E5%8C%96%E9%86%92_files/v.htm"></script>
<script src="/mz_shop/Public/Home/js/hm.js"></script>
<script src="/mz_shop/Public/Home/js/flow.js"></script>
<script src="/mz_shop/Public/Home/js/analytics-min.js"></script>
<script src="/mz_shop/Public/Home/js/jquery.js"></script>
<script charset="utf-8" src="/mz_shop/Public/Home/js/v.js"></script>
<link href="/mz_shop/Public/Home/css/add-b464169420.css" rel="stylesheet" charset="UTF-8">
<link rel="stylesheet" href="/mz_shop/Public/Home/css/layout-ea436a570a.css">
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
<!--<link rel="stylesheet" href="/mz_shop/Public/Home/css/bootstrap.min.css">-->
<link rel="stylesheet" href="/mz_shop/Public/Home/css/pkg-home.css">
<link rel="stylesheet" href="/mz_shop/Public/Home/css/site-base.css">
<link rel="stylesheet" href="/mz_shop/Public/Home/css/aio.css">

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
            <a target="_self" href="<?php echo U('Home/Index/index');?>" class="layout-header-logo-link" alt="魅族科技"><img src="/mz_shop<?php echo ($zzk["logo"]); ?>"></a>
        </div>
        <ul class="layout-header-nav clearfix" id="layoutHeaderNav">
                <?php if(is_array($goodslist)): foreach($goodslist as $key=>$val): ?><li class="layout-header-nav-item">
                <a href="javascript:;" class="layout-header-nav-link"><?php echo ($key); ?></a>
                    <div class="layout-header-nav-child">
                        <div class="mzcontainer">
                            <ul class="layout-header-nav-child-list">
                                <?php if(is_array($val)): foreach($val as $key=>$goods): ?><li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link" data-mtype="store_index_dh_1_1" data-mdesc="导航中第1个下第1个坑" target="_blank" href="<?php echo U('Home/Details/index',array('id'=>$goods['gid']));?>">
                                                <p><img src="/mz_shop/Public/Uploads/<?php echo ($goods["iname"]); ?>" class="layout-header-nav-child-img"></p>
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


<div class="home-category-wrap">
    <div class="mzcontainer home-category-position">
        <div class="home-category-list">
            <ul class="home-category-nav">
                    <li class="home-category-nav-item">
                        <a class="category-nav-link" href="<?php echo U('Home/Catelist/index',array('name'=>'全部'));?>">
                            <span>全部商品分类</span>
                        </a>
                    </li>
                    <?php if(is_array($precate)): foreach($precate as $key=>$val): ?><li class="home-category-nav-item">
                        <a class="category-nav-link" data-mtype="store_index_cdh_2" data-mdesc="侧边导航中第2个分类" href="<?php echo U('Home/Catelist/index',array('name'=>$key));?>">
                            <span><?php echo ($key); ?></span>
                        </a>
                            <div class="category-nav-children nav-wrap-col-2">
                                <div class="nav-children-wrap">
                                        <ul class="nav-children-left">
                                        	<?php if(is_array($val)): foreach($val as $key=>$valg): ?><li class="nav-children-item">
                                                        <a href="<?php echo U('Home/Details/index',array('id'=>$valg['gid']));?>" target="_blank">
                                                            <img src="/mz_shop/Public/Uploads/<?php echo ($valg["iname"]); ?>" height="50" width="50">
                                                            <span><?php echo ($valg["gname"]); ?></span>
                                                        </a>
                                                    </li><?php endforeach; endif; ?>        
                                        </ul>                                        
                                </div>
                                    <div class="category-item-ad">
                                        <a href="" target="_blank" data-mtype="store_index_cdh_2_gg" data-mdesc="侧边导航中第2个分类广告">
                                            <img src="/mz_shop/Public/Uploads/adlb/1.jpg" height="480" width="296" class="adv">
                                        </a>
                                    </div>
                            </div>
                    </li><?php endforeach; endif; ?>
            </ul>
        </div>
    </div>
</div>

<div id="MzHomeSlider" class="home-slider">
    <div class="home-slider-items">
        <div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 480px;"><ul class="bxslider" style="width: auto; position: relative;" >
        <?php if(is_array($list)): foreach($list as $key=>$val): ?><li class="home-slider-box" data-bgcolor="#FFFFFF" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; float: none; list-style: outside none none; position: absolute; width: 1349px; z-index: 50; display: none;">
                    <a class="home-slider-image" style="width: 1920px; margin-left: -960px;" href="" target="_blank" data-mtype="store_index_ba_1" data-mdesc="第1屏banner">
                        <img src="/mz_shop/Public/Uploads/<?php echo ($val["image"]); ?>" height="480" width="1920">
                    </a>
                </li><?php endforeach; endif; ?>      
        </ul></div><div class="bx-controls bx-has-pager bx-has-controls-direction"><div class="bx-pager bx-default-pager">
        <?php if(is_array($list)): foreach($list as $key=>$val): ?><div class="bx-pager-item"><a data-slide-index="<?php echo ($val["sort"]); ?>" class="bx-pager-link"><?php echo ($val["sort"]); ?></a></div><?php endforeach; endif; ?>
        </div>
        </div></div>
    </div>
</div>
        <div class="mzcontainer">

<div class="home-mzad">
  <div class="home-box home-service">
      <div class="service-module-2">
          <a href="<?php echo U('Home/Notice/index');?>" target="_blank" data-mtype="store_index_gd_1" data-mdesc="固定资源位中第1个">
          <span class="home-service-icon service-icon-mentry">
            <img src="/mz_shop/Public/Home/images/1450855246-61162.png" alt="M码通道" height="24" width="24">
          </span>
          <p>商城公告</p>
        </a>
      </div>
      <div class="service-module-2">
        <a href="<?php echo U('Back/index');?>" target="_blank" data-mtype="store_index_gd_2" data-mdesc="固定资源位中第2个">
          <span class="home-service-icon service-icon-mentry">
            <img src="/mz_shop/Public/Home/images/1450855279-64872.png" alt="以旧换新" height="24" width="24">
          </span>
          <p>以旧换新</p>
        </a>
      </div>
      <div class="service-module-2">
        <a href="<?php echo U('Home/Notice/index');?>" target="_blank" data-mtype="store_index_gd_3" data-mdesc="固定资源位中第3个">
          <span class="home-service-icon service-icon-mentry">
            <img src="/mz_shop/Public/Home/images/1450855198-58056.png" alt="魅族意外保" height="24" width="24">
          </span>
          <p>魅族意外保</p>
        </a>
      </div>
      <div class="service-module-2">
        <a href="<?php echo U('Back/index');?>" target="_blank" data-mtype="store_index_gd_4" data-mdesc="固定资源位中第4个">
          <span class="home-service-icon service-icon-mentry">
            <img src="/mz_shop/Public/Home/images/1451960447-93534.png" alt="回购单查询" height="24" width="24">
          </span>
          <p>回购单查询</p>
        </a>
      </div>
  </div>
    <div class="home-box home-ad-box">
      <a href="" target="_blank" data-mtype="store_index_xj_1" data-mdesc="小焦中第1个">
        <img src="/mz_shop/Public/Uploads/<?php echo ($a[0][image]); ?>" height="140" width="244">
      </a>
    </div>
    <div class="home-box home-ad-box">
      <a href="" target="_blank" data-mtype="store_index_xj_1" data-mdesc="小焦中第1个">
        <img src="/mz_shop/Public/Uploads/<?php echo ($b[0][image]); ?>" height="140" width="244">
      </a>
    </div>
    <div class="home-box home-ad-box">
      <a href="" target="_blank" data-mtype="store_index_xj_1" data-mdesc="小焦中第1个">
        <img src="/mz_shop/Public/Uploads/<?php echo ($c[0][image]); ?>" height="140" width="244">
      </a>
    </div>
    <div class="home-box home-ad-box">
      <a href="" target="_blank" data-mtype="store_index_xj_1" data-mdesc="小焦中第1个">
        <img src="/mz_shop/Public/Uploads/<?php echo ($d[0][image]); ?>" height="140" width="244">
      </a>
    </div>
</div>
<div class="home-panel home-rmd home-hot">
    <div class="home-panel-topbar">
        <h2 class="home-panel-title">热品推荐</h2>
            <div class="home-panel-tools">
        <span id="MzRmdSliderLeft" class="panel-slider panel-slider-left panel-slider-disabled" data-mtype="store_main_rp_a" data-mdesc="">
          <span class="more-arrow"> </span>
        </span>
        <span id="MzRmdSliderRight" class="panel-slider panel-slider-right" data-mtype="store_main_rp_b" data-mdesc="">
          <span class="more-arrow"></span>
        </span>
            </div>
    </div>
    <div class="home-rmd-main">
        <div class="home-rmd-cotent">
            <div class="rm-box-25">
                <div id="MzRmdList" class="rmd-content-list" style="width: 2480px; left: 0px;">
                    <?php if(is_array($hot)): foreach($hot as $key=>$hotval): ?><div class="rmd-box rmd-box-product">
                            <a href="<?php echo U('Details/index',array('id'=>$hotval['id']));?>" target="_blank" data-mtype="store_index_rp_1_1" data-mdesc="热品推荐第1屏第1个坑">
                                <div class="rmd-product-detail">
                                    <img src="/mz_shop/Public/Uploads/<?php echo ($hotval["iname"]); ?>" alt="魅族 MX6" height="180" width="180">
                                    <div class="rmd-product-desc">
                                        <h4 class="rmd-product-title"><?php echo ($hotval["gname"]); ?></h4>
                                            <h6 class="rmd-product-subtitle"><?php echo ($hotval["describe"]); ?></h6>

                                        <p class="rmb-product-bottom">
                                            
                                            <span class="rmd-product-price">
                                                ¥
                                                <span><?php echo ($hotval["price"]); ?></span>
                                            </span>
                                        </p>
                                    </div>
                                </div>      
                            </a>
                        </div><?php endforeach; endif; ?>                                       
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="site-gotop" style="display: none;">
<div class="gotop-arrow" title="回到顶部"></div>
</div>

        <div class="home-full-box white">
            <div class="mzcontainer">
                <div class="home-floor-ad">
                    <img src="/mz_shop/Public/Uploads/<?php echo ($e[0][image]); ?>">
                        <a href="" class="hot-point" style="width: 1240px; height: 120px; left: 0px; top: 0px;" target="_blank" title="魅蓝metal" data-mtype="store_index_yl_1_0" data-mdesc="第1个腰栏的第0个热区"></a>
                </div>
            </div>
        </div>

    <div class="home-full-box" style="margin-top: 30px;">
        <div class="mzcontainer">
            <div class="home-panel home-rmd home-floor">
                <div class="home-panel-topbar">
                    <h2 class="home-panel-title">手机</h2>
                    <h6 class="home-panel-subtitle"></h6>
                            <div class="home-panel-tools home-floor-tools">
                            </div>
                </div>
                <div class="home-rmd-main">
                    <div class="home-rmd-cotent">
                        <?php if(is_array($phone)): foreach($phone as $key=>$phoneval): ?><div class="rmd-box rmd-box-product">
                                <a href="<?php echo U('Details/index',array('id'=>$phoneval['id']));?>" data-mdesc="第1个楼层第2个坑">
                                    <div class="rmd-product-detail">
                                        <img class="home-img-lazy" data-original="" alt="" src="/mz_shop/Public/Uploads/<?php echo ($phoneval["iname"]); ?>" style="display: inline;" height="180" width="180">
                                        <div class="rmd-product-desc">
                                            <h4 class="rmd-product-title"><?php echo ($phoneval["gname"]); ?></h4>
                                                <h6 class="rmd-product-subtitle"><?php echo ($phoneval["describe"]); ?></h6>
                                            <p class="rmb-product-bottom">
                                                <span class="rmd-product-price">
                                                ¥
                                                <span><?php echo ($phoneval["price"]); ?></span>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div><?php endforeach; endif; ?>          
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="home-full-box ">
            <div class="mzcontainer">
                <div class="home-floor-ad">
                    <img src="">
                        <a href="" class="hot-point" style="width: 1240px; height: 120px; left: 0px; top: 0px;" target="_blank" title="乐心manbo手环" data-mtype="store_index_yl_2_1" data-mdesc="第2个腰栏的第1个热区"></a>
                </div>
            </div>
        </div>
    <div class="home-full-box" style="">
        <div class="mzcontainer">
            <div class="home-panel home-rmd home-floor">
                <div class="home-panel-topbar">
                    <h2 class="home-panel-title">精选配件</h2>
                </div>
                <div class="home-rmd-main">
                    <div class="home-rmd-cotent">
                        <?php if(is_array($part)): foreach($part as $key=>$partval): ?><div class="rmd-box rmd-box-product">
                                <a href="<?php echo U('Details/index',array('id'=>$partval['id']));?>" target="_blank" data-mtype="store_index_kw_2_2" data-mdesc="第2个楼层第2个坑">
                                    <div class="rmd-product-detail">
                                        <img class="home-img-lazy" data-original="" alt="" src="/mz_shop/Public/Uploads/<?php echo ($partval["iname"]); ?>" style="display: inline;" height="180" width="180">
                                        <div class="rmd-product-desc">
                                            <h4 class="rmd-product-title"><?php echo ($partval["gname"]); ?></h4>
                                                <h6 class="rmd-product-subtitle"><?php echo ($partval["describe"]); ?></h6>
                                            <!-- TODO 替换为内容-->
                                            <p class="rmb-product-bottom">    
                                                <span class="rmd-product-price">
                                                ¥
                                                <span><?php echo ($partval["price"]); ?></span>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div><?php endforeach; endif; ?>          
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="home-full-box ">
            <div class="mzcontainer">
                <div class="home-floor-ad">
                    <img src="/mz_shop/Public/Uploads/<?php echo ($f[0][image]); ?>">
                        <a href="" class="hot-point" style="width: 1240px; height: 120px; left: 0px; top: 0px;" target="_blank" title="航嘉小优USB智能快充排插MX系列" data-mtype="store_index_yl_3_2" data-mdesc="第3个腰栏的第2个热区"></a>
                </div>
            </div>
        </div>
<!-- 智能硬件 -->
    <div class="home-full-box" style="">
        <div class="mzcontainer">
            <div class="home-panel home-rmd home-floor">
                <div class="home-panel-topbar">
                    <h2 class="home-panel-title">智能硬件</h2>
                </div>
                <div class="home-rmd-main">
                    <div class="home-rmd-cotent">
                        <?php if(is_array($ai)): foreach($ai as $key=>$val): ?><div class="rmd-box rmd-box-product">
                                <a href="<?php echo U('Details/index',array('id'=>$val['id']));?>" target="_blank" data-mtype="store_index_kw_3_2" data-mdesc="第3个楼层第2个坑">
                                    <div class="rmd-product-detail">
                                        <img class="home-img-lazy" src="/mz_shop/Public/Uploads/<?php echo ($val["iname"]); ?>" style="display: inline;" height="180" width="180">
                                        <div class="rmd-product-desc">
                                            <h4 class="rmd-product-title"><?php echo ($val["gname"]); ?></h4>
                                                <h6 class="rmd-product-subtitle"><?php echo ($val["describe"]); ?></h6>
                                            <!-- TODO 替换为内容-->
                                            <p class="rmb-product-bottom">
                                                
                                                <span class="rmd-product-price">
                                                ¥
                                                <span><?php echo ($val["price"]); ?></span>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div><?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- 手机周边 -->
    <div class="home-full-box" style="">
        <div class="mzcontainer">
            <div class="home-panel home-rmd home-floor">
                <div class="home-panel-topbar">
                    <h2 class="home-panel-title">手机周边</h2>
                </div>
                <div class="home-rmd-main">
                    <div class="home-rmd-cotent">
                        <?php if(is_array($alw)): foreach($alw as $key=>$val): ?><div class="rmd-box rmd-box-product">
                                <a href="<?php echo U('Details/index',array('id'=>$val['id']));?>" target="_blank" data-mtype="store_index_kw_4_2" data-mdesc="第4个楼层第2个坑">
                                    <div class="rmd-product-detail">
                                        <img class="home-img-lazy" src="/mz_shop/Public/Uploads/<?php echo ($val["iname"]); ?>" style="display: inline;" height="180" width="180">
                                        <div class="rmd-product-desc">
                                            <h4 class="rmd-product-title"><?php echo ($val["gname"]); ?></h4>
                                                <h6 class="rmd-product-subtitle"><?php echo ($val["describe"]); ?></h6>
                                            <!-- TODO 替换为内容-->
                                            <p class="rmb-product-bottom">
                                                
                                                <span class="rmd-product-price">
                                                ¥
                                                <span><?php echo ($val["price"]); ?></span>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div><?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="home-full-box" style="height: 80px;"></div>
<script type="text/javascript">
    $(".adv").each(function(i){
        $.get("<?php echo U('Home/Index/adv');?>",{'i':i},function(result){
            //console.dir(result);
             var gid=result['gid'],image=result['image'];
            $(".adv").eq(i).attr('src','/mz_shop/Public/Uploads/'+image).parent().attr('href',"<?php echo U('Home/Details/index');?>?id="+gid);
        });
    })
</script>
<div class="layout-footer clearfix">
    <div class="mzcontainer">
        <ul class="layout-footer-service clearfix">
            <li class="layout-footer-service-item">
                <i ><img src="/mz_shop/Public/Home/images/7.png"/></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">7天</span>无理由退货
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i><img src="/mz_shop/Public/Home/images/15.png"/></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">15天</span>换货保障
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i><img src="/mz_shop/Public/Home/images/nian.png"/></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">1年</span>免费保修
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i><img src="/mz_shop/Public/Home/images/speed.png"/></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">百城</span>速达
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i><img src="/mz_shop/Public/Home/images/baoyou.png"/></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">全场</span>包邮
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i><img src="/mz_shop/Public/Home/images/map.png"/></i>
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
                            <img class="layout-footer-nav-wechat-img" src="/mz_shop/Public/Home/images/wx-code_a645982.png" alt="微信二维码">
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
<script src="%E9%AD%85%E6%97%8F%E5%AE%98%E7%BD%91%E5%9C%A8%E7%BA%BF%E5%95%86%E5%BA%97-%E6%8F%90%E4%BE%9B%E9%AD%85%E6%97%8F%20PRO%205%E3%80%81%E9%AD%85%E6%97%8FMX%E7%B3%BB%E5%88%97%E3%80%81%E9%AD%85%E8%93%9Dnote%E7%B3%BB%E5%88%97%E3%80%81%E9%AD%85%E8%93%9Dmetal%E7%B3%BB%E5%88%97%E4%BA%A7%E5%93%81%E7%9A%84%E9%A2%84%E7%BA%A6%E5%92%8C%E8%B4%AD%E4%B9%B0_files/hm.htm"></script><script src="/mz_shop/Public/Home/js/flow.js"></script>
<script src="/mz_shop/Public/Home/js/analytics-min.js"></script>
<script src="/mz_shop/Public/Home/js/layout-208548c914.js" type="text/javascript"></script>
<script>var global = {current: 1, totalNum:  13, bid: 111};</script>
<script type="text/javascript" src="/mz_shop/Public/Home/js/infoRemain.js"></script>
<script type="text/javascript" src="/mz_shop/Public/Home/js/pkg-home.js"></script>
<script type="text/javascript" src="/mz_shop/Public/Home/js/memberCommon.js"></script>
<script type="text/javascript" src="/mz_shop/Public/Home/js/index.js"></script><div class="search-downmenu"></div>
<script type="text/javascript" src="/mz_shop/Public/Home/js/common.js"></script>
<script type="text/javascript" src="/mz_shop/Public/Home/js/appraisal.js"></script><div class="search-downmenu"></div>
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
        hm.src = "/mz_shop/Public/Home/js/analytics-min.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>



</body></html>