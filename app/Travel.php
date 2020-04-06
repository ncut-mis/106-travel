<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Travel extends Model
{
    public function members()
    {
        return $this->belongsTo(Member::class);
    }
    //一個旅遊計畫會有多個行程
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
}

}
