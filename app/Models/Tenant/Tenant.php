<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    public function roomRental() {
        return $this->hasMany('App\Models\Room\RoomRental');
    }

}
