@extends('admin.layouts.master')
 @section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> <i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Client List</li>
        </ol>
      </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6"><h4 class="text-dark">All Clients</h4></div>
                            <div class="col-md-6">
                                <a href="{{ route('create.client') }}" class="btn btn-sm btn-primary float-right"><i class="fa fa-plus"></i> Add</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <tr class="bg-info text-white">
                            @csrf
                            <th>#</th>
                            <th>Account Id</th>
                            <th>Account Type</th>
                            <th>Contact Name</th>
                            <th>Company Name</th>
                            <th>Phone Number</th>
                            <th>Setting</th>
                        </tr>
                        @php($i=1)
                        @foreach ( $show as $row)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $row->account_id }}</td>
                            <td>{{ $row->account_type }}</td>
                            <td>{{ $row->contact_name }}</td>
                            <td>{{ $row->company }}</td>
                            <td>{{ $row->c_number }}</td>
                            <td>
                                <a href="{{ route('edit.client',$row->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ route('assign.services', $row->id) }}" class="btn btn-sm btn-danger">Assign Services</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                {{ $show->links()}}
            </div>
            <div>
            </div>

        </div>
    </div>
</div>

 @endsection
