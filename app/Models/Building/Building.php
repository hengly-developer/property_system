<?php

namespace App\Models\Building;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'tbl_buildings';

    public function property() {
        return $this->belongsTo('App\Models\Property\Property');
    }

    /**
     * How many rooms this building has
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function room() {
        return $this->hasMany('App\Models\Room\Room');
    }
}
