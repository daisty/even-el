<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:93:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view3/panel\help.html";i:1503394180;s:95:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view3/panel\layout.html";i:1503393754;s:96:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view3/common\layout.html";i:1503393726;s:93:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view3/panel\head.html";i:1503394075;}*/ ?>
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
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="http://q1.qlogo.cn/g?b=qq&nk=<?php echo $userInfo['qq']; ?>&s=160" style="width:60px;" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $userInfo['user']; ?></strong>
                             </span> <span class="text-muted text-xs block">uid:<?php echo $userInfo['uid']; ?> <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                    <li><a href="<?php echo url('profile'); ?>"><i class="ti-user m-r-5"></i> 个人信息</a></li>
                                    <li><a href="<?php echo url('recharge'); ?>"><i class="ti-money m-r-5"></i> 充值余额</a></li>
									<?php if($userInfo['power'] == 9): ?>
                                    <li><a href="<?php echo url('index/Admin/index'); ?>"><i class="ti-settings m-r-5"></i> 站长后台</a></li>
									<?php endif; ?>
                                    <li><a href="<?php echo url('index/Index/logout'); ?>" onclick="return confirm('确认退出登录？');"><i class="ti-power-off m-r-5"></i> 退出登录</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href="<?php echo url('index'); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">用户中心</span> </span></a>
                </li>

				
				
						  <li>
                    <a href="#"><i class="fa fa-plus"></i> <span class="nav-label">代挂管理</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo url('qqAdd'); ?>"><i class="fa fa-plus"></i> <span class="submenu-label">添加QQ</span></a>
                        </li>
                        <li><a href="<?php echo url('qqList'); ?>"><i class="fa fa-list-ul"></i> <span
                                class="submenu-label">QQ列表</span></a></li>
                        <li><a href="<?php echo url('order'); ?>"><i class="fa fa-plus-circle"></i> <span
                                class="submenu-label">自助下单</span></a></li>
                    </ul>
                </li>	
							  <li>
                    <a href="#"><i class="fa fa-globe fa-lg"></i> <span class="nav-label">排行榜</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
						<li><a href="<?php echo url('rank',['kind'=>'invite']); ?>"><i class="fa fa-users"></i> <span
                                class="submenu-label">邀请人数排行榜</span></a>
                        </li>
                        <li><a href="<?php echo url('rank',['kind'=>'order']); ?>"><i class="fa fa-list-ul"></i> <span
                                class="submenu-label">分站订单排行榜</span></a>
                        </li>
                    </ul>
                </li>
				
				
				
                <li>
                    <a href="<?php echo url('ktfz'); ?>"><i class="fa fa-flask"></i> <span class="nav-label">开通分站</span></a>
                </li>
			  <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">自助商店</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
						<li><a href="<?php echo url('shop'); ?>"><i class="fa fa-trophy"></i> <span
                                class="submenu-label">自助开通VIP</span></a>
                        </li>
                        <li><a href="<?php echo url('recharge'); ?>"><i class="fa fa-money"></i> <span
                                class="submenu-label">充值余额</span></a>
                        </li>
						<li><a href="<?php echo url('rmbList'); ?>"><i class="fa fa-tasks"></i> <span
                                class="submenu-label">收支明细</span></a>
                        </li>
                    </ul>
                </li>

			  <li>
                    <a href="#"><i class="fa fa-hand-o-up fa-lg"></i> <span class="nav-label">会员福利</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
						<li><a href="<?php echo url('invite'); ?>"><i class="fa fa-users"></i> <span
                                class="submenu-label">邀请好友</span></a>
                        </li>
                        <li><a href="<?php echo url('qiandao'); ?>"><i class="fa fa-sign-in"></i> <span
                                class="submenu-label">每日签到</span></a>
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
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="搜索添加QQ账号..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                 <ul class="nav navbar-top-links navbar-right">
						<li>
                            <a href="<?php echo url('index'); ?>" title="返回首页"><i class="fa fa-home"></i>首页</a>
                        </li>
                        <li>
                            <a href="<?php echo url('qqadd'); ?>" title="QQ列表"><i class="fa fa-qq"></i>QQ管理</a>
                        </li>
						<li>
                        <a href="<?php echo url('index/Index/logout'); ?>" onclick="return confirm('确认退出登录？');"><i class="fa fa-sign-out"></i> <span class="nav-label">注销登录</span></a>
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
            <div class="col-md-12">
                <div class="panel panel-danger">
                    <div class="panel-body text-center p-lg text-danger">
                        <h2>如果在这里找不到自己需要的内容，您可以联系站长咨询</h2>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <div class="accordion-toggle btn-block" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                什么是代挂？
                            </div>
                        </h4>
                    </div>
                    <div id="collapseOne1" class="panel-collapse collapse" style="height: auto;">
                        <div class="panel-body">
                            代挂是帮助你QQ等级加速升级，每天帮你完成等级加速任务，服务器每天帮你挂机，免去自己手动的麻烦。
                        </div>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <div class="accordion-toggle btn-block" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">
                                代挂里面包含哪些加速任务？
                            </div>
                        </h4>
                    </div>
                    <div id="collapseOne2" class="panel-collapse collapse" style="height: auto;">
                        <div class="panel-body">
                            <p>
                                <b>包含</b><br>
                                手机QQ在线6小时&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加速1.0天<br>
                                电脑QQ在线2小时&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加速0.5天<br>
                                非隐身在线2小时&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加速0.2天<br>
                                点亮QQ勋章墙&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加速0.2天<br>
                                QQ音乐听歌半小时&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加速0.5天<br>
                                QQ钱包签到&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加速0.2天<br>
                                电脑管家在线30分钟&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加速0.2天<br>
                                电脑管家使用安全功能(月限4次)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加速0.5天<br>
                                玩QQ手机游戏&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加速0.2天<br>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <div class="accordion-toggle btn-block" data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3">
                                如何添加QQ进行代挂呢？
                            </div>
                        </h4>
                    </div>
                    <div id="collapseOne3" class="panel-collapse collapse" style="height: auto;">
                        <div class="panel-body">
                            在平台充值点数后点击添加代挂QQ按钮，在弹窗中输入QQ号、QQ密码和要代挂的天数即可代挂。
                        </div>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <div class="accordion-toggle btn-block" data-toggle="collapse" data-parent="#accordion4" href="#collapseOne4">
                                代挂每天什么时候开始挂机？
                            </div>
                        </h4>
                    </div>
                    <div id="collapseOne4" class="panel-collapse collapse" style="height: auto;">
                        <div class="panel-body">
                            第一次添加的QQ会在当天晚上9点开始登陆代挂，以后每天晚上凌晨12点后开始代挂，在你早上醒来时所有加速任务均已完成！
                        </div>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <div class="accordion-toggle btn-block" data-toggle="collapse" data-parent="#accordion5" href="#collapseOne5">
                                补挂是干什么用的以及补挂的是时间是多少？
                            </div>
                        </h4>
                    </div>
                    <div id="collapseOne5" class="panel-collapse collapse" style="height: auto;">
                        <div class="panel-body">
                            补挂是当天凌晨代挂时由于帐号进入保护模式或密码错误导致代挂无法登陆完成加速任务的，可以点击补挂连接申请补挂，这样会在晚上9点时给你的QQ再代挂一次，补挂的时间也就是晚上9点！
                        </div>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <div class="accordion-toggle btn-block" data-toggle="collapse" data-parent="#accordion6" href="#collapseOne6">
                                QQ为什么会进入保护模式？
                            </div>
                        </h4>
                    </div>
                    <div id="collapseOne6" class="panel-collapse collapse" style="height: auto;">
                        <div class="panel-body">
                            这是你平时使用QQ的地区与我们的代挂服务器地区不一致，导致出现异地登陆，腾讯为了保护你的帐号，担心你是被盗号了，所以会出现这个提示，或者是被冻结进入保护模式，这个一般是在刚开始代挂前3-7天容易出现，之后就不会再有了。（建议你在QQ安全中心APP里的登陆记录中把异地登陆的“确认为本人登陆”，这样可以加快挂出常用地点和减少冻结的可能）
                        </div>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <div class="accordion-toggle btn-block" data-toggle="collapse" data-parent="#accordion7" href="#collapseOne7">
                                QQ进入保护模式了怎么办？
                            </div>
                        </h4>
                    </div>
                    <div id="collapseOne7" class="panel-collapse collapse" style="height: auto;">
                        <div class="panel-body">
                            登陆 <a href="https://aq.qq.com/007" target="_blank" rel="noreferrer">https://aq.qq.com/007</a>这个页面可以解除保护模式，解除后在本平台更新一次QQ密码就可以恢复代挂了。
                        </div>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <div class="accordion-toggle btn-block" data-toggle="collapse" data-parent="#accordion8" href="#collapseOne8">
                                代挂的服务器地理位置在哪里？
                            </div>
                        </h4>
                    </div>
                    <div id="collapseOne8" class="panel-collapse collapse" style="height: auto;">
                        <div class="panel-body">
                            位置在“广东省 佛山市”，如果你也是在这个地方，那么你添加的代挂QQ不会异常哦。
                        </div>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <div class="accordion-toggle btn-block" data-toggle="collapse" data-parent="#accordion9" href="#collapseOne9">
                                代挂加速任务每天能加速多少呢？
                            </div>
                        </h4>
                    </div>
                    <div id="collapseOne9" class="panel-collapse collapse" style="height: auto;">
                        <div class="panel-body">
                            非QQ会员每天固定加速3天，QQ会员用户根据会员加速倍数计算公式为：会员加速倍数×1.7+1.7 ，例如SVIP8级加速是3.0倍的计算为3×1.7+1.7=6.8天。(以上计算不包含电脑管家月限4次使用安全功能任务的0.5天)

                        </div>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <div class="accordion-toggle btn-block" data-toggle="collapse" data-parent="#accordion10" href="#collapseOne10">
                                代挂错误日志中出现错误怎么办呢？
                            </div>
                        </h4>
                    </div>
                    <div id="collapseOne10" class="panel-collapse collapse" style="height: auto;">
                        <div class="panel-body">
                            请查看本代挂帮助下方最底部，根据代挂错误日志上的原因查看对应的解决方法。
                        </div>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <div class="accordion-toggle btn-block" data-toggle="collapse" data-parent="#accordion11" href="#collapseOne11">
                                错误日志【登陆密码错误】解决方法
                            </div>
                        </h4>
                    </div>
                    <div id="collapseOne11" class="panel-collapse collapse" style="height: auto;">
                        <div class="panel-body">
                            密码错误的无法登陆，所有项目都不会加速，请在平台更新QQ密码后申请补挂即可，密码中尽量不要带特殊符号，符号大部分是分为全角和半角的，如果带有符号输入时需要注意区分，否则可能因为这个导致密码错误！
                        </div>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <div class="accordion-toggle btn-block" data-toggle="collapse" data-parent="#accordion12" href="#collapseOne12">
                                错误日志【QQ进入保护模式】解决方法
                            </div>
                        </h4>
                    </div>
                    <div id="collapseOne12" class="panel-collapse collapse" style="height: auto;">
                        <div class="panel-body">
                            请在<a href="http://aq.qq.com/007" target="_blank" rel="noreferrer">http://aq.qq.com/007</a>解除冻结后在平台更新一次密码即可，没加速的可以点下补挂按钮，一般代挂在前两三天因为异地登陆导致的容易冻结，多挂几次，两三天后就不会了。
                        </div>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <div class="accordion-toggle btn-block" data-toggle="collapse" data-parent="#accordion13" href="#collapseOne13">
                                错误日志【有登陆保护】【有设备锁】解决方法
                            </div>
                        </h4>
                    </div>
                    <div id="collapseOne13" class="panel-collapse collapse" style="height: auto;">
                        <div class="panel-body">
                            请用户关闭设备锁、登陆保护这些即可，关闭地址：<a href="https://aq.qq.com/cn2/safe_service/device_lock" target="_blank" rel="noreferrer">https://aq.qq.com/cn2/safe_service/device_lock</a>，也可以在QQ安全中心APP中关闭，这些不关闭会导致勋章墙、电脑QQ在线、手机QQ在线这三项挂不上。
                        </div>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <div class="accordion-toggle btn-block" data-toggle="collapse" data-parent="#accordion14" href="#collapseOne14">
                                错误日志【未绑定银行卡】解决方法
                            </div>
                        </h4>
                    </div>
                    <div id="collapseOne14" class="panel-collapse collapse" style="height: auto;">
                        <div class="panel-body">
                            请在QQ钱包中绑定一张银行卡，钱包签到这项加速官方要求是必须绑定银行卡的账户签到才有效，否则钱包签到加速这项不加速的。
                        </div>
                    </div>
                </div>
                <div style="width:100%; height:20px; visibility:hidden;"></div>
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