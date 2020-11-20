
<!DOCTYPE HTML>
<html lang="zh-cn"><!--语言-->
<head>

    <meta charset="utf-8"><!--字符编码-->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge.chrome=1"> <!--如果安装了Google Chrome Frame,则使用GCF来渲染页面，如果没有安装则使用IE最高版本渲染-->
    <meta name="renderer" content="webkit"> <!--使用“webkit”渲染器浏览网页 谷歌浏览器框架 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><!--禁止缩放-->
    <link href="{{ asset('home') }}/static/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('home') }}/static/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('home') }}/static/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('home') }}/static/css/tabBar.css" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('home') }}/static/js/jquery.min.js"></script>
    <link href="{{ asset('home') }}/static/css/swiper.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/pagination.css" />

    <!--[if lt IE 9]>
    <script src="{{ asset('home') }}/static/js/html5shiv.min.js"></script>
    <script src="{{ asset('home') }}/static/js/respond.min.js"></script>
    <script>window.location.href='update/';</script>
    <![endif]-->
    <!--低版本浏览器自动跳转升级浏览器-->
    <title>@yield('title','上海防水-地下室防潮-防湿处理-防湿防潮公司-上海灵琛装饰工程')  上海防水-地下室防潮-防湿处理-防湿防潮公司-上海灵琛装饰工程</title>
    <meta name="keywords" content="地下室防潮,防湿处理,地下室防湿,上海防水,防潮处理,上海防潮公司,上海防湿公司,防水公司,防湿防潮处理,防湿防潮公司,防水处理,防水防潮"/>
    <meta name="description" content="上海灵琛装饰工程有限公司作为一家上海防水公司,主要从事下雨天，梅雨季节地下室地面出汗，反水等现象进行防潮,防湿处理的业务。结合多年的实际经验。"/>

</head>

<body>
<div class="topbox hidden-sm hidden-xs">
    <div class="container-fluid">
        <div class="clearfix">
            <div class="left pull-left">欢迎来到上海灵琛装饰工程有限公司官方网站~</div>
            <div class="right pull-right">
                <a href="./">网站首页</a>  |  <a href="contat.php">联系我们</a>
            </div>
        </div>
    </div>
</div>

<header>
    <div class="container-fluid">
        <div class="hezi clearfix">
            <div class="logo pull-left">
                <a href="./">
                    <img src="{{ asset('home') }}/static/images/logo.png">
                </a>
            </div>
            <div class="zi pull-left hidden-sm hidden-xs">
                <img src="{{ asset('home') }}/static/images/zi.png">
            </div>
            <div class="right pull-right hidden-sm hidden-xs">
                <div class="phone">
                    <img src="{{ asset('home') }}/static/images/phone.png">15821696629
                </div>
            </div>
        </div>

        <!-- 1、移动端导航开始 -->
        <div class="ydd_btn pull-right hidden-md hidden-lg">
            <span class="span01 tr"></span>
            <span class="span02 tr"></span>
            <span class="span03 tr"></span>
        </div>
        <div class="sjdnav hidden-md hidden-lg">
            <ul class="list-unstyled no-margin">
                <li><a href="./" class="tr1">网站首页</a></li>
                <li><a href="{{ route('home.about') }}" class="tr1">走进灵琛</a></li>
                <li><a href="{{ route('home.product.index') }}" class="tr1">服务项目</a></li>
                <li><a href="{{ route('home.video') }}" class="tr1">客户见证</a></li>
                <li><a href="{{ route('home.new.index') }}" class="tr1">灵琛动态</a></li>
                <li><a href="{{ route('home.service') }}" class="tr1">服务中心</a></li>
                <li><a href="{{ route('home.contact') }}" class="tr1">联系方式</a></li>
            </ul>
        </div>
        <!-- 移动端导航结束 -->
    </div>
</header>


