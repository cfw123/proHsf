@extends('home.layout.main')
@section('title', '新闻详情')
@section('content')
    @parent
@section('sidebar')
    <!--导航大盒子 开始-->
    <div class="menu overflow">
        灵琛动态<b class="overflow">News list</b>
        <i class="hidden-lg hidden-md"></i>
        <span class="hidden-lg hidden-md iconfont icon-jiantouarrow483"></span>
    </div>
    <div class="navbox">
        @foreach($Newcates as $item)
            <a href="{{ route('home.new.index',$item->id) }}" title="" class="nav1 overflow tr1">{{ $item->cname }}</a>
        @endforeach
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
                        <h4>{{ $new_cont->new_name }}</h4>
                        <span>时间：{{ date_format($new_cont->created_at,'Y-m-d') }}     浏览量 ：{{ $new_cont->view_count }}</span>
                    </div>
                    <div class="news-txt">{!! $new_cont->new_cont !!}</div>
                </div>
            </div>
        </div>

@endsection


@endsection