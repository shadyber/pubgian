<x-app-layout>
    <x-slot name="header">

        {{ __('Shop') }}

    </x-slot>

        <div class="p-1 m-1"  >
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
                                           <div class="product-wrapper mt-1">
                                               <div class="row">
                                                   @foreach($items as $it)
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
                                               <div class="text-center mt-2">
                                                   <a href="/shop?list=more" class="load-more">LOAD MORE...</a>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="tab-pane fade" id="shop-tab-2">
                                           <div class="product-wrapper mt-55">
                                               <div class="row">
                                                   @foreach($items as $item)
                                                   <div class="col-xl-4 col-md-4 col-6">
                                                       <div class="product-box mb-1">
                                                           <div class="product-box-wrapper">
                                                               <div class="product-img">
                                                                   <img src="{{$item->thumb}}" class="w-100" alt="">
                                                                   <a href="/item/{{$item->slug}}" class="d-block">
                                                                       <div class="second-img">
                                                                           <img src="{{$item->thumb}}" alt="{{$item->name}}"
                                                                                class="w-100">
                                                                       </div>
                                                                   </a>
                                                                   @livewire('add-to-cart-component', ['itemid' => $item->id])
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
                                           <div class="product-wrapper mt-1">
                                               <div class="row">
                                                   @foreach($items as $item)
                                                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                       <div class="product-box mb-1">
                                                           <div class="product-box-wrapper">
                                                               <div class="product-img">
                                                                   <img src="{{$item->thumb}}" class="w-100" alt="{{$item->name}}">
                                                                   <a href="/item/{{$item->slug}}" class="d-block">
                                                                       <div class="second-img">
                                                                           <img src="{{$item->thumb}}" alt="{{$item->name}}"
                                                                                class="w-100">
                                                                       </div>
                                                                   </a>
                                                                   @livewire('add-to-cart-component', ['itemid' => $item->id])
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
                                           <div class="product-wrapper mt-1">
                                               @foreach($items as $item)
                                               <div class="product-box mb-1">
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
                                                                               @livewire('add-to-cart-component', ['itemid' => $item->id])
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

</x-app-layout>
