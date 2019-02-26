@extends('layouts.master')

@section('title', 'Home - Get your dream home')

@section('before-content')
    @include('sections.banner')
@stop

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="headline margin-bottom-25 margin-top-65">Newly Added</h3>
            </div>

            <!-- Carousel -->
            <div class="col-md-12">
                @include('partials.default-houses-carousel', ['houses' => $houses])
            </div>
            <!-- Carousel / End -->

            <div class="col-md-12 text-center mt-3">
                <a href="{{ route('houses.index') }}" class="text-uppercase btn btn-outline-danger" style="letter-spacing: 2px;">Browse all <i class="sl sl-icon-arrow-right"></i></a>
            </div>

        </div>
    </div>

    <!-- Fullwidth Section -->
    <section class="fullwidth margin-top-30 margin-bottom-0">

        <!-- Box Headline -->
        <h3 class="headline-box hidden">Articles & Tips</h3>

        <div class="container">
            <div class="row">

                <div class="col-md-12 ">
                    <h2 class="text-center">Articles & Tips</h2>
                </div>

                <div class="col-md-4">

                    <!-- Blog Post -->
                    <div class="blog-post">

                        <!-- Img -->
                        <a href="blog-post.html" class="post-img">
                            <img data-cfsrc="images/blog-post-01.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="images/blog-post-01.jpg" alt=""></noscript>
                        </a>

                        <!-- Content -->
                        <div class="post-content">
                            <h3 class="text-truncate"><a href="#">8 Tips to Help You Finding New Home</a></h3>
                            <div class="post-desc">
                                <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae. </p>
                            </div>

                            <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                            <div class="post-author-image">
                                <img src="{{ asset('vendor/template/images/me.jpg') }}" alt="Agent Image">
                            </div>
                        </div>

                    </div>
                    <!-- Blog Post / End -->

                </div>

                <div class="col-md-4">

                    <!-- Blog Post -->
                    <div class="blog-post">

                        <!-- Img -->
                        <a href="blog-post.html" class="post-img">
                            <img data-cfsrc="images/blog-post-02.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="images/blog-post-02.jpg" alt=""></noscript>
                        </a>

                        <!-- Content -->
                        <div class="post-content">
                            <h3 class="text-truncate"><a href="#">Bedroom Colors You'll Never Regret</a></h3>
                            <div class="post-desc">
                                <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae. </p>
                            </div>

                            <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                            <div class="post-author-image">
                                <img src="{{ asset('vendor/template/images/me.jpg') }}" alt="Agent Image">
                            </div>
                        </div>

                    </div>
                    <!-- Blog Post / End -->

                </div>

                <div class="col-md-4">

                    <!-- Blog Post -->
                    <div class="blog-post">

                        <!-- Img -->
                        <a href="blog-post.html" class="post-img">
                            <img data-cfsrc="images/blog-post-03.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="images/blog-post-03.jpg" alt=""></noscript>
                        </a>

                        <!-- Content -->
                        <div class="post-content">
                            <h3 class="text-truncate"><a href="#">What to Do a Year Before Buying Apartment</a></h3>
                            <div class="post-desc">
                                <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae. </p>
                            </div>

                            <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                            <div class="post-author-image">
                                <img src="{{ asset('vendor/template/images/me.jpg') }}" alt="Agent Image">
                            </div>
                        </div>

                    </div>
                    <!-- Blog Post / End -->

                </div>

            </div>
        </div>
    </section>
    <!-- Fullwidth Section / End -->


    <!-- Flip banner -->
    <a href="{{ route('houses.index') }}" class="flip-banner parallax" data-background="{{ asset('vendor/template/images/flip-banner-bg.jpg') }}" data-color="rgb(152, 41, 41)" data-color-opacity="0.9" data-img-width="2500" data-img-height="1600">
        <div class="flip-banner-content">
            <h2 class="flip-visible hidden-xs hidden-sm">We help people and homes find each other</h2>
            <span class="flip-visible hidden-xs hidden-sm text-white margin-top-30">
                Click here to find your dream house
            </span>
            <i class="flip-visible hidden-xs hidden-sm margin-top-50 text-white fa fa-angle-down"></i>
            <h2 class="flip-hidden hidden-xs hidden-sm">Browse houses <i class="sl sl-icon-arrow-right"></i></h2>
            <h2 class="flip-visible hidden-md hidden-lg">Browse houses <i class="sl sl-icon-arrow-right"></i></h2>
        </div>
    </a>
    <!-- Flip banner / End -->

    <section class="fullwidth border-top margin-bottom-0 padding-top-80 padding-bottom-65" data-background-color="#ffffff" style="margin-top: -50px;">
        <!-- Logo Carousel -->
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h3 class="headline centered margin-bottom-40 margin-top-10">Companies We're in partnership With <span>Trust us with helping you get your dream home!</span></h3>
                </div>

                <!-- Carousel -->
                <div class="col-md-12">
                    <div class="logo-carousel dot-navigation">

                        <div class="item">
                            <img src="{{ asset('vendor/template/images/logo-01.png') }}" alt="">
                        </div>

                        <div class="item">
                            <img src="{{ asset('vendor/template/images/logo-02.png') }}" alt="">
                        </div>

                        <div class="item">
                            <img src="{{ asset('vendor/template/images/logo-03.png') }}" alt="">
                        </div>

                        <div class="item">
                            <img src="{{ asset('vendor/template/images/logo-04.png') }}" alt="">
                        </div>

                        <div class="item">
                            <img src="{{ asset('vendor/template/images/logo-05.png') }}" alt="">
                        </div>

                        <div class="item">
                            <img src="{{ asset('vendor/template/images/logo-06.png') }}" alt="">
                        </div>

                        <div class="item">
                            <img src="{{ asset('vendor/template/images/logo-07.png') }}" alt="">
                        </div>


                    </div>
                </div>
                <!-- Carousel / End -->

            </div>
        </div>
        <!-- Logo Carousel / End -->
    </section>
@stop
