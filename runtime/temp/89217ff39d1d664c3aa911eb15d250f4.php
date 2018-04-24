<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:94:"C:\Users\Administrator.PC-20160803UEHF\Desktop\kk\WWW/application/index/view3/index\index.html";i:1503396212;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="">
        <title><?php echo config('web_title'); ?>-<?php echo config('web_name'); ?></title>		
        <meta name="description" content="<?php echo config('web_description'); ?>">
        <meta name="keywords" content="<?php echo config('web_keywords'); ?>">

<!-- Stylesheets -->
<link type="text/css" href="skin/css/bootstrap.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic,500italic,500,300italic,300' rel='stylesheet' type='text/css'>
<link type="text/css" href="skin/css/font-awesome.css" rel="stylesheet">
<link type="text/css" href="skin/css/style.css" rel="stylesheet">
<link type="text/css" href="skin/css/theme.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="skin/css/sweetalert.css"/>
<script src="skin/js/sweetalert.min.js" type="text/javascript"></script>
</head>

<body>
<header class="header" id="jump">
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#"><b><?php echo config('web_name'); ?></b></a> </div>
      <div class="collapse navbar-collapse hidden-xs">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">首页</a></li>
          <li><a href="#">功能</a></li>
          <li><a href="#">价格</a></li>
          <li><a href="#">评价</a></li>
          <li><a href="#">投诉&建议</a></li>
		  <li><a href="#">联系站长</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
      
      <div class="collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#" data-toggle="collapse" data-target=".navbar-responsive-collapse">首页</a></li>
          <li><a href="#" data-toggle="collapse" data-target=".navbar-responsive-collapse">系统功能</a></li>
          <li><a href="#" data-toggle="collapse" data-target=".navbar-responsive-collapse">价格列表</a></li>
          <li><a href="#" data-toggle="collapse" data-target=".navbar-responsive-collapse">客户评价</a></li>
		  <li><a href="#" data-toggle="collapse" data-target=".navbar-responsive-collapse">投诉&建议</a></li>
          <li><a href="#" data-toggle="collapse" data-target=".navbar-responsive-collapse">联系站长</a></li>
        </ul>
      </div>
      <!-- /.navbar-responsive-collapse --> 
    </div>
  </nav>
</header>
<div class="jumper" id="jump0"></div>
<div class="section type-1 big splash">
  <div class="container">
    <div class="splash-block">
      <div class="centered">
        <div class="container">
          <div class="section-headlines">
            <h1><?php echo config('web_name'); ?> <br><br>全自动如约而至</h1>
          </div>		  
		  <ul class="list-inline intro-social-buttons">
								<?php if(isset($userInfo['uid'])): ?>
								<a href="<?php echo url('index/Panel/index'); ?>" class="btn btn-outline btn-lg" style="margin-top:15px;">用户中心</a>
								<?php else: ?>
								<a href="<?php echo url('login'); ?>" class="btn btn-outline btn-lg" style="margin-top:15px;">登录</a>
								<a href="<?php echo url('reg'); ?>" class="btn btn-outline btn-lg" style="margin-top:15px;">注册</a>
								<?php endif; ?>
				
			</ul>
		  </div>
      </div>
    </div>
  </div>
</div>

<section id="clients">
  
    <div class="container">
    <div class="row">
      <div class="col-lg-2"><img src="skin/images/partner1-150x100.png" alt="" /><br>电脑QQ代挂<br>附非隐身在线共加速0.7天<br><br></div>
      <div class="col-lg-2"><img src="skin/images/partner2.png" alt="" /><br>手机QQ代挂<br>秒在线6小时加速1.0天<br><br></div>
      <div class="col-lg-2"><img src="skin/images/partner3.png" alt="" /><br>勋章墙代挂<br>秒点亮加速0.2天<br><br></div>
      <div class="col-lg-2"><img src="skin/images/partner4.png" alt="" /><br>QQ音乐代挂<br>听歌满60分钟加速0.5天<br><br></div>
      <div class="col-lg-2"><img src="skin/images/partner5.png" alt="" /><br>电脑管家代挂<br>日登陆30分钟加速0.2天<br><br></div>
      <div class="col-lg-2"><img src="skin/images/partner6-150x100.png" alt="" /><br>QQ手游代挂<br>秒玩10分钟游戏加速0.2天<br><br></div>
    <br><center><font color="red">每日总加速公式：等级加速倍数×基础活跃×服务加速<br>为方便客户计算等级，系统内置等级计算器以供使用。</font></center></div>
  </div>
