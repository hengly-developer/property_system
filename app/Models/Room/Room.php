<?php

namespace App\Models\Room;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function building() {
        return $this->belongsTo('App\Models\Building\Building');
    }

    public function floor() {
        return $this->belongsTo('App\Models\Floor\Floor');
    }
}
