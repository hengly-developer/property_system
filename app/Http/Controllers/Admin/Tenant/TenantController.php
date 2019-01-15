<?php

namespace App\Http\Controllers\Admin\Tenant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenantController extends Controller
{

    public function index() {
        return view('admin.tenant.tenant');
    }

    public function add() {
        return view('admin.tenant.new');
    }

    public function edit($id) {
        return view('admin.tenant.edit');
    }

    public function save() {

    }
}
