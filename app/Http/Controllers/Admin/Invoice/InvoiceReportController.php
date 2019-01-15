<?php

namespace App\Http\Controllers\Admin\Invoice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceReportController extends Controller
{

    public function index() {
        return view('admin.invoice-report.invoice-report');
    }
}
