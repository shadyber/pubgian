<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\ShipingInfo;
use App\Models\TemporaryOrder;
use Illuminate\Http\Request;

class TemporaryOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show($temporaryOrder)
    {

       $order=TemporaryOrder::find($temporaryOrder);
       $cart=json_decode($order->cart);
       $user=$order->user_id;
       $shipping_address=ShipingInfo::find($order->shipping_address_id);

       session()->remove('cart');

       foreach ($cart as $car){
           CartController::manualcart($car->id,$car->quantity);
       }
        return view('checkout.late')->with(['order'=>$order,'user_id'=>$user,'carts'=>$cart,'shippinginfo'=>$shipping_address]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TemporaryOrder $temporaryOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TemporaryOrder $temporaryOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TemporaryOrder $temporaryOrder)
    {
        //
    }
}
