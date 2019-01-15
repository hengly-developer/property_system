<?php

namespace App\Http\Controllers\Admin\Building;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuildingController extends Controller
{

    public function index() {
        return view('admin.building.building');
    }

    public function add() {
        return view('admin.building.new');
    }

    public function edit($id) {
        return view('admin.building.edit');
    }

    public function save() {

    }
}
