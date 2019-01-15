<?php

namespace App\Models\Room;

use Illuminate\Database\Eloquent\Model;

class RoomServiceRental extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_services_rentals';

    public function roomRental() {
        return $this->belongsTo('App\Models\Room\RoomRental');
    }

    /**
     * Which services this room belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service() {
        return $this->belongsTo('App\Models\Service\Service');
    }
}
