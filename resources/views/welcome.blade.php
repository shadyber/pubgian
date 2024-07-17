<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome {{env('APP_NAME','Shegerstor')}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <meta property="og:title" content="Addisstor The Ultimate Gaming Store for Gamers for Ethiopians and For African" />
        <meta property="og:tags" content="addisstor, addisstore , gamming , headset , uc , pubg , mobile, laptop , electronics , shop in ethiopia, addis ababa, gamming shope, addis store" />
        <meta property="og:description" content="GAMES, COMMUNITY AND DIGITAL EXPERIENCES, CREATED WITH AMBITION, INNOVATION, AND CARE. shegerstore is Your All in one Shopping place from home.
" />
        <meta property="og:image" content="https://shegerstor.com/img/slider/20.jpg" />

        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">


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
            <div id="loader-wrapper" class="flex items-center justify-center">
                <div class="loader"></div>
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


<div class="container">

        <div class="container py-5">
            <div class="row">

                @foreach(\App\Models\Item::lastN(12) as $it)
                 <div class="col-md-3 col-sm-6 col-lg-3 pb-3 mb-2">
                     <article class="max-w-sm w-full bg-white rounded-lg shadow-lg overflow-hidden dark:bg-gray-700">
                           <span class="position-absolute top-0 right-0
                         translate-middle p-3 m-2 rounded-pill
                         border border-light
                         badge">
                <span class="visually-hidden">
                {{$it->badge}}
                </span>
            </span>
                         <a href="/item/{{$it->slug}}">

                         <div>
                             <img class="object-cover h-64 w-full" src="{{$it->thumb}}" alt="{{$it->name}}" />
                         </div>
                         </a>
                         <a href="/item/{{$it->slug}}">
                         <div class="flex flex-col gap-1 mt-4 px-4">
                             <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-50">{{substr($it->name, 0,64)}}</h2>
                             <span class="font-normal text-gray-600 dark:text-gray-300">{{$it->category->title}}</span>
                             <span class="font-semibold text-gray-800 dark:text-gray-50">$ETB {{$it->price}}</span>
                         </div>
                         </a>


                         <div class="mt-4 p-4 border-t border-gray-200 dark:border-gray-500">
                             <button class="w-full flex justify-between items-center font-bold cursor-pointer hover:underline text-gray-800 dark:text-gray-50">
                                 <span class="text-base"> <a href="#">Add to Wishlist</a></span>
                                 @livewire('add-to-cart-component', ['itemid' => $it->id])
                             </button>
                         </div>
                     </article>
                 </div>
                @endforeach





            </div>
        </div>


</div>


<div class="container gray-border-bottom pb-110 load-btn">
        <div class="text-center mt-60">
            <a href="/shop" class="load-more">MORE PRODUCTS</a>
       </div>
    </div>

    </div>
</section>
<!-- new arrival section end -->



  </main>

                @include('footer')
            </div>
            @stack('modals')

            @livewireScripts


             <script type="text/javascript">
                 function addCartCounter (itemid) {
                     var cart_counter=document.getElementById('cart-counter');

                     cart_counter.innerText++;



                     var callerbtn=document.getElementsByClassName('item'+itemid);


                     for(var i = 0; i < callerbtn.length; i++)
                     {


                         callerbtn[i].innerHTML='<i class="fa fa-check-double"></i> Add to Cart'


                     }



                 }
             </script>


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
             <script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>

             <script type="text/javascript">
                 aclib.runAutoTag({
                     zoneId: 'ccyux5g1bm',
                 });
             </script>

    </body>
    </html>
