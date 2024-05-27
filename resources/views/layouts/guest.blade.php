<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

         <!-- CSS here -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/fontawesome.min.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/css/meanmenu.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/default.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">


    </head>
    <body>
           <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- preloader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>


     <!-- header section start -->
     <header class="header pt-30 pb-30 header-sticky header-static" style="padding-top: 30px; padding-bottom: 15px; top: 0px;">
        <div class="container-fluid">
            <div class="header-nav position-relative">
                    <div class="row align-items-center">


                        <div class="col-xl-5 col-lg-6 hidden-md position-static">
                            <div class="header-nav">
                                <nav>
                                    <ul>
                                        <li><a href="javascript:void(0)" class="active"><span>Home  <i class="fal fa-angle-down"></i></span></a>

                                            <ul class="submenu">
                                                <li><a href="index.html">Home Fashion 1</a></li>
                                                <li><a href="index2.html">Home Fashion 2</a></li>
                                                <li><a href="index3.html">Home Fashion 3</a></li>
                                                <li><a href="index4.html">Home Fashion 4</a></li>
                                                <li><a href="index5.html">Home Fashion 5</a></li>
                                                <li><a href="index6.html">Home Fashion 6</a></li>
                                                <li><a href="index7.html">Home Fashion 7</a></li>

                                            </ul>
                                        </li>
                                        <li class="position-static"><a href="javascript:void(0)"><span>Shop  <i class="fal fa-angle-down"></i></span></a>
                                            <div class="mega-menu">
                                                <div class="pl-0 col-xl-7 position-static">
                                                    <ul>
                                                        <li><a href="shop.html">Shop Layout</a></li>
                                                        <li><a href="shop4.html">Masonry – Grid</a></li>
                                                        <li><a href="shop3.html">Pagination</a></li>
                                                        <li><a href="shop2.html">Ajax Load More</a></li>
                                                        <li><a href="shop2.html">Infinite Scroll</a></li>
                                                        <li><a href="shop2.html">Sidebar Right</a></li>
                                                        <li><a href="shop.html">Sidebar Left</a></li>
                                                    </ul>

                                                    <ul>
                                                        <li><a href="shop.html">Shop Pages</a></li>
                                                        <li><a href="shop2.html">List View</a></li>
                                                        <li><a href="shop3.html">Small Products</a></li>
                                                        <li><a href="shop2.html">Large Products</a></li>
                                                        <li><a href="shop3.html">Shop — 3 Items</a></li>
                                                        <li><a href="shop3.html">Shop — 4 Items</a></li>
                                                        <li><a href="shop4.html">Shop — 5 Items</a></li>
                                                    </ul>

                                                    <ul>
                                                        <li><a href="single-product-2.html">Product Layout</a></li>
                                                        <li><a href="single-product.html">Description Sticky</a></li>
                                                        <li><a href="single-product-2.html">Product Carousels</a></li>
                                                        <li><a href="single-product-3.html">Gallery Modern</a></li>
                                                        <li><a href="single-product-4.html">Thumbnail Left</a></li>
                                                        <li><a href="single-product-5.html">Thumbnail Right</a></li>
                                                        <li><a href="single-product-6.html">Thumbnail Botttom</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="javascript:void(0)"><span>Blog <i class="fal fa-angle-down"></i></span> </a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Grid layout</a></li>
                                                <li><a href="blog2.html">Large image</a></li>
                                                <li><a href="blog3.html">Left Sidebar</a></li>
                                                <li><a href="blog4.html">Right Sidebar</a></li>
                                                <li><a href="blog5.html">No sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)"><span>Portfolio <i class="fal fa-angle-down"></i></span> </a>
                                            <ul class="submenu">
                                                <li><a href="portfolio.html">Single project</a></li>
                                                <li><a href="portfolio2.html">Two Columns</a></li>
                                                <li><a href="portfolio3.html">Three Columns</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)"><span>Page</span> <i class="fal fa-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="question.html">Frequently Questions</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html"><span>Contact</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-3">
                            <div class="logo">
                                <a href="index3.html"><img src="img/logo/logo1.png" alt=""></a>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-3 col-6 col-md-6 col-sm-6 col-9">
                            <div class="header-right">
                                <ul class="text-right">
                                    <li><a href="login.html" class="account"><i class="fal fa-user-friends"></i> <article class="account-registar d-inline-block">Login/Sign up</article></a></li>
                                    <li><a href="javascript:void(0)"><i class="fal fa-search"></i></a>

                                        <!-- search popup -->
                                        <div id="search-popup">
                                            <div class="close-search-popup">
                                                <i class="fal fa-times"></i>
                                            </div>
                                            <div class="search-popup-inner mt-135">
                                                <div class="text-center search-title">
                                                    <h2>Search</h2>
                                                </div>

                                                <div class="search-content pt-55">
                                                    <ul class="text-center">
                                                        <li><a href="javascript:void(0)" class="active">All categories</a></li>
                                                        <li><a href="javascript:void(0)">Clothing</a></li>
                                                        <li><a href="javascript:void(0)">Gift Cards</a></li>
                                                        <li><a href="javascript:void(0)">Handbag</a></li>
                                                        <li><a href="javascript:void(0)">Kids</a></li>
                                                        <li><a href="javascript:void(0)">Shoes</a></li>
                                                        <li><a href="javascript:void(0)">Sneaker</a></li>
                                                        <li><a href="javascript:void(0)">Women</a></li>
                                                    </ul>

                                                    <div class="search-form mt-35">
                                                        <form action="#" method="post">
                                                            <input type="text" placeholder="Search Products...">
                                                            <button type="submit"><i class="fal fa-search"></i></button>
                                                        </form>
                                                    </div>

                                                    <div class="search-result-list">
                                                        <ul class="text-left">
                                                            <li class="d-block d-flex align-items-center">
                                                                <div class="search-result-img">
                                                                    <img src="img/product/1.jpg" class="w-100" alt="">
                                                                </div>
                                                                <div class="pl-10 search-result-desc">
                                                                    <a href="single-product-4.html" class="px-0 title">ELLE  - Recliner syntheti chair</a>
                                                                    <div class="price">$<span>399</span></div>
                                                                </div>
                                                            </li>
                                                            <li class="d-block d-flex align-items-center">
                                                                <div class="search-result-img">
                                                                    <img src="img/product/2.jpg" class="w-100" alt="">
                                                                </div>
                                                                <div class="pl-10 search-result-desc">
                                                                    <a href="single-product-4.html" class="px-0 title">RIMINI  - Folding leather deck chair</a>
                                                                    <div class="price">$<span>399</span></div>
                                                                </div>
                                                            </li>
                                                            <li class="d-block d-flex align-items-center">
                                                                <div class="search-result-img">
                                                                    <img src="img/product/3.jpg" class="w-100" alt="">
                                                                </div>
                                                                <div class="pl-10 search-result-desc">
                                                                    <a href="single-product-4.html" class="px-0 title">LANDSCAPE  - Folding fabric deck chair</a>
                                                                    <div class="price">$<span>399</span></div>
                                                                </div>
                                                            </li>
                                                            <li class="d-block d-flex align-items-center">
                                                                <div class="search-result-img">
                                                                    <img src="img/product/1.jpg" class="w-100" alt="">
                                                                </div>
                                                                <div class="pl-10 search-result-desc">
                                                                    <a href="single-product-4.html" class="px-0 title">ELLE  - Recliner syntheti chair</a>
                                                                    <div class="price">$<span>399</span></div>
                                                                </div>
                                                            </li>
                                                            <li class="d-block d-flex align-items-center">
                                                                <div class="search-result-img">
                                                                    <img src="img/product/2.jpg" class="w-100" alt="">
                                                                </div>
                                                                <div class="pl-10 search-result-desc">
                                                                    <a href="single-product-4.html" class="px-0 title">RIMINI  - Folding leather deck chair</a>
                                                                    <div class="price">$<span>399</span></div>
                                                                </div>
                                                            </li>
                                                            <li class="d-block d-flex align-items-center">
                                                                <div class="search-result-img">
                                                                    <img src="img/product/3.jpg" class="w-100" alt="">
                                                                </div>
                                                                <div class="pl-10 search-result-desc">
                                                                    <a href="single-product-4.html" class="px-0 title">LANDSCAPE  - Folding fabric deck chair</a>
                                                                    <div class="price">$<span>399</span></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="wishlist.html" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="view wishlist"><i class="fal fa-heart"><span>0</span></i></a></li>
                                    <li><a href="/mycart"><i class="fal fa-shopping-bag"><span>5</span></i></a>
                                        <div class="minicart">
                                            <div class="minicart-body">
                                                <div class="minicart-content">
                                                    <ul class="text-left">
                                                        <li>
                                                            <div class="minicart-img">
                                                                <a href="single-product-4.html" class="p-0"><img src="img/product/1.jpg" class="w-100" alt=""></a>
                                                            </div>
                                                            <div class="minicart-desc">
                                                                <a href="single-product-4.html" class="p-0">Capitalize on low hanging fruit t</a>
                                                                <strong>1 × $250.00</strong>
                                                            </div>
                                                            <div class="remove">
                                                                <i class="fal fa-times"></i>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="minicart-img">
                                                                <a href="single-product-4.html" class="p-0"><img src="img/product/2.jpg" class="w-100" alt=""></a>
                                                            </div>
                                                            <div class="minicart-desc">
                                                                <a href="single-product-4.html" class="p-0">Leather Courriere duffle ba</a>
                                                                <strong>1 × $150.00</strong>
                                                            </div>
                                                            <div class="remove">
                                                                <i class="fal fa-times"></i>
                                                            </div>
                                                        </li>


                                                        <li>
                                                            <div class="minicart-img">
                                                                <a href="single-product-4.html" class="p-0"><img src="img/product/3.jpg" class="w-100" alt=""></a>
                                                            </div>
                                                            <div class="minicart-desc">
                                                                <a href="single-product-4.html" class="p-0">Party Supplies Around Cupcake</a>
                                                                <strong>1 × $150.00</strong>
                                                            </div>
                                                            <div class="remove">
                                                                <i class="fal fa-times"></i>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="minicart-checkout">
                                                <div class="mt-8 overflow-hidden minicart-checkout-heading mb-25">
                                                    <strong class="float-left">Subtotal:</strong>
                                                    <span class="float-right price">503.00</span>
                                                </div>
                                                <div class="minicart-checkout-links">
                                                    <a href="/mycart" class="mb-20 generic-btn black-hover-btn text-uppercase w-100">View cart</a>
                                                    <a href="/checkout" class="mb-20 generic-btn black-hover-btn text-uppercase w-100">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="fal fa-align-right"></i></a>
                                        <ul class="text-right submenu bold-content">
                                            <li><a href="login.html">My Account</a></li>
                                            <li><a href="/checkout">Checkout</a></li>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="question.html">Frequently</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="mobile-menu visible-sm">
                <div id="mobile-menu">
                    <ul>
                        <li><a  class="pl-3" href="javascript:void(0)">Home</a>
                            <ul class="pl-4">
                                <li><a href="index.html">Home Fashion 1</a></li>
                                <li><a href="index2.html">Home Fashion 2</a></li>
                                <li><a href="index3.html">Home Fashion 3</a></li>
                                <li><a href="index4.html">Home Fashion 4</a></li>
                                <li><a href="index5.html">Home Fashion 5</a></li>
                                <li><a href="index6.html">Home Fashion 6</a></li>
                                <li><a href="index7.html">Home Fashion 7</a></li>

                            </ul>
                        </li>
                        <li><a  class="pl-3" href="javascript:void(0)">Shop</a>
                            <ul>
                                <li><a href="shop.html">Shop Layout</a></li>
                                <li><a href="shop4.html">Masonry – Grid</a></li>
                                <li><a href="shop3.html">Pagination</a></li>
                                <li><a href="shop2.html">Ajax Load More</a></li>
                                <li><a href="shop2.html">Infinite Scroll</a></li>
                                <li><a href="shop2.html">Sidebar Right</a></li>
                                <li><a href="shop.html">Sidebar Left</a></li>
                                <li><a href="shop.html">Shop Pages</a></li>
                                <li><a href="shop2.html">List View</a></li>
                                <li><a href="shop3.html">Small Products</a></li>
                                <li><a href="shop2.html">Large Products</a></li>
                                <li><a href="shop3.html">Shop — 3 Items</a></li>
                                <li><a href="shop3.html">Shop — 4 Items</a></li>
                                <li><a href="shop4.html">Shop — 5 Items</a></li>
                                <li><a href="single-product-2.html">Product Layout</a></li>
                                <li><a href="single-product.html">Description Sticky</a></li>
                                <li><a href="single-product-2.html">Product Carousels</a></li>
                                <li><a href="single-product-3.html">Gallery Modern</a></li>
                                <li><a href="single-product-4.html">Thumbnail Left</a></li>
                                <li><a href="single-product-5.html">Thumbnail Right</a></li>
                                <li><a href="single-product-6.html">Thumbnail Botttom</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Blog</a>
                            <ul>
                                <li><a href="blog.html">Grid layout</a></li>
                                <li><a href="blog2.html">Large image</a></li>
                                <li><a href="blog3.html">Left Sidebar</a></li>
                                <li><a href="blog4.html">Right Sidebar</a></li>
                                <li><a href="blog5.html">No sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Portfolio</a>
                            <ul>
                                <li><a href="portfolio.html">Single project</a></li>
                                <li><a href="portfolio2.html">Two Columns</a></li>
                                <li><a href="portfolio3.html">Three Columns</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- /. mobile nav -->
        </div>
    </header>
    <!-- header section end -->



        <main>


        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area" data-background="img/bg/page-title.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-content" style="flex-direction: column;">
                            <nav aria-label="breadcrumb">
                                <ol class="p-0 m-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="index5.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                                </ol>
                            </nav>
                         <h2 class="mt-40 login-title">Login</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

      <!-- login Area Strat-->
      <section class="login-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

            {{ $slot }}

                </div>
            </div>
        </div>

  </section>
        </main>



    <!-- footer section start -->
    <div class="footer-bottom pt-77" style="background-color: #292929;">
        <div class="container-1180">
            <div class="footer-bottom-wrapper">
                <div class="footer-bottom-primary pb-60">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-9">
                            <div class="footer-item has-desc">
                                <div class="footer-logo mb-25">
                                    <img src="img/logo/logo2.png" width="120" height="31" alt="">
                                </div>
                                <div class="footer-desc">
                                    <p class="mb-10">Mazia store is a premium theme with advanced admin module. It’s extremely customizable, easy to use and fully responsive and retina ready.</p>
                                </div>
                                <div class="footer-img mt-65">
                                    <img src="img/logo/paypal.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="footer-menu">
                                        <ul>
                                            <li><a href="javascript:void(0)" class="title">MY ACCOUNT</a></li>
                                            <li><a href="login.html">My account</a></li>
                                            <li><a href="/checkout">Checkout</a></li>
                                            <li><a href="shop2.html">Shop</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="question.html">Frequently</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="footer-menu">
                                        <ul>
                                            <li><a href="javascript:void(0)" class="title">Quick Links</a></li>
                                            <li><a href="shop2.html">Special Offers</a></li>
                                            <li><a href="shop2.html">Gift Cards</a></li>
                                            <li><a href="shop2.html">F21 Red</a></li>
                                            <li><a href="about.html">Privacy Policy</a></li>
                                            <li><a href="about.html">Teams of Use</a></li>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 hidden-sm">
                                    <div class="footer-menu">
                                        <ul>
                                            <li><a href="javascript:void(0)" class="title">Company Info</a></li>
                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="blog.html">Careers</a></li>
                                            <li><a href="portfolio2.html">Business With Us</a></li>
                                            <li><a href="shop2.html">Find a Store</a></li>
                                            <li><a href="question.html">Teams of Use</a></li>
                                            <li><a href="portfolio3.html">Press &amp; Talent</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->



        @livewireScripts





    <!-- JS here -->
    <script src="/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/one-page-nav-min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/jquery.meanmenu.min.js"></script>
    <script src="/js/ajax-form.js"></script>
    <script src="/js/fontawesome.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/jquery.scrollUp.min.js"></script>
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/cartjs.js"></script>


    </body>
</html>
