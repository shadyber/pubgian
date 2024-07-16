<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Sheger Store') }}</title>

        {!! SEOMeta::generate() !!}
        {!! OpenGraph::generate() !!}
        {!! Twitter::generate() !!}
        {!! JsonLd::generate() !!}

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.1/ckeditor5.css">


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


    @yield('css')
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        @livewireScripts




    </head>
    <body>

           <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
           <!-- preloader -->
           <div id="loader-wrapper" class="flex items-center justify-center">
               <div class="loader"></div>
           </div>



        <div class="">
            @livewire('navigation-menu')

            <!-- Page Heading -->
                @if (isset($header))
                <!-- breadcrumb-area-start -->
             <section class="breadcrumb-area" data-background="/img/bg/page-title.png">
                <div class="container pl-30 ml-20 mb-2">
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
                {{ $slot }}
            </main>
        </div>
           @include('footer')
           @stack('modals')
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

    </body>
</html>
