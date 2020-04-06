<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    //一個導遊可以帶多個行程
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function bosss()
    {
        return $this->belongsTo(Boss::class);
    }
    //一個導遊有很多專長景點
    public function attractions()
    {
        return $this->hasMany(Attraction::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }


}
