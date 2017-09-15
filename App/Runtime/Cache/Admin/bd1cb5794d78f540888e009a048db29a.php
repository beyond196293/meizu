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
    <link href="/obj/Public/Admin/css/infocss/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
	<link href="/obj/Public/Admin/css/infocss/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
	<link href="/obj/Public/Admin/css/infocss/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME ICON CSS -->
	<link href="/obj/Public/Admin/css/infocss/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
	<link href="/obj/Public/Admin/css/infocss/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
	<link href="/obj/Public/Admin/css/infocss/morris.css" rel="stylesheet"><!-- MORRIS CHART CSS -->
     <!--dashboard calendar-->
    <link href="/obj/Public/Admin/css/infocss/clndr.css" rel="stylesheet"><!-- CALENDER CSS -->
    
    <script src="/obj/Public/Admin/js/jquery.js"></script>
    <script src="/obj/Public/Admin/js/pintuer.js"></script>  
</head>
<body>
<!-- BEGIN WRAPPER  -->
        <section class="wrapper">
		  <!-- BEGIN ROW  -->
          <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
              <section class="panel">
                <div class="symbol">
                  <i class="fa fa-tags blue">
                  </i>
                </div>
                <div class="value">
                  <h1 class="count">
                    <?php echo ($a); ?>
                  </h1>
                  <p>
                    Total Sale
                  </p>
                </div>
              </section>
            </div>
            <div class="col-lg-3 col-sm-6">
              <section class="panel">
                <div class="symbol">
                  <i class="fa fa-money red">
                  </i>
                </div>
                <div class="value">
                  <h1 class="count2">
                    <?php echo ($b); ?>
                  </h1>
                  <p>
                    Total Profit
                  </p>
                </div>
              </section>
            </div>
            <div class="col-lg-3 col-sm-6">
              <section class="panel">
                <div class="symbol">
                  <i class="fa fa-user yellow">
                  </i>
                </div>
                <div class="value">
                  <h1 class=" count3">
                    <?php echo ($c); ?>
                  </h1>
                  <p>
                    All Users
                  </p>
                </div>
              </section>
            </div>
            <div class="col-lg-3 col-sm-6">
              <section class="panel">
                <div class="symbol">
                  <i class="fa fa-shopping-cart purple">
                  </i>
                </div>
                <div class="value">
                  <h1 class=" count4">
                   <?php echo ($d); ?>
                  </h1>
                  <p>
                    All Orders
                  </p>
                </div>
              </section>
            </div>
          </div>
		   <!-- END ROW  -->
         
	<script src="/obj/Public/Admin/js/jquery-1.8.3.min.js" ></script><!-- BASIC JQUERY 1.8.3 LIB. JS -->
    <script src="/obj/Public/Admin/js/infojs/bootstrap.min.js" ></script><!-- BOOTSTRAP JS -->
    <script src="/obj/Public/Admin/js/infojs/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDIN JS -->
    <script src="/obj/Public/Admin/js/infojs/jquery.scrollTo.min.js" ></script><!-- SCROLLTO JS -->
    <script src="/obj/Public/Admin/js/infojs/jquery.nicescroll.js" ></script><!-- NICESCROLL JS -->
    <script src="/obj/Public/Admin/js/infojs/respond.min.js" ></script><!-- RESPOND JS -->
    <script src="/obj/Public/Admin/js/infojs/jquery.sparkline.js"></script><!-- SPARKLINE JS -->
    <script src="/obj/Public/Admin/js/infojs/sparkline-chart.js"></script><!-- SPARKLINE CHART JS -->
    <script src="/obj/Public/Admin/js/infojs/common-scripts.js"></script><!-- BASIC COMMON JS -->
    <script src="/obj/Public/Admin/js/infojs/count.js"></script><!-- COUNT JS -->
    <!--Morris-->
    <script src="/obj/Public/Admin/js/infojs/raphael-min.js" ></script><!-- MORRIS  JS -->
    <!--Calendar-->
    <script >
      //knob
      //$(".knob").knob();
	  //在count.js中
      
    </script>
    <!-- END JS -->
  </body>
</html>