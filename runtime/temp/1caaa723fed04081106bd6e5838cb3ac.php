<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:55:"D:\phpStudy\WWW/application/index/view3/panel\chat.html";i:1503394145;s:57:"D:\phpStudy\WWW/application/index/view3/panel\layout.html";i:1503393754;s:58:"D:\phpStudy\WWW/application/index/view3/common\layout.html";i:1503393726;s:55:"D:\phpStudy\WWW/application/index/view3/panel\head.html";i:1503394075;}*/ ?>
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
        

    <div class="main-header clearfix">
        <div class="page-title">
            <h3 class="no-margin">聊天室</h3>
        </div><!-- /page-title -->
    </div>
<script type="text/javascript">
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
function Addstr(str) {
	$("#chatval").val($("#chatval").val()+str);
}
function deleteid(id) {
	var url="/index/ajax/chat/do/delete.html";
	ajax.post(url,'id='+id, 'json', function(d) {
		alert(d.msg);
	});
}
$(document).ready(function(){
	$('#clear').click(function(){
		$("#chatpage").html('<div class="chat-ts">系统提示：你已成功清除聊天内容！</div>');
	});
	$('#look').click(function(){
		self=$(this);
		var id=self.attr('startchat');
		if(id == 1){
			alert('没有更早的聊天内容了！');
			return;
		}
		if (self.attr("data-lock") === "true") return;
			else self.attr("data-lock", "true");
		self.html('加载中……');
		var url="/index/ajax/chat/do/look.html";
		ajax.post(url,'id='+id, 'json', function(d) {
			if(d.code ==0){
				if(d.data){
					$.each(d.data, function(i, chat){
						if(chat.user == '<?php echo $userInfo['user']; ?>'){
							$("#chatpage").prepend('<div class="chat-user chat-me">['+chat.addtime+'] <span class="chatuser"><a class="chatuser" href="#" onclick="Addstr(\'@'+chat.user+' \');return false">'+chat.user+'</a></span> '+chat.id+'#</div><div class="chat-div"><div class="chat-content right">'+chat.message+'</div></div>'); 
						}else{
							$("#chatpage").prepend('<div class="chat-user">#'+chat.id+' <span class="chatuser"><a class="chatuser" href="#" onclick="Addstr(\'@'+chat.user+' \');return false">'+chat.user+'</a></span> ['+chat.addtime+']</div><div class="chat-content">：'+chat.message+'</div>'); 
						}
						self.attr('startchat',chat.id);
					}); 
				}
			}else{
				alert(d.msg);
			}
			self.attr("data-lock", "false");
			self.html('查看稍早内容^');
		});
	});
	$('#send').click(function(){
		self=$(this);
		var content=$("#chatval").val();
		if(content == ''){
			alert('请输入聊天内容！');
			return;
		}
		if (self.attr("data-lock") === "true") return;
			else self.attr("data-lock", "true");
		self.html('发送中……');
		var id=self.attr('lastchat');
		var url="/index/ajax/chat/do/send.html";
		ajax.post(url,'id='+id+'&content='+content, 'json', function(d) {
			if(d.code ==0){
				if(d.data){
					$.each(d.data, function(i, chat){
						if(chat.user == '<?php echo $userInfo['user']; ?>'){
							$("#chatpage").append('<div class="chat-user chat-me">['+chat.addtime+'] <span class="chatuser"><a class="chatuser" href="#" onclick="Addstr(\'@'+chat.user+' \');return false">'+chat.user+'</a></span> '+chat.id+'#</div><div class="chat-div"><div class="chat-content right">'+chat.message+'</div></div>'); 
						}else{
							$("#chatpage").append('<div class="chat-user">#'+chat.id+' <span class="chatuser"><a class="chatuser" href="#" onclick="Addstr(\'@'+chat.user+' \');return false">'+chat.user+'</a></span> ['+chat.addtime+']</div><div class="chat-content">：'+chat.message+'</div>'); 
						}
						self.attr('lastchat',chat.id);
					}); 
					$('#body').scrollTop($('body')[0].scrollHeight);
					$("#chatval").val('');
				}
			}else{
				alert(d.msg);
			}
			self.attr("data-lock", "false");
			self.html('发送');
		});
	});
});
function Loadmsg(){
	var self=$('#send');
	var id=self.attr('lastchat');
	var url="/index/ajax/chat/do/new.html";
	ajax.post(url,'id='+id, 'json', function(d) {
		if(d.code ==0){
			if(d.data){
				$.each(d.data, function(i, chat){
					if(chat.user == '<?php echo $userInfo['user']; ?>'){
						$("#chatpage").append('<div class="chat-user chat-me">['+chat.addtime+'] <span class="chatuser"><a class="chatuser" href="#" onclick="Addstr(\'@'+chat.user+' \');return false">'+chat.user+'</a></span> '+chat.id+'#</div><div class="chat-div"><div class="chat-content right">'+chat.message+'</div></div>'); 
					}else{
						$("#chatpage").append('<div class="chat-user">#'+chat.id+' <span class="chatuser"><a class="chatuser" href="#" onclick="Addstr(\'@'+chat.user+' \');return false">'+chat.user+'</a></span> ['+chat.addtime+']</div><div class="chat-content">：'+chat.message+'</div>'); 
					}
					self.attr('lastchat',chat.id);
				}); 
			}
		}else{
			alert(d.msg);
		}
	});
}
window.setInterval(Loadmsg, 30000);
</script>
    <div class="padding-md">
        <div class="row">
	<div class="col-lg-8 col-md-10 col-sm-12 center-block" style="float: none;">
		<div class="panel panel-primary">
			<div class="panel-heading"><i class="fa fa-comments"></i>公共聊天室<span class="right" id="look" startchat="<?php echo $startchat; ?>">查看稍早内容^</span></div>
			<div class="panel-body" id="chatpage">
				<?php if(is_array($chatList) || $chatList instanceof \think\Collection): $i = 0; $__LIST__ = $chatList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$chat): $mod = ($i % 2 );++$i;if($userInfo['user'] == $chat['user']): ?>
					<div class="chat-user chat-me">[<?php echo $chat['addtime']; ?>] <span class="chatuser"><a class="chatuser" href="#" onclick="Addstr('@<?php echo $chat['user']; ?> ');return false"><?php echo $chat['user']; ?></a></span> <?php echo $chat['id']; ?>#</div><div class="chat-div"><div class="chat-content right"><?php echo $chat['message']; if($userInfo['power'] == 9): ?>&nbsp;[<a href="#" onclick="deleteid('<?php echo $chat['id']; ?>')">删</a>]<?php endif; ?></div></div>
					<?php else: ?>
					<div class="chat-user chat-me">[<?php echo $chat['addtime']; ?>] <span class="chatuser"><a class="chatuser" href="#" onclick="Addstr('@<?php echo $chat['user']; ?> ');return false"><?php echo $chat['user']; ?></a></span> <?php echo $chat['id']; ?>#</div><div class="chat-div"><div class="chat-content right"><?php echo $chat['message']; if($userInfo['power'] == 9): ?>&nbsp;[<a href="#" onclick="deleteid('<?php echo $chat['id']; ?>')">删</a>]<?php endif; ?></div></div>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				<div class="chat-ts">系统提示：请文明聊天，勿刷屏，违者后果自负！</div>
			</div>
		</div>
		<div class="panel panel-info">
			<div class="input-group">
				<div class="input-group-addon" id="clear">清屏</div>
				<input class="form-control" id="chatval" placeholder="请输入文明聊天内容" onkeydown="if(event.keyCode==13){$('#send').click()}">
				<div class="input-group-addon" lastchat="<?php echo $lastchat; ?>" id="send">发送</div>
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

<link rel="stylesheet" type="text/css" href="/assets/css/chat.css"/>

<?php if(isset($alert)): ?>
<script type="text/javascript"><?php echo $alert; ?></script>
<?php endif; ?>
</body>
</html>