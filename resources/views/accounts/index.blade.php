@extends('layouts.master')

@section('title', 'User Account')

@section('content')
    <section class="checkout-wrapper padding-bottom-50 padding-top-50" id="accountController">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-7 col-sm-12 padding-bottom-20">
                    <h3>
                        <i class="sl sl-icon-user"></i>
                        @if(auth()->check())
                            Welcome, <b class="primary-color">{{ auth()->user()->name }}</b>
                        @else
                            Account
                        @endif
                    </h3>

                    @include('accounts.holder')

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
            $('#loginForm').validate();
        })
    </script>
@stop
