@extends('layout.main')

@section('content')
    @include('layout.msg')
    <div class="page-container">
        <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l">
            <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
            <a href="{{ route('admin.lesson.create')}}" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加课时</a></span>
        </div>
        <div class="mt-20">
            <table class="table table-border table-bordered table-hover table-bg table-sort">
                <thead>
                <tr class="text-c">
                    <th width="80">ID</th>
                    <th width="100">分类名</th>
                    <th width="100">课程名</th>
                    <th width="100">课时名称</th>
                    <th width="100">时长</th>
                    <th width="100">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->cate->cname }}</td>
                        <td>{{ $item->course->course_name }}</td>
                        <td>
                            <a onclick="layer_show('{{$item->lname}}','{{route('admin.lesson.show',$item)}}',800,500)">
                                {{ $item->lname }}
                            </a>
                        </td>
                        <td>{{ $item->duration }}秒</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection