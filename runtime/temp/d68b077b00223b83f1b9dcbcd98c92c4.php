<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"D:\phpStudy\PHPTutorial\WWW\xinhong.ink\public/../application/admin\view\goods\edit.html";i:1589899361;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
    <title>新鸿医疗</title>
    <link rel="stylesheet" href="/xinhong.ink/public/static/css/pintuer.css">
    <link rel="stylesheet" href="/xinhong.ink/public/static/css/admin.css">
    <script src="/xinhong.ink/public/static/js/jquery.js"></script>
    <script src="/xinhong.ink/public/static/js/pintuer.js"></script>

</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>编辑商品</strong></div>
  <div class="body-content">
      <form method="post" class="form-x"  enctype="multipart/form-data">
          <div class="form-group">
              <div class="label">
                  <label>商品类别：</label>
              </div>
              <div class="field">
                  <select class="input w50"  name="cid" id="cid" data-validate="required:请选择商品类别">
                      <option value="">请选择材类别</option>
                      <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                      <option value="<?php echo $vo['id']; ?>" <?php if($info['cid'] == $vo['id']): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
                      <?php endforeach; endif; else: echo "" ;endif; ?>
                  </select>
                  <div class="tips"></div>
              </div>
          </div>
          <div class="form-group">
              <div class="label">
                  <label>商品名称：</label>
              </div>
              <div class="field">
                  <input type="text" class="input w50" value="<?php echo $info['name']; ?>" name="name" data-validate="required:请输入商品名称" />
                  <div class="tips"></div>
              </div>
          </div>
          <div class="form-group">
              <div class="label">
                  <label>商品图片：</label>
              </div>
              <div class="field">
                  <input type="file" title="图片"  name="pic" id="pic"  class="input w50">
                  原图：<img src="/xinhong.ink/public/Uploads/<?php echo $info['pic']; ?>" width="55">
                  <div class="tips"></div>
              </div>
          </div>
          <div class="form-group">
              <div class="label">
                  <label>商品售价：</label>
              </div>
              <div class="field">
                  <input type="text" class="input w50" value="<?php echo $info['price']; ?>" name="price" data-validate="required:请输入商品售价" />
                  <div class="tips"></div>
              </div>
          </div>
          <div class="form-group">
              <div class="label">
                  <label>商品简介：</label>
              </div>
              <div class="field">
                  <textarea style="width: 600px;height: 350px" name="info" data-validate="required:请输入商品简洁" class="input w50"><?php echo $info['info']; ?></textarea>
                  <div class="tips"></div>
              </div>
          </div>

      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
            <input name="id" value="<?php echo $info['id']; ?>" type="hidden">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body>


</html>