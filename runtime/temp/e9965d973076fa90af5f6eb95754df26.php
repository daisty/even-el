<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:93:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view/panel\index.html";i:1479656773;s:94:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view/panel\layout.html";i:1465731942;s:95:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view/common\layout.html";i:1486473915;s:92:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view/panel\head.html";i:1484814378;}*/ ?>
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
                    <li class="dropdown hidden-xs">
                        <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light"
                           data-toggle="dropdown" aria-expanded="true">
                            <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg">
                            <li class="text-center notifi-title">消息推送</li>
                            <li class="list-group">
                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <em class="fa fa-user-plus fa-2x text-info"></em>
                                        </div>
                                        <div class="media-body clearfix">
                                            <div class="media-heading">您好,先生</div>
                                            <p class="m-0">
                                                <small>尊敬的用户欢迎您使用本系统</small>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <em class="fa fa-diamond fa-2x text-primary"></em>
                                        </div>
                                        <div class="media-body clearfix">
                                            <div class="media-heading">提醒</div>
                                            <p class="m-0">
                                                <small>为了您账户的安全请及时验证邮箱</small>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <em class="fa fa-bell-o fa-2x text-danger"></em>
                                        </div>
                                        <div class="media-body clearfix">
                                            <div class="media-heading">加速</div>
                                            <p class="m-0">
                                                <span class="text-primary"></span> 本程序为您持续加速QQ任务</small>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- last list item -->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <small></small>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown user-box">
                        <a href="" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown"
                           aria-expanded="true">
                            <img src="http://q1.qlogo.cn/g?b=qq&amp;nk=<?php echo $userInfo['qq']; ?>&amp;s=160" alt="user-img"
                                 class="img-circle user-img">
                            <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="<?php echo url('profile'); ?>"><i class="md md-edit"></i> 修改资料</a></li>
                            <?php if($userInfo['power'] == 9): ?>
                            <li><a href="<?php echo url('index/Admin/index'); ?>"><i class="md md-polymer"></i> 管理后台</a></li>
                            <?php endif; if($userInfo['power'] > 0): ?>
                            <!--li><a href="<?php echo url('daili'); ?>"><i class="md md-control-point-duplicate"></i> 代理后台</a></li-->
                            <?php endif; ?>
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
                        <a href="<?php echo url('index'); ?>"><i class="md md-home"></i> <span>控制面板</span> </a>
                    </li>

					<li class="<?php echo checkIfActive('qqadd,qqlist,order,qqinfo'); ?> has-submenu">
                        <a href="#"><i class="md md-invert-colors-on"></i> <span>代挂管理</span> </a>
                        <ul class="submenu">
                            <li><a href="<?php echo url('qqAdd'); ?>"><i class="fa fa-qq"></i> 添加QQ</a></li>
                            <li><a href="<?php echo url('qqList'); ?>"><i class="fa fa-list-ul"></i> QQ列表</a></li>
                            <li><a href="<?php echo url('order'); ?>"><i class="fa fa-plus-circle"></i> 自助下单</a></li>
                        </ul>
                    </li>

                    <li class="<?php echo checkIfActive('shop,recharge,rmblist'); ?> has-submenu">
                        <a href="#"><i class="fa fa-shopping-cart"></i> <span>在线商城</span> </a>
                        <ul class="submenu">
							<li><a href="<?php echo url('shop'); ?>"><i class="fa fa-trophy "></i> 自助开通VIP </a></li>
                            <li><a href="<?php echo url('recharge'); ?>"><i class="fa fa-money "></i> 充值余额 </a></li>
                            <!--li><a href="<?php echo url('ybdh'); ?>"><i class="md md-3d-rotation "></i> 元宝兑换 </a></li-->
                            <li><a href="<?php echo url('rmbList'); ?>"><i class="md md-theaters "></i> 收支明细 </a></li>
                        </ul>
                    </li>

                    <li class="<?php echo checkIfActive('ktfz'); ?> has-submenu">
                        <a href="<?php echo url('ktfz'); ?>"><i class="md md-spellcheck"></i><span>开通分站</span> </a>
                    </li>

                    <li class="<?php echo checkIfActive('rank'); ?> has-submenu">
                        <a href="#"><i class="md md-thumb-up"></i> <span>排行榜</span> </a>
                        <ul class="submenu">
                            <li><a href="<?php echo url('rank',['kind'=>'invite']); ?>"><i class="fa fa-users"></i> 邀请人数排行榜</a></li>
                            <li><a href="<?php echo url('rank',['kind'=>'order']); ?>"><i class="fa fa-share-alt"></i> 分站订单排行榜</a></li>
                        </ul>
                    </li>

                    <li class="<?php echo checkIfActive('invite,qiandao,lye'); ?> has-submenu">
                        <a href="#"><i class="fa fa-hand-o-up"></i> <span>会员福利</span> </a>
                        <ul class="submenu">
                            <li><a href="<?php echo url('invite'); ?>"><i class="md md-verified-user "></i> 邀请好友</a></li>
                            <li><a href="<?php echo url('qiandao'); ?>"><i class="fa fa-sign-in"></i> 每日签到</a></li>
                            <!--li><a href="<?php echo url('lye'); ?>"><i class="fa fa-anchor"></i> 每日领余额</a></li-->
                        </ul>
                    </li>

					<li class="<?php echo checkIfActive('chat'); ?> has-submenu">
                        <a href="<?php echo url('chat'); ?>"><i class="fa fa-comments"></i><span>聊天室</span> </a>
                    </li>
					
                    <li class="<?php echo checkIfActive('help'); ?> has-submenu">
                        <a href="<?php echo url('help'); ?>"><i class="md md-help"></i><span>帮助中心</span> </a>
                    </li>

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
                <li class="active">控制面板</li>
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
                <a href="<?php echo url('rank',['kind'=>'order']); ?>" style="color:white">站点总订单数</a>
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
    <div class="col-xs-12">
        <div class="panel panel-danger">
            <div class="panel-body">
                <?php echo getHtmlCode(config('web_gg_panel')); ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="panel panel-default panel-stat1 bg-success">
                    <div class="panel-body">
                        <div class="value"><?php echo $amount['zkm']; ?></div>
                        <div class="title">
                            <span class="m-left-xs">已发出卡密数</span>
                        </div>
                    </div>
                </div><!-- /panel -->
            </div><!-- /.col -->
            <div class="col-md-4 col-sm-4">
                <div class="panel panel-default panel-stat2 bg-warning">
                    <div class="panel-body">
										<span class="stat-icon">
											<i class="fa fa-user"></i>
										</span>
                        <div class="pull-right text-right">
                            <div class="value"><?php echo $amount['user']; ?></div>
                            <div class="title">已注册用户</div>
                        </div>
                    </div>
                </div><!-- /panel -->
            </div><!-- /.col -->
            <div class="col-md-4 col-sm-4">
                <div class="panel panel-default panel-stat2 bg-info">
                    <div class="panel-body">
										<span class="stat-icon">
											<i class="fa fa-envelope"></i>
										</span>
                        <div class="pull-right text-right">
                            <div class="value"><?php echo $amount['order']; ?></div>
                            <div class="title">拥有订单数</div>
                        </div>
                    </div>
                </div><!-- /panel -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="panel panel-default">
            <div class="panel-heading">
                工作进展

								<span class="badge badge-info pull-right">
									4 left
								</span>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>任务</th>
                    <th>进步</th>
                    <th></th>
                    <th>时间</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>代挂漏洞修补</td>
                    <td>
                        <div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
                            <div class="progress-bar" style="width: 45%">
                                <span class="sr-only">45% Complete</span>
                            </div>
                        </div>
                    </td>
                    <td>45%</td>
                    <td><span class="badge badge-info">2hr</span></td>
                </tr>
                <tr>
                    <td>安卓版代挂开发</td>
                    <td>
                        <div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
                            <div class="progress-bar progress-bar-success" style="width: 61%">
                                <span class="sr-only">61% Complete</span>
                            </div>
                        </div>
                    </td>
                    <td>61%</td>
                    <td><span class="badge badge-info">1hr</span></td>
                </tr>
                <tr>
                    <td>电脑版代挂开发</td>
                    <td>
                        <div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
                            <div class="progress-bar progress-bar-danger" style="width: 97%">
                                <span class="sr-only">97% Complete</span>
                            </div>
                        </div>
                    </td>
                    <td>97%</td>
                    <td><span class="badge badge-info">5m</span></td>
                </tr>
                <tr>
                    <td>新的界面布局</td>
                    <td>
                        <div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
                            <div class="progress-bar progress-bar-warning" style="width: 18%">
                                <span class="sr-only">18% Complete</span>
                            </div>
                        </div>
                    </td>
                    <td>18%</td>
                    <td><span class="badge badge-info">12hr</span></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 class="text-center">
                    <img src="http://q1.qlogo.cn/g?b=qq&amp;nk=<?php echo $userInfo['qq']; ?>&amp;s=160"
                         class="img-circle circle-border" alt="profile" style="width: 100px;">
                </h1>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseOne">
                                    UID
                                    <span class="badge badge-success pull-right"><?php echo $userInfo['uid']; ?></span>
                                </a>
                            </h4>
                        </div>
                    </div><!-- panel -->
					<div class="panel panel-warning">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseOne">
                                    等级
                                    <span class="badge badge-warning pull-right"><?php echo $power; ?></span>
                                </a>
                            </h4>
                        </div>
                    </div><!-- panel -->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseOne">
                                    余额
                                    <span class="badge badge-warning pull-right"><?php echo $userInfo['point']; ?>元</span>
                                </a>
                            </h4>
                        </div>
                    </div><!-- panel -->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseOne">
                                    绑定QQ
                                    <span class="badge badge-success pull-right"><?php echo $userInfo['qq']; ?></span>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
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