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
                            <div class="col-lg-6 col-md-6 col-xl-4 mb-50px">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a href="/blog/{{$blog->slug}}"><img src="{{$blog->thumb}}" class="img-responsive w-100" alt="{{$blog->title}}"></a>
                                    </div>
                                    <div class="blog-text">
                                        <div class="blog-athor-date">
                                            <a class="blog-date height-shape" href="#"><i class="fa fa-calendar" aria-hidden="true"></i>
                                                {{$blog->created_at->diffForHumans()}}</a>
                                            <a class="blog-mosion" href="/blog/{{$blog->slug}}"><i class="fa fa-commenting" aria-hidden="true"></i> {{$blog->visit}}</a>
                                        </div>
                                        <h5 class="blog-heading"><a class="blog-heading-link" href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h5>

                                        <p>{{substr($blog->detail,0,100)}}</p>

                                        <a href="/blog/{{$blog->slug}}" class="btn btn-primary blog-btn"> Read More<i class="fa fa-arrow-right ml-5px" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
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
