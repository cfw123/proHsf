@extends('layout.main')

@section('content')
    @include('layout.msg')
    <div class="page-container">
        <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l">
            <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
            <a href="{{ route('admin.product.create')}}" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加案例</a></span>
        </div>
        <div class="mt-20">
            <table class="table table-border table-bordered table-hover table-bg table-sort">
                <thead>
                <tr class="text-c">
                    <th width="80">ID</th>
                    <th width="100">分类名</th>
                    <th width="100">案例名</th>
                    <th width="100">案例图片</th>
                    <th width="100">操作</th>
                </tr>
                </thead>
                <tbody>
                @forelse($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        {{--模型有关联--}}
                        <td>{{$item->cate->cname}}</td>
                        <td>{{$item->pro_name}}</td>
                        <td> <img style="width: 90px;height: 90px" src="{{ $item->pro_pic }}" style="width: 100px;" id="pic"></td>
                        <td><a href="{{ route('admin.product.edit',$item->id) }}" class="btn size-S btn-primary-outline radius">修改</a>
                            <a href="{{ route('admin.product.destroy',$item->id) }}"  class="btn size-S btn-danger-outline radius delbtn">删除</a></td>
                        @empty
                            <td colspan="5">暂无数据</td>
                    </tr>

                @endforelse

                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>
@endsection



@section('js')

    <script>
        $(function () {
            $('.table-sort').on('click', '.delbtn', function (evt) {
                // 阻止默认事件
                evt.preventDefault();
                var url = $(this).attr('href');

                $.ajax({
                    url,
                    type: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    dataType: 'json',
                    success: ret => {
                        $(this).parents('tr').remove();
                        layer.msg('删除成功', {time: 2000, icon: 6});
                    }
                });

                //return false;
            });
        })
    </script>


@endsection