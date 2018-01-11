<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>后台管理系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/main.css">
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap-responsive.min.css">

</head>
<body>
<!-- 上 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <ul class="nav pull-right">
                <li id="fat-menu" class="dropdown">
                    <a href="/Public/Admin/#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-user icon-white"></i> admin
                        <i class="icon-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="/Public/Admin/javascript:void(0);">修改密码</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="/Public/Admin/javascript:void(0);">安全退出</a></li>
                    </ul>
                </li>
            </ul>
            <a class="brand" href="/Public/Admin/index.html"><span class="first">后台管理系统</span></a>
            <ul class="nav">
                <li class="active"><a href="/Public/Admin/javascript:void(0);">首页</a></li>
                <li><a href="/Public/Admin/javascript:void(0);">系统管理</a></li>
                <li><a href="/Public/Admin/javascript:void(0);">权限管理</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- 左 -->
<div class="sidebar-nav">
    <a href="/Public/Admin/#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>权限管理</a>
    <ul id="error-menu" class="nav nav-list collapse">
        <li><a href="/Public/Admin/javascript:void(0);">管理员列表</a></li>
        <li><a href="/Public/Admin/javascript:void(0);">管理员新增</a></li>
        <li><a href="/Public/Admin/javascript:void(0);">角色管理</a></li>
        <li><a href="/Public/Admin/javascript:void(0);">权限管理</a></li>
    </ul>
    <a href="/Public/Admin/#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-exclamation-sign"></i>商品管理</a>
    <ul id="accounts-menu" class="nav nav-list collapse in">
        <li><a href="/Public/Admin/javascript:void(0);">商品列表</a></li>
        <li><a href="/Public/Admin/javascript:void(0);">商品新增</a></li>
        <li><a href="/Public/Admin/javascript:void(0);">商品类型</a></li>
        <li><a href="/Public/Admin/javascript:void(0);">商品分类</a></li>
    </ul>
    <a href="/Public/Admin/#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-exclamation-sign"></i>订单管理</a>
    <ul id="accounts-menu" class="nav nav-list collapse">
        <li><a href="/Public/Admin/javascript:void(0);">订单列表</a></li>
        <li><a href="/Public/Admin/javascript:void(0);">订单新增</a></li>
    </ul>
    <a href="/Public/Admin/#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-exclamation-sign"></i>会员管理</a>
    <ul id="accounts-menu" class="nav nav-list collapse">
        <li><a href="/Public/Admin/javascript:void(0);">用户列表</a></li>
        <li><a href="/Public/Admin/javascript:void(0);">用户新增</a></li>
    </ul>
    <a href="/Public/Admin/#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-exclamation-sign"></i>系统管理</a>
    <ul id="dashboard-menu" class="nav nav-list collapse">
        <li><a href="/Public/Admin/javascript:void(0);">密码修改</a></li>
    </ul>
</div>
<!-- 右 -->
<div class="content">
    <div class="header">
        <h1 class="page-title">商品详情</h1>
    </div>

    <div class="well">
        <label>商品名称：</label>
        <div>宏辉果蔬 苹果 烟台红富士 12枚75mm 单果约170-190g 总重4.2斤</div>
        <label>商品价格：</label>
        <div>25.00</div>
        <label>商品数量：</label>
        <div>2000</div>
        <label>商品图片：</label>
        <div><img src="/Public/Admin/img/goods01_thumb.jpg"></div>
        <label>商品简介：</label>
        <div>商品简介商品简介商品简介</div>
    </div>
    <!-- footer -->
    <footer>
        <hr>
        <p>© 2017 <a href="javascript:void(0);" target="_blank">ADMIN</a></p>
    </footer>
</div>
</body>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/Public/Admin/js/jquery-1.8.1.min.js"></script>
<script src="/Public/Admin/js/bootstrap.min.js"></script>
</html>