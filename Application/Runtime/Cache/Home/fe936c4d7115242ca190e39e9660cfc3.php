<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title><?php echo ($title); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
  <link rel="stylesheet" type="text/css" href="/Public/css/amazeui.min.css" />
	<link rel="stylesheet" type="text/css" href="/Public/css/amaze.min.css" />
	<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/js/handlebars.min.js"></script>
	<script type="text/javascript" src="/Public/js/amazeui.widgets.helper.js"></script>
	<script type="text/javascript" src="/Public/js/amazeui.min.js"></script>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>图书管理系统
</h1>
    <p>Library management system<br/></p>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
  <div class="am-form-group"></div>
    <form method="post" class="am-form" action="<?php echo ($action); ?>" >
      <label for="username">用户名:</label>
      <input type="text" name="username" id="username" value="" placeholder="请输入用户名(至少3个字符)" minlength="3" required/>
      <br>
      <label for="password">密码:</label>
      <input type="password" name="password" id="password" value="" placeholder="请输入密码" minlength="6" required/>
      <br>
      <label for="remember-me">
        <input id="remember-me" type="checkbox">
        记住密码
      </label>
      <br />
	  <hr data-am-widget="divider" style="" class="am-divider am-divider-one am-no-layout">
	  <hr data-am-widget="divider" style="" class="am-divider am-divider-one am-no-layout">
      <div class="am-cf">
        <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-lg am-btn-block">
		<hr data-am-widget="divider" style="" class="am-divider am-divider-one am-no-layout">
		<hr data-am-widget="divider" style="" class="am-divider am-divider-one am-no-layout">
        <input type="button" name="" value="注 册 " onclick="window.location.href='/Home/User/showReg'" class="am-btn am-btn-success am-btn-lg am-btn-block" >
      </div>
    </form>
	 <hr data-am-widget="divider" style="" class="am-divider am-divider-one am-no-layout">
	  <hr data-am-widget="divider" style="" class="am-divider am-divider-one am-no-layout">
    <hr>
	
    <p>by yu.Zheng © 2015 AllMobilize, Inc. </p>
	
  </div>
</div>
</body>
</html>