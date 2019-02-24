<form action="{{ route('orders.store') }}" method="post">
    @csrf
    <div class="row justify-content-end">
        <div class="col-md-10 checkout-summary-cards">
            <h3>Summary</h3>
            @foreach($items as $item)
                <div class="uk-card uk-card-default" style="@if($loop->last) border-radius: .25rem .25rem 0 0; @endif">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <img class="uk-border-rounded" width="40" src="{{ Voyager::image($item->options->house->picture) }}">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom uk-text-truncate">{{ $item->name }}</h3>
                                <p class="uk-text-meta uk-margin-remove-top">
                                    <time datetime="2016-04-01T19:00">{{ $item->options->house->created_at->format('F d, Y') }}</time>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body uk-padding-remove-top @if(!$loop->last) uk-padding-remove-bottom @endif">
                        <table class="uk-table uk-table-small uk-table-middle uk-table-justify">
                            <tr>
                                <th>Quantity</th>
                                <td>{{ $item->qty }}</td>
                            </tr>
                            <tr>
                                <th>Unit Price</th>
                                <td>{{ \App\Services\Money::shorten($item->price) }}</td>
                            </tr>
                            <tr>
                                <th>Sub total</th>
                                <td>
                                    {{ \App\Services\Money::shorten($item->price * $item->qty) }}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                {{--End uk card--}}
            @endforeach
            <div class="uk-card uk-card-primary uk-card-body" style="background: #e32b2b;">
                <h4>
                    TOTAL: <b>{{ setting('payments.currency_symbol') }} {{ ByarentCart::instance()->total() }}</b>
                </h4>
            </div>
            <div class="clearfix margin-top-40"></div>
            <div class="text-right">
                @if (ByarentCart::hasItems())
                        <a href="{{ route('cart.index') }}" class="btn btn-link primary-color"><i uk-icon="icon: arrow-left"></i> Back to cart</a>
                        <button type="submit" class="button button-secondary text-uppercase">Place Order <i class="sl sl-icon-arrow-right-circle ml-2"></i></button>
                @else
                    <a href="{{ route('houses.index') }}" class="button button-secondary text-uppercase">Browse Houses <i class="sl sl-icon-home ml-2"></i></a>
                @endif
            </div>
        </div>
    </div>
</form>
