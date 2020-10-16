<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"/www/wwwroot/xinhong.ink/public/../application/admin/view/index/index.html";i:1587563339;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="renderer" content="webkit">
    <title>新鸿医疗</title>
    <link rel="stylesheet" href="/static/css/pintuer.css">
    <link rel="stylesheet" href="/static/css/admin.css">
    <script src="/static/js/jquery.js"></script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
    <div class="logo margin-big-left fadein-top">
        <h1>新鸿医疗</h1>
    </div>
    <div class="head-l" style="float: right;margin-right: 50px">&nbsp;&nbsp;
        <a href="#" class="button button-little bg-blue"><span class="icon-user"></span> <?php echo \think\Session::get('admin_name'); ?></a>
        &nbsp;&nbsp;
        <a class="button button-little bg-red" href="<?php echo url('Login/logout'); ?>"><span class="icon-power-off"></span>
            退出登录</a></div>
</div>
<div class="leftnav">
    <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
    <h2><span class="icon-pencil-square-o"></span>基本管理</h2>
    <ul style="display:block">

        <li><a href="<?php echo url('Category/all'); ?>" class="on" target="right"><span class="icon-caret-right"></span>商品分类</a></li>
        <li><a href="<?php echo url('Goods/all'); ?>"  target="right"><span class="icon-caret-right"></span>商品列表</a></li>
        <li><a href="<?php echo url('Orders/all'); ?>"  target="right"><span class="icon-caret-right"></span>订单管理</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>系统管理</h2>
    <ul>
        <?php if(\think\Session::get('admin_id') == '1'): ?>
        <li><a href="<?php echo url('Admin/all'); ?>" target="right"><span class="icon-caret-right"></span>管理员管理</a></li>
        <?php endif; ?>
        <li><a href="<?php echo url('Index/pass'); ?>" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
        <li><a href="<?php echo url('Login/logout'); ?>"><span class="icon-caret-right"></span>退出系统</a></li>
    </ul>
</div>
<script type="text/javascript">
    $(function () {
        $(".leftnav h2").click(function () {
            $(this).next().slideToggle(200);
            $(this).toggleClass("on");
        })
        $(".leftnav ul li a").click(function () {
            $("#a_leader_txt").text($(this).text());
            $(".leftnav ul li a").removeClass("on");
            $(this).addClass("on");
        })
    });
</script>
<ul class="bread">
    <li><a href="/index.php" target="_self" class="icon-home"> 首页</a></li>
    <li><a href="#" id="a_leader_txt"></a></li>

</ul>
<div class="admin">
    <iframe scrolling="auto" rameborder="0" src="<?php echo url('Category/all'); ?>" name="right" width="100%" height="100%"></iframe>
</div>
</body>
</html>