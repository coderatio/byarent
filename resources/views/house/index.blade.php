@extends('layouts.master')

@section('title', $house->name)


@section('content')

    <!-- Titlebar
================================================== -->
    <div class="title-bar-wrapper">
        <div id="titlebar" class="property-titlebar margin-bottom-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('houses.index', $house->type) }}" class="back-to-listings"></a>
                        <div class="property-title">
                            <h2>{{ $house->name }}
                                @if ($house->type != 'all')
                                    <span class="property-badge">For {{ ucfirst($house->type) }}</span>
                                @endif
                            </h2>
                            <span>
                                <a href="#location" class="listing-address">
                                    <i class="im im-icon-Checked-User"></i>
                                    {{ $house->agent->name }}
                                </a>
                            </span>
                        </div>

                        <div class="property-pricing @if($house->perFeet == '') without-sub-price @endif">
                            <div class="property-price">{{ $house->priceWithCurrency }}</div>
                            <div class="sub-price">
                                @if (!empty($house->perFeet))
                                    {{ $house->subPrice }}
                                @endif
                            </div>
                            <div class="property-button button">
                                <a href="" class="property-button-add-to-cart add-to-cart" id="{{ $house->id }}">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content
    ================================================== -->
    <div class="house-details-wrapper">
        <div class="container">
            <div class="row margin-bottom-50">
                <div class="col-md-12">

                    @if (!empty($house->pictures))
                        <!-- Slider -->
                        <div class="property-slider default">
                            @foreach($house->additionalPictures as $picture)
                                <a href="{{ Voyager::image($picture) }}" data-background-image="{{ Voyager::image($picture) }}" class="item mfp-gallery"></a>
                            @endforeach
                        </div>

                        <!-- Slider Thumbs -->
                            <div class="property-slider-nav">
                                @foreach($house->additionalPictures as $picture)
                                    <div class="item card card-body">
                                        <img src="{{ Voyager::image($picture) }}" alt="{{ $house->name }} picture">
                                    </div>
                                @endforeach
                            </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Details ================ -->
        <div class="container" style="margin-top: -30px;">
            <div class="row">
                <!-- House Description -->
                <div class="col-lg-12">
                    <div class="property-description">
                        <!-- Description -->
                        <h3 class="desc-headline">Description</h3>
                        <div class="card">
                            <div class="card-body">
                                <div class="show-more">
                                    {{--Remove any formatting on the description--}}
                                    {!! str_replace('style', 'sty', $house->description) !!}
                                    <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- House Description / End -->
            </div>
        </div>

    </div>

    <!-- Similar items =================-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Similar Listings Container -->
                <h2 class="desc-headline font-weight-bold secondary-color no-border margin-bottom-35 margin-top-60">Similar Houses</h2>
            </div>
            <div class="col-md-12">
                @if ($relatedHouses->isEmpty())
                    <div class="alert alert-info">
                        <i class="sl sl-icon-info"></i> <b>Info: </b> No related houses found for this house.
                        <a href="{{ route('houses.index') }}">Click here</a> to see other houses.
                    </div>
                @endif

                @include('partials.default-houses-carousel', ['houses' => $relatedHouses])
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
