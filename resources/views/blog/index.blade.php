<x-app-layout>
    <x-slot name="header">

        {{ __('Blog ') }}

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="col-xl-12">
                    <div class="row">

                        @foreach($blogs as $blog)

                            <div class="col-xl-6 col-lg-3 col-md-4 col-12">
                                <div class="primary-blog-box mb-60">
                                    <div class="blog-wrapper">
                                        <div class="blog-box-img">
                                            <a href="/blog/{{$blog->slug}}"><img src="{{$blog->photo}}" class="w-100" alt="{{$blog->title}}"></a>
                                            <div class="blog-box-tags">
                                                <a href="/blogcategory/{{$blog->blog_category_id}}">{{$blog->category->title}}</a>

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
