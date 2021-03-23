<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    //
    protected $table = "posts";


    public function image_get()
    {
        return $this->belongsTo('App\Models\Image', 'image');
    } public function cat_get()
    {
        return $this->belongsTo('App\Models\Catagory', 'cat_id');
    }
}
