<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:94:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view3/panel\order.html";i:1503394222;s:95:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view3/panel\layout.html";i:1503393754;s:96:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view3/common\layout.html";i:1503393726;s:93:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view3/panel\head.html";i:1503394075;}*/ ?>
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
            <div class="col-xs-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center">下单说明！</h3>
                    </div>
                    <?php echo getHtmlCode(config('web_gg_dgadd')); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        自助下单
						<span class="pull-right">
							<label class="label-checkbox inline">
                                剩余金币：<?php echo $userInfo['point']; ?>
                            </label>
						</span>
                    </div>

                    <div class="panel-body">
                        <form method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-md-2">选择下单QQ</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="qid">
                                        <?php if(is_array($qqList) || $qqList instanceof \think\Collection): $i = 0; $__LIST__ = $qqList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$qq): $mod = ($i % 2 );++$i;?>
                                		<option value="<?php echo $qq['qid']; ?>" <?php if($qq['qid'] == $aqid): ?>selected<?php endif; ?>><?php echo $qq['uin']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">代挂项目</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="tid" id="dgtid" onchange="getPoint();">
                                        <?php if(is_array($toolList) || $toolList instanceof \think\Collection): $i = 0; $__LIST__ = $toolList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tool): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $tool['tid']; ?>" price="<?php echo $tool['price']; ?>"><?php echo $tool['name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">下单月数</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <input type="number" name="num" value="1" id="num" class="form-control"
                                               onchange="getPoint();" required>
                                        <div class="input-group-addon">月</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">消耗金币</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <input type="text" value="<?php echo $price_all; ?>" class="form-control" id="need"
                                               disabled>
                                        <div class="input-group-addon">个</div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2"></label>
                                <div class="col-md-10">
                                    <button class="btn btn-primary" type="submit">确认下单</button>
                                    <button class="btn btn-default-outline" type="reset">重置</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
		<div class="panel panel-info">
            <div class="panel-heading">
                卡密下单
            </div>

            <div class="panel-body">
                <form method="post" class="form-horizontal">
				<input type="hidden" name="mod" value="kami">
                    <div class="form-group">
                        <label class="control-label col-md-2">选择下单QQ</label>
                        <div class="col-md-10">
                            <select class="form-control" name="qid">
                                <?php if(is_array($qqList) || $qqList instanceof \think\Collection): $i = 0; $__LIST__ = $qqList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$qq): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $qq['qid']; ?>" <?php if($qq['qid'] == $aqid): ?>selected<?php endif; ?>><?php echo $qq['uin']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">代挂项目</label>
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control"
                                       value="全套代挂" disabled>
									   <div class="input-group-addon"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">代挂卡密</label>
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="text" name="km" id="km" class="form-control"
                                       placeholder="代挂卡密不是余额卡密，请仔细分辨！" required>
                                <div class="input-group-addon"></div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2"></label>
                        <div class="col-md-10">
                            <button class="btn btn-primary" type="submit">确认下单</button>
                            <button class="btn btn-default-outline" type="reset">重置</button>
                        </div>
                    </div>
                </form>
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

    <script type="text/javascript">
        function getPoint() {
            var value = $('#num').val();
            var tid = $('#dgtid option:selected').val();
            var price = <?php echo $price_dx; ?>;
            if (tid == 1) {
                price = <?php echo $price_all; ?>;
            }
            $('#need').val(value * price);
        }
    </script>
    
<?php if(isset($alert)): ?>
<script type="text/javascript"><?php echo $alert; ?></script>
<?php endif; ?>
</body>
</html>