</section>
<div id="jump1" class="jumper"></div>
<!-- Services -->
<div class="section type-2">
  <div class="container">
    <div class="section-headlines">
      <h4>定义“全自动”</h4>
      <div>下面，<?php echo config('web_name'); ?>将颠覆您对“全自动”的认识。</div>
    </div>
    <div class="row">
      <div class="col-lg-6 features text-center"> <img src="skin/images/pic3-450x410.png" alt="" /> </div><br>
      <div class="col-lg-6 features">
        <div class="media"> <i class=" icon-wrench pull-left animated bounce"></i>
          <div class="media-body">
            <h3>一站式无缝对接</h3>
            <div>乐迅云代挂采用独家对接系统，通过云数据将所有QQ明文密码等数据进行云加密，在不漏号的情况下促使安全无忧.</div>
          </div>
        </div>
        <br class="gap-30" />
        <div class="media"> <i class=" icon-bar-chart pull-left animated bounce"></i>
          <div class="media-body">
            <h3>代挂补挂全自动</h3>
            <div>乐迅云代挂采用的是独家制作的全自动代挂补挂软件，非同市场软件.</div>
          </div>
        </div>
        <br class="gap-30" />
        <div class="media"> <i class=" icon-mobile-phone pull-left animated bounce"></i>
          <div class="media-body">
            <h3>补挂提交全自动</h3>
            <div>如果您以前使用的都是需要自己动手提交补挂的话，那么不妨一试咱们的.</div>
          </div>
        </div>
        <br class="gap-30" />
        <div class="media"> <i class=" icon-pencil pull-left animated bounce"></i>
          <div class="media-body">
            <h3>全自动化云检测</h3>
            <div>每天全自动检测今日已加速项目，代没代挂一目了然.</div>
          </div>
        </div>
        <div class="visible-xs visible-sm"> <br class="gap-30" />
          <hr class="gap-divider" />
          <br class="gap-30" />
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
</div>
 </div>

<!-- Stats  -->
<div class="section type-3 stats">
<div class="section-headlines">
      <h4>“再升级”</h4>
    </div>
    <div class="container">  <div class="row ">

      <div class="col-sm-4 col-xs-12">
        <h3><i class="icon-group"></i> “秒赞”来袭</h3>
        <p> 更新后，代挂系统中新增秒赞秒评等数十项功能，空间玩网、全套自动签到、小工具，应有尽有.</p>
      </div>
      <div class="col-sm-4 col-xs-12">
        <h3><i class="icon-ok"></i> “总经销商”上线</h3>
        <p> 在分站等级中，原分销代理商之上新增总经销商，提卡超低价， 并且可设置前台用户自助搭建分站的价格.</p>
      </div>
      <div class="col-sm-4 col-xs-12">
        <h3><i class=" icon-money"></i> “在线支付”分配</h3>
        <p> 全新版本中，我们给所有分站等各级别站点均免费配置一个在线支付的商户，分站长可在后台填写商户信息，客户充值的余额都将直接进入您的商户账号，余额满10元后第二天自动结算至所填写的支付宝账号. </p>
      </div>
    </div>
  </div>
