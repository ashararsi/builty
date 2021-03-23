@extends('admin.layouts.main')
{{--@extends('layouts.app')--}}
@section('title')
    Setting
@endsection

@section('breadcrumb_page')
    Setting
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#"><i
                class="zmdi zmdi-home"></i> {{ config('app.name', 'Laravel') }}</a></li>
    <li class="breadcrumb-item active">Setting</li>
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row clearfix">

        </div>
    </div>
@endsection
