@extends('layouts.master')

@section('title', 'Home - Byarent platform')

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
                <div class="carousel">
                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <div class="listing-item grid">

                            <a href="/details" class="listing-img-container">

                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                    <span>For Sale</span>
                                </div>

                                <div class="listing-img-content">
                                    <span class="listing-price">$275,000 <i>$520 / sq ft</i></span>
                                    <span class="like-icon with-tip" data-tip-content="Add to Favorites"></span>
                                </div>

                                <div class="listing-carousel">
                                    <div>
                                        <img src="{{ asset('vendor/template/images/listing-01b.jpg') }}" alt="">
                                    </div>
                                    <div>
                                        <img src="http://www.vasterad.com/themes/findeo/images/listing-03.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="http://www.vasterad.com/themes/findeo/images/listing-03.jpg" alt="">
                                    </div>
                                </div>

                            </a>

                            <div class="listing-content">

                                <div class="listing-title">
                                    <h4><a href="single-property-page-1.html">Eagle Apartments</a></h4>
                                    <a href="https://maps.google.com/maps?q={{ str_replace(' ', '+', 'Old GRA, Makurdi, Benue, NG') }}" class="listing-address popup-gmaps text-truncate d-block">
                                        <i class="fa fa-map-marker"></i>
                                        Old GRA, Makurdi, Benue, NG JJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJ
                                    </a>
                                </div>

                                <ul class="listing-features">
                                    <li>Area <span>530 sq ft</span></li>
                                    <li>Bedrooms <span>2</span></li>
                                    <li>Bathrooms <span>1</span></li>
                                </ul>

                            </div>

                        </div>
                    </div>
                    <!-- Listing Item / End -->


                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <div class="listing-item grid">

                            <a href="single-property-page-2.html" class="listing-img-container">

                                <div class="listing-badges">
                                    <span>For Rent</span>
                                </div>

                                <div class="listing-img-content">
                                    <span class="listing-price">$900 <i>monthly</i></span>
                                    <span class="like-icon with-tip" data-tip-content="Add to Favorites"></span>
                                </div>
                                <img src="{{ asset('vendor/template/images/listing-06.jpg') }}" alt="">

                            </a>

                            <div class="listing-content">

                                <div class="listing-title">
                                    <h4><a href="single-property-page-2.html">Serene Uptown</a></h4>
                                    <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
                                        <i class="fa fa-map-marker"></i>
                                        6 Bishop Ave. Perkasie, PA
                                    </a>
                                </div>

                                <ul class="listing-features">
                                    <li>Area <span>440 sq ft</span></li>
                                    <li>Bedrooms <span>2</span></li>
                                    <li>Bathrooms <span>1</span></li>
                                </ul>

                            </div>

                        </div>
                    </div>
                    <!-- Listing Item / End -->


                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <div class="listing-item grid">

                            <a href="single-property-page-1.html" class="listing-img-container">

                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                    <span>For Rent</span>
                                </div>

                                <div class="listing-img-content">
                                    <span class="listing-price">$1700 <i>monthly</i></span>
                                    <span class="like-icon with-tip" data-tip-content="Add to Favorites"></span>
                                </div>
                                <img src="{{ asset('vendor/template/images/blog-post-02.jpg') }}" alt="">

                            </a>

                            <div class="listing-content">

                                <div class="listing-title">
                                    <h4><a href="single-property-page-1.html">Meridian Villas</a></h4>
                                    <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
                                        <i class="fa fa-map-marker"></i>
                                        778 Country St. Panama City, FL
                                    </a>
                                </div>

                                <ul class="listing-features">
                                    <li>Area <span>1450 sq ft</span></li>
                                    <li>Bedrooms <span>2</span></li>
                                    <li>Bathrooms <span>3</span></li>
                                </ul>

                            </div>
                            <!-- Listing Item / End -->

                        </div>
                    </div>
                    <!-- Listing Item / End -->


                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <div class="listing-item grid">


                            <a href="single-property-page-3.html" class="listing-img-container">

                                <div class="listing-badges">
                                    <span>For Sale</span>
                                </div>

                                <div class="listing-img-content">
                                    <span class="listing-price">$420,000 <i>$770 / sq ft</i></span>
                                    <span class="like-icon with-tip" data-tip-content="Add to Favorites"></span>
                                </div>

                                <div class="listing-carousel">
                                    <div><img data-cfsrc="images/listing-04.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="images/listing-04.webp" alt=""></noscript></div>
                                    <div><img data-cfsrc="images/listing-04b.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="images/listing-04b.jpg" alt=""></noscript></div>
                                </div>

                            </a>

                            <div class="listing-content">

                                <div class="listing-title">
                                    <h4><a href="single-property-page-3.html">Selway Apartments</a></h4>
                                    <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
                                        <i class="fa fa-map-marker"></i>
                                        33 William St. Northbrook, IL
                                    </a>
                                </div>

                                <ul class="listing-features">
                                    <li>Area <span>540 sq ft</span></li>
                                    <li>Bedrooms <span>2</span></li>
                                    <li>Bathrooms <span>2</span></li>
                                </ul>
                            </div>
                            <!-- Listing Item / End -->

                        </div>
                    </div>
                    <!-- Listing Item / End -->


                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <div class="listing-item grid">

                            <a href="single-property-page-1.html" class="listing-img-container">
                                <div class="listing-badges">
                                    <span>For Sale</span>
                                </div>

                                <div class="listing-img-content">
                                    <span class="listing-price">$535,000 <i>$640 / sq ft</i></span>
                                    <span class="like-icon with-tip" data-tip-content="Add to Favorites"></span>
                                </div>

                                <img data-cfsrc="images/listing-05.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="images/listing-05.webp" alt=""></noscript>
                            </a>

                            <div class="listing-content">

                                <div class="listing-title">
                                    <h4><a href="single-property-page-1.html">Oak Tree Villas</a></h4>
                                    <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
                                        <i class="fa fa-map-marker"></i>
                                        71 Lower River Dr. Bronx, NY
                                    </a>
                                </div>

                                <ul class="listing-features">
                                    <li>Area <span>350 sq ft</span></li>
                                    <li>Bedrooms <span>2</span></li>
                                    <li>Bathrooms <span>1</span></li>
                                </ul>
                            </div>
                            <!-- Listing Item / End -->

                        </div>
                    </div>
                    <!-- Listing Item / End -->



                </div>
            </div>
            <!-- Carousel / End -->

        </div>
    </div>

    <!-- Fullwidth Section -->
    <section class="fullwidth margin-top-95 margin-bottom-0">

        <!-- Box Headline -->
        <h3 class="headline-box">Articles & Tips</h3>

        <div class="container">
            <div class="row">

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

                            <a href="blog-post.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                            <div class="post-author-image">
                                <img src="{{ asset('vendor/template/images/agent-04.jpg') }}" alt="Agent Image">
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

                            <a href="blog-post.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                            <div class="post-author-image">
                                <img src="{{ asset('vendor/template/images/agent-03.jpg') }}" alt="Agent Image">
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

                            <a href="blog-post.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                            <div class="post-author-image">
                                <img src="{{ asset('vendor/template/images/agent-avatar.jpg') }}" alt="Agent Image">
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
    <a href="listings-half-map-grid-standard.html" class="flip-banner parallax" data-background="{{ asset('vendor/template/images/flip-banner-bg.jpg') }}" data-color="rgb(152, 41, 41)" data-color-opacity="0.9" data-img-width="2500" data-img-height="1600">
        <div class="flip-banner-content">
            <h2 class="flip-visible">We help people and homes find each other</h2>
            <h2 class="flip-hidden">Browse Properties <i class="sl sl-icon-arrow-right"></i></h2>
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
