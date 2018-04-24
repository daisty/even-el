<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:97:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view3/panel\recharge.html";i:1503394279;s:95:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view3/panel\layout.html";i:1503393754;s:96:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view3/common\layout.html";i:1503393726;s:93:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view3/panel\head.html";i:1503394075;}*/ ?>
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
		<div class="modal inmodal fade" id="myModa4" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" onclick="clearInterval(interval1)"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
						</button>
						<h4 class="modal-title">订单信息</h4>
					</div>
					<div class="modal-body" id="showInfo2">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-white" data-dismiss="modal" onclick="clearInterval(interval1)">关闭</button>
					</div>
				</div>
			</div>
		</div>
        <div class="row">
            <div class="col-lg-12">
		<?php if(config('zz_alipay_api') or config('zz_tenpay_api') or config('zz_wxpay_api') or config('zz_qqpay_api')): ?>
        <div class="panel panel-info">
            <div class="panel-heading">
                在线充值
            </div>
            <div class="panel-body">
                <form action="#" class="form-horizontal">
				<input type="hidden" name="uid" value="<?php echo $userInfo['uid']; ?>">
				<input type="hidden" name="type" value="alipay">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">余额</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="<?php echo $userInfo['point']; ?>元" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">充值</label>
                        <div class="col-lg-8">
                            <input type="text" name="value" placeholder="输入要充值的余额" class="form-control" required>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-lg-3 control-label">方式</label>
                        <div class="col-lg-8">
							<?php if(config('zz_alipay_api')): ?><label><input type="radio" name="paytype" value="alipay" checked>支付宝</label><?php endif; if(config('zz_tenpay_api')): ?><label><input type="radio" name="paytype" value="tenpay">财付通</label><?php endif; if(config('zz_qqpay_api')): ?><label><input type="radio" name="paytype" value="qqpay">QQ钱包</label><?php endif; if(config('zz_wxpay_api')): ?><label><input type="radio" name="paytype" value="wxpay">微信支付</label><?php endif; ?>
						</div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-8">
							<button type="button" class="btn btn-primary" id="buyshop" >确认充值</button>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModa4" id="alink" style="visibility: hidden;"></button>
                            <button class="btn btn-default-outline" type="reset">重置</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
		<?php endif; ?>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        充值卡充值
                    </div>
                    <div class="panel-body">
                        <form method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">余额</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" value="<?php echo $userInfo['point']; ?>元" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">卡密</label>
                                <div class="col-lg-8">
                                    <input type="text" name="km" placeholder="输入充值卡卡密" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-8">
                                    <button class="btn btn-primary" type="submit">确认充值</button>
                                    <button class="btn btn-default-outline" type="reset">重置</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/assets/js/layer/layer.min.js"></script>
