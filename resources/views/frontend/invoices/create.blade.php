@extends('frontend.layouts.app')
 @section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('client.dashboard') }}"> <i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Invoice</li>
        </ol>
      </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2 class="text-dark text-light">Invoice</h2></div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped text-dark">
                       <tr>
                        <th>#</th>
                        <th>Invoice Id</th>
                        <th>Companay Name</th>
                        <th>Contact Name</th>
                        <th>Invoice Date</th>
                        <th>Action</th>
                       </tr>
                       @php
                           ($i=1)
                       @endphp
                       @foreach ($assignService as $row)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $row->invoice_id }}</td>
                            <td>{{ $row->client->company }}</td>
                            <td>{{ $row->client->contact_name }}</td>
                            <td>{{ $row->client->created_at }}</td>
                            <td>
                                <a href="{{ route('clientInvoiceshow',$row->id) }}" class="badge badge-pill badge-info"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                       @endforeach


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
