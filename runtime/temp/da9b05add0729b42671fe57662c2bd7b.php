<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:55:"D:\phpStudy\WWW/application/index/view3/panel\ktfz.html";i:1503394201;s:57:"D:\phpStudy\WWW/application/index/view3/panel\layout.html";i:1503393754;s:58:"D:\phpStudy\WWW/application/index/view3/common\layout.html";i:1503393726;s:55:"D:\phpStudy\WWW/application/index/view3/panel\head.html";i:1503394075;}*/ ?>
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
                <div class="alert alert-danger">
                    开通分站前，请仔细阅读分站开通说明，谢谢！
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="alert alert-warning">
                    <h3>分站是什么？有什么用处？</h3>
                    <small>分站是一个独立的站点，可以自由修改页面各个内容和VIP等服务的售价，将用户留在自己的手里，有整个网站的控制权利，打造属于自己的代挂网。二级主站可以免费无限搭建分站！</small>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="alert alert-info">
                    <h3>搭建分站需要什么条件？</h3>
                    <small>代挂的分站系统和服务器均由我们来提供，并且免费赠送一个二级域名给你使用，如果你有自己的顶级域名也可以在后台绑定。</small>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="alert alert-success">
                    <h3>分站搭建好后做些什么？</h3>
                    <small>分站用户提交的QQ会同步到我们的主系统中，由我们来执行最终的代挂登陆任务，你只需要发展你的用户，专心卖代挂和做好售后服务就可以了，其它事情无需操心。</small>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="alert alert-danger">
                    <h3>分站拿货的成本价格是多少？</h3>
                    <small>我们有着先进的代挂技术，采用固定IP服务器上代挂，稳定的同时也极大的降低了代挂成本，一个QQ一个月的拿货价全套代挂仅为<b><?php echo config('zz_price_all'); ?></b>元，单项代挂仅为<b><?php echo config('zz_price_dx'); ?></b>元，你有着非常高的利润空间。</small>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="alert alert-warning">
                    <h3>分站支持哪些功能？</h3>
                    <small>分站与主站没有任何区别，完全相同的功能与界面，你的用户看不出来你这是分站，并且我们的代挂支持邮件提醒服务，用户代挂的QQ出现异常时不需要你提醒用户的。</small>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="alert alert-info">
                    <h3>我们的分站有哪些优势？</h3>
                    <small>分站拥有全网络独家的搭建下级分站功能，并且你的下级分站消费你都有10%的提成，这个提成可以直接给你拿货使用，减少你分站的成本投入，而且还自带推广功能，吸引你的用户帮你宣传。
                    </small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-success">
                    分站系统新上线，首开限时优惠中，仅需<?php echo config('web_price_ktfz'); ?>元即可开通，账户余额不足的可
                    <a href="<?php echo url('recharge'); ?>" class="btn-xs btn-warning">点此充值</a>！
                </div>
                <div class="alert alert-info">点击下方按钮系统全自动为你开通分站，无需手工搭建，更不需要建站技术即可拥有自己的平台。</div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary table-responsive">
                    <div class="panel-heading">
                        自助开通
                        <span class="label label-danger pull-right">余额:<?php echo $userInfo['point']; ?>元</span>
                    </div>
                    <div class="panel-body">

                        <form method="post" class="alert alert-info" onsubmit="return checkinput()">
							<div class="form-group">
	                            <div class="input-group">
	                                <div class="input-group-addon">
	                                    分站类型
	                                </div>
	                                <select name="type" class="form-control">
	                                    <option value="0">普通分站(<?php echo config('web_price_ktfz'); ?>元)</option>
	                                    <option value="1">二级主站(<?php echo config('zz_price_ktfz_super'); ?>元)</option>
	                                </select>
	                            </div>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        二级域名
                                    </div>
                                    <input type="text" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" name="qz"
                                           class="form-control" required data-parsley-length="[2,8]"
                                           placeholder="输入你想要的二级前缀">
                                    <div class="input-group-addon"><select name="domain">
                                        <?php if(is_array($domains) || $domains instanceof \think\Collection): $i = 0; $__LIST__ = $domains;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$domain): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo trim($domain); ?>"><?php echo trim($domain); ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        网站名称
                                    </div>
                                    <input type="text" name="name" class="form-control" required
                                           data-parsley-length="[2,10]"
                                           placeholder="输入网站名称">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        你的QQ号
                                    </div>
                                    <input type="number" name="qq" class="form-control" required
                                           data-parsley-length="[5,10]"
                                           placeholder="输入QQ号" value="<?php echo $userInfo['qq']; ?>">
                                </div>
                            </div>
                            <input type="submit" name="submit" value="点此立即拥有分站" class="btn btn-danger btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("input[name='qz']").blur(function(){
        var qz = $(this).val();
        var domain = $("select[name='domain']").val();
        if(qz){
            $.get("?action=check", { 'qz' : qz , 'domain' : domain},function(data){
                    if( data == 1 ){
                        alert('你所填写的域名已被使用，请更换一个！');
						$("input[name='qz']").focus();
                    }
            });
        }
    });
	function checkinput(){
		var qz = $("input[name='qz']").val();
		var name = $("input[name='name']").val();
		var qq = $("input[name='qq']").val();
		if(qz.length<2){
			alert('域名前缀太短！');
			return false;
		}else if(qz.length>10){
			alert('域名前缀太长！');
			return false;
		}else if(name.length<2){
			alert('网站名称太短！');
			return false;
		}else if(qq.length<5){
			alert('QQ格式不正确！');
			return false;
		}
		return true;
	}
</script>

        
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