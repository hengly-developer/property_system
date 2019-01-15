<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_tenants';

    /**
     * Which room rental are covered by this tenant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomRental() {
        return $this->hasMany('App\Models\Room\RoomRental');
    }

}
