<div class="uk-width-large" uk-dropdown="mode: click; pos: bottom-right">
    <div class="uk-dropdown-grid uk-child-width-1-1@m" uk-grid>
        <div class="table-responsive cart-dropdown">
            <table class="uk-table uk-table-hover uk-table-middle uk-table-small">
                <thead>
                <tbody>
                    <tr class="cart-dropdown-item">
                        <td>1.</td>
                        <td>
                            <div class="cart-dropdown-image-wrapper">
                                <img src="{{ asset('vendor/template/images/listing-06.jpg') }}" alt="">
                                <span class="cart-dropdown-qty badge">1</span>
                            </div>
                        </td>
                        <td>
                            Gh200,000
                        </td>
                        <td>
                            <a href="" class="cart-dropdown-remove text-danger" id="1" uk-icon="icon: close"></a>
                        </td>
                    </tr>
                    <tr class="cart-dropdown-item">
                        <td>2.</td>
                        <td>
                            <div class="cart-dropdown-image-wrapper">
                                <img src="{{ asset('vendor/template/images/listing-06.jpg') }}" alt="">
                                <span class="cart-dropdown-qty badge">2</span>
                            </div>
                        </td>
                        <td>
                            Gh200,000
                        </td>
                        <td>
                            <a href="" class="cart-dropdown-remove text-danger" id="2" uk-icon="icon: close"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="{{ route('cart.index') }}" class="d-block secondary-color text-center margin-top-20">View all <i class="fa fa-angle-right"></i></a>
    </div>
</div>
