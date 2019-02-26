<div class="card">
    <div class="card-body">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {!! session('message') !!}
                <a href="#" class="close" data-dismiss="alert"><i uk-icon="icon: close"></i></a>
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger">
                {!! session('error') !!}
                <a href="#" class="close" data-dismiss="alert"><i uk-icon="icon: close"></i></a>
            </div>
        @endif

        @if ($checkout && !auth()->check())
            <div class="alert alert-info">
                <i class="sl sl-icon-info"></i> <b>Quick note: </b>To proceed with your order, kindly login or create an account. Please, choose a method below to continue....<i>it takes only few seconds </i> :)
            </div>
        @elseif(!$checkout && !auth()->check())
            <div class="alert alert-info">
                <i class="sl sl-icon-info"></i> <b>Quick note: </b>Please, choose a method below to login or register....<i>it takes only few seconds </i> :)
            </div>
        @endif

        @if (!auth()->check())
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="button margin-bottom-20 margin-top-10 button-facebook border"><i class="fa fa-facebook-official"></i> Facebook</button>
                        <button class="button margin-bottom-20 button-google button-default text-danger"><i class="fa fa-google"></i> Google</button>
                        {{--<button class="button" type="button" data-toggle="collapse" data-target="#withEmail" aria-expanded="false" aria-controls="withEmail">
                            <i class="sl sl-icon-envolope"></i> Email
                        </button>--}}
                    </div>
                </div>
        @endif

        {{--End buttons--}}
        <div class="@if(!auth()->check()) collaps @endif checkout-collapse" id="withEmail">
            <div class="clearfix margin-top-30"></div>
            <ul uk-accordion="collapsible: true">
                @if (!auth()->check())
                    <li id="lg" class="@if(!$checkout && $type == 'login') uk-open @elseif(!$checkout && $type == '') uk-open @else uk-open @endif">
                        <a class="uk-accordion-title text-uppercase font-weight-light" href="#">I have an account</a>
                        <div class="uk-accordion-content">
                            <div class="uk-panel well uk-placeholder" style="background-color: #f7f3f3;">
                                <form action="{{ route('login.authenticate') }}" method="post" id="loginForm">
                                    @csrf
                                    <div class="row with-forms">
                                        <div class="col-md-6">
                                            <div class="text-input">
                                                <h5>Email Address</h5>
                                                <input class="search-field" type="email" value="" required name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-input">
                                                <h5>Password</h5>
                                                <input class="search-field" type="password" value="" name="password" placeholder="Password" required>
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
                @endif
                <li id="rg" class="@if(auth()->check() || (!auth()->check() && !$checkout && $type =='register')) uk-open @endif">
                    <a class="uk-accordion-title text-uppercase font-weight-light" href="#">
                        @if(auth()->check())
                            Account details
                        @else
                            I don't have an account
                        @endif
                    </a>
                    <div class="uk-accordion-content">
                        <div class="uk-panel uk-placeholder" style="background: #f7f3f3;">
                            @if(auth()->check())
                                @include('accounts.is-loggedin', ['user' => auth()->user()])
                            @else
                                @include('accounts.not-loggedin')
                            @endif
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
