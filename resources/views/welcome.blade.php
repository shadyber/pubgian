<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    		<!-- CSS here -->
            <link rel="stylesheet" href="/css/bootstrap.min.css">
            <link rel="stylesheet" href="/css/owl.carousel.min.css">
            <link rel="stylesheet" href="/css/fontawesome.min.css">
            <link rel="stylesheet" href="/css/animate.min.css">
            <link rel="stylesheet" href="/css/magnific-popup.css">
            <link rel="stylesheet" href="/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="/css/meanmenu.css">
            <link rel="stylesheet" href="/css/slick.css">
            <link rel="stylesheet" href="/css/default.css">
            <link rel="stylesheet" href="/css/style.css">
            <link rel="stylesheet" href="/css/responsive.css">

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

             <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

            <!-- preloader -->
            <div id="loader-wrapper">
                <div id="loader"></div>
            </div>


            <div class="min-h-screen bg-gray-100 ">
                @livewire('navigation-menu')

                <!-- Page Heading -->
                    @if (isset($header))
                    <!-- breadcrumb-area-start -->

                <section class="breadcrumb-area" data-background="/img/bg/page-title.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="breadcrumb-content" style="flex-direction: column;">
                                    <nav aria-label="breadcrumb">
                                        <ol class="p-0 m-0 breadcrumb">
                                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{ $header }}</li>
                                        </ol>
                                    </nav>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                @endif

                <!-- Page Content -->
                <main>
@include('slider')
@include('banner')




