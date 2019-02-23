@extends('layouts.master')

@section('title', 'Checkout')

@section('wrapper-style', 'backgroun: transparent')

@section('content')

    <section class="checkout-wrapper padding-bottom-50 padding-top-50" id="checkoutController">
        <div class="container">
            <div class="row">
                <div class="col-md-7 padding-bottom-20">
                    <h3>
                        <i uk-icon="icon: user"></i>
                        @auth
                            Welcome, <b class="primary-color">{{ auth()->user()->name }}</b>
                        @elseauth
                            Account
                        @endauth
                    </h3>

                    @include('checkout.account')

                </div>

                <div class="col-md-5">
                    @include('checkout.cart-summary', ['items' => ByarentCart::items()])
                </div>
            </div>
        </div>
    </section>
@stop

@section('javascript')
    <script>

        let vm = new Vue({
            el: '#checkoutController',
            data() {
                return {
                    password: '',
                    confirmPassword: '',
                    isPasswordSame: true
                }
            },

            created() {

            },

            methods: {
                checkPasswordMatch() {
                    if (this.password != this.confirmPassword) {
                        this.isPasswordSame = false;
                    } else {
                        this.isPasswordSame = true;
                    }
                }
            }
        });
    </script>
@stop
