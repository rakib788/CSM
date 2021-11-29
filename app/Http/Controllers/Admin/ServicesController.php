<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service;
use App\Models\Client;
use App\Models\AssignService;
use App\Models\AssignServiceDetails;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class ServicesController extends Controller
{
    public function index(){
        return view('admin.services.index');
    }
    public function store(Request $request){
        $request->validate([
            'serviceName'=> 'required|min:4',
            'price'      => 'required',
        ]);
        $serv = new service;
        $serv->serviceName = $request->serviceName;
        $serv->price = $request->price;
        $serv->save();
        return Redirect()->back()->with('message','Your data insert successfull');
    }
    public function show(){
        $show = service::orderBy('id','desc')->paginate(10);
        return view('admin.services.show', compact('show'));
    }
    public function ServiceDelete($id){
        $dlt = service::find($id);
        $dlt->delete();
        return redirect()->back();
    }
    public function ServiceEdit($id){
        $edit = service::find($id);
        return view('admin.services.edit', compact('edit'));
    }
    public function ServiceUpdate( Request $request,$id){
        $update = service::find($id);
        $update->serviceName = $request->serviceName;
        $update->price = $request->price;
        $update->save();
        return redirect()->route('show.service');
    }
    public function AssignService($id){
        $client = Client::find($id);
        $assign = service::orderBy('id','desc')->paginate(10);
        return view('admin.services.assignService', compact('assign','client'));
    }

    public function storeService(Request $request)
    {
        $id = AssignService::count()+1;
        // $generate_id = Str::random(7).$id;
        $generate_id = "123456".$id;

        $data = [
            'client_id'=>$request->client_id,
            'invoice_id'=>$generate_id,
        ];
        $id = AssignService::insertGetId($data);

        foreach($request->service as $row){
            $pdata[]=[
                'assignService_id'=>$id,
                'service_id'=>$row,
            ];
        }
        AssignServiceDetails::insert($pdata);

        return view('admin.invoices.generateId',['invoice_id'=>$generate_id]);
    }
}
