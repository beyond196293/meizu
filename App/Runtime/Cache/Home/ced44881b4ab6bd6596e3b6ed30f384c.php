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
        <a href="">首页&gt;</a>
        <a href="">我的商城&gt;</a>
        <a href="" class="active">地址管理</a>
    </div>
    <div class="main clearfix">
    <div class="left-nav f-fl">
        <div class="nav-main">
            <a href="javascript:;" class="type-title">订单中心</a>
            <a href="<?php echo U('Home/Order/index');?>" class="ml ">我的订单</a>
            <a href="javascript:;" class="type-title">个人中心</a>
            <a href="<?php echo U('Home/Address/index');?>" class="ml">地址管理</a>
            <a href="<?php echo U('Home/Collect/index');?>" class="ml ">我的收藏</a>
            <a href="<?php echo U('Home/Notice/Index');?>" class="ml ">商城公告</a>
            <a href="javascript:;" class="type-title">资产中心</a>
            <a href="<?php echo U('Home/Award/index');?>" class="ml ">去抽奖</a>
            <a href="<?php echo U('Home/Back/index');?>" class="ml ">以旧换新</a>
        </div>
    </div>

        <div class="right-content f-fr">
            <div class="address-main">
                <div class="main">
                    <div class="row">
                        <span class="title rollit">新增收货地址</span>
                        <span class="gray">（您目前已有地址<i class="already"><?php echo ($count); ?></i>个，最多还可以增加<i class="settle"><?php echo ($last); ?></i>个）</span>
                    </div>
                    <form id="valid-form" method="post" action="<?php echo U('Home/Address/add');?>">
                        <!-- 修改地址时要用的地址id -->
                        <input class="addressId" type="hidden" value="">

                        <div class="content">
                            <div class="row namePhone clearfix">
                                <div class="f-fl addressName">
                                    <span>收货人姓名<i class="mark">*</i></span>
                                    <input id="name" class="varify" name="name" type="text" placeholder="长度不超过12个字" maxlength="12">
                                </div>
                                <div class="f-fl addressPhone">
                                    <span>收货人手机号<i class="mark">*</i></span>
                                    <input id="phone" name="tel" class="varify" type="text" placeholder="请输入11位手机号" maxlength="11">
                                </div>
                            </div>
                            <div class="row clearfix receverAddress">
                                <span class="f-fl">收货人地址<i class="mark">*</i></span>
                                <div class="info">
										<select id="s_province" name="s_province" style="border:solid lightgray 1px;width:150px;height:30px"></select>
										<select id="s_city" name="s_city" style="border:solid lightgray 1px;width:150px;height:30px"></select> 
										<select id="s_county" name="s_county" style="border:solid lightgray 1px;width:150px;height:30px"></select>
										<script class="resources library" src="/obj/Public/Home/js/area.js" type="text/javascript"></script>
										<script type="text/javascript">_init_area();</script>
									<div id="show"></div>
								</div>
								
                            </div>
                            <div class="row  detailAddress">
                                <span>详细地址<i class="mark">*&nbsp;&nbsp;&nbsp;</i></span>
                                <input id="detailAddress" name="address" class="varify" type="text" placeholder="请输入不超过50个字的详细地址，例如：路名，门牌号" maxlength="50">
                            </div>
							邮政编码<font color="red">*</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="postalcode" name="postalcode" placeholder="请输入不超过6个字的邮政编码" maxlength="6" style="height:30px;width:200px"/>
                            <div class="opreat">
                                <label for="default">
								<input type="hidden" value="<?php echo ($mk); ?>" id="ma"/>
                                    <input id="default" class="setDefault" type="checkbox" name="mask" value="1">设为默认
                                </label>
                                <input type="submit" class="saveAddress" id="sub"/>
                            </div>
                        </div>
                    </form>
					
                    <div class="list">
                        <div class="row">
                            <div class="title">
                                <div>已有地址</div>
                                <div class="upload hide">
                                    <i class="iconfont icon-zhuyi"></i>
                                    <span>因配送地址库数据升级，请点击地址进行升级，让您享受更好的配送服务！</span>
                                </div>
                            </div>
                        </div>
                        <div class="listHead">
                            <span class="center w15">收货人姓名</span><span class="center w35">收货人地址</span><span class="center w25">收货人手机号</span><span class="center w10">详情</span><span class="center w10">操作</span>
                        </div>
						
                        <ul id="tableList" class="">
						<?php if(!empty($address)): if(is_array($address)): foreach($address as $key=>$val): ?><li>
								<input class="addressId" type="hidden" value="5351279493000">
								<input class="isOld" type="hidden" value="0">
								<span class="center w15"><?php echo ($val["name"]); ?></span>
								<span class="completeAddress center w35"><?php echo ($val["address"]); ?></span>
								<span class="center w25"><?php echo ($val["tel"]); ?></span>
								<span class="center w25 mask1"><?php echo ($val["mask"]); ?></span>
								<span class="center w10">
								  <a class="del" href="javascript:;" onclick="del(<?php echo ($val['id']); ?>,this)">删除</a>
								</span>
								<span class="left w15">
									<a class="beDefault" id="mask" href="javascript:;" onclick="mask(<?php echo ($val['id']); ?>,this)">设为默认</a>
								</span>
							</li><?php endforeach; endif; ?>
						<?php else: ?>
							<li>
								<span>您还没有收货地址，添加吧</span>
							</li><?php endif; ?>
						</ul>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/obj/Public/Home/js/layout-208548c914.js" type="text/javascript"></script>
<script type="text/javascript" src="/obj/Public/Home/js/memberCommon.js"></script>
<script type="text/javascript" src="/obj/Public/Home/js/address.js"></script>
<script>
	
    var __mzt = __mzt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "/obj/Public/Home/js/analytics-min.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<script type="text/javascript">
var Gid  = document.getElementById ;
var showArea = function(){
	Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" + 	
	Gid('s_city').value + " - 县/区" + 
	Gid('s_county').value + "</h3>"
							}
Gid('s_county').setAttribute('onchange','showArea()');

</script>
<script type="text/javascript">
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "/obj/Public/Home/js/hm.js?2a0c04774115b182994cfcacf4c122e9";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<script type="text/javascript">
	if($('#ma').val()==1){
		$('#default').attr('checked',true);
	}
	function del(id,obj){
		$.get("<?php echo U('Home/Address/del');?>",{'id':id},function(result){
				alert(result);
				
			},'json');
			$(obj).parent().parent().remove();
	}
	function mask(id,obj){
		$.get("<?php echo U('Home/Address/mask');?>",{'id':id},function(result){
			//alert(result);
			},'json');
			//alert($(obj).html());
		//console.dir($(".mask1").get());
			$(".mask1").each(function(i){
				$(this).html('备份地址');
			});
			//$('#mask1').html('备份地址');
			$(obj).parent().prev().prev().html('默认地址');
		}
	$('#sub').click(function(){
		if($('#name').val()==""){
			alert('请输入收货人姓名');
			return false;
		}
		if($('#s_province').val()=="省份"){
			alert('请选择省份');
			return false;
		}
		if($('#s_city').val()=="市"){
			alert('请选择市');
			return false;
		}
		if($('#s_county').val()=="区"){
			alert('请选择区');
			return false;
		}
		var exp=/^1[34578]\d{9}$/;
		if(!exp.test($('#phone').val())){
			alert('请输入正确的手机号');
			return false;
		}
		var exp1=/^[1-9]\d{5}$/;
		if(!exp1.test($('#postalcode').val())){
			alert('请输入正确的邮政编码');
			return false;
		}
	})
</script>
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