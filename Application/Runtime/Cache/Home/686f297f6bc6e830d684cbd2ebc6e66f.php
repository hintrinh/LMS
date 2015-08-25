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
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">修改图书信息</strong> / <small>Update Book</small></div>
    </div>

    <hr/>
      <div class="am-u-sm-12 am-u-md-12 ">
		<table class="am-table  am-table-radius am-table-striped am-table-hover  am-scrollable-horizontal">
			<thead>
				<tr >
					<th>id</th>
					<th>书籍类别</th>
					<th>书籍名称</th>
					<th>书籍编码</th>
					<th>作者</th>
					<th>出版社</th>
					<th>图书单价</th>
					<th>入库时间</th>
					<th>存放位置</th>
					<th>入库数量</th>
					<th>书籍简介</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
					<td><?php echo ($vo["book_id"]); ?></td>
					<td><?php echo ($vo["class"]); ?></td>
					<td><?php echo ($vo["bookname"]); ?></td>
					<td><?php echo ($vo["isbn"]); ?></td>
					<td><?php echo ($vo["author"]); ?></td>
					<td><?php echo ($vo["publish"]); ?></td>
					<td><?php echo ($vo["tsdj"]); ?></td>
					<td><?php echo ($vo["rksj"]); ?></td>
					<td><?php echo ($vo["cfwz"]); ?></td>
					<td><?php echo ($vo["rksl"]); ?></td>
					<td><?php echo ($vo["intro"]); ?></td>
					<td>
						<div class="am-btn-group am-btn-group-xs">
							<a class="am-btn  am-btn-warning am-btn-xs " href="editBook/id/<?php echo ($vo["book_id"]); ?>">
								<span class="am-icon-pencil-square-o am-text-sm" >&nbsp;&nbsp;修改</span>
							</a>
						
						</div>
					</td>
				</tr><?php endforeach; endif; ?>
			</tbody>
		</table>
		  <div class="page am-margin am-u-sm-12 am-u-sm-centered am-cf">
			  <?php echo ($page); ?>
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