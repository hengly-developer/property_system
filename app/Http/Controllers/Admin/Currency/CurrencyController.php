<?php

namespace App\Http\Controllers\Admin\Currency;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CurrencyController extends Controller
{

    public function index() {
        return view('admin.currency.currency');
    }

    public function add() {
        return view('admin.currency.new');
    }

    public function edit($id) {
        return view('admin.currency.edit');
    }

    public function save() {

    }
}
