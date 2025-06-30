@extends('layouts.app')
@section('content')


<!-- Inner Banner Section -->
<section class="inner-banner">
    <div class="image-layer" style="background-image: url(images/background/banner-image-2.jpg);"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="subtitle"><span>delicious & amazing</span></div>
            <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
            <h1><span>Our Menu 4</span></h1>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--Menu Section-->
<section class="menu-section">
    <div class="left-bg"><img src="images/background/bg-5.png" alt="" title=""></div>
    <div class="right-bg"><img src="images/background/bg-6.png" alt="" title=""></div>
    <div class="auto-container">
        <div class="title-box centered">
            <div class="subtitle"><span>Special selection</span></div>
            <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
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
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-5.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Greek Salad</a></h5>
                                            </div>
                                            <div class="price"><span>$25.50</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Tomatoes, green bell pepper, sliced cucumber
                                                onion, olives, and feta cheese.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-6.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Lasagne <span class="s-info">SEASONAL</span></a></h5>
                                            </div>
                                            <div class="price"><span>$40.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato
                                                sauce, seasonings and spices</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-7.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Butternut Pumpkin</a></h5>
                                            </div>
                                            <div class="price"><span>$10.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Typesetting industry lorem Lorem Ipsum is
                                                simply dummy text of the priand.</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                            <div class="inner">
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-8.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Tokusen Wagyu <span class="s-info">NEW</span></a></h5>
                                            </div>
                                            <div class="price"><span>$39.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato
                                                sauce, seasonings and spices.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-9.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Olivas Rellenas</a></h5>
                                            </div>
                                            <div class="price"><span>$25.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Avocados with crab meat, red onion, crab
                                                salad stuffed red bell pepper and green bell pepper.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-10.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Opu Fish</a></h5>
                                            </div>
                                            <div class="price"><span>$49.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato
                                                sauce, seasonings and spices</a></div>
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
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-6.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Lasagne</a></h5>
                                            </div>
                                            <div class="price"><span>$25.50</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Tomatoes, green bell pepper, sliced cucumber
                                                onion, olives, and feta cheese.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-7.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Greek Salad </a></h5>
                                            </div>
                                            <div class="price"><span>$40.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato
                                                sauce, seasonings and spices</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-5.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Tokusen Wagyu<span class="s-info">SEASONAL</span></a>
                                                </h5>
                                            </div>
                                            <div class="price"><span>$10.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Typesetting industry lorem Lorem Ipsum is
                                                simply dummy text of the priand.</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                            <div class="inner">
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-7.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Butternut Pumpkin </a></h5>
                                            </div>
                                            <div class="price"><span>$39.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato
                                                sauce, seasonings and spices.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-8.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Olivas Rellenas</a></h5>
                                            </div>
                                            <div class="price"><span>$25.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Avocados with crab meat, red onion, crab
                                                salad stuffed red bell pepper and green bell pepper.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-9.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Opu Fish<span class="s-info">NEW</span></a></h5>
                                            </div>
                                            <div class="price"><span>$49.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato
                                                sauce, seasonings and spices</a></div>
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
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-7.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Opu Fish</a></h5>
                                            </div>
                                            <div class="price"><span>$25.50</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Tomatoes, green bell pepper, sliced cucumber
                                                onion, olives, and feta cheese.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-6.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Lasagne <span class="s-info">SEASONAL</span></a></h5>
                                            </div>
                                            <div class="price"><span>$40.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato
                                                sauce, seasonings and spices</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-6.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Tokusen Wagyu</a></h5>
                                            </div>
                                            <div class="price"><span>$10.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Typesetting industry lorem Lorem Ipsum is
                                                simply dummy text of the priand.</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                            <div class="inner">
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-9.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Butternut Pumpkin <span class="s-info">NEW</span></a>
                                                </h5>
                                            </div>
                                            <div class="price"><span>$39.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato
                                                sauce, seasonings and spices.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-10.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Olivas Rellenas</a></h5>
                                            </div>
                                            <div class="price"><span>$25.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Avocados with crab meat, red onion, crab
                                                salad stuffed red bell pepper and green bell pepper.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/menu-image-8.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Opu Fish</a></h5>
                                            </div>
                                            <div class="price"><span>$49.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato
                                                sauce, seasonings and spices</a></div>
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
                                        <div class="dish-image"><a href="#"><img src="images/resource/drink-1.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Greek Salad</a></h5>
                                            </div>
                                            <div class="price"><span>$25.50</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Tomatoes, green bell pepper, sliced cucumber
                                                onion, olives, and feta cheese.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/drink-2.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Lasagne <span class="s-info">SEASONAL</span></a></h5>
                                            </div>
                                            <div class="price"><span>$40.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato
                                                sauce, seasonings and spices</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/drink-3.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Butternut Pumpkin</a></h5>
                                            </div>
                                            <div class="price"><span>$10.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Typesetting industry lorem Lorem Ipsum is
                                                simply dummy text of the priand.</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                            <div class="inner">
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/drink-4.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Tokusen Wagyu <span class="s-info">NEW</span></a></h5>
                                            </div>
                                            <div class="price"><span>$39.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato
                                                sauce, seasonings and spices.</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/drink-5.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Olivas Rellenas</a></h5>
                                            </div>
                                            <div class="price"><span>$25.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Avocados with crab meat, red onion, crab
                                                salad stuffed red bell pepper and green bell pepper. Cucumber</a></div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="dish-block">
                                    <div class="inner-box">
                                        <div class="dish-image"><a href="#"><img src="images/resource/drink-6.png"
                                                    alt=""></a></div>
                                        <div class="title clearfix">
                                            <div class="ttl clearfix">
                                                <h5><a href="#">Opu Fish</a></h5>
                                            </div>
                                            <div class="price"><span>$49.00</span></div>
                                        </div>
                                        <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato
                                                sauce, seasonings and spices</a></div>
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
        </div>
    </div>
</section>

@endsection
