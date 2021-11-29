<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function create(){
        return view('admin.reports.dateReport');
    }
public function salesCreate(){
    return view('admin.reports.saleReport');
}
}
