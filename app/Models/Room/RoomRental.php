<?php

namespace App\Models\Room;

use Illuminate\Database\Eloquent\Model;

class RoomRental extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_rooms_rentals';

    /**
     * How many products have been rented to a room
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomProductRental() {
        return $this->hasMany('App\Models\Room\RoomProductRental');
    }

    /**
     * How many services have been rented to a room
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomServiceRental() {
        return $this->hasMany('App\Models\Room\RoomServiceRental');
    }

    /**
     * Which tenant rent this room
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tenant() {
        return $this->belongsTo('App\Models\Tenant\Tenant');
    }

    /**
     * Which contract applies to this room
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contract() {
        return $this->belongsTo('App\Models\Contract\Contract');
    }
}
