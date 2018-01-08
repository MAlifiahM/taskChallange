<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'userId', 'title'
    ];

    protected $hidden = [

    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
