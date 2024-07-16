<x-app-layout>
    <x-slot name="header">

        {{ __('Blog Detail') }}

    </x-slot>

    <section id="blog">
        <div class="p-3 m-3">


        <div class="row">


        <div class="col-xl-3 hidden-xl">
            <!-- widget -->
            <div class="widget pr-0 mb-50">
                <h4 class="mb-30">Search</h4>
                <div class="sidebar-search-form">
                    <form action="#" method="POST">
                        <input type="text" placeholder="Search">
                        <button type="submit"><i class="fal fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="widget blog-list pr-0 mb-50">
                <h4 class="mb-30">Categories</h4>
                <div class="accordion" id="accordionExample">
                  @foreach(\App\Models\BlogCategory::all() as $cat)
                    <div class="list">
                        <a href="/blogcategory/{{$cat->id}}">{{$cat->title}} <span>({{count($cat->blogs)}})</span></a>
                        <button class="float-right text-right" type="button" data-toggle="collapse" data-target="#collapse-1">
                            <span class="float-right"><i class="fal fa-angle-right"></i></span>
                        </button>

                    </div>
                    @endforeach

                </div>
            </div>
            <div class="widget pr-0 mb-50">
                <h4 class="mb-30">Recent Post</h4>
                <div class="post-box">
                    <ul>
                       @foreach(\App\Models\Blog::lastN(5) as $blg)
                        <li>
                            <div class="post-img">
                                <img src="{{$blg->thumb}}" class="w-100" alt="{{$blg->title}}">
                            </div>
                            <div class="post-img-desc">
                                <a href="/blog/{{$blg->category->title}}">{{$blg->category->title}}</a>
                                <div class="price"> {{$blg->created_at->diffForHumans()}} </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>


        </div>



         <div class="col-xl-9">
             <div class="row">
                 <div class="col-12">
                     <div class="blog-wrapper">
                         <div class="blog-box-img">
                             <img src="{{$blog->photo}}" class="w-100" alt="{{$blog->title}}">
                         </div>
                         <div class="single-blog-box mt-10">
                             <div class="blog-box-desc primary-desc">
                                 <div class="blog-box-link">
                                     <h3>{{$blog->title}}</h3>
                                 </div>
                                 <ul class="post-entry-data">
                                     <li class="post-date">{{$blog->created_at->diffForHumans()}}</li>
                                     <li class="post-by">Posted by <a href="javascript:void(0)" class="red-color f-400"><strong>admin</strong></a></li>
                                     <li class="post-comments"><i class="fal fa-envelope"></i>  Comment(s)</li>
                                 </ul>

                                   {!! $blog->detail !!}

                                 <div class="category-style-2">
                                     <h6>Category: <a href="blog2.html">Clothes</a><a href="blog3.html">Videos</a></h6>
                                 </div>
                                 <div class="social-icon-2">
                                     <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                     <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                     <a href="javascript:void(0)"><i class="fab fa-pinterest"></i></a>
                                     <a href="javascript:void(0)"><i class="fab fa-google-plus-g"></i></a>
                                     <a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                                 </div>
                                 <div class="show-comment mt-50">



                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
        </div>
        </div>
    </section>

</x-app-layout>
