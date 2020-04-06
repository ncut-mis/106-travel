<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function travels()
    {
        return $this->belongsTo(Travel::class);
    }

    public function guides()
    {
        return $this->belongsTo(Guide::class);
    }
}
