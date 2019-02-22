@extends('layouts.master')

@section('title', 'Cart')

@section('content')
    <div class="cart-wrapper padding-top-30 padding-bottom-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h2>Your shopping cart</h2>
                    <div id="items-inside-cart-holder">
                        @include('components.cart-items', ['items' => ByarentCart::items()])
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        $(document).ready(function () {
            initiateUpdateItemsInsideCart();
        });


    </script>
@stop
