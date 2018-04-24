<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"D:\phpStudy\WWW/application/index/view3/index\index.html";i:1524278655;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <title>比创尔网络科技有限公司</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="<?php echo config('web_description'); ?>">
  <meta name="keywords" content="<?php echo config('web_keywords'); ?>">

  <!-- Stylesheets -->
  <link rel="shortcut icon" href="/favicon.ico" />
  <link type="text/css" href="skin/css/bootstrap.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic,500italic,500,300italic,300' rel='stylesheet'
    type='text/css'>
  <link type="text/css" href="skin/css/font-awesome.css" rel="stylesheet">
  <link type="text/css" href="skin/css/style.css" rel="stylesheet">
  <link type="text/css" href="skin/css/style_new.css" rel="stylesheet">
  <link type="text/css" href="skin/css/theme.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="skin/css/sweetalert.css" />
  <script src="skin/js/sweetalert.min.js" type="text/javascript"></script>
  <link type="text/css" href="skin/css/animate.min.css" rel="stylesheet">
  <link type="text/css" href="skin/css/index.css" rel="stylesheet">
  <style>
    .navbar {
      position: fixed;
    }

    .seleted-menu li {
      font-size: 16px;
    }

    .seleted-menu li a {
      color: #fff;
    }

    .seleted-menu .weixin {
      text-align: center;
      color: #fff;
    }

    .seleted-menu>li>a:hover,
    .seleted-menu>li>a:focus {
      color: #00a0dc;
      text-decoration: none;
      background-color: transparent;
    }

    .wait {
      height: auto;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-top: 10px;
      margin-left: 40px;
      display: none;
    }

    .wait .wait-same {
      width: 100px;
      height: 72px;
      position: relative;
      perspective: 500px;
    }

    .wait-same .wait-one {
      position: absolute;
      top: 0;
      margin-left: 1px;
      animation: one 1s 3 linear alternate;
    }

    .wait-same .wait-two {
      position: absolute;
      top: 4%;
      left: 5%;
      animation: two 1s 3 linear alternate;
    }

    .wait-same .wait-three {
      position: absolute;
      top: 5%;
      left: 6%;
      animation: three 1s 3 linear alternate;
    }

    .wait-same .wait-four {
      position: absolute;
      top: 5%;
      left: 7%;
      animation: four 1s 3 linear alternate;
    }

    .wait-same .wait-five {
      position: absolute;
      top: 0;
      top: 12%;
      left: 11%;
      animation: fifth 1s 3 linear alternate;
    }

    .wait-same .wait-six {
      position: absolute;
      top: 22%;
      left: 21%;
      animation: six 1s 3 linear alternate;
    }

    .navbar-default .navbar-nav>li>a:hover .wait {
      display: block;
    }

    @keyframes one {
      0% {
        transform: rotate(360deg) translateZ(100px);
      }
      50% {
        transform: rotate(180deg) translateZ(50px);
      }
      100% {
        transform: rotate(0deg) translateZ(-100px);
      }
    }

    @keyframes two {
      0% {
        transform: rotate(0deg) translateZ(80px);
      }
      50% {
        transform: rotate(180deg) translateZ(40px);
      }
      100% {
        transform: rotate(360deg) translateZ(-80px);
      }
    }

    @keyframes three {
      0% {
        transform: rotate(360deg) translateZ(60px);
      }
      50% {
        transform: rotate(180deg) translateZ(30px);
      }
      100% {
        transform: rotate(0deg) translateZ(-60px);
      }
    }

    @keyframes four {
      0% {
        transform: rotate(0deg) translateZ(40px);
      }
      50% {
        transform: rotate(180deg) translateZ(20px);
      }
      100% {
        transform: rotate(360deg) translateZ(-40px);
      }
    }

    @keyframes fifth {
      0% {
        transform: rotate(360deg) translateZ(15px);
      }
      50% {
        transform: rotate(180deg) translateZ(10px);
      }
      100% {
        transform: rotate(0deg) translateZ(-15px);
      }
    }

    @keyframes six {
      0% {
        transform: rotate(0deg) translateZ(10px);
      }
      50% {
        transform: rotate(180deg) translateZ(5px);
      }
      100% {
        transform: rotate(360deg) translateZ(-10px);
      }
    }

    .navbar-default .navbar-nav>li>a:hover,
    .navbar-default .navbar-nav>li>a:focus {
      color: #00a0dc;
    }

    @media screen and (max-width: 800px) {
      ul.callbacks_tabs {
        bottom: 15%;
      }
    }

    @media screen and (max-width: 767px) {
      .loginHe {
        position: absolute;
        left: 50%;
        top: 2%;
        margin-left: -12%;
      }
      #navM {
        width: 100%;
        margin-left: 0;
      }
    }

    @media screen and (max-width: 1199px) {
      #navM {
        margin-left: 23%;
      }
    }

    @media screen and (max-width: 991px) {
      #navM {
      margin-left: 0;
    }
  }
  </style>
