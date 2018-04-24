<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:58:"D:\phpStudy\WWW/application/index/view3/admin\mainset.html";i:1524219249;s:57:"D:\phpStudy\WWW/application/index/view3/admin\layout.html";i:1503394617;s:58:"D:\phpStudy\WWW/application/index/view3/common\layout.html";i:1523935237;s:55:"D:\phpStudy\WWW/application/index/view3/admin\head.html";i:1524220587;}*/ ?>
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
        

    <div class="padding-md">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        主站配置
                    </div>
                    <div class="panel-body">
						
                        <form role="form" class="form-horizontal" method="post">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">主站地址</label>
                                <div class="col-lg-8">
                                    <input type="text" name="domain" class="form-control"
                                           value="<?php echo config('zz_domain'); ?>">
                                </div>
							</div>
							
                            <!-- <div class="form-group">
                                <label class="col-lg-3 control-label">分站可选择域名</label>
                                <div class="col-lg-8">
                                    <input type="text" name="domains" class="form-control"
                                           value="<?php echo config('zz_domains'); ?>">
                                    <pre>多个域名用,隔开！</pre>
								</div>		
							</div> -->
							
                            <div class="form-group">
                                <label class="col-lg-3 control-label">主站站长QQ</label>
                                <div class="col-lg-8">
                                    <input type="text" name="qq" class="form-control" value="<?php echo config('zz_qq'); ?>">
                                </div>
							</div>
							
                            <!-- <div class="form-group">
                                <label class="col-lg-3 control-label">QQ登录调用API地址</label>
                                <div class="col-lg-8">
                                    <input type="text" name="login_api" class="form-control" value="<?php echo config('zz_login_api'); ?>">
                                </div>
                            </div>
							<div class="form-group">
		                        <label class="col-lg-3 control-label">圈圈赞API地址</label>
		                        <div class="col-lg-8">
		                            <input type="text" name="quan_api" class="form-control" value="<?php echo config('zz_quan_api'); ?>">
		                        </div>
		                    </div>
                            <div class="form-group">
		                        <label class="col-lg-3 control-label">添加QQ模式</label>
		                        <div class="col-lg-8">
									<select name="addqq_mode" class="form-control">
									<option value="0" <?php if(config('zz_addqq_mode') == 0): ?>selected<?php endif; ?>>登录并验证QQ密码</option>
									<option value="1" <?php if(config('zz_addqq_mode') == 1): ?>selected<?php endif; ?>>无需验证QQ密码</option>
									</select>
		                        </div>
		                    </div>
							<div class="form-group">
		                        <label class="col-lg-3 control-label">监控密钥</label>
		                        <div class="col-lg-8">
		                            <input type="text" name="cronkey" class="form-control" value="<?php echo config('zz_cronkey'); ?>" placeholder="可留空">
									<pre>如需自动签到，需要监控http://<?php echo $_SERVER['HTTP_HOST']; ?>/cron/qd.php?key=监控密钥</pre>
		                        </div>
		                    </div>
						 <div class="form-group">
		                        <label class="col-lg-3 control-label">代挂管家接口</label>
		                        <div class="col-lg-8">
		                            <select name="getway_api" class="form-control">
									<option value="0" <?php if(config('zz_getway_api') == 0): ?>selected<?php endif; ?>>关闭</option>
									<option value="1" <?php if(config('zz_getway_api') == 1): ?>selected<?php endif; ?>>开启</option>
									</select>
									<pre>此接口用于相关电脑软件直接获取代挂QQ列表，<a href="<?php echo url('admin/syskey'); ?>">查看接口密钥</a></pre>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-lg-3 control-label">全套代挂成本价格</label>
		                        <div class="col-lg-4">
		                            <input type="text" name="price_all" class="form-control"
		                                   value="<?php echo config('zz_price_all'); ?>">
		                        </div>
								<div class="col-lg-4">
		                            <input type="text" name="price_all2" class="form-control"
		                                   value="<?php echo config('zz_price_all2'); ?>">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-lg-3 control-label">单个项目代挂成本价格</label>
		                        <div class="col-lg-4">
		                            <input type="text" name="price_dx" class="form-control"
		                                   value="<?php echo config('zz_price_dx'); ?>">
		                        </div>
								<div class="col-lg-4">
		                            <input type="text" name="price_dx2" class="form-control"
		                                   value="<?php echo config('zz_price_dx2'); ?>">
		                        </div>
		                    </div>
							<div class="form-group">
		                        <label class="col-lg-3 control-label">开通二级主站价格</label>
		                        <div class="col-lg-8">
		                            <input type="number" name="price_ktfz_super" class="form-control"
		                                   value="<?php echo config('zz_price_ktfz_super'); ?>">
		                        </div>
		                    </div>
							<div class="form-group">
		                        <label class="col-lg-3 control-label">申请提现余额比例</label>
		                        <div class="col-lg-8">
		                            <input type="text" name="tixian_rate" class="form-control"
		                                   value="<?php echo config('zz_tixian_rate'); ?>" placeholder="填写百分数，例如90">
		                        </div>
		                    </div>
							<div class="form-group">
		                        <label class="col-lg-3 control-label">申请提现最低余额</label>
		                        <div class="col-lg-8">
		                            <input type="text" name="tixian_min" class="form-control"
		                                   value="<?php echo config('zz_tixian_min'); ?>">
		                        </div>
							</div> -->
