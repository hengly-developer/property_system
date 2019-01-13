<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function roomServiceRental() {
        return $this->hasMany('App\Models\Room\RoomServiceRental');
    }
}
