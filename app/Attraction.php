<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    public function guide()
    {
        return $this->belongsTo(Guide::class);
    }
}
