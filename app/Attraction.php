<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    public function guide()
    {
        return $this->belongsTo(Guide::class);
    }
    public function photo()
    {
        //一對多
        return $this->hasMany(Photo::class);
    }
    public function video()
    {
        //一對多
        return $this->hasMany(Video::class);
    }
}
