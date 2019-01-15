<?php

namespace App\Models\Room;

use Illuminate\Database\Eloquent\Model;

class RoomProductRental extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_products_rentals';

    public function roomRental() {
        return $this->belongsTo('App\Models\Room\RoomRental');
    }

    /**
     * Which products this rental belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product() {
        return $this->belongsTo('App\Models\Product\Product');
    }
}
