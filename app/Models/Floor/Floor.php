<?php

namespace App\Models\Floor;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    public function room() {
        return $this->hasMany('App\Models\Room\Room');
    }
}
