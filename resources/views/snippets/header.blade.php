<!-- Main Header-->
<header class="main-header header-down">
    <div class="header-top">
        <div class="auto-container">
            <div class="inner clearfix">

                <div class="top-left clearfix">

                    <ul class="top-info clearfix">

                        <li><i class="icon far fa-map-marker-alt"></i> Restaurant St, Delicious City, London
                            9578, UK</li>
                        <li><i class="icon far fa-clock"></i> Daily : 8.00 am to 10.00 pm</li>
                    </ul>
                </div>
                <div class="top-right clearfix">
                    <ul class="top-info clearfix">
                        <li><a href="tel:+11234567890"><i class="icon far fa-phone"></i> +1 123 456 7890</a>
                        </li>
                        <li><a href="mailto:booking@restaurant.com"><i class="icon far fa-envelope"></i>
                                booking@restaurant.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <!-- Main Box -->
            <div class="main-box clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="index.html" title="Delici - Restaurants HTML Template"><img
                                src="assets/images/logo.png" alt="" title="Delici - Restaurants HTML Template"></a>
                    </div>
                </div>

                <div class="nav-box clearfix">
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <nav class="main-menu">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="index.html">Home</a>
                                </li>
                                <li class="dropdown has-mega-menu"><a href="menu-list.html">Menus</a>
                                    <ul>
                                        <li>
                                            <div class="mega-menu">
                                                <div class="menu-inner">
                                                    <div class="auto-container">
                                                        <div class="row clearfix">
                                                            <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                <div class="image"><a href="{{route('menu-one')}}"><img
                                                                            src="assets/images/resource/menu-image-1.jpg"
                                                                            alt=""></a></div>
                                                                <div class="title"><a href="{{route('menu-one')}}">Menu
                                                                        list
                                                                        1</a>
                                                                </div>
                                                            </div>
                                                            <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                <div class="image"><a href="{{route('menu-two')}}"><img
                                                                            src="assets/images/resource/menu-image-2.jpg"
                                                                            alt=""></a></div>
                                                                <div class="title"><a href="{{route('menu-two')}}">Menu
                                                                        list
                                                                        2</a>
                                                                </div>
                                                            </div>
                                                            <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                <div class="image"><a
                                                                        href="{{route('menu-three')}}"><img
                                                                            src="assets/images/resource/menu-image-3.jpg"
                                                                            alt=""></a></div>
                                                                <div class="title"><a
                                                                        href="{{route('menu-three')}}">Menu list
                                                                        3</a>
                                                                </div>
                                                            </div>
                                                            <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                <div class="image"><a href="{{route('menu-four')}}"><img
                                                                            src="assets/images/resource/menu-image-4.jpg"
                                                                            alt=""></a></div>
                                                                <div class="title"><a href="{{route('menu-four')}}">Menu
                                                                        list
                                                                        4</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('about-us')}}">About Us</a></li>
                                {{-- <li><a href="{{route('blog.index')}}">Blog</a></li> --}}

                                <li><a href="{{route('contact-us')}}">Contact</a></li>

                                <li><a href="{{route('reservations.history')}}">History</a></li>

                                <li><a href="{{route('favourites.index')}}">Favourites</a></li>

                            </ul>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                    <!--Nav Outer End-->


                    @if(Auth::check())
                    @if(Auth::user()->role_as==1)
                    <div class="links-box clearfix">
                        <div class="link link-btn">
                            <a href="{{route('admin.dashboard')}}" class="theme-btn btn-style-one clearfix">
                                <span class="btn-wrap">
                                    <span class="text-one">dashboard</span>
                                    <span class="text-two">dashboard</span>
                                </span>
                            </a>
                            {{-- <a href="reservation-opentable.html" class="theme-btn btn-style-one clearfix">
                                <span class="btn-wrap">
                                    <span class="text-one">login</span>
                                    <span class="text-two">login</span>
                                </span>
                            </a> --}}
                            {{-- <a href="reservation-opentable.html" class="theme-btn btn-style-one clearfix">
                                <span class="btn-wrap">
                                    <span class="text-one">find a table</span>
                                    <span class="text-two">find a table</span>
                                </span>
                            </a> --}}

                        </div>
                        <div class="link info-toggler">
                            <button class="info-btn">
                                <span class="hamburger">
                                    <span class="top-bun"></span>
                                    <span class="meat"></span>
                                    <span class="bottom-bun"></span>
                                </span>
                            </button>
                        </div>
                    </div>

                    @elseif(Auth::user()->role_as==0)
                    <div class="links-box clearfix">
                        <div class="link link-btn">
                            <a href="{{route('logout')}}" class="theme-btn btn-style-one clearfix"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="btn-wrap">
                                    <span class="text-one">Logout</span>
                                    <span class="text-two">Logout</span>
                                </span>
                            </a>
                            {{-- <a href="reservation-opentable.html" class="theme-btn btn-style-one clearfix">
                                <span class="btn-wrap">
                                    <span class="text-one">login</span>
                                    <span class="text-two">login</span>
                                </span>
                            </a> --}}
                            <a href="{{route('reservations.browse')}}" class="theme-btn btn-style-one clearfix">
                                <span class="btn-wrap">
                                    <span class="text-one">book a table</span>
                                    <span class="text-two">book a table</span>
                                </span>
                            </a>
                        </div>
                        <form action="{{route('logout')}}" method="post" style="display: none;" id="logout-form">
                            @csrf
                        </form>
                        <div class="link info-toggler">
                            <button class="info-btn">
                                <span class="hamburger">
                                    <span class="top-bun"></span>
                                    <span class="meat"></span>
                                    <span class="bottom-bun"></span>
                                </span>
                            </button>
                        </div>
                    </div>

                    @endif

                    @else
                    <div class="links-box clearfix">
                        <div class="link link-btn">
                            <a href="{{route('sign-up')}}" class="theme-btn btn-style-one clearfix">
                                <span class="btn-wrap">
                                    <span class="text-one">register</span>
                                    <span class="text-two">register</span>
                                </span>
                            </a>
                            <a href="{{route('login')}}" class="theme-btn btn-style-one clearfix">
                                <span class="btn-wrap">
                                    <span class="text-one">login</span>
                                    <span class="text-two">login</span>
                                </span>
                            </a>
                            {{-- <a href="reservation-opentable.html" class="theme-btn btn-style-one clearfix">
                                <span class="btn-wrap">
                                    <span class="text-one">find a table</span>
                                    <span class="text-two">find a table</span>
                                </span>
                            </a> --}}
                        </div>
                        <div class="link info-toggler">
                            <button class="info-btn">
                                <span class="hamburger">
                                    <span class="top-bun"></span>
                                    <span class="meat"></span>
                                    <span class="bottom-bun"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    @endif

                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                        <button class="hidden-bar-opener">
                            <span class="hamburger">
                                <span class="top-bun"></span>
                                <span class="meat"></span>
                                <span class="bottom-bun"></span>
                            </span>
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</header>
<!--End Main Header -->