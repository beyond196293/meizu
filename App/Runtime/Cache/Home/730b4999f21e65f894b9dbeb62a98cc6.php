<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<script charset="utf-8" src="%E4%BC%9A%E5%91%98%E4%B8%AD%E5%BF%83-%E6%B6%88%E6%81%AF%E6%8F%90%E9%A3%8E%E6%A0%BC%E5%8C%96%E9%86%92_files/v.htm"></script>
<script src="/shoppingobject/Public/Home/js/hm.js"></script>
<script src="/shoppingobject/Public/Home/js/flow.js"></script>
<script src="/shoppingobject/Public/Home/js/analytics-min.js"></script>
<script src="/shoppingobject/Public/Home/js/jquery.js"></script>
<script charset="utf-8" src="/shoppingobject/Public/Home/js/v.js"></script>
<link href="/shoppingobject/Public/Home/css/add-b464169420.css" rel="stylesheet" charset="UTF-8">
<link rel="stylesheet" href="/shoppingobject/Public/Home/css/layout-ea436a570a.css">
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
<!--<link rel="stylesheet" href="/shoppingobject/Public/Home/css/bootstrap.min.css">-->
<link rel="stylesheet" href="/shoppingobject/Public/Home/css/pkg-home.css">
<link rel="stylesheet" href="/shoppingobject/Public/Home/css/site-base.css">
<link rel="stylesheet" href="/shoppingobject/Public/Home/css/aio.css">

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
            <a target="_self" href="<?php echo U('Home/Index/index');?>" class="layout-header-logo-link" alt="魅族科技"><img src="/shoppingobject<?php echo ($zzk["logo"]); ?>"></a>
        </div>
        <ul class="layout-header-nav clearfix" id="layoutHeaderNav">
                <?php if(is_array($goodslist)): foreach($goodslist as $key=>$val): ?><li class="layout-header-nav-item">
                <a href="javascript:;" class="layout-header-nav-link"><?php echo ($key); ?></a>
                    <div class="layout-header-nav-child">
                        <div class="mzcontainer">
                            <ul class="layout-header-nav-child-list">
                                <?php if(is_array($val)): foreach($val as $key=>$goods): ?><li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link" data-mtype="store_index_dh_1_1" data-mdesc="导航中第1个下第1个坑" target="_blank" href="<?php echo U('Home/Details/index',array('id'=>$goods['gid']));?>">
                                                <p><img src="/shoppingobject/Public/Uploads/<?php echo ($goods["iname"]); ?>" class="layout-header-nav-child-img"></p>
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


    <link rel="stylesheet" href="/shoppingobject/Public/Home/css/common.css">
    <link rel="stylesheet" href="/shoppingobject/Public/Home/css/index.css">
    <link rel="stylesheet" href="/shoppingobject/Public/Home/css/appraisal.css">
    
    <!-- content -->

    <div class="main">
        <div class="mzcontainer">
            <div class="mcycle-header">
                <div class="mcycle-slider">
                    <img src="/shoppingobject/Public/Home/images/Cix_s1g9VqqAbfOTAAW4cEIiKHk112.png" alt="">
                </div>
                <div class="mcycle-bottom-bar">
                    <ul class="mcycle-bottom-list clearfix">
                        <li class="mcycle-bottom-select"><i class="mcycle-font"></i><span class="front-color">全国包邮</span></li>
                        <li class="mcycle-bottom-select"><i class="mcycle-font"></i><span class="front-color">专业检测</span></li>
                        <li class="mcycle-bottom-select"><i class="mcycle-font"></i><span class="front-color">隐私保护</span></li>
                        <li class="mcycle-bottom-select"><i class="mcycle-font"></i><span class="front-color">魅族额外补贴</span></li>
                        <li class="mcycle-bottom-select"><i class="mcycle-font"></i><span class="front-color">24h返券</span></li>
                    </ul>
                </div>
                <div class="mcycle-fixed-box">
                    <ul class="mcycle-flow-list clearfix">
                        <li class="mcycle-flow-step">
                            <div class="mcycle-flow-cycle">1</div>
                            <p class="front-color">在线估值</p>
                        </li>
                        <li class="mcycle-flow-to">
                            <i class="mcycle-font"></i>
                            <i class="mcycle-font"></i>
                            <i class="mcycle-font"></i>
                        </li>
                        <li class="mcycle-flow-step">
                            <div class="mcycle-flow-cycle">2</div>
                            <p class="front-color">免费寄件</p>
                        </li>
                        <li class="mcycle-flow-to">
                            <i class="mcycle-font"></i>
                            <i class="mcycle-font"></i>
                            <i class="mcycle-font"></i>
                        </li>
                        <li class="mcycle-flow-step">
                            <div class="mcycle-flow-cycle">3</div>
                            <p class="front-color">专业检测</p>
                        </li>
                        <li class="mcycle-flow-to">
                            <i class="mcycle-font"></i>
                            <i class="mcycle-font"></i>
                            <i class="mcycle-font"></i>
                        </li>
                        <li class="mcycle-flow-step">
                            <div class="mcycle-flow-cycle">4</div>
                            <p class="front-color">发放回购券</p>
                        </li>
                    </ul>
                    <div class="mcycle-search-box">
                        <input class="mcycle-search-input" placeholder="请输入需回收的机型型号" maxlength="50" type="text">
                        <button class="mcycle-search-btn">搜索</button>
                    </div>
                </div>
            </div>
            <div class="mcycle-type clearfix" style="display: none;">
                <div class="mcycle-type-title">回收种类:</div>
                <ul class="mcycle-type-list clearfix" id="mcycleTypeList">
                    <li class="mcycle-type-select">
                        <div class="mcycle-type-icon"></div>
                        <p>手机</p>
                    </li>
                    <li class="mcycle-type-select">
                        <div class="mcycle-type-icon"></div>
                        <p>苹果播放器</p>
                    </li>
                    <li class="mcycle-type-select">
                        <div class="mcycle-type-icon"></div>
                        <p>平板电脑</p>
                    </li>
                    <li class="mcycle-type-select">
                        <div class="mcycle-type-icon"></div>
                        <p>笔记本</p>
                    </li>
                    <li class="mcycle-type-select">
                        <div class="mcycle-type-icon"></div>
                        <p>数码相机</p>
                    </li>
                    <li class="mcycle-type-select">
                        <div class="mcycle-type-icon"></div>
                        <p>电视机</p>
                    </li>
                </ul>
            </div>
            <div class="mcycle-product" id="mcycleProduct">
                <div class="mcycle-product-brand clearfix">
                    <div class="mcycle-product-brand-title">品牌:</div>
                    <ul class="mcycle-product-brand-list clearfix" id="mcycleProductBrandList">
                            <li class="mcycle-product-brand-name active">
                                <a class="mcycle-product-brand-select" href="javascript:;" data-bid="111">魅族</a>
                            </li>
                            <li class="mcycle-product-brand-name">
                                <a class="mcycle-product-brand-select" href="javascript:;" data-bid="134">苹果</a>
                            </li>
                    </ul>
                </div>
                <ul class="mcycle-product-list clearfix" id="mcycleProductList">
                    <?php if(is_array($info)): foreach($info as $key=>$val): ?><li class="mcycle-product-select">
                            <a class="mcycle-product-link" href="<?php echo U('assecc?id='.$val['id']);?>">
                                <span class="mcycle-product-select-img">
                                    <img src="/shoppingobject/Public/Uploads/<?php echo ($val["savepath"]); ?>" alt="<?php echo ($val["name"]); ?>">
                                </span>
                                <p class="mcycle-product-select-name"><?php echo ($val["name"]); ?></p>
                                <span class="mcycle-product-select-btn">去评估</span>
                            </a>
                        </li><?php endforeach; endif; ?>
                </ul>
                <div class="mcycle-product-page">
                    <div id="page" class="mz-page-box" style="display: block;"><ul class="mz-page-list"><li class="prev disabled"><div class="triangle"></div></li><li class="page active" data-page="1"></li><li class="page " data-page="2"></li><li class="next "><div class="triangle"></div></li></ul></div>
                </div>
            </div>
            <div class="mcycle-qa">
                <div class="mcycle-qa-title">常见问题解答</div>
                        <ul class="mcycle-qa-content">
                            <li class="mcycle-qa-question">活动规则</li>
                                <li class="mcycle-qa-answer">1、活动时间参与以旧换新并返券成功的用户，回购券满 300 送 30 元话费；<br></li>
                                <li class="mcycle-qa-answer">2、活动时间参与以旧换新并返券成功的用户，回购订单尾号踩中 6 既有机会获得魅族新品 M 码一个；</li>
                                <li class="mcycle-qa-answer">3、话费将在活动结束后 10 个工作日内直接充值到订单填写联系人信息时手机号，请确保填写手机号码正确；</li>
                                <li class="mcycle-qa-answer">4、魅族新品 M 码机型可选魅蓝 X 或魅蓝 Note 新品 ，并将于活动结束后 10 个工作日内发放，数量有限，先到先得；</li>
                                <li class="mcycle-qa-answer">5、同一用户仅能获奖一次。</li>
                        </ul>
                        <ul class="mcycle-qa-content">
                            <li class="mcycle-qa-question">如何参与mCycle以旧换新？</li>
                                <li class="mcycle-qa-answer">1、查找所需回收的机型，根据机器的实际情况进行评估；
