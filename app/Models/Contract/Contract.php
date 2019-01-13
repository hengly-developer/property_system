<?php

namespace App\Models\Contract;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    public function roomRental() {
        return $this->hasMany('App\Models\Room\RoomRental');
    }
}
