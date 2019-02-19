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
    <div id="header">
        <div class="container">

            <!-- Left Side Content -->
            <div class="left-side">

                <!-- Logo -->
                <div id="logo">
                    <a href="index-2.html">
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
                        <li><a class="current" href="/">Home</a></li>
                        <li><a class="" href="{{ route('houses.index', 'rent') }}">For rent</a></li>
                        <li><a class="" href="{{ route('houses.index', 'sale') }}">For sale</a></li>
                        <li><a class="" href="/contact">Contact</a></li>
                        <li><a class="" href="/favorite">Favorite</a></li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->

            </div>
            <!-- Left Side Content / End -->

            <!-- Right Side Content / End -->
            <div class="right-side dropdown">
                <!-- Header Widget -->
                <div class="header-widget">
                    {{--<a href="login-register.html" class="sign-in"><i class="fa fa-user"></i> Log In / Register</a>--}}
                    {{--<a href="submit-property.html" class="account widget-icon" id="accountDropdwn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i uk-icon="icon: user; ratio: 2"></i></a>--}}

                    <div class="user-menu" style="@if(!auth()->check()) margin-top: -20px; @endif">
                        <div class="user-name">
                            @if (auth()->check())
                                <span><img src="{{ asset('vendor/template/images/agent-03.jpg') }}" alt=""></span> Hi, Josiah!
                            @else
                                <span class="account widget-icon"><i uk-icon="icon: user; ratio: 2"></i></span>
                            @endif
                        </div>
                        <ul>
                            @if (auth()->check())
                                <li><a href="my-profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
                                <li><a href="index-2.html"><i class="sl sl-icon-power"></i> Log Out</a></li>
                                <li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Favorites</a></li>
                                <li><a href="my-properties.html"><i class="sl sl-icon-docs"></i> My Orders</a></li>
                            @else
                                <li><a href="my-profile.html"><i class="sl sl-icon-login"></i> Login</a></li>
                                <li><a href="my-profile.html"><i class="sl sl-icon-plus"></i> Register</a></li>
                            @endif
                        </ul>
                    </div>

                    <div class="d-inline cart-drowpdown-wrapper">
                        <a href="" class="cart widget-icon prevented-link" aria-expanded="false">
                            <i uk-icon="icon: cart; ratio: 2"></i>
                            <span class="cart-counter badge" id="cart-counter">2</span>
                        </a>
                        {{--TODO: Feed cart dropdown with data--}}
                        @include('components.dropdown-cart', ['data' => []])
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
