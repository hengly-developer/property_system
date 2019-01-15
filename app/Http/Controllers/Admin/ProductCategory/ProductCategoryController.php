<?php

namespace App\Http\Controllers\Admin\ProductCategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductCategoryController extends Controller
{

    public function index() {
        return view('admin.category.category');
    }
}
