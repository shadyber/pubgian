<x-app-layout>
    <x-slot name="header">

        {{ __('Product Detail')  }} /{{$item->name}}

    </x-slot>




                    <!-- single product start -->
                    <section class="single-product mb-90">
                        <div class="container-fluid">

                            <div class="shop-wrapper">
                                <div class="single-product-top">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-12">
                                            <div class="shop-img">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="nav nav-pills" id="v-pills-tab" role="tablist"
                                                             aria-orientation="vertical">
                                                            <a class="active" data-toggle="pill" href="#tab-0">
                                                                <img src="{{$item->thumb}}" class="w-100" alt="">
                                                            </a>
                                                           @foreach($item->itemPhotos as $key=>$thumb)
                                                            <a class="" data-toggle="pill" href="#tab-{{$key}}">
                                                                <img src="{{$thumb->thumb}}" class="w-100" alt="">
                                                            </a>
                                                            @endforeach

                                                        </div>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="tab-content" id="v-pills-tabContent">
                                                            <div class="tab-pane fade show active" id="tab-0">
                                                                <div class="product-img">
                                                                    <a class="popup-image" href="{{$item->photo}}"><img
                                                                            src="{{$item->photo}}" class="w-100" alt="{{$item->name}}"></a>
                                                                </div>
                                                            </div>
                                                            @foreach($item->itemPhotos as $key=>$photo)
                                                            <div class="tab-pane fade show" id="tab-{{$key}}">
                                                                <div class="product-img">
                                                                    <a class="popup-image" href="{{$photo->photo}}"><img
                                                                            src="{{$photo->photo}}" class="w-100" alt="{{$item->name}}"></a>
                                                                </div>
                                                            </div>
                                                            @endforeach

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-12">
                                            <div class="single-product-sidebar">
                                                <div class="product-content">
                                                    <div class="single-product-title">
                                                        <h2>{{$item->name}}</h2>
                                                    </div>
                                                    <div class="single-product-price"> <span>$ETB {{$item->price}}</span></div>
                                                    <div class="single-product-desc mb-25">
                                                        {{ substr(strip_tags($item->detail),0,512)}}
                                                        <div class="product-list single-product-list">
                                                            <ul>
                                                                <li>–{{ $item->tags}}</li>

                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="quick-quantity mt-60">

                                                        @livewire('add-to-cart-component', ['itemid' => $item->id])
                                                    </div>
                                                    <div class="single-product-action mt-35">
                                                        <ul>
                                                            <li><a href="#"><i class="fal fa-heart"></i> add to wishlist</a></li>
                                                            <li><a href="#"><i class="fal fa-abacus"></i> add to compare</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="sku"><span>Sku: </span> <strong>ID:{{$item->id}}</strong></div>
                                                    <div class="single-product-category">
                                                        <ul>
                                                            <li class="mb-0"><a href="javascript:void(0)" class="title">Categories: </a>
                                                            </li>
                                                            <li class="mb-0"><a href="/category/{{$item->category->id}}">{{$item->category->title}}  </a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="share-product mt-20">
                                                        <ul>
                                                            <li><a href="javascript:void(0)" class="title">Share this product</a></li>
                                                            <li><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top"
                                                                   title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top"
                                                                   title="twitter"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top"
                                                                   title="pinterest"><i class="fab fa-pinterest"></i></a></li>
                                                            <li><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top"
                                                                   title="google +"><i class="fab fa-google-plus-g"></i></a></li>
                                                            <li><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top"
                                                                   title="Linkdin"><i class="fab fa-linkedin-in"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-product-bottom mt-80 gray-border-top">
                                    <ul class="nav nav-pills justify-content-center mt-100">
                                        <li class="nav-item">
                                            <a class="active" data-toggle="pill" href="#desc-tab-1">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a data-toggle="pill" href="#desc-tab-3">Additional information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="" data-toggle="pill" href="#desc-tab-2">Reviews ({{count($item->reviews)}})</a>
                                        </li>
                                    </ul>
                                    <div class="container container-1200">
                                        <div class="tab-content mt-60">
                                            <div class="tab-pane fade show active" id="desc-tab-1">
                                                <div class="single-product-tab-content">
                                                    <h3 class="title mb-30">Description</h3>
                                                    @if($item->video_url !=null)
                                                    <iframe width="560" height="315" src="{{$item->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                   @endif
                                                     {!!$item->detail!!}
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="desc-tab-2">
                                                <div class="single-product-tab-content">
                                                    <h3 class="title mb-30">Reviews</h3>

                                                    @foreach($item->reviews as $rv)
                                                    <div class="review-box-item">
                                                        <div class="row">
                                                            <div class="col-xl-1 col-lg-2 col-md-2 col-3 pr-xl-0">
                                                                <div class="review-box-img d-block text-right">

                                                                    <img src="{{$rv->user->profile_photo_url}}" width="60" height="60"
                                                                         class="avatar-img" alt="{{$rv->user->name}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-11 col-lg-10 col-9 pl-0">
                                                                <div class="review-box-content">
                                                                    <div class="row">
                                                                        <div class="col-7">
                                                                            <div class="author-name">
                                                                                <h6>{{$rv->user->name}}</h6>
                                                                                <div class="content">
                                                                                    <p class="mb-0">{{$rv->comment}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-5 pr-5-px pl-0">
                                                                            <div class="rating text-right">
                                                                                ({{$rv->stars}})


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @endforeach
                                                    <p>There are no more reviews yet.</p>
                                                    <h4>Add a review</h4>
@livewire('rating-form', ['itemid' => $item->id])


                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="desc-tab-3">
                                                <div class="single-product-tab-content">
                                                    <h3 class="title mb-30">Additional information</h3>
                                                    <table class="table table-striped">
                                                        <tbody>
                                                        <tr>
                                                            <th>size</th>
                                                            <th>Other spec</th>

                                                        </tr>
                                                        <tr>


                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- single product end -->
                    <!-- sugession start -->
                    <section class="sugession-product mt-120">
                        <div class="container-fluid">
                            <div class="generic-title text-center">
                                <h2 class="mb-20">You May Also Like</h2>
                            </div>
                            <div class="main-product-carousel owl-carousel red-nav mt-50">
                              @foreach($item->popularN(8) as $li)
                                <div class="carousel-single-item">
                                    <div class="col-12">
                                        <div class="product-box">
                                            <div class="product-box-wrapper">
                                                <div class="product-img">
                                                    <img src="{{$li->thumb}}" class="w-100" alt="">
                                                    <a href="/item/{{$li->slug}}" class="d-block">
                                                        <div class="second-img">
                                                            <img src="{{$li->photo}}" alt="" class="w-100">
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                       class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                                </div>

                                                <div class="product-desc pb-20">
                                                    <div class="product-desc-top">
                                                        <div class="categories">
                                                            <a href="/category/{{$li->category->slug}}" class="product-category"><span>{{$li->category->title}}</span></a>
                                                        </div>
                                                        <a href="#wishlist" class="wishlist float-right"><span><i
                                                                    class="fal fa-heart"></i></span></a>
                                                    </div>
                                                    <a href="/item/{{$li->slug}}" class="product-title"> {{$li->name}}</a>
                                                    <div class="price-switcher">
                                                        <span class="price switcher-item">$ETB {{$li->price}}</span>
                                                         @livewire('add-to-cart-component', ['itemid' => $li->id])
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </section>
                    <!-- sugession end -->
                    <!-- related product start -->
                    <section class="related-product mt-120">
                        <div class="container-fluid">
                            <div class="generic-title text-center">
                                <h2 class="mb-20">Related Product</h2>
                            </div>
                            <div class="main-product-carousel owl-carousel red-nav mt-50">
                                @foreach($item->category->items->take(8) as $li)
                                    <div class="carousel-single-item">
                                        <div class="col-12">
                                            <div class="product-box">
                                                <div class="product-box-wrapper">
                                                    <div class="product-img">
                                                        <img src="{{$li->thumb}}" class="w-100" alt="">
                                                        <a href="/item/{{$li->slug}}" class="d-block">
                                                            <div class="second-img">
                                                                <img src="{{$li->photo}}" alt="" class="w-100">
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                           class="product-img-link quick-view-1 text-capitalize">Quick view</a>
                                                    </div>

                                                    <div class="product-desc pb-20">
                                                        <div class="product-desc-top">
                                                            <div class="categories">
                                                                <a href="/category/{{$li->category->slug}}" class="product-category"><span>{{$li->category->title}}</span></a>
                                                            </div>
                                                            <a href="#wishlist" class="wishlist float-right"><span><i
                                                                        class="fal fa-heart"></i></span></a>
                                                        </div>
                                                        <a href="/item/{{$li->slug}}" class="product-title"> {{$li->name}}</a>
                                                        <div class="price-switcher">
                                                            <span class="price switcher-item">$ETB {{$li->price}}</span>
                                                              @livewire('add-to-cart-component', ['itemid' => $li->id])
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </section>
                    <!-- related product end -->
     <!-- product popup start -->
                    <section id="product-popup">gi
                        <div class="product-popup-overlay"></div>
                        <div class="product-popup-container">
                            <div class="product-inner w-100">
                                <div class="product-inner-content">
                                    <div class="quick-close-action"><i class="fal fa-times"></i></div>
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="product-popup-1">
                                                    <div class="product-popup-img">
                                                        <img  src="/img/product/10.jpg" class="w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="product-popup-2">
                                                    <div class="product-popup-img">
                                                        <img  src="/img/product/11.jpg" class="w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="product-popup-3">
                                                    <div class="product-popup-img">
                                                        <img  src="/img/product/12.jpg" class="w-100" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav nav-pills justify-content-center mt-10">
                                                <li class="nav-item">
                                                    <a class="active" data-toggle="pill" href="#product-popup-1">
                                                        <img  src="/img/product/10.jpg" class="w-100" alt="">
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="" data-toggle="pill" href="#product-popup-2">
                                                        <img  src="/img/product/11.jpg" class="w-100" alt="">
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="" data-toggle="pill" href="#product-popup-3">
                                                        <img  src="/img/product/12.jpg" class="w-100" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6">
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h2>Nari Narwhal Usb...</h2>
                                                </div>
                                                <div class="price">$<span>44.00</span>–<span>$250.00</span></div>
                                                <a href="single-product-4.html" class="all-feature">See all feature</a>
                                                <div class="quick-quantity mt-30">
                                                    <form action="#" method="POST">
                                                        <input type="number" value="1">
                                                        <button type="submit" class="generic-btn red-hover-btn text-capitalize">add to
                                                            cart</button>
                                                    </form>
                                                </div>

                                                <div class="product-desc pb-20 mt-25 gray-border-top">
                                                    <p class="mb-0">Typi non habent claritatem insitam, est usus legentis in iis qui
                                                        facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius
                                                        quod ii legunt saepius. Claritas est etiam processus A Capitalize on low hanging
                                                        fruit to identify a ballpark value added activity to beta test. Override the
                                                        digital...ditional clickthroughs from DevOps. Nanotechnology immersion along the
                                                        information highway will close the […]</p>
                                                </div>
                                                <div class="product-list mt-25">
                                                    <ul>
                                                        <li>– Light green crewnec...t.</li>
                                                        <li>– Hand pockets.</li>
                                                        <li>– Relaxed fit.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- product popup end -->


</x-app-layout>
