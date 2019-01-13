<?php

namespace App\Models\PropertyType;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_properties_types';

    public function property() {
        return $this->hasMany('App\Models\Property\Property');
    }
}