</div>
<div id="jump2" class="jumper"></div>
<!-- Pricing -->
<div class="section type-2">
  <div class="container">
    <div class="section-headlines">
      <h4>价格</h4>
      <h2>重新定义物美价廉</h2>
    </div>
    <div class="pricing-plans row">
      <div class="col-lg-4">
        <div class="plan radius3">
          <div class="plan-name">
            <h2>一个月代挂服务
              <div class="plan-price"> <b>￥0.2</b></div>
            </h2>
          </div>
          <div class="plan-details">
            <div><b>全套</b> QQ等级代挂服务 &nbsp; <span class="icon-ok text-success pull-right"></span> </div>
            <div><b>全套</b> 秒赞秒评服务  &nbsp; <span class="icon-asterisk text-danger pull-right"></span> </div>
            <div><b>自动</b> 提交补挂  &nbsp; <span class="icon-ok  text-success pull-right"></span> </div>
            <div><b>自动</b> 检测今日代挂项目  &nbsp; <span class="icon-ok  text-success pull-right"></span> </div>
            <div><b>7*24</b> 小时客服顾问服务  &nbsp; <span class="icon-ok  text-success pull-right"></span> </div>
          </div>
          <div class="plan-action"> <a href="#" class="btn btn-inverse btn-block btn-large">立即购买</a> </div>
        </div>
        <div class="visible-xs visible-sm"> <br class="gap-30" />
          <hr class="gap-divider" />
          <br class="gap-30" />
        </div>
      </div>
      <div class="col-lg-4">
        <div class="plan plan-featured radius3">
          <div class="plan-name">
            <h2>高级代理
              <div class="plan-price"> <b>￥25.00</b></div>
            </h2>
          </div>
          <div class="plan-details">
            <div><b>70％</b> 代理平台折扣 &nbsp; <span class="icon-ok text-success pull-right"></span> </div>
            <div><b>尊贵</b> 身份外显  &nbsp; <span class="icon-ok  text-success pull-right"></span> </div>
            <div><b>全站</b> 性消费折扣  &nbsp; <span class="icon-ok  text-success pull-right"></span> </div>
            <div><b>不限</b> 折扣总额  &nbsp; <span class="icon-ok  text-success pull-right"></span> </div>
            <div><b>24/7</b> 小时客服顾问服务  &nbsp; <span class="icon-ok  text-success pull-right"></span> </div>
          </div>
          <div class="plan-action"> <a href="#" class="btn btn-success btn-block btn-large">立即开通</a> </div>
        </div>
        <div class="visible-xs visible-sm"> <br class="gap-30" />
          <hr class="gap-divider" />
          <br class="gap-30" />
        </div>
      </div>
      <div class="col-lg-4">
        <div class="plan radius3">
          <div class="plan-name">
            <h2>分销代理商站点
              <div class="plan-price"> <b>￥ 100.00</b></div>
            </h2>
          </div>
          <div class="plan-details">
            <div><b>提全套代挂月卡价格：</b> 0.2元 &nbsp; <span class="icon-ok text-success pull-right"></span> </div>
            <div><b>可自定义网站信息，独立的网站</b>&nbsp; <span class="icon-ok text-success pull-right"></span> </div>
            <div><b>可绑定顶级域名，且分站可绑定其二级</b>  &nbsp; <span class="icon-ok  text-success pull-right"></span> </div>
            <div><b>可搭建下级分站，20％下级消费提成</b>  &nbsp; <span class="icon-ok  text-success pull-right"></span> </div>
            <div><b>拥有独立在线支付商户，提供永久售后</b>  &nbsp; <span class="icon-ok  text-success pull-right"></span> </div>
          </div>
          <div class="plan-action"> <a href="#" class="btn btn-inverse btn-block btn-large">立即搭建</a> </div>
        </div>
        <div class="visible-xs visible-sm"> <br class="gap-30" />
          <hr class="gap-divider" />
          <br class="gap-30" />
        </div>
      </div>
    </div>
    <!--end:.pricing-table--> 
    
  </div>
</div>
<div id="jump3" class="jumper"></div>
<!-- Testimonials -->
<div class="section type-2"> 
  <div class="container">
    <div class="section-headlines">
      <h4>客户评价</h4>
      <h2>好的代挂不怕曝光评价</h2>
    </div>
    <div id="carousel-testimonial" class="carousel slide bs-docs-carousel-example">
      <ol class="carousel-indicators">
        <li data-target="#carousel-testimonial" data-slide-to="0" class=""></li>
        <li data-target="#carousel-testimonial" data-slide-to="1" class=""></li>
        <li data-target="#carousel-testimonial" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <div class="testimonial media">
            <div class="testimonial-avatar pull-right hidden-xs	"> <img src="http://q4.qlogo.cn/headimg_dl?dst_uin=1063950124&spec=100" class="avatar size-default img-circle"> </div>
            <div class="testimonial-content media-body">
              <p class="lead">用代挂已经一年了，已经连续升级20多级了，真的没想到如此便利，虽然中间出了点全网性的差错，但是也及时补救了，真的很喜欢用这个，加油！</p>
              来自客户 - <b>尊贵VIP⑤</b><b>   春风十里不如你</b> </div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial media">
            <div class="testimonial-avatar pull-right hidden-xs	"> <img src="http://q4.qlogo.cn/headimg_dl?dst_uin=2940228015&spec=100" class="avatar size-default img-circle"> </div>
            <div class="testimonial-content media-body">
              <p class="lead"> 俺也用了代挂一年了，从最开始还没成为一个独立的系统的时候就开始用。刚用的时候我很丑，没想到用了一年以后，变帅了不少，多少妹子暗送芳心。唉！原来这家代挂还有这种操作，这真是一家良心代挂！</p>
              来自客户 - <b>尊贵VIP⑤</b>   决定四目相对</div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial media">
            <div class="testimonial-avatar pull-right hidden-xs	"> <img src="http://q4.qlogo.cn/headimg_dl?dst_uin=1134246819&spec=100" class="avatar size-default img-circle"> </div>
            <div class="testimonial-content media-body">
              <p class="lead"> 当初一直没找个稳定的代挂，半年前选择了代挂，嗯，一直到现在都在用，稳定就不用说了，才做分站一天就回本了，还是希望越来越好咯！ </p>
              来自普通分站 - <b>分站长 </b> 森七 </div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial media">
            <div class="testimonial-avatar pull-right hidden-xs	"> <img src="http://q4.qlogo.cn/headimg_dl?dst_uin=1051933685&spec=100" class="avatar size-default img-circle"> </div>
            <div class="testimonial-content media-body">
              <p class="lead"> 拍马屁不会，我是个老实人，说句实在的，这家代挂除了东西很多有时候小白搞不明白怎么弄以外，其他一切都很好。</p>
              来自代理 - <b>顶级代理</b>  傲 </div>
          </div>
        </div>
      </div>
      <div class="carousel-controller btn-group"> <a class="btn btn-xs btn-inverse" href="#" data-slide="prev"> <i class="icon-angle-left"></i> </a> <a class="btn btn-xs btn-inverse" href="#" data-slide="next"> <i class="icon-angle-right"></i> </a> </div>
    </div>
  </div>
