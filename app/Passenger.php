<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    public function travels()
    {
        //一個會員對多個旅遊
        return $this->hasMany(Travel::class);
    }
}