<!-- 							
							<div class="form-group">
		                        <label class="col-lg-3 control-label">分站开分站提成比例(百分数)</label>
		                        <div class="col-lg-8">
		                            <input type="text" name="ktfz_rate" class="form-control"
		                                   value="<?php echo config('zz_ktfz_rate'); ?>" placeholder="填写百分数，例如10">
		                        </div>
							</div>
							
		                    <div class="form-group">
		                        <label class="col-lg-3 control-label">被邀请人下单提成比例(百分数)</label>
		                        <div class="col-lg-8">
		                            <input type="text" name="invite_rate" class="form-control"
		                                   value="<?php echo config('zz_invite_rate'); ?>" placeholder="填写百分数，例如10">
		                        </div>
							</div>  


							
							<div class="form-group">
		                        <label class="col-lg-3 control-label">填写邀请码被邀请方获得奖励</label>
		                        <div class="col-lg-8">
		                            <input type="text" name="point_invite1" class="form-control"
		                                   value="<?php echo config('zz_point_invite1'); ?>">
		                        </div>
							</div>
							
							<div class="form-group">
		                        <label class="col-lg-3 control-label">填写邀请码邀请方获得奖励</label>
		                        <div class="col-lg-8">
		                            <input type="text" name="point_invite2" class="form-control"
		                                   value="<?php echo config('zz_point_invite2'); ?>">
		                        </div>
							</div>
							
		                    <div class="form-group">
		                        <label class="col-lg-3 control-label">每天前多少个签到有奖励</label>
		                        <div class="col-lg-8">
		                            <input type="text" name="qiandao_num" class="form-control" value="<?php echo config('zz_qiandao_num'); ?>" placeholder="0为无限制">
		                        </div>
							</div>
							
		                    <div class="form-group">
		                        <label class="col-lg-3 control-label">签到送金币规则</label>
		                        <div class="col-lg-8">
		                            <input type="text" name="qiandao_rule" class="form-control" value="<?php echo config('zz_qiandao_rule'); ?>">
		                            <div class="alert alert-danger">1:10 代表连续签到1天送10金币，多条规则用,隔开<br>
		                                1:10,3:20,5:30 代表连续签到第一天送10，第二天送10，第三天送20，第4天送20，第五天送30，以后都是送30。以此类推！
		                            </div>
		                        </div>
							</div> -->
							
							<!-- <div class="form-group">
								<label class="col-lg-3 control-label">聊天室屏蔽词汇</label>
								<div class="col-lg-8">
									<input type="text" name="chat_stop" class="form-control" value="<?php echo config('zz_chat_stop'); ?>">
									<div class="alert alert-danger">多个词汇用,隔开
									</div>
								</div>
							</div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">分站后台公告</label>
                                <div class="col-lg-8">
                                    <textarea name="gg_admin" rows="5" class="form-control"><?php echo getHtmlCode(config('zz_gg_admin'),true); ?></textarea>
                                </div>
                            </div>
							<div class="form-group">
								<label class="col-sm-3 control-label">聊天室公告</label>
								<div class="col-sm-9">
									<textarea name="gg_chat" rows="5" class="form-control"><?php echo getHtmlCode(config('zz_gg_chat'),true); ?></textarea>
								</div>
							</div> -->

                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-8">
                                    <button class="btn btn-primary" type="submit">保存配置</button>
                                    <button class="btn btn-default-outline" type="reset">重置</button>
                                </div>
							</div>
							
                        </form>
				<!-- <div class="alert alert-info">提示：所有价格单位均为RMB/元，可精确到小数点后两位；所有比例均为不大于100的正整数 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
var items = $("select[default]") || 0;
for (i = 0; i < items.length; i++) {
	$(items[i]).val($(items[i]).attr("default"));
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