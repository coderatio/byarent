<form action="" method="post">
    @csrf
    <div class="row justify-content-end">
        <div class="col-md-10 checkout-summary-cards">
            <h3>Summary</h3>
            <div class="uk-card uk-card-default">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img class="uk-border-circle" width="40" height="40" src="{{ asset('vendor/template/images/agent-01.jpg') }}">
                        </div>
                        <div class="uk-width-expand">
                            <h3 class="uk-card-title uk-margin-remove-bottom uk-text-truncate">Shammah Estate</h3>
                            <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body uk-padding-remove-top uk-padding-remove-bottom">
                    <table class="uk-table uk-table-small uk-table-justify">
                        <tr>
                            <th>Quantity</th>
                            <td>1</td>
                        </tr>
                        <tr>
                            <th>Unit Price</th>
                            <td>Gh200,000</td>
                        </tr>
                        <tr>
                            <th>Sub total</th>
                            <td>Gh200,00</td>
                        </tr>
                    </table>
                </div>
            </div>
            {{--End uk card--}}
            <div class="uk-card uk-card-default">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img class="uk-border-circle" width="40" height="40" src="{{ asset('vendor/template/images/agent-02.jpg') }}">
                        </div>
                        <div class="uk-width-expand">
                            <h3 class="uk-card-title uk-margin-remove-bottom uk-text-truncate">Title</h3>
                            <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body uk-padding-remove-top uk-padding-remove-bottom">
                    <table class="uk-table uk-table-small uk-table-justify">
                        <tr>
                            <th>Quantity</th>
                            <td>1</td>
                        </tr>
                        <tr>
                            <th>Unit Price</th>
                            <td>Gh200,000</td>
                        </tr>
                        <tr>
                            <th>Sub total</th>
                            <td>Gh200,00</td>
                        </tr>
                    </table>
                </div>
            </div>
            {{--End uk card--}}
            <div class="clearfix margin-top-40"></div>
            <div class="text-right">
                <button type="submit" class="button button-secondary text-uppercase">Order Now</button>
            </div>
        </div>
    </div>
</form>
