<?php

namespace App\Models\ProductCategory;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public function product() {
        return $this->hasMany('App\Models\Product\Product');
    }
}
