@extends('admin.layouts.master')
 @section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> <i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Assign Services</li>
        </ol>
      </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-info">

                        <div class="row text-white text-light">
                            <div class="col-md-6"><h2>Assign Services</h2></div>

                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('store.service') }}" method="POST">
                        @csrf
                    <table class="table table-bordered table-hover table-striped">
                        <tr class=" text-dark">
                            @csrf
                            <th>#</th>
                            <th>Service Name</th>
                            <th>Services Price</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)

                        @foreach($assign as $row)
                        <tr>
                            <td>{{ $i++}}</td>
                            <td>{{ $row->serviceName}}</td>
                            <td>{{ $row->price }}</td>
                            <td>
                                <input type="checkbox" name="service[]" value="{{ $row->id }}">
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <input type="hidden" name="client_id" value="{{ $client->id }}">

                    <div class="text-center">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>
                </div>
                {{ $assign->links()}}
            </div>
            <div>
            </div>

        </div>
    </div>
</div>

 @endsection
