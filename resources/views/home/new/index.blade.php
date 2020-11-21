@extends('home.layout.main')
@section('title', '新闻中心')
@section('content')
    @parent
@section('sidebar')

    <div  class="menu overflow">
    灵琛动态<b class="overflow">News list</b>
    <i class="hidden-lg hidden-md"></i>
    <span class="hidden-lg hidden-md iconfont icon-jiantouarrow483"></span>
    </div>
    <div class="navbox">
        @foreach($Newcates as $item)
            <a href="{{ route('home.new.index',$item->id) }}" title="" class="nav1 overflow tr1">{{ $item->cname }}</a>
        @endforeach
        {{--<a href="news.php?type_id=12" class="nav1 overflow tr1 ">行业新闻</a>--}}
        {{--<a href="news.php?type_id=13" class="nav1 overflow tr1 ">防水知识</a>--}}
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
                <div class="news-box">
                    @forelse($new_list as $item)
                        <div class="hezi">
                            <a href="{{ route('home.new.index',[$item->cid,$item->id]) }} " class="imgbox clearfix tr1">
                                <div class="tu pull-left">
                                    <div class="img tr1 item22" data-original="{{ $item->new_pic }}" style="background-position:center; background-size:cover;"></div>
                                </div>
                                <div class="text clearfix">
                                    <div class="tou overflow tr1" title="">{{ $item->new_name }}</div>
                                    <div class="zi">
                                        {!!   str_limit($item->new_cont, $limit = 280, $end = '...') !!}
                                    </div>
                                    <div class="xia clearfix">
{{--                                        <div class="time pull-left">{{ date_format($item->created_at),'Y-m-d' }}</div>--}}
                                        <div class="more pull-right tr1">查看详情</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        暂无动态
                    @endforelse
                    <div class="hezi">
{{--                        <a href="{{url('/new/{{$pid}}/{{$id}}')}}" class="imgbox clearfix tr1">--}}
                        <a href="{{route('home.new.index',[1,1])}}" class="imgbox clearfix tr1">
                            <div class="tu pull-left">
                                <div class="img tr1 item22" data-original="/uploads/uploadpic/20200721194714t1rb.jpg" style="background-position:center; background-size:cover;"></div>
                            </div>
                            <div class="text clearfix">
                                <div class="tou overflow tr1" title="">没有专业的技术指导和施工队伍，你怎么把地下室防水防潮做好？</div>
                                <div class="zi">
                                    &nbsp; 进行地下室防水防潮施工的之前，应提前准备相应的地下室防水防潮材料。要保证这些防水防潮主材料的含量、强度、柔性以及不透水性等符合施工要求。地下室防水防潮施工质量好坏直接关系到整个地下室的使用寿命，所以一定要认真对待，地下室防潮施工应该注意一下几个关键步骤。&nbsp; 一：选好正确的地下室防水防潮材料。地下....
                                </div>
                                <div class="xia clearfix">
                                    <div class="time pull-left">2020-07-21</div>
                                    <div class="more pull-right tr1">查看详情</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{--<div class="hezi">--}}
                        {{--<a href="news-show.php?id=33&type_id=12" class="imgbox clearfix tr1">--}}
                            {{--<div class="tu pull-left">--}}
                                {{--<div class="img tr1 item22" data-original="/uploads/uploadpic/20200719170933tdp8.jpg" style="background-position:center; background-size:cover;"></div>--}}
                            {{--</div>--}}
                            {{--<div class="text clearfix">--}}
                                {{--<div class="tou overflow tr1" title="">没有专业的技术指导和施工队伍，你怎么把地下室防水防潮做好？</div>--}}
                                {{--<div class="zi">--}}
                                    {{--　　进行地下室防水防潮施工的之前，应提前准备相应的地下室防水防潮材料。要保证这些防水防潮主材料的含量、强度、柔性以及不透水性等符合施工要求。地下室防水防潮施工质量好坏直接关系到整个地下室的使用寿命，所以一定要认真对待，地下室防潮施工应该注意一下几个关键步骤。　　一：选好正确的地下室防水防潮材料。地下室防水防潮施工前，应....--}}
                                {{--</div>--}}
                                {{--<div class="xia clearfix">--}}
                                    {{--<div class="time pull-left">2020-07-19</div>--}}
                                    {{--<div class="more pull-right tr1">查看详情</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="hezi">--}}
                        {{--<a href="news-show.php?id=32&type_id=12" class="imgbox clearfix tr1">--}}
                            {{--<div class="tu pull-left">--}}
                                {{--<div class="img tr1 item22" data-original="/uploads/uploadpic/20200719170854qsxc.jpg" style="background-position:center; background-size:cover;"></div>--}}
                            {{--</div>--}}
                            {{--<div class="text clearfix">--}}
                                {{--<div class="tou overflow tr1" title="">别墅地下室空间防水防潮的重点与解决方案</div>--}}
                                {{--<div class="zi">--}}
                                    {{--相关问题，一直是防水行业的技术难点，因地下空间结构复杂、旧防水材料生产所执行的规范较早，结合我公司30多年的防水施工经验，针对不同客户的不同需求，结合我公司的施工革新理念“以防潮防霉为主、以堵漏为辅、防潮防霉一体化”制定出专项防湿维修方案，再利用我公司的环保产品，真正实现维修一次可使用20年以上的一劳永逸解决方案，给您....--}}
                                {{--</div>--}}
                                {{--<div class="xia clearfix">--}}
                                    {{--<div class="time pull-left">2020-07-19</div>--}}
                                    {{--<div class="more pull-right tr1">查看详情</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                </div>
                <div style=" float:left;margin:auto;width:100%;text-align:center;line-height:30px; font-size:14px;">
                </div>
            </div>
        </div>
    </div>

@endsection


@endsection