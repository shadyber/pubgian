  <!-- header section start -->
  <header class="header bright-turquoise-content pt-30 pb-30 header-sticky header-static">
    <div class="container-fluid">
        <div class="header-nav header-nav-2 position-relative">
                <div class="row align-items-center">


                    <div class="col-xl-5 col-lg-6 hidden-md position-static">
                        <div class="header-nav">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="/" class="active"><span>Home</span> </a>


                                    </li>
                                    <li class="position-static"><a href="/shop"><span>Shop  <i class="fal fa-angle-down"></i></span></a>
                                        <div class="mega-menu">
                                            <div class="pl-0 col-xl-7 position-static">

                                                <ul>

  @foreach(\App\Models\ItemCategory::where('parent_category_id',0)->get() as $ca)
                                                        <li><a href="/category/{{$ca->id}}">{{$ca->title}}</a></li>
                                                    @endforeach
<li><a href="/shop?list=latest">Latest Products</a></li>
<li><a href="/shop?list=popular">Most Popular</a></li>
<li><a href="/offers">Offer</a></li>
<li><a href="/shop?list=discount">Discounts</a></li>

</ul>
</div>
</div>
</li>
<li><a href="/blog"><span>Blog <i class="fal fa-angle-down"></i></span> </a>
<ul class="submenu bold-content">

@foreach(\App\Models\BlogCategory::where('parent_category_id',0)->get() as $blogcategory)
<li><a href="/blogcategory/{{$blogcategory->id}}"> {{$blogcategory->title}} </a></li>
@endforeach

</ul>
</li>

<li><a href="javascript:void(0)"><span>More</span> <i class="fal fa-angle-down"></i></a>
<ul class="submenu">
<li><a href="/about">About</a></li>
<li><a href="/faq">Frequently Questions</a></li>
<li><a href="/contact">Contact</a></li>


    <form method="POST" id="logout-form" action="{{ route('logout') }}">
        @csrf
    </form>
</ul>
</li>
                                    <li>
                                        <a href="/unlisted/create" class=""><span><i class="fa fa-plane"> </i> Order </span> </a>


                                    </li>
</ul>
</nav>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-3">
<div class="logo">
<a href="/"><img  src="/img/logo/logo1.png" alt=""></a>
</div>
</div>

<div class="col-xl-4 col-lg-3 col-6 col-md-6 col-sm-6 col-9">
<div class="header-right">
<ul class="text-right">


@auth
<li><a href="/register" class="account flex"> <article class="account-registar d-inline-block">{{\Illuminate\Support\Facades\Auth::user()->name}}
            <img src="{{ \Illuminate\Support\Facades\Auth::user()->profile_photo_url }}" alt="{{ \Illuminate\Support\Facades\Auth::user()->name }}" class="rounded-full h-10 w-10 inline"></article>  </a></li>
    <li> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class='fal fa-power-off'></i>
        </a></li>

@endauth
@guest
<li><a href="/register" class="account"><i class="fal fa-user-friends"></i> <article class="account-registar d-inline-block">Login/Sign up</article></a></li>


@endguest


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
    @foreach(\App\Models\ItemCategory::where('parent_category_id',0)->get() as $ca)
<li><a href="javascript:void(0)">$ca->title</a></li>
    @endforeach

</ul>

<div class="search-form mt-35">
<form action="/search" method="get">
    <input type="text" name="key" placeholder="Search Products...">
    <button type="submit"><i class="fal fa-search"></i></button>
</form>
</div>

