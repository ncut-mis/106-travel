<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    public function passenger()
    {
        return $this->belongsTo(Passenger::class);
    }
    //一個旅遊計畫會有多個行程
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
