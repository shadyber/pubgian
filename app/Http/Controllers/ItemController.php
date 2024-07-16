<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

use Cviebrock\EloquentSluggable\Services\SlugService;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return 'index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $slug = SlugService::createSlug(Item::class, 'slug', 'My First Post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {

        $item=Item::where('slug',$slug)->get();




        if(count($item)>0){

            SEOMeta::setTitle($item[0]->name);
            SEOMeta::setDescription($item[0]->detail);
            SEOMeta::addMeta('article:published_time', $item[0]->created_at->toW3CString(), 'property');
            SEOMeta::addMeta('article:section', $item[0]->category->title, 'property');
            SEOMeta::addKeyword([$item[0]->tags]);

            OpenGraph::setDescription($item[0]->detail);
            OpenGraph::setTitle($item[0]->name);
            OpenGraph::setUrl(env('APP_URL'.'/images/'.$item[0]->slug));
            OpenGraph::addProperty('type', 'article');
            OpenGraph::addProperty('locale', 'en-us');
            OpenGraph::addProperty('locale:alternate', ['en-uk', 'en-us']);

            OpenGraph::addImage(['url' =>env('app_url').$item[0]->photo, 'size' => 300]);
            OpenGraph::addImage(env('app_url').$item[0]->photo, ['height' => 300, 'width' => 300]);

            JsonLd::setTitle($item[0]->title);
            JsonLd::setDescription($item[0]->detail);
            JsonLd::setType('Article');
            JsonLd::addImage(env('app_url').'/'.$item[0]->photo);

            return view('shop.show')->with(['item'=>$item[0]]);
          }

              return  view('shop.index')->with(['error'=>'item not found','items'=>Item::lastN(12)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
