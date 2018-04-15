<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bleat extends Model
{
    protected $fillable = [
        'bleat',
        'picture_id'
    ];

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function links()
    {
        return $this->hasMany(Link::class);
    }
}
