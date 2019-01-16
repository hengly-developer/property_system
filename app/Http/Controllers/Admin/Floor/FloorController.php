<?php

namespace App\Http\Controllers\Admin\Floor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FloorController extends Controller
{

    public function index() {
        return view('admin.floor.floor');
    }

    public function add() {
        return view('admin.floor.new');
    }

    public function save() {

    }
}
