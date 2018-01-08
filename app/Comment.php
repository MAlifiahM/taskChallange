<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'postId', 'name', 'email', 'body'
    ];

    protected $hidden = [

    ];

    public $timestamps = false;

    public function post()
    {
        return $this->belongsTo('App\Post', 'post_id');
    }
}
