<?php

namespace App\Http\Controllers\Admin\RoomRental;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomRentalController extends Controller
{

    public function index() {
        return view('admin.room.room-rental');
    }
}
