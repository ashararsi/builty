@extends('admin.layouts.main')
{{--@extends('layouts.app')--}}
@section('title')
    Profile
@endsection

@section('breadcrumb_page')
    Profile
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#"><i
                class="zmdi zmdi-home"></i> {{ config('app.name', 'Laravel') }}</a></li>
    <li class="breadcrumb-item active">Profile</li>
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row clearfix">

        </div>
    </div>
@endsection
