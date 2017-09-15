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


<link rel="stylesheet" href="/mz_shop/Public/Home/css/main-610bbe3.css">
<!--下面是模板标签，不可删除-->
        <main class="wrapper page-detail">
            <div class="container">
                <section class="crumbs clearfix">
                            <a data-mtype="store_de_mbx_1" href="<?php echo U('Home/Index/index');?>">首页</a>&nbsp;&gt;&nbsp;
                            <a class="ellipsis crumbs-title"><?php echo ($glist['name']); ?></a>
                </section>
                <form method="post" id="fm">
                    <input type="hidden" name="iname" value="<?php echo ($img[0]['name']); ?>">
                    <input type="hidden" name="gname" value="<?php echo ($glist['name']); ?>">
                    <input type="hidden" name="price" value="<?php echo ($glist['price']); ?>">
                    <input type="hidden" name="stoke" value="<?php echo ($glist['stoke']); ?>">
                    <input type="hidden" name="gid" value="<?php echo ($glist['id']); ?>">
                <section class="row">
                    <div class="preview" id="preview">
                        <div class="preview-booth">
                            <a href="javascript:;" id="J_imgBooth">
                                <img src="/mz_shop/Public/Uploads/<?php echo ($img[0]['name']); ?>" alt="" height="375" width="375" id="big">
                            </a>
                        </div>
                        <ul class="preview-thumb clearfix" id="J_previewThumb">
                        <?php if(is_array($img)): foreach($img as $key=>$val): ?><li class="small"><img src="/mz_shop/Public/Uploads/<?php echo ($val['name']); ?>" height="75" width="75"></li><?php endforeach; endif; ?>
                        </ul>
                    </div>


                    <div class="property" id="property">
                            <div class="property-hd">
                                <h1><?php echo ($glist['name']); ?></h1>

                                <p class="mod-info active"><?php echo ($glist['describe']); ?></p>
                            </div>
                            <div class="property-sell">
                                <dl class="property-sell-price clearfix">
                                    <dt class="vm-metatit" id="J_discountTag">价<span class="s-space"></span><span class="s-space"></span>格：
                                    </dt>
                                    <dd>
                                        
                                        <div class="mod-price">
                                            <small>¥</small>
                                            <span id="J_price" class="vm-money"><?php echo ($glist['price']); ?></span>
                                        </div>
                                       
                                    </dd>
                                </dl>
                                
                            </div>
                            <div class="property-set">
                                    <dl class="property-set-sale" id="nature0">
                                        <dt class="vm-metatit">商品颜色：</dt>
                                        <span style="display: none">color</span>
                                        <dd class="clearfix">
											<?php if(is_array($color)): foreach($color as $key=>$val): ?><a class="vm-sale-img" style="cursor:pointer">
                                                        <span><?php echo ($val); ?></span>
                                                </a><?php endforeach; endif; ?>                             
                                        </dd>
                                    </dl>
                                    <dl class="property-set-sale" id="nature1">
                                        <dt class="vm-metatit">网络类型：</dt>
                                        <span style="display: none">net</span>
                                        <dd class="clearfix" id="sta">
                                        	<?php if(is_array($net)): foreach($net as $key=>$val): ?><a class="vm-sale-img" style="cursor:pointer">
                                                		
                                                        <span><?php echo ($val); ?></span>
                                                </a><?php endforeach; endif; ?>                             
                                        </dd>
                                    </dl>
                                    <dl class="property-set-sale" id="nature2">
                                        <dt class="vm-metatit">机身内存：</dt>
                                        <span style="display: none">memory</span>
                                        <dd class="clearfix">
                                        	<?php if(is_array($memory)): foreach($memory as $key=>$val): ?><a class="vm-sale-img" style="cursor:pointer">
                                                		
                                                        <span><?php echo ($val); ?></span>
                                                </a><?php endforeach; endif; ?>                             
                                        </dd>
                                    </dl>         
                            </div>
                            <div class="property-service">
                                    <dl class="property-service-item clearfix">
                                        <dt class="vm-metatit">支<span class="s-space"></span><span class="s-space"></span>持：
                                        </dt>
                                        <dd class="mod-bd" id="J_prodService">
                                            <span><i class="icon icon-service"></i>花呗分期</span>
                                            <span><a href="http://store.meizu.com/marrive/summary.html" target="_blank"><i class="icon icon-service"></i>百城速达</a></span>
                                                <span><i class="icon icon-service"></i>顺丰包邮</span>
                                                <span><i class="icon icon-service"></i>7天无理由退货</span>
                                        </dd>
                                    </dl>
                                    
                                <dl class="property-service-provider clearfix">
                                    <dt class="vm-metatit">服<span class="s-space"></span><span class="s-space"></span>务：
                                    </dt>
                                    <dd class="clearfix">
                                        <span id="J_installmentInfo"></span>
                                            本商品由 魅族 负责发货并提供售后服务
                                    </dd>
                                </dl>
                                <dl class="property-service-provider clearfix">
                                    <dt class="vm-metatit">库<span class="s-space"></span><span class="s-space"></span>存：
                                    </dt>
                                    <dd class="clearfix">
                                        <span id="J_installmentInfo" class="stoke"><?php echo ($glist['stoke']); ?></span>
                                            
                                    </dd>
                                </dl>
                            </div>
                            <div class="property-buy">
                                <p class="vm-message" id="J_message">总价：￥
                                    <input style="border:0px;color:red;" type="text" name="price" id="total" value="<?php echo ($glist['price']); ?>" readonly="true">
                                </p>
                                <dl class="property-buy-quantity">
                                    <dt class="vm-metatit">数<span class="s-space"></span><span class="s-space"></span>量：
                                    </dt>
                                    <dd class="clearfix">
                                        <div class="mod-control">
                                            <a title="减少" href="javascript:;" class="vm-minus" id="jian" onclick="jian()">-</a>
                                            <input value="1" id="J_quantity" data-max="1" type="text" name="num" readonly>
                                            <a title="增加" href="javascript:;" class="vm-plus" id="jia" onclick="jia()">+</a>
                                        </div>
                                       
                                        <div>
                                           <!-- <a id="J_btnBuy" class="btn btn-primary btn-lg " data-mtype="store_de_buy" href="<?php echo U('Home/Now/index');?>"><i></i>立即购买</a>-->
                                            <input type="button" id="J_btnBuy addcar" class="btn btn-primary btn-lg " data-mtype="store_de_buy" onclick="addcar()" value="加入购物车" href="<?php echo U('Home/Cart/index');?>"/>
                                            <input type="button" id="J_btnBuy nowbuy" class="btn btn-primary btn-lg " data-mtype="store_de_buy" onclick="nowbuy()" value="立即购买"/>
											<!--<a id="J_btnBuy" class="btn btn-primary btn-lg " data-mtype="store_de_buy" href="<?php echo U('Home/Cart/index');?>"><i></i>加入购物车</a>-->
                                            <a class="vm-favorite" id="abc" href="javascript:;" onclick="collect(<?php echo ($glist['id']); ?>)"><i class="icon icon-favorite"></i>收藏</a>
                                            
                                            
                                        </div>
                                    </dd>
                                </dl>
                            </div>                    
                    </div>
                </section>
                </form>
            </div>
            
             <section class="row detail" id="detail">
                <div style="height:62px;">
                    <div class="detail-tab" id="detailTabFixed">
                        <div class="fixed-container">
                            <ul class="clearfix" style="display: block;">
                                <li class="current">
                                    <a data-mtype="store_de_xq_1" href="javascript:;" onclick="hid('introduce','pp')" id="pp">商品详情</a>
                                </li>
                                <li class="">
                                    <a data-mtype="store_de_xq_3" href="javascript:;" onclick="hid('question','qq')" id="qq">评论(<?php echo ($ping); ?>)</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="detail-content container">
                    <div class="introduce" id="introduce" style="display:block;">
                    	<?php if(is_array($infolist)): foreach($infolist as $key=>$ival): ?><img class="lazy" data-original="" alt="" src="/mz_shop/Public/Uploads/<?php echo ($ival["name"]); ?>" style="display: inline;" width="1240"><?php endforeach; endif; ?> 
                    </div>
                    <div class="question current" id="question" style="display:none;">
                        <div class="question-list">
                            <h2>热门评论</h2>
                            	<?php if(is_array($comlist)): foreach($comlist as $key=>$val): ?><dl class="mod-item">
	                                	<dt class="vm-question">
	                                		用户:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($val['name']); ?>
	                                	</dt>
	                                    <dt class="vm-answer">
	                                    	评论内容：
	                                    	<?php echo ($val['count']); ?>
	                                    </dt>
	                                    <dt class="vm-answer">
	                                    	商家回复：
	                                    	<?php echo ($val['recount']); ?>
	                                    </dt>
	                                    <dd class="vm-answer">
	                                    	评论时间：
	                                    	<?php echo ($val['time']); ?>
	                                    </dd>
	                                </dl><?php endforeach; endif; ?>    
                        </div>
                    </div>
                </div>
            </section>
        </main>
