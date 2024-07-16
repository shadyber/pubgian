<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Item extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable=['name','slug','detail','item_category_id','thumb', 'photo', 'video_url', 'color','price','user_id','tags','weight','init_qnt','status', 'condition', 'badge'];

    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug'=>['source'=>'name']
        ];
    }


    public function addToCart(int $productId): void
    {
        Cart::add(Item::where('id', $productId)->first());
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

   public function variety(){
        return $this->hasMany(Verity::class);
    }


    public function Category(){
        return $this->belongsTo(ItemCategory::class,'item_category_id');
    }

    public function itemPhotos(){
        return $this->hasMany(ItemPhoto::class);
    }


    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public static function lastN($n){
        return Item::orderBy('id', 'desc')->take($n)->get();
    }

    public static function popularN($n){
        return Item::orderBy('visit', 'desc')->take($n)->get();
    }
    public static function lastNCategory($n, $cat){
        return Item::where('item_category_id',$cat)->orderBy('id','desc')->take($n)->get();
    }
    public static function popularNCategory($n,$cat){
        return Item::where('item_category_id',$cat)->orderBy('visit', 'desc')->take($n)->get();
    }

}
