@if (ByarentCart::hasItems())
    <form action="{{ route('carts.update') }}" id="inside-cart-form" method="post">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="cart-items table-responsive">
                    <table class="uk-table table uk-table-hover cart-items-table">
                        <thead>
                        <tr>
                            <th>Item</th>
                            <th style="width: 12%;">Quantity</th>
                            <th>Unit Price</th>
                            <th>Subtotal</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($items as $row)
                            <input type="hidden" name="items[]" value="{{ $row->id }}">
                            <tr class="cart-item">
                                <td>
                                    <div class="cart-item-image-wrapper">
                                        <img src="{{ Voyager::image($row->options->house->picture) }}" alt="House image">
                                    </div>
                                    <strong>{{ $row->name }}</strong>
                                </td>
                                <td><input type="text" class="uk-input exclusive inside-cart-qty" name="itemQuantity{{ $row->id }}" value="{{ $row->qty }}"></td>
                                <td>{{ ByarentCart::formattedPrice($row->price) }}</td>
                                <td>{{ ByarentCart::formattedPrice($row->total) }}</td>
                                <td>
                                    <a href="" class="cart-dropdown-remove-item text-danger uk-toocltip" id="{{ $row->id }}" uk-icon="icon: close; ratio: 2" uk-tooltip="title: Remove"></a>
                                </td>
                            </tr>

                        @endforeach

                        </tbody>

                        <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <th>Subtotal</th>
                            <td colspan="2">{{ ByarentCart::instance()->subtotal() }}</td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="card-footer cart-items-footer text-right">
                <h3 class="text-right margin-bottom-0 pr-4 secondary-color">
                    <span class="font-weight-300">Total = </span>
                    <span class="font-weight-bold">
                    {{ ByarentCart::instance()->total() }}
                </span>
                </h3>
                <div class="pr-4">
                    <button type="submit" class="update-inside-cart btn btn-secondary pr-3 mb-2 pl-3" id="update-inside-cart" style="outline: none;box-shadow: none">Update cart</button>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row justify-content-end margin-top-40 cart-items-buttons">
            <div class="col-md-12 text-right">
                <a href="{{ route('houses.index') }}" class="button button-default">Continue Shopping</a>
                <a href="{{ route('checkout.index') }}" class="button text-uppercase">Checkout <i uk-icon="icon: arrow-right"></i> </a>
            </div>
        </div>
    </form>
@else
    <div class="alert alert-info bg-white">
        Your cart is currently empty.
        <a href="{{ route('houses.index') }}">Click here</a> to add items to your cart.
    </div>
@endif
