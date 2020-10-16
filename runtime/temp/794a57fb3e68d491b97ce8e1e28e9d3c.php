<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"/www/wwwroot/xinhong.ink/public/../application/admin/view/category/all.html";i:1587550451;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
    <title>新鸿医疗</title>
    <link rel="stylesheet" href="/static/css/pintuer.css">
    <link rel="stylesheet" href="/static/css/admin.css">
    <script src="/static/js/jquery.js"></script>
    <script src="/static/js/pintuer.js"></script>
</head>
<body>
<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 商品类别列表</strong></div>
      <div class="padding border-bottom">
          <button type="button" class="button border-yellow" onclick="location.href='<?php echo url('add'); ?>'">
              <span class="icon-plus-square-o"></span> 添加商品类别</button>
      </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">ID</th>
        <th>类别名</th>
        <th>图标</th>

        <th width="310">操作</th>
      </tr>
     <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
            <td style="text-align:left; padding-left:20px;"><?php echo $vo['id']; ?></td>
            <td><?php echo $vo['name']; ?></td>
            <td><img src="/Uploads/<?php echo $vo['pic']; ?>" width="60"></td>
          <td>
              <div class="button-group">
                  <a class="button border-main" href="<?php echo url('edit',array('id'=>$vo['id'])); ?>" ><span class="icon-edit"></span> 修改</a>
                  <a class="button border-red" href="<?php echo url('del',array('id'=>$vo['id'])); ?>" onclick="if(!confirm('是否确认删除？'))return false;"><span class="icon-trash-o"></span> 删除</a>
              </div>
          </td>
        </tr>
     <?php endforeach; endif; else: echo "" ;endif; ?>

      <tr>
        <td colspan="4">
            <div class="pagelist">
               <?php echo $list->render(); ?>
            </div>
        </td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>