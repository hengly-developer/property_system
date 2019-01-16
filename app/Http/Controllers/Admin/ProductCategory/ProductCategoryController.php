<?php

namespace App\Http\Controllers\Admin\ProductCategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductCategoryController extends Controller
{

    public function index() {
        return view('admin.category.category');
    }

    public function add() {
        return view('admin.category.new');
    }

    public function edit($id) {
        return view('admin.category.edit');
    }

    public function save() {

    }
}
