@extends('home.layout.main')
@section('title', '案例详情')
@section('content')
    @parent
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