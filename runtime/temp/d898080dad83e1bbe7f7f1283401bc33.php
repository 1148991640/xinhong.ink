<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"/www/wwwroot/xinhong.ink/public/../application/admin/view/category/add.html";i:1587545711;}*/ ?>

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
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加商品类别</strong></div>
  <div class="body-content">
    <form method="post" class="form-x"  enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label>商品类别名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="name" data-validate="required:请输入商品类别名称" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>类别图标：</label>
        </div>
        <div class="field">
          <input type="file" class="input w50" value="" name="pic" data-validate="required:请选择类别图标" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body></html>