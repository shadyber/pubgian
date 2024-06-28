<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;
class BlogController extends Controller


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $blogs= Blog::orderBy('id','desc')->paginate(9);
        return view('blog.index')->with(['blogs'=>$blogs])->with('error','You Don\'t Have This Permission');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        //
        if(!Auth::user()->id==1){
            return redirect()->back()->with('error','You Don\'t Have This Permission');
        }
        return view('admin.blog.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Auth::user()->id==1){
            return redirect()->back()->with('error','You Don\'t Have This Permission');
        }

        $request->validate([
            'title'=>'required',
            'detail'=>'required',
            'blog_category_id'=>'required',

            'photo'=>'required|mimes:jpg,png,jpeg|max:5048',
        ]);



        $lastblog=  Blog::create([
                'title'=>$request->input('title'),
                'detail'=>$request->input('detail'),
                'slug'=>SlugService::createSlug(Blog::class,'slug',$request->title.$request->_token),
                'photo'=>'/images/blog/',
                'thumb'=>'/images/blog/thumbnails/',
                'tags'=>$request->input('tags'),

                'user_id'=>auth()->user()->id,

                'blog_category_id'=>$request->input('blog_category_id'),
            ]
        );


        $users=User::all();
        foreach ($users as $user){
           // $user->Notify(new BlogCreatedNotification($lastblog));
        }

        return redirect()->back()->with('success','Article Created Succusfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return Response
     */
    public function show($slug)
    {
        $blog=Blog::where('slug',$slug)->first();
        if($blog!=null){
            $blog->visit++;
            $blog->save();
            return view('blog.show')->with('blog',$blog);
        }

        return view('blog.index')->with('blogs',Blog::all());


    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        if(!Auth::user()->id==1){
            return redirect()->back()->with('error','You Don\'t Have This Permission');
        }
        return view('admin.blog.edit')->with('blog',$blog);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {  //
        if(!Auth::user()->id==1){
            return redirect()->back()->with('error','You Don\'t Have This Permission');
        }

        $request->validate([
            'title'=>'required',
            'blog_category_id'=>'required',

        ]);

        if($request->hasFile('photo')) {


            $PHOTO_URL='/images/blog/';
            $THUMB_URL='/images/blog/thumbnails/';
        }else{
            $PHOTO_URL=$blog->photo;
            $THUMB_URL=$blog->thumb;
        }

//dd($request);
        $blog->title=$request->input('title');
        $blog->detail=$request->input('detail');

        $blog->photo = $PHOTO_URL;
        $blog->thumb = $THUMB_URL;
        $blog->tags = $request->input('tags');



        $blog->blog_category_id = $request->input('blog_category_id');
        $blog->save();

        return redirect()->back()->with('success','Article Updated Succusfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if(!Auth::user()->id==1){
            return redirect()->back()->with('error','You Don\t Have This Permission');
        }
        $blog->delete();
        return redirect()->back()->with('success','Article removed');
    }


}
