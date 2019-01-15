<?php

namespace App\Http\Controllers\Admin\ServiceRental;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceRentalController extends Controller
{

    public function index() {
        return view('admin.room.room-service-rental');
    }
}
