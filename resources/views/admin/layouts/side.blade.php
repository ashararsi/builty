<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href=""><img src="{{ asset('dist/img/logo.jpeg') }}" width="50"
                        alt="{{ config('app.name', 'Laravel') }}"><span
                class="m-l-10">{{ config('app.name', 'Laravel') }}</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="{{ route('admin.index') }}"><img src="{{ asset('dist/img/logo.jpeg') }}"
                                                                            alt="User"></a>
                    <div class="detail">
                        <h4>@php
                                echo   auth()->user()->name;
                                $role=auth()->user()->getRoleNames();
                            @endphp</h4>
                        @foreach($role as $item)
                            <small>     {!! $item !!}
                            </small>
                        @endforeach
                    </div>
                </div>
            </li>
            <li class="active open"><a href="{{ route('admin.index') }}"><i
                        class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li><a href="{{ route('admin.profile') }}"><i class="zmdi zmdi-account"></i><span>Our Profile</span></a>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Cruds</span></a>
                <ul class="ml-menu">
                    <li><a href="{{ route('admin.post.index') }}">Posts</a></li>
                    <li><a href="{{ route('admin.category.index') }}">Category</a></li>
                    <li><a href="{{ route('admin.slider.index') }}">Sliders</a></li>
                    <li><a href="{{ route('admin.user.index') }}">Users</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
