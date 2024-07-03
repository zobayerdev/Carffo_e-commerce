<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Welcome to Ashar Alo Shop - your one-stop destination for premium quality products. Explore our collection of Asha, Asharalo, and more.">
    <meta name="keywords" content="asha, asharalo, asha alo, ASHAR shop, premium products, high-quality, online shopping">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashar Alo Shop</title>
    <script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0Y5TLG7WD0"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-0Y5TLG7WD0');
        </script>

</head>

@php 
$email ='support@asharaloshop.xyz';
@endphp

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="img/logo.png" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart"></i> </a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> </a></li>
        </ul>

    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="img/language.png" alt="">
            <div>English</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">English</a></li>
            </ul>
        </div>
        <div class="header__top__right__auth">
            <a href="{{route('loginandregistration')}}"><i class="fa fa-user"></i> Login</a>
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('shop-grid')}}">Shop</a></li>
{{--            <li><a href="#">Pages</a>--}}
{{--                <ul class="header__menu__dropdown">--}}
{{--                    <li><a href="{{route('shop-details')}}">Shop Details</a></li>--}}
{{--                    <li><a href="{{route('shopping-cart')}}">Shoping Cart</a></li>--}}
{{--                    <li><a href="{{route('checkout')}}">Check Out</a></li>--}}
{{--                    <li><a href="{{route('blog_details')}}">Blog Details</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li><a href="{{route('blog')}}">Blog</a></li>--}}
            <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="https://www.facebook.com/asharaloshop?mibextid=ZbWKwL" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://wa.me/message/ZVA3MRCTKK3ZG1" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="https://www.tiktok.com/@asharaloshop?lang=en&is_from_webapp=1&sender_device=mobile&sender_web_id=7352553370950321682" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i>{{$email}}</li>

        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> {{$email}}</li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="https://www.facebook.com/asharaloshop?mibextid=ZbWKwL" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://wa.me/message/ZVA3MRCTKK3ZG1" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                            <a href="https://www.tiktok.com/@asharaloshop?lang=en&is_from_webapp=1&sender_device=mobile&sender_web_id=7352553370950321682" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <img src="img/language.png" alt="">
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="{{route('loginandregistration')}}"><i class="fa fa-user"></i> Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{route('home')}}"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active"><a href="{{route('shop-grid')}}">Shop</a></li>
{{--                        <li><a href="#">Pages</a>--}}
{{--                            <ul class="header__menu__dropdown">--}}
{{--                                <li><a href="{{route('shop-details')}}">Shop Details</a></li>--}}
{{--                                <li><a href="{{route('shopping-cart')}}">Shoping Cart</a></li>--}}
{{--                                <li><a href="{{route('checkout')}}">Check Out</a></li>--}}
{{--                                <li><a href="{{route('blog_details')}}">Blog Details</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li><a href="{{route('blog')}}">Blog</a></li>--}}
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> </a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All departments</span>
                    </div>
                    <ul>
                        @foreach($categories as $cata)
                            <li><a href="{{route('category',['category'=>$cata->category_name])}}">{{$cata->category_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="{{ route('blog_details') }}" method="GET">

                            <input type="text" name="keyword" placeholder="What do you need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+88 01706821156</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>{{$prod->product_name}}</h2>
                    <div class="breadcrumb__option">
                        <a href="{{route('home')}}">Home</a>
                        <a href="{{route('subcategory',['sub-category'=>$prod->sub_category])}}">{{$prod->sub_category}}</a>
                        <span>{{$prod->product_name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                             src="{{asset('storage/'.$prod->image)}}" alt="">
                    </div>
                    {{--                    <div class="product__details__pic__slider owl-carousel">--}}
                    {{--                        <img data-imgbigurl="img/product/details/product-details-2.jpg"--}}
                    {{--                             src="img/product/details/thumb-1.jpg" alt="">--}}
                    {{--                        <img data-imgbigurl="img/product/details/product-details-3.jpg"--}}
                    {{--                             src="img/product/details/thumb-2.jpg" alt="">--}}
                    {{--                        <img data-imgbigurl="img/product/details/product-details-5.jpg"--}}
                    {{--                             src="img/product/details/thumb-3.jpg" alt="">--}}
                    {{--                        <img data-imgbigurl="img/product/details/product-details-4.jpg"--}}
                    {{--                             src="img/product/details/thumb-4.jpg" alt="">--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3>{{$prod->product_name}}</h3>

                    <div class="product__details__price">TK {{$prod->price}}</div>
{{--                    <form action="{{route('cart_insert')}}" method="post">--}}
{{--                        @csrf--}}
{{--                        <div class="product__details__quantity">--}}
{{--                            <div class="quantity">--}}
{{--                                <div class="pro-qty">--}}
{{--                                    <input type="text" name="quantity" value="1">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <input type="hidden" name="user_id" value="{{$id->id}}">--}}
{{--                        <input type="hidden" name="product_id" value="{{$prod->id}}">--}}
{{--                        <input type="hidden" name="price" value="{{$prod->price}}">--}}
{{--                        <button type="submit" class="primary-btn" style="border: none">ADD TO CART</button>--}}
{{--                    </form>--}}
{{--                    <form action="{{route('favo')}}" method="post">--}}
{{--                        @csrf--}}
{{--                        <input type="hidden" name="user_id" value="{{$id->id}}">--}}
{{--                        <input type="hidden" name="product_id" value="{{$prod->id}}">--}}
{{--                        <button type="submit" class="heart-icon" style="border: none"><span class="icon_heart_alt"></span></button>--}}
{{--                    </form>--}}
                    <ul>
                        <li><b>Availability</b>
                            @if($prod->stock = 0)
                                <span>Out Of Stock</span>
                            @else
                                <span>In Stock</span>
                            @endif</li>

                        <li><b>Share on</b>
                            <div class="share">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                               aria-selected="true">Description</a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Products Infomation</h6>
                                <p>{!! $prod->description !!}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details Section End -->

<!-- Related Product Section Begin -->
<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2>Related Product</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($prods as $rubayet)
                <div class="col-lg-3 col-md-4 col-sm-6">

                    <div class="product__item">
                        <a href="{{route('shop-details',['product'=>$rubayet->id])}}">
                            <div class="product__item__pic set-bg" data-setbg="{{asset('storage/'.$rubayet->image)}}">
                            </div>
                        </a>
                        <div class="product__item__text">
                            <h6><a href="#">{{$rubayet->product_name}}</a></h6>
                            <h5>TK {{$rubayet->price}}</h5>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Related Product Section End -->

<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="{{route('home')}}"><img src="img/logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>Address: Hazi Market, Tongi, Gazipur</li>
                        <li>Phone: +88 01706821156</li>
                        <li>Email: {{$email}}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About Our Shop</a></li>
                        <li><a href="#">Secure Shopping</a></li>
                        <li><a href="#">Delivery infomation</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Our Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">

                    <div class="footer__widget__social">
                        <a href="https://www.facebook.com/asharaloshop?mibextid=ZbWKwL" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://wa.me/message/ZVA3MRCTKK3ZG1" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="https://www.tiktok.com/@asharaloshop?lang=en&is_from_webapp=1&sender_device=mobile&sender_web_id=7352553370950321682" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by Ashar Alo Shop | Developed by <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.trodev.com" target="_blank">Trodev</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>
