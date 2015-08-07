@extends('_layouts.default')

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
@endsection
