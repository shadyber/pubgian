<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class ItemCategory extends Model
{
    use HasFactory;

    public static function allCategories(){
        return ItemCategory::all();
    }
    public function  items(){
        return $this->hasMany(Item::class);
}
}
