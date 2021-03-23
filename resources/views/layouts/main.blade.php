<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name', 'Laravel') }}- @yield('title') </title>
    @include('layouts.css')
    {{--    <link rel="icon" href="img/core-img/favicon.ico">--}}
{{--    {{ asset('img/photo.jpg'); }}--}}
</head>

<body>
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

@include('layouts.header')

@yield('content')


@include('layouts.foter')
@include('layouts.js')
@include('layouts.global_js')
@yield('js')
</body>
</html>
