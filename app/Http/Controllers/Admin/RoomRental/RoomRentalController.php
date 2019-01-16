<?php

namespace App\Http\Controllers\Admin\RoomRental;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomRentalController extends Controller
{

    public function index() {
        return view('admin.room.room-rental');
    }

    public function add() {
        return view('admin.room.room.room-rental-new');
    }

    public function edit($id) {
        return view('admin.room.room.room-rental-edit');
    }
}
