<x-app-layout>
    <x-slot name="header">

        {{ __('Blog Category') }}

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="col-xl-12">
                    <div class="row">

                        @foreach($blogcategory as $bcat)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="primary-blog-box mb-60">
                                <div class="blog-wrapper">
                                    <div class="blog-box-img">
                                        <a href="/blogcategory/{{$bcat->slug}}"><img src="{{$bcat->photo}}" class="w-100" alt="{{$bcat->title}}"></a>
                                        <div class="blog-box-tags">
                                            <a href="#">{{$bcat->detail}}</a>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="text-center mt-60 load-btn">
                        <a href="javascript:void(0)" class="load-more generic-btn transparent-bg-red">Load More...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
