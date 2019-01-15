<?php

namespace App\Http\Controllers\Admin\Room;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{

    public function index() {
        return view('admin.room.room');
    }

    public function add() {
        return view('admin.room.room.new');
    }

    public function edit($id) {
        return view('admin.room.room.edit');
    }

    public function save() {

    }
}
