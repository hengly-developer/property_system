<?php

namespace App\Models\Contract;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_contracts';

    /**
     * Which room rental this contract has been applied
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomRental() {
        return $this->hasMany('App\Models\Room\RoomRental');
    }
}
