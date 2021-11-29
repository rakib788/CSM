@extends('admin.layouts.master')
 @section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> <i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><small>update Services </small> </li>
        </ol>
      </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="row">
                        <div class="col-md-6">
                               <div class="text-light"><h2>Edit Services</h2></div>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('show.service') }}" class="btn btn-sm btn-dark text-light float-right">All Services</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('update.services',$edit->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label for="name">Service Name</label>
                        <input type="text" name="serviceName" id="name" value="{{ $edit->serviceName }}" class="form-control" placeholder="Services name">
                    </div>
                    <div class="form-group">
                        <label for="price">Price of Services</label>
                        <input type="text" name="price" id="price" value="{{ $edit->price }}" class="form-control" placeholder="price of services">
                    </div>
                    <input type="submit" name="submit" value="Update"  class="btn btn-sm btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection

