<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"C:\phpStudy\PHPTutorial\WWW/application/index/view3/index\reg.html";i:1504345740;}*/ ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
    <title>免费注册 - <?php echo config('web_name'); ?></title>
    <meta name="description" content="<?php echo config('web_description'); ?>">
    <meta name="keywords" content="<?php echo config('web_keywords'); ?>">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
		<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="/assets/plugins/jquery-ui-1.10.4/jquery-ui.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-3.1.1/css/bootstrap.css" rel="stylesheet" />
	<link href="/assets/plugins/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets/css/animate.css" rel="stylesheet" />
	<link href="/assets/css/style.css" rel="stylesheet" />
	<link href="/assets/css/style-responsive.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
		<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/jquery-1.7.2/jquery-1.7.2.js"></script>
	<script src="/assets/plugins/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
	<script src="/assets/plugins/bootstrap-3.1.1/js/bootstrap.min.js"></script>
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/assets/js/apps.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="/skin/css/jquery-ui.css" rel="stylesheet" />
	<link href="/skin/css/bootstrap.css" rel="stylesheet" />
	<link href="/skin/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/skin/css/animate.css" rel="stylesheet" />
	<link href="/skin/css/style.css" rel="stylesheet" />
	<link href="/skin/css/style-responsive.css" rel="stylesheet" />
	    <link rel="stylesheet" type="text/css" href="/assets/sweetalert/sweetalert.css"/>
    <script src="/assets/sweetalert/sweetalert.min.js" type="text/javascript"></script>
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login bg-black animated fadeInDown">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> 注册
                    <small>使用本站功能时请先注册哦</small>
                </div>
                <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>
            </div>
            <!-- end brand -->
            <div class="login-content">
                <form action="" method="POST" class="margin-bottom-0">
                    <div class="form-group m-b-20">
                        <input type="text" class="form-control input-lg" placeholder="用户名" name="user" />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control input-lg" placeholder="密码" name="pwd"/>
                    </div>
					     <div class="form-group m-b-20">
                        <input type="txt" class="form-control input-lg" placeholder="QQ" name="qq"/>
                    </div>
					    <div class="form-group m-b-20">
                        <input type="txt" class="form-control input-lg" placeholder="邀请码" name="invite"/>
                    </div>
					<div class="form-group">
                        <label class="label-checkbox">
                            <img title="点击刷新" src="/other/code.php" onclick="this.src='/other/code.php?'+Math.random();" class="img-rounded" >
                        </label>
                        <input type="text" name="code" placeholder="输入验证码"
                               class="form-control input-sm bounceIn animation-delay6">
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">注册</button>
						<button type="button" class="btn btn-success btn-block btn-lg" onclick="window.location.href='<?php echo url('login'); ?>';" >登录</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end login -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/skin/js/jquery-1.7.2.js"></script>
	<script src="/skin/js/jquery-ui.min.js"></script>
	<script src="/skin/js/bootstrap.min.js"></script>
	<script src="/skin/js/jquery.slimscroll.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/skin/js/apps.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- Jquery -->
<script src="/assets/js/jquery-1.10.2.min.js"></script>

<!-- Bootstrap -->
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>

<!-- Modernizr -->
<script src='/assets/js/modernizr.min.js'></script>

<!-- Pace -->
<script src='/assets/js/pace.min.js'></script>

<!-- Popup Overlay -->
<script src='/assets/js/jquery.popupoverlay.min.js'></script>

<!-- Slimscroll -->
<script src='/assets/js/jquery.slimscroll.min.js'></script>

<?php if(isset($alert)): ?>
<script type="text/javascript"><?php echo $alert; ?></script>
<?php endif; ?>
</body>
</html>