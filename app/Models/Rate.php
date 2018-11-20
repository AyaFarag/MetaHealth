<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $fillable = [
        'star', 'post_id',
    ];

    public function post(){

        return $this->belongsTo( App\Models\Post::class );
    }
}
