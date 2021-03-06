<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/login.css">
    <style type="text/css">
        .login-bg{
            background: url(/Public/Admin/img/login-bg-8.jpg) no-repeat center center fixed;
            background-size: 100% 100%;
        }
    </style>
  </head>
  
  <body class="login-bg">
    <div class="login-box">
        <header>
            <h1>后台管理系统</h1>
        </header>
        <div class="login-main">
			<form action="/index.php/Admin/login" class="form" method="post">          
				<div class="form-item">
					<label class="login-icon">
						<i></i>
					</label>
					<input type="text" id='username' name="username" placeholder="这里输入登录名" required>
				</div>
                <div class="form-item">
                    <label class="login-icon">
                        <i></i>
                    </label>
                    <input type="password" id="password" name="password" placeholder="这里输入密码">
                </div>
                <div class="form-item verify">
                    <label class="login-icon">
                        <i></i>
                    </label>
                    <input type="text" id='verify' class="pull-left" name="verify" placeholder="这里输入验证码">
                    <img class="pull-right" src="/Public/Admin/img/verify.png">
                    <div class="clear"></div>
                </div>
				<div class="form-item">
					<button type="button" class="login-btn">
						登&emsp;&emsp;录
					</button>
				</div>
			</form>
            <div class="msg"></div>
		</div>
    </div>
    <script type="text/javascript" src='/Public/Admin/js/jquery-3.1.1.min.js'></script>
    <script type="text/javascript">
        $(function(){
            $('.login-btn').on('click',function(){
                if($('#username').val() == ''){
                    $('.msg').html('登录名不能为空');
                    return;
                }
                if($('#password').val() == ''){
                    $('.msg').html('密码不能为空');
                    return;
                }
                // if($('#verify').val() == ''){
                //     $('.msg').html('验证码不能为空');
                //     return;
                // }
                $('form').submit();

            });
        })
    </script>
  </body>
</html>