<?php

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemCategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShipingInfoController;
use App\Http\Controllers\UnlistedItemController;
use App\Livewire\Admin\AdminAddProductComponent;
use App\Mail\MyTestEmail;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
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


Route::get('/search',[SearchController::class,'search'])->name('search');

Route::get('/shop', function () {
    $items= Item::lastN(12);
    return view('shop.index')->with(['items'=>$items]);
});

Route::resource('/blog', BlogController::class)->middleware('auth.basic');
Route::resource('/item', ItemController::class);
Route::resource('/order', OrderController::class);
Route::resource('/category', ItemCategoryController::class);
Route::resource('/blogcategory', BlogCategoryController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


Route::get('/checkout', function (){
    $user= Auth::user();
    $shippinginfo=$user->shippinginfo;
   return view('checkout',['user'=>$user,'shippinginfo'=>$shippinginfo]);
});

    Route::resource('/unlisted', UnlistedItemController::class);
    Route::resource('/finish_order', \App\Http\Controllers\TemporaryOrderController::class);




    Route::get('/payment', function (){
        $user= Auth::user();
        $shippinginfo=$user->shippinginfo;
        return view('payment',['user'=>$user,'shippinginfo'=>$shippinginfo]);
    })->name('payment');



    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


Route::post('/saveshipinginfo',[ShipingInfoController::class,'saveshipinginfo'])->name('saveshipinginfo');

    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/product',AdminAddProductComponent::class)->name('admin.products');

});

Route::get('/removecart/{id}/',[CartController::class,'removeCart'])->name('removeCart');
Route::get('/destroyCart',[CartController::class,'destroyCart'])->name('destroyCartm');

Route::get('/mycart',[CartController::class,'myCart'])->name('mycart');


Route::get('/notifications',                [NotificationController::class, 'index']);
Route::get('/notifications-unread',         [NotificationController::class, 'indexUnreadNotifications']);
Route::patch('/mark-notification/{id}',     [NotificationController::class, 'markNotification']);
Route::patch('/mark-notifications',         [NotificationController::class, 'markAllNotifications']);
Route::delete('/notification/{id}',         [NotificationController::class, 'destroy']);


Route::get('/clear/route', function() {

    \Artisan::call('cache:clear');
    \Artisan::call('config:clear');
    \Artisan::call('route:clear');

    return 'Server Reset !';
});

Route::get('/send-mail', function () {

    $name = "Funny Coder";

    // The email sending is done using the to method on the Mail facade
    Mail::to('shady.ber9@gmail.com')->send(new MyTestEmail($name));


    return 'Email sent!';
});
