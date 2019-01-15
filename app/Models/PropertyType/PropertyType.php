<?php

namespace App\Models\PropertyType;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_properties_types';

    /**
     * Which properties are in this property type
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function property() {
        return $this->hasMany('App\Models\Property\Property');
    }
}
