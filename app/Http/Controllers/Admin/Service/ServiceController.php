<?php

namespace App\Http\Controllers\Admin\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{

    public function index() {
        return view('admin.service.service');
    }

    public function add() {
        return view('admin.service.new');
    }

    public function edit($id) {
        return view('admin.service.edit');
    }

    public function save() {

    }
}
