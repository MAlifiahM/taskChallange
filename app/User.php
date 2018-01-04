<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 'username', 'email', 'address', 'phone', 'website', 'company',
    ];

    protected $hidden = [

    ];

    public $timestamps = false;

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
