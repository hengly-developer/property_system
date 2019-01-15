<?php

namespace App\Models\ProductCategory;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_products_categories';

    /**
     * Which products are in this category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product() {
        return $this->hasMany('App\Models\Product\Product');
    }
}