<script type="text/javascript">
	//商品属性显示隐藏
	var nat=$(".vm-sale-img");
	nat.each(function(i){
		if($(this).children().html()==''){
			$("#nature1").attr('style','display:none');
			$("#nature2").attr('style','display:none');
		}
	});

	//判断选择哪个属性
	nat.click(function(){
		$(this).addClass('selected').siblings().removeClass('selected');
		netn=$(this).parent().prev().html();
		netv=$(this).children().html();
		$.get("<?php echo U('Details/nature');?>",{'netn':netn,'netv':netv},function(result){

		})
	})
	//评论和图片切换
	function hid(a,b){
    	$("#"+b).parent().addClass('current').siblings().removeClass('current');
    	$("#"+a).attr("style","display:block").siblings().attr("style","display:none");
    }
    //  -按钮
    function jian(){
    	//alert(1);
       	var n=$("#J_quantity");
       	var t=$("#total");
       	//alert(n.val());
       	if(n.val()>1){
       		n.val(parseInt(n.val())-1);
       		t.val((parseInt(n.val())*<?php echo ($glist['price']); ?>).toFixed(2));
       		$("#jia").removeClass('disabled');
       	}else{
       		$("#jian").css('disabled','true').addClass('disabled');
       		//$("#jia").removeClass('disabled');
       	}    
    }

    //  +按钮
    function jia(){
        var n=$("#J_quantity");
        var t=$("#total");
        if(n.val()<5&&n.val()<<?php echo ($glist['stoke']); ?>){
        	n.val(parseInt(n.val())+1);
        	t.val((parseInt(n.val())*<?php echo ($glist['price']); ?>).toFixed(2));
        	$("#jian").removeClass('disabled');
        }else{
        	$("#jia").css('disabled','true').addClass('disabled');
       		//$("#jian").removeClass('disabled');
        }         
    }

    //大图切换
    $(".small").click(function(){
    	$(this).addClass('current').siblings().removeClass('current');
    	$("#big").attr('src',$(this).children().attr('src'));
    });
    //alert($(".stoke").html());
    if($(".stoke").html()==0){
    	$("input[value='加入购物车']").attr('disabled','disabled');
    	$("input[value='立即购买']").attr('disabled','disabled');
    }else{
    	$("input[value='加入购物车']").attr('disabled',false);
    	$("input[value='立即购买']").attr('disabled',false);
    }
