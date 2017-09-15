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


	<link href="/obj/Public/Home/css/index2.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/obj/Public/Home/js/Calculation.js"></script>
    <script type="text/javascript" src="/obj/Public/Home/js/jquery-1.7.2.min.js"></script>
    <div class="store-wrap">
    <div class="crumbs">
        <a href="http://store.meizu.com/">首页&gt;</a>
        <a href="http://me.meizu.com/member/index">我的商城&gt;</a>
        <a href="http://me.meizu.com/member/favorite/index" class="active">My购物车</a>
    </div>
</div>
<form method="post" id="fm">
<div class="gwc" style=" margin:auto;">
	<table cellpadding="0" cellspacing="0" class="gwc_tb1">
		<tr>
			<td class="tb1_td1"><input id="Checkbox1" type="checkbox"  class="allselect"/></td>
			<td class="tb1_td1">全选</td>
			<td class="tb1_td3">商品</td>
			<td class="tb1_td4">商品属性</td>
			<td class="tb1_td5">数量</td>
			<td class="tb1_td6">单价</td>
			<td class="tb1_td7">操作</td>
		</tr>
	</table>
	<?php if(is_array($list)): foreach($list as $key=>$lis): ?><script type="text/javascript">
$(document).ready(function () {

	// 全选        
	$(".allselect").click(function () {
		if($(this).attr("checked")){
			$(".gwc_tb2 input[class=qwe]").each(function () {
				$(this).attr("checked", true);
				$("#jz2").css("display", "block");
				$("#jz1").css("display", "none");
				n+=1;
			});
			GetCount();
		
		}
		else
   		{
			$(".gwc_tb2 input[class=qwe]").each(function () {
				if ($(this).attr("checked")) {
					$(this).attr("checked", false);
					$("#jz1").css("display", "block");
					$("#jz2").css("display", "none");
					n-=1;
				}
			});
			GetCount();
    
   		}
		
	});
	var n=0;
	// 所有复选(:checkbox)框点击事件
	$(".gwc_tb2 input[class=qwe]").click(function () {
		if ($(this).attr("checked")) {
			n+=1;
			$("#jz2").css("display", "block");
			$("#jz1").css("display", "none");
		} else {
			n-=1;
			if (n==0) {
				$("#jz1").css("display", "block");
				$("#jz2").css("display", "none");
			};
		}
	});

	// 输出
	$(".gwc_tb2 input[class=qwe]").click(function () {
		GetCount();
	});
});
//******************
	function GetCount() {
		var conts = 0;
		var aa = 0;
		$(".gwc_tb2 input[class=qwe]").each(function () {
			if ($(this).attr("checked")) {
				for (var i = 0; i < $(this).length; i++) {
					conts += parseInt($(this).val());
					aa += 1;
				}
			}
		});
		$("#shuliang").text(aa);
		$("#zong1").html((conts).toFixed(2));
		
		
	}
	</script>


	<!---商品加减算总数---->
	<script type="text/javascript">
	$(function () {
		var t = $("#text_box<?php echo ($lis["id"]); ?>");
		$("#add<?php echo ($lis["id"]); ?>").click(function () {
		if (t.val()<5) {
			t.val(parseInt(t.val()) + 1)
			setTotal(); GetCount();
		}else{
			alert('每件商品每次限购5件!');
		}
		})
		$("#min<?php echo ($lis["id"]); ?>").click(function () {
			if(t.val()>1){
				t.val(parseInt(t.val()) - 1)
			    setTotal(); GetCount();
			}else{
				alert('不能小于1;');
			}
		})
		function setTotal() {
			$("#total<?php echo ($lis["id"]); ?>").html((parseInt(t.val()) * '<?php echo ($lis["price"]); ?>').toFixed(2));
			$("#newslist<?php echo ($lis["id"]); ?>").val(parseInt(t.val()) * '<?php echo ($lis["price"]); ?>');
		}
		setTotal();
	})
	</script>
	<table cellpadding="0" cellspacing="0" class="gwc_tb2" id="ert<?php echo ($lis["id"]); ?>">
		<tr>
			<td class="tb2_td1">
				<input type="checkbox" class="qwe" name="newslist,<?php echo ($lis["id"]); ?>" id="newslist<?php echo ($lis["id"]); ?>" />
			</td>
			<td class="tb2_td2"><a href="#"><img src="/obj/Public/Uploads/<?php echo ($lis["iname"]); ?>"/></a></td>
			<td class="tb2_td3"><a href="#"><?php echo ($lis["gname"]); ?></a></td>
			<td class="tb1_td4"><div><?php echo ($lis["colors"]); ?></div></br><div><?php echo ($lis["net"]); ?></div></br><div><?php echo ($lis["memory"]); ?></div></td>
			<td class="tb1_td5">
				<input id="min<?php echo ($lis["id"]); ?>" name=""  style=" width:20px; height:18px;border:1px solid #ccc;" type="button" value="-" />
				<input id="text_box<?php echo ($lis["id"]); ?>" name="" type="text" value="<?php echo ($lis["num"]); ?>" style=" width:30px; text-align:center; border:1px solid #ccc;" />
				<input id="add<?php echo ($lis["id"]); ?>" name="" style=" width:20px; height:18px;border:1px solid #ccc;" type="button" value="+" />
			</td>
			<td class="tb1_td6"><label id="total<?php echo ($lis["id"]); ?>" class="<?php echo ($lis["id"]); ?>" style="color:#ff5500;font-size:14px; font-weight:bold;">
			123</label></td>
			<td class="tb1_td7"><a onclick="tes('<?php echo ($lis["id"]); ?>')" id="del<?php echo ($lis["id"]); ?>">删除</a></td>
		</tr>
	</table>
	<!---总数---->
	<script type="text/javascript">
		$(function () {
			$(".quanxun").click(function () {
				setTotal();
			});
			function setTotal() {
				var len = $(".<?php echo ($lis["id"]); ?>");
				var num = 0;
				for (var i = 0; i < len.length; i++) {
					num = parseInt(num) + parseInt($(len[i]).text());
				}
				$("#zong1").text(parseInt(num).toFixed(2));
			}
		});
	</script>
	<script type="text/javascript">
		function addcar(){
				$('#fm').attr('action','<?php echo U("Home/Cartt/confimorder");?>').submit();
		}
		function tes(id){
			$.get("<?php echo U('Home/Cart/dell');?>",{'id':id},function(result){
				$("#del"+id).parent().parent().parent().parent().remove();
			},'json');
		}
</script><?php endforeach; endif; ?>
	<table cellpadding="0" cellspacing="0" class="gwc_tb3">
		<tr>
			<td class="tb1_td1">&nbsp;</td>
			<td class="tb1_td1">&nbsp;</td>
			<td class="tb3_td1">&nbsp;</td>
			<td class="tb3_td2">已选商品 <label id="shuliang" style="color:#ff5500;font-size:14px; font-weight:bold;">0</label> 件</td>
			<td class="tb3_td3">合计(不含运费):<span>￥</span><span style=" color:#ff5500;"><label id="zong1" style="color:#ff5500;font-size:14px; font-weight:bold;"></label></span></td>
			<td class="tb3_td4"><span id="jz1">结算</span>
			<a style=" display:none;"  class="jz2" id="jz2"><input type="button" id="J_btnBuy addcar" class="jz2" data-mtype="store_de_buy" onclick="addcar()" value="结算"/></a></td>
		</tr>
		
	</table>
	</div>
</form>
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