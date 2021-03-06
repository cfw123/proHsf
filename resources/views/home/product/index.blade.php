@extends('home.layout.main')
@section('title', '工程案例')
@section('content')
    @parent
    @section('sidebar')
        <!--导航大盒子 开始-->
        <div class="menu overflow">
            服务项目<b class="overflow">Product Item</b>
            <i class="hidden-lg hidden-md"></i>
            <span class="hidden-lg hidden-md  iconfont icon-jiantouarrow483"></span>
        </div>
        <div class="navbox">
            @foreach($Procates as $item)
                <a href="{{ route('home.product.index',[$item->id]) }}" @if($item->id == $pid) class="nav1 overflow tr1 active"   @endif class="nav1 overflow tr1 ">{{ $item->cname }}</a>
            @endforeach
        </div>
    @endsection
@section('sideContent')
    <div class="col-md-9">
        <div class="right">
            <div class="title-zi hidden-sm hidden-xs">
                <div class="zuo">服务项目</div>
            </div>

            <div class="cont">
                <div class="show show-box">
                    <div class="row">

                        @forelse($pro_list as $item)
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <a href="{{ route('home.product.index',[$item->cid,$item->id]) }}" class="imgbox tr1">
                                    <div class="tu">
                                        <div class="img tr1 item23" data-original="{{ $item->pro_pic }}" style=" background:url(images/zhan.jpg) no-repeat center/cover">
                                            <img src="{{ asset('home') }}/static/images/zhe.png" style="max-width:100%">
                                        </div>
                                    </div>
                                    <div class="tou overflow tr1" title="">{{ $item->pro_name }}</div>
                                </a>
                            </div>
                        @empty

                            暂无内容
                        @endforelse


                    </div>
                    <div style=" float:left;margin:auto;width:100%;height:40px;text-align:center;line-height:40px;font-size:14px; ">
                        {{ $pro_list->appends(request()->except(['page']))->links() }}
                    </div>
                        {{--当前第1页&nbsp;&nbsp;<a href='?page=1'>上一页</a>&nbsp;&nbsp;<a href='?page=2''>下一页</a>&nbsp;&nbsp;一共22条							</div>--}}
                </div>
            </div>
        </div>
    </div>

@endsection


@endsection