</script>
<script type="text/javascript">
	function addcar(){
		if($("#sta").children().children().html()==''){
			$.get("<?php echo U('Home/Details/st');?>",{'aa':'other'},function(result){
				if(result){
					$('#fm').attr('action','<?php echo U("Home/Cartt/index");?>').submit();
				}else{
					alert('请选择商品属性')
				}
			},'json');
		}else{
			$.get("<?php echo U('Home/Details/st');?>",{'aa':'phone'},function(result){
				if(result){
					$('#fm').attr('action','<?php echo U("Home/Cartt/index");?>').submit();
				}else{
					alert('请选择商品属性')
				}
			},'json');
		};	
	}
	function nowbuy(){
		if($("#sta").children().children().html()==''){
			$.get("<?php echo U('Home/Details/st');?>",{'aa':'other'},function(result){
				if(result){
					$('#fm').attr('action','<?php echo U("Home/Confimorder/index");?>').submit();
				}else{
					alert('请选择商品属性')
				}
			},'json');
		}else{
			$.get("<?php echo U('Home/Details/st');?>",{'aa':'phone'},function(result){
				if(result){
					$('#fm').attr('action','<?php echo U("Home/Confimorder/index");?>').submit();
				}else{
					alert('请选择商品属性')
				}
			},'json');
		};	
	}
</script>
<script>
	function collect(a){
    $.get("<?php echo U('Home/Collect/add');?>",{'id':a},function(result){
    alert(result);
    //document.getElementById('abc').innerHTML=result;
},'json');
}
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