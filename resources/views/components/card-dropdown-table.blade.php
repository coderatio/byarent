@if (ByarentCart::hasItems())
    <div class="table-responsive cart-dropdown">
        <div class="pr-2 pl-2">
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
                                <b>{{ ByarentCart::formattedPrice($price) }}</b>
                            </span><br/>
                            {{ $item->options->house->name }}
                        </td>
                        <td>
                            <a href="" class="cart-dropdown-remove-item text-danger uk-toocltip" id="{{ $item->id }}" uk-icon="icon: close" uk-tooltip="title: Remove"></a>
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
    </div>
    <div class="text-center">
        Total =
        <span class="font-weight-bold">
            {{ ByarentCart::instance()->total() }}
        </span>
    </div>
    <div class="d-block text-center margin-top-20">
        <div class="cart-dropown-footer">
            <a href="{{ route('cart.index') }}" class="btn btn-sm btn-default secondary-color margin-right-15">
                Go to cart <i class="fa fa-angle-right"></i>
            </a>
            <a href="#" class="btn btn-sm btn-default primary-color cart-dropdown-clear" id="cart-dropdown-clear">
                <i class="sl sl-icon-trash"></i> Clear
            </a>
        </div>

    </div>

@else
    <div class="">
        <div class="pr-2 pl-4 pb-2">
            <i class="sl sl-icon-basket"></i> Your cart is empty!
        </div>
    </div>
@endif


