<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'albumId', 'title', 'url', 'thumbnailUrl'
    ];

    protected $hidden = [

    ];

    public $timestamps = false;

    public function album()
    {
        return $this->belongsTo('App\Album', 'album_id');
    }
}
