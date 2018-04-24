<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:95:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view3/index\qqinfo.html";i:1479397358;s:96:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view3/common\layout.html";i:1503393726;}*/ ?>
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

	

    <link rel="stylesheet" type="text/css" href="/assets/sweetalert/sweetalert.css"/>
    <script src="/assets/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="/assets/sweetalert/jquery.min.js" type="text/javascript"></script>

        <script src="/assets/js/modernizr.min.js"></script>
        <style>body{font-family:"΢���ź�",Arial,Helvetica,sans-serif,"SimSun";}</style>

    </head>


    <body>

<div id="top-nav" class="fixed skin-3">
    <a href="#" class="brand">
        <span><?php echo config('web_name'); ?></span>
    </a><!-- /brand -->
    <button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <button type="button" class="navbar-toggle pull-left hide-menu" id="menuToggle">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <ul class="nav-notification clearfix">

        <li class="profile dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <strong><?php echo $userInfo['user']; ?></strong>
                <span><i class="fa fa-chevron-down"></i></span>
            </a>
            <ul class="dropdown-menu">
				<li>
					<a href="/" class="theme-setting"><i class="fa fa-home fa-lg"></i> <span>返回首页</span> </a>
				</li>
				<li>
					<a href="<?php echo url('reg'); ?>" class="theme-setting"><i class="fa fa-plus fa-lg"></i> <span>免费注册</span> </a>
				</li>
				<li>
					<a href="<?php echo url('login'); ?>" class="theme-setting"><i class="fa fa-user fa-lg"></i> <span>用户登录</span> </a>
				</li>
                <li><a tabindex="-1" href="profile.html" class="main-link"><i class="fa fa-edit fa-lg"></i>修改资料</a></li>
            </ul>
        </li>
    </ul>
</div><!-- /top-nav-->

<div class="wrapper">
    <div class="container">
        
<div id="main-container">
    <div id="breadcrumb">
        <ul class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="/"> 首页</a></li>
            <li class="active">订单列表</li>
        </ul>
    </div><!-- /breadcrumb-->
    <div class="main-header clearfix">
        <div class="page-title">
            <h3 class="no-margin"><?php echo $info['uin']; ?>-订单列表</h3>
        </div><!-- /page-title -->
    </div>
    <div class="padding-md">
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary table-responsive">
            <div class="panel-heading">
                <?php echo $info['uin']; ?>-订单列表
            </div>
            <div class="panel-body text-center">
                <img src="//q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $info['uin']; ?>&amp;spec=100"
                     class="img-circle circle-border m-b-md">
            </div>
            <div class="panel-body">
                <div class="col-lg-12 table-responsive">
                    <table class="table table table-bordered">
                        <thead>
                        <tr>
                            <th></th>
                            <th>状态</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center"> QQ状态</td>
                            <td class="text-center"><?php echo getQqZt($info['zt']); ?></td>
                        </tr>
                        <tr>
                            <td class="text-center"> COOKIE状态</td>
                            <td class="text-center"><?php if($info['cookiezt']): ?><font
                                    color="red">需更新</font><?php else: ?><font
                                    color="green">正常</font><?php endif; ?>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-12 table-responsive">
                    <table class="table table-bordered table-condensed table-hover table-striped table-vertical-center">
                        <thead>
                        <tr>
                            <th class="text-center">代挂项目</th>
                            <th class="text-center">到期时间</th>
                            <th class="text-center">状态</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($orderList) || $orderList instanceof \think\Collection): $i = 0; $__LIST__ = $orderList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td class="text-center"><?php echo $order['name']; ?></td>
                            <td class="text-center"><?php echo $order['endtime']; ?></td>
                            <td class="text-center">
                                <?php if($order['zt'] == 0): ?>
                                <font color="green">加速中</font>
                                <?php elseif($order['zt'] == 1): ?>
                                <font color="#d2691e">补挂中</font>
                                <?php elseif($order['zt'] == 2): ?>
                                <font color="#red">已关闭</font>
                                <?php else: ?>
                                <font color="#red">未知</font>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
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