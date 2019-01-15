<?php

namespace App\Http\Controllers\Admin\Building;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuildingController extends Controller
{

    public function index() {
        return view('admin.building.building');
    }
}
