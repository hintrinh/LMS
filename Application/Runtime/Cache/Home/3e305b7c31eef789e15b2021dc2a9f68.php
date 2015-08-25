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
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">修改读者</strong> / <small>Update Reader</small></div>
    </div>

    <hr/>
      <div class="am-u-sm-12 am-u-md-8 ">
        <form class="am-form am-form-horizontal" method="post" action="<?php echo ($action); ?>">
          
		  
		  <div class="am-form-group">
            <label for="reader_id" class="am-u-sm-3 am-form-label">读者ID / Id</label>
            <div class="am-u-sm-9">
              <input type="text" id="reader_id" name="reader_id" value="<?php echo ($id); ?>" />
              
            </div>
			<br> </br>
		  <div class="am-form-group">
            <label for="reader_name" class="am-u-sm-3 am-form-label">读者姓名 / Name</label>
            <div class="am-u-sm-9">
              <input type="text" id="reader_name" name="reader_name"placeholder="请输入读者姓名">
              
            </div>
          </div>
		  
		  <div class="am-u-sm-12 am-u-md-12 am-form-group">
			<label for="reader_types" class="am-u-sm-3 am-form-label" >读者类别 / Types</label>			
			&nbsp;&nbsp;<select id="reader_types"  name="reader_types" data-am-selected="{ btnStyle: 'default'}" >
			
					<option value="学生">A.学生</option>
					<option value="老师">B.老师</option>
					
				
			</select>
		  </div>
		  <div class="am-form-group">
            <label for="reader_card" class="am-u-sm-3 am-form-label">借书卡号 / Card</label>
            <div class="am-u-sm-9">
              <input type="text" id="reader_card" name="reader_card"placeholder="请输入借书卡号">              
            </div>
          </div>
		  <div class="am-form-group">
            <label for="reader_department" class="am-u-sm-3 am-form-label">系别 / Department</label>
            <div class="am-u-sm-9">
              <input type="text" id="reader_department" name="reader_department"placeholder="请输入读者所属系别">              
            </div>
          </div>
		  <div class="am-form-group">
            <label for="reader_class" class="am-u-sm-3 am-form-label">班级 / Class</label>
            <div class="am-u-sm-9">
              <input type="text" id="reader_class" name="reader_class"placeholder="请输入读者所属班级">              
            </div>
          </div>
		  

          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <input type="submit" value="确认修改"class="am-btn am-btn-primary" />
            </div>
          </div>
        </form>
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