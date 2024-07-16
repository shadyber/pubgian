<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipingInfo extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',	'first_name',	'last_name',	'payer_id',	'business_name',	'country_code',	'city',
        'recipient_name',	'line1',	'state',	'street_address',
        'apartment_number',	'postal_code',
        'phone',
        'email',

    ];
    public function user() {
        return $this->belongsTo(User::class,'id');
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
