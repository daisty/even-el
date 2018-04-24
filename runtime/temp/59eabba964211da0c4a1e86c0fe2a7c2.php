<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:56:"D:\phpStudy\WWW/application/index/view3/panel\index.html";i:1524216415;s:57:"D:\phpStudy\WWW/application/index/view3/panel\layout.html";i:1503393754;s:58:"D:\phpStudy\WWW/application/index/view3/common\layout.html";i:1523935237;s:55:"D:\phpStudy\WWW/application/index/view3/panel\head.html";i:1524216478;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo config('web_description'); ?>">
        <meta name="keywords" content="<?php echo config('web_keywords'); ?>">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title><?php echo $webTitle; ?>-<?php echo config('web_name'); ?></title>

        <!--Morris Chart CSS -->
    <link href="/kulev3/css/bootstrap.min.css" rel="stylesheet">
    <link href="/kulev3/css/font-awesome.css" rel="stylesheet">

    <link href="/kulev3/css/animate.css" rel="stylesheet">
    <link href="/kulev3/css/style.css" rel="stylesheet">

    <link href="/kulev3/css/new.css" rel="stylesheet">

	

    <link rel="stylesheet" type="text/css" href="/assets/sweetalert/sweetalert.css"/>
    <script src="/assets/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="/assets/sweetalert/jquery.min.js" type="text/javascript"></script>

        <script src="/assets/js/modernizr.min.js"></script>
        <style>body{font-family:"΢���ź�",Arial,Helvetica,sans-serif,"SimSun";}</style>

    </head>


    <body>
<body class="fixed-navigation">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span>
                                <img alt="image" class="img-circle" src="http://q1.qlogo.cn/g?b=qq&nk=<?php echo $userInfo['qq']; ?>&s=160" style="width:60px;" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs">
                                        <strong class="font-bold"><?php echo $userInfo['user']; ?></strong>
                                    </span>
                                    <span class="text-muted text-xs block">uid:<?php echo $userInfo['uid']; ?>
                                        <b class="caret"></b>
                                    </span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li>
                                    <a href="<?php echo url('profile'); ?>">
                                        <i class="ti-user m-r-5"></i> 个人信息</a>
                                </li>
                                <li>
                                    <a href="<?php echo url('recharge'); ?>">
                                        <i class="ti-money m-r-5"></i> 充值余额</a>
                                </li>
                                <?php if($userInfo['power'] == 9): ?>
                                <li>
                                    <a href="<?php echo url('index/Admin/index'); ?>">
                                        <i class="ti-settings m-r-5"></i> 站长后台</a>
                                </li>
                                <?php endif; ?>
                                <li>
                                    <a href="<?php echo url('index/Index/logout'); ?>" onclick="return confirm('确认退出登录？');">
                                        <i class="ti-power-off m-r-5"></i> 退出登录</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="active">
                        <a href="<?php echo url('index'); ?>">
                            <i class="fa fa-th-large"></i>
                            <span class="nav-label">用户中心</span>
                            </span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="#">
                            <i class="fa fa-plus"></i>
                            <span class="nav-label">代挂管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="<?php echo url('qqAdd'); ?>">
                                    <i class="fa fa-plus"></i>
                                    <span class="submenu-label">添加QQ</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('qqList'); ?>">
                                    <i class="fa fa-list-ul"></i>
                                    <span class="submenu-label">QQ列表</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('order'); ?>">
                                    <i class="fa fa-plus-circle"></i>
                                    <span class="submenu-label">自助下单</span>
                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li>
                        <a href="#">
                            <i class="fa fa-globe fa-lg"></i>
                            <span class="nav-label">排行榜</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="<?php echo url('invite'); ?>">
                                    <i class="fa fa-users"></i>
                                    <span class="submenu-label">邀请人数排行榜</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('rank',['kind'=>'order']); ?>">
                                    <i class="fa fa-list-ul"></i>
                                    <span class="submenu-label">分站订单排行榜</span>
                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li>
                        <a href="<?php echo url('ktfz'); ?>">
                            <i class="fa fa-flask"></i>
                            <span class="nav-label">开通分站</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="nav-label">钱包</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="<?php echo url('shop'); ?>">
                                    <i class="fa fa-trophy"></i>
                                    <span class="submenu-label">订单查询</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('recharge'); ?>">
                                    <i class="fa fa-money"></i>
                                    <span class="submenu-label">充值余额</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('rmbList'); ?>">
                                    <i class="fa fa-tasks"></i>
                                    <span class="submenu-label">收支明细</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- <li>
                        <a href="#">
                            <i class="fa fa-hand-o-up fa-lg"></i>
                            <span class="nav-label">会员福利</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="<?php echo url('invite'); ?>">
                                    <i class="fa fa-users"></i>
                                    <span class="submenu-label">邀请好友</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('qiandao'); ?>">
                                    <i class="fa fa-sign-in"></i>
                                    <span class="submenu-label">每日签到</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    </li> -->
                    <!-- <li class="<?php echo checkIfActive('chat'); ?>">
                        <a href="<?php echo url('chat'); ?>">
                            <span class="menu-icon">
                                <i class="fa fa-comments"></i>
                            </span>
                            <span class="text">
                                聊天室
                            </span>
                            <span class="menu-hover"></span>
                        </a>
                    </li> -->
                    <!-- <li class="<?php echo checkIfActive('help'); ?>">
                        <a href="<?php echo url('help'); ?>">
                            <span class="menu-icon">
                                <i class="fa fa-h-square fa-lg"></i>
                            </span>
                            <span class="text">
                                帮助中心
                            </span>
                            <span class="menu-hover"></span>
                        </a>
                    </li> -->
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg sidebar-content">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top gules-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#">
                            <i class="fa fa-bars"></i>
                        </a>
                        <form role="search" class="navbar-form-custom" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="搜索添加QQ账号..." class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a href="<?php echo url('index'); ?>" title="返回首页">
                                    <i class="fa fa-home"></i>首页</a>
                            </li>
                            <!-- <li>
                                <a href="<?php echo url('qqadd'); ?>" title="QQ列表">
                                    <i class="fa fa-qq"></i>QQ管理</a>
                            </li> -->
                            <li>
                                <a href="<?php echo url('index/Index/index'); ?>" onclick="return confirm('确认退出登录？');">
                                    <i class="fa fa-sign-out"></i>
                                    <span class="nav-label">注销登录</span>
                                </a>
                            </li>
                        </ul>

                </nav>
            </div>
            </a>
        <div class="wrapper wrapper-content">
