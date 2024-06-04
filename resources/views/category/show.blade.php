<x-app-layout>
    <x-slot name="header">

        {{ __('Items in ') }} {{$category->title}}

    </x-slot>
    <div class="p-2">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-3">
            <div class="container">
                <div class="shop-wrapper">
                    <div class="row">

                        <div class="col-12">
                            <div class="filter-heading">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                        <div class="filter-shown-item">
                                            <p class="mb-0">Showing <span>1</span>–<span>24</span> of <span
                                                    class="total_count">56</span> results</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                        <div class="shop-filter-tab">
                                            <ul class="nav nav-pills">
                                                <li><span>Views</span></li>
                                                <li class="nav-item">
                                                    <a  data-toggle="pill" href="#shop-tab-1"
                                                        data-toggle="tooltip" data-placement="top" title="2 grid"><i
                                                            class="fal fa-line-columns"></i></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a data-toggle="pill" href="#shop-tab-2" data-placement="top"
                                                       title="3 grid"><i class="fal fa-border-none"></i></a>
                                                </li>
                                                <li class="nav-item" >
                                                    <a data-toggle="pill" href="#shop-tab-3" data-placement="top"
                                                       title="4 grid" class="active"><i class="fal fa-border-center-v"></i></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a data-toggle="pill" href="#shop-tab-4" data-placement="top"
                                                       title="list view"><i class="fal fa-list"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 d-flex justify-content-end position-static">
                                        <div class="sorting d-inline-block">
                                            <select name="sort" id="shop-sort">
                                                <option value="default">Default sorting</option>
                                                <option value="default">Short by popularity</option>
                                                <option value="default">Sort by average rating</option>
                                                <option value="default">Sort by latest</option>
                                                <option value="default">Sort by price: low to high</option>
                                                <option value="default">Sort by price: high to low</option>
                                            </select>
                                        </div>
                                        <div class="filter">
                                            <h6 class="d-inline-block filter-widget-toggle">Filter</h6>
                                            <div class="filter-popup">
                                                <div class="row">

                                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                        <div class="widget">
                                                            <h4 class="mb-30">Filter By Price</h4>
                                                            <form action="#">
                                                                <div class="price-filter">
                                                                    <div id="slider-range-2"
                                                                         class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                                                        <div class="ui-slider-range ui-corner-all ui-widget-header"
                                                                             style="left: 15%; width: 46.4%;"></div><span
                                                                            tabindex="0"
                                                                            class="ui-slider-handle ui-corner-all ui-state-default"
                                                                            style="left: 15%;"></span><span tabindex="0"
                                                                                                            class="ui-slider-handle ui-corner-all ui-state-default"
                                                                                                            style="left: 60%;"></span>
                                                                        <div class="ui-slider-range ui-corner-all ui-widget-header"
                                                                             style="left: 15%; width: 45%;"></div>
                                                                    </div>
                                                                    <div class="filter-form-submit mt-35">
                                                                        <button type="submit">Filter</button>
                                                                        <div class="filter-price d-inline-block pl-20">
                                                                            Price: <input type="button" id="amount-2"
                                                                                          value="$75 - $300"></div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 position-static">
                                                        <div class="widget">
                                                            <h4 class="mb-30">Popular Tags</h4>
                                                            <div class="category-list">
                                                                <ul>
                                                                    <li><a href="/shop">Views/rtuats</a></li>
                                                                    <li><a href="/shop">Laptops</a></li>
                                                                    <li><a href="/shop">Mobile</a></li>
                                                                    <li><a href="/shop">Ipad</a></li>
                                                                    <li><a href="/shop">Tablet</a></li>
                                                                    <li><a href="/shop">Ps</a></li>
                                                                    <li><a href="/shop">Console</a></li>
                                                                    <li><a href="/shop">accesaries</a></li>
                                                                    <li><a href="/shop">uc</a></li>
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
                            <!-- /. filter heading -->
                            <div class="filter-content">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="shop-tab-1">
                                        <div class="product-wrapper mt-55">
                                            <div class="row">
                                                @foreach($items as $item)
                                                    <div class="col-6">
                                                        <div class="product-box mb-40">
                                                            <div class="product-box-wrapper">
                                                                <div class="product-img">
                                                                    <img src="{{$item->thumb}}" class="w-100" alt="">
                                                                    <a href="/item/{{$item->slug}}" class="d-block">
                                                                        <div class="second-img">
                                                                            <img src="{{$item->photo}}" alt="{{$item->price}}"
                                                                                 class="w-100">
                                                                        </div>
                                                                    </a>
                                                                    <a href="javascript:void(0)"
                                                                       class="product-img-link quick-view-1 text-capitalize">Quick
                                                                        view</a>
                                                                    view</a>
                                                                </div>

                                                                <div class="product-desc pb-20">
                                                                    <div class="product-desc-top">
                                                                        <div class="categories">
                                                                            <a href="/shop"
                                                                               class="product-category"><span>{{$item->category->title}}</span></a>
                                                                        </div>
                                                                        <a href="/wishlist" class="wishlist float-right"><span><i
                                                                                    class="fal fa-heart"></i></span></a>
                                                                    </div>
                                                                    <a href="/item/{{$item->slug}}" class="product-title">{{substr( $item->detail,0,64)}}</a>
                                                                    <div class="price-switcher">
                                                                        <span class="price switcher-item">$ETB {{$item->price}}</span>
                                                                        <a href="#add-to-cart"
                                                                           class="add-cart text-capitalize switcher-item add-to-cart" itemid="{{$item->id}}">+add
                                                                            to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                            <div class="text-center mt-20">
                                                <a href="/shop?list=more" class="load-more">LOAD MORE...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="shop-tab-2">
                                        <div class="product-wrapper mt-55">
                                            <div class="row">
                                                @foreach($items as $item)
                                                    <div class="col-xl-4 col-md-4 col-6">
                                                        <div class="product-box mb-40">
                                                            <div class="product-box-wrapper">
                                                                <div class="product-img">
                                                                    <img src="{{$item->thumb}}" class="w-100" alt="">
                                                                    <a href="/item/{{$item->slug}}" class="d-block">
                                                                        <div class="second-img">
                                                                            <img src="{{$item->thumb}}" alt="{{$item->name}}"
                                                                                 class="w-100">
                                                                        </div>
                                                                    </a>
                                                                    <a href="javascript:void(0)"
                                                                       class="product-img-link quick-view-1 text-capitalize">Quick
                                                                        view</a>
                                                                </div>

                                                                <div class="product-desc pb-20">
                                                                    <div class="product-desc-top">
                                                                        <div class="categories">
                                                                            <a href="/category/{{$item->category->slug}}"
                                                                               class="product-category"><span>{{$item->category->title}}</span></a>
                                                                        </div>
                                                                        <a href="/shop?list=wishlist" class="wishlist float-right"><span><i
                                                                                    class="fal fa-heart"></i></span></a>
                                                                    </div>
                                                                    <a href="/item/{{$item->slug}}" class="product-title">{{$item->name}}</a>
                                                                    <div class="price-switcher">
                                                                        <span class="price switcher-item">$ETB {{$item->price}}</span>
                                                                        <a href="#add-to-cart"
                                                                           class="add-cart text-capitalize switcher-item add-to-cart" itemid="{{$item->id}}">+add
                                                                            to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach


                                            </div>
                                            <div class="text-center mt-20">
                                                <a href="/shop?list=more" class="load-more">LOAD MORE...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade  show active" id="shop-tab-3">
                                        <div class="product-wrapper mt-55">
                                            <div class="row">
                                                @foreach($items as $item)
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                        <div class="product-box mb-40">
                                                            <div class="product-box-wrapper">
                                                                <div class="product-img">
                                                                    <img src="{{$item->thumb}}" class="w-100" alt="{{$item->name}}">
                                                                    <a href="/item/{{$item->slug}}" class="d-block">
                                                                        <div class="second-img">
                                                                            <img src="{{$item->thumb}}" alt="{{$item->name}}"
                                                                                 class="w-100">
                                                                        </div>
                                                                    </a>
                                                                    <a href="javascript:void(0)"
                                                                       class="product-img-link quick-view-1 text-capitalize">Quick
                                                                        view</a>
                                                                </div>

                                                                <div class="product-desc pb-20">
                                                                    <div class="product-desc-top">
                                                                        <div class="categories">
                                                                            <a href="/category/{{$item->category->slug}}"
                                                                               class="product-category"><span>{{$item->category->title}}</span></a>
                                                                        </div>
                                                                        <a href="/shop?list=wishlist" class="wishlist float-right"><span><i
                                                                                    class="fal fa-heart"></i></span></a>
                                                                    </div>
                                                                    <a href="/item/{{$item->slug}}" class="product-title">{{$item->name}}</a>
                                                                    <div class="price-switcher">
                                                                        <span class="price switcher-item">$ETB {{$item->price}}</span>
                                                                        <a href="#add-to-cart"
                                                                           class="add-cart text-capitalize switcher-item add-to-cart" itemid="{{$item->id}}">+add
                                                                            to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach


                                            </div>
                                            <div class="text-center mt-20">
                                                <a href="/shop?list=more" class="load-more">LOAD MORE...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="shop-tab-4">
                                        <div class="product-wrapper mt-55">
                                            @foreach($items as $item)
                                                <div class="product-box mb-40">
                                                    <div class="product-box-wrapper">
                                                        <div class="list-product mb-50">
                                                            <div class="list-product-wrapper">
                                                                <div class="row">
                                                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                                                        <div class="list-product-img">
                                                                            <div class="product-img">
                                                                                <img src="{{$item->photo}}" class="w-100"
                                                                                     alt="{{$item->name}}">
                                                                                <a href="/item/{{$item->slug}}" class="d-block">
                                                                                    <div class="second-img">
                                                                                        <img src="{{$item->photo}}"
                                                                                             alt="{{$item->name}}" class="w-100">
                                                                                    </div>
                                                                                </a>
                                                                                <a href="javascript:void(0)"
                                                                                   class="product-img-link quick-view-1 text-capitalize">Quick
                                                                                    view</a>
                                                                                <span
                                                                                    class="sale bg-red text-white">{{$item->badge}}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-8 col-lg-8 col-md-8">
                                                                        <div class="list-product-desc">
                                                                            <h3><a href="/item/{{$item->slug}}" class="title mb-15">{{$item->name}}</a></h3>
                                                                            <div class="rating">
                                                                                <i class="fal fa-star active"></i>
                                                                                <i class="fal fa-star active"></i>
                                                                                <i class="fal fa-star active"></i>
                                                                                <i class="fal fa-star active"></i>
                                                                                <i class="fal fa-star"></i>
                                                                            </div>
                                                                            <div class="price"><span>$ETB {{$item->price}}</span></div>
                                                                            <div class="desc">
                                                                                <p>{{$item->detail}}</p>
                                                                                <ul>
                                                                                    <li>–{{$item->tags}}</li>

                                                                                </ul>
                                                                                <a href="/mycart"
                                                                                   class="list-add-cart-btn text-capitalize mt-40">+add
                                                                                    to cart</a>
                                                                                <a href="/wishlist" data-toggle="tooltip"
                                                                                   data-placement="top"
                                                                                   title="wishlist"><span><i
                                                                                            class="fal fa-heart"></i></span></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip"
                                                                                   data-placement="top"
                                                                                   title="compare"><span><i
                                                                                            class="fal fa-abacus"></i></span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /. list product -->
                                                    </div>
                                                </div>
                                        @endforeach

                                        <!-- /. product box -->
                                            <div class="text-center mt-20">
                                                <a href="/shop?list=more" class="load-more">LOAD MORE...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /. filter content -->
                        </div>
                        <!-- /. shop products -->
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
