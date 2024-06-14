<?php

namespace App\Http\Controllers;

use App\Models\ShipingInfo;
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
    $shippinginfo=ShipingInfo::update([
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
        Return redirect()->route('payment');

    }

}
