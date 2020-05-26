<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    public function attractions()
    {
        return $this->belongsTo(Attraction::class);
    }

    protected $fillable=[
        'attraction_id','path',
    ];
}
