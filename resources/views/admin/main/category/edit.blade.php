@extends('admin.layouts.main')
{{--@extends('layouts.app')--}}
@section('title')
    Category Edit
@endsection
@section('css')
    <style>
        .dataTables_wrapper {
            width: 100% !important;
        }
    </style>
@endsection

@section('breadcrumb_page')
    Category Edit
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i
                class="zmdi zmdi-home"></i> {{ config('app.name', 'Laravel') }}</a></li>
    <li class="breadcrumb-item "><a href="{{ route('admin.category.index') }}"> Category </a></li>
    <li class="breadcrumb-item ">Edit</li>
    <li class="breadcrumb-item active">{!! $data->name !!}</li>
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row w-100" style="width: 100%">
            <div class="w-100">
                {{--                <form id="form_validation" method="POST" class="w-100">--}}
                {!! Form::model($data, ['method' => 'PUT', 'enctype' => 'multipart/form-data', 'route' => ['admin.category.update', $data->id]]) !!}
                {!! Form::token(); !!}
                <div class="form-group form-float">
                    {!! Form::text('name', old('name'),[ 'placeholder'=>'Name','class' => 'form-control' ,'Required'=>'required'  ]); !!}
                </div>
                <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('js')


@endsection

