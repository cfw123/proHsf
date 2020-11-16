@extends('layout.main')

@section('content')

    <article class="page-container">
        <form action="{{ route('admin.lesson.store') }}" method="post" class="form form-horizontal" id="frm">
            @csrf
            <div class="row cl">
                <label class="form-label col-sm-2">分类名称：</label>
                <div class="formControls col-sm-10">
                    <span class="select-box">
                    <select name="cate_id" class="select">
                        @foreach($cateData as $item)
                            <option value="{{ $item->id }}">{{ $item->cname }}</option>
                        @endforeach
                    </select>
                    </span>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-sm-2">课程名称：</label>
                <div class="formControls col-sm-10">
                    <span class="select-box">
                    <select name="course_id" class="select">
                        @foreach($courseData as $item)
                            <option value="{{ $item->id }}">{{ $item->course_name }}</option>
                        @endforeach
                    </select>
                    </span>
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>课时名称：</label>
                <div class="formControls col-sm-10">
                    <input type="text" class="input-text" value="" name="lname">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-sm-2">课时时长：</label>
                <div class="formControls col-sm-9">
                    <input type="text" class="input-text" value="0" placeholder="" name="duration">
                </div>
                <div class="formControls col-sm-1">
                    秒
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>播放地址：</label>
                <div class="formControls col-sm-10">
                    <input type="text" class="input-text" value="" placeholder="" name="url">
                </div>
            </div>
            <div class="row cl">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-success radius">
                        <i class="icon-ok"></i>
                        添加课时
                    </button>
                </div>
            </div>
        </form>
    </article>


@endsection

@section('js')
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>

    <script>
        // 复选框美化
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });
        // 前端验证
        $("#frm").validate({
            rules: {
                lname:{
                    required: true
                },
                url: {
                    required: true
                }
            },
            messages: {
                lname: {
                    required: '课时名称不能为空'
                },
                url: {
                    required: '播放地址不能为空'
                }
            },
            onkeyup: false,
            focusCleanup: true,
            success: "valid",
            submitHandler: function (form) {
                form.submit();
            }
        });
    </script>
@endsection

