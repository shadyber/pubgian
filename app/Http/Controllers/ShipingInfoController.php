<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\ShipingInfo;
use App\Models\TemporaryOrder;
use App\Notifications\TemporaryOrderNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShipingInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function saveshipinginfo(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

$shippinginfo=ShipingInfo::find(Auth::user()->shippinginfo);
if($shippinginfo!=null){
    $shippinginfo= (new ShipingInfo)->update([
        'user_id'=>\auth()->user()->getAuthIdentifier(),
        'first_name'=>$request->input('first_name'),
        'last_name'=>$request->input('first_name'),
        'email'=>$request->input('email'),
        'phone'=>$request->input('phone'),
        'street_address'=>$request->input('street_address'),
        'country_code'=>$request->input('country_code'),
        'city'=>$request->input('city'),
        'apartment_number'=>$request->input('apartment_number'),

    ]);
}
else{

    $shippinginfo=ShipingInfo::create([
        'user_id'=>\auth()->user()->getAuthIdentifier(),
        'first_name'=>$request->input('first_name'),
        'last_name'=>$request->input('first_name'),
        'email'=>$request->input('email'),
        'phone'=>$request->input('phone'),
        'street_address'=>$request->input('street_address'),
        'country_code'=>$request->input('country_code'),
        'city'=>$request->input('city'),
        'apartment_number'=>$request->input('apartment_number'),
    ]);
}



 $cart_json=json_encode(Cart::myCart());


$temp_order=TemporaryOrder::create(
  [
      'cart'=>$cart_json,
      'payment_expected'=>Cart::totalCart(),
      'items_count'=>count(Cart::myCart()),
      'user_id' =>\auth()->user()->getAuthIdentifier(),
      'shipping_address_id'=>\auth()->user()->shippingInfo->id

  ]
);
//notify email
Auth::user()->Notify(new TemporaryOrderNotification($temp_order,$shippinginfo));


        Return redirect()->route('payment');

    }

}
