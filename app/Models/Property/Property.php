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

    /**
     * @param string $gps
     *
     * @return array
     */
    public function getGPSPart($gps) {
        $gps = explode(',', $gps);
        if (isset($gps[0]) && isset($gps[1])) return $gps;
        return [0, 0];
    }

    protected static function validationRule($id = null) {
        return [
            'name' => 'required|unique:tbl_properties,name,' . $id . '|max:100',
            'property_type_id' => 'required'
        ];
    }

    /**
     * Translate validation
     *
     * @return array
     */
    protected static function validationMessage() {
        return [
            'name.required' => trans('validation.name_required'),
            'name.unique' => trans('validation.name_unique'),
            'property_type_id.required' => trans('validation.property_type_required')
        ];
    }
}
