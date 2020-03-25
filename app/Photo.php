<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    public function attraction()
    {
        return $this->belongsTo(Attraction::class);
    }
}
