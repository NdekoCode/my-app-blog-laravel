<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'image_desc_small', 'image_desc_big', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    //
}
