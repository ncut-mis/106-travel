<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guides_audit extends Model
{
    public function guides()
    {
        return $this->belongsTo(Guide::class);
    }
}
