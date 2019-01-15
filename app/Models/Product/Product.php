<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_products';

    /**
     * Which category this product belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productCategory() {
        return $this->belongsTo('App\Models\ProductCategory\ProductCategory');
    }

    /**
     * Which product type this product is in
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productType() {
        return $this->belongsTo('App\Models\ProductType\ProductType');
    }

    /**
     * Which rental this product is in
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomProductRental() {
        return $this->hasMany('App\Models\Room\RoomProductRental');
    }
}
