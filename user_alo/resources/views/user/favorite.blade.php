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
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0Y5TLG7WD0"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-0Y5TLG7WD0');
        </script>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
<link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
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
                            <li><i class="fa fa-envelope"></i> support@asharaloshop.xyz</li>

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
                        <span>All Categories</span>
                    </div>
                    <ul>
                        @foreach($category as $cata)
                            <li><a href="{{route('categoryies',['id'=>$id->id,'category'=>$cata->category_name])}}">{{$cata->category_name}}</a></li>
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
<section class="breadcrumb-section set-bg" data-setbg="{{asset('img/breadcrumb.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Your Favorites</h2>
                    <div class="breadcrumb__option">
                        <a href="{{route('welcome',['id'=>$id->id])}}">Home</a>
                        <span>Favorites</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                        <tr>
                            <th class="shoping__product">Products</th>
                            <th>Price</th>
                            <th>Quantity</th>

                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($favs as $carts)
                            <form action="{{route('cart_insert')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$carts->favs_id}}">
                                <input type="hidden" name="user_id" value="{{$id->id}}">
                                <input type="hidden" name="product_id" value="{{$carts->product_id}}">
                                <tr>


                                    <td class="shoping__cart__item">
                                        <img src="{{asset('storage/'.$carts->image)}}" width="150px" height="100px" alt="">
                                        <h5>{{$carts->product_name}}</h5>
                                    </td>
                                    <td class="shoping__cart__price" data-price="{{$carts->price}}">
                                        TK {{$carts->price}}
                                        <input type="hidden" name="price" value="{{$carts->price}}">
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">

                                                <input type="number" name="quantity" class="quantity-input" value="1">
                                            </div>
                                        </div>
                                    </td>


                                    <td class="shoping__cart__item__close">

                                        <a href="{{route('deleteFav',['id'=>$carts->favs_id])}}" class="primary-btn cart-btn">Delete</a>

                                    </td>
                                    <td>
                                        <button type="submit" style="border: none;" class="primary-btn cart-btn-right">Add TO CART</button>
                                    </td>

                                </tr>
                            </form>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="{{route('welcome',['id'=>$id->id])}}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>

                    {{--                    <button type="submit" style="border: none; background-color: #7FAD39; color: white" class="primary-btn cart-btn cart-btn-right">Upadate Cart</button>--}}

                </div>
            </div>
        </div>


    </div>
    </div>

</section>
<!-- Shoping Cart Section End -->

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
