<header id="header-container">

    <!-- Topbar -->
    <div id="top-bar">
        <div class="container">

            <!-- Left Side Content -->
            <div class="left-side">

                <!-- Top bar -->
                <ul class="top-bar-menu">
                    <li><i class="fa fa-phone"></i> (123) 123-456 </li>
                    <li><i class="fa fa-envelope"></i>
                        <a href="#">
                            <span class="__cf_email__" data-cfemail="1f707979767c7a5f7a677e726f737a317c7072">info@company.com</span>
                        </a>
                    </li>
                    @if (auth()->check() && auth()->user()->hasRole('admin'))
                        <li>
                            <a href="{{ url('admin') }}" class="btn btn-sm btn-danger text-white">Dashboard</a>
                        </li>
                    @endif

                </ul>

            </div>
            <!-- Left Side Content / End -->


            <!-- Left Side Content -->
            <div class="right-side">

                <!-- Social Icons -->
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                    <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
                </ul>

            </div>
            <!-- Left Side Content / End -->

        </div>
    </div>
    <div class="clearfix"></div>
    <!-- Topbar / End -->


    <!-- Header -->
    <div id="header" class="byarent-header">
        <div class="container">

            <!-- Left Side Content -->
            <div class="left-side">

                <!-- Logo -->
                <div id="logo">
                    <a href="{{ route('home.index') }}">
                        <img src="{{ asset('vendor/template/images/logo.png') }}" alt="{{ setting('admin.title') }}">
                    </a>
                </div>


                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                    </button>
                </div>


                <!-- Main Navigation -->
                <nav id="navigation" class="style-1">
                    <ul id="responsive">
                        <li>
                            <a class="@if(url()->current() === route('home.index')) current @endif" href="/">Home</a>
                        </li>
                        <li>
                            <a class="@if(url()->current() === route('houses.index', 'rent')) current @endif" href="{{ route('houses.index', 'rent') }}">For rent</a>
                        </li>
                        <li>
                            <a class="@if(url()->current() === route('houses.index', 'sale')) current @endif" href="{{ route('houses.index', 'sale') }}">For sale</a>
                        </li>
                        <li>
                            <a class="" href="/contact">Contact</a>
                        </li>
                        <li>
                            <a class="" href="/favorite">Favorite</a>
                        </li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->

            </div>
            <!-- Left Side Content / End -->

            <!-- Right Side Content / End -->
            <div class="right-side dropdown @if(auth()->check()) loggedin @endif">
                <!-- Header Widget -->
                <div class="header-widget">
                    {{--<a href="login-register.html" class="sign-in"><i class="fa fa-user"></i> Log In / Register</a>--}}
                    {{--<a href="submit-property.html" class="account widget-icon" id="accountDropdwn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i uk-icon="icon: user; ratio: 2"></i></a>--}}

                    <div class="user-menu" style="@if(!auth()->check()) margin-top: -20px; @endif">
                        <div class="user-name">
                            @if (auth()->check())
                                <span><img src="{{ Voyager::image(auth()->user()->avatar) }}" alt=""></span> <i style="font-style: normal;" class="hidden-xs">Hi, {{ auth()->user()->firstName }}</i>
                            @else
                                <span class="account widget-icon d-inline-block"><i uk-icon="icon: user; ratio: 2"></i></span>
                            @endif
                        </div>
                        <ul>
                            @if (auth()->check())
                                <li><a href="{{ route('account.index') }}"><i class="sl sl-icon-user"></i> My Profile</a></li>
                                <li><a href="#!"><i class="sl sl-icon-star"></i> Favorites</a></li>
                                <li><a href="#!"><i class="sl sl-icon-docs"></i> My Orders</a></li>
                                <li>
                                    <form action="{{ route('logout.index') }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn-link btn primary-color"><i class="sl sl-icon-power"></i> Log Out</button>
                                    </form>
                                </li>
                            @else
                                <li><a href="{{ route('account.index', 'login') }}#lg"><i class="sl sl-icon-login"></i> Login</a></li>
                                <li><a href="{{ route('account.index', 'register') }}#rg"><i class="sl sl-icon-plus"></i> Register</a></li>
                            @endif
                        </ul>
                    </div>

                    <div class="d-inline cart-drowpdown-wrapper">
                        <a href="" class="cart widget-icon prevented-link" aria-expanded="false">
                            <i uk-icon="icon: cart; ratio: 2"></i>
                            <span class="cart-counter badge @if(!ByarentCart::hasItems()) hidden @endif" id="cart-dropdown-counter">{{ ByarentCart::count() }}</span>
                        </a>
                        @include('components.dropdown-cart', ['items' => ByarentCart::items()])
                    </div>
                    <div class="dropdown-menu dropleft" aria-labelledby="accountDropdwn">
                        <a class="dropdown-item" href="#"><i uk-icon="icon: sign-in" class="margin-right-10"></i> Login</a>
                        <a class="dropdown-item" href="#"><i uk-icon="icon: plus" class="margin-right-10"></i> Register</a>
                        <form action="">
                            <button type="submit" class="dropdown-item btn-link account-dropdown-item-signout text-uppercase">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->

        </div>
    </div>
    <!-- Header / End -->

</header>
<div class="clearfix"></div>
