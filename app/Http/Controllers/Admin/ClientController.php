<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Client;

class ClientController extends Controller
{
    public function create(){
        return view('admin.client.create');
    }
    public function store(Request $request){
        $request->validate([
            'account_type' => 'required',
            'contact_name' => 'required',
            'company' => 'required',
            'address' => 'required',
            'city' => 'required',
            'email' => 'required',
            'password' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'w_number' => 'required',
            'c_number' => 'required',
            'o_number' => 'required',
            'website' => 'required',
            'notes' => 'required',
        ]);

            $id = Client::count()+1;
            $generate_id =date('Y')."1997".$id;

        $client = new Client;
        $data = [
            'account_id'=>$generate_id,
            'account_type'=>$request->account_type,
            'contact_name'=>$request->contact_name,
            'company'=>$request->company,
            'address'=>$request->address,
            'city'=>$request->city,
            'email'=>$request->email,
            'password'=>$request->password,
            'state'=>$request->state,
            'zipcode'=>$request->zipcode,
            'w_number'=>$request->w_number,
            'c_number'=>$request->c_number,
            'o_number'=>$request->o_number,
            'website'=>$request->website,
            'notes'=>$request->notes,
        ];
        $client->create($data);
        return Redirect()->back()->with('message','Your data insert successfull');
        }
    public function show(){
        $show = Client::orderBy('id','desc')->paginate(5);
        return view('admin.client.show', compact('show'));
    }
    public function editClient($id){
      $edit= Client::find($id);
      return view('admin.client.edit', compact('edit'));

    }
    public function updateClient(Request $request, $id){
     $update= Client::find($id);
     $data=[
        'account_type'=>$request->account_type,
        'contact_name'=>$request->contact_name,
        'company'=>$request->company,
        'address'=>$request->address,
        'city'=>$request->city,
        'state'=>$request->state,
        'zipcode'=>$request->zipcode,
        'w_number'=>$request->w_number,
        'c_number'=>$request->c_number,
        'o_number'=>$request->o_number,
        'website'=>$request->website,
        'notes'=>$request->notes,
     ];
     $update->update($data);
     return redirect()->route('show.client');
    }

}
