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
     * @var array $validations
     */
    public static $validations = [
        'name' => 'required|unique:tbl_properties_types|max:100',
    ];


    /**
     * Which properties are in this property type
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function property() {
        return $this->hasMany('App\Models\Property\Property');
    }

    protected static function validationMessage() {
        return [
            'name.required' => trans('validation.name_required'),
            'name.unique' => trans('validation.name_unique')
        ];
    }
}
