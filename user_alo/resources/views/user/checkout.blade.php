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

    <style>

        .checkout__input select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            font-size: 16px;
            color: #555;
            outline: none;
            margin-top: 5px; /* Adjust spacing */
        }

        .checkout__input select option {
            padding: 10px; /* Adjust padding */
        }

        /* Style the label associated with the dropdown */
        .checkout__input p {
            margin-bottom: 5px; /* Adjust margin */
            font-size: 16px;
            color: #333;
        }

        /* Style the asterisk */


    </style>

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
            <li><a href="{{route('cart_details',['id'=>$id->id])}}"><i class="fa fa-shopping-bag"></i> <span>{{$carts}}</span></a></li>
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
        <a href="https://www.youtube.com/playlist?list=PLc0caqXFxGLyuh_CVADpZZKpCKlmZg9CU" target="_blank"><i class="fa-brands fa-youtube"></i></a>
        <a href="https://www.tiktok.com/@asharaloshop?lang=en&is_from_webapp=1&sender_device=mobile&sender_web_id=7352553370950321682" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> mr.tubraji@gmail.com</li>

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
                            <li><i class="fa fa-envelope"></i> mr.tubraji@gmail.com</li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="https://www.facebook.com/asharaloshop?mibextid=ZbWKwL" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://wa.me/message/ZVA3MRCTKK3ZG1" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                            <a href="https://www.youtube.com/playlist?list=PLc0caqXFxGLyuh_CVADpZZKpCKlmZg9CU" target="_blank"><i class="fa-brands fa-youtube"></i></a>
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
                        <li><a href="{{route('cart_details',['id'=>$id->id])}}"><i class="fa fa-shopping-bag"></i> <span>{{$carts}}</span></a></li>
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
                    <h2>Checkout</h2>
                    <div class="breadcrumb__option">
                        <a href="{{route('welcome',['id'=>$id->id])}}">Home</a>
                        <span>Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4>Billing Details</h4>
            <form action="{{route('makePya',['id'=>$id->id])}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$id->id}}">
                <div class="row">
                    @if(!isset($info))
                        <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Fist Name<span>*</span></p>
                                    <input type="text" name="fname" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Last Name<span>*</span></p>
                                    <input type="text" name="lname" required>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Email<span>*</span></p>
                            <input type="text" name="email" value="{{$id->email}}" readonly>
                        </div>
                        <div class="checkout__input">
                            <p>Shipping Address<span>*</span></p>
                            <input type="text" placeholder="Details Address" class="checkout__input__add" name="address" required>
                        </div>
                            <div class="checkout__input">
                                <p>City<span>*</span></p>
                                <select name="city" id="citySelect">
                                    <option value="">Select</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Keraniganj, Dhaka">Keraniganj, Dhaka</option>
                                    <option value="Savar, Dhaka">Savar, Dhaka</option>
                                    <option value="Gazipur">Gazipur</option>
                                    <option value="Bandarban">Bandarban</option>
                                    <option value="Barguna">Barguna</option>
                                    <option value="Barishal">Barishal</option>
                                    <option value="Bhola">Bhola</option>
                                    <option value="Bogura">Bogura</option>
                                    <option value="Brahmanbaria">Brahmanbaria</option>
                                    <option value="Bagherhat">Bagherhat</option>
                                    <option value="Chandpur">Chandpur</option>
                                    <option value="Chattogram">Chattogram (Chittagong)</option>
                                    <option value="Chuadanga">Chuadanga</option>
                                    <option value="Comilla">Comilla (Cumilla)</option>
                                    <option value="Cox's Bazar">Cox's Bazar</option>
                                    <option value="Chapai_Nawabganj">Chapai Nawabganj</option>

                                    <option value="Dinajpur">Dinajpur</option>
                                    <option value="Faridpur">Faridpur</option>
                                    <option value="Feni">Feni</option>
                                    <option value="Gaibandha">Gaibandha</option>
                                    <option value="Gazipur">Gazipur</option>
                                    <option value="Gopalganj">Gopalganj</option>
                                    <option value="Habiganj">Habiganj</option>
                                    <option value="Jamalpur">Jamalpur</option>
                                    <option value="Jashore">Jashore (Jessore)</option>
                                    <option value="Jhalokati">Jhalokati</option>
                                    <option value="Jhenaidah">Jhenaidah</option>
                                    <option value="Joypurhat">Joypurhat</option>
                                    <option value="Khagrachhari">Khagrachhari</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Kishoreganj">Kishoreganj</option>
                                    <option value="Kurigram">Kurigram</option>
                                    <option value="Kushtia">Kushtia</option>
                                    <option value="Lakshmipur">Lakshmipur</option>
                                    <option value="Lalmonirhat">Lalmonirhat</option>
                                    <option value="Madaripur">Madaripur</option>
                                    <option value="Magura">Magura</option>
                                    <option value="Manikganj">Manikganj</option>
                                    <option value="Meherpur">Meherpur</option>
                                    <option value="Moulvibazar">Moulvibazar</option>
                                    <option value="Munshiganj">Munshiganj</option>
                                    <option value="Mymensingh">Mymensingh</option>
                                    <option value="Naogaon">Naogaon</option>
                                    <option value="Narail">Narail</option>
                                    <option value="Narayanganj">Narayanganj</option>
                                    <option value="Narsingdi">Narsingdi</option>
                                    <option value="Natore">Natore</option>
                                    <option value="Netrokona">Netrokona</option>
                                    <option value="Nilphamari">Nilphamari</option>
                                    <option value="Noakhali">Noakhali</option>
                                    <option value="Pabna">Pabna</option>
                                    <option value="Panchagarh">Panchagarh</option>
                                    <option value="Patuakhali">Patuakhali</option>
                                    <option value="Pirojpur">Pirojpur</option>
                                    <option value="Rajbari">Rajbari</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Rangamati">Rangamati</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Satkhira">Satkhira</option>
                                    <option value="Shariatpur">Shariatpur</option>
                                    <option value="Sherpur">Sherpur</option>
                                    <option value="Sirajganj">Sirajganj</option>
                                    <option value="Sunamganj">Sunamganj</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Tangail">Tangail</option>
                                    <option value="Thakurgaon">Thakurgaon</option>
                                </select>
                            </div> <br> <br>

                            <div class="checkout__input">
                            <p>Country/State<span>*</span></p>
                            <input type="text" name="country" value="Bangladesh" readonly>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="text" name="phone" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Second Email<span>*</span></p>
                                    <input type="text" name="semail">
                                </div>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="diff-acc">Ship to a different address?</label>
                                <input type="checkbox" id="diff-acc" name="ship">
                                <span class="checkmark"></span>
                            </div>
                            <div id="shipping-address" style="display: none;">
                                <div class="checkout__input">
                                    <p>Shipping Address<span>*</span></p>
                                    <input type="text" placeholder="Details Address" class="checkout__input" name="shipaddress">
                                </div>
                                <!-- Add other shipping address fields here -->
                            </div>

                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var checkbox = document.getElementById("diff-acc");
                                    var shippingAddress = document.getElementById("shipping-address");

                                    checkbox.addEventListener("change", function() {
                                        if (checkbox.checked) {
                                            shippingAddress.style.display = "block";
                                        } else {
                                            shippingAddress.style.display = "none";
                                        }
                                    });
                                });
                            </script>

                        </div>

                    </div>
                    @else
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>First Name<span>*</span></p>
                                        <input type="text" value="{{$info->fname}}" name="fname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" value="{{$info->lname}}" name="lname">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input type="text" name="email" value="{{$id->email}}" readonly>
                            </div>
                            <div class="checkout__input">
                                <p>Shipping Address<span>*</span></p>
                                <input type="text" placeholder="Details Address" class="checkout__input__add" name="address" required>
                            </div>


                            <div class="checkout__input">
                                <p>City<span>*</span></p>
                                <select name="city" id="citySelect">
                                    <option value="">Select</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Keraniganj, Dhaka">Keraniganj, Dhaka</option>
                                    <option value="Savar, Dhaka">Savar, Dhaka</option>
                                    <option value="Gazipur">Gazipur</option>
                                    <option value="Bandarban">Bandarban</option>
                                    <option value="Barguna">Barguna</option>
                                    <option value="Barishal">Barishal</option>
                                    <option value="Bhola">Bhola</option>
                                    <option value="Bogura">Bogura</option>
                                    <option value="Brahmanbaria">Brahmanbaria</option>
                                    <option value="Bagherhat">Bagherhat</option>
                                    <option value="Chandpur">Chandpur</option>
                                    <option value="Chattogram">Chattogram (Chittagong)</option>
                                    <option value="Chuadanga">Chuadanga</option>
                                    <option value="Comilla">Comilla (Cumilla)</option>
                                    <option value="Cox's Bazar">Cox's Bazar</option>
                                    <option value="Chapai_Nawabganj">Chapai Nawabganj</option>

                                    <option value="Dinajpur">Dinajpur</option>
                                    <option value="Faridpur">Faridpur</option>
                                    <option value="Feni">Feni</option>
                                    <option value="Gaibandha">Gaibandha</option>
                                    <option value="Gazipur">Gazipur</option>
                                    <option value="Gopalganj">Gopalganj</option>
                                    <option value="Habiganj">Habiganj</option>
                                    <option value="Jamalpur">Jamalpur</option>
                                    <option value="Jashore">Jashore (Jessore)</option>
                                    <option value="Jhalokati">Jhalokati</option>
                                    <option value="Jhenaidah">Jhenaidah</option>
                                    <option value="Joypurhat">Joypurhat</option>
                                    <option value="Khagrachhari">Khagrachhari</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Kishoreganj">Kishoreganj</option>
                                    <option value="Kurigram">Kurigram</option>
                                    <option value="Kushtia">Kushtia</option>
                                    <option value="Lakshmipur">Lakshmipur</option>
                                    <option value="Lalmonirhat">Lalmonirhat</option>
                                    <option value="Madaripur">Madaripur</option>
                                    <option value="Magura">Magura</option>
                                    <option value="Manikganj">Manikganj</option>
                                    <option value="Meherpur">Meherpur</option>
                                    <option value="Moulvibazar">Moulvibazar</option>
                                    <option value="Munshiganj">Munshiganj</option>
                                    <option value="Mymensingh">Mymensingh</option>
                                    <option value="Naogaon">Naogaon</option>
                                    <option value="Narail">Narail</option>
                                    <option value="Narayanganj">Narayanganj</option>
                                    <option value="Narsingdi">Narsingdi</option>
                                    <option value="Natore">Natore</option>
                                    <option value="Netrokona">Netrokona</option>
                                    <option value="Nilphamari">Nilphamari</option>
                                    <option value="Noakhali">Noakhali</option>
                                    <option value="Pabna">Pabna</option>
                                    <option value="Panchagarh">Panchagarh</option>
                                    <option value="Patuakhali">Patuakhali</option>
                                    <option value="Pirojpur">Pirojpur</option>
                                    <option value="Rajbari">Rajbari</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Rangamati">Rangamati</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Satkhira">Satkhira</option>
                                    <option value="Shariatpur">Shariatpur</option>
                                    <option value="Sherpur">Sherpur</option>
                                    <option value="Sirajganj">Sirajganj</option>
                                    <option value="Sunamganj">Sunamganj</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Tangail">Tangail</option>
                                    <option value="Thakurgaon">Thakurgaon</option>
                                </select>
                            </div> <br> <br>



                            <div class="checkout__input">
                                <p>Country<span>*</span></p>
                                <input type="text" value="Bangladesh" name="country" readonly>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" value="{{$info->phone}}" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Second Email<span>*</span></p>
                                        <input type="text" value="{{$info->semail}}" name="semail">
                                    </div>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="diff-acc">Ship to a different address?</label>
                                    <input type="checkbox" id="diff-acc" name="ship">
                                    <span class="checkmark"></span>
                                </div>
                                <div id="shipping-address" style="display: none;">
                                    <div class="checkout__input">
                                        <p>Shipping Address<span>*</span></p>
                                        <input type="text" placeholder="Details Address" class="checkout__input" name="shipaddress">
                                    </div>
                                    <!-- Add other shipping address fields here -->
                                </div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var checkbox = document.getElementById("diff-acc");
                                        var shippingAddress = document.getElementById("shipping-address");

                                        checkbox.addEventListener("change", function() {
                                            if (checkbox.checked) {
                                                shippingAddress.style.display = "block";
                                            } else {
                                                shippingAddress.style.display = "none";
                                            }
                                        });
                                    });
                                </script>
                            </div>

                        </div>
                    @endif
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Your Order #{{$order}}</h4>
                            <input type="hidden" name="order" value="{{$order}}">
                            <div class="checkout__order__products">Products <span>Total</span></div>
                            <ul>
                                @foreach($cart as $carts)

                                    <li>{{$carts->product_name}} <span class="total-price">TK {{$carts->quantity * $carts->price}}</span></li>
                                @endforeach
                            </ul>
                            <div class="checkout__order__subtotal" id="subtotal">Subtotal <span>TK 0.00</span></div>

                            <p>
                                All Bangladesh delivery charges: 120Tk <br />
                                Gazipur, Keraniganj, Savar delivery charges: 100Tk <br/>
                                Inside of Dhaka delivery charges: 60Tk
                            </p>

                            <div class="checkout__order__total" id="total">Total <span>TK 0.00</span></div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    // Fetch all total price elements
                                    const totalPriceElements = document.querySelectorAll('.total-price');

                                    // Initialize subtotal and total
                                    let subtotal = 0;

                                    // Calculate subtotal
                                    totalPriceElements.forEach(function(element) {
                                        subtotal += parseFloat(element.textContent.replace('TK ', ''));
                                    });

                                    // Update subtotal element
                                    document.getElementById('subtotal').getElementsByTagName('span')[0].textContent = 'TK ' + subtotal.toFixed(2);

                                    // Update total (assuming it's the same as subtotal in this case)
                                    document.getElementById('total').getElementsByTagName('span')[0].textContent = 'TK ' + subtotal.toFixed(2);
                                });
                            </script>





                            <div class="checkout__input__checkbox">
                                <label for="cod">
                                    Cash On Delivery
                                    <input type="radio" name="payment_method" id="cod" value="cod" onclick="hidePaymentInput()" />
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="bKash">
                                    <img src="{{asset('Bkash.png')}}" alt="bKash" style="width: 30px; height: 30px;"/>
                                    bKash 01308622612
                                    <input type="radio" name="payment_method" id="bKash" value="bKash" onclick="showPaymentInput()" />
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="nagad">
                                    <img src="{{asset('Nagad.png')}}" alt="bKash" style="width: 30px; height: 30px;"/>
                                    Nagad 01308622612
                                    <input type="radio" name="payment_method" id="nagad" value="nagad" onclick="showPaymentInput()" />
                                    <span class="checkmark"></span>
                                </label>
                            </div>
{{--                            <div class="checkout__input__checkbox">--}}
{{--                                <label for="rocket">--}}
{{--                                    <img src="{{asset('Rocket.png')}}" alt="bKash" style="width: 30px; height: 30px;"/>--}}
{{--                                    Rocket--}}
{{--                                    <input type="radio" name="payment_method" id="rocket" value="rocket" onclick="showPaymentInput()" />--}}
{{--                                    <span class="checkmark"></span>--}}
{{--                                </label>--}}
{{--                            </div>--}}



                            <div class="checkout__input" id="paymentInput" style="display: none;">
                                <label for="payment">Transaction Id</label>
                                <input type="text" id="payment" name="payment">
                            </div>

                            <script>
                                function hidePaymentInput() {
                                    document.getElementById('paymentInput').style.display = 'none';
                                }

                                function showPaymentInput() {
                                    document.getElementById('paymentInput').style.display = 'block';
                                }
                            </script>


                            <button type="submit" class="site-btn">PLACE ORDER</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

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
                        <li>Address: Doripara, Jamalpur Sadar, Jamalpur</li>
                        <li>Phone: +88 01706821156</li>
                        <li>Email: mr.tubraji@gmail.com</li>
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
                        <a href="https://www.youtube.com/playlist?list=PLc0caqXFxGLyuh_CVADpZZKpCKlmZg9CU" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://www.tiktok.com/@asharaloshop?lang=en&is_from_webapp=1&sender_device=mobile&sender_web_id=7352553370950321682" target="_blank"><i class="fa-brands fa-tiktok"></i></a>                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by Tro  Commerce | Developed by <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.trodev.com" target="_blank">Trodev</a>
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

