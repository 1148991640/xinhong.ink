<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"D:\phpStudy\PHPTutorial\WWW\xinhong.ink\public/../application/admin\view\index\pass.html";i:1589899393;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="renderer" content="webkit">
    <title>新鸿医疗</title>
    <link rel="stylesheet" href="/xinhong.ink/public/static/css/pintuer.css">
    <link rel="stylesheet" href="/xinhong.ink/public/static/css/admin.css">
    <script src="/xinhong.ink/public/static/js/jquery.js"></script>
    <script src="/xinhong.ink/public/static/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong><span class="icon-key"></span> 修改密码</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" >
            <div class="form-group">
                <div class="label">
                    <label for="sitename">管理员帐号：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <?php echo \think\Session::get('admin_name'); ?>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="pwd">原始密码：</label>
                </div>
                <div class="field">
                    <input type="password" class="input w50" id="pwd" name="pwd" size="50" placeholder="请输入原始密码"
                           data-validate="required:请输入原始密码"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="newpwd">新密码：</label>
                </div>
                <div class="field">
                    <input type="password" class="input w50" name="newpwd" size="50" placeholder="请输入新密码"
                           data-validate="required:请输入新密码,length#>=4:新密码不能小于4位"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="repwd">确认新密码：</label>
                </div>
                <div class="field">
                    <input type="password" class="input w50" name="repwd" size="50" placeholder="请再次输入新密码"
                           data-validate="required:请再次输入新密码,repeat#newpwd:两次输入的密码不一致"/>
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
</body>
</html>