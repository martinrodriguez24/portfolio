<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $fillable = ['post_id', 'category_id'];

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
