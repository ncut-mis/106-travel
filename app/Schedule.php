<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function travel()
    {
        return $this->belongsTo(Travel::class);
    }

    public function guide()
    {
        return $this->belongsTo(Guide::class);
    }
}
