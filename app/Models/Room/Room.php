<?php

namespace App\Models\Room;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_rooms';

    /**
     * Which building this room belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function building() {
        return $this->belongsTo('App\Models\Building\Building');
    }

    /**
     * Which floor this room is at
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function floor() {
        return $this->belongsTo('App\Models\Floor\Floor');
    }
}
