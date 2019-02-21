@if (ByarentCart::count())
    <div class="table-responsive cart-dropdown">
        <table class="uk-table uk-table-hover uk-table-middle uk-table-small">
            <thead>
            <tbody>
            @php $serialNo = 1; @endphp
            @foreach($items as $item)
                @php $price = ($item->options->house->parsedPrice * $item->qty); @endphp
                <tr class="cart-dropdown-item">
                    <td>{{ $serialNo }}</td>
                    <td>
                        <div class="cart-dropdown-image-wrapper">
                            <img src="{{ Voyager::image($item->options->house->picture) }}" alt="">
                            <span class="cart-dropdown-qty badge" id="{{ $item->id }}">{{ $item->qty }}</span>
                        </div>
                    </td>
                    <td>
                        <span class="cart-dropdown-price" id="cartPrice{{ $item->id }}">
                            <b>{{ setting('payments.currency_symbol') . ' '. \App\Services\Money::shorten($price) }}</b>
                        </span><br/>
                        {{ $item->options->house->name }}
                    </td>
                    <td>
                        <a href="" class="cart-dropdown-remove text-danger" id="{{ $item->id }}" uk-icon="icon: close"></a>
                    </td>
                </tr>
                @php $serialNo++; @endphp
                @if ($loop->iteration === 2)
                    @break
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('cart.index') }}" class="d-block secondary-color text-center margin-top-20">
        View all <i class="fa fa-angle-right"></i>
    </a>
@else
    <div class="">
        Your cart is empty
    </div>
@endif


