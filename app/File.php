<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table='files';

    public function attractions()
    {
        return $this->belongsTo(Attraction::class);
    }
    protected $fillable=[
        'title','description','path','attraction_id','is_feature',
    ];
}
