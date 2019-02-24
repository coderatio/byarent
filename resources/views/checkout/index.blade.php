@extends('layouts.master')

@section('title', 'Checkout')

@section('wrapper-style', 'backgroun: transparent')

@section('content')
    <section class="checkout-wrapper padding-bottom-50 padding-top-50" id="checkoutController">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 padding-bottom-20">
                    <h3>
                        <i class="sl sl-icon-user"></i>
                        @if(auth()->check())
                            Welcome, <b class="primary-color">{{ auth()->user()->name }}</b>
                        @else
                            Account
                        @endif
                    </h3>

                    @include('accounts.holder', ['checkout' => true])

                </div>

                <div class="col-md-5" id="checkoutCartSummaryHolder">
                    @include('checkout.cart-summary', ['items' => ByarentCart::items()])
                </div>
            </div>
        </div>
    </section>
@stop

@section('javascript')
    <script>
        $(document).ready(function () {
           $('#registrationForm').validate({
               rules: {
                   confirmPassword: {
                       equalTo: '#password'
                   },
                   email: {
                       email: true,
                       remote: '{{ route('register.check-email') }}'
                   }
               }
           });

            $('#editProfileForm').validate();
        });
    </script>
@stop
