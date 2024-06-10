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
<body class="font-sans antialiased">

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


    @endif
           <main>
               {{ $slot }}
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
