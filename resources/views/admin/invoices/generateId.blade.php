@extends('admin.layouts.master')
 @section('main')
<div class="container ">
    <div class="row">
        <div class="col-md-6 offset-4">
            <div class="card shadow">
                <div class="card-body text-center bg-primary text-white">
                    <p>Your Invoice Id is: {{ $invoice_id }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection

