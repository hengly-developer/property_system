<?php

namespace App\Http\Controllers\Admin\Group;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{

    public function index() {
        return view('admin.group.group');
    }
}
