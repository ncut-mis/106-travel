<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function travels()
    {
        //一個會員對多個旅遊
        return $this->hasMany(Travel::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    protected  $fillable=[

        'user_id',
    ];
}
