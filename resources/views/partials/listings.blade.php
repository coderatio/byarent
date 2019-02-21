<!-- Content
================================================== -->
<div class="container">
    <div class="row fullwidth-layout">

        <div class="col-md-12">
            <!-- Listings -->
            <div class="listings-container grid-layout-three">

                @foreach($houses as $house)
                    <!-- Listing Item -->
                        <div class="listing-item grid">

                            <a href="{{ route('house.index', $house->id) }}" class="listing-img-container">

                                <div class="listing-badges">
                                    @if (!empty($house->badgeTitle))
                                        <span class="featured">{{ $house->badgeTitle }}</span>
                                    @endif
                                    @if ($house->type != 'all')
                                        <span>
                                            For {{ ucfirst($house->type) }}
                                        </span>
                                    @endif
                                </div>

                                <div class="listing-img-content">
                                    <span class="listing-price">{{ $house->priceWithCurrency }}<i>{{ $house->subPrice }}</i></span>
                                    <span class="like-icon with-tip addToFavorite" id="{{ $house->id }}" data-tip-content="Add to Favorites"></span>
                                </div>

                                @if (!empty($house->pictures))
                                    <div class="listing-carousel">
                                        @foreach($house->additionalPictures as $picture)
                                            <div>
                                                <img src="{{ Voyager::image($picture) }}" alt="{{ $house->name }} picture">
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <img src="{{ Voyager::image($house->picture) }}" alt="{{ $house->name }} picture">
                                @endif
                            </a>

                            <div class="listing-content">
                                <div class="listing-title">
                                    <h4><a href="{{ route('house.index', $house->id) }}">{{ $house->name }}</a></h4>
                                </div>

                                <div class="listing-details">
                                    {{ strip_tags($house->description) }}
                                </div>
                                <div class="listing-footer">
                                    <a href="{{ route('house.index', $house->id) }}" class="more">See Details <i uk-icon="icon: arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                        <!-- Listing Item / End -->
                @endforeach

            </div>
            <!-- Listings Container / End -->

            <div class="clearfix"></div>
            <!-- Pagination -->
            <div class="pagination-container margin-top-20">
                {{ $houses->links() }}
            </div>
            <!-- Pagination / End -->

        </div>

    </div>
</div>
