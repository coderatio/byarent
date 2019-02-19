@extends('layouts.master')

@section('title', 'Checkout')

@section('wrapper-style', 'backgroun: transparent')

@section('content')

    <section class="checkout-wrapper padding-bottom-50 padding-top-50" id="checkoutController">
        <div class="container">
            <div class="row">
                <div class="col-md-7 padding-bottom-20">
                    <h2><i uk-icon="icon: user"></i> Account</h2>
                    <div class="card">
                        <div class="card-body">
                            <div class="alert alert-info">
                                <i class="sl sl-icon-info"></i> <b>Quick note: </b>To proceed with your order, kindly login or create an account. Please, choose a method below to continue....<i>it takes only few seconds </i> :)
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button class="button margin-bottom-20 margin-top-10 button-facebook border"><i class="sl sl-icon-social-facebook"></i> Facebook</button>
                                    <button class="button margin-bottom-20 button-google button-default"><i class="im im-icon-Google-Plus"></i> Google</button>
                                    <button class="button" type="button" data-toggle="collapse" data-target="#withEmail" aria-expanded="false" aria-controls="withEmail">
                                        <i class="sl sl-icon-envolope"></i> Email
                                    </button>
                                </div>
                            </div>
                            {{--End buttons--}}
                            <div class="collapse checkout-collapse" id="withEmail">
                                <div class="clearfix margin-top-30"></div>
                                <ul uk-accordion="collapsible: false">
                                    <li class="uk-open">
                                        <a class="uk-accordion-title text-uppercase font-weight-light" href="#">I have an account</a>
                                        <div class="uk-accordion-content">
                                            <div class="uk-panel well uk-placeholder" style="background-color: #f7f3f3;">
                                                <form action="" method="post">
                                                    @csrf
                                                    <div class="row with-forms">
                                                        <div class="col-md-6">
                                                            <div class="text-input">
                                                                <h5>Email Address</h5>
                                                                <input class="search-field" type="email" value="" name="email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="text-input">
                                                                <h5>Password</h5>
                                                                <input class="search-field" type="password" value="" name="password" placeholder="Password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row margin-top-10">
                                                        <div class="col-md-12 text-right">
                                                            <button type="submit" class="button">Login <i uk-icon="icon: arrow-right"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title text-uppercase font-weight-light" href="#">I don't have an account</a>
                                        <div class="uk-accordion-content">
                                            <div class="uk-panel uk-placeholder" style="background: #f7f3f3;">
                                                <form action="" method="post">
                                                    @csrf
                                                    <div class="row with-forms">
                                                        <div class="col-md-6">
                                                            <h5>First Name</h5>
                                                            <div class="text-input">
                                                                <input type="text" placeholder="Josiah" name="fname">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5>Last Name</h5>
                                                            <div class="text-input">
                                                                <input type="text" placeholder="Yahaya" name="lname">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row with-forms">
                                                        <div class="col-md-12">
                                                            <h5>Email <i class="tip" data-tip-content="Please, enter a valid email as this will be used for all your transactions."></i></h5>
                                                            <input class="search-field" type="email" value="" name="email" placeholder="e.g me@email.com">
                                                        </div>

                                                        <div class="col-md-6">
                                                            <h5>Password <i class="tip" data-tip-content="Your password must be atleast 6 characters."></i></h5>
                                                            <input class="search-field" type="password" v-model="password" value="" name="password" placeholder="6 characters password">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5>Confirm Password <i class="tip" data-tip-content="Enter the same password as entered on the password field."></i></h5>
                                                            <input class="search-field" type="password" value="" name="confirm-password" v-model="confirmPassword" v-on:input="checkPasswordMatch()" placeholder="Enter password again">
                                                            <span class="help-block text-danger" v-show="!isPasswordSame">Enter same password please.</span>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-center margin-top-20 margin-bottom-30">
                                                        <div class="col-md-6 text-center">
                                                            <button type="submit" class="button">
                                                                Create My Account
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-md-5">
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
