@extends('layout.main')

@section('content')
    @include('layout.msg')
    <div class="page-container">
        <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l">
            <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
            <a href="{{ route('admin.course.create')}}" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加课程</a></span>
        </div>
        <div class="mt-20">
            <table class="table table-border table-bordered table-hover table-bg table-sort">
                <thead>
                <tr class="text-c">
                    <th width="80">ID</th>
                    <th width="100">分类名</th>
                    <th width="100">课程名</th>
                    <th width="100">价格</th>
                    <th width="100">操作</th>
                </tr>
                </thead>
                <tbody>
                @forelse($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        {{--模型有关联--}}
                        <td>{{$item->cate->cname}}</td>
                        <td>{{$item->course_name}}</td>
                        <td>￥{{$item->course_price}}元</td>
                        <td></td>
                        @empty
                            <td colspan="5">暂无数据</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection