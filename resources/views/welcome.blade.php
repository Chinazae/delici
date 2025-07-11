@extends('layouts.app')
@section('content')

<!--Menu Backdrop-->
<div class="menu-backdrop"></div>

<!-- Hidden Navigation Bar -->
<section class="hidden-bar">
    <!-- Hidden Bar Wrapper -->
    <div class="inner-box">
        <div class="cross-icon hidden-bar-closer"><span class="far fa-close"></span></div>
        <div class="logo-box"><a href="index.html" title="Delici - Restaurants HTML Template"><img
                    src="assets/images/resource/sidebar-logo.png" alt="" title="Delici - Restaurants HTML Template"></a>
        </div>

        <!-- .Side-menu -->
        <div class="side-menu">
            <ul class="navigation clearfix">
                <li class="current"><a href="index.html">Home</a>
                </li>
                <li class="dropdown"><a href="menu-list.html">Menus</a>
                    <ul>
                        <li><a href="menu-list-1.html">Menu List 1</a></li>
                        <li><a href="menu-list-2.html">Menu List 2</a></li>
                        <li><a href="menu-list-3.html">Menu List 3</a></li>
                        <li><a href="menu-list-4.html">Menu List 4</a></li>
                    </ul>
                </li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="our-chef.html">Our chefs</a></li>
                <li class="dropdown"><a href="#">Pages</a>
                    <ul>
                        <li><a href="#">Dropdown Menu 1</a></li>
                        <li><a href="#">Dropdown Menu 2</a></li>
                        <li><a href="#">Dropdown Menu 3</a></li>
                        <li class="dropdown"><a href="#">Dropdown Menu 4</a>
                            <ul>
                                <li><a href="#">Dropdown Menu level 2</a></li>
                                <li><a href="#">Dropdown Menu level 2</a></li>
                                <li><a href="#">Dropdown Menu Level 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown Lorem 5</a></li>
                    </ul>
                </li>
                <li><a href="contact-us.html">Contact</a></li>
            </ul>
        </div><!-- /.Side-menu -->

        <h2>Visit Us</h2>
        <ul class="info">
            <li>Restaurant St, Delicious City, <br>London 9578, UK</li>
            <li>Open: 9.30 am - 2.30pm</li>
            <li><a href="mailto:booking@domainame.com">booking@domainame.com</a></li>
        </ul>
        <div class="separator"><span></span></div>
        <div class="booking-info">
            <div class="bk-title">Booking request</div>
            <div class="bk-no"><a href="tel:+88-123-123456">+88-123-123456</a></div>
        </div>

    </div><!-- / Hidden Bar Wrapper -->
</section>
<!-- / Hidden Bar -->

<!--Info Back Drop-->
<div class="info-back-drop"></div>

<!-- Hidden Bar -->
<section class="info-bar">
    <div class="inner-box">
        <div class="cross-icon"><span class="far fa-close"></span></div>
        <div class="logo-box"><a href="index.html" title="Delici - Restaurants HTML Template"><img
                    src="assets/images/resource/sidebar-logo.png" alt="" title="Delici - Restaurants HTML Template"></a>
        </div>
        <div class="image-box"><img src="assets/images/resource/sidebar-image.jpg" alt="" title=""></div>

        <h2>Visit Us</h2>
        <ul class="info">
            <li>Restaurant St, Delicious City, <br>London 9578, UK</li>
            <li>Open: 9.30 am - 2.30pm</li>
            <li><a href="mailto:booking@domainame.com">booking@domainame.com</a></li>
        </ul>
        <div class="separator"><span></span></div>
        <div class="booking-info">
            <div class="bk-title">Booking request</div>
            <div class="bk-no"><a href="tel:+88-123-123456">+88-123-123456</a></div>
        </div>
    </div>
</section>
<!--End Hidden Bar -->

<!-- Banner Section -->
<section class="banner-section">

    <div class="banner-container">
        <div class="banner-slider">
            <div class="swiper-wrapper">
                <!--Slide Item-->
                <div class="swiper-slide slide-item">
                    <div class="image-layer" style="background-image: url(assets/images/main-slider/slider-1.jpg);">
                    </div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="clearfix">
                                    <div class="inner">
                                        <div class="subtitle"><span>delightful experience</span></div>
                                        <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt=""
                                                title=""></div>
                                        <h1><span>Flavors Inspired by <br>the Seasons</span></h1>
                                        <div class="text">Come with family & feel the joy of mouthwatering food
                                        </div>
                                        <div class="links-box wow fadeInUp" data-wow-delay="0ms"
                                            data-wow-duration="1500ms">
                                            <div class="link">
                                                <a href="menu-list-1.html" class="theme-btn btn-style-two clearfix">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">view our menu</span>
                                                        <span class="text-two">view our menu</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Slide Item-->
                <div class="swiper-slide slide-item">
                    <div class="image-layer" style="background-image: url(assets/images/main-slider/slider-2.jpg);">
                    </div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="clearfix">
                                    <div class="inner">
                                        <div class="subtitle"><span>amazing & delicious</span></div>
                                        <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt=""
                                                title=""></div>
                                        <h1><span>Where every flavor <br>tells a story</span></h1>
                                        <div class="text">Come with family & feel the joy of mouthwatering food
                                        </div>
                                        <div class="links-box clearfix">
                                            <div class="link">
                                                <a href="menu-list-2.html" class="theme-btn btn-style-two clearfix">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">view our menu</span>
                                                        <span class="text-two">view our menu</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Slide Item-->
                <div class="swiper-slide slide-item">
                    <div class="image-layer" style="background-image: url(assets/images/main-slider/slider-3.jpg);">
                    </div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="clearfix">
                                    <div class="inner">
                                        <div class="subtitle"><span>Tradational & Hygine</span></div>
                                        <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt=""
                                                title=""></div>
                                        <h1><span>For the love of <br>delicious food</span></h1>
                                        <div class="text">Come with family & feel the joy of mouthwatering food
                                        </div>
                                        <div class="links-box clearfix">
                                            <div class="link">
                                                <a href="menu-list-3.html" class="theme-btn btn-style-two clearfix">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">view our menu</span>
                                                        <span class="text-two">view our menu</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"><span class="fal fa-angle-left"></span></div>
            <div class="swiper-button-next"><span class="fal fa-angle-right"></span></div>
        </div>
    </div>

    <div class="book-btn"><a href="reservation-opentable.html" class="theme-btn"><span class="icon"><img
                    src="assets/images/resource/book-icon-1.png" alt="" title=""></span><span class="txt">book a
                table</span></a></div>
</section>
<!--End Banner Section -->

<!--We Offer Section-->
<section class="we-offer-section">
    <div class="left-bot-bg"><img src="assets/images/background/bg-1.png" alt="" title=""></div>
    <div class="right-top-bg"><img src="assets/images/background/bg-2.png" alt="" title=""></div>
    <div class="auto-container">
        <div class="title-box centered">
            <div class="subtitle"><span>Flavors for royalty</span></div>
            <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt="" title=""></div>
            <h2>We Offer Top Notch</h2>
            <div class="text">Experience amazing food that will make you come back for more</div>
        </div>
        <div class="row justify-content-center clearfix">
            <!--Block-->
            <div class="offer-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="image"><a href="menu-list-1.html"><img src="assets/images/resource/offer-image-1.jpg"
                                alt=""></a></div>
                    <h3><a href="menu-list-1.html">Breakfast</a></h3>
                    <div class="more-link"><a href="menu-list-1.html">view menu</a></div>
                </div>
            </div>

            <!--Block-->
            <div class="offer-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <div class="image"><a href="menu-list-2.html"><img src="assets/images/resource/offer-image-2.jpg"
                                alt=""></a></div>
                    <h3><a href="menu-list-2.html">Appetizers</a></h3>
                    <div class="more-link"><a href="menu-list-2.html">view menu</a></div>
                </div>
            </div>

            <!--Block-->
            <div class="offer-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                    <div class="image"><a href="menu-list-3.html"><img src="assets/images/resource/offer-image-3.jpg"
                                alt=""></a></div>
                    <h3><a href="menu-list-3.html">Drinks</a></h3>
                    <div class="more-link"><a href="menu-list-3.html">view menu</a></div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--Story Section-->
<section class="story-section">
    <div class="left-bg"><img src="assets/images/background/bg-3.png" alt="" title=""></div>
    <div class="auto-container">
        <div class="row clearfix">
            <!--Col-->
            <div class="text-col col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="title-box centered">
                        <div class="subtitle"><span>Our story</span></div>
                        <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt="" title="">
                        </div>
                        <h2>Every Flavor Tells a Story</h2>
                        <div class="text">Flavor and savory taste. Delici is one of the best in the industry. Reserve,
                            enjoy and relax</div>
                    </div>
                    <div class="booking-info">
                        <div class="bk-title">Book Through Call</div>
                        <div class="bk-no"><a href="tel:+80-400-123456">+80 (400) 123 4567</a></div>

                        <div class="link-box">
                            <a href="about.html" class="theme-btn btn-style-two clearfix">
                                <span class="btn-wrap">
                                    <span class="text-one">Read More</span>
                                    <span class="text-two">Read More</span>
                                </span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <!--Col-->
            <div class="image-col col-xl-7 col-lg-7 col-md-12 col-sm-12">
                <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="round-stamp"><img src="assets/images/resource/badge-1.png" alt=""></div>
                    <div class="assets/images parallax-scene-1">
                        <div class="image" data-depth="0.15"><img src="assets/images/resource/image-1.jpg" alt="">
                        </div>
                        <div class="image" data-depth="0.30"><img src="assets/images/resource/image-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--Special Dish Section-->
<section class="special-dish">
    <div class="bottom-image"><img src="assets/images/resource/image-3.png" alt="" title=""></div>
    <div class="outer-container">
        <div class="row clearfix">
            <!--Col-->
            <div class="image-col col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="image-layer" style="background-image: url(assets/images/background/image-1.jpg);">
                    </div>
                    <div class="image"><img src="assets/images/background/image-1.jpg" alt=""></div>
                </div>
            </div>
            <!--Col-->
            <div class="content-col col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="right-bg"><img src="assets/images/background/bg-4.png" alt="" title=""></div>
                <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="title-box">
                        <span class="badge-icon"><img src="assets/images/resource/badge-2.png" alt="" title=""></span>
                        <div class="subtitle"><span>Special dish</span></div>
                        <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt="" title="">
                        </div>
                        <h2>Lobster Tortellini</h2>
                        <div class="text">Amazing food from the finest high-skilled chefs</div>
                    </div>
                    <div class="price"><span class="old">N40,000</span> <span class="new">N20,000</span></div>
                    <div class="link-box">
                        <a href="menu-list-1.html" class="theme-btn btn-style-two clearfix">
                            <span class="btn-wrap">
                                <span class="text-one">view all menu</span>
                                <span class="text-two">view all menu</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--Menu Section-->
<section class="menu-section">
    <div class="left-bg"><img src="assets/images/background/bg-5.png" alt="" title=""></div>
    <div class="right-bg"><img src="assets/images/background/bg-6.png" alt="" title=""></div>
    <div class="auto-container">
        <div class="title-box centered">
            <div class="subtitle"><span>Special selection</span></div>
            <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt="" title=""></div>
            <h2>Delicious Menu</h2>
        </div>

        <div class="tabs-box menu-tabs">
            <div class="buttons">
                <ul class="tab-buttons clearfix">
                    <li class="tab-btn active-btn" data-tab="#tab-1"><span>MORNING</span></li>
                    <li class="tab-btn" data-tab="#tab-2"><span>WEEKDAY LUNCH</span></li>
                    <li class="tab-btn" data-tab="#tab-3"><span>DINNER</span></li>
                    <li class="tab-btn" data-tab="#tab-4"><span>WINES</span></li>
                </ul>
            </div>
            <div class="tabs-content">
                <!--Tab-->
                <div class="tab active-tab" id="tab-1">
                    <div class="row clearfix">
                        <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                            <div class="inner">
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-5.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Greek Salad</a></h5>
                                            </div>
                                            <div class="price"><span>$25.50</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Tomatoes, green bell pepper, sliced
                                                cucumber onion, olives, and feta cheese.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-6.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Lasagne <span class="s-info">SEASONAL</span></a>
                                                </h5>
                                            </div>
                                            <div class="price"><span>$40.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                tomato sauce, seasonings and spices</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-7.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Butternut Pumpkin</a></h5>
                                            </div>
                                            <div class="price"><span>N10,000</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Tasty and finely prepared</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                            <div class="inner">
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-8.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Tokusen Wagyu <span class="s-info">NEW</span></a></h5>
                                            </div>
                                            <div class="price"><span>$39.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                tomato sauce, seasonings and spices.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-9.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Olivas Rellenas</a></h5>
                                            </div>
                                            <div class="price"><span>$25.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Avocados with crab meat, red onion,
                                                crab salad stuffed red bell pepper and green bell pepper.</a>
                                        </div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-10.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Opu Fish</a></h5>
                                            </div>
                                            <div class="price"><span>$49.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                tomato sauce, seasonings and spices</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Tab-->
                <div class="tab" id="tab-2">
                    <div class="row clearfix">
                        <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                            <div class="inner">
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-5.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Greek Salad</a></h5>
                                            </div>
                                            <div class="price"><span>$25.50</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Tomatoes, green bell pepper, sliced
                                                cucumber onion, olives, and feta cheese.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-6.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Lasagne <span class="s-info">SEASONAL</span></a>
                                                </h5>
                                            </div>
                                            <div class="price"><span>$40.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                tomato sauce, seasonings and spices</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-7.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Butternut Pumpkin</a></h5>
                                            </div>
                                            <div class="price"><span>N10,000</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Tasty and finely prepared.</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                            <div class="inner">
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-8.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Tokusen Wagyu <span class="s-info">NEW</span></a></h5>
                                            </div>
                                            <div class="price"><span>$39.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                tomato sauce, seasonings and spices.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-9.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Olivas Rellenas</a></h5>
                                            </div>
                                            <div class="price"><span>$25.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Avocados with crab meat, red onion,
                                                crab salad stuffed red bell pepper and green bell pepper.</a>
                                        </div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-10.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Opu Fish</a></h5>
                                            </div>
                                            <div class="price"><span>$49.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                tomato sauce, seasonings and spices</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Tab-->
                <div class="tab" id="tab-3">
                    <div class="row clearfix">
                        <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                            <div class="inner">
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-5.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Greek Salad</a></h5>
                                            </div>
                                            <div class="price"><span>$25.50</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Tomatoes, green bell pepper, sliced
                                                cucumber onion, olives, and feta cheese.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-6.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Lasagne <span class="s-info">SEASONAL</span></a>
                                                </h5>
                                            </div>
                                            <div class="price"><span>$40.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                tomato sauce, seasonings and spices</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-7.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Butternut Pumpkin</a></h5>
                                            </div>
                                            <div class="price"><span>$10.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Typesetting industry lorem Lorem
                                                Ipsum is simply dummy text of the priand.</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                            <div class="inner">
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-8.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Tokusen Wagyu <span class="s-info">NEW</span></a></h5>
                                            </div>
                                            <div class="price"><span>$39.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                tomato sauce, seasonings and spices.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-9.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Olivas Rellenas</a></h5>
                                            </div>
                                            <div class="price"><span>$25.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Avocados with crab meat, red onion,
                                                crab salad stuffed red bell pepper and green bell pepper.</a>
                                        </div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-10.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Opu Fish</a></h5>
                                            </div>
                                            <div class="price"><span>$49.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                tomato sauce, seasonings and spices</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Tab-->
                <div class="tab" id="tab-4">
                    <div class="row clearfix">
                        <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                            <div class="inner">
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-5.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Greek Salad</a></h5>
                                            </div>
                                            <div class="price"><span>$25.50</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Tomatoes, green bell pepper, sliced
                                                cucumber onion, olives, and feta cheese.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-6.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Lasagne <span class="s-info">SEASONAL</span></a>
                                                </h5>
                                            </div>
                                            <div class="price"><span>$40.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                tomato sauce, seasonings and spices</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-7.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Butternut Pumpkin</a></h5>
                                            </div>
                                            <div class="price"><span>$10.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Typesetting industry lorem Lorem
                                                Ipsum is simply dummy text of the priand.</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                            <div class="inner">
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-8.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Tokusen Wagyu <span class="s-info">NEW</span></a></h5>
                                            </div>
                                            <div class="price"><span>$39.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                tomato sauce, seasonings and spices.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-9.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Olivas Rellenas</a></h5>
                                            </div>
                                            <div class="price"><span>$25.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Avocados with crab meat, red onion,
                                                crab salad stuffed red bell pepper and green bell pepper.
                                                Cucumber</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img
                                                    src="assets/images/resource/menu-image-10.png" alt=""></a>
                                        </div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Opu Fish</a></h5>
                                            </div>
                                            <div class="price"><span>$49.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                tomato sauce, seasonings and spices</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="open-timing">
            <div class="hours">During winter daily from <span class="theme_color">7:00 pm</span> to <span
                    class="theme_color">9:00 pm</span></div>
            <div class="link-box">
                <a href="menu-list-1.html" class="theme-btn btn-style-two clearfix">
                    <span class="btn-wrap">
                        <span class="text-one">view all menu</span>
                        <span class="text-two">view all menu</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<!--Special Offer Section-->
<section class="special-offer">
    <div class="outer-container">
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle"><span>special offer</span></div>
                <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt="" title=""></div>
                <h2>Best Specialties</h2>
            </div>
            <div class="dish-gallery-slider owl-theme owl-carousel">
                <!--Slide Item-->
                <div class="offer-block-two">
                    <div class="inner-box">
                        <div class="image"><a href="#"><img src="assets/images/resource/menu-image-11.jpg" alt=""></a>
                        </div>
                        <h4><a href="menu-list-1.html">Greek Salad</a></h4>
                        <div class="text desc">Avocados with crab meat, red onion, crab salad red bell pepper...
                        </div>
                        <div class="price">$39.00</div>
                    </div>
                </div>

                <!--Slide Item-->
                <div class="offer-block-two margin-top">
                    <div class="inner-box">
                        <div class="image"><a href="#"><img src="assets/images/resource/menu-image-12.jpg" alt=""></a>
                        </div>
                        <h4><a href="menu-list-2.html">Tokusen Wagyu</a></h4>
                        <div class="text desc">Tomatoes, green bell pepper, sliced cucumber onion, olives...
                        </div>
                        <div class="price">$45.00</div>
                    </div>
                </div>

                <!--Slide Item-->
                <div class="offer-block-two">
                    <div class="inner-box">
                        <div class="image"><a href="#"><img src="assets/images/resource/menu-image-13.jpg" alt=""></a>
                        </div>
                        <h4><a href="menu-list-3.html">Butternut Pumpkin</a></h4>
                        <div class="text desc">Avocados with crab meat, red onion, crab salad stuffed bell
                            pepper...</div>
                        <div class="price">$15.00</div>
                    </div>
                </div>

                <!--Slide Item-->
                <div class="offer-block-two margin-top">
                    <div class="inner-box">
                        <div class="image"><a href="#"><img src="assets/images/resource/menu-image-14.jpg" alt=""></a>
                        </div>
                        <h4><a href="menu-list-4.html">Opu Fish</a></h4>
                        <div class="text desc">Vegetables, cheeses, ground meats, tomato sauce, seasonings...
                        </div>
                        <div class="price">$12.00</div>
                    </div>
                </div>

                <!--Slide Item-->
                <div class="offer-block-two">
                    <div class="inner-box">
                        <div class="image"><a href="#"><img src="assets/images/resource/menu-image-11.jpg" alt=""></a>
                        </div>
                        <h4><a href="menu-list-1.html">Greek Salad</a></h4>
                        <div class="text desc">Avocados with crab meat, red onion, crab salad red bell pepper...
                        </div>
                        <div class="price">$39.00</div>
                    </div>
                </div>

                <!--Slide Item-->
                <div class="offer-block-two margin-top">
                    <div class="inner-box">
                        <div class="image"><a href="#"><img src="assets/images/resource/menu-image-12.jpg" alt=""></a>
                        </div>
                        <h4><a href="menu-list-2.html">Tokusen Wagyu</a></h4>
                        <div class="text desc">Tomatoes, green bell pepper, sliced cucumber onion, olives...
                        </div>
                        <div class="price">$45.00</div>
                    </div>
                </div>

                <!--Slide Item-->
                <div class="offer-block-two">
                    <div class="inner-box">
                        <div class="image"><a href="#"><img src="assets/images/resource/menu-image-13.jpg" alt=""></a>
                        </div>
                        <h4><a href="menu-list-3.html">Butternut Pumpkin</a></h4>
                        <div class="text desc">Avocados with crab meat, red onion, crab salad stuffed bell
                            pepper...</div>
                        <div class="price">$15.00</div>
                    </div>
                </div>

                <!--Slide Item-->
                <div class="offer-block-two margin-top">
                    <div class="inner-box">
                        <div class="image"><a href="#"><img src="assets/images/resource/menu-image-14.jpg" alt=""></a>
                        </div>
                        <h4><a href="menu-list-4.html">Opu Fish</a></h4>
                        <div class="text desc">Vegetables, cheeses, ground meats, tomato sauce, seasonings...
                        </div>
                        <div class="price">$12.00</div>
                    </div>
                </div>

            </div>

            <div class="lower-link-box text-center">
                <a href="menu-list-1.html" class="theme-btn btn-style-two clearfix">
                    <span class="btn-wrap">
                        <span class="text-one">view all menu</span>
                        <span class="text-two">view all menu</span>
                    </span>
                </a>
            </div>

        </div>
    </div>
</section>

<!--Testimonials Section-->
<section class="testimonials-section">
    <div class="image-layer" style="background-image: url(assets/images/background/image-2.jpg);"></div>
    <div class="auto-container">
        <div class="carousel-box">
            <div class="testi-top owl-theme owl-carousel">
                <div class="slide-item">
                    <div class="slide-content">
                        <div class="quotes">”</div>
                        <div class="text quote-text">I wanted to thank you for inviting me down for that amazing
                            dinner the other night. The food was extraordinary.</div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="slide-content">
                        <div class="quotes">”</div>
                        <div class="text quote-text">I wanted to thank you for inviting me down for that amazing
                            dinner the other night. The food was extraordinary.</div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="slide-content">
                        <div class="quotes">”</div>
                        <div class="text quote-text">I wanted to thank you for inviting me down for that amazing
                            dinner the other night. The food was extraordinary.</div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="slide-content">
                        <div class="quotes">”</div>
                        <div class="text quote-text">I wanted to thank you for inviting me down for that amazing
                            dinner the other night. The food was extraordinary.</div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="slide-content">
                        <div class="quotes">”</div>
                        <div class="text quote-text">I wanted to thank you for inviting me down for that amazing
                            dinner the other night. The food was extraordinary.</div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="slide-content">
                        <div class="quotes">”</div>
                        <div class="text quote-text">I wanted to thank you for inviting me down for that amazing
                            dinner the other night. The food was extraordinary.</div>
                    </div>
                </div>

            </div>
            <div class="separator"><span></span><span></span><span></span></div>
            <div class="thumbs-carousel-box">
                <div class="testi-thumbs owl-theme owl-carousel">
                    <div class="slide-item">
                        <div class="image"><img src="assets/images/resource/author-thumb-1.jpg" alt=""></div>
                        <div class="auth-title">Sam Jhonson</div>
                    </div>
                    <div class="slide-item">
                        <div class="image"><img src="assets/images/resource/author-thumb-2.jpg" alt=""></div>
                        <div class="auth-title">Ian Botham</div>
                    </div>
                    <div class="slide-item">
                        <div class="image"><img src="assets/images/resource/author-thumb-3.jpg" alt=""></div>
                        <div class="auth-title">Dan Bitson</div>
                    </div>
                    <div class="slide-item">
                        <div class="image"><img src="assets/images/resource/author-thumb-1.jpg" alt=""></div>
                        <div class="auth-title">Sam Jhonson</div>
                    </div>
                    <div class="slide-item">
                        <div class="image"><img src="assets/images/resource/author-thumb-2.jpg" alt=""></div>
                        <div class="auth-title">Ian Botham</div>
                    </div>
                    <div class="slide-item">
                        <div class="image"><img src="assets/images/resource/author-thumb-3.jpg" alt=""></div>
                        <div class="auth-title">Dan Bitson</div>
                    </div>
                </div>
            </div>
            {{-- <a href="{{route('reviews.public')}}" class="btn fw-bold" style="
    background-color: #D4AF37;
    color: white;
    border: none;
    padding: 12px 70px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s;
" onmouseover="this.style.backgroundColor='#B8860B'" onmouseout="this.style.backgroundColor='#D4AF37'">
                Reviews
            </a> --}}

            <div class="links-box clearfix">
                <div class="link">
                    <a href="{{route('reviews.public')}}" class="theme-btn btn-style-two clearfix">
                        <span class="btn-wrap">
                            <span class="text-one">reviews</span>
                            <span class="text-two">reviews</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!--Reservation Section-->
<section class="reserve-section">
    <div class="auto-container">
        <div class="outer-box">
            <div class="row clearfix">
                <div class="reserv-col col-lg-8 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="title">
                            <h2>Online Reservation</h2>
                            <div class="request-info">Booking request <a href="#">+88-123-123456</a> or fill out
                                the order form</div>
                        </div>
                        <div class="default-form reservation-form">
                            <form method="post"
                                action="https://kalanidhithemes.com/live-preview/landing-page/delici/all-demo/Delici-Defoult/index.html">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="fieldname" value="" placeholder="Your Name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="fieldname" value="" placeholder="Phone Number"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <span class="alt-icon far fa-user"></span>
                                            <select class="l-icon">
                                                <option>1 Person</option>
                                                <option>2 Person</option>
                                                <option>3 Person</option>
                                                <option>4 Person</option>
                                                <option>5 Person</option>
                                                <option>6 Person</option>
                                                <option>7 Person</option>
                                            </select>
                                            <span class="arrow-icon far fa-angle-down"></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <span class="alt-icon far fa-calendar"></span>
                                            <input class="l-icon datepicker" type="text" name="fieldname" value=""
                                                placeholder="DD-MM-YYYY" required readonly>
                                            <span class="arrow-icon far fa-angle-down"></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <span class="alt-icon far fa-clock"></span>
                                            <select class="l-icon">
                                                <option>08 : 00 am</option>
                                                <option>09 : 00 am</option>
                                                <option>10 : 00 am</option>
                                                <option>11 : 00 am</option>
                                                <option>12 : 00 pm</option>
                                                <option>01 : 00 pm</option>
                                                <option>02 : 00 pm</option>
                                                <option>03 : 00 pm</option>
                                                <option>04 : 00 pm</option>
                                                <option>05 : 00 pm</option>
                                                <option>06 : 00 pm</option>
                                                <option>07 : 00 pm</option>
                                                <option>08 : 00 pm</option>
                                                <option>09 : 00 pm</option>
                                                <option>10 : 00 pm</option>
                                            </select>
                                            <span class="arrow-icon far fa-angle-down"></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <textarea name="fieldname" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">

                                            <button type="submit" class="theme-btn btn-style-one clearfix">
                                                <span class="btn-wrap">
                                                    <span class="text-one">book a table</span>
                                                    <span class="text-two">book a table</span>
                                                </span>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="info-col col-lg-4 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="title">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="data">
                            <div class="booking-info">
                                <div class="bk-title">Booking request</div>
                                <div class="bk-no"><a href="tel:+88-123-123456">+88-123-123456</a></div>
                            </div>
                            <div class="separator"><span></span></div>
                            <ul class="info">
                                <li><strong>Location</strong><br>Restaurant St, Delicious City, London 9578, UK
                                </li>
                                <li><strong>Lunch Time</strong><br>Monday to Sunday <br>11.00 am - 2.30pm</li>
                                <li><strong>Dinner Time</strong><br>Monday to Sunday <br>05.00 pm - 10.00pm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--Why Us Section-->
<section class="why-us">
    <div class="left-bg"><img src="assets/images/background/bg-8.png" alt="" title=""></div>
    <div class="right-bg"><img src="assets/images/background/bg-7.png" alt="" title=""></div>
    <div class="auto-container">
        <div class="title-box centered">
            <div class="subtitle"><span>why choose us</span></div>
            <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt="" title=""></div>
            <h2>Our Strength</h2>
        </div>
        <div class="row clearfix">
            <!--Block-->
            <div class="why-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="icon-box"><img src="assets/images/resource/why-icon-1.png" alt=""></div>
                    <h4>Hygienic Food</h4>
                    <div class="text">Lorem Ipsum is simply dummy printing and typesetting.</div>
                </div>
            </div>

            <!--Block-->
            <div class="why-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <div class="icon-box"><img src="assets/images/resource/why-icon-2.png" alt=""></div>
                    <h4>Fresh Environment</h4>
                    <div class="text">Lorem Ipsum is simply dummy printing and typesetting.</div>
                </div>
            </div>

            <!--Block-->
            <div class="why-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                    <div class="icon-box"><img src="assets/images/resource/why-icon-3.png" alt=""></div>
                    <h4>Skilled Chefs</h4>
                    <div class="text">Lorem Ipsum is simply dummy printing and typesetting.</div>
                </div>
            </div>

            <!--Block-->
            <div class="why-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="900ms">
                    <div class="icon-box"><img src="assets/images/resource/why-icon-4.png" alt=""></div>
                    <h4>Event & Party</h4>
                    <div class="text">Lorem Ipsum is simply dummy printing and typesetting.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--Featured Links Section-->
<section class="featured-links">
    <div class="outer-container">
        <div class="row clearfix">
            <!--Block-->
            <div class="link-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="inner wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="text-block">
                        <div class="bl-inner">
                            <div class="content">
                                <div class="subtitle">best menu</div>
                                <h3>Special Dishes</h3>
                                <div class="text">Lorem Ipsum is simply dummy printing.</div>
                                <div class="link"><a href="menu-list-1.html" class="theme-btn"><span>view
                                            menu</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="image-box">
                        <div class="image-layer" style="background-image: url(assets/images/resource/featured-1.jpg);">
                        </div>
                        <div class="image"><img src="assets/images/resource/featured-1.jpg" alt=""></div>
                    </div>
                </div>
            </div>

            <!--Block-->
            <div class="link-block alternate col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="inner wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <div class="image-box">
                        <div class="image-layer" style="background-image: url(assets/images/resource/featured-2.jpg);">
                        </div>
                        <div class="image"><img src="assets/images/resource/featured-2.jpg" alt=""></div>
                    </div>
                    <div class="text-block">
                        <div class="bl-inner">
                            <div class="content">
                                <div class="subtitle">Latest</div>
                                <h3>Upcoming Events</h3>
                                <div class="text">Simply dummy printing and setting.</div>
                                <div class="link"><a href="menu-list-2.html" class="theme-btn"><span>join
                                            event</span></a></div>
                                <div class="link"><a href="{{route('event_bookings.create')}}"
                                        class="theme-btn"><span>book an
                                            event</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Block-->
            <div class="link-block col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="inner wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                    <div class="text-block">
                        <div class="bl-inner">
                            <div class="content">
                                <div class="subtitle">selected</div>
                                <h3>Chef Choice</h3>
                                <div class="text">Dummy printing lorem Ipsum simply.</div>
                                <div class="link"><a href="menu-list-3.html" class="theme-btn"><span>view
                                            menu</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="image-box">
                        <div class="image-layer" style="background-image: url(assets/images/resource/featured-3.jpg);">
                        </div>
                        <div class="image"><img src="assets/images/resource/featured-3.jpg" alt=""></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--Team Section-->
<section class="team-section">
    <div class="left-bg"><img src="assets/images/background/bg-21.png" alt="" title=""></div>
    <div class="right-bg"><img src="assets/images/background/bg-9.png" alt="" title=""></div>
    <div class="auto-container">
        <div class="title-box centered">
            <div class="subtitle"><span>experienced team</span></div>
            <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt="" title=""></div>
            <h2>Meet Our Chef</h2>
        </div>
        <div class="row justify-content-center clearfix">
            <!--Block-->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="image">
                        <img src="assets/images/resource/team-1.jpg" alt="">
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li><a href="https://www.facebook.com/" class="fab fa-facebook-f"></a></li>
                                    <li><a href="https://www.twitter.com/" class="fab fa-twitter"></a></li>
                                    <li><a href="https://dribbble.com/" class="fab fa-dribbble"></a></li>
                                    <li><a href="https://www.linkedin.com/" class="fab fa-linkedin"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3><a href="menu-list.html">Willium Joe</a></h3>
                    <div class="designation">Master chef</div>
                    <div class="text desc">Lorem Ipsum is simply dummy printing and typeset industry lorem Ipsum
                        has been the industrys.</div>
                </div>
            </div>

            <!--Block-->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <div class="image">
                        <img src="assets/images/resource/team-2.jpg" alt="">
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li><a href="https://www.facebook.com/" class="fab fa-facebook-f"></a></li>
                                    <li><a href="https://www.twitter.com/" class="fab fa-twitter"></a></li>
                                    <li><a href="https://dribbble.com/" class="fab fa-dribbble"></a></li>
                                    <li><a href="https://www.linkedin.com/" class="fab fa-linkedin"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3><a href="menu-list.html">Steave Den</a></h3>
                    <div class="designation">Master chef</div>
                    <div class="text desc">Lorem Ipsum is simply dummy printing and typeset industry lorem Ipsum
                        has been the industrys.</div>
                </div>
            </div>

            <!--Block-->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                    <div class="image">
                        <img src="assets/images/resource/team-3.jpg" alt="">
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li><a href="https://www.facebook.com/" class="fab fa-facebook-f"></a></li>
                                    <li><a href="https://www.twitter.com/" class="fab fa-twitter"></a></li>
                                    <li><a href="https://dribbble.com/" class="fab fa-dribbble"></a></li>
                                    <li><a href="https://www.linkedin.com/" class="fab fa-linkedin"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3><a href="menu-list.html">Lily Sopy</a></h3>
                    <div class="designation">Master chef</div>
                    <div class="text desc">Lorem Ipsum is simply dummy printing and typeset industry lorem Ipsum
                        has been the industrys.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--Intro Section-->
<section class="intro-section">
    <div class="image-layer" style="background-image: url(assets/images/background/image-3.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <div class="title-box centered">
                <div class="subtitle"><span>amazing experience</span></div>
                <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt="" title=""></div>
                <h2>Watch Our Video</h2>
            </div>
            <div class="play-btn"><a href="https://www.youtube.com/watch?v=dZ9O_l1dIzs"
                    class="lightbox-image theme-btn"><span class="icon fal fa-play"><i class="ripple"></i></span></a>
            </div>
            <div class="separator"><span></span><span></span><span></span></div>
            <h3>A modern restaurant with a menu that will make your mouth water.</h3>
            <div class="auth-title">Willium Joe - Master chef</div>
        </div>

        <div class="fact-counter">
            <div class="row clearfix">
                <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner clearfix">
                        <div class="fact-count">
                            <div class="count-box"><span class="count-text" data-stop="150"
                                    data-speed="2000">0</span><i>+</i></div>
                        </div>
                        <div class="fact-title">daily <br>order</div>
                    </div>
                </div>
                <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner clearfix">
                        <div class="fact-count">
                            <div class="count-box"><span class="count-text" data-stop="82"
                                    data-speed="1500">0</span><i>+</i></div>
                        </div>
                        <div class="fact-title">Special <br>Dishes</div>
                    </div>
                </div>
                <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner clearfix">
                        <div class="fact-count">
                            <div class="count-box"><span class="count-text" data-stop="35"
                                    data-speed="1000">0</span><i>+</i></div>
                        </div>
                        <div class="fact-title">expert <br>chef</div>
                    </div>
                </div>
                <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner clearfix">
                        <div class="fact-count">
                            <div class="count-box"><span class="count-text" data-stop="10"
                                    data-speed="1000">0</span><i>+</i></div>
                        </div>
                        <div class="fact-title">awards <br>won</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!--Recnt Updates Section-->
<section class="news-section">
    <div class="auto-container">
        <div class="title-box centered">
            <div class="subtitle"><span>recent updates</span></div>
            <div class="pattern-image"><img src="assets/images/icons/separator.svg" alt="" title=""></div>
            <h2>Upcoming Event</h2>
        </div>
        <div class="row justify-content-center clearfix">
            <!--Block-->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="image-box">
                        <div class="date"><span>15/09/2022</span></div>
                        <div class="image"><a href="#"><img src="assets/images/resource/news-2.jpg" alt=""></a>
                        </div>
                        <div class="over-content">
                            <div class="cat">Food, flavour</div>
                            <h4><a href="menu-list.html">Flavour so good you’ll try to eat with your eyes.</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <!--Block-->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <div class="image-box">
                        <div class="date"><span>08/09/2022</span></div>
                        <div class="image"><a href="#"><img src="assets/images/resource/news-1.jpg" alt=""></a>
                        </div>
                        <div class="over-content">
                            <div class="cat">healthy food</div>
                            <h4><a href="menu-list.html">Flavour so good you’ll try to eat with your eyes.</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <!--Block-->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                    <div class="image-box">
                        <div class="date"><span>03/09/2022</span></div>
                        <div class="image"><a href="#"><img src="assets/images/resource/news-3.jpg" alt=""></a>
                        </div>
                        <div class="over-content">
                            <div class="cat">recipie</div>
                            <h4><a href="menu-list.html">Flavour so good you’ll try to eat with your eyes.</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="lower-link-box text-center">
            <a href="{{ route('blog.show') }}" class="theme-btn btn-style-two clearfix">
                <span class="btn-wrap">
                    <span class="text-one">view our blog</span>
                    <span class="text-two">view our blog</span>
                </span>
            </a>
        </div>

    </div>
</section>

@endsection
