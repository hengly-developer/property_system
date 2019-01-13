<?php

namespace App\Models\Room;

use Illuminate\Database\Eloquent\Model;

class RoomRental extends Model
{
    public function roomProductRental() {
        return $this->hasMany('App\Models\Room\RoomProductRental');
    }

    public function roomServiceRental() {
        return $this->hasMany('App\Models\Room\RoomServiceRental');
    }

    public function tenant() {
        return $this->belongsTo('App\Models\Tenant\Tenant');
    }

    public function contract() {
        return $this->belongsTo('App\Models\Contract\Contract');
    }
}
