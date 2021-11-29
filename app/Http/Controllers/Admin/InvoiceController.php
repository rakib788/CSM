<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\InvoiceController;
use App\Models\AssignService;
use App\Models\AssignServiceDetails;
use App\Models\Client;

class InvoiceController extends Controller
{
   public function create(){

        $assignService = AssignService::with('client')->get();
        return view('admin.invoices.create', compact('assignService'));
   }
   public function show($id){
       $assignService = AssignService::with('client')->where('id', $id)->first();
       $assignServiceDetails = AssignServiceDetails::where('assignService_id', $id)->get();
       return view('admin.invoices.show', compact('assignService', 'assignServiceDetails'));
   }
   public function createInvoice(){
       $assignService = AssignService::with('client')->get();
        return view('frontend.invoices.create', compact('assignService'));
   }

   public function showInvoice($id){
 
}
}
