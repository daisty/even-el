<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:67:"C:\phpStudy\PHPTutorial\WWW/application/index/view3/panel\ktfz.html";i:1503394201;s:69:"C:\phpStudy\PHPTutorial\WWW/application/index/view3/panel\layout.html";i:1503393754;s:70:"C:\phpStudy\PHPTutorial\WWW/application/index/view3/common\layout.html";i:1503393726;s:67:"C:\phpStudy\PHPTutorial\WWW/application/index/view3/panel\head.html";i:1523864609;}*/ ?>
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
        <style>body{font-family:"Î¢ÈíÑÅºÚ",Arial,Helvetica,sans-serif,"SimSun";}</style>

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
                                        <i class="ti-user m-r-5"></i> ä¸ªäººä¿¡æ¯</a>
                                </li>
                                <li>
                                    <a href="<?php echo url('recharge'); ?>">
                                        <i class="ti-money m-r-5"></i> åå¼ä½é¢</a>
                                </li>
                                <?php if($userInfo['power'] == 9): ?>
                                <li>
                                    <a href="<?php echo url('index/Admin/index'); ?>">
                                        <i class="ti-settings m-r-5"></i> ç«é¿åå°</a>
                                </li>
                                <?php endif; ?>
                                <li>
                                    <a href="<?php echo url('index/Index/logout'); ?>" onclick="return confirm('ç¡®è®¤éåºç»å½ï¼');">
                                        <i class="ti-power-off m-r-5"></i> éåºç»å½</a>
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
                            <span class="nav-label">ç¨æ·ä¸­å¿</span>
                            </span>
                        </a>
                    </li>



                    <!-- <li>
                        <a href="#">
                            <i class="fa fa-plus"></i>
                            <span class="nav-label">ä»£æç®¡ç</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">

                            <li><a href="<?php echo url('qqAdd'); ?>"><i class="fa fa-plus"></i> <span class="submenu-label">æ·»å QQ</span></a>
                        </li>
                        <li><a href="<?php echo url('qqList'); ?>"><i class="fa fa-list-ul"></i> <span
                                class="submenu-label">QQåè¡¨</span></a></li>
                        <li><a href="<?php echo url('order'); ?>"><i class="fa fa-plus-circle"></i> <span
                                class="submenu-label">èªå©ä¸å</span></a></li>

                        </ul>
                    </li> -->

                    <li>
                        <a href="#">
                            <i class="fa fa-globe fa-lg"></i>
                            <span class="nav-label">æè¡æ¦</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="<?php echo url('rank',['kind'=>'invite']); ?>">
                                    <i class="fa fa-users"></i>
                                    <span class="submenu-label">éè¯·äººæ°æè¡æ¦</span>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="<?php echo url('rank',['kind'=>'order']); ?>">
                                    <i class="fa fa-list-ul"></i>
                                    <span class="submenu-label">åç«è®¢åæè¡æ¦</span>
                                </a>
                            </li> -->
                        </ul>
                    </li>



                    <!-- <li>
                        <a href="<?php echo url('ktfz'); ?>">
                            <i class="fa fa-flask"></i>
                            <span class="nav-label">å¼éåç«</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="nav-label">èªå©ååº</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="<?php echo url('shop'); ?>">
                                    <i class="fa fa-trophy"></i>
                                    <span class="submenu-label">èªå©å¼éVIP</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('recharge'); ?>">
                                    <i class="fa fa-money"></i>
                                    <span class="submenu-label">åå¼ä½é¢</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('rmbList'); ?>">
                                    <i class="fa fa-tasks"></i>
                                    <span class="submenu-label">æ¶æ¯æç»</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-hand-o-up fa-lg"></i>
                            <span class="nav-label">ä¼åç¦å©</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="<?php echo url('invite'); ?>">
                                    <i class="fa fa-users"></i>
                                    <span class="submenu-label">éè¯·å¥½å</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('qiandao'); ?>">
                                    <i class="fa fa-sign-in"></i>
                                    <span class="submenu-label">æ¯æ¥ç­¾å°</span>
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
                                èå¤©å®¤
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
                                å¸®å©ä¸­å¿
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
                                <input type="text" placeholder="æç´¢æ·»å QQè´¦å·..." class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a href="<?php echo url('index'); ?>" title="è¿åé¦é¡µ">
                                    <i class="fa fa-home"></i>é¦é¡µ</a>
                            </li>
                            <li>
                                <a href="<?php echo url('qqadd'); ?>" title="QQåè¡¨">
                                    <i class="fa fa-qq"></i>QQç®¡ç</a>
                            </li>
                            <li>
                                <a href="<?php echo url('index/Index/logout'); ?>" onclick="return confirm('ç¡®è®¤éåºç»å½ï¼');">
                                    <i class="fa fa-sign-out"></i>
                                    <span class="nav-label">æ³¨éç»å½</span>
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
            <div class="col-md-12">
                <div class="alert alert-danger">
                    å¼éåç«åï¼è¯·ä»ç»éè¯»åç«å¼éè¯´æï¼è°¢è°¢ï¼
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="alert alert-warning">
                    <h3>åç«æ¯ä»ä¹ï¼æä»ä¹ç¨å¤ï¼</h3>
                    <small>åç«æ¯ä¸ä¸ªç¬ç«çç«ç¹ï¼å¯ä»¥èªç±ä¿®æ¹é¡µé¢åä¸ªåå®¹åVIPç­æå¡çå®ä»·ï¼å°ç¨æ·çå¨èªå·±çæéï¼ææ´ä¸ªç½ç«çæ§å¶æå©ï¼æé å±äºèªå·±çä»£æç½ãäºçº§ä¸»ç«å¯ä»¥åè´¹æ éæ­å»ºåç«ï¼</small>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="alert alert-info">
                    <h3>æ­å»ºåç«éè¦ä»ä¹æ¡ä»¶ï¼</h3>
                    <small>ä»£æçåç«ç³»ç»åæå¡å¨åç±æä»¬æ¥æä¾ï¼å¹¶ä¸åè´¹èµ éä¸ä¸ªäºçº§ååç»ä½ ä½¿ç¨ï¼å¦æä½ æèªå·±çé¡¶çº§ååä¹å¯ä»¥å¨åå°ç»å®ã</small>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="alert alert-success">
                    <h3>åç«æ­å»ºå¥½ååäºä»ä¹ï¼</h3>
                    <small>åç«ç¨æ·æäº¤çQQä¼åæ­¥å°æä»¬çä¸»ç³»ç»ä¸­ï¼ç±æä»¬æ¥æ§è¡æç»çä»£æç»éä»»å¡ï¼ä½ åªéè¦åå±ä½ çç¨æ·ï¼ä¸å¿åä»£æååå¥½å®åæå¡å°±å¯ä»¥äºï¼å¶å®äºææ éæå¿ã</small>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="alert alert-danger">
                    <h3>åç«æ¿è´§çææ¬ä»·æ ¼æ¯å¤å°ï¼</h3>
                    <small>æä»¬æçåè¿çä»£æææ¯ï¼éç¨åºå®IPæå¡å¨ä¸ä»£æï¼ç¨³å®çåæ¶ä¹æå¤§çéä½äºä»£æææ¬ï¼ä¸ä¸ªQQä¸ä¸ªæçæ¿è´§ä»·å¨å¥ä»£æä»ä¸º<b><?php echo config('zz_price_all'); ?></b>åï¼åé¡¹ä»£æä»ä¸º<b><?php echo config('zz_price_dx'); ?></b>åï¼ä½ æçéå¸¸é«çå©æ¶¦ç©ºé´ã</small>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="alert alert-warning">
                    <h3>åç«æ¯æåªäºåè½ï¼</h3>
                    <small>åç«ä¸ä¸»ç«æ²¡æä»»ä½åºå«ï¼å®å¨ç¸åçåè½ä¸çé¢ï¼ä½ çç¨æ·çä¸åºæ¥ä½ è¿æ¯åç«ï¼å¹¶ä¸æä»¬çä»£ææ¯æé®ä»¶æéæå¡ï¼ç¨æ·ä»£æçQQåºç°å¼å¸¸æ¶ä¸éè¦ä½ æéç¨æ·çã</small>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="alert alert-info">
                    <h3>æä»¬çåç«æåªäºä¼å¿ï¼</h3>
                    <small>åç«æ¥æå¨ç½ç»ç¬å®¶çæ­å»ºä¸çº§åç«åè½ï¼å¹¶ä¸ä½ çä¸çº§åç«æ¶è´¹ä½ é½æ10%çææï¼è¿ä¸ªææå¯ä»¥ç´æ¥ç»ä½ æ¿è´§ä½¿ç¨ï¼åå°ä½ åç«çææ¬æå¥ï¼èä¸è¿èªå¸¦æ¨å¹¿åè½ï¼å¸å¼ä½ çç¨æ·å¸®ä½ å®£ä¼ ã
                    </small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-success">
                    åç«ç³»ç»æ°ä¸çº¿ï¼é¦å¼éæ¶ä¼æ ä¸­ï¼ä»é<?php echo config('web_price_ktfz'); ?>åå³å¯å¼éï¼è´¦æ·ä½é¢ä¸è¶³çå¯
                    <a href="<?php echo url('recharge'); ?>" class="btn-xs btn-warning">ç¹æ­¤åå¼</a>ï¼
                </div>
                <div class="alert alert-info">ç¹å»ä¸æ¹æé®ç³»ç»å¨èªå¨ä¸ºä½ å¼éåç«ï¼æ éæå·¥æ­å»ºï¼æ´ä¸éè¦å»ºç«ææ¯å³å¯æ¥æèªå·±çå¹³å°ã</div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary table-responsive">
                    <div class="panel-heading">
                        èªå©å¼é
                        <span class="label label-danger pull-right">ä½é¢:<?php echo $userInfo['point']; ?>å</span>
                    </div>
                    <div class="panel-body">

                        <form method="post" class="alert alert-info" onsubmit="return checkinput()">
							<div class="form-group">
	                            <div class="input-group">
	                                <div class="input-group-addon">
	                                    åç«ç±»å
	                                </div>
	                                <select name="type" class="form-control">
	                                    <option value="0">æ®éåç«(<?php echo config('web_price_ktfz'); ?>å)</option>
	                                    <option value="1">äºçº§ä¸»ç«(<?php echo config('zz_price_ktfz_super'); ?>å)</option>
	                                </select>
	                            </div>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        äºçº§åå
                                    </div>
                                    <input type="text" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" name="qz"
                                           class="form-control" required data-parsley-length="[2,8]"
                                           placeholder="è¾å¥ä½ æ³è¦çäºçº§åç¼">
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
                                        ç½ç«åç§°
                                    </div>
                                    <input type="text" name="name" class="form-control" required
                                           data-parsley-length="[2,10]"
                                           placeholder="è¾å¥ç½ç«åç§°">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        ä½ çQQå·
                                    </div>
                                    <input type="number" name="qq" class="form-control" required
                                           data-parsley-length="[5,10]"
                                           placeholder="è¾å¥QQå·" value="<?php echo $userInfo['qq']; ?>">
                                </div>
                            </div>
                            <input type="submit" name="submit" value="ç¹æ­¤ç«å³æ¥æåç«" class="btn btn-danger btn-block">
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
                        alert('ä½ æå¡«åçååå·²è¢«ä½¿ç¨ï¼è¯·æ´æ¢ä¸ä¸ªï¼');
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
			alert('åååç¼å¤ªç­ï¼');
			return false;
		}else if(qz.length>10){
			alert('åååç¼å¤ªé¿ï¼');
			return false;
		}else if(name.length<2){
			alert('ç½ç«åç§°å¤ªç­ï¼');
			return false;
		}else if(qq.length<5){
			alert('QQæ ¼å¼ä¸æ­£ç¡®ï¼');
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