@extends('_layouts.default')

@include('UEditor::head')

@section('content')
    <div id="title" style="text-align: center;">
        <h1>Learn Laravel 5</h1>
        <div style="padding: 5px; font-size: 16px;">{{ Inspiring::quote() }}</div>
    </div>
    <hr>
    <div id="content">
        <form action="{{ URL('/upload') }}" method="post" enctype="multipart/form-data">
            <p><input type="file" name="photo"></p>
            <p><input type="text" name="username"></p>
            <p><input type="submit" name="submitted" value="上传"></p>
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </form>
    </div>

    <!-- 加载编辑器的容器 -->
    <script id="container" name="content" type="text/plain">
        这里写你的初始化内容
    </script>

    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
        ue.ready(function() {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.    

        });
    </script
@endsection
