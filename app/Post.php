<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'userId', 'title', 'body'
    ];

    protected $hidden = [

    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
