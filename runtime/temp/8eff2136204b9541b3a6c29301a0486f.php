<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"D:\phpStudy\WWW/application/index/view3/index\login.html";i:1507204977;}*/ ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
    <title>用户登录 - <?php echo config('web_name'); ?></title>
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
	    <link rel="stylesheet" type="text/css" href="/assets/sweetalert/sweetalert.css"/>
    <script src="/assets/sweetalert/sweetalert.min.js" type="text/javascript"></script>
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
                    <span class="logo"></span> 登录
                    <small>使用本站功能时请先登录哦</small>
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
                    <label class="checkbox m-b-20">
                        <input type="checkbox" name="is_check"/> 记住登录状态
                    </label>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">登录</button>
						<button type="button" class="btn btn-success btn-block btn-lg" onclick="window.location.href='<?php echo url('reg'); ?>';" >注册</button>
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