<div class="wrapper">
    <div class="container">
        


<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-danger">
            <div class="panel-body">
                <?php echo config('web_gg_panel'); ?>
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
                            <span class="m-left-xs">未付款</span>
                        </div>
                    </div>
                </div>
                <!-- /panel -->
            </div>
            <!-- /.col -->
            <div class="col-md-4 col-sm-4">
                <div class="panel panel-default panel-stat2 bg-warning">
                    <div class="panel-body">
                        <span class="stat-icon">
                            <i class="fa fa-user"></i>
                        </span>
                        <div class="pull-right text-right">
                            <div class="value"><?php echo $amount['user']; ?></div>
                            <div class="title">已付款</div>
                        </div>
                    </div>
                </div>
                <!-- /panel -->
            </div>
            <!-- /.col -->
            <div class="col-md-4 col-sm-4">
                <div class="panel panel-default panel-stat2 bg-info">
                    <div class="panel-body">
                        <span class="stat-icon">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <div class="pull-right text-right">
                            <div class="value"><?php echo $amount['order']; ?></div>
                            <div class="title">已发货</div>
                        </div>
                    </div>
                </div>
                <!-- /panel -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
            <div class="col-md-4 col-sm-4">
                <div class="panel panel-default panel-stat2 bg-info">
                    <div class="panel-body">
                        <span class="stat-icon">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <div class="pull-right text-right">
                            <div class="value"><?php echo $amount['order']; ?></div>
                            <div class="title">售后/退款</div>
                        </div>
                    </div>
                </div>
                <!-- /panel -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
            <div class="col-md-4 col-sm-4">
                <div class="panel panel-default panel-stat2 bg-info">
                    <div class="panel-body">
                        <span class="stat-icon">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <div class="pull-right text-right">
                            <div class="value"><?php echo $amount['order']; ?></div>
                            <div class="title">查询订单</div>
                        </div>
                    </div>
                </div>
                <!-- /panel -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- <div class="panel panel-default">
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
                        <td>
                            <span class="badge badge-info">2hr</span>
                        </td>
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
                        <td>
                            <span class="badge badge-info">1hr</span>
                        </td>
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
                        <td>
                            <span class="badge badge-info">5m</span>
                        </td>
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
                        <td>
                            <span class="badge badge-info">12hr</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> -->
        <!-- /panel -->
        <!-- <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">

                    </div>
                    </li>
                    </ul> -->
        <!-- /list-group -->
        <!-- <div class="loading-overlay">
                        <i class="loading-icon fa fa-refresh fa-spin fa-lg"></i>
                    </div>
                </div> -->
        <!-- /panel -->
        <!-- </div> -->
        <!-- /.col -->
        <!-- </div> -->
        <!-- ./row -->
        <!-- </div> -->
        <!-- /.col -->
        <!-- <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 class="text-center">
                    <img src="http://q1.qlogo.cn/g?b=qq&amp;nk=<?php echo $userInfo['qq']; ?>&amp;s=160" class="img-circle circle-border" alt="profile" style="width: 100px;">
                </h1>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    UID
                                    <span class="badge badge-success pull-right"><?php echo $userInfo['uid']; ?></span>
                                </a>
                            </h4>
                        </div>
                    </div> -->
        <!-- panel -->
        <!-- <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    等级
                                    <span class="badge badge-warning pull-right"><?php echo $power; ?></span>
                                </a>
                            </h4>
                        </div>
                    </div> -->
        <!-- panel -->
        <!-- <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    余额
                                    <span class="badge badge-warning pull-right"><?php echo $userInfo['point']; ?>元</span>
                                </a>
                            </h4>
                        </div>
                    </div> -->
        <!-- panel -->
        <!-- <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    绑定QQ
                                    <span class="badge badge-success pull-right"><?php echo $userInfo['qq']; ?></span>
                                </a>
                            </h4>
                        </div>
                    </div> -->
        <!-- panel -->

        <!-- </div> -->
        <!-- panel-group -->
        <!-- </div>
        </div> -->
        <!-- /panel -->
        <!-- </div> -->
        <!-- /.col -->
        <!-- </div> -->
        <!-- /.row -->
    </div>
    <!-- /.padding-md -->
