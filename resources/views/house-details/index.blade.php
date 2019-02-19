@extends('layouts.master')

@section('title', 'Details')


@section('content')

    <!-- Titlebar
================================================== -->
    <div class="title-bar-wrapper">
        <div id="titlebar" class="property-titlebar margin-bottom-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href="listings-list-with-sidebar.html" class="back-to-listings"></a>
                        <div class="property-title">
                            <h2>Selway Apartments <span class="property-badge">For Sale</span></h2>
                            <span>
                                <a href="#location" class="listing-address">
                                    <i class="fa fa-map-marker"></i>
                                    7843 Durham Avenue, MD
                                </a>
                            </span>
                        </div>

                        <div class="property-pricing">
                            <div class="property-price">$420,000</div>
                            <div class="sub-price">$770 / sq ft</div>
                            <div class="property-button button">
                                <a href="" class="property-button-add-to-cart">Add to cart</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Content
    ================================================== -->
    <div class="house-details-wrapper" style="background: #f7f7f7 ;">
        <div class="container">
            <div class="row margin-bottom-50">
                <div class="col-md-12">

                    <!-- Slider -->
                    <div class="property-slider default">
                        <a href="{{ asset('vendor/template/images/single-property-01.jpg') }}" data-background-image="{{ asset('vendor/template/images/single-property-01.jpg') }}" class="item mfp-gallery"></a>
                        <a href="{{ asset('vendor/template/images/single-property-02.jpg') }}" data-background-image="{{ asset('vendor/template/images/single-property-02.jpg') }}" class="item mfp-gallery"></a>
                        <a href="{{ asset('vendor/template/images/single-property-03.jpg') }}" data-background-image="{{ asset('vendor/template/images/single-property-03.jpg') }}" class="item mfp-gallery"></a>
                        <a href="{{ asset('vendor/template/images/single-property-04.jpg') }}" data-background-image="{{ asset('vendor/template/images/single-property-04.jpg') }}" class="item mfp-gallery"></a>
                        <a href="{{ asset('vendor/template/images/single-property-05.jpg') }}" data-background-image="{{ asset('vendor/template/images/single-property-05.jpg') }}" class="item mfp-gallery"></a>
                        <a href="{{ asset('vendor/template/images/single-property-06.jpg') }}" data-background-image="{{ asset('vendor/template/images/single-property-06.jpg') }}" class="item mfp-gallery"></a>

                    </div>

                    <!-- Slider Thumbs -->
                    <div class="property-slider-nav">
                        <div class="item">
                            <img src="{{ asset('vendor/template/images/single-property-01.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('vendor/template/images/single-property-02.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('vendor/template/images/single-property-03.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('vendor/template/images/single-property-04.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('vendor/template/images/single-property-05.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('vendor/template/images/single-property-06.jpg') }}" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Details ================ -->
        <div class="container">
            <div class="row">

                <!-- Property Description -->
                <div class="col-lg-12">
                    <div class="property-description">

                        <!-- Main Features -->
                        <ul class="property-main-features">
                            <li>Area <span>1450 sq ft</span></li>
                            <li>Rooms <span>4</span></li>
                            <li>Bedrooms <span>2</span></li>
                            <li>Bathrooms <span>1</span></li>
                        </ul>


                        <!-- Description -->
                        <h3 class="desc-headline">Description</h3>
                        <div class="show-more">
                            <p>
                                Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum, lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus turpis.
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.
                            </p>

                            <p>
                                Nam mattis lobortis felis eu blandit. Morbi tellus ligula, interdum sit amet ipsum et, viverra hendrerit lectus. Nunc efficitur sem vel est laoreet, sed bibendum eros viverra. Vestibulum finibus, ligula sed euismod tincidunt, lacus libero lobortis ligula, sit amet molestie ipsum purus ut tortor. Nunc varius, dui et sollicitudin facilisis, erat felis imperdiet felis, et iaculis dui magna vitae diam. Donec mattis diam nisl, quis ullamcorper enim malesuada non. Curabitur lobortis eu mauris nec vestibulum. Nam efficitur, ex ac semper malesuada, nisi odio consequat dui, hendrerit vulputate odio dui vitae massa. Aliquam tortor urna, tincidunt ut euismod quis, semper vel ipsum. Ut non vestibulum mauris. Morbi euismod, felis non hendrerit viverra, nunc sapien bibendum ligula, eget vehicula nunc dolor eu ex. Quisque in semper odio. Donec auctor blandit ligula. Integer id lectus non nibh vulputate efficitur quis at arcu.
                            </p>

                            <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a>
                        </div>

                        <!-- Layout Switcher -->

                    </div>
                </div>
                <!-- Property Description / End -->

            </div>
        </div>

    </div>

    <!-- Similar items =================-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Similar Listings Container -->
                <h3 class="desc-headline no-border margin-bottom-35 margin-top-60">Similar Houses</h3>
            </div>
            <div class="col-md-12">
                <div class="carousel">

                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <div class="listing-item grid">

                            <a href="single-property-page-1.html" class="listing-img-container">

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
        </div>
        <br/>
    </div>
@stop

@section('javascript')
    <script>
        $(document).ready(function () {
            var pxShow = 300;
            var fadeInTime = 300;
            var fadeOutTime = 300;
            $(window).scroll(function() {
                if ($(window).scrollTop() >= pxShow) {
                    $("#titlebar").addClass('stick-house-title-bar').fadeIn(fadeInTime);
                } else {
                    $("#titlebar").removeClass('stick-house-title-bar').fadeIn(fadeOutTime);
                }
            });
        })
    </script>
@stop
