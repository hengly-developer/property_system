<?php

namespace App\Http\Controllers\Admin\Property;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{

    public function index() {
        return view('admin.property.property');
    }

    public function add() {
        return view('admin.property.new');
    }

    public function edit() {
        return view('admin.property.edit');
    }
}
