<?php

namespace App\Models\Property;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_properties';

    public function propertyType() {
        return $this->belongsTo('App\Models\PropertyType\PropertyType');
    }

    public function building() {
        return $this->hasMany('App\Models\Building\Building');
    }
}
