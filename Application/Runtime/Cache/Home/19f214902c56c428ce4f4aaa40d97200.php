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
      <li><a href="<?php echo U('editProfile');?>"><span class="am-icon-user"></span>  <?php echo session('number');?></a></li>
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
		<li><a href="admin-form.html"><span class="am-icon-pencil-square-o"></span> 书籍查询</a></li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav-1'}"><span class="am-icon-book"></span> 图书管理模块 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav-1">
            <li><a href="admin-user.html" class="am-cf"><span class="am-icon-hand-o-right"></span>  书籍管理</a></li>
            <li><a href="<?php echo U('bookInfo');?>"><span class="am-icon-hand-o-right"></span>  书籍入库</a></li>
          </ul>
        </li>
		 <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav-2'}"><span class="am-icon-paperclip"></span> 图书借还模块 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav-2">
            <li><a href="admin-user.html" class="am-cf"><span class="am-icon-hand-o-right"></span>  借阅图书</a></li>
            <li><a href="admin-help.html"><span class="am-icon-hand-o-right"></span>  归还图书</a></li>
          </ul>
        </li>
		<li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav-3'}"><span class="am-icon-binoculars"></span> 系统查询模块 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav-3">
            <li><a href="admin-user.html" class="am-cf"><span class="am-icon-hand-o-right"></span>  系统统计</a></li>
            <li><a href="admin-help.html"><span class="am-icon-hand-o-right"></span>  新书入库</a></li>
          </ul>
        </li>
		<li><a href="admin-table.html"><span class="am-icon-leanpub"></span> 个人借阅查询</a></li>
            </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 公告</p>
          <p>时光静好，与君语；细水流年，与君同。余军共勉—— LMS</p>
        </div>
      </div>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-tag"></span> wiki</p>
          <p>Welcome to the LMS!</p>
        </div>
      </div>
    </div>
  </div>
  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">书籍入库</strong> / <small>Book Storage</small></div>
    </div>

    <hr/>
      <div class="am-u-sm-12 am-u-md-8 ">
        <form class="am-form am-form-horizontal" method="post" action="<?php echo ($action); ?>">
          <div class="am-form-group">
            <label for="bookname" class="am-u-sm-3 am-form-label">书籍名称 / Name</label>
            <div class="am-u-sm-9">
              <input type="text" id="bookname" name="bookname"placeholder="请输入书籍名称">
              
            </div>
          </div>
		  <div class="am-form-group">
            <label for="isbn" class="am-u-sm-3 am-form-label">书籍编码 / ISBN</label>
            <div class="am-u-sm-9">
              <input type="text" id="isbn" name="isbn"placeholder="请输入书籍编码">
            </div>
          </div>
		  <div class="am-u-sm-12 am-u-md-12 am-form-group">
			<label for="class" class="am-u-sm-3 am-form-label">书籍类别 / Class</label>			
			&nbsp;&nbsp;<select id="class"  name="class" data-am-selected="{ btnStyle: 'default'}" >
			
					<option value="A">A.马、列、毛主义</option>
					<option value="B">B.哲学</option>
					<option value="C">C.社会科学总论</option>
					<option value="D">D.政治、法律</option>
					<option value="E">E.军事</option>
					<option value="F">F.经济</option>
					<option value="G">G.文化、科学、教育、体育</option>
					<option value="H">H.语言、文字</option>
					<option value="I">I.文学</option>
					<option value="J">J.艺术</option>
					<option value="K">K.历史、地理</option>
					<option value="N">N.自然科学总论</option>
					<option value="O">O.数理科学和化学</option>
					<option value="P">P.天文学、地理科学</option>
					<option value="Q">Q.生物科学</option>
					<option value="R">R.医学、卫生</option>
					<option value="S">S.农业科学</option>
					<option value="T">T.工业技术</option>
					<option value="U">U.交通运输</option>
					<option value="V">V.航空、航天</option>
					<option value="Z">Z.综合性图书</option>
				
			</select>
		  </div>
		  <div class="am-form-group">
            <label for="author" class="am-u-sm-3 am-form-label">作者 / Author</label>
            <div class="am-u-sm-9">
              <input type="text" id="author" name="author"placeholder="请输入作者名称">              
            </div>
          </div>
		  <div class="am-form-group">
            <label for="publish" class="am-u-sm-3 am-form-label">出版社 / Publish</label>
            <div class="am-u-sm-9">
              <input type="text" id="publish" name="publish"placeholder="请输入出版社名称">              
            </div>
          </div>
		  <div class="am-form-group">
            <label for="tsdj" class="am-u-sm-3 am-form-label">图书单价 / Price</label>
            <div class="am-u-sm-9">
              <input type="text" id="tsdj" name="tsdj"placeholder="请输入书籍单价">              
            </div>
          </div>
		  <div class="am-form-group">
            <label for="rksj" class="am-u-sm-3 am-form-label">入库时间 / Time</label>
            <div class="am-u-sm-9">
              <input type="text" id="rksj" name="ruksj"placeholder="请输入入库时间(格式：yyyy-mm-dd)">              
            </div>
          </div>
		  <div class="am-form-group">
            <label for="cfwz" class="am-u-sm-3 am-form-label">存放位置 / Location</label>
            <div class="am-u-sm-9">
              <input type="text" id="cfwz" name="cfwz"placeholder="请输入存放位置">              
            </div>
          </div>
		<div class="am-form-group">
		<label for="sfgs" class="am-u-sm-3 am-form-label">是否挂失 / Loss</label>
		<div class="am-btn-group am-u-sm-9" data-am-button="">
              <label class="am-btn am-btn-danger ">
               <input name="options" id="option1" type="radio" value="yes"> 是
              </label>
              <label class="am-btn am-btn-danger ">
                <input name="options" id="option2" type="radio" value="no"> 否
              </label>
            </div>
		</div>
          <div class="am-form-group">
            <label for="sfgs" class="am-u-sm-3 am-form-label">电子邮件 / Email</label>
            <div class="am-u-sm-9">
              <input type="email" id="user-email" placeholder="输入你的电子邮件 / Email">
              
            </div>
          </div>
		<div class="am-form-group">
            <label for="kcsl" class="am-u-sm-3 am-form-label">库存数量 / Stock</label>
            <div class="am-u-sm-9">
              <input type="text" id="kcsl" name="kcsl"placeholder="请输入库存数量">              
            </div>
          </div>
		  <div class="am-form-group">
            <label for="jcsl" class="am-u-sm-3 am-form-label">借出数量 / Lend</label>
            <div class="am-u-sm-9">
              <input type="text" id="jcsl" name="jcsl"placeholder="请输入借出数量">              
            </div>
          </div>
          <div class="am-form-group">
            <label for="intro" class="am-u-sm-3 am-form-label">简介 / Intro</label>
            <div class="am-u-sm-9">
              <textarea class="" rows="5" id="intro" name="intro" placeholder="请输入书籍简介"></textarea>
              <small>请控制在200字以内</small>
            </div>
          </div>

          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <input type="submit" value="确定入库"class="am-btn am-btn-primary" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- content end -->

</div>

<a class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
  <hr>
  <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
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