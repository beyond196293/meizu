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
            <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
            <div class="padding border-bottom">
                    <a class="button border-yellow" href="<?php echo U('Admin/Cate/back?pid='.$pid['pid']);?>">返回上一级</a>
            </div>
            <table class="table table-hover text-center">
    <tr>
      <th>编号</th>
      <th>分类名称</th>
      <th>pid</th>
      <th>path</th>
      <th>是否显示</th>
      <th>操作子分类</th>
      <th>操作</th>
    </tr>
    <?php if(!empty($category)): if(is_array($category)): foreach($category as $key=>$val): ?><tr>
        <td><?php echo ($val["id"]); ?></td>
        <td><?php echo ($val["name"]); ?></td>
        <td><?php echo ($val["pid"]); ?></td>
        <td><?php echo ($val["path"]); ?></td>
        <td><a id="show<?php echo ($val["id"]); ?>" onclick="test(<?php echo ($val["id"]); ?>)" href="javascript:;">
                <?php echo ($val["display"]); ?></a></td>
        <td><div class="button-group"><a class="button border-main" href="<?php echo U('Admin/Cate/cate?id='.$val['id']);?>"><span class="icon-edit"></span> 查看子分类</a><a class="button border-main" href="<?php echo U('Admin/Cate/cateadd?id='.$val['id']);?>"><span class="icon-edit"></span> 添加子分类</a></div></td>
        <td><div class="button-group"> <a class="button border-main" href="<?php echo U('Admin/Cate/cateup?id='.$val['id']);?>"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="<?php echo U('Admin/Cate/del?id='.$val['id']);?>" onclick="return del(1,2)"><span class="icon-trash-o"></span> 删除</a></div></td>
    </tr><?php endforeach; endif; ?>
    <?php else: ?>
	<tr>
		<td colspan="7"> 查无数据</td>
	</tr><?php endif; ?>
  </table>
</div>

<script type="text/javascript">
function del(id,mid){
	if(confirm("您确定要删除吗?")){			
		return ture;
    }else{
        return false;
    }
}
</script>
</body>
<script>
function test(a){
    $.get("<?php echo U('Admin/Cate/show');?>",{'id':a},function(result){
   
    document.getElementById("show"+a).innerHTML=result;
},'json');

}
// function test($a){
//     //alert($a);
//      var ajax = new XMLHttpRequest();
//      ajax.open('get',"<?php echo U('Admin/Cate/show',array('id'=>$a));?>",true);
//         ajax.send();
//         ajax.onreadystatechange=function(){
//             if(ajax.readyState == 4 && ajax.status ==200){
//                 var result = ajax.responseText;
//                 var obj=JSON.parse(result);
//                 //alert("show"+$a);
//                 
//                 //alert(obj);
//                 console.dir(obj);
//             }
//         }
// }
</script>
</html>