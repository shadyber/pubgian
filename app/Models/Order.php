<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'cart' , 'shipping_address_id' , 'user_id' ,'status' ,'payment_id'
    ];
    public function address(){
        return $this->hasOne(ShipingInfo::class,'id');
    }


    public function user(){
        return $this->belongsTo(User::class,'id');
    }

    public function payments(){
        return $this->hasMany(Payment::class, 'id');
    }

    public static function pendingOrders(){
        return Order::where('status','LIKE','created')->get();
}

public function getCart(){
        return json_decode($this->cart);
}

    public static function ordersByDate($start , $end){
        return Order::where('created_at','>=',$start)
            ->where('created_at','<=',$end)
            ->get();
    }
}
