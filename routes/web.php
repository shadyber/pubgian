<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/shop', function () {
    $items=\App\Models\Item::lastN(12);
    return view('shop.index')->with(['items'=>$items]);
});

Route::resource('/item',\App\Http\Controllers\ItemController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
