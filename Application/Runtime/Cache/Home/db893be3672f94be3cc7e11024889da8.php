<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo ($title); ?></title>
  <link rel="stylesheet" type="text/css" href="/Public/css/amazeui.min.css" />
  <link rel="stylesheet" type="text/css" href="/Public/css/admin.css" />
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
	<strong>图书管理系统</strong>  <small>LMS</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li><a href="<?php echo U('editProfile');?>"><span class="am-icon-user">  管理员： </span>  <?php echo session('username');?></a></li>
      <li><a href="<?php echo U('User/doLogout');?>"><span class="am-icon-power-off"></span> 退出</a></li>
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li><a href="<?php echo U('showMain');?>"><span class="am-icon-home"></span> 首页</a></li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav-1'}"><span class="am-icon-group"></span> 读者管理模块 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav-1">
            <li><a href="<?php echo U('addReader');?>" class="am-cf"><span class="am-icon-hand-o-right"></span>  添加读者</a></li>
            <li><a href="<?php echo U('updateReader');?>"><span class="am-icon-hand-o-right"></span>  修改读者</a></li>
            <li><a href="<?php echo U('deleteReader');?>"><span class="am-icon-hand-o-right"></span>  删除读者</a></li>
          </ul>
        </li>
		 <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav-2'}"><span class="am-icon-book"></span> 图书信息管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav-2">
            <li><a href="<?php echo U('addBook');?>" class="am-cf"><span class="am-icon-hand-o-right"></span>  图书入库</a></li>
            <li><a href="<?php echo U('updateBook');?>"><span class="am-icon-hand-o-right"></span>  图书更改</a></li>
            <li><a href="<?php echo U('deleteBook');?>"><span class="am-icon-hand-o-right"></span>  图书销毁</a></li>
          </ul>
        </li>
		<li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav-3'}"><span class="am-icon-shopping-cart"></span> 图书借阅管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav-3">
            <li><a href="<?php echo U('lendBook');?>" class="am-cf"><span class="am-icon-hand-o-right"></span>  图书借阅</a></li>
            <li><a href="<?php echo U('returnBook');?>"><span class="am-icon-hand-o-right"></span>  图书归还</a></li>
          </ul>
        </li>
		<li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav-4'}"><span class="am-icon-line-chart"></span> 系统信息统计 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav-4">
            <li><a href="admin-user.html" class="am-cf"><span class="am-icon-hand-o-right"></span>  图书总量统计</a></li>
            <li><a href="admin-help.html"><span class="am-icon-hand-o-right"></span>  按图书类别统计</a></li>
            <li><a href="admin-help.html"><span class="am-icon-hand-o-right"></span>  图书借阅排行</a></li>
            <li><a href="admin-help.html"><span class="am-icon-hand-o-right"></span>  读者借阅排行</a></li>
          </ul>
        </li>
		<li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav-5'}"><span class="am-icon-gears"></span> 系统设置 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav-5">
            <li><a href="admin-user.html" class="am-cf"><span class="am-icon-hand-o-right"></span>  读者类别设置</a></li>
        
            <li><a href="admin-help.html"><span class="am-icon-hand-o-right"></span>  图书类别设置</a></li>
            <li><a href="admin-help.html"><span class="am-icon-hand-o-right"></span>  用户管理</a></li>
            <li><a href="admin-help.html"><span class="am-icon-hand-o-right"></span>  罚金标准管理</a></li>
          </ul>
        </li>
		
            </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 公告</p>
		  <blockquote>
          <p>基于WEB的图书管理系统</p>
		  <small>—— by 郑堉</small></blockquote>
        </div>
      </div>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-tag"></span> tip</p>
          <p>Welcome to the LMS!</p>
        </div>
      </div>
    </div>
  </div> 
<div class="admin-content" >


    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>Home</small></div>
	  
    </div>
	<hr/>
    <div class="am-g">
      <div class="am-u-md-6">
        <div class="am-panel am-panel-primary">
          <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-1'}">服务器信息<span class="am-icon-chevron-down am-fr" ></span></div>
          <div id="collapse-panel-1" class="am-in">
            <table class="am-table am-table-bd am-table-bdrs am-table-striped am-table-hover">
              <tbody>
					<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr> 
							<td class="text"><?php echo ($key); ?>：</td>
							<td class="input"><?php echo ($v); ?></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?> 
              
            </table>
          </div>
        </div>
		<div class="am-panel am-panel-primary">
          <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-2'}">MySQL信息<span class="am-icon-chevron-down am-fr" ></span></div>
		  <div id="collapse-panel-2" class="am-in">
          <table class="am-table am-table-bd am-table-bdrs am-table-striped am-table-hover">
              <tbody>
					<?php if(is_array($mysql)): $i = 0; $__LIST__ = $mysql;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr> 
							<td class="text"><?php echo ($key); ?>：</td>
							<td class="input"><?php echo ($v); ?></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?> 
              
            </table>
			</div>
        </div>
		
      </div>
	  

		<div class="am-u-md-6">
			<div class="am-panel am-panel-danger">
				<div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-3'}">操作说明<span class="am-icon-chevron-down am-fr" ></span></div>
				<div id="collapse-panel-3" class="am-in">
					<table class="am-table am-table-bd am-table-bdrs am-table-striped am-table-hover ">
						<tbody>				
							<th style="text-align:center;" >日常操作</th>	
							<tr><td>借阅图书：可以帮助学生办理借阅图书手续，添加新的书籍借阅信息</td></tr>
							<tr><td>归还图书：添加归还书籍信息，同时删除相应的书籍借阅信息</td></tr>
							<tr><td>书籍查询：可以查询图书馆所有馆藏书籍，方便借阅</td></tr>
							<tr><td>个人借阅查询：可以查询某个学生所有的借阅信息，方便管理</td></tr>
							<th style="text-align:center;">书籍管理</th>
							<tr><td>书籍入库：可以添加新的书籍信息，需录入完整信息</td></tr>
							<tr><td>书籍管理：可以编辑错误的书籍信息以及删除无效的书籍信息</td></tr>
							<th style="text-align:center;">系统查询</th>
							<tr><td>系统统计：可以归总所有图书库存以及借阅信息，方便掌握图书馆状况</td></tr>
					</table>
				</div>
			</div>
		</div>
   
</div>
</div>
</div>

<a class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
  <hr>
  <p class="am-padding-left">by yu.Zheng © 2015 AllMobilize, Inc. </p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script type="text/javascript" src="/Public/js/polyfill/rem.min.js"></script>
<script type="text/javascript" src="/Public/js/polyfill/respond.min.js"></script>
<script type="text/javascript" src="/Public/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/js/amazeui.min.js"></script>
<!--<![endif]-->
<script type="text/javascript" src="/Public/js/app.js"></script>
</body>
</html>