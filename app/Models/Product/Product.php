<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function productCategory() {
        return $this->belongsTo('App\Models\ProductCategory\ProductCategory');
    }

    public function productType() {
        return $this->belongsTo('App\Models\ProductType\ProductType');
    }

    public function roomProductRental() {
        return $this->hasMany('App\Models\Room\RoomProductRental');
    }
}
