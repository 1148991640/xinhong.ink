<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"/www/wwwroot/xinhong.ink/public/../application/admin/view/orders/all.html";i:1587549877;}*/ ?>
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
    <div class="panel-head"><strong class="icon-reorder"> 订单列表</strong></div>
      <div class="padding border-bottom">
      </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">ID</th>
        <th>收货人</th>
        <th>地址</th>
        <th>电话</th>
        <th>商品</th>
        <th>价格</th>
        <th>数量</th>
        <th>金额</th>
        <th>提交时间</th>

        <th width="310">操作</th>
      </tr>
     <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
            <td style="text-align:left; padding-left:20px;"><?php echo $vo['id']; ?></td>
            <td><?php echo $vo['name']; ?></td>
            <td><?php echo $vo['address']; ?></td>
            <td><?php echo $vo['tel']; ?></td>
            <td><?php if(is_array($vo['goodsName']) || $vo['goodsName'] instanceof \think\Collection || $vo['goodsName'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['goodsName'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><?php echo $v; ?><br><?php endforeach; endif; else: echo "" ;endif; ?></td>
            <td><?php if(is_array($vo['goodsPrice']) || $vo['goodsPrice'] instanceof \think\Collection || $vo['goodsPrice'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['goodsPrice'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><?php echo $v; ?><br><?php endforeach; endif; else: echo "" ;endif; ?></td>
            <td><?php if(is_array($vo['goodsNum']) || $vo['goodsNum'] instanceof \think\Collection || $vo['goodsNum'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['goodsNum'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><?php echo $v; ?><br><?php endforeach; endif; else: echo "" ;endif; ?></td>
            <td><?php echo $vo['money']; ?></td>
            <td><?php echo $vo['time']; ?></td>

          <td>
              <div class="button-group">
                  <?php if($vo['status'] == 0): ?>
                  <a class="button border-main" href="<?php echo url('send',array('id'=>$vo['id'])); ?>"  >发货</a>
                  <?php elseif($vo['status'] == 1): ?>
                  待收货
                  <?php else: ?>
                  已完成
                  <?php endif; ?>

              </div>
          </td>
        </tr>
     <?php endforeach; endif; else: echo "" ;endif; ?>
      <tr>
        <td colspan="10">
            <div class="pagelist">
                <?php echo $page; ?>
            </div>
        </td>
      </tr>
    </table>
  </div>
</form>
</body>
<script>
    function check(dist) {
        if(dist>5000){
            alert("超过5公里，不能接单")
            return false;
        }
    }
</script>
</html>