<!--2、PC导航-->
<div class="nav hidden-sm hidden-xs">
    <div class="container-fluid">
        <ul class="clearfix">
            <li class='on'><a href="./" class="tr1">首页</a></li>
            <li ><a href="{{ route('home.about') }}" class="tr1">走进灵琛</a></li>
            <li ><a href="{{ route('home.product.index') }}" class="tr1">服务项目</a>
                <ul class="nav-zi">
                    @foreach($Procates as $item)
                        <li><a href="{{ route('home.product.index',[$item->id]) }}"  class="overflow tr1">{{ $item->cname }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li ><a href="{{ route('home.video') }}" class="tr1">客户见证</a></li>
            <li ><a href="{{ route('home.new.index') }}" class="tr1">灵琛动态</a>
                <ul class="nav-zi">
                    @foreach($Newcates as $item)
                    <li><a href="{{ route('home.new.index',$item->id) }}" title="" class="overflow tr1">{{ $item->cname }}</a></li>
                    @endforeach
                    {{--<li><a href="news.php?type_id=13" title="" class="overflow tr1">防水知识</a></li>--}}
                </ul>
            </li>
            <li ><a href="{{ route('home.service') }}" class="tr1">服务中心</a>
                <ul class="nav-zi">
                    <li><a href="service.php?id=23" title="" class="overflow tr1">服务流程</a></li>
                </ul>
            </li>
            <li ><a href="{{ route('home.contact') }}" class="tr1">联系方式</a></li>
        </ul>
    </div>
</div>



<!-- banner轮播 -->
<div class="banner text-center">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#">
                    <img src="{{ asset('home') }}/static/images/banner1.jpg" alt="" class="hidden-sm hidden-xs"><!-- 电脑端 -->
                    <img src="{{ asset('home') }}/static/images/banner-xs1.jpg" alt="" class="hidden-lg hidden-md"><!-- 手机端 -->
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#">
                    <img src="{{ asset('home') }}/static/images/banner2.jpg" alt="" class="hidden-sm hidden-xs"><!-- 电脑端 -->
                    <img src="{{ asset('home') }}/static/images/banner-xs2.jpg" alt="" class="hidden-lg hidden-md"><!-- 手机端 -->
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#">
                    <img src="{{ asset('home') }}/static/images/banner3.jpg" alt="" class="hidden-sm hidden-xs">电脑端
                    <img src="{{ asset('home') }}/static/images/banner-xs3.jpg" alt="" class="hidden-lg hidden-md">手机端
                </a>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div><!--中间的圆点-->
    <div class="swiper-button-prev swiper-button tr2"></div><!--左箭头-->
    <div class="swiper-button-next swiper-button tr2"></div><!--右箭头-->
</div>



<div class="linkbox">
    <div class="container-fluid">
        <div class="hezi">
            <div class="left">
                <div class="link overflow">
                    您是否在找：
                    @foreach($Procates as $item)
                        <a href="{{ route('home.product.index',[$item->id]) }}" >{{ $item->cname }}</a>
                    @endforeach
                    {{--<a href="product.php?type_id=61">防返潮防霉</a>--}}
                </div>
            </div>
            <div class="right">
                <form action="{{ route('home.product.index') }}" method="get">
                    <input type="text" placeholder="请输入关键搜索词" id="keyword" value="{{ request()->get('kw','') }}" name="kw">
                    <button type="submit"></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--主体内容-->

@section('content')


    <!--主体内容-->
    <!--主体内容-->
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="neiye">
                        <!--导航大盒子 开始-->
                        <div class="menu overflow hidden-md hidden-lg">
                            客户见证<b class="overflow">Video</b>
                            <i class="hidden-lg hidden-md"></i>
                            <span class="hidden-lg hidden-md glyphicon glyphicon-chevron-down"></span>
                        </div>
                        @section('sidebar')
                            <div class="menu overflow hidden-xs hidden-sm">
                                服务项目<b class="overflow">Service item</b>
                                <i class="hidden-lg hidden-md"></i>
                                <span class="hidden-lg hidden-md glyphicon glyphicon-chevron-down"></span>
                            </div>
                            <div class="navbox hidden-xs hidden-sm">
                                @foreach($Procates as $item)
                                    <a href="{{ route('home.product.index',[$item->id]) }}" class="nav1 overflow tr1 ">{{ $item->cname }}</a>
                                @endforeach
                            </div>
                        @show
                        <!--导航大盒子 结束-->
                        <div class="lian hidden-sm hidden-xs">
                            <div  class="menu">联系方式Contact us</div>
                            <div class="hezi">
                                <div class="text">
                                    <p><strong>胖大叔</strong></p><p>联系人：施经理</p><p>手机号：15821696629</p><p>地址：上海市闵行区莘建路90弄一号401</p>                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('sideContent')
            </div>
        </div>
    </div>


@show



<footer>
    <div class="container-fluid">
        <div class="link hidden-sm hidden-xs">
            <a href="./">首页</a> |
            <a href="{{ route('home.about') }}">走进灵琛</a> |
            <a href="{{ route('home.product.index') }}">服务项目</a> |
            <a href="{{ route('home.video') }}">客户见证</a> |
            <a href="{{ route('home.new.index') }}">灵琛动态</a> |
            <a href="{{ route('home.service') }}">服务中心</a> |
            <a href="{{ route('home.contact') }}">联系方式</a>
        </div>
        <div class="text">
            版权所有 @ 上海灵琛装饰工程有限公司　<a href="http://www.beian.miit.gov.cn" target="_blank" style="color:#FFFFFF">沪ICP备20020896号-1</a>
        </div>
    </div>
</footer>

<div style="width:100%; height:58px; line-height:100px; overflow:hidden; text-align:center; font-size:50px;"
     class="hidden-lg hidden-md clearfix"></div>
<div class="hot w100 hidden-lg hidden-md clearfix">
    <div class="row">
        <div class="col-xs-3 text-center no-padding">
            <a href="tel:15821696629" class="no-decoration">
                <span class="fa fa-phone"></span>
                <h6 class="no-margin">电话</h6>
            </a>
        </div>
        <div class="col-xs-3 text-center no-padding">
            <a href="sms:15821696629" class="no-decoration">
                <span class="fa fa-mobile"></span>
                <h6 class="no-margin">消息</h6>
            </a>
        </div>
        <div class="col-xs-3 text-center no-padding db-ewms">
            <a class="no-decoration">
                <span class="fa fa-qrcode"></span>
                <h6 class="no-margin">二维码</h6>
            </a>
        </div>
        <div class="col-xs-3 text-center no-padding">
            <a class="no-decoration" href="./">
                <span class="fa fa-home"></span>
                <h6 class="no-margin">首页</h6>
            </a>
        </div>
    </div>
</div>
<div class="dbbox hidden-md hidden-lg">
    <div class="dbs ewm-box">
        <div class="neirong">
            <img src="{{ asset('home') }}/static/images/weixin.jpg" alt="">
        </div>
    </div>
</div>
<script>
    $(".hot .col-xs-3").eq(2).click(function () {
        if ($(".dbbox .dbs.ewm-box").is(':hidden')) {
            $(".dbbox .dbs.ewm-box").slideDown();
            $(".dbbox .dbs.fenxiang-box").slideUp();
        } else {
            $(".dbbox .dbs.ewm-box").slideUp();
        }
    })
</script>


<script type="text/javascript" src="{{ asset('home') }}/static/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('home') }}/static/js/ie10-viewport-bug-workaround.js"></script><!--解决IE10漏洞-->
<script src="{{ asset('home') }}/static/js/zong.js"></script>
<script src="{{ asset('home') }}/static/js/zicenav.js"></script><!--子页面pc时候的下拉-->
<script src="{{ asset('home') }}/static/js/jquery.lazyload.js"></script>
<script src="{{ asset('home') }}/static/js/swiper.min.js"></script> <!--swiper滚动js-->

<script>
    $(function() {
        $(".item22").lazyload({
            effect: "fadeIn",
            threshold : 200,
            failurelimit : 10
        });

        $("img.lazy").lazyload({
            effect: "fadeIn",
            threshold : 200,
            failurelimit : 10
        });
        $(".carousel-inner img").lazyload({
            placeholder:"images/banner.gif",
            event:"sporty",
            effect: "fadeIn",
            threshold : 200,
            failurelimit : 10
        });
        $(".item23").lazyload({
            event:"sporty",
            effect: "fadeIn",
            threshold : 200,
            failurelimit : 10
        });
    });
    $(window).on("load", function() {
        setTimeout(function(){
            $(".carousel-inner img").trigger("sporty");
            $(".item23").trigger("sporty");
        },1000);
    });
</script>

<script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.3.0.js"></script>
<script src="{{ asset('home') }}/static/js/tabbar.js" type="text/javascript" charset="utf-8"></script>
<script id="qijuacscript" type="text/javascript" src="https://ac.qijucn.com/qijuacc.js" data="sn5f1160146a071b685c"></script>

</body>
</html>