<?php

namespace App\Http\Controllers\Admin\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function index() {
        return view('admin.product.product');
    }

    public function add() {
        return view('admin.product.new');
    }

    public function edit($id) {
        return view('admin.product.edit');
    }

    public function save() {

    }
}
