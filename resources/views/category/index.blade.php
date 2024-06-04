<x-app-layout>
    <x-slot name="header">

        {{ __('Shops Category') }}

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg row">
                @foreach($categories as $cat)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product-box mb-40">
                        <div class="product-box-wrapper">
                            <div class="product-img">
                                <img src="{{$cat->icon}}" class="w-100" alt="{{$cat->title}}">
                                <a href="/category/{{$cat->id}}" class="d-block">
                                    <div class="second-img">
                                        <img src="{{$cat->icon}}" alt="{{$cat->title}}"
                                             class="w-100">
                                    </div>
                                </a>

                            </div>


                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