</div>
<!-- /main-container -->

        
         <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                2017  <?php echo config('web_name'); ?>.
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->
    </div>
    <!-- end container -->
</div>



 <!-- Mainly scripts -->
 
    <script src="/kulev3/js/jquery-3.1.1.min.js"></script>
    <script src="/kulev3/js/bootstrap.min.js"></script>
    <script src="/kulev3/js/jquery.metisMenu.js"></script>
    <script src="/kulev3/js/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="/kulev3/js/new.js"></script>
    <script src="/kulev3/js/jquery.flot.js"></script>
    <script src="/kulev3/js/jquery.flot.tooltip.min.js"></script>
    <script src="/kulev3/js/jquery.flot.spline.js"></script>
    <script src="/kulev3/js/jquery.flot.resize.js"></script>
    <script src="/kulev3/js/jquery.flot.pie.js"></script>
    <script src="/kulev3/js/jquery.flot.symbol.js"></script>
    <script src="/kulev3/js/curvedLines.js"></script>

    <!-- Peity -->
    <script src="/kulev3/js/jquery.peity.min.js"></script>
    <script src="/kulev3/js/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/kulev3/js/inspinia.js"></script>
    <script src="/kulev3/js/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="/kulev3/js/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="/kulev3/js/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/kulev3/js/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Sparkline -->
    <script src="/kulev3/js/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="/kulev3/js/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="/kulev3/js/Chart.min.js"></script>

    <script>
        $(document).ready(function() {

            var lineData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "Example dataset",
                        backgroundColor: "rgba(26,179,148,0.5)",
                        borderColor: "rgba(26,179,148,0.7)",
                        pointBackgroundColor: "rgba(26,179,148,1)",
                        pointBorderColor: "#fff",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    },
                    {
                        label: "Example dataset",
                        backgroundColor: "rgba(220,220,220,0.5)",
                        borderColor: "rgba(220,220,220,1)",
                        pointBackgroundColor: "rgba(220,220,220,1)",
                        pointBorderColor: "#fff",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    }
                ]
            };

            var lineOptions = {
                responsive: true
            };


            var ctx = document.getElementById("lineChart").getContext("2d");
            new Chart(ctx, {type: 'line', data: lineData, options:lineOptions});

        });
    </script>
</body>
</html>

        <!-- App js -->
        <script src="/assets/Kule25/js/jquery.core.js"></script>
        <script src="/assets/Kule25/js/jquery.app.js"></script>

<?php if(isset($alert)): ?>
<script type="text/javascript"><?php echo $alert; ?></script>
<?php endif; ?>
</body>
</html>