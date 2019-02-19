@extends('layouts.master')

@section('title', 'Cart')

@section('content')
    <div class="cart-wrapper padding-top-30 padding-bottom-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h2>Your shopping cart</h2>
                    <div class="card">
                        <div class="card-body">
                            <div class="cart-items table-responsive">
                                <table class="table cart-items-table">
                                    <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Qty</th>
                                        <th class="">Unit Price</th>
                                        <th class="text-right">Subtotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart-item">
                                            <td>
                                                <div class="cart-item-image-wrapper">
                                                    <img src="{{ asset('vendor/template/images/listing-06.jpg') }}" alt="House image">
                                                </div>
                                                Peacook two bedroom flat
                                            </td>
                                            <td>1</td>
                                            <td>
                                                Gh200,000
                                            </td>
                                            <td class="text-right">
                                                Gh200,000
                                                <a href="" uk-tooltip="title: Remove from cart" class="cart-item-remove text-danger">
                                                    <i uk-icon="icon: close"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="cart-item">
                                            <td>
                                                <div class="cart-item-image-wrapper">
                                                    <img src="{{ asset('vendor/template/images/listing-06.jpg') }}" alt="House image">
                                                </div>
                                                Peacook two bedroom flat
                                            </td>
                                            <td>1</td>
                                            <td>
                                                Gh200,000
                                            </td>
                                            <td class="text-right">
                                                Gh200,000
                                                <a href="" uk-tooltip="title: Remove from cart" class="cart-item-remove text-danger">
                                                    <i uk-icon="icon: close"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer cart-items-footer">
                            <h3 class="text-right margin-bottom-0 font-weight-bold secondary-color"> = Gh400,000</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row justify-content-end margin-top-40 cart-items-buttons">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('houses.index') }}" class="button button-default">Continue Shopping</a>
                            <a href="{{ route('checkout.index', 1) }}" class="button text-uppercase">Checkout <i uk-icon="icon: arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        $(document).ready(function () {

        })
    </script>
@stop
