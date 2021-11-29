@extends('admin.layouts.master')
 @section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> <i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Services List</li>
        </ol>
      </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6"><h4>All Services</h4></div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.index') }}" class="btn btn-sm btn-primary float-right"><i class="fa fa-plus"></i> Add</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <tr class="bg-info text-white">
                            @csrf
                            <th>#</th>
                            <th>Service Name</th>
                            <th>Price of Services</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($show as $row)
                        <tr>
                            <td>{{ $i++}}</td>
                            <td>{{ $row->serviceName}}</td>
                            <td>{{ $row->price }}</td>
                            <td>{{ $row->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route('edit.service',$row->id) }}" class="badge badge-pill badge-primary"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('delete.service',$row->id) }}" class="badge badge-pill badge-danger"><i class="fa fa-trash"></i></a>
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