</head>

<body>
  <div id="allContent">
    <!-- Slider -->
    <div class="w3-banner-info-agile" id="home">
      <div class="slider w3layouts agileits">
        <ul class="rslides w3layouts agileits" id="slider">
          <li>
            <div class="layer agileits-banner agileits-banner2">
              <p>Professional spirit </p>
              <div class="imgs">
                <img src="/assets/Index/img/banner_txt01.png" alt="">
                <img src="/assets/Index/img/banner_txt02.png" alt="">
              </div>
              <h4 class="title2-w3ls">we are innovation driven</h4>
              <a href="#" data-target="#myModal">访问商城</a>
            </div>
          </li>
          <li>
            <div class="layer agileits-banner agileits-banner1">
              <p>Professional spirit </p>
              <div class="imgs">
                <img src="/assets/Index/img/banner_txt03.png" alt="">
                <img src="/assets/Index/img/banner_txt04.png" alt="">
              </div>
              <h4 class="title2-w3ls">we are innovation driven</h4>
              <a href="#" data-target="#myModal">了解更多</a>
            </div>
          </li>
          <li>
            <div class="layer agileits-banner agileits-banner3">
              <p>Professional spirit </p>
              <h3>比</h3>
              <h3>创</h3>
              <h3>尔</h3>
              <h3>网</h3>
              <h3>络</h3>
              <h3>科</h3>
              <h3>技</h3>
              <h3>有</h3>
              <h3>限</h3>
              <h3>公</h3>
              <h3>司</h3>
              <h4 class="title2-w3ls">we are innovation driven</h4>
              <a href="#" data-target="#myModal">技术支持</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- //Slider -->
    <header class="header" id="jump">
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="naver">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".example-navbar-collapse">
              <span class="sr-only">切换导航</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" title="广州市比创尔网络科技有限公司">
              <img src="/assets/Index/img/logo2.png" height="65" alt="广州市比创尔网络科技有限公司">
              <strong style="font-size: 25px; color: #00a0dc; vertical-align: middle">比创尔</strong>
            </a>
          </div>
          <div class="collapse navbar-collapse example-navbar-collapse" id="navM">
            <ul class="nav navbar-nav navbar-right" id="navClick">
              <li class="active">
                <a href="#" data-to="home">首页</a>
              </li>
              <li>
                <a href="#" data-to="serive">服务内容</a>
              </li>
              <li>
                <a href="#" data-to="price">价格</a>
              </li>
              <li>
                <a href="#" data-to="sale">投诉&建议</a>
              </li>
              <li>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">联系我们</a>
                <ul class="dropdown-menu seleted-menu">
                  <li>
                    <a href="#">QQ：2732071</a>
                  </li>
                  <li>
                    <a href="#">电话：13126446924</a>
                  </li>
                  <li class="weixin">微信公众号：
                    <a href="#">
                      <img src="skin/images/code.jpg" alt="">
                    </a>
                  </li>
                </ul>
              </li>
              <!-- <li onclick="window.location.href='/index/index/login.html'" class="loginHide">
                <a href="/index/index/login.html" class="btn btn-outline btn-md"><?php echo $userInfo['user']; ?></a>
              </li>
              <li onclick="window.location.href='/index/index/reg.html'" class="loginHide">
                <a href="/index/index/reg.html" class="btn btn-outline btn-md">注册</a>
              </li> -->
            </ul>
          </div>
          <div class="loginHe">
            <a href="<?php echo url('login'); ?>" class="btn btn-outline btn-md">登录</a>
            <a href="<?php echo url('reg'); ?>" class="btn btn-outline btn-md">注册</a>
          </div>
        </div>
        <div class="wait">
          <div class="wait-same">
            <img src="skin/images/1-01.png" class="wait-one" alt="">
            <img src="skin/images/1-02.png" class="wait-two" alt="">
            <img src="skin/images/1-03.png" class="wait-three" alt="">
            <img src="skin/images/1-04.png" class="wait-four" alt="">
            <img src="skin/images/1-05.png" class="wait-five" alt="">
            <img src="skin/images/1-06.png" class="wait-six" alt="">
          </div>
        </div>
      </nav>
    </header>
    <div class="jumper" id="jump0"></div>
    <!-- about -->
    <div class="section-w3ls about-w3ls" id="about">
      <div class="about-top">
        <h3 class="title-agile about text-center">关于我们</h3>
        <span class="about-p text-center">策略
          <span class="sub-title"></span>创新
          <span class="sub-title"></span>进步
        </span>
      </div>
      <div class="container">
        <div class="about-main about1">
          <div class="col-md-4 about-grid-w3ls about-left">
            <div class="about-sub-grid-w3ls">
              <h4>公司简介</h4>
              <p>广州市比创尔网络科技有限公司成立与2018年，极力创新互联网的商游格局。 </p>
            </div>
            <div class="about-sub-grid-w3ls">
              <h4>Company profile</h4>
              <p>Guangzhou Bi Chuang Network Technology Co., Ltd. was set up in 2018 to innovate the business pattern of Internet.
              </p>
            </div>
          </div>
          <div class="col-md-4 about-grid-w3ls1 about-center">
            <img src="/skin/images/a3.png" class="img-responsive" alt="" />
          </div>
          <div class="col-md-4 about-grid-w3ls ab-right about-right">
            <div class="about-sub-grid-w3ls">
              <h4>创新技术</h4>
              <p>采用最新模式,颠覆传统电商模式,迈进新时代第一步！</p>
            </div>
            <div class="about-sub-grid-w3ls">
              <h4>innovate</h4>
              <p>Using the latest model to subvert the traditional e-commerce model and step into the first step of the new
                era!
              </p>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <!-- //about -->
    <section id="clients">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-2 oneAnim">
            <img src="skin/images/partner1-150x100.png" alt="" />
            <p>PC端网站开发</p>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-2 oneAnim">
            <img src="skin/images/partner2.png" alt="" />
            <p>手机端网站开发</p>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-2 oneAnim">
            <img src="skin/images/partner3.png" alt="" />
            <p>百度推广</p>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-2 oneAnim">
            <img src="skin/images/music4.png" alt="" />
            <p>7*12小时在线客服</p>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-2 oneAnim">
            <img src="skin/images/partner5.png" alt="" />
            <p>程序安全维护</p>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-2 oneAnim">
            <img src="skin/images/partner6-150x100.png" alt="" />
            <p>游戏开发</p>
          </div>
          <br>
          <!-- <center>
          <font color="red">每日总加速公式：等级加速倍数×基础活跃×服务加速
            <br>为方便客户计算等级，系统内置等级计算器以供使用。</font>
        </center> -->
        </div>
      </div>
    </section>
    <div id="jump1" class="jumper"></div>
    <!-- Services -->
    <div class="section type-2" id="serive">
      <div class="container">
        <div class="section-headlines">
          <h4>服务内容</h4>
        </div>
        <div class="row">
          <div class="col-lg-6 features text-center service-img">
            <img src="skin/images/pic3-450x410.png" alt="" /> </div>
          <br>
          <div class="col-lg-6 features">
            <div class="media all-detail">
              <i class=" icon-wrench pull-left animated bounce"></i>
              <div class="media-body">
                <h3>程序维护及检测</h3>
                <div>全程提供软件维护与测试</div>
              </div>
            </div>
            <br class="gap-30" />
            <div class="media all-detail">
              <i class=" icon-bar-chart pull-left animated bounce"></i>
              <div class="media-body">
                <h3>关键词优化推广</h3>
                <div>百度、360、搜狗等关键字排名，为您提供精准流量.</div>
              </div>
            </div>
            <br class="gap-30" />
            <div class="media all-detail">
              <i class=" icon-mobile-phone pull-left animated bounce"></i>
              <div class="media-body">
                <h3>小程序、App</h3>
                <div>支持小程序生成和app打包服务，低成本全终端覆盖.</div>
              </div>
            </div>
            <br class="gap-30" />
            <div class="media all-detail">
              <i class=" icon-pencil pull-left animated bounce"></i>
              <div class="media-body">
                <h3>售后</h3>
                <div>金牌售后团队，为您提供搭建全程指导服务.</div>
              </div>
            </div>
            <div class="visible-xs visible-sm">
              <br class="gap-30" />
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
    <div class="section type-3 stats" id="provide">
      <div class="section-headlines">
        <h4>提供专业的解决方案与体验！</h4>
      </div>
      <div class="gallery-w3layouts">
        <div class="col-sm-3 w3_tab_img_left">
          <div class="demo">
            <a class="cm-overlay" href="skin/images/g1.jpg">
              <figure class="imghvr-shutter-in-out-diag-2">
                <img src="skin/images/g1.jpg" alt=" " class="img-responsive" />
              </figure>
            </a>
          </div>
          <div class="agile-gallery-info">
            <h5>方案一</h5>
            <p>我们是创新驱动的</p>
          </div>
        </div>
        <div class="col-sm-3 w3_tab_img_left">
          <div class="demo">
            <a class="cm-overlay" href="skin/images/g2.jpg">
              <figure class="imghvr-shutter-in-out-diag-2">
                <img src="skin/images/g2.jpg" alt=" " class="img-responsive" />
              </figure>
            </a>
          </div>
          <div class="agile-gallery-info">
            <h5>方案二</h5>
            <p>我们是创新驱动的</p>
          </div>
        </div>
        <div class="col-sm-3 w3_tab_img_left">
          <div class="demo">
            <a class="cm-overlay" href="skin/images/g3.jpg">
              <figure class="imghvr-shutter-in-out-diag-2">
                <img src="skin/images/g3.jpg" alt=" " class="img-responsive" />
              </figure>
            </a>
          </div>
          <div class="agile-gallery-info">
            <h5>方案三</h5>
            <p>我们是创新驱动的</p>
          </div>
        </div>
        <div class="col-sm-3 w3_tab_img_left">
          <div class="demo">
            <a class="cm-overlay" href="skin/images/g4.jpg">
              <figure class="imghvr-shutter-in-out-diag-2">
                <img src="skin/images/g4.jpg" alt=" " class="img-responsive" />
              </figure>
            </a>
          </div>
          <div class="agile-gallery-info">
            <h5>方案四</h5>
            <p>我们是创新驱动的</p>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-3 w3_tab_img_left">
          <div class="demo">
            <a class="cm-overlay" href="skin/images/g5.jpg">
              <figure class="imghvr-shutter-in-out-diag-2">
                <img src="skin/images/g5.jpg" alt=" " class="img-responsive" />
              </figure>
            </a>
          </div>
          <div class="agile-gallery-info">
            <h5>方案五</h5>
            <p>我们是创新驱动的</p>
          </div>
        </div>
        <div class="col-sm-3 w3_tab_img_left">
          <div class="demo">
            <a class="cm-overlay" href="skin/images/g8.jpg">
              <figure class="imghvr-shutter-in-out-diag-2">
                <img src="skin/images/g8.jpg" alt=" " class="img-responsive" />
              </figure>
            </a>
          </div>
          <div class="agile-gallery-info">
            <h5>方案六</h5>
            <p>我们是创新驱动的</p>
          </div>
        </div>
        <div class="col-sm-3 w3_tab_img_left">
          <div class="demo">
            <a class="cm-overlay" href="skin/images/g7.jpg">
              <figure class="imghvr-shutter-in-out-diag-2">
                <img src="skin/images/g7.jpg" alt=" " class="img-responsive" />
              </figure>
            </a>
          </div>
          <div class="agile-gallery-info">
            <h5>方案七</h5>
            <p>我们是创新驱动的</p>
          </div>
        </div>
        <div class="col-sm-3 w3_tab_img_left">
          <div class="demo">
            <a class="cm-overlay" href="skin/images/g6.jpg">
              <figure class="imghvr-shutter-in-out-diag-2">
                <img src="skin/images/g6.jpg" alt=" " class="img-responsive" />
              </figure>
            </a>
          </div>
          <div class="agile-gallery-info">
            <h5>方案八</h5>
            <p>我们是创新驱动的</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div id="jump2" class="jumper"></div>
    <!-- Pricing -->
    <div class="section type-2" id="price">
      <div class="container">
        <div class="section-headlines">
          <h4>价格</h4>
          <h2>重新定义物美价廉</h2>
        </div>
        <div class="pricing-plans row">
          <div class="col-lg-4 price-month">
            <div class="plan radius3">
              <div class="plan-name">
                <h2>全网门户
                  <div class="plan-price">
                    <b>￥500起</b>
                  </div>
                </h2>
              </div>
              <div class="plan-details">
                <div>
                  <b>域名</b> 无 &nbsp;
                  <span class="icon-asterisk text-danger pull-right"></span>
                </div>
                <div>
                  <b>服务器</b> 无 &nbsp;
                  <span class="icon-asterisk text-danger pull-right"></span>
                </div>
                <div>
                  <b>维护</b> 一次 &nbsp;
                  <span class="icon-ok  text-success pull-right"></span>
                </div>
                <div>
                  <b>手机端</b> 无 &nbsp;
                  <span class="icon-asterisk  text-danger pull-right"></span>
                </div>
                <div>
                  <b>7*24</b> 小时客服顾问服务 &nbsp;
                  <span class="icon-ok  text-success pull-right"></span>
                </div>
              </div>
              <div class="plan-action">
                <a href="<?php echo url('rform'); ?>" class="btn btn-inverse btn-block btn-large">立即搭建</a>
              </div>
            </div>
            <div class="visible-xs visible-sm">
              <br class="gap-30" />
              <hr class="gap-divider" />
              <br class="gap-30" />
            </div>
          </div>
          <div class="col-lg-4 price-tall">
            <div class="plan plan-featured radius3">
              <div class="plan-name">
                <h2>企业官网
                  <div class="plan-price">
                    <b>￥3000起</b>
                  </div>
                </h2>
              </div>
              <div class="plan-details">
                <div>
                  <b>域名</b> 送 &nbsp;
                  <span class="icon-ok text-success pull-right"></span>
                </div>
                <div>
                  <b>服务器</b> 送 &nbsp;
                  <span class="icon-ok  text-success pull-right"></span>
                </div>
                <div>
                  <b>维护</b> 一个月 &nbsp;
                  <span class="icon-ok  text-success pull-right"></span>
                </div>
                <div>
                  <b>手机端</b> 智能响应 &nbsp;
                  <span class="icon-ok  text-success pull-right"></span>
                </div>
                <div>
                  <b>24/7</b> 小时客服顾问服务 &nbsp;
                  <span class="icon-ok  text-success pull-right"></span>
                </div>
              </div>
              <div class="plan-action">
                <a href="<?php echo url('rform'); ?>" class="btn btn-success btn-block btn-large">立即搭建</a>
              </div>
            </div>
            <div class="visible-xs visible-sm">
              <br class="gap-30" />
              <hr class="gap-divider" />
              <br class="gap-30" />
            </div>
          </div>
          <div class="col-lg-4 price-proxy">
            <div class="plan radius3">
              <div class="plan-name">
                <h2>B2B2C商城系统
                  <div class="plan-price">
                    <b>￥1万起</b>
                  </div>
                </h2>
              </div>
              <div class="plan-details">
                <div>
                  <b>域名</b> 送 &nbsp;
                  <span class="icon-ok text-success pull-right"></span>
                </div>
                <div>
                  <b>服务器</b> 送&nbsp;
                  <span class="icon-ok text-success pull-right"></span>
                </div>
                <div>
                  <b>维护</b> 半年&nbsp;
                  <span class="icon-ok  text-success pull-right"></span>
                </div>
                <div>
                  <b>手机端</b> App &nbsp;
                  <span class="icon-ok  text-success pull-right"></span>
                </div>
                <div>
                  <b>拥有独立在线支付商户，提供永久售后</b> &nbsp;
                  <span class="icon-ok  text-success pull-right"></span>
                </div>
              </div>
              <div class="plan-action">
                <a href="<?php echo url('rform'); ?>" class="btn btn-inverse btn-block btn-large">立即搭建</a>
              </div>
            </div>
            <div class="visible-xs visible-sm">
              <br class="gap-30" />
              <hr class="gap-divider" />
              <br class="gap-30" />
            </div>
          </div>
        </div>
        <!--end:.pricing-table-->

      </div>
    </div>
    <!-- Pricing -->
    <!-- propose -->
    <section id="clients" class="clients-two">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-2 widthDown oneAnim">
            <div class="order-pic">
              <img src="assets/Index/img/bdtg_19.png" alt="" />
            </div>
            <p class="descript">客户提出建站申请</p>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-2 widthDown oneAnim">
            <div class="order-pic">
              <img src="assets/Index/img/bdtg_20.png" alt="" />
            </div>
            <p class="descript">签署相关协议、客户支付预付款</p>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-2 widthDown oneAnim">
            <div class="order-pic">
              <img src="assets/Index/img/bdtg_21.png" alt="" />
            </div>
            <p class="descript">完成初稿，经客户确认后进行建设</p>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-2 widthDown oneAnim">
            <div class="order-pic">
              <img src="assets/Index/img/bdtg_22.png" alt="" />
            </div>
            <p class="descript">网站测试，客户上网浏览、验收</p>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-2 widthDown oneAnim">
            <div class="order-pic">
              <img src="assets/Index/img/bdtg_23.png" alt="" />
            </div>
            <p class="descript">网站后期维护工作</p>
          </div>
        </div>
      </div>
    </section>
    <!-- propose -->
    <div id="jump5" class="jumper"></div>
    <!-- Contact -->
    <div class="section type-1 section-contact" id="sale">
      <div class="container">
        <div class="section-headlines">
          <h4>联系售后</h4>
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
          <br>
          <div class="col-lg-7 col-lg-offset-1">
            <form role="form" action="" method="post" role="form" id="contac_form" name="contact_form">
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-6 input-name">
                    <input type="text" class="form-control" id="InputName" name="user" placeholder="【必填】此处填写您的称谓">
                    <br class="gap-15" />
                  </div>
                  <div class="col-lg-6 input-number">
                    <input type="text" class="form-control" id="email" name="email" placeholder="【必填】此处填写您的邮箱账号">
                  </div>
                </div>
              </div>

              <div class="form-group contact-advice">
                <textarea class="form-control" id="InputMessage" rows="8" placeholder="此处具体填写您的建议" name="text"></textarea>
              </div>
              <button type="submit" name="submit" id="submit" class="btn btn-block btn-success contact-btn">立即投递</button>
            </form>
            <div id="success">您的建议已成功！感谢您的宝贵建议！</div>
            <div id="error">对不起！您的建议无法发出！请稍后重试！</div>
          </div>
        </div>

      </div>
    </div>
    <!-- footer -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">版权归属 &copy; -广州市比创尔网络科技有限公司 -
            <a href="#" target="_blank" title="<?php echo config('web_name'); ?>">比创尔建站</a>
          </div>
        </div>
      </div>
    </footer>
  </div>

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

    $('#navClick li').on('click', 'a', function (e) {
      var target = e.target;
      var id = $(target).data("to");
      $('html, body').animate({ scrollTop: $('#' + id).offset().top }, 800);
    });
  </script>
  <!-- Slider-JavaScript -->
  <script src="skin/js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider, #slider1").responsiveSlides({
        auto: true,
        nav: false,
        speed: 1500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <!-- //Slider-JavaScript -->
  <script src="skin/js/RequestAnimationFrame.js"></script>
  <!-- aniamte scroll -->
  <script>
    (function () {
      var webEl = $('#clients .oneAnim'),
        webElOffset = webEl.offset().top / 2,
        documentEl = $(document),
        lastEL = $('.clients-two .oneAnim'),
        servicEl = $('#serive .section-headlines h4'),
        servicImg = $('#serive .service-img'),
        servicText = $('.features .all-detail'),
        priceEl = $('#price .section-headlines h4'),
        priceNew = $('#price .section-headlines h2'),
        priceMonth = $('.pricing-plans .price-month'),
        priceTall = $('.pricing-plans .price-tall'),
        priceProxy = $('.pricing-plans .price-proxy'),
        contacEL = $('.section-contact .section-headlines'),
        contacName = $('.section-contact .input-name'),
        contacEmail = $('.section-contact .input-number'),
        contacAdvice = $('.section-contact .contact-advice'),
        contacBtn = $('.section-contact .contact-btn'),
        aboutTl = $('#about .about-top'),
        aboutLeft = $('#about .about-left'),
        aboutCenter = $('#about .about-center'),
        aboutRight = $('#about .about-right');
      documentEl.on('scroll', function () {
        // 关于我们
        if (documentEl.scrollTop() > $('#about').offset().top - 1000) {
          aboutTl.addClass('animated fadeInDown');
          aboutLeft.addClass('animated fadeInLeft');
          aboutCenter.addClass('animated fadeInUp');
          aboutRight.addClass('animated fadeInRight');
        } else {
          aboutTl.removeClass('animated fadeInDown');
          aboutLeft.removeClass('animated fadeInLeft');
          aboutCenter.removeClass('animated fadeInUp');
          aboutRight.removeClass('animated fadeInRight');
        }
        // 关于我们
        // 开发类型
        if (documentEl.scrollTop() > webElOffset) {
          webEl.addClass('animated fadeInUp');
        } else {
          webEl.removeClass('animated fadeInUp');
        };
        // 开发类型
        if (documentEl.scrollTop() > $('.clients-two').offset().top - 1000) {
          lastEL.addClass('animated fadeInUp');
        } else {
          lastEL.removeClass('animated fadeInUp');
        }
        // serivce content 服务内容

        if (documentEl.scrollTop() > $('#serive').offset().top - 1500) {
          servicEl.addClass('animated fadeInDown');
          servicImg.addClass('animated fadeInLeft');
          servicText.addClass('animated fadeInRight');
        } else {
          servicEl.removeClass('animated fadeInDown');
          servicImg.removeClass('animated fadeInLeft');
          servicText.removeClass('animated fadeInRight');
        };
        // serivce content 服务内容

        //price 价格
        if (documentEl.scrollTop() > $('#price').offset().top - 1000) {
          priceEl.addClass('animated fadeInDown');
          priceNew.addClass('animated rotateInDownLeft');
          priceMonth.addClass('animated fadeInLeft');
          priceTall.addClass('animated fadeInUp');
          priceProxy.addClass('animated fadeInRight');
        } else {
          priceEl.removeClass('animated fadeInDown');
          priceNew.removeClass('animated rotateInDownLeft');
          priceMonth.removeClass('animated fadeInLeft');
          priceTall.removeClass('animated fadeInUp');
          priceProxy.removeClass('animated fadeInRight');
        }
        //price 价格

        // 售后
        if (documentEl.scrollTop() > $('.section-contact').offset().top - 1000) {
          contacEL.addClass('animated fadeInDown');
          contacName.addClass('animated fadeInUp');
          contacEmail.addClass('animated fadeInRight');
          contacAdvice.addClass('animated fadeInLeft');
          contacBtn.addClass('animated fadeInRight');
        } else {
          contacEL.removeClass('animated fadeInDown');
          contacName.removeClass('animated fadeInUp');
          contacEmail.removeClass('animated fadeInRight');
          contacAdvice.removeClass('animated fadeInLeft');
          contacBtn.removeClass('animated fadeInRight');
        }
        // 售后
      });
    })();
  </script>
</body>

</html>