<div class="search-result-list">
<ul class="text-left">
    <li class="d-block d-flex align-items-center">
        <div class="search-result-img">
            <img  src="/img/product/1.jpg" class="w-100" alt="">
        </div>
        <div class="pl-10 search-result-desc">
            <a href="single-product-2.html" class="px-0 title">ELLE  - Recliner syntheti chair</a>
            <div class="price">$<span>399</span></div>
        </div>
    </li>
    <li class="d-block d-flex align-items-center">
        <div class="search-result-img">
            <img  src="/img/product/2.jpg" class="w-100" alt="">
        </div>
        <div class="pl-10 search-result-desc">
            <a href="single-product-2.html" class="px-0 title">RIMINI  - Folding leather deck chair</a>
            <div class="price">$<span>399</span></div>
        </div>
    </li>
    <li class="d-block d-flex align-items-center">
        <div class="search-result-img">
            <img  src="/img/product/3.jpg" class="w-100" alt="">
        </div>
        <div class="pl-10 search-result-desc">
            <a href="single-product-2.html" class="px-0 title">LANDSCAPE  - Folding fabric deck chair</a>
            <div class="price">$<span>399</span></div>
        </div>
    </li>
    <li class="d-block d-flex align-items-center">
        <div class="search-result-img">
            <img  src="/img/product/1.jpg" class="w-100" alt="">
        </div>
        <div class="pl-10 search-result-desc">
            <a href="single-product-2.html" class="px-0 title">ELLE  - Recliner syntheti chair</a>
            <div class="price">$<span>399</span></div>
        </div>
    </li>
    <li class="d-block d-flex align-items-center">
        <div class="search-result-img">
            <img  src="/img/product/2.jpg" class="w-100" alt="">
        </div>
        <div class="pl-10 search-result-desc">
            <a href="single-product-2.html" class="px-0 title">RIMINI  - Folding leather deck chair</a>
            <div class="price">$<span>399</span></div>
        </div>
    </li>
    <li class="d-block d-flex align-items-center">
        <div class="search-result-img">
            <img  src="/img/product/3.jpg" class="w-100" alt="">
        </div>
        <div class="pl-10 search-result-desc">
            <a href="single-product-2.html" class="px-0 title">LANDSCAPE  - Folding fabric deck chair</a>
            <div class="price">$<span>399</span></div>
        </div>
    </li>
</ul>
</div>
</div>


</div>
</div>
</li>
<li><a href="/wishlist" data-toggle="tooltip" data-placement="bottom" title="view wishlist"><i class="fal fa-heart"><span>0</span></i></a></li>
<li>  <a href="/mycart" data-toggle="tooltip" data-placement="bottom" title="view mycart" >@livewire('cart')</a>
<div class="minicart">
<div class="minicart-body">
<div class="minicart-content">
<ul class="text-left">
@foreach(\App\Models\Cart::myCart() as $cart)
<li>
    <div class="minicart-img">
        <a href="/item/{{$cart['slug']}}" class="p-0"><img src="{{$cart['thumb']}}" class="w-100" alt=""></a>
    </div>
    <div class="minicart-desc">
        <a href="/item/{{$cart['slug']}}" class="p-0">{{$cart['name']}}</a>
        <strong>{{$cart['quantity']}} × $ETB {{$cart['price']}}</strong>
    </div>
    <div class="remove">
        <a href="/removecart/{{$cart['id']}}"><i class="fa fa-times"></i></a>
    </div>
</li>
@endforeach

</ul>
</div>
</div>
<div class="minicart-checkout">
<div class="mt-8 overflow-hidden minicart-checkout-heading mb-25">
<strong class="float-left">Subtotal:</strong>
<span class="float-right price">{{\App\Models\Cart::totalCart()}}</span>
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
<li><a href="/dashboard">My Account</a></li>
<li><a href="/checkout">Checkout</a></li>
<li><a href="/shop">Shop</a></li>
<li><a href="/wishlist">Wishlist</a></li>
<li><a href="/faq">Frequently</a></li>
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
<li><a  class="pl-3" href="/">Home</a>

</li>
<li><a  class="pl-3" href="/shop">Shop</a>
<ul>
    @foreach(\App\Models\ItemCategory::all() as $ca)
<li><a href="/category/{{$ca->id}}">{{$ca->title}}</a></li>
    @endforeach

</ul>
</li>
<li><a href="/blog">Blog</a>
<ul>
    @foreach(\App\Models\BlogCategory::where('parent_category_id',0)->get() as $blogcategory)
<li><a href="/blogcategory">{{$blogcategory->title}}</a></li>
        @endforeach

</ul>
</li>


</ul>
</div>
</div>
<!-- /. mobile nav -->
</div>
</header>
<!-- header section end -->

