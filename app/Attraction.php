<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    public function guides()
{
    return $this->belongsTo(Guide::class);
}
    public function photos()
    {
        //一對多
        return $this->hasMany(Photo::class);
    }
    public function videos()
    {
        //一對多
        return $this->hasMany(Video::class);
    }
    protected  $fillable=[
        'name',
        'location',
        'content',
        'price',
        'status',
        'guide_id',
        'reservation',
        'is_feature',
    ];

    protected $table='attractions';

}
