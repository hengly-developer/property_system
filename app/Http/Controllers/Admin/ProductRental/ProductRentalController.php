<?php

namespace App\Http\Controllers\Admin\ProductRental;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductRentalController extends Controller
{

    public function index() {
        return view('admin.room.room-product-rental');
    }
}
