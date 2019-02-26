<div class="uk-width-large" uk-dropdown="mode: click; pos: bottom-right">
    <div class="uk-dropdown-grid" id="cart-dropdown-holder">
        @include('components.card-dropdown-table', ['items' => $items])
    </div>
</div>
