<?php

namespace App\Models\Room;

use Illuminate\Database\Eloquent\Model;

class RoomProductRental extends Model
{
    public function roomRental() {
        return $this->belongsTo('App\Models\Room\RoomRental');
    }

    public function product() {
        return $this->belongsTo('App\Models\Product\Product');
    }
}
