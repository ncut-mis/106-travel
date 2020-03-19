<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boss extends Model
{
    //一個業者審核多個導遊
    public function guide()
    {
        return $this->hasMany(Guide::class);
    }
}
