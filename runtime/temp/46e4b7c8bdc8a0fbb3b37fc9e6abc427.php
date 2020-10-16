<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"/www/wwwroot/xinhong.ink/public/../application/admin/view/admin/add.html";i:1587545351;}*/ ?>

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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加管理员</strong></div>
  <div class="body-content">
    <form method="post" class="form-x"  enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label>登录账号：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="name" data-validate="required:请输入登录账号" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>登录密码：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="pwd" data-validate="required:请输入登录密码" />
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