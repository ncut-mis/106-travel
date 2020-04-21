<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\travels;
use App\guides;

class Schedule extends Model
{
    public function travels()
    {
        return $this->belongsTo(Travel::class);
    }

    public function guides()
    {
        return $this->belongsTo(Guide::class);
    }
    protected  $fillable=[
        'region',
        'start',
        'end',
        'content',
        'cost',
        'is_feature',
    ];

    //protected $table='schedules';
}
