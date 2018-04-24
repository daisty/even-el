<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:93:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view/admin\index.html";i:1467108977;s:94:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view/admin\layout.html";i:1465732224;s:95:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view/common\layout.html";i:1486473915;s:92:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view/admin\head.html";i:1484838453;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $webTitle; ?>-<?php echo config('web_name'); ?></title>
	<meta name="description" content="<?php echo config('web_description'); ?>">
	<meta name="keywords" content="<?php echo config('web_keywords'); ?>">
    <link href="/assets/style1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/style1/css/core.css" rel="stylesheet" type="text/css">
    <link href="/assets/style1/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/assets/style1/css/components.css" rel="stylesheet" type="text/css">
    <link href="/assets/style1/css/pages.css" rel="stylesheet" type="text/css">
    <link href="/assets/style1/css/menu.css" rel="stylesheet" type="text/css">
    <link href="/assets/style1/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="/assets/style1/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
    <script src="/assets/style1/js/modernizr.min.js"></script>
	<script src="/assets/style1/js/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="/" class="logo"><i class="md md-terrain"></i> <span> <?php echo config('web_name'); ?> </span></a>
            </div>
            <!-- End Logo container-->
            <div class="menu-extras">
                <ul class="nav navbar-nav navbar-right pull-right">

                    <li class="dropdown user-box">
                        <a href="" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown"
                           aria-expanded="true">
                            <img src="http://q1.qlogo.cn/g?b=qq&amp;nk=<?php echo $userInfo['qq']; ?>&amp;s=160" alt="user-img"
                                 class="img-circle user-img">
                            <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="<?php echo url('index/Panel/index'); ?>"><i class="fa fa-users"></i> 用户面板</a></li>
                            <li><a href="<?php echo url('index/Index/logout'); ?>" onclick="return confirm('确认退出登录？');"><i
                                    class="md md-exit-to-app"></i> 安全退出</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

        </div>
    </div>

    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="<?php echo checkIfActive('index'); ?>">
                        <a href="<?php echo url('index'); ?>"><i class="md md-home"></i> <span>管理后台</span> </a>
                    </li>

                    <li class="<?php echo checkIfActive('mainset,emailset,selectmb,payset,webset,priceset,appset'); ?> has-submenu">
                        <a href="#"><i class="fa fa-edit"></i> <span>站点配置</span> </a>
                        <ul class="submenu">
                            <?php if(ZID == 1): ?>
                            <li><a href="<?php echo url('mainSet'); ?>"><i class="fa fa-home"></i> 主站配置</a></li>
                            <li><a href="<?php echo url('emailSet'); ?>"><i class="fa fa-envelope"></i> 邮箱配置</a></li>
                            <!--li><a href="<?php echo url('setDhbl'); ?>"><i class="fa fa-exchange"></i> 元宝兑换比例</a></li-->
                            <li><a href="<?php echo url('selectMb'); ?>"><i class="fa fa-sellsy"></i> 选择模板</a></li>
							<li><a href="<?php echo url('paySet'); ?>"><i class="fa fa-exchange"></i> 在线支付设置</a></li>
                            <?php endif; ?>
                            <li><a href="<?php echo url('webSet'); ?>"><i class="fa fa-edit"></i> 站点设置</a></li>
							<li><a href="<?php echo url('priceSet'); ?>"><i class="fa fa-money"></i> 价格设置</a></li>
							<li><a href="<?php echo url('appSet'); ?>"><i class="fa fa-cog"></i> APP设置</a></li>
                        </ul>
                    </li>

                    <li class="<?php echo checkIfActive('userlist,kmlist,kami,qqlist'); ?> has-submenu">
                        <a href="#"><i class="fa fa-list-ul"></i> <span>数据管理</span> </a>
                        <ul class="submenu">
                            <li><a href="<?php echo url('userList'); ?>"><i class="fa fa-user"></i> 用户管理</a></li>
                            <li><a href="<?php echo url('kmList'); ?>"><i class="fa fa-caret-square-o-right"></i> 余额卡密管理</a></li>
							<li><a href="<?php echo url('kami'); ?>"><i class="md md-list"></i> 代挂卡密管理</a></li>
							<?php if(ZID == 1): ?>
							<li><a href="<?php echo url('qqList'); ?>"><i class="fa fa-qq"></i> ＱＱ管理</a></li>
							<?php endif; ?>
                        </ul>
                    </li>

					<li class="<?php echo checkIfActive('tixian'); ?> has-submenu">
                        <a href="<?php echo url('tixian'); ?>"><i class="fa fa-money "></i><span>余额提现</span> </a>
                    </li>

                    <?php if(ZID == 1 or config('web_super')): ?>
                    <li class="<?php echo checkIfActive('ktfz'); ?> has-submenu">
                        <a href="<?php echo url('ktfz'); ?>"><i class="fa fa-share-alt "></i><span>开通分站</span> </a>
                    </li>
                    <?php endif; if(ZID == 1 or config('web_super')): ?>
                    <li class="<?php echo checkIfActive('weblist'); ?> has-submenu">
                        <a href="<?php echo url('webList'); ?>"><i class="fa fa-list-alt"></i><span>分站列表</span> </a>
                    </li>
					<?php endif; if(ZID == 1): ?>
                    <li class="<?php echo checkIfActive('export'); ?> has-submenu">
                        <a href="#"><i class="fa fa-expand"></i> <span>数据导出</span> </a>
                        <ul class="submenu">
                            <?php if(is_array($webTools) || $webTools instanceof \think\Collection): $i = 0; $__LIST__ = $webTools;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$webTool): $mod = ($i % 2 );++$i;?>
                            <li><a href="<?php echo url('export',['tid'=>$webTool['tid']]); ?>"><i
                                    class="fa fa-star"></i> <?php echo $webTool['name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li>
                    <li class="<?php echo checkIfActive('import'); ?> has-submenu">
                        <a href="#"><i class="fa fa-sign-in"></i> <span>数据导入</span> </a>
                        <ul class="submenu">
                            <li><a href="<?php echo url('import'); ?>?kind=pwd"><i class="fa fa-star"></i> 导入密码错误QQ</a></li>
                            <li><a href="<?php echo url('import'); ?>?kind=bh"><i class="fa fa-star"></i> 导入登录保护QQ</a></li>
                            <li><a href="<?php echo url('import'); ?>?kind=dj"><i class="fa fa-star"></i> 导入账号冻结QQ</a></li>
                        </ul>
                    </li>
                    <?php endif; ?>

                </ul>
                <!-- End navigation menu  -->
            </div>
        </div>
    </div>
</header>
<!-- End Navigation Bar-->
<div class="wrapper">
    <div class="container">
        
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">
            <ul class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/"> 首页</a></li>
                <li class="active">管理后台</li>
            </ul>
        </h4>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-sm-6 col-lg-3">
        <div class="mini-stat clearfix bx-shadow bg-info">
            <span class="mini-stat-icon"><i class="fa fa-users"></i></span>
            <div class="mini-stat-info text-right">
                <span class="counter"><?php echo $amount['user']; ?></span>
                总用户数
            </div>
            <div class="tiles-progress">
                <div class="m-t-20">
                    <h5 class="text-uppercase text-white m-0">今日增加<span class="pull-right"><?php echo $amount['juser']; ?></span></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-3">
        <div class="mini-stat clearfix bg-purple bx-shadow">
            <span class="mini-stat-icon"><i class="fa fa-qq"></i></span>
            <div class="mini-stat-info text-right">
                <span class="counter"><?php echo $amount['qq']; ?></span>
                站点总QQ数
            </div>
            <div class="tiles-progress">
                <div class="m-t-20">
                    <h5 class="text-uppercase text-white m-0">今日新增加<span class="pull-right"><?php echo $amount['jqq']; ?></span></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-lg-3">
        <div class="mini-stat clearfix bg-primary bx-shadow">
            <span class="mini-stat-icon"><i class="fa fa-arrow-circle-o-up"></i></span>
            <div class="mini-stat-info text-right">
                <span class="counter"><?php echo $amount['order']; ?></span>
                站点总订单数
            </div>
            <div class="tiles-progress">
                <div class="m-t-20">
                    <h5 class="text-uppercase text-white m-0">今日新增加<span class="pull-right"><?php echo $amount['jorder']; ?></span>
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-lg-3">
        <div class="mini-stat clearfix bg-success bx-shadow">
            <span class="mini-stat-icon"><i class="fa fa-share-alt"></i></span>
            <div class="mini-stat-info text-right">
                <span class="counter"><?php echo $amount['web']; ?></span>
                分站数
            </div>
            <div class="tiles-progress">
                <div class="m-t-20">
                    <h5 class="text-uppercase text-white m-0">今日新增加<span class="pull-right"><?php echo $amount['jweb']; ?></span>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-danger">
            <div class="panel-body">
			<?php echo config('zz_gg_admin'); ?>
			</div>
        </div>
    </div>
</div>

        
        <!-- Footer -->
        <footer class="footer text-right">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        2017 © <?php echo config('web_name'); ?>
                    </div>
                    <div class="col-xs-6">
                        <ul class="pull-right list-inline m-b-0">
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Help</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    <!-- end container -->
</div>



<!-- jQuery  -->
<script src="/assets/style1/js/bootstrap.min.js"></script>
<script src="/assets/style1/js/detect.js"></script>
<script src="/assets/style1/js/fastclick.js"></script>
<script src="/assets/style1/js/jquery.blockUI.js"></script>
<script src="/assets/style1/js/waves.js"></script>
<script src="/assets/style1/js/wow.min.js"></script>
<script src="/assets/style1/js/jquery.nicescroll.js"></script>
<script src="/assets/style1/js/jquery.scrollTo.min.js"></script>

<!-- App js -->
<script src="/assets/style1/js/jquery.app.js"></script>

<!-- moment js  -->
<script src="/assets/style1/plugins/moment/moment.js"></script>

<!-- counters  -->
<script src="/assets/style1/plugins/waypoints/lib/jquery.waypoints.js"></script>
<script src="/assets/style1/plugins/counterup/jquery.counterup.min.js"></script>

<!-- sweet alert  -->
<script src="/assets/style1/plugins/sweetalert/dist/sweetalert.min.js"></script>


<!-- flot Chart -->
<script src="/assets/style1/plugins/flot-chart/jquery.flot.js"></script>
<script src="/assets/style1/plugins/flot-chart/jquery.flot.time.js"></script>
<script src="/assets/style1/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="/assets/style1/plugins/flot-chart/jquery.flot.resize.js"></script>
<script src="/assets/style1/plugins/flot-chart/jquery.flot.pie.js"></script>
<script src="/assets/style1/plugins/flot-chart/jquery.flot.selection.js"></script>
<script src="/assets/style1/plugins/flot-chart/jquery.flot.stack.js"></script>
<script src="/assets/style1/plugins/flot-chart/jquery.flot.crosshair.js"></script>

<!-- todos app  -->
<script src="/assets/style1/pages/jquery.todo.js"></script>

<!-- chat app  -->
<script src="/assets/style1/pages/jquery.chat.js"></script>

<!-- dashboard  -->
<script src="/assets/style1/pages/jquery.dashboard.js"></script>

<?php if(isset($alert)): ?>
<script type="text/javascript"><?php echo $alert; ?></script>
<?php endif; ?>
</body>
</html>