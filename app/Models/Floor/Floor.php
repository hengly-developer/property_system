<?php

namespace App\Models\Floor;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_floors';

    /**
     * How many rooms this floor has been assigned to
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function room() {
        return $this->hasMany('App\Models\Room\Room');
    }
}
