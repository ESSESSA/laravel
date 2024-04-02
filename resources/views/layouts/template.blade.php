<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from template.hasthemes.com/flone/flone/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Dec 2021 08:47:56 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('titre')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/icons.min.css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
<header class="header-area clearfix header-hm8">
    <div class="header-top-area header-padding-2">
        <div class="container-fluid">
            <div class="header-top-wap">
                <div class="language-currency-wrap">
                    <div class="same-language-currency language-style">
                        <a href="('#">English <i class="fa fa-angle-down"></i></a>
                        <div class="lang-car-dropdown">
                            <ul>
                                <li><a href="('#">Arabic </a></li>
                                <li><a href="('#">Bangla </a></li>
                                <li><a href="('#">Hindi  </a></li>
                                <li><a href="('#">Spanish </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="same-language-currency use-style">
                        <a href="('#">USD  <i class="fa fa-angle-down"></i></a>
                        <div class="lang-car-dropdown">
                            <ul>
                                <li><a href="('#">Taka (BDT) </a></li>
                                <li><a href="('#">Riyal (SAR) </a></li>
                                <li><a href="('#">Rupee (INR)  </a></li>
                                <li><a href="('#">Dirham (AED) </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="same-language-currency">
                        <p>Call Us 3965410</p>
                    </div>
                </div>
                <div class="header-right-wrap">
                    <div class="same-style header-search">
                        <a class="search-active" href="('#"><i class="pe-7s-search"></i></a>
                        <div class="search-content">
                            <form action="#">
                                <input type="text" placeholder="Search" />
                                <button class="button-search"><i class="pe-7s-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="same-style account-satting">
                        <a class="account-satting-active" href="('#"><i class="pe-7s-user-female"></i></a>
                        <div class="account-dropdown">
                            <ul>
                                <li><a href="('login-register.html">Login</a></li>
                                <li><a href="('login-register.html">Register</a></li>
                                <li><a href="('wishlist.html">Wishlist  </a></li>
                                <li><a href="('my-account.html">my account</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="same-style header-wishlist">
                        <a href="('wishlist.html"><i class="pe-7s-like"></i></a>
                    </div>
                    <div class="same-style cart-wrap">
                        <button class="icon-cart">
                            <i class="pe-7s-shopbag"></i>
                            <span class="count-style">02</span>
                        </button>
                        <div class="shopping-cart-content">
                            <ul>
                                <li class="single-shopping-cart">
                                    <div class="shopping-cart-img">
                                        <a href="('#"><img alt="" src="{{asset('assets/img/cart/cart-1.png')}}"></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h4><a href="('#">T- Shart & Jeans </a></h4>
                                        <h6>Qty: 02</h6>
                                        <span>$260.00</span>
                                    </div>
                                    <div class="shopping-cart-delete">
                                        <a href="('#"><i class="fa fa-times-circle"></i></a>
                                    </div>
                                </li>
                                <li class="single-shopping-cart">
                                    <div class="shopping-cart-img">
                                        <a href="('#"><img alt="" src="{{asset('assets/img/cart/cart-2.png')}}"></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h4><a href="('#">T- Shart & Jeans </a></h4>
                                        <h6>Qty: 02</h6>
                                        <span>$260.00</span>
                                    </div>
                                    <div class="shopping-cart-delete">
                                        <a href="('#"><i class="fa fa-times-circle"></i></a>
                                    </div>
                                </li>
                            </ul>
                            <div class="shopping-cart-total">
                                <h4>Shipping : <span>$20.00</span></h4>
                                <h4>Total : <span class="shop-total">$260.00</span></h4>
                            </div>
                            <div class="shopping-cart-btn btn-hover text-center">
                                <a class="default-btn" href="{{ route('panier.panier')}}">view cart</a>
                                <a class="default-btn" href="('checkout.html')">checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar header-res-padding header-padding-2">
        <div class="container">
            <div class="row">
   @include('layouts.logo')
                <div class="col-xl-12 col-lg-12 d-none d-lg-block">
                    <div class="main-menu">
   @include('layouts.navbar')
                    </div>
                </div>
            </div>
   @include('layouts.headerright')
        </div>
    </div>
</header>


<!-- contenue -->
@yield("contenu")

<!-- footer -->
<footer class="footer-area pb-70">
    <div class="container">
        <div class="footer-border pt-100">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="copyright mb-30">
                        <div class="footer-logo">
                            <a href="('index.html">
                                <img alt="" src="{{asset('assets/img/logo/logo.png')}}">
                            </a>
                        </div>
                        <p>© 2021 <a href="('#">Flone</a>.<br> All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="footer-widget mb-30 ml-30">
                        <div class="footer-title">
                            <h3>ABOUT US</h3>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="('about.html">About us</a></li>
                                <li><a href="('#">Store location</a></li>
                                <li><a href="('contact.html">Contact</a></li>
                                <li><a href="('#">Orders tracking</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="footer-widget mb-30 ml-50">
                        <div class="footer-title">
                            <h3>USEFUL LINKS</h3>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="('#">Returns</a></li>
                                <li><a href="('#">Support Policy</a></li>
                                <li><a href="('#">Size guide</a></li>
                                <li><a href="('#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget mb-30 ml-75">
                        <div class="footer-title">
                            <h3>FOLLOW US</h3>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="('#">Facebook</a></li>
                                <li><a href="('#">Twitter</a></li>
                                <li><a href="('#">Instagram</a></li>
                                <li><a href="('#">Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-widget mb-30 ml-70">
                        <div class="footer-title">
                            <h3>SUBSCRIBE</h3>
                        </div>
                        <div class="subscribe-style">
                            <p>Get E-mail updates about our latest shop and special offers.</p>
                            <div class="subscribe-form">
                                <form class="validate" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                    <div class="mc-form">
                                        <input class="email" type="email" required="" placeholder="Enter your email here.." name="EMAIL" value="">
                                        <div class="mc-news" aria-hidden="true">
                                            <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                        </div>
                                        <div class="clear">
                                            <input class="button" type="submit" name="subscribe" value="Subscribe">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- All JS is here
============================================ -->

<script src="{{asset('assets/js/vendor/jquery-v3.6.0.min.js ')}}"></script>
<script src="{{asset('assets/js/vendor/modernizr-3.11.7.min.js ')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-v3.3.2.min.js ')}}"></script>
<script src="{{asset('assets/js/vendor/popper.min.js ')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js ')}}"></script>
<script src="{{asset('assets/js/plugins.js ')}}"></script>
<!-- Ajax Mail -->
<script src="{{asset('assets/js/ajax-mail.js ')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/main.js ')}}"></script>
</body>
</html>
