<?php

use App\Http\Controllers\CartController;
use App\Livewire\Admin\AdminAddProductComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/offer', function () {
    return view('offer');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/faq', function () {
    return view('faq');
});


Route::get('/search',[\App\Http\Controllers\SearchController::class,'search'])->name('search');

Route::get('/shop', function () {
    $items=\App\Models\Item::lastN(12);
    return view('shop.index')->with(['items'=>$items]);
});

Route::resource('/item',\App\Http\Controllers\ItemController::class);
Route::resource('/category',\App\Http\Controllers\ItemCategoryController::class);
Route::resource('/blogcategory',\App\Http\Controllers\BlogCategoryController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


Route::get('/checkout', function (){
    $user=\Illuminate\Support\Facades\Auth::user();
    $shippinginfo=$user->shippinginfo;
   return view('checkout',['user'=>$user,'shippinginfo'=>$shippinginfo]);
});

    Route::resource('/unlisted',\App\Http\Controllers\UnlistedItemController::class);




    Route::get('/payment', function (){
        $user=\Illuminate\Support\Facades\Auth::user();
        $shippinginfo=$user->shippinginfo;
        return view('payment',['user'=>$user,'shippinginfo'=>$shippinginfo]);
    })->name('payment');



    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


Route::post('/saveshipinginfo',[\App\Http\Controllers\ShipingInfoController::class,'saveshipinginfo'])->name('saveshipinginfo');

    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/product',AdminAddProductComponent::class)->name('admin.products');

});

Route::get('/removecart/{id}/',[CartController::class,'removeCart'])->name('removeCart');
Route::get('/destroyCart',[CartController::class,'destroyCart'])->name('destroyCartm');

Route::get('/mycart',[CartController::class,'myCart'])->name('mycart');
