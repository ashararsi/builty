@extends('admin.layouts.main')
@section('title')
    Post Edit
@endsection
@section('css')
    <style>
        .dataTables_wrapper {
            width: 100% !important;
        }
    </style>
@endsection
@section('breadcrumb_page')
    Post Create
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i
                class="zmdi zmdi-home"></i> {{ config('app.name', 'Laravel') }}</a></li>
    <li class="breadcrumb-item "><a href="{{ route('admin.post.index') }}"> Post </a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection
@section('content')
    <div class="container-fluid">
        <a href="{{ route('admin.post.index') }}" class="btn btn-primary float-right">Back</a>
        <div class="row w-100" style="width: 100%">
            <div class="w-100">
                {!! Form::model($data, ['method' => 'PUT', 'enctype' => 'multipart/form-data', 'route' => ['admin.post.update', $data->id]]) !!}
                {!! Form::token(); !!}
                <div class="form-group form-float">
                    {!! Form::label('category', 'Category', ['class' => 'control-label']) !!}
                    {!! Form::select('category', $catagory,$data->cat_id, ['class' => 'form-control','required'=>'required']) !!}
                </div>
                <div class="form-group form-float">
                    {!! Form::label('post', 'Post', ['class' => 'control-label']) !!}
                    {!! Form::textarea('post', $data->post,[ 'required'=>'required','placeholder'=>'Text','class' => 'form-control' ,'id' => 'ckeditor'  ]); !!}
                </div>
                <div class="form-group form-float">
                    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
                    {!! Form::file('image',['id' => 'dropify' ,'class' => 'dropify','data-allowed-file-extensions'=>"png jpg jpeg"]) !!}
                </div>
                <div class="form-group form-float w-100 ">
                    <div id="video_result">
                        {!! $data->video_link !!}
                    </div>
                </div>
                <div class="form-group form-float">
                    {!! Form::label('video', 'Video', ['class' => 'control-label']) !!}
                    {!! Form::textarea('video', $data->video_link,[ 'placeholder'=>'video link please','class' => 'form-control' ,'id' => 'video_link'  ]); !!}
                </div>
                <div class="form-group form-float">
                    {!! Form::label('link', 'Link', ['class' => 'control-label']) !!}
                    {!! Form::text('link', $data->link,[ 'placeholder'=>'Text','class' => 'form-control' ,'id' => 'link'  ]); !!}
                </div>
                <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $("#post_form").submit(function (e) {
            var messageLength = $("#ckeditor").val().replace(/<[^>]*>/gi, '').length;
            if (!messageLength) {
                alert('Please enter Text in post');
                e.preventDefault();
            }
        });
        $("#video_link").change(function () {
            $('#video_result').html($("#video_link").val());
        });

    </script>
@endsection

