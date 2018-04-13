<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = [
        'filename',
        'extension',
        'mimetype',
        'uri',
        'title',
        'caption',
        'location',
        'published',
    ];

    public function bleat()
    {
        return $this->belongsTo(Bleat::class);
    }
}
