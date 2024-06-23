<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnlistedItem extends Model
{


protected $fillable= [
    'name' , 'description' , 'price_range' , 'images' , 'video_url' , 'shop_url' , 'order_urgency' , 'item_category_id'
];
    use HasFactory;
}
