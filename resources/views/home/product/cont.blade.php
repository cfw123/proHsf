@extends('home.layout.main')
@section('title', '案例详情')
@section('content')
    @parent
    @section('sidebar')

        <!--导航大盒子 开始-->
        <div  class="menu overflow">
            服务项目<b class="overflow">Product Item</b>
            <i class="hidden-lg hidden-md"></i>
            <span class="hidden-lg hidden-md  iconfont icon-jiantouarrow483"></span>
        </div>
        <div class="navbox">
            @foreach($Procates as $item)
                <a href="{{ route('home.product.index',[$item->id]) }}" class="nav1 overflow tr1 ">{{ $item->cname }}</a>
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
                    <div class="product-show">
                        <div class="t1">{{ $pro_cont->pro_name }}</div>
                        <div class="t3"><img src="{{ $pro_cont->pro_pic }}" /></div>
                        <div class="t2">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection


@endsection