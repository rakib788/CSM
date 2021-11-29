@extends('admin.layouts.master')
 @section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> <i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Add Client</li>
        </ol>
      </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-primary">
                    <div class="row">
                        <div class="col-md-6">
                               <div class="text-light"><h2><i class="fa fa-user-plus "></i> Client Information</h2></div>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('show.client') }}" class="btn btn-sm btn-dark text-light float-right">All Clients</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('update.client', $edit->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="type">Account Type</label>
                                            <select name="account_type" id="type" class="form-control">
                                                <option value="">Choose Account type</option>
                                                <option value="Active Account" <?php if( $edit->account_type == "Active Account") echo "selected" ?> >Active Account</option>
                                                <option value="inactive Account" <?php if( $edit->account_type == "inactive Account") echo "selected" ?>>inactive Account</option>
                                                <option value="Contact/Lead" <?php if( $edit->account_type == "Contact/Lead") echo "selected" ?>>Contact/Lead</option>
                                                <option value="Unknown" <?php if( $edit->account_type == "Unknown") echo "selected" ?>>Unknown</option>
                                            </select>
                                        </div>
                                    <div class="form-group">
                                        <label for="contact">Contact Name</label>
                                        <input type="text" name="contact_name" id="contact" value="{{ $edit->contact_name }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="company">Company Name</label>
                                        <input type="text" name="company" id="company" value="{{ $edit->company }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="c_number">Phone Number</label>
                                        <input type="number" name="c_number" id="c_number" value="{{ $edit->c_number }}"class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="text-dark control-label">Address</label>
                                        <input type="text" name="address" id="address" value="{{ $edit->address }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="city" class="text-dark control-label">City</label>
                                        <input type="text" name="city" id="city" value="{{ $edit->city }}" class="form-control">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="state" class="text-dark control-label">State</label>
                                                <input type="text" name="state" id="state" value="{{ $edit->state }}" class="form-control">
                                            </div>
                                            <div class="col form-group">
                                                <label for="zip" class="text-dark control-label">Zip Code</label>
                                                <input type="text" name="zipcode" id="zip" value="{{ $edit->zipcode }}" class="form-control">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label for="w_number" class="text-dark control-label">Work Phone Number</label>
                                            <input type="number" name="w_number" id="w_number" value="{{ $edit->w_number }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="o_number" class="text-dark control-label">Other Phone Number</label>
                                            <input type="number" name="o_number" id="o_number" value="{{ $edit->o_number }}"class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="website" class="text-dark control-label">Website Address</label>
                                            <input type="text" name="website" id="website" value="{{ $edit->website }}"class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="notes" class="text-dark control-label">Notes</label>
                                            <textarea name="notes" id="notes" cols="20" rows="4" class="form-control">value="{{ $edit->notes }}"</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <br>
                        <div class="form-group">
                            <input type="submit"  value="Update"  class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
