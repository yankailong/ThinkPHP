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
<style type="text/css">
    table img{max-width: 100px;}
</style>
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
        <h1 class="page-title">商品列表</h1>
    </div>

    <div class="well">
        <!-- search button -->
        <form action="" method="get" class="form-search">
            <div class="row-fluid" style="text-align: left;">
                <div class="pull-left span4 unstyled">
                    <p> 商品名称：<input class="input-medium" name="" type="text"></p>
                </div>
            </div>
            <button type="submit" class="btn">查找</button>
            <a class="btn btn-primary" onclick="javascript:window.location.href='/index.php/Admin/Goods/add'">新增</a>
        </form>
    </div>
    <div class="well">
        <!-- table -->
        <table class="table table-bordered table-hover table-condensed">
            <thead>
                <tr>
                    <th>编号</th>
                    <th>商品名称</th>
                    <th>商品价格</th>
                    <th>商品数量</th>
                    <th>商品大图</th>
                    <th>商品小图</th>
                    <th>添加时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="success">
                        <td><?php echo ($vol["id"]); ?></td>
                        <td><a href="/Public/Admin/javascript:void(0);"><?php echo ($vol["goods_name"]); ?></a></td>
                        <td><?php echo ($vol["goods_price"]); ?></td>
                        <td><?php echo ($vol["goods_number"]); ?></td>
                        <td><img src="/Public/Admin/img/goods01.jpg"></td>
                        <td><img src="/Public/Admin/img/goods01_thumb.jpg"></td>
                        <td><?php echo (date("Y-m-d H:i:s",$vol["goods_create_time"])); ?></td>
                        <td>
                            <a href="/index.php/Admin/Goods/edit/id/<?php echo ($vol["id"]); ?>"> 编辑 </a>
                            <a href="/index.php/Admin/Goods/delete" onclick="if(confirm('确认删除？')) location.href='/index.php/Admin/Goods/delete/id/<?php echo ($vol["id"]); ?>'"> 删除 </a>
                        </td>
                    </tr><?php endforeach; endif; ?>
                <!-- <tr class="error">
                    <td>2</td>
                    <td><a href="/Public/Admin/javascript:void(0);">百草味 坚果零食干果 内含开果器 夏威夷果奶油味200g/袋</a></td>
                    <td>16.90</td>
                    <td>300</td>
                    <td><img src="/Public/Admin/img/goods02.jpg"></td>
                    <td><img src="/Public/Admin/img/goods02_thumb.jpg"></td>
                    <td>2017-04-01 08:00:00</td>
                    <td>
                        <a href="/Public/Admin/javascript:void(0);"> 编辑 </a>
                        <a href="/Public/Admin/javascript:void(0);" onclick="if(confirm('确认删除？')) location.href='#'"> 删除 </a>
                    </td>
                </tr>
                <tr class="warning">
                    <td>3</td>
                    <td><a href="/Public/Admin/javascript:void(0);">玖原农珍 广西百香果 3斤水果 大果约80-90g </a></td>
                    <td>35.80</td>
                    <td>100</td>
                    <td><img src="/Public/Admin/img/goods03.jpg"><</td>
                    <td><img src="/Public/Admin/img/goods03_thumb.jpg"><</td>
                    <td>2017-04-01 08:00:00</td>
                    <td>
                        <a href="/Public/Admin/javascript:void(0);"> 编辑 </a>
                        <a href="/Public/Admin/javascript:void(0);" onclick="if(confirm('确认删除？')) location.href='#'"> 删除 </a>
                    </td>
                </tr>
                <tr class="info">
                    <td>4</td>
                    <td><a href="/Public/Admin/javascript:void(0);">三只松鼠 坚果炒货 零食奶油味 碧根果225g/袋</a></td>
                    <td>22.90</td>
                    <td>300</td>
                    <td><img src="/Public/Admin/img/goods04.jpg"></td>
                    <td><img src="/Public/Admin/img/goods04_thumb.jpg"></td>
                    <td>2017-04-01 08:00:00</td>
                    <td>
                        <a href="/Public/Admin/javascript:void(0);"> 编辑 </a>
                        <a href="/Public/Admin/javascript:void(0);" onclick="if(confirm('确认删除？')) location.href='#'"> 删除 </a>
                    </td>
                </tr> -->
            </tbody>
        </table>
        <!-- pagination -->
        <div class="pagination">
            <ul>
                <li><a href="/Public/Admin/#">Prev</a></li>
                <li><a href="/Public/Admin/#">1</a></li>
                <li><a href="/Public/Admin/#">2</a></li>
                <li><a href="/Public/Admin/#">3</a></li>
                <li><a href="/Public/Admin/#">4</a></li>
                <li><a href="/Public/Admin/#">Next</a></li>
            </ul>
        </div>
    </div>
    
    <!-- footer -->
    <footer>
        <hr>
        <p>© 2017 <a href="/Public/Admin/javascript:void(0);" target="_blank">ADMIN</a></p>
    </footer>
</div>
</body>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="/Public/Admin/http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/Public/Admin/js/jquery-1.8.1.min.js"></script>
<script src="/Public/Admin/js/bootstrap.min.js"></script>
<!-- 日期控件 -->
<script src="/Public/Admin/js/calendar/WdatePicker.js"></script>
</html>