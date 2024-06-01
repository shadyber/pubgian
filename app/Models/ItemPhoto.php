<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPhoto extends Model
{
    use HasFactory;
    protected $fillable = ['photo','thumb','item_id','verity_id','title'];

    public function item(){
        return $this->belongsTo(Item::class);
    }
    public function verity(){
        return $this->belongsTo(Verity::class);
    }


    public static function varityPhoto($n){

        return ItemPhotos::orderBy('id', 'asc')->where('verity_id','LIKE',$n)->get();
    }
}
