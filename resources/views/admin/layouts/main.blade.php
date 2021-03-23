<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name', 'Laravel') }}-Admin- @yield('title') </title>

    <link rel="icon" href="{{ asset('dist/img/logo.jpeg') }}" type="image/x-icon"> <!-- Favicon-->


    @include('admin.layouts.css')
</head>

<body class="theme-blush">
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('dist/img/logo.jpeg') }}" width="100" height="100"
                                 alt="{{ config('app.name', 'Laravel') }}">
        </div>
        <p>Please wait...</p>
    </div>
</div>
<div class="overlay"></div>
@include('admin.layouts.header')
@include('admin.layouts.side')
<section class="content">
    <div class="block-header" style="margin-bottom: 0px;">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>
                    @yield('breadcrumb_page')
                </h2>

                <ul class="breadcrumb"> @yield('breadcrumb')</ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                        class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">

            </div>
        </div>
    </div>
</section>
<section class="content">
    @yield('content')
</section>

<!-- Page Loader -->
@include('admin.layouts.foter')
@include('admin.layouts.js')
@include('admin.layouts.global_js')
</body>
</html>
