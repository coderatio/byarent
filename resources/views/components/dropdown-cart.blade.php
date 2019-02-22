<div class="uk-width-large" uk-dropdown="mode: click; pos: bottom-right">
    <div class="uk-dropdown-grid uk-child-width-1-1@m " uk-grid id="cart-dropdown-holder">
        @include('components.card-dropdown-table', ['items' => $items])
    </div>
</div>
