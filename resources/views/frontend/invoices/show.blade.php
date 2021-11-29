@extends('frontend.layouts.app')
 @section('content')
<div class="container">
    <div class="form-group text-dark"><h1>Invoice Details</h1></div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header text-center"><h2 class="text-dark text-light" style="font-weight:bold">Invoice {{ $assignService->invoice_id }}</h2></div>
                <div class="card-body">

                    <table class="table table-bordered table-hover text-dark">
                        <tr>
                            <th colspan="8" class="text-dark text-light">Invoice Details</th>
                        </tr>
                        <tr>
                            <th class="text-info">Company Name</th>
                            <td>{{ $assignService->client->company }}</td>

                            <th class="text-info">Contact Name</th>
                            <td>{{ $assignService->client->contact_name }}</td>

                            <th class="text-info">Contact No.</th>
                            <td>{{ $assignService->client->c_number }}</td>

                            <th class="text-info">Eamil</th>
                            <td>{{ $assignService->client->email }}</td>
                        </tr>
                        <tr>
                            <th class="text-info">Account Id</th>
                            <td>{{ $assignService->client->account_id }}</td>

                            <th class="text-info">Invoice Date</th>
                            <td colspan="6"></td>
                        </tr>
                     <tr>
                        <th colspan="8">Service Details</th>
                     </tr>
                     <tr>
                         <th colspan="1" class="text-info">#</th>
                         <th colspan="5" class="text-info">Service</th>
                         <th colspan="2" class="text-info">Cost</th>
                     </tr>
                     @php
                         $total = 0
                     @endphp
                     @foreach ($assignServiceDetails as $row)
                     <tr>
                        <td colspan="1">1</td>
                        <td colspan="5">{{ $row->service->serviceName }}</td>
                        <td colspan="2">{{ $row->service->price }}</td>
                        <div style="display: none">
                            {{ $total =$total+$row->service->price }}
                        </div>
                    </tr>
                     @endforeach

                     <tr>
                         <th colspan="6" class="text-center text-info"> Grand Total</th>
                         <td colspan="2">{{ $total }}</td>
                     </tr>



                    </table>
                    <div>
                        <button onclick="window.print()" class="btn btn-primary">Print</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection

