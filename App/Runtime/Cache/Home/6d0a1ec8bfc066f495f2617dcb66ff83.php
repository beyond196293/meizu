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


<style type="text/css">
*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;}
body{font:12px/180% Arial, Helvetica, sans-serif, "新宋体";}

.rotary{position:relative;width:854px;height:504px;margin:50px auto 0 auto;background:#d71f2e url(/obj/Public/Uploads/award/bg1.png);}
.rotaryArrow{position:absolute;left:181px;top:104px;width:294px;height:294px;cursor:pointer;background-image:url(/obj/Public/Uploads/award/arrow.png);}

.list{position:absolute;right:48px;top:144px;width:120px;height:320px;overflow:hidden;}
.list h3{display:none;}
.list li{height:37px;font:16px/37px "Microsoft Yahei";color:#f33;text-indent:25px;background:url(images/user.png) 0 no-repeat;}

.result{display:none;position:absolute;left:130px;top:190px;width:395px;height:118px;background-color:rgba(0,0,0,0.75);filter:alpha(opacity=90);}
.result a{position:absolute;right:5px;top:5px;width:25px;height:25px;text-indent:-100px;background-image:url(/obj/Public/Uploads/award/close.png);overflow:hidden;}
.result p{padding:45px 15px 0;font:16px "Microsoft Yahei";color:#fff;text-align:center;}
.result em{color:#ffea76;font-style:normal;}
</style>
<div style="font-size: 16px">你目前还有<span class="inte" style="font-size: 18px;color: red;"><?php echo ($inte); ?></span>积分</div>
<!-- Demo start  -->
<div class="rotary">
	<div class="rotaryArrow" id="rotaryArrow"></div>
	<div class="list">
	</div>
	<div class="result" id="result">
		<p id="resultTxt"></p>
		<a href="javascript:" id="resultBtn" title="关闭">关闭</a>
	</div>
</div>


<script type="text/javascript" src="/obj/Public/Home/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/obj/Public/Home/js/jquery.rotate.min.js"></script>
<script type="text/javascript">
$(function(){
	var $rotaryArrow = $('#rotaryArrow');
	var $result = $('#result');
	var $resultTxt = $('#resultTxt');
	var $resultBtn = $('#result');
	$rotaryArrow.click(function(){
		$.get("<?php echo U('Home/Award/judge');?>",function(result){
			if(result=='false'){
				stop();	
			}else{		
				var data = [0, 1, 2, 3, 4, 5, 6, 7];
				data = data[Math.floor(Math.random()*data.length)];
				switch(data){
					case 1: 
						rotateFunc(1,87,'恭喜您获得了 <em>1</em> 元代金券',1);
						break;
					case 2: 
						rotateFunc(2,43,'恭喜您获得了 <em>5</em> 元代金券',5);
						break;
					case 3: 
						rotateFunc(3,134,'恭喜您获得了 <em>10</em> 元代金券',10);
						break;
					case 4: 
						rotateFunc(4,177,'很遗憾，这次您未抽中奖，继续加油吧',0);
						break;
					case 5: 
						rotateFunc(5,223,'恭喜您获得了 <em>20</em> 元代金券',20);
						break;
					case 6: 
						rotateFunc(6,268,'恭喜您获得了 <em>50</em> 元代金券',50);
						break;
					case 7: 
						rotateFunc(7,316,'恭喜您获得了 <em>30</em> 元代金券',30);
						break;
					default:
						rotateFunc(0,0,'很遗憾，这次您未抽中奖，继续加油吧',0);
				}
			}
		});
	});

	var rotateFunc = function(awards,angle,text,money){  //awards:奖项，angle:奖项对应的角度
		$rotaryArrow.stopRotate();
		$rotaryArrow.rotate({
			angle: 0,
			duration: 5000,
			animateTo: angle + 1440,  //angle是图片上各奖项对应的角度，1440是让指针固定旋转4圈
			callback: function(){
				$resultTxt.html(text);
				$result.show();
			}
		});
		$.get("<?php echo U('Home/Award/edit');?>",{'money':money},function(result){
			$(".inte").html(result-100);
		});
	};

	$resultBtn.click(function(){
		$result.hide();
	});

	var stop=function(){
		$rotaryArrow.stopRotate();
		$resultTxt.html('您的积分不足');
		$result.show();
	}
});
</script>
</body>
</html>