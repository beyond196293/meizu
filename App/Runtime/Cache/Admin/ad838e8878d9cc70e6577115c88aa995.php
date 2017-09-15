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
        <th>买家姓名</th>
        <th>所购商品</th>              
		    <th>评论时间</th>  
        <th width="25%">评论</th>
		    <th>回复评论</th>
		    <th>操作</th>    
      </tr> 
      <?php if(is_array($comlist)): foreach($comlist as $key=>$val): ?><form method="post" action="<?php echo U('Comment/recom');?>">    
            <tr>
    		      <td><?php echo ($val['uname']); ?></td>
              <td><?php echo ($val['gname']); ?></td>
    		      <td><?php echo ($val['time']); ?></td>		   
              <td><?php echo ($val['count']); ?></td>
              <td><textarea type="text" name="recount" cols="30" rows="2"></textarea></td>
              <td>
                <input type="hidden" name="id" value="<?php echo ($val['cid']); ?>"/>
                <input type="submit" value="回复" class="button button-little bg-green"/>
              </td> 
            </tr>
          </form><?php endforeach; endif; ?>  
      <tr>
        <td colspan="8"><div class="pagelist"><?php echo ($page); ?></div></td>
      </tr>
    </table>
  </div>
<script type="text/javascript">

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
</body></html>