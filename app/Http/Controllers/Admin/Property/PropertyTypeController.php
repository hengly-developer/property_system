<?php

namespace App\Http\Controllers\Admin\Property;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyTypeController extends Controller
{

    public function index() {
        return view('admin.property.property-type');
    }

    public function add() {
        return view('admin.property.type.new');
    }

    public function edit() {
        return view('admin.property.type.edit');
    }
}
