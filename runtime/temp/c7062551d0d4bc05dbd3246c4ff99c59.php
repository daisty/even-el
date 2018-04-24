<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:56:"D:\phpStudy\WWW/application/index/view3/admin\index.html";i:1524219108;s:57:"D:\phpStudy\WWW/application/index/view3/admin\layout.html";i:1503394617;s:58:"D:\phpStudy\WWW/application/index/view3/common\layout.html";i:1523935237;s:55:"D:\phpStudy\WWW/application/index/view3/admin\head.html";i:1524220587;}*/ ?>
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
                                    <a href="<?php echo url('index/Panel/profile'); ?>">
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

                    <li>
                        <a href="#">
                            <i class="fa fa-edit fa-lg"></i>
                            <span class="nav-label">站点设置</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <?php if(ZID == 1): ?>
                            <li>
                                <a href="<?php echo url('mainSet'); ?>">
                                    <i class="fa fa-home"></i> 主站配置</a>
                            </li>
                            <!-- <li><a href="<?php echo url('emailSet'); ?>"><i class="fa fa-envelope"></i> 邮箱配置</a></li> -->
                            <!--li><a href="<?php echo url('setDhbl'); ?>"><i class="fa fa-exchange"></i> 元宝兑换比例</a></li-->
                            <!-- <li>
                                <a href="<?php echo url('selectMb'); ?>">
                                    <i class="fa fa-sellsy"></i> 选择模板</a>
                            </li> -->
                            <li>
                                <a href="<?php echo url('paySet'); ?>">
                                    <i class="fa fa-exchange"></i> 在线支付设置</a>
                            </li>
                            <?php endif; ?>
                            <!-- <li><a href="<?php echo url('webSet'); ?>"><i class="fa fa-edit"></i> 站点设置</a></li> -->
                            <li>
                                <a href="<?php echo url('priceSet'); ?>">
                                    <i class="fa fa-money"></i>订单管理</a>
                            </li>
                            <!-- <li><a href="<?php echo url('appSet'); ?>"><i class="fa fa-cog"></i> APP设置</a></li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-list-ul fa-lg"></i>
                            <span class="nav-label">数据管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="<?php echo url('userList'); ?>">
                                    <i class="fa fa-user"></i> 用户管理</a>
                            </li>
                            <li>
                                <a href="<?php echo url('kmList'); ?>">
                                    <i class="fa fa-caret-square-o-right"></i> 用户余额</a>
                            </li>
                            <!-- <li><a href="<?php echo url('kami'); ?>"><i class="fa fa-share-alt"></i> 代挂卡密管理</a></li> -->
                            <!-- <?php if(ZID == 1): ?>
						<li><a href="<?php echo url('qqList'); ?>"><i class="fa fa-qq"></i> ＱＱ管理</a></li>
						<?php endif; ?> -->
                        </ul>
                    </li>

                    </li>
                    <!-- <li class="<?php echo checkIfActive('tixian'); ?>">
                        <a href="<?php echo url('tixian'); ?>">
                            <span class="menu-icon">
                                <i class="fa fa-money fa-lg"></i>
                            </span>
                            <span class="text">
                                余额提现
                            </span>
                            <span class="menu-hover"></span>
                        </a>
                    </li>
                    <?php if(ZID == 1 or config('web_super')): ?>
                    <li class="<?php echo checkIfActive('ktfz'); ?>">
                        <a href="<?php echo url('ktfz'); ?>">
                            <span class="menu-icon">
                                <i class="fa fa-share-alt fa-lg"></i>
                            </span>
                            <span class="text">
                                开通分站
                            </span>
                            <span class="menu-hover"></span>
                        </a>
                    </li>
                    <?php endif; if(ZID == 1 or config('web_super')): ?>
                    <li class="<?php echo checkIfActive('weblist'); ?>">
                        <a href="<?php echo url('webList'); ?>">
                            <span class="menu-icon">
                                <i class="fa fa-list-alt fa-lg"></i>
                            </span>
                            <span class="text">
                                分站列表
                            </span>
                            <span class="menu-hover"></span>
                        </a>
                    </li>
                    <li>
                        <?php endif; if(ZID == 1): ?>

                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="nav-label">数据导出</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <?php if(is_array($webTools) || $webTools instanceof \think\Collection): $i = 0; $__LIST__ = $webTools;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$webTool): $mod = ($i % 2 );++$i;?>
                            <li>
                                <a href="<?php echo url('export',['tid'=>$webTool['tid']]); ?>">
                                    <i class="fa fa-money"></i>
                                    <span class="submenu-label"><?php echo $webTool['name']; ?></span>
                                </a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-hand-o-up fa-lg"></i>
                            <span class="nav-label">倒入数据</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="<?php echo url('import'); ?>?kind=pwd">
                                    <i class="fa fa-star"></i>导入密码错误QQ</a>
                            </li>
                            <li>
                                <a href="<?php echo url('import'); ?>?kind=bh">
                                    <i class="fa fa-star"></i>导入登录保护QQ</a>
                            </li>
                            <li>
                                <a href="<?php echo url('import'); ?>?kind=dj">
                                    <i class="fa fa-star"></i>导入账号冻结QQ</a>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?> -->
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
                                <a href="<?php echo url('index/Index/logout'); ?>" onclick="return confirm('确认退出登录？');">
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
        


<!-- <div class="row">
    <div class="col-xs-12">
        <div class="panel panel-danger">
            <div class="panel-body">
                <?php echo config('zz_gg_admin'); ?>
            </div>
        </div>
    </div>
</div> -->

<!-- </form>
<div class="alert alert-info">如果需要购买正版全新系统代挂的联系QQ：1043897710
    <a href="http://wpa.qq.com/msgrd?v=3&uin=1043897710&site=qq&menu=yes">
        <kbd>联系阿鑫</kbd>
</div>

<div class="alert alert-info">演示站：www.niudg.cn 在演示站里面也里找到我哦！
    <a href="http://www.niudg.cn">
        <kbd>进入演示站</kbd>
</div>

<div class="alert alert-info">库乐交流群随时发布免费版本点击进入吧！
    <a href="https://jq.qq.com/?_wv=1027&k=5kJje7x">
        <kbd>点击链接加入群【库乐程序交流群】</kbd>
</div>
<div class="alert alert-info">携手meti秒赞 正版秒赞哦 现在授权就需要30
    <a href="http://wpa.qq.com/msgrd?v=3&uin=596844474&site=qq&menu=yes">
        <kbd>联系裸辞</kbd>
</div>
</div>
</div> -->

        
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