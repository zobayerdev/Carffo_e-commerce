<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Welcome to Ashar Alo Shop - your one-stop destination for premium quality products. Explore our collection of Asha, Asharalo, and more.">
    <meta name="keywords" content="asha, asharalo, asha alo, ASHAR shop, premium products, high-quality, online shopping">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashar Alo Shop</title>
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0Y5TLG7WD0"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-0Y5TLG7WD0');
        </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="{{asset('img/logo.png')}}" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="{{route('fav',['id'=>$id->id])}}"><i class="fa fa-heart"></i> <span>{{$favorite}}</span></a></li>
            <li><a href="{{route('cart_details',['id'=>$id->id])}}"><i class="fa fa-shopping-bag"></i> <span>{{$cart}}</span></a></li>
        </ul>
        <div class="header__cart__price">item: <span>Tk {{$total}}</span></div>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="{{asset('img/language.png')}}" alt="">
            <div>English</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">English</a></li>
            </ul>
        </div>
        <div class="header__top__right__language">
            <div>{{$id->name}}</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="{{route('purchase',['id'=>$id->id])}}">Orders</a></li>
                <li><a href="{{route('logout')}}">Logout</a></li>
            </ul>
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="{{route('welcome',['id'=>$id->id])}}">Home</a></li>
            <li><a href="{{route('productsall',['id'=>$id->id])}}">Shop</a></li>

            <li><a href="{{route('contract',['id'=>$id->id])}}">Contact</a></li>
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

            <li><i class="fa fa-envelope"></i>support@asharaloshop.xyz</li>


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
                            <li><i class="fa fa-envelope"></i>support@asharaloshop.xyz</li>

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
                            <img src="{{asset('img/language.png')}}" alt="">
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>


                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__language">
                            <div>{{$id->name}}</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="{{route('purchase',['id'=>$id->id])}}">Orders</a></li>
                                <li><a href="{{route('logout')}}">Logout</a></li>
                            </ul>
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
                    <a href="{{route('welcome',['id'=>$id->id])}}"><img src="{{asset('img/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li><a href="{{route('welcome',['id'=>$id->id])}}">Home</a></li>
                        <li class="active"><a href="{{route('productsall',['id'=>$id->id])}}">Shop</a></li>

                        <li><a href="{{route('contract',['id'=>$id->id])}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="{{route('fav',['id'=>$id->id])}}"><i class="fa fa-heart"></i> <span>{{$favorite}}</span></a></li>
                        <li><a href="{{route('cart_details',['id'=>$id->id])}}"><i class="fa fa-shopping-bag"></i> <span>{{$cart}}</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>Tk {{$total}}</span></div>
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
                        @foreach($category as $categories)
                            <li><a href="{{route('categoryies',['id'=>$id->id,'category'=>$categories->category_name])}}">{{$categories->category_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="{{route('search_data',['id'=>$id->id])}}" method="get">
                            <input type="text" name="keyword" placeholder="What do yo u need?" />
                            <input type="hidden" name="id" value="{{$id->id}}">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+88 0161527555</h5>
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
<section class="breadcrumb-section set-bg" data-setbg="{{asset('img/breadcrumb.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Ashar Alo Shop</h2>
                    <div class="breadcrumb__option">
                        <a href="{{route('welcome',['id'=>$id->id])}}">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Sub-Categories</h4>
                        <ul>
                            @foreach($subcategories as $categories)
                                <li><a href="{{route('subcategoryies',['id'=>$id->id,'sub_category'=>$categories->sub_category])}}">{{$categories->sub_category}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="sidebar__item">
                        <div class="latest-product__text">
                            <h4>Latest Products</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    @foreach($late as $lates)
                                        <a href="{{route('product_details',['id'=>$id->id,'prod'=>$lates->id])}}" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{asset('storage/'.$lates->image)}}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>{{$lates->product_name}}</h6>
                                                <span>TK {{$lates->price}}</span>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                                <div class="latest-prdouct__slider__item">
                                    @foreach($late2 as $latess)
                                        <a href="{{route('product_details',['id'=>$id->id,'prod'=>$latess->id])}}" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{asset('storage/'.$latess->image)}}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>{{$latess->product_name}}</h6>
                                                <span>TK {{$latess->price}}</span>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                @if(empty($discount))
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                @foreach($discount as $dis)
                                    @if(isset($dis->discount))
                                        <div class="col-lg-4">
                                            <div class="product__discount__item">
                                                <a href="{{route('product_details',['id'=>$id->id,'prod'=>$dis->id])}}">
                                                    <div class="product__discount__item__pic set-bg"
                                                         data-setbg="{{asset('storage/'.$dis->image)}}">
                                                        <div class="product__discount__percent">{{$dis->discount}}</div>

                                                    </div>
                                                </a>
                                                <div class="product__discount__item__text">
                                                    <span>{{$dis->sub_category}}</span>
                                                    <h5><a href="{{route('product_details',['id'=>$id->id,'prod'=>$dis->id])}}">{{$dis->product_name}}</a></h5>
                                                    <div class="product__item__price">TK {{$dis->price}} <span>TK {{$dis->previous_price}}</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    @else

                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <div class="row">
                    @foreach($prod as $products)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <a href="{{route('product_details',['id'=>$id->id,'prod'=>$products->id])}}">
                                    <div class="product__item__pic set-bg" data-setbg="{{asset('storage/'.$products->image)}}">
                                    </div>
                                </a>
                                <div class="product__item__text">
                                    <h6><a href="{{route('product_details',['id'=>$id->id,'prod'=>$products->id])}}">{{$products->product_name}}</a></h6>
                                    <h5>TK {{$products->price}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="{{route('welcome',['id'=>$id->id])}}"><img src="{{asset('img/logo.png')}}" alt=""></a>
                    </div>
                    <ul>
                        <li>Address: Hazi Market, Tongi, Gazipur</li>
                        <li>Phone: +88 01706821156</li>
                        <li>Email: support@asharaloshop.xyz</li>
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
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.js')}}"></script>
<script src="{{asset('js/mixitup.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>



</body>

</html>