</li>
                                <li class="mcycle-qa-answer">2、填写您的联系信息，提交订单，寄送机器，建议优先使用顺丰快递（可到付）；
</li>
                                <li class="mcycle-qa-answer">3、回收企业收到机器后24小时内完成检测，我们将以短信形式通知您检测结果确认返券；
</li>
                                <li class="mcycle-qa-answer">4、检测结果出现异常，回收企业客服会与您电话沟通确认，达成一致后将等额的回购券(含魅族补贴)发放到您的魅族账户。</li>
                        </ul>
                        <ul class="mcycle-qa-content">
                            <li class="mcycle-qa-question">魅族回购券的使用规则是什么？</li>
                                <li class="mcycle-qa-answer">1、机器成功回收后，由魅族商城发放等额魅族回购券（金额为回收价+魅族补贴），回购券1年内使用有效；
</li>
                                <li class="mcycle-qa-answer">2、魅族回购券可用于在魅族商城购买商品（手机、手机配件及智能硬件）抵扣现金；
</li>
                                <li class="mcycle-qa-answer">3、购买魅族官网商品符合退货要求，涉及现金部分将原路返还至对应付款账户，&nbsp;魅族回收券则将返至魅族账户;
</li>
                                <li class="mcycle-qa-answer">4、魅族回购券获得后就不可以退换和提现。</li>
                        </ul>
                        <ul class="mcycle-qa-content">
                            <li class="mcycle-qa-question">魅族补贴的补贴标准是多少？</li>
                                <li class="mcycle-qa-answer">根据机器的实际回收价格给予不同价位档的补贴，在机器实际回收价基础上，魅族将给予最高150元的额外补贴。</li>
                        </ul>
            </div>
        </div>
    </div>

    <!-- end content -->
