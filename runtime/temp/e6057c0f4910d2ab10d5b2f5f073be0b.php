<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"C:\phpStudy\PHPTutorial\WWW/application/index/view3/panel\invite.html";i:1523864317;s:69:"C:\phpStudy\PHPTutorial\WWW/application/index/view3/panel\layout.html";i:1503393754;s:70:"C:\phpStudy\PHPTutorial\WWW/application/index/view3/common\layout.html";i:1503393726;s:67:"C:\phpStudy\PHPTutorial\WWW/application/index/view3/panel\head.html";i:1523868846;}*/ ?>
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

                            <li><a href="<?php echo url('qqAdd'); ?>"><i class="fa fa-plus"></i> <span class="submenu-label">添加QQ</span></a>
                        </li>
                        <li><a href="<?php echo url('qqList'); ?>"><i class="fa fa-list-ul"></i> <span
                                class="submenu-label">QQ列表</span></a></li>
                        <li><a href="<?php echo url('order'); ?>"><i class="fa fa-plus-circle"></i> <span
                                class="submenu-label">自助下单</span></a></li>

                        </ul>
                    </li> -->

                    <li>
                        <a href="#">
                            <i class="fa fa-globe fa-lg"></i>
                            <span class="nav-label">排行榜</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="<?php echo url('rank',['kind'=>'invite']); ?>">
                                    <i class="fa fa-users"></i>
                                    <span class="submenu-label">邀请人数排行榜</span>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="<?php echo url('rank',['kind'=>'order']); ?>">
                                    <i class="fa fa-list-ul"></i>
                                    <span class="submenu-label">分站订单排行榜</span>
                                </a>
                            </li> -->
                        </ul>
                    </li>



                    <!-- <li>
                        <a href="<?php echo url('ktfz'); ?>">
                            <i class="fa fa-flask"></i>
                            <span class="nav-label">开通分站</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="nav-label">自助商店</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="<?php echo url('shop'); ?>">
                                    <i class="fa fa-trophy"></i>
                                    <span class="submenu-label">自助购买VIP</span>
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

                    <li>
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
                    </li>

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

                    <li class="<?php echo checkIfActive('help'); ?>">
                        <a href="<?php echo url('help'); ?>">
                            <span class="menu-icon">
                                <i class="fa fa-h-square fa-lg"></i>
                            </span>
                            <span class="text">
                                帮助中心
                            </span>
                            <span class="menu-hover"></span>
                        </a>
                    </li>
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
                            <li>
                                <a href="<?php echo url('qqadd'); ?>" title="QQ列表">
                                    <i class="fa fa-qq"></i>QQ管理</a>
                            </li>
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
        

<div class="padding-md">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <?php echo getHtmlCode(config('web_gg_invite')); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">邀请好友</h3>
                </div>
                <div class="panel-body">
                    <?php if(!$userInfo['upid']): ?>
                    <p class="bg-warning" style="padding: 10px">你还没填写邀请码，现在填写就能获取<?php echo config('zz_point_invite1'); ?>元奖励</p>
                    <form role="form" class="form-horizontal" method="post" style="margin: 15px;">
                        <input type="hidden" name="action" value="invite">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">邀请码</div>
                                <input type="text" name="invite" class="form-control" placeholder="输入邀请码">
                                <div class="input-group-addon">
                                    <input type="submit" value="提交" class="btn-info">
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr> <?php else: ?>
                    <p class="bg-warning" style="padding: 10px">你已经填写邀请码，你的上级用户UID:<?php echo $userInfo['upid']; ?></p>
                    <?php endif; ?>
                    <p class="bg-info" style="padding: 10px">
                        我的推广邀请码：<?php if($userInfo['invite']): ?>
                        <span class="text-warning" style="font-size: 20px;"><?php echo $userInfo['invite']; ?></span><?php else: ?>
                        <a href="?action=getInvite" class="btn btn-info">点击获取</a><?php endif; ?>
                    </p>
                    <p class="bg-success" style="padding: 10px">邀请用户之后，下级用户消费你将永久获得<?php echo config('zz_invite_rate'); ?>%的提成！</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-danger table-responsive">
                <div class="panel-heading">
                    我的邀请记录
                    <span class="label label-danger pull-right">
                        <a href="<?php echo url('rank',['kind'=>'invite']); ?>" class="btn-xs btn-warning">查看排行榜</a>
                    </span>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-condensed table-hover table-striped table-vertical-center">
                        <thead>
                            <tr>
                                <th class="text-center">UID</th>
                                <th class="text-center">用户名</th>
                                <th class="text-center">完成邀请时间</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($invites) || $invites instanceof \think\Collection): $i = 0; $__LIST__ = $invites;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$invite): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td class="text-center"><?php echo $invite['uid']; ?></td>
                                <td class="text-center"><?php echo $invite['user']; ?></td>
                                <td class="text-center"><?php echo $invite['invitetime']; ?></td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            <tr class="text-center">
                                <td colspan="5"><?php echo $pageList->showPage(); ?></td>
                            </tr>
                        </tbody>
                    </table>
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