{{--<script>--}}
{{--    // Function to calculate and update charges--}}
{{--    function updateCharges() {--}}
{{--        console.log("updateCharges function called."); // Debugging line--}}

{{--        // Fetch all total price elements--}}
{{--        const totalPriceElements = document.querySelectorAll('.total-price');--}}
{{--        console.log("Total price elements:", totalPriceElements); // Debugging line--}}

{{--        // Initialize subtotal and total--}}
{{--        let subtotal = 0;--}}
{{--        let deliveryCharge = 0;--}}

{{--        // Calculate subtotal--}}
{{--        totalPriceElements.forEach(function(element) {--}}
{{--            subtotal += parseFloat(element.textContent.replace('TK ', ''));--}}
{{--        });--}}

{{--        console.log("Subtotal:", subtotal); // Debugging line--}}

{{--        // Update subtotal element--}}
{{--        document.getElementById('subtotal').getElementsByTagName('span')[0].textContent = 'TK ' + subtotal.toFixed(2);--}}

{{--        // Get the selected city--}}
{{--        const selectedCity = document.getElementById('citySelect').value;--}}
{{--        console.log("Selected City:", selectedCity); // Debugging line--}}

{{--        // Calculate delivery charge based on the selected city--}}
{{--        switch (selectedCity) {--}}
{{--            case 'Dhaka':--}}
{{--                deliveryCharge = 60;--}}
{{--                break;--}}
{{--            case 'Savar, Dhaka':--}}
{{--            case 'Keraniganj, Dhaka':--}}
{{--            case 'Gazipur':--}}
{{--                deliveryCharge = 100;--}}
{{--                break;--}}
{{--            default:--}}
{{--                deliveryCharge = 120;--}}
{{--                break;--}}
{{--        }--}}

{{--        console.log("Delivery charge:", deliveryCharge); // Debugging line--}}

{{--        // Update delivery charge element--}}
{{--        document.getElementById('deliveryCharge').getElementsByTagName('span')[0].textContent = 'TK ' + deliveryCharge.toFixed(2);--}}

{{--        // Update total--}}
{{--        const total = subtotal + deliveryCharge;--}}
{{--        console.log("Total:", total); // Debugging line--}}
{{--        document.getElementById('total').getElementsByTagName('span')[0].textContent = 'TK ' + total.toFixed(2);--}}
{{--    }--}}

{{--    // Run the function when DOM content is loaded--}}
{{--    document.addEventListener("DOMContentLoaded", updateCharges);--}}


{{--    document.getElementById('citySelect').addEventListener('change', updateCharges);--}}

{{--</script>--}}

</body>

</html>
