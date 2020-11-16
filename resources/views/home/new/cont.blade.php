@extends('home.layout.main')
@section('title', '新闻详情')
@section('content')
    @parent
    @section('sidebar')
        <div  class="menu overflow">
        灵琛动态<b class="overflow">News list</b>
        <i class="hidden-lg hidden-md"></i>
        <span class="hidden-lg hidden-md glyphicon glyphicon-chevron-down"></span>
        </div>
        <div class="navbox">
            <a href="news.php?type_id=12" class="nav1 overflow tr1 ">行业新闻</a>
            <a href="news.php?type_id=13" class="nav1 overflow tr1 ">防水知识</a>
        </div>
        <!--导航大盒子 结束-->
    @endsection


    @section('sideContent')
        <div class="col-md-9">
            <div class="right">
                <div class="title-zi hidden-sm hidden-xs">
                    <div class="zuo">灵琛动态</div>
                </div>

                <div class="cont">
                    <div class="news-main">
                        <div class="news-tou">
                            <h4>别墅地下室空间防水防潮的重点与解决方案</h4>
                            <span>时间：2020-07-19     浏览量 ：49</span>
                        </div>
                        <div class="news-txt"><p>相关问题，一直是防水行业的技术难点，因地下空间结构复杂、旧防水材料生产所执行的规范较早，结合我公司30多年的防水施工经验，针对不同客户的不同需求，结合我公司的施工革新理念“以防潮防霉为主、以堵漏为辅、防潮防霉一体化”制定出专项防湿维修方案，再利用我公司的环保产品，真正实现维修一次可使用20年以上的一劳永逸解决方案，给您一个干燥舒适的地下空间环境。</p></div>
                    </div>
                </div>
            </div>
        </div>

    @endsection


@endsection