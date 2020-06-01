<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table='photos';

    public function attractions()
    {
        return $this->belongsTo(Attraction::class);
    }
    protected $fillable=[
        'attraction_id','path','is_feature'

    ];
}