<div class="layout-footer clearfix">
    <div class="mzcontainer">
        <ul class="layout-footer-service clearfix">
            <li class="layout-footer-service-item">
                <i ><img src="/shoppingobject/Public/Home/images/7.png"/></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">7天</span>无理由退货
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i><img src="/shoppingobject/Public/Home/images/15.png"/></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">15天</span>换货保障
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i><img src="/shoppingobject/Public/Home/images/nian.png"/></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">1年</span>免费保修
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i><img src="/shoppingobject/Public/Home/images/speed.png"/></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">百城</span>速达
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i><img src="/shoppingobject/Public/Home/images/baoyou.png"/></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">全场</span>包邮
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i><img src="/shoppingobject/Public/Home/images/map.png"/></i>
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
                            <img class="layout-footer-nav-wechat-img" src="/shoppingobject/Public/Home/images/wx-code_a645982.png" alt="微信二维码">
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
<script src="%E9%AD%85%E6%97%8F%E5%AE%98%E7%BD%91%E5%9C%A8%E7%BA%BF%E5%95%86%E5%BA%97-%E6%8F%90%E4%BE%9B%E9%AD%85%E6%97%8F%20PRO%205%E3%80%81%E9%AD%85%E6%97%8FMX%E7%B3%BB%E5%88%97%E3%80%81%E9%AD%85%E8%93%9Dnote%E7%B3%BB%E5%88%97%E3%80%81%E9%AD%85%E8%93%9Dmetal%E7%B3%BB%E5%88%97%E4%BA%A7%E5%93%81%E7%9A%84%E9%A2%84%E7%BA%A6%E5%92%8C%E8%B4%AD%E4%B9%B0_files/hm.htm"></script><script src="/shoppingobject/Public/Home/js/flow.js"></script>
<script src="/shoppingobject/Public/Home/js/analytics-min.js"></script>
<script src="/shoppingobject/Public/Home/js/layout-208548c914.js" type="text/javascript"></script>
<script>var global = {current: 1, totalNum:  13, bid: 111};</script>
<script type="text/javascript" src="/shoppingobject/Public/Home/js/infoRemain.js"></script>
<script type="text/javascript" src="/shoppingobject/Public/Home/js/pkg-home.js"></script>
<script type="text/javascript" src="/shoppingobject/Public/Home/js/memberCommon.js"></script>
<script type="text/javascript" src="/shoppingobject/Public/Home/js/index.js"></script><div class="search-downmenu"></div>
<script type="text/javascript" src="/shoppingobject/Public/Home/js/common.js"></script>
<script type="text/javascript" src="/shoppingobject/Public/Home/js/appraisal.js"></script><div class="search-downmenu"></div>
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
        hm.src = "/shoppingobject/Public/Home/js/analytics-min.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>



</body></html>