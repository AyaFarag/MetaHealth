<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'category_id'
    ];

    public function comment(){

        return $this->hasMany( App\Models\Comment::class );
    }
    
    public function rate(){

        return $this->hasMany( App\Models\Rate::class );
    }
    
    public function category(){

        return $this->belongsTo( App\Models\Category::class );
    }
}


