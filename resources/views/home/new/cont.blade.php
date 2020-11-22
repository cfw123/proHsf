@extends('home.layout.main')
@section('title', '新闻详情')

@section('my_css')
    <style>
        .news-main {
            border-bottom: 1px dashed #ccc;
        }

        .prev_next {
            margin: 30px 0
        }

        .prev_next ul li {
            font-size: 14px;
            color: #717171;
            height: 30px;
            line-height: 30px
        }

        .prev_next ul li a {
            color: #717171;
            transition: .4s
        }

        .prev_next ul li a:hover {
            color: #0087c1
        }
    </style>
@endsection
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
            <a href="{{ route('home.new.index',$item->id) }}" title=""
               @if($item->id == $pid) class="nav1 overflow tr1 active"
               @endif class="nav1 overflow tr1">{{ $item->cname }}</a>
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
                <div class="prev_next">
                    {{--<ul>--}}
                    {{--<li class="previous"><a href="">上一篇</a></li>--}}
                    {{--<li class="next"><a href="">下一篇</a></li>--}}
                    {{--</ul>--}}


                    <li class="previous">
                        @if($prev_article)
                            <a href="/new/{{ $pid }}/{{ $prev_article->id }}" rel="prev">上一篇:
                                <span> {{ $prev_article->new_name }}</span> </a>
                        @else
                            <a rel="prev">上一篇: <span> 无</span> </a>

                        @endif
                    </li>
                    <li class="next">
                        {{--                        @if($next_article && $next_article->published_at < Carbon\Carbon::now())--}}
                        @if($next_article)

                            <a href="/new/{{ $pid }}/{{ $next_article->id }}" rel="next">下一篇:
                                <span> {{ $next_article->new_name }}</span></a>
                        @else
                            <a rel="prev">下一篇: <span> 无</span> </a>
                        @endif
                    </li>


                </div>

            </div>
        </div>
    </div>

@endsection


@endsection
@section('m_js')
    <script>

        //禁用右键、文本选择功能、复制按键
        $(document).bind("contextmenu", function () {
            return false;
        });
        $(document).bind("selectstart", function () {
            return false;
        });
        $(document).keydown(function () {
            return key(arguments[0])
        });

        //按键时提示警告
        function key(e) {
            var keynum;
            if (window.event) // IE
            {
                keynum = e.keyCode;
            } else if (e.which) // Netscape/Firefox/Opera
            {
                keynum = e.which;
            }
            if (keynum == 17) {
                alert("禁止复制内容！");
                return false;
            }
        }

    </script>
@endsection