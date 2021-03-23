@extends('layouts.main')
@section('title')
    Home
@endsection

@section('content')

    <div class="hero-area owl-carousel">
        <div class="hero-blog-post bg-img bg-overlay"
             style="background-image: url({{ asset('dist/img/bg-img/1.jpg') }});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">MAY 8, 2018</a>
                                <a href="#">lifestyle</a>
                            </div>
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms">Party Jokes
                                Startling But Unnecessary</a>
                            <a href="#" class="video-play" data-animation="bounceIn" data-delay="500ms"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-blog-post bg-img bg-overlay"
             style="background-image: url({{ asset('dist/img/bg-img/2.jpg') }});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">

                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">MAY 8, 2018</a>
                                <a href="#">lifestyle</a>
                            </div>
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms">Party
                                Jokes Startling But Unnecessary</a>
                            <a href="#" class="video-play" data-animation="bounceIn" data-delay="500ms"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-blog-post bg-img bg-overlay"
             style="background-image: url({{ asset('dist/img/bg-img/3.jpg') }});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">

                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">MAY 8, 2018</a>
                                <a href="#">lifestyle</a>
                            </div>
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms">Party
                                Jokes Startling But Unnecessary</a>
                            <a href="#" class="video-play" data-animation="bounceIn" data-delay="500ms"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="mag-posts-area d-flex flex-wrap">

        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">

            <div class="single-sidebar-widget p-30">

                <div class="section-heading">
                    <h5>Most Popular</h5>
                </div>

                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="{{ asset('dist/img/bg-img/4.jpg') }}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">Global Travel And Vacations Luxury Travel</a>
{{--                        <div class="post-meta d-flex justify-content-between ">--}}
{{--                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>--}}
{{--                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>--}}
{{--                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>--}}
{{--                        </div>--}}
                    </div>
                </div>

                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="{{ asset('dist/img/bg-img/5.jpg') }}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">Cruising Destination Ideas</a>
{{--                        <div class="post-meta d-flex justify-content-between">--}}
{{--                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>--}}
{{--                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>--}}
{{--                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>--}}
{{--                        </div>--}}
                    </div>
                </div>

                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="{{ asset('dist/img/bg-img/6.jpg') }}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">The Luxury Of Traveling With</a>
{{--                        <div class="post-meta d-flex justify-content-between">--}}
{{--                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>--}}
{{--                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>--}}
{{--                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>--}}
{{--                        </div>--}}
                    </div>
                </div>

                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="{{ asset('dist/img/bg-img/7.jpg') }}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">Choose The Perfect Accommodations</a>
{{--                        <div class="post-meta d-flex justify-content-between">--}}
{{--                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>--}}
{{--                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>--}}
{{--                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>--}}
{{--                        </div>--}}
                    </div>
                </div>

                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="{{ asset('dist/img/bg-img/8.jpg') }}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">A Guide To Rocky Mountain Vacations</a>
{{--                        <div class="post-meta d-flex justify-content-between">--}}
{{--                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>--}}
{{--                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>--}}
{{--                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>

            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="{{ asset('dist/img/bg-img/add.png') }}" alt=""></a>
            </div>

            <div class="single-sidebar-widget p-30">

                <div class="section-heading">
                    <h5>Latest Videos</h5>
                </div>

                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="{{ asset('dist/img/bg-img/9.jpg') }}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">Coventry City Guide Including Coventry</a>
{{--                        <div class="post-meta d-flex justify-content-between">--}}
{{--                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>--}}
{{--                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>--}}
{{--                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>--}}
{{--                        </div>--}}
                    </div>
                </div>

                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="{{ asset('dist/img/bg-img/10.jpg') }}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">Choose The Perfect Accommodations</a>
{{--                        <div class="post-meta d-flex justify-content-between">--}}
{{--                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>--}}
{{--                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>--}}
{{--                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>--}}
{{--                        </div>--}}
                    </div>
                </div>

                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="{{ asset('dist/img/bg-img/11.jpg') }}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">Get Ready Fast For Fall Leaf Viewing</a>
{{--                        <div class="post-meta d-flex justify-content-between">--}}
{{--                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>--}}
{{--                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>--}}
{{--                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>--}}
{{--                        </div>--}}
                    </div>
                </div>

                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="{{ asset('dist/img/bg-img/12.jpg') }}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">Global Resorts Network Grn Putting</a>
{{--                        <div class="post-meta d-flex justify-content-between">--}}
{{--                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>--}}
{{--                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>--}}
{{--                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>--}}
{{--                        </div>--}}
                    </div>
                </div>

                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="{{ asset('dist/img/bg-img/13.jpg') }}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">Travel Prudently Luggage And Carry</a>
{{--                        <div class="post-meta d-flex justify-content-between">--}}
{{--                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>--}}
{{--                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>--}}
{{--                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">

            <div class="trending-now-posts mb-30">

                <div class="section-heading">
                    <h5>TRENDING NOW</h5>
                </div>
                <div class="trending-post-slides owl-carousel">

                    <div class="single-trending-post">
                        <img src="{{ asset('dist/img/bg-img/19.jpg') }}" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Video</a>
                            <a href="#" class="post-title">Big Savings On Gas While You Travel</a>
                        </div>
                    </div>

                    <div class="single-trending-post">
                        <img src="{{ asset('dist/img/bg-img/20.jpg') }}" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">TV Show</a>
                            <a href="#" class="post-title">A Guide To Rocky Mountain Vacations</a>
                        </div>
                    </div>

                    <div class="single-trending-post">
                        <img src="{{ asset('dist/img/bg-img/21.jpg') }}" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Sports</a>
                            <a href="video-post.html" class="post-title">The Health Benefits Of Sunglasses</a>
                        </div>
                    </div>

                    <div class="single-trending-post">
                        <img src="{{ asset('dist/img/bg-img/19.jpg') }}" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Video</a>
                            <a href="#" class="post-title">Big Savings On Gas While You Travel</a>
                        </div>
                    </div>

                    <div class="single-trending-post">
                        <img src="{{ asset('dist/img/bg-img/20.jpg') }}" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">TV Show</a>
                            <a href="#" class="post-title">A Guide To Rocky Mountain Vacations</a>
                        </div>
                    </div>

                    <div class="single-trending-post">
                        <img src="{{ asset('dist/img/bg-img/21.jpg') }}" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Sports</a>
                            <a href="#" class="post-title">The Health Benefits Of Sunglasses</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature-video-posts mb-30">

                <div class="section-heading">
                    <h5>Featured Videos</h5>
                </div>
                <div class="featured-video-posts">
                    <div class="row">
                        <div class="col-12 col-lg-7">

                            <div class="single-featured-post">

                                <div class="post-thumbnail mb-50">
                                    <img src="{{ asset('dist/img/bg-img/22.jpg') }}" alt="">
                                    <a href="#" class="video-play"><i class="fa fa-play"></i></a>
                                </div>

                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="#">MAY 8, 2018</a>
                                        <a href="#">lifestyle</a>
                                    </div>
                                    <a href="#" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                </div>

                                <div class="post-share-area d-flex align-items-center justify-content-between">

{{--                                    <div class="post-meta pl-3">--}}
{{--                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                                    </div>--}}

                                    <div class="share-info">
                                        <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>

                                        <div class="all-share-btn d-flex">
                                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">

                            <div class="featured-video-posts-slide owl-carousel">
                                <div class="single--slide">

                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('dist/img/bg-img/23.jpg') }}" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="#" class="post-title">Global Resorts Network Grn Putting Timeshares To Shame</a>
{{--                                            <div class="post-meta d-flex">--}}
{{--                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>

                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('dist/img/bg-img/24.jpg') }} " alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="#" class="post-title">A Guide To Rocky Mountain Vacations</a>
{{--                                            <div class="post-meta d-flex">--}}
{{--                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>

                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('dist/img/bg-img/25.jpg') }}" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="#" class="post-title">American Standards And European Culture How To Avoid</a>
{{--                                            <div class="post-meta d-flex">--}}
{{--                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>

                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('dist/img/bg-img/26.jpg') }}" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="#" class="post-title">Mother Earth Hosts Our Travels</a>
{{--                                            <div class="post-meta d-flex">--}}
{{--                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>

                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('dist/img/bg-img/27.jpg') }}" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="#" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
{{--                                            <div class="post-meta d-flex">--}}
{{--                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="single--slide">

                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('dist/img/bg-img/23.jpg') }}" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="#" class="post-title">Global Resorts Network Grn Putting Timeshares To Shame</a>
{{--                                            <div class="post-meta d-flex">--}}
{{--                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>

                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('dist/img/bg-img/24.jpg') }}" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="#" class="post-title">A Guide To Rocky Mountain Vacations</a>
{{--                                            <div class="post-meta d-flex">--}}
{{--                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>

                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('dist/img/bg-img/25.jpg') }}" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="#" class="post-title">American Standards And European Culture How To Avoid</a>
{{--                                            <div class="post-meta d-flex">--}}
{{--                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>

                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('dist/img/bg-img/26.jpg') }}" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="#" class="post-title">Mother Earth Hosts Our Travels</a>
{{--                                            <div class="post-meta d-flex">--}}
{{--                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>

                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('dist/img/bg-img/27.jpg') }}" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="#" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
{{--                                            <div class="post-meta d-flex">--}}
{{--                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="most-viewed-videos mb-30">

                <div class="section-heading">
                    <h5>Most Viewed Videos</h5>
                </div>
                <div class="most-viewed-videos-slide owl-carousel">

                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="{{ asset('dist/img/bg-img/28.jpg') }}" alt="">
                            <a href="#" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">09:27</span>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">A Guide To Rocky Mountain Vacations</a>
{{--                            <div class="post-meta d-flex">--}}
{{--                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                            </div>--}}
                        </div>
                    </div>

                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="{{ asset('dist/img/bg-img/29.jpg') }}" alt="">
                            <a href="#" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">09:27</span>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Dentists Are Smiling Over Painless Veneer Alternative</a>
{{--                            <div class="post-meta d-flex">--}}
{{--                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                            </div>--}}
                        </div>
                    </div>

                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="{{ asset('dist/img/bg-img/30.jpg') }}" alt="">
                            <a href="#" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">09:27</span>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Become A Travel Pro In One Easy Lesson</a>
{{--                            <div class="post-meta d-flex">--}}
{{--                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                            </div>--}}
                        </div>
                    </div>

                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="{{ asset('dist/img/bg-img/28.jpg') }}" alt="">
                            <a href="#" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">09:27</span>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">A Guide To Rocky Mountain Vacations</a>
{{--                            <div class="post-meta d-flex">--}}
{{--                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                            </div>--}}
                        </div>
                    </div>

                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="{{ asset('dist/img/bg-img/29.jpg') }}" alt="">
                            <a href="#" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">09:27</span>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Dentists Are Smiling Over Painless Veneer Alternative</a>
{{--                            <div class="post-meta d-flex">--}}
{{--                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                            </div>--}}
                        </div>
                    </div>

                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="{{ asset('dist/img/bg-img/30.jpg') }}" alt="">
                            <a href="#" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">09:27</span>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Become A Travel Pro In One Easy Lesson</a>
{{--                            <div class="post-meta d-flex">--}}
{{--                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="sports-videos-area">

                <div class="section-heading">
                    <h5>Sports Videos</h5>
                </div>
                <div class="sports-videos-slides owl-carousel mb-30">

                    <div class="single-featured-post">

                        <div class="post-thumbnail mb-50">
                            <img src="{{ asset('dist/img/bg-img/27.jpg') }}" alt="">
                            <a href="#" class="video-play"><i class="fa fa-play"></i></a>
                        </div>

                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">MAY 8, 2018</a>
                                <a href="#">lifestyle</a>
                            </div>
                            <a href="#" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                        </div>

                        <div class="post-share-area d-flex align-items-center justify-content-between">

{{--                            <div class="post-meta pl-3">--}}
{{--                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                            </div>--}}

                            <div class="share-info">
                                <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>

                                <div class="all-share-btn d-flex">
                                    <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-featured-post">

                        <div class="post-thumbnail mb-50">
                            <img src="{{ asset('dist/img/bg-img/22.jpg') }}" alt="">
                            <a href="#" class="video-play"><i class="fa fa-play"></i></a>
                        </div>

                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">MAY 8, 2018</a>
                                <a href="#">lifestyle</a>
                            </div>
                            <a href="#" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                        </div>

                        <div class="post-share-area d-flex align-items-center justify-content-between">

{{--                            <div class="post-meta pl-3">--}}
{{--                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>--}}
{{--                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
{{--                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
{{--                            </div>--}}

                            <div class="share-info">
                                <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>

                                <div class="all-share-btn d-flex">
                                    <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-featured-post">

                        <div class="post-thumbnail mb-50">
                            <img src="{{ asset('dist/img/bg-img/22.jpg') }}" alt="">
                            <a href="#" class="video-play"><i class="fa fa-play"></i></a>
                        </div>

                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">MAY 8, 2018</a>
                                <a href="#">lifestyle</a>
                            </div>
                            <a href="#" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                        </div>

                        <div class="post-share-area d-flex align-items-center justify-content-between">

                            <div class="post-meta pl-3">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>

                            <div class="share-info">
                                <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>

                                <div class="all-share-btn d-flex">
                                    <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="{{ asset('dist/img/bg-img/31.jpg') }}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="{{ asset('dist/img/bg-img/32.jpg') }}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="{{ asset('dist/img/bg-img/33.jpg') }}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="{{ asset('dist/img/bg-img/34.jpg') }}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">

            <div class="single-sidebar-widget p-30">

                <div class="social-followers-info">

                    <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>Fans</span></a>

                    <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280 <span>Followers</span></a>

                    <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250 <span>Subscribers</span></a>

                    <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230 <span>Followers</span></a>
                </div>
            </div>

            <div class="single-sidebar-widget p-30">

                <div class="section-heading">
                    <h5>Categories</h5>
                </div>

                <ul class="catagory-widgets">
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life Style</span> <span>35</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Travel</span> <span>30</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Foods</span> <span>13</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Game</span> <span>06</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sports</span> <span>28</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Football</span> <span>08</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> TV Show</span> <span>13</span></a></li>
                </ul>
            </div>

            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="{{ asset('dist/img/bg-img/add2.png') }}" alt=""></a>
            </div>

            <div class="single-sidebar-widget p-30">

                <div class="section-heading">
                    <h5>Hot Channels</h5>
                </div>

                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="{{ asset('dist/img/bg-img/14.png') }}" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="#" class="channel-title">TV Show</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="{{ asset('dist/img/bg-img/15.png') }}" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="#" class="channel-title">Game Channel</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="{{ asset('dist/img/bg-img/16.png') }}" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="#" class="channel-title">Sport Channel</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="{{ asset('dist/img/bg-img/17.png') }}" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="#" class="channel-title">Travel Channel</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="{{ asset('dist/img/bg-img/18.png') }}" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="#" class="channel-title">LifeStyle Channel</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>
            </div>

            <div class="single-sidebar-widget p-30">

                <div class="section-heading">
                    <h5>Newsletter</h5>
                </div>
                <div class="newsletter-form">
                    <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                    <form action="#" method="get">
                        <input type="search" name="widget-search" placeholder="Enter your email">
                        <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection
