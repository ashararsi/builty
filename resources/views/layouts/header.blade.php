{{--@inject('Helpers', 'App\Helpers\Helper')--}}

@php
    $categories=categories();
@endphp

<header class="header-area">

    <div class="mag-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">

            <nav class="classy-navbar justify-content-between" id="magNav">

                <a href="{{ route('index') }}" class="nav-brand">
                    {{--                    <img src="{{ asset('dist/img/core-img/logo.png') }}" alt="">--}}
                    News Hub
                </a>

                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <div class="nav-content d-flex align-items-center">
                    <div class="classy-menu">

                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">Category</a>
                                    <ul class="dropdown">
                                        @foreach($categories as $item)
                                            <li><a href="{!! $item->id !!}">{!! $item->name !!}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="top-meta-data d-flex align-items-center">

                        <div class="top-search-area">
                            <form action="#" method="post">
                                <input type="search" name="top-search" id="topSearch"
                                       placeholder="Search and hit enter...">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>

                        <a href="{{ route('login') }}" class="login-btn">


                            <i class="fa fa-user"
                               aria-hidden="true"></i></a>

                        <a href="#" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span>
                            <span class="video-text">Submit Video</span></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