<script src="/assets/js/qrcode.min.js"></script>
<script>
function getcodeurl(codeurl) {
  var qrcode = new QRCode("qrcode", {
	  text: codeurl,
	  width: 240,
	  height: 240,
	  colorDark: "#000000",
	  colorLight: "#ffffff",
	  correctLevel: QRCode.CorrectLevel.H
  });
}
var interval1;
function loadmsg(trade_no) {
	$.ajax({
		type: "POST",
		dataType: "json",
		url: "<?php echo url('ajax/getshop'); ?>",
		timeout: 10000, 
		data: {trade_no: trade_no}, 
		success: function (data, textStatus) {
			if (data.code == 2) {
				clearInterval(interval1);
				if (confirm("您已支付完成，需要跳转到用户中心吗？")) {
					window.location.href="<?php echo url('recharge'); ?>";
				} else {}
			}else if(data.code == -1) {
				layer.alert(data.msg);
				clearInterval(interval1);
			}else if (data.code == 1) {
			}
		},
		error: function (XMLHttpRequest, textStatus, errorThrown) {
			if (textStatus == "timeout") {
				//loadmsg();
			} else {
				alert('创建连接失败');
			}
		}
	});
}
$(document).ready(function(){
$("#buyshop").click(function(){
	var value=$("input[name='value']").val();
	var paytype=$("input:radio[name='paytype']:checked").val();
	if(value=='' || value==0){
		layer.alert("请填写充值金额");
		return false;
	}
	layer.load(0,2);
	ajax.get("/index/ajax/recharge.html?type="+paytype+"&value="+value, "json", function(d) {
		if(d.code!=1){
			setTimeout(function(){
				layer.closeAll('loading');
			}, 1);
			layer.alert(d.msg);
			return false;
		}
		tishi_2(paytype,d);
	});
});
});
function tishi_2(paytype,d){
	if(d.epay==1){
		var data = '<p>订单号：'+d.trade_no+'</p><p>订单金额：<b>'+d.money+'</b>元</p><p>订单名称：'+d.name+'</p>'+
					'<p><b>付款后系统会自动为您充值到账，即时生效，无需卡密。</b></p>'+
					'<a href="/other/submit.php?type=epay&type2='+paytype+'&orderid='+d.trade_no+'" class="btn btn-success btn-block" target="_blank">立即支付</a>'+
					'</form>';
	}else if(paytype=='alipay'){
		var data = '<p>订单号：'+d.trade_no+'</p><p>订单金额：<b>'+d.money+'</b>元</p><p>订单名称：'+d.name+'</p>'+
					'<p><b>支付宝付款后系统会自动为您充值到账，即时生效，无需卡密。</b></p>'+
					'<a href="/other/submit.php?type=alipay&orderid='+d.trade_no+'" class="btn btn-success btn-block" target="_blank">立即支付</a>'+
					'</form>';
	}else if(paytype=='tenpay'){
		var data = '<p>订单号：'+d.trade_no+'</p><p>订单金额：<b>'+d.money+'</b>元</p><p>订单名称：'+d.name+'</p>'+
					'<p><b>财付通付款后系统会自动为您充值到账，即时生效，无需卡密。</b></p>'+
					'<a href="/other/submit.php?type=tenpay&orderid='+d.trade_no+'" class="btn btn-success btn-block" target="_blank">立即支付</a>'+
					'</form>';
	}else if(paytype=='wxpay'){
		var data = '<p style="text-align: center;"><b>￥'+d.money+'</b></p>'+
		'<div style="text-align: center;" id="qrcode"></div>'+
				'<p><br></p>'+
				'<p style="text-align: center;">请使用微信扫一扫，扫描上方二维码完成支付。'+
				'<p style="text-align: center;">手机用户可保存上方二维码到手机中，在微信扫一扫中选择“相册”即可</p>'+
				'<p style="text-align: center;"><b>扫码付款后系统会自动为您充值，即时生效，无需卡密。</b></p>';
	}else if(paytype=='qqpay'){
		var data = '<p style="text-align: center;"><b>￥'+d.money+'</b></p>'+
		'<div style="text-align: center;" id="qrcode"></div>'+
				'<p><br></p>'+
				'<p style="text-align: center;">请使用手机QQ扫一扫，扫描上方二维码完成支付。'+
				'<p style="text-align: center;">手机用户可保存上方二维码到手机中，在手机QQ扫一扫中选择“相册”即可</p>'+
				'<p style="text-align: center;"><b>扫码付款后系统会自动为您充值，即时生效，无需卡密。</b></p>';
	}
	interval1=setInterval("loadmsg('"+d.trade_no+"')", 3000);
	var divshow = $("#showInfo2");
	divshow.text("");
	divshow.append(data);
	setTimeout(function(){
		layer.closeAll('loading');
	}, 1);
	$("#alink").click();
	if(paytype=='wxpay'||paytype=='qqpay'){
		getcodeurl(d.code_url);
	}
}
var ajax={
	get: function(url, dataType, callback) {
		dataType = dataType || 'html';
		$.ajax({
			type: "GET",
			url: url,
			async: true,
			dataType: dataType,
			cache:false,
			beforeSend:function(){
				$(".colorful_loading_frame,.colorful_loading").css("display", "block");
			},
			complete:function(){
				$(".colorful_loading_frame,.colorful_loading").css("display", "none");
			},
			success: function(data,status) {
				if (callback == null) {
					return;
				}
				callback(data);
			},
			error: function(error) {
				alert('创建连接失败');
			}
		});
	},
	post: function(url, parameter, dataType, callback) {
		dataType = dataType || 'html';
		$.ajax({
			type: "POST",
			url: url,
			async: true,
			dataType: dataType,
			data: parameter,
			cache:false,
			beforeSend:function(){
				$(".colorful_loading_frame,.colorful_loading").css("display", "block");
			},
			complete:function(){
				$(".colorful_loading_frame,.colorful_loading").css("display", "none");
			},
			success: function(data,status) {
				if (callback == null) {
					return;
				}
				callback(data);
			},
			error: function(error) {
				alert('创建连接失败');
			}
		});
	}
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