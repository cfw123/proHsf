@extends('layout.main')

@section('content')

    <article class="page-container">
        <form action="{{ route('admin.product.store') }}" method="post" class="form form-horizontal" id="form-admin-role-add">
            @csrf
            <div class="row cl">
                <label class="form-label col-sm-2">分类名称：</label>
                <div class="formControls col-sm-10">
                    <span class="select-box">
                    <select name="cid" class="select">
                        @foreach($data as $item)
                            <option value="{{ $item->id }}">{{ $item->cname }}</option>
                        @endforeach
                    </select>
                    </span>
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-sm-2"><span class="c-red">*</span>案例名称：</label>
                <div class="formControls col-sm-10">
                    <input type="text" class="input-text" value="" name="pro_name">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">案例图片：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <div class="uploader-thum-container">
                        <div id="filePicker">选择图片</div>
                        <input type="hidden" id="pro_pic" name="pro_pic">
                        <img src="" style="width: 100px;" id="pic">
                    </div>
                </div>
            </div>


            <div class="row cl">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-success radius">
                        <i class="icon-ok"></i>
                        添加案例
                    </button>
                </div>
            </div>
        </form>
    </article>


@endsection

@section('css')
    <link rel="stylesheet" href="/admin/lib/webuploader/0.1.5/webuploader.css">
@endsection

@section('js')
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>

    <script type="text/javascript" src="/admin/lib/webuploader/0.1.5/webuploader.min.js"></script>
    <script>
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $("#form-admin-role-add").validate({
            rules: {
                pro_name: {
                    required: true
                }
            },
            messages: {
                pro_name: {
                    required: '案例的名称你不能不填写'
                }
            },
            onkeyup: false,
            focusCleanup: true,
            success: "valid",
            submitHandler: function (form) {
                form.submit();
            }
        });




        var uploader = WebUploader.create({
            auto: true,
            swf: '{{st('admin')}}/lib/webuploader/0.1.5/Uploader.swf',
            // 文件接收服务端。
            server: '{{ route('admin.mupfile') }}',
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: '#filePicker',
            // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
            resize: false,
            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/*'
            },
            fileVal: 'pic',
            formData: {
                _token:"{{ csrf_token() }}"
            }
        });
        uploader.on('uploadSuccess', function (file, res) {
            $('#pro_pic').val(res.file);
            $('#pic').attr('src',res.file);
        });
    </script>
@endsection

