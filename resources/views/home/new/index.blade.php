@extends('home.layout.main')
@section('title', '新闻中心')
@section('content')
    @parent
@section('sidebar')

    <div class="menu overflow">
        秦荔豫动态<b class="overflow">News list</b>
        <i class="hidden-lg hidden-md"></i>
        <span class="hidden-lg hidden-md iconfont icon-jiantouarrow483"></span>
    </div>
    <div class="navbox">
        @foreach($Newcates as $item)
            <a href="{{ route('home.new.index',$item->id) }}" title="" @if($item->id == $pid) class="nav1 overflow tr1 active"   @endif class="nav1 overflow tr1">{{ $item->cname }}</a>
        @endforeach
    </div>
    <!--导航大盒子 结束-->
@endsection
@section('sideContent')
    <div class="col-md-9">
        <div class="right">
            <div class="title-zi hidden-sm hidden-xs">
                <div class="zuo">秦荔豫动态</div>
            </div>

            <div class="cont">
                <div class="news-box">
                    @forelse($new_list as $item)
                        <div class="hezi">
                            <a href="{{ route('home.new.index',[$item->cid,$item->id]) }} " class="imgbox clearfix tr1">
                                <div class="tu pull-left">
                                    <div class="img tr1 item22" data-original="{{ $item->new_pic }}"
                                         style="background-position:center; background-size:cover;"></div>
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

                    <div style=" float:left;margin:auto;width:100%;text-align:center;line-height:30px; font-size:14px;">
                        {{ $new_list->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@endsection