<div class="carousel">
    <!-- Listing Item -->
    @foreach ($houses as $house)
        <div class="carousel-item">
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
                        <span class="add-to-cart-icon sl sl-icon-basket add-to-cart" uk-tooltip="title: Add to Cart" id="{{ $house->id }}"></span>
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
        </div>
    @endforeach
</div>
