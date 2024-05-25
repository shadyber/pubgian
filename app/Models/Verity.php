<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verity extends Model
{
    use HasFactory;
    protected $fillable=['title','thumb','photo'];

    public function item(){
        return $this->belongsTo(Item::class);
    }
    public static function photos($vid){
        return ItemPhotos::orderBy('id','desc')->where('verity_id','LIKE',$vid)->get();
    }

}
