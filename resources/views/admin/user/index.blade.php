@extends('layout.main')

@section('content')
    <div class="page-container">
        <div class="text-c"> 日期范围：
            <input type="text" onfocus="WdatePicker()" id="datemin" value="{{ $datemin }}" class="input-text Wdate" style="width:120px;">
            -
            <input type="text" onfocus="WdatePicker()" id="datemax" value="{{ $datemax }}" class="input-text Wdate" style="width:120px;">
            <input type="text" class="input-text" style="width:250px" placeholder="输入会员名称、电话、邮箱" id="kw">
            <button type="button" class="btn btn-success radius" id="searchbtn"><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
        </div>
        <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加用户</a></span> <span class="r">共有数据：<strong>88</strong> 条</span></div>
        <div class="mt-20">
            <table class="table table-border table-bordered table-hover table-bg table-sort">
                <thead>
                <tr class="text-c">
                    <th width="25"><input type="checkbox" name="" value=""></th>
                    <th width="80">ID</th>
                    <th width="100">用户名</th>
                    <th width="130">加入时间</th>
                    <th width="70">状态</th>
                    <th width="100">操作</th>
                </tr>
                </thead>
                <tbody>
                {{--@foreach($data as $item)--}}
                {{--<tr class="text-c">--}}
                {{--<td><input type="checkbox" value="{{ $item->id }}" name="ids[]"></td>--}}
                {{--<td>{{ $item->id }}</td>--}}
                {{--<td><u style="cursor:pointer" class="text-primary" onclick="member_show('{{ $item->username }}','member-show.html','10001','360','400')">{{ $item->username }}</u></td>--}}
                {{--<td>{{ $item->created_at }}</td>--}}
                {{--<td class="td-status"><span class="label label-success radius">已启用</span></td>--}}
                {{--<td class="td-manage">--}}
                {{--修改 和 删除--}}
                {{--<a style="text-decoration:none" onClick="member_stop(this,'10001')" href="javascript:;" title="停用">--}}
                {{--<i class="Hui-iconfont">&#xe631;</i></a> <a title="编辑" href="javascript:;" onclick="member_edit('编辑','member-add' +--}}
                {{--'.html','4','','510')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <--}}
                {{--a style="text-decoration:none" class="ml-5" onClick="change_password('修改密码','change-password.html','10001','600','--}}
                {{--270')" href="javascript:;" title="修改密码"><i class="Hui-iconfont">&#xe63f;</i></a> <a title="删除" href="javascript:--}}
                {{--;" onclick="member_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>--}}
                {{--</td>--}}
                {{--</tr>--}}
                {{--@endforeach--}}
                </tbody>
            </table>
        </div>
    </div>
@endsection


@section('js')

    <script>
        $(function () {
            // datatables初始化
            var datatable = $('.table-sort').dataTable({
                // 以第2列为初始排序
                order: [[1, 'desc']],
                // 设置 第1列和最后一列不排序
                columnDefs: [
                    // 第1列和第10列不排序 因为索引是从0开始
                    {targets: [0, 5], orderable: false}
                ],
                // 下拉分页数
                lengthMenu: [3, 5, 7, 10],
                // 客户搜索隐藏
                searching: false,
                // 在ajax请求数据量给客户的一个提示
                processing: true,
                // 开启服务器模式
                serverSide: true,
                // ajax发起请求
                ajax: {
                    // 请求地址
                    url: '{{ route("admin.user.list") }}',
                    // 请求方式 get/post
                    type: 'GET',
                    // 请求的参数
                    // 两者写法效果一致  但是它用于搜索
                    // 如果只有一个参数的时候，可以不写小括号
                    data: d => {
                        d.datemin = $('#datemin').val();
                        d.datemax = $('#datemax').val();
                        d.kw = $.trim($('#kw').val());
                    }
                },
                // 规则每列是如何来显示
                columns: [
                    {data: 'aaa', defaultContent: '', className: "text-c"},
                    {data: 'id'},
                    {data: 'username'},
                    {data: 'created_at'},
                    {data: 'deleted_at', className: "text-c"},
                    {data: 'bbb', defaultContent: '删除 和  修改'}
                ],
                // row 当前行的dom对象  jquery对象$(row)
                // data 当前的数据
                // dataIndex当前数据的索引
                createdRow(row, data) {
                    // 全选复选框
                    var html = `<input type="checkbox" value="${data.id}" name="ids[]" />`;
                    $(row).find('td:eq(0)').html(html);

                    // 用户是否禁用
                    var html = `<span data-id="${data.id}" class="label label-success radius">成功</span>`;
                    if (data.deleted_at != null) {// 有删除
                        html = `<span data-id="${data.id}" class="label label-warning radius">警告</span>`;
                    }
                    $(row).find('td:eq(4)').html(html);

                    // 操作
                    var html = `<div class="btn-group">
                                  <a href="/admin/user/role/${data.id}" class="btn size-S btn-primary-outline radius">分配角色</a>
                                  <a href="/admin/user/edit/${data.id}" class="btn size-S btn-primary-outline radius">修改</a>
                                  <a href="/admin/user/del/${data.id}"  class="btn size-S btn-danger-outline radius delbtn">删除</a>
                                </div>`;
                    $(row).find('td:eq(5)').html(html);
                }
            });

            // 点击搜索让datatable加载一次
            $('#searchbtn').click(() => {
                datatable.api().ajax.reload();
            });

            // 给删除添加事件  委托
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
                        layer.msg('删除成功',{time:2000,icon:6});
                    }
                });

                //return false;
            });
        });
    </script>

@endsection