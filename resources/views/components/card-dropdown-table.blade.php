@if (TemporaryCart::hasItems())
    <div class="table-responsive cart-dropdown">
        <table class="uk-table uk-table-hover uk-table-middle uk-table-small">
            <thead>
            <tbody>
            @php $serialNo = 1; @endphp
            @foreach($items as $item)
                @php $price = ($item['item']->parsedPrice * $item['quantity']); @endphp
                <tr class="cart-dropdown-item">
                    <td>{{ $serialNo }}</td>
                    <td>
                        <div class="cart-dropdown-image-wrapper">
                            <img src="{{ Voyager::image($item['item']->picture) }}" alt="">
                            <span class="cart-dropdown-qty badge" id="{{ $item['id'] }}">{{ $item['quantity'] }}</span>
                        </div>
                    </td>
                    <td>
                    <span class="cart-dropdown-price" id="cartPrice{{ $item['id'] }}">
                        {{ setting('payments.currency_symbol') . ' '. \App\Services\Money::shorten($price) }}
                    </span>
                    </td>
                    <td>
                        <a href="" class="cart-dropdown-remove text-danger" id="{{ $item['id'] }}" uk-icon="icon: close"></a>
                    </td>
                </tr>
                @php $serialNo++; @endphp
                @if ($loop->iteration === 3)
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


