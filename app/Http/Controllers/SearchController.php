<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class SearchController extends Controller
{
   public function search (){
    //   $_key=$_GET['key'];
       $items = Item::where('name', 'like', '%' . request('key') . '%')->get();

       return view('search')->with(['items'=>$items]);

}
}
