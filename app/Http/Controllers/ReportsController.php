<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function report_fun(){
        return view('Components/reports/reports');
    }
    public function report_sales_fun(){
        return view('Components/reports/reports-sales');
    }
    public function report_payments_fun(){
        return view('Components/reports/reports-payments');
    }
}
