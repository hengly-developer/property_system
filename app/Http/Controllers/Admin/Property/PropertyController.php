<?php

namespace App\Http\Controllers\Admin\Property;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{

    public function property() {
        echo 'work';
        return view('admin.property.property');
    }
}
