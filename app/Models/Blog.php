<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
class Blog extends Model
{
    use HasFactory;

    use Sluggable;
    protected $fillable = [
        'title',
        'slug',
        'detail',
        'photo',
        'thumb',
        'slug',
        'tags',
        'user_id',
        'blog_category_id',
    ];

    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug'=>['source'=>'title']
        ];
    }
    public function getlink(){
        return url('/blog/'.$this->slug);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }


    public function category(){
        return $this->belongsTo(BlogCategory::class,'blog_category_id','id');
    }

    public function blogComments()
    {
        return $this->hasMany(BlogComment::class);
    }



    public static function lastN($n){
        return Blog::orderBy('id', 'desc')->take($n)->get();
    }

    public static function trandinN($n){
        return Blog::orderBy('visit', 'desc')->take($n)->get();
    }


    public static function popularN($n){
        return Blog::orderBy('visit', 'desc')->take($n)->get();
    }

    public static function featuredN($n){
        return Blog::query()
            ->where('tags', 'LIKE', "%featured %")->orderBy('id','desc')

            ->get();

    }


}
