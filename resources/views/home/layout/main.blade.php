
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
    {{--<link rel="stylesheet" type="text/css" href="/css/pagination.css" />--}}


    <link href="{{ asset('home') }}/static/font-awesome/m_css/iconfont.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_2218995_q7esz8ja6rl.css">


    <!--[if lt IE 9]>
    <script src="{{ asset('home') }}/static/js/html5shiv.min.js"></script>
    <script src="{{ asset('home') }}/static/js/respond.min.js"></script>
    <script>window.location.href='update/';</script>
    <![endif]-->
    <!--低版本浏览器自动跳转升级浏览器-->
    <title>@yield('title','秦荔豫防水-渭南地区专业防水-大荔防水-卫生间防潮-地下室防潮-防湿处理-房顶漏雨维修-大荔防水工程服务')  渭南地区专业防水-大荔防水-卫生间防潮-地下室防潮-防湿处理-房顶漏雨维修-大荔防水工程服务</title>
    <meta name="keywords" content="室内外防水、卫生间防潮、房顶漏雨维修、隔热保温、外墙防水、水暖安装维修钢结构防水、防腐等，承揽各种防水、防腐工程， 专业承接各类新旧建筑防水堵漏工程。"/>
    <meta name="description" content="秦荔豫防水、渭南地区专业防水、大荔防水、室内外防水、卫生间防潮、房顶漏雨维修、隔热保温、外墙防水。咨询热线1392308054。大荔秦荔豫防水有限公司作为一家大荔防水公司,主要从事下雨天，梅雨季节地下室地面出汗，反水等现象进行防潮,防湿处理的业务。结合多年的实际经验。"/>
    <META NAME="Author" CONTENT="350668878@qq.com">
        @yield('my_css')
    {{--<script>--}}
        {{--var _hmt = _hmt || [];--}}
        {{--(function() {--}}
            {{--var hm = document.createElement("script");--}}
            {{--hm.src = "https://hm.baidu.com/hm.js?41bb60ff77d3bed96ed8a98ab4bf979d";--}}
            {{--var s = document.getElementsByTagName("script")[0];--}}
            {{--s.parentNode.insertBefore(hm, s);--}}
        {{--})();--}}
    {{--</script>--}}
</head>

<body>
<div class="topbox hidden-sm hidden-xs">
    <div class="container-fluid">
        <div class="clearfix">
            <div class="left pull-left">欢迎来到大荔秦荔豫防水有限公司官方网站~</div>
            <div class="right pull-right">
                <a href="./">网站首页</a>  |  <a href="{{ route('home.contact') }}">联系我们</a>
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
                    <img src="{{ asset('home') }}/static/images/phone.png">13992308054
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
                <li><a href="{{ route('home.about') }}" class="tr1">走进秦荔豫</a></li>
                <li><a href="{{ route('home.product.index') }}" class="tr1">服务项目</a></li>
                <li><a href="{{ route('home.video') }}" class="tr1">客户见证</a></li>
                <li><a href="{{ route('home.new.index') }}" class="tr1">秦荔豫动态</a></li>
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
        {{--<h1>{{ Request::url() }}----{{ route('home.about') }}</h1>--}}
        <ul class="clearfix">
            <li @if (Request::url()==route('home.index')) class='on' @endif><a href="{{ route('home.index') }}" class="tr1">首页</a></li>
            <li @if (Request::url()==route('home.about')) class='on' @endif ><a href="{{ route('home.about') }}" class="tr1">走进秦荔豫</a></li>
            <li @if (Request::url()==route('home.product.index')) class='on' @endif ><a href="{{ route('home.product.index') }}" class="tr1">服务项目</a>
                <ul class="nav-zi">
                    @foreach($Procates as $item)
                        <li><a href="{{ route('home.product.index',[$item->id]) }}"  class="overflow tr1">{{ $item->cname }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li @if (Request::url()==route('home.video')) class='on' @endif ><a href="{{ route('home.video') }}" class="tr1">客户见证</a></li>
            <li @if (Request::url()==route('home.new.index')) class='on' @endif ><a href="{{ route('home.new.index') }}" class="tr1">秦荔豫动态</a>
                <ul class="nav-zi">
                    @foreach($Newcates as $item)
                    <li><a href="{{ route('home.new.index',[$item->id]) }}" title="" class="overflow tr1">{{ $item->cname }}</a></li>
                    @endforeach
                    {{--<li><a href="news.php?type_id=13" title="" class="overflow tr1">防水知识</a></li>--}}
                </ul>
            </li>
            <li @if (Request::url()==route('home.service')) class='on' @endif ><a href="{{ route('home.service') }}" class="tr1">服务中心</a>
                {{--<ul class="nav-zi">--}}
                    {{--<li><a href="service.php?id=23" title="" class="overflow tr1">服务流程</a></li>--}}
                {{--</ul>--}}
            </li>
            <li @if (Request::url()==route('home.contact')) class='on' @endif ><a href="{{ route('home.contact') }}" class="tr1">联系方式</a></li>
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
                                    <p>联系人：王经理</p><p>手机号：13992308054</p><p>地址：大荔县西城街道办屈家巷</p>                                </div>
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
            <a href="{{ route('home.about') }}">走进秦荔豫</a> |
            <a href="{{ route('home.product.index') }}">服务项目</a> |
            <a href="{{ route('home.video') }}">客户见证</a> |
            <a href="{{ route('home.new.index') }}">秦荔豫动态</a> |
            <a href="{{ route('home.service') }}">服务中心</a> |
            <a href="{{ route('home.contact') }}">联系方式</a>
        </div>
        <div class="text">
            版权所有 @ 大荔秦荔豫防水有限公司　<a href="https://beian.miit.gov.cn/" target="_blank" style="color:#FFFFFF">陕ICP备2020017274号-1</a>
        </div>
    </div>
</footer>

<div style="width:100%; height:58px; line-height:100px; overflow:hidden; text-align:center; font-size:50px;"
     class="hidden-lg hidden-md clearfix"></div>
<div class="hot w100 hidden-lg hidden-md clearfix">
    <div class="row">
        <div class="col-xs-3 text-center no-padding">
            {{--<a href="tel:13992308054" class="no-decoration">--}}
            <a href="tel:13992308054" class="no-decoration">
                <span class="fa fa-phone"></span>
                <h6 class="no-margin">电话</h6>
            </a>
        </div>
        <div class="col-xs-3 text-center no-padding">
            <a href="sms:13992308054" class="no-decoration">
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

{{--// 底部弹微信二维码--}}
<div class="dbbox hidden-md hidden-lg">
    <div class="dbs ewm-box">
        <div class="neirong">
            <img src="{{ asset('home') }}/static/images/wxCode.png" alt="">
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
@yield('m_js')
</body>
</html>