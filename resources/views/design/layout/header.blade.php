<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cozastore</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('design/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('design/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('design/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('design/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('design/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('design/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('design/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('design/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('design/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('design/vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('design/vendor/MagnificPopup/magnific-popup.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('design/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('design/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('design/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
        <!-- Header -->
        <header class="header-v3">
            <!-- Header desktop -->
            <div class="container-menu-desktop trans-03">
                <div class="wrap-menu-desktop">
                    <nav class="limiter-menu-desktop p-l-45">
                        
                        <!-- Logo desktop -->		
                        <a href="#" class="logo">
                            <img src="{{ asset('design/images/icons/logo-02.png')}}" alt="IMG-LOGO">
                        </a>
    
                        <!-- Menu desktop -->
                        <div class="menu-desktop">
                            <ul class="main-menu">
                                <li class="active-menu">
                                    <a href="{{ route('index') }}">Home</a>
                                </li>

                                <li>
                                    <a href="product.html">Shop</a>
                                </li>
    
                                <li class="label1" data-label1="hot">
                                    <a href="shoping-cart.html">Features</a>
                                </li>

                                <li>
                                    <a href="about.html">About</a>
                                </li>

                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>	

                        <div class="wrap-icon-header flex-w flex-r-m h-full">
                            <div class="flex-c-m h-full p-r-24">
                                <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
                                    <i class="zmdi zmdi-search"></i>
                                </div>
                            </div>
                                
                            <div class="flex-c-m h-full p-l-18 p-r-25 bor5">
                                <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="{{ Cart::count() }}">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                                
                            <div class="flex-c-m h-full p-lr-19">
                                <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>	
            </div>
    
            <!-- Header Mobile -->
            <div class="wrap-header-mobile">
                <!-- Logo moblie -->		
                <div class="logo-mobile">
                    <a href="index.html"><img src="{{ asset('design/images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
                </div>
    
                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
                    <div class="flex-c-m h-full p-r-10">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>
                    </div>
    
                    <div class="flex-c-m h-full p-lr-10 bor5">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="{{ Cart::count() }}">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                    </div>
                </div>
    
                <!-- Button show menu -->
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>
    
    
            <!-- Menu Mobile -->
            <div class="menu-mobile">
                <ul class="main-menu-m">
                    <li>
                        <a href="index.html">Home</a>
                        <ul class="sub-menu-m">
                            <li><a href="index.html">Homepage 1</a></li>
                            <li><a href="home-02.html">Homepage 2</a></li>
                            <li><a href="home-03.html">Homepage 3</a></li>
                        </ul>
                        <span class="arrow-main-menu-m">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </li>
    
                    <li>
                        <a href="product.html">Shop</a>
                    </li>
    
                    <li>
                        <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
                    </li>
    
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
    
                    <li>
                        <a href="about.html">About</a>
                    </li>
    
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
    
            <!-- Modal Search -->
            <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
                <div class="container-search-header">
                    <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                        <img src="{{ asset('design/images/icons/icon-close2.png')}}" alt="CLOSE">
                    </button>
    
                    <form class="wrap-search-header flex-w p-l-15">
                        <button class="flex-c-m trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                        <input class="plh3" type="text" name="search" placeholder="Search...">
                    </form>
                </div>
            </div>
        </header>
    
        <!-- Sidebar -->
        <aside class="wrap-sidebar js-sidebar">
            <div class="s-full js-hide-sidebar"></div>
    
            <div class="sidebar flex-col-l p-t-22 p-b-25">
                <div class="flex-r w-full p-b-30 p-r-27">
                    <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
                        <i class="zmdi zmdi-close"></i>
                    </div>
                </div>
    
                <div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
                    <ul class="sidebar-link w-full">
                        <li class="p-b-13">
                            <a href="index.html" class="stext-102 cl2 hov-cl1 trans-04">
                                Home
                            </a>
                        </li>
    
                        <li class="p-b-13">
                            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                                My Wishlist
                            </a>
                        </li>
    
                        <li class="p-b-13">
                            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                                My Account
                            </a>
                        </li>
    
                        <li class="p-b-13">
                            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                                Track Oder
                            </a>
                        </li>
    
                        <li class="p-b-13">
                            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                                Refunds
                            </a>
                        </li>
    
                        <li class="p-b-13">
                            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                                Help & FAQs
                            </a>
                        </li>
                    </ul>
    
                    <div class="sidebar-gallery w-full p-tb-30">
                        <span class="mtext-101 cl5">
                            @ CozaStore
                        </span>
    
                        <div class="flex-w flex-sb p-t-36 gallery-lb">
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="{{ asset('design/images/gallery-01.jpg')}}" data-lightbox="gallery" 
                                style="background-image: url('{{ asset('design/images/gallery-01.jpg')}}');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="{{ asset('design/images/gallery-02.jpg')}}" data-lightbox="gallery" 
                                style="background-image: url('{{ asset('design/images/gallery-02.jpg')}}');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="{{ asset('design/images/gallery-03.jpg')}}" data-lightbox="gallery" 
                                style="background-image: url('{{ asset('design/images/gallery-03.jpg')}}');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="{{ asset('design/images/gallery-04.jpg')}}" data-lightbox="gallery" 
                                style="background-image: url('{{ asset('design/images/gallery-04.jpg')}}');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="{{ asset('design/images/gallery-05.jpg')}}" data-lightbox="gallery" 
                                style="background-image: url('{{ asset('design/images/gallery-05.jpg')}}');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="{{ asset('design/images/gallery-06.jpg')}}" data-lightbox="gallery" 
                                style="background-image: url('{{ asset('design/images/gallery-06.jpg')}}');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="{{ asset('design/images/gallery-07.jpg')}}" data-lightbox="gallery" 
                                style="background-image: url('{{ asset('design/images/gallery-07.jpg')}}');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="{{ asset('design/images/gallery-08.jpg')}}" data-lightbox="gallery" 
                                style="background-image: url('{{ asset('design/images/gallery-08.jpg')}}');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="{{ asset('design/images/gallery-09.jpg')}}" data-lightbox="gallery" 
                                style="background-image: url('{{ asset('design/images/gallery-09.jpg')}}');"></a>
                            </div>
                        </div>
                    </div>
    
                    <div class="sidebar-gallery w-full">
                        <span class="mtext-101 cl5">
                            About Us
                        </span>
    
                        <p class="stext-108 cl6 p-t-27">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur maximus vulputate hendrerit. Praesent faucibus erat vitae rutrum gravida. Vestibulum tempus mi enim, in molestie sem fermentum quis. 
                        </p>
                    </div>
                </div>
            </div>
        </aside>
    
    
        <!-- Cart -->
        <div class="wrap-header-cart js-panel-cart">
            <div class="s-full js-hide-cart"></div>
    
            <div class="header-cart flex-col-l p-l-65 p-r-25">
                <div class="header-cart-title flex-w flex-sb-m p-b-8">
                    <span class="mtext-103 cl2">
                        Your Cart
                    </span>
    
                    <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                        <i class="zmdi zmdi-close"></i>
                    </div>
                </div>
                
                <div class="header-cart-content flex-w js-pscroll">
                    <ul class="header-cart-wrapitem w-full">
                        @foreach (Cart::content() as $cart)
                            <li class="header-cart-item flex-w flex-t m-b-12">
                                <div class="header-cart-item-img">
                                    <img src="{{ asset('image/' . $cart->model->image)}}" alt="IMG">
                                </div>
        
                                <div class="header-cart-item-txt p-t-8">
                                    <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                        {{ $cart->name }}
                                    </a>
        
                                    <span class="header-cart-item-info">
                                        1 x $
                                    @if ($cart->model->price_offer)
                                        {{$cart->model->price_offer}}
                                    @else
                                        {{$cart->price}}
                                    @endif
                                    </span>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                    
                    <div class="w-full">
                        <div class="header-cart-total w-full p-tb-40">
                            Total: {{ Cart::total() }}
                        </div>
    
                        <div class="header-cart-buttons flex-w w-full">
                            <a href="{{ route('cart.index') }}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                                View Cart
                            </a>
    
                            <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                                Check Out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    