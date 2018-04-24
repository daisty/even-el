<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"C:\phpStudy\PHPTutorial\WWW/application/index/view3/panel\qqlist.html";i:1503394257;s:69:"C:\phpStudy\PHPTutorial\WWW/application/index/view3/panel\layout.html";i:1503393754;s:70:"C:\phpStudy\PHPTutorial\WWW/application/index/view3/common\layout.html";i:1503393726;s:67:"C:\phpStudy\PHPTutorial\WWW/application/index/view3/panel\head.html";i:1523864487;}*/ ?>
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



                    <li>
                        <a href="<?php echo url('ktfz'); ?>">
                            <i class="fa fa-flask"></i>
                            <span class="nav-label">开通分站</span>
                        </a>
                    </li>
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
                                    <span class="submenu-label">自助开通VIP</span>
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
                    <li class="<?php echo checkIfActive('chat'); ?>">
                        <a href="<?php echo url('chat'); ?>">
                            <span class="menu-icon">
                                <i class="fa fa-comments"></i>
                            </span>
                            <span class="text">
                                聊天室
                            </span>
                            <span class="menu-hover"></span>
                        </a>
                    </li>
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
                <div class="panel panel-primary table-responsive">
                    <div class="panel-heading">
                        我的QQ列表&nbsp;[<a href="<?php echo url('qqAdd'); ?>" style="color:white"><i class="fa fa-qq"></i>添加QQ</a>]
                        <span class="label label-danger pull-right"><?php echo count($qqList); ?></span>
		            </div>
					<div class="panel-body">
		                <form method="get">
		                    <input type="hidden" name="action" value="search">
		                    <div class="input-group xs-mb-15">
		                        <input type="text" placeholder="请输入要搜索的QQ" name="uin"
		                               class="form-control text-center"
		                               required>
		                        <span class="input-group-btn">
		                        <button type="submit" class="btn btn-primary">立即搜索</button>
		                        </span>
		                    </div>
		                </form>
		            </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-bordered table-condensed table-hover table-striped table-vertical-center">
                            <thead>
                            <tr>
                                <th width="50">QID</th>
                                <th width="100" class="hidden-xs text-center">头像</th>
                                <th class="text-center">QQ</th>
                                <th class="text-center">状态</th>
                                <th class="text-center">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($qqList) || $qqList instanceof \think\Collection): $i = 0; $__LIST__ = $qqList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$qq): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td>#<?php echo $qq['qid']; ?></td>
                                <td class="hidden-xs text-center">
                                    <img src="//q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $qq['uin']; ?>&amp;spec=100"
                                         class="img-circle circle-border m-b-md">
                                </td>
                                <td class="text-center"><?php echo $qq['uin']; ?></td>
                                <td class="text-center"><?php echo getQqzt($qq['zt']); ?></td>
                                <td class="text-center">
									<a class="btn btn-success" href="<?php echo url('qqInfo',['qid'=>$qq['qid']]); ?>">代挂详情</a>
	                                <a href="<?php echo url('qqAdd'); ?>?qid=<?php echo $qq['qid']; ?>" class="btn btn-warning">更新密码</a>
									<a class="btn btn-danger" href="<?php echo url('qqList'); ?>?qid=<?php echo $qq['qid']; ?>&action=del" onclick="return confirm('你确定要删除此QQ号吗？删除后将停止所有代挂服务');">删除</a>
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