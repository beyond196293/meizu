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
</head>
<body>
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 评论管理</strong></div>
    <table class="table table-hover text-center">
      <tr>   
        <th width="8%">姓名</th>       
        <th width="10%">电话</th>
        <th width="15%">邮箱</th>
		    <th width="10%">留言时间</th>  
        <th width="25%">意见</th>
		    <th width="15%">状态</th>
           
      </tr>     
      <?php if(is_array($list)): foreach($list as $key=>$val): ?><tr>
          <td><?php echo ($val["name"]); ?></td>
          <td><?php echo ($val["phone"]); ?></td> 
          <td><?php echo ($val["email"]); ?></td>
		      <td><?php echo ($val["time"]); ?></td>		   
          <td><?php echo ($val["opinion"]); ?></td>
          <td><input type="button" id="qwe<?php echo ($val["id"]); ?>" class="button border-main" data-mtype="store_de_buy" onclick="addcar('<?php echo ($val["id"]); ?>')" value="<?php echo ($val["solve"]); ?>"/>  <input type="button" id="del<?php echo ($val["id"]); ?>" class="button border-red" data-mtype="store_de_buy" onclick="tes('<?php echo ($val["id"]); ?>')" value="删除"/></td>
        </tr>
      <script type="text/javascript">

      </script><?php endforeach; endif; ?>
      <tr>
        <td colspan="8">
        <div class="pagelist"> 
          <?php echo ($page); ?>
        </div></td>
      </tr>
    </table>
  </div>
<script type="text/javascript">
  function del(id){
  	if(confirm("您确定要删除吗?")){
  		
  	}
  }
  function addcar(id){
      $.get("<?php echo U('Admin/Feedback/feed');?>",{'id':id},function(result){
        //alert(1);
      $("#qwe"+id).attr('value',result);
  },'json');
  }
  function tes(id){
        $.get("<?php echo U('Admin/Feedback/del');?>",{'id':id},function(result){
          $("#del"+id).parent().parent().remove();
        },'json');
      }
</script>
</body></html>