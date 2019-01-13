<?php

namespace App\Models\Room;

use Illuminate\Database\Eloquent\Model;

class RoomServiceRental extends Model
{
    public function roomRental() {
        return $this->belongsTo('App\Models\Room\RoomRental');
    }

    public function service() {
        return $this->belongsTo('App\Models\Service\Service');
    }
}