<!-- our products section start -->
<section class="our-products mt-120">
    <div class="container">
        <div class="text-center generic-title">
            <h2 class="mb-20">#Our Items</h2>
            <p>Feel Free to choose any product in our shop </p>
            <p>and you can order anytime.</p>
        </div>
        <ul class="mb-3 nav nav-pills nav-2 pl-15 left-tab-link justify-content-center mt-65" >
            <li class="nav-item">
              <a class="active" data-toggle="pill" href="#main-tab-1">Vertual Coins <sup>(15)</sup></a>
            </li>
            <li class="nav-item">
              <a class="" data-toggle="pill" href="#main-tab-2">Accessories <sup>(10)</sup></a>
            </li>
            <li class="nav-item">
              <a class=""  data-toggle="pill" href="#main-tab-3">Devices <sup>(18)</sup></a>
            </li>
        </ul>

        <div class="tab-content mt-25">

            <div class="tab-pane fade show active" id="main-tab-1">
                <div class="product-content-inner">
                    <div class="product-grid">
                        <div class="row">

                            <div class="col-xl-6">
                                <div class="product-grid-left">
                                    <div class="row">
                                        @foreach(\App\Models\Item::popularNCategory(9,1) as $it1)

                                        <div class="@if(($it1->id%3) !=0) col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 @else col-xl-12 @endif">
                                            <div class="mb-40 product-box position-relative middle-view">
                                                <div class="product-box-wrapper">
                                                    <div class="product-img">
                                                        <img src="{{$it1->thumb}}" class="w-100" alt="">
                                                        <a href="{{$it1->slug}}" class="d-block"><div class="second-img">
                                                            <img src="{{$it1->photo}}" alt="" class="w-100">
                                                        </div></a>
                                                        <a href="javascript:void(0)" class="product-img-link quick-view-1 text-capitalize eright-turquoise-color-hover">Quick view</a>
                                                    </div>

                                                    <div class="product-desc">
                                                        <div class="product-desc-top">
                                                            <div class="categories">
                                                                <a href="/cattegory/{{$it1->category->slug}}" class="product-category"><span>{{$it1->category->title}}</span></a>

                                                            </div>
                                                            <a href="#wishlist" class="float-right wishlist"><span><i class="fal fa-heart"></i></span></a>
                                                        </div>
                                                        <a href="/item/{{$it1->slug}}" class="product-title eright-turquoise-color-hover">{{$it1->name}}</a>
                                                        <div class="price-switcher">
                                                                <span class="price switcher-item">$ETB {{$it1->price}}</span>
                                                                <a href="#add-to-cart" class="add-to-cart text-capitalize switcher-item" >+add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                            <!-- /. product grid left -->
                            <div class="col-xl-6">
                                <div class="product-grid-right">
                                    <div class="row">
                                        @foreach(\App\Models\Item::lastNCategory(9,2) as $it1)

                                            <div class="@if(($it1->id%3) !=0) col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 @else col-xl-12 @endif">
                                                <div class="mb-40 product-box position-relative middle-view">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="{{$it1->thumb}}" class="w-100" alt="">
                                                            <a href="{{$it1->slug}}" class="d-block"><div class="second-img">
                                                                    <img src="{{$it1->photo}}" alt="" class="w-100">
                                                                </div></a>
                                                            <a href="javascript:void(0)" class="product-img-link quick-view-1 text-capitalize eright-turquoise-color-hover">Quick view</a>
                                                        </div>

                                                        <div class="product-desc">
                                                            <div class="product-desc-top">
                                                                <div class="categories">
                                                                    <a href="/cattegory/{{$it1->category->slug}}" class="product-category"><span>{{$it1->category->title}}</span></a>

                                                                </div>
                                                                <a href="#wishlist" class="float-right wishlist"><span><i class="fal fa-heart"></i></span></a>
                                                            </div>
                                                            <a href="/item/{{$it1->slug}}" class="product-title eright-turquoise-color-hover">{{$it1->name}}</a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$ETB {{$it1->price}}</span>
                                                                <a href="#add-to-cart" class="add-to-cart text-capitalize switcher-item" >+add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- /. product grid right -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade pl-15" id="main-tab-2">

            <div class="product-grid">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="product-grid-left">
                                    <div class="row">
                                        @foreach(\App\Models\Item::lastNCategory(9,2) as $it1)

                                            <div class="@if(($it1->id%3) !=0) col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 @else col-xl-12 @endif">
                                                <div class="mb-40 product-box position-relative middle-view">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="{{$it1->thumb}}" class="w-100" alt="">
                                                            <a href="{{$it1->slug}}" class="d-block"><div class="second-img">
                                                                    <img src="{{$it1->photo}}" alt="" class="w-100">
                                                                </div></a>
                                                            <a href="javascript:void(0)" class="product-img-link quick-view-1 text-capitalize eright-turquoise-color-hover">Quick view</a>
                                                        </div>

                                                        <div class="product-desc">
                                                            <div class="product-desc-top">
                                                                <div class="categories">
                                                                    <a href="/cattegory/{{$it1->category->slug}}" class="product-category"><span>{{$it1->category->title}}</span></a>

                                                                </div>
                                                                <a href="#wishlist" class="float-right wishlist"><span><i class="fal fa-heart"></i></span></a>
                                                            </div>
                                                            <a href="/item/{{$it1->slug}}" class="product-title eright-turquoise-color-hover">{{$it1->name}}</a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$ETB {{$it1->price}}</span>
                                                                <a href="#add-to-cart" class="add-to-cart text-capitalize switcher-item" >+add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <!-- /. product grid left -->
                            <div class="col-xl-6">
                                <div class="product-grid-right">
                                    <div class="row">
                                        @foreach(\App\Models\Item::popularNCategory(9,2) as $it1)

                                            <div class="@if(($it1->id%3) !=0) col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 @else col-xl-12 @endif">
                                                <div class="mb-40 product-box position-relative middle-view">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="{{$it1->thumb}}" class="w-100" alt="">
                                                            <a href="{{$it1->slug}}" class="d-block"><div class="second-img">
                                                                    <img src="{{$it1->photo}}" alt="" class="w-100">
                                                                </div></a>
                                                            <a href="javascript:void(0)" class="product-img-link quick-view-1 text-capitalize eright-turquoise-color-hover">Quick view</a>
                                                        </div>

                                                        <div class="product-desc">
                                                            <div class="product-desc-top">
                                                                <div class="categories">
                                                                    <a href="/cattegory/{{$it1->category->slug}}" class="product-category"><span>{{$it1->category->title}}</span></a>

                                                                </div>
                                                                <a href="#wishlist" class="float-right wishlist"><span><i class="fal fa-heart"></i></span></a>
                                                            </div>
                                                            <a href="/item/{{$it1->slug}}" class="product-title eright-turquoise-color-hover">{{$it1->name}}</a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$ETB {{$it1->price}}</span>
                                                                <a href="#add-to-cart" class="add-to-cart text-capitalize switcher-item" >+add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <!-- /. product grid right -->
                        </div>
                    </div>

                </div>

            <div class="tab-pane fade pl-15" id="main-tab-3">
               <div class="product-grid">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="product-grid-left">
                                    <div class="row">
                                        @foreach(\App\Models\Item::popularNCategory(9,3) as $it1)

                                            <div class="@if(($it1->id%3) !=0) col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 @else col-xl-12 @endif">
                                                <div class="mb-40 product-box position-relative middle-view">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="{{$it1->thumb}}" class="w-100" alt="">
                                                            <a href="{{$it1->slug}}" class="d-block"><div class="second-img">
                                                                    <img src="{{$it1->photo}}" alt="" class="w-100">
                                                                </div></a>
                                                            <a href="javascript:void(0)" class="product-img-link quick-view-1 text-capitalize eright-turquoise-color-hover">Quick view</a>
                                                        </div>

                                                        <div class="product-desc">
                                                            <div class="product-desc-top">
                                                                <div class="categories">
                                                                    <a href="/cattegory/{{$it1->category->slug}}" class="product-category"><span>{{$it1->category->title}}</span></a>

                                                                </div>
                                                                <a href="#wishlist" class="float-right wishlist"><span><i class="fal fa-heart"></i></span></a>
                                                            </div>
                                                            <a href="/item/{{$it1->slug}}" class="product-title eright-turquoise-color-hover">{{$it1->name}}</a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$ETB {{$it1->price}}</span>
                                                                <a href="#add-to-cart" class="add-to-cart text-capitalize switcher-item" >+add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <!-- /. product grid left -->
                            <div class="col-xl-6">
                                <div class="product-grid-right">
                                    <div class="row">
                                        @foreach(\App\Models\Item::lastNCategory(9,3) as $it1)

                                            <div class="@if(($it1->id%3) !=0) col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 @else col-xl-12 @endif">
                                                <div class="mb-40 product-box position-relative middle-view">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="{{$it1->thumb}}" class="w-100" alt="">
                                                            <a href="{{$it1->slug}}" class="d-block"><div class="second-img">
                                                                    <img src="{{$it1->photo}}" alt="" class="w-100">
                                                                </div></a>
                                                            <a href="javascript:void(0)" class="product-img-link quick-view-1 text-capitalize eright-turquoise-color-hover">Quick view</a>
                                                        </div>

                                                        <div class="product-desc">
                                                            <div class="product-desc-top">
                                                                <div class="categories">
                                                                    <a href="/cattegory/{{$it1->category->slug}}" class="product-category"><span>{{$it1->category->title}}</span></a>

                                                                </div>
                                                                <a href="#wishlist" class="float-right wishlist"><span><i class="fal fa-heart"></i></span></a>
                                                            </div>
                                                            <a href="/item/{{$it1->slug}}" class="product-title eright-turquoise-color-hover">{{$it1->name}}</a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$ETB {{$it1->price}}</span>
                                                                <a href="#add-to-cart" class="add-to-cart text-capitalize switcher-item" >+add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <!-- /. product grid right -->
                        </div>
                    </div>
            </div>
        </div>
    </div>
<div class="container gray-border-bottom pb-110 load-btn">
        <div class="text-center mt-60">
            <a href="/shop" class="load-more">MORE PRODUCTS</a>
       </div>
    </div>


</section>
<!-- new arrival section end -->




  </main>

                @include('footer')
            </div>
            @stack('modals')

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
