<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authticatable;

class User extends Authticatable
{
    use HasApiTokens;

    protected $fillable = [
        'name', 'username', 'email', 'address', 'phone', 'website', 'company', 'password'
    ];

    protected $hidden = [
        'password'
    ];

    protected $casts = [ 'address' => 'json', 'company' => 'json'];

    public $timestamps = false;

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function todos()
    {
        return $this->hasMany('App\Todo');
    }

    public function albums()
    {
        return $this->hasMany('App\Album');
    }
}
