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
	<link rel="stylesheet" type="text/css" href="/obj/Public/Admin/css/bootstrap-grid.min.css" />
	<link rel="stylesheet" type="text/css" href="/obj/Public/Admin/css/htmleaf-demo.css">
	<script>window.jQuery || document.write('<script src="/obj/Public/Admin/js/jquery-1.11.0.min.js"><\/script>')</script>
	<script type="text/javascript" src="/obj/Public/Admin/js/bringins.js"></script>
</head>
<body>
<form method="get" action="<?php echo U('order');?>">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 订单详情</strong></div>
    <div class="padding border-bottom">
      <ul class="search">
        <li>
          <input type="text" placeholder="请输入订单编号" name="order"  value="<?php echo ($_GET['order']); ?>" class="input" style="width:250px; line-height:17px;display:inline-block" />
          <button type="submit" class="button border-main icon-search" >搜索</button>
		</li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="200">订单编号</th>
        <th width="200">下单时间</th>       
        <th>总金额</th>
        <th width="100">订单状态</th>
        <th width="30%">操作</th>     
      </tr> 
		<?php if(is_array($goods)): foreach($goods as $key=>$val): ?><tr>
          <td><?php echo ($val["order_num"]); ?></td>
          <td><?php echo ($val["time"]); ?></td>
          <td><?php echo ($val["total"]); ?></td>  
          <td><?php echo ($val["status"]); ?></td>         
          <td>
			<div class="button-group">
				<a class="button border-main" href="<?php echo U('Admin/Order/go',array('id'=>$val['id']));?>" <?php echo ($val['status']=='待发货'?'':'disabled'); ?>> 发货</a>
				<a class="button border-main" href="javascript:void(0)" onclick="show(<?php echo ($val["id"]); ?>,<?php echo ($val["uid"]); ?>)"> 查看详情</a>
				<div id="sampledata1" class="bringins-content">
				</div>
			</div>
		  </td>
       </tr><?php endforeach; endif; ?>
      <tr>
        <td colspan="8"><div class="pagelist"><?php echo ($pageButton); ?></div></td>
      </tr>
    </table>
	
  </div>
</form>
<script>
	function show(id,uid){
		 var a=document.getElementById("sampledata1");
		a.innerHTML="";
		  $.get("<?php echo U('Admin/Order/detail');?>",{'id':id,'uid':uid},function(result){
				//console.dir(result);
				//alert(result[1]['price']);
				//document.getElementById("sampledata1").innerHTML=['id'];
				for(i=0;i<result.length;i++){
						//alert(result.length);
						//alert(result[i]['price']);
						//var str = "<ul>";
						 //res+='商品id'+result[i]['goodsid'];
					a.innerHTML+='<br/>详细订单id: '+result[i]['id']+'<br/>收货人姓名:'+result[i]['name']+'<br/>收货地址：'+result[i]['address']+'<br/>收货人电话:'+result[i]['tel']+'<br/>商品名称:'+result[i]['goodsname']+'<br/>商品类型:'+result[i]['version']+'<br/>购买数量:'+result[i]['num']+'<br/>商品价格:'+result[i]['price']+'<hr/>';
					
					
				}
					
				//for(val in result){
					//alert(result[val]);
					
				
				//}
		},'json');
		$('#sampledata1').bringins();
	}
	function del(id){
	  if(confirm("您确定要删除吗?")){
		
	  }
	}

$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
    if (this.checked) {
      this.checked = false;
    }
    else {
      this.checked = true;
    }
  });
})

function DelSelect(){
  var Checkbox=false;
   $("input[name='id[]']").each(function(){
    if (this.checked==true) {   
    Checkbox=true;  
    }
  });
  if (Checkbox){
    var t=confirm("您确认要删除选中的内容吗？");
    if (t==false) return false;     
  }
  else{
    alert("请选择您要删除的内容!");
    return false;
  }
}

</script>
</body>
</html>