</div>
<div id="jump4" class="jumper"></div>
<!-- Subscription -->
<section class="section type-4 email-susbscription">

  <div class="container">
    <div class="row">
    <center><div class="col-lg-3">
    	<img width="200" height="180" src="skin/images/email.png" alt="email">
    </div></center>
    
    <div class="col-lg-9">
    <center><h1>投诉&建议</h1></center>
    <p>为防止各分站等级别站点站长由于后台存款不足，导致前台用户开通代挂失败【即视为跑路处理】等问题，<br>特在此处设立代挂系统投诉专用企业QQ：<a href="" target="_blank" title="乐迅云代挂"><b><font color="red">联系投诉客服</font></b></a><br><br>友情提示：点击上方联系投诉客服按钮即可弹出QQ回话窗口，本Q仅处理投诉/建议，其他问题请您联系所属站点站长咨询。<br>此外，为简化投递建议方式，所有客户可直接在下方的发送建议邮件中输入相关内容进行投递建议。</p>

    </div>
    
       
    </div>
  </div>
</section>

<div id="jump5" class="jumper"></div>

<!-- Contact -->
 <div class="section type-1 section-contact">
  <div class="container">
    <div class="section-headlines">
      <h4>
      联系站长
      </h4>
      <h2>售后：为您定制一切</h2>
    </div>
    <div class="row">
    <div class="col-lg-4">
      <address>
      <div class="address-row">
      </div>
      </address>
   <center>您可以在下/右方按要求填写信息投递建议:</center>
    </div>
    <br><div class="col-lg-7 col-lg-offset-1">
    <form role="form" action="" method="post" role="form" id="contac_form" name="contact_form">
      <div class="form-group">
        <div class="row">
          <div class="col-lg-6">
            <input type="text" class="form-control" id="InputName" name="user" placeholder="【必填】此处填写您的称谓">
            <br class="gap-15"/>
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="email" name="email" placeholder="【必填】此处填写您的邮箱账号">
          </div>
        </div>
      </div>
     
      <div class="form-group">
        <textarea class="form-control" id="InputMessage" rows="8" placeholder="此处具体填写您的建议" name="text"></textarea>
      </div>
      <button type="submit" name="submit" id="submit" class="btn btn-block btn-success">立即投递</button>
    </form>
	<div id="success">您的建议已成功！感谢您的宝贵建议！</div>
	<div id="error">对不起！您的建议无法发出！请稍后重试！</div>	
  </div>
</div>
 
</div>
</div>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">版权归属  &copy; - 全自动化代挂系统 -  <a href="#" target="_blank" title="<?php echo config('web_name'); ?>"><?php echo config('web_name'); ?></a></div>
    </div>
  </div>
</footer>

<!--Scripts--> 
<script src="skin/js/jquery-1.10.2.min.js"></script> 
<script src="skin/js/bootstrap.min.js"></script> 
<script src="skin/js/jquery.smooth-scroll.min.js"></script> 
<script src="skin/js/jquery.mixitup.min.js"></script> 
<script src="skin/js/theme.js"></script> 
<script>
		$('.nav-tabs a').click(function (e) {
			e.preventDefault();
			$(this).tab('show');
		})
	</script>	
</body>
</html>