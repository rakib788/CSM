@extends('admin.layouts.master')
 @section('main')
<div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> <i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Between Date Reports</li>
        </ol>
      </nav>
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header text-dark"><h4>Between Date Reports</h4></div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group text-dark">
                            <label for="f_date"> From Date</label>
                            <input type="date" value="" id="f_date" name="from_date" class="form-control">
                        </div>
                        <div class="form-group text-dark">
                            <label for="t_date"> To Date</label>
                            <input type="date" value="" id="t_date" name="t_date" class="form-control">
                        </div>
                            <div class="form-group">
                                <input type="radio" id="monthly" name="date" value="monthly">
                                <label for="monthly">Monthly</label>
                            
                                <input type="radio" id="yearly" name="date" value="yearly">
                                <label for="yearly">Yearly</label>
                            </div>
                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
