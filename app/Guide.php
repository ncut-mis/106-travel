<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    //一個導遊可以帶多個行程
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }

    public function boss()
    {
        return $this->belongsTo(Boss::class);
    }
    //一個導遊有很多專長景點
    public function attraction()
    {
        return $this->hasMany(Attraction::class);
    }
}
