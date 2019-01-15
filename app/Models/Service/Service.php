<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_services';

    /**
     * Which service rentals are in this service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomServiceRental() {
        return $this->hasMany('App\Models\Room\RoomServiceRental');
    }
}
