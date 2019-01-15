<?php

namespace App\Models\Property;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_properties';

    /**
     * Which property type this property belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function propertyType() {
        return $this->belongsTo('App\Models\PropertyType\PropertyType');
    }

    /**
     * Which buildings are in this property
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function building() {
        return $this->hasMany('App\Models\Building\Building');
    }
}
