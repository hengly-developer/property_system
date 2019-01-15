<?php

namespace App\Http\Controllers\Admin\Currency;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CurrencyController extends Controller
{

    public function index() {
        return view('admin.currency.currency');
    }
}
