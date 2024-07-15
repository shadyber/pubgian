<x-app-layout>
    <x-slot name="header">

            {{ __('Dashboard') }}

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg ml-2 mr-2 mt-2">

               Search Result....
                @if(isset($items))


                        <div class="product-wrapper mt-55 ml-3 mr-3">
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
                        </div>

                @else
                <div>No Items Found With This Search Condition.</div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
