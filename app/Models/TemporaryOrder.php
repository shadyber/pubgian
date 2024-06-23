<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryOrder extends Model
{
    use HasFactory;
protected $fillable=[
    'cart' , 'shipping_address_id' , 'user_id' ,'status' 
];

    public function address(){
        return $this->hasOne(ShippingInfo::class,'id');
    }


    public function user(){
        return $this->belongsTo(User::class,'id');
    }





}
