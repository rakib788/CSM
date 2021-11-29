@extends('admin.layouts.master')
 @section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> <i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Add Services</li>
        </ol>
      </nav>
    @if($errors->any())
     @foreach($errors->all() as $error)
         <div class="text-danger">{{ $error }}</div>
     @endforeach
    @endif
    @if(session('message'))
    <div class="alert alert-success">
       {{ session('message') }}
    </div>
   @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                 <div class="card-header text-light bg-primary" >
                        <div class="row">
                            <div class="col-md-6"><h4>Add Service</h4></div>
                            <div class="col-md-6">
                                <a href="{{ route('show.service') }}" class="btn btn-sm btn-dark float-right">All Services</a>
                            </div>
                        </div>
                 </div>
                <div class="card-body">
                    <form action="{{ route('insert.services') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label for="name" class="text-dark">Service Name</label>
                        <input type="text" name="serviceName" id="name" value="{{ old('serviceName') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="price" class="text-dark">Price of Services</label>
                        <input type="text" name="price" id="price" value="{{ old('price') }}" class="form-control">
                    </div>
                    <input type="submit" name="submit" value="Save"  class="btn  btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
