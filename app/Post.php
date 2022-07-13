<?php

namespace App;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public static function slugGenerator($titleName){
        $c=0;
        $slug= Str::slug($titleName , '-');
        $slug_base = $slug;
        $find_post= Post::where('slug', $slug)->first();
        while ($find_post) {
        $slug= $slug_base . '_'. $c;
        $c++;
        $find_post= Post::where('slug', $slug)->first();
        }
        return $slug;
    }
}

