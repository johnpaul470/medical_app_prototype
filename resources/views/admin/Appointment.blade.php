@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">

    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card mb-3 bg-none border-0">
          <div class="card-body">
            <h5 class="card-title">Appointment</h5>
            <p class="card-text"></p>

            <a href="{{url('Client/create')}}" class="btn btn-primary btn-sm float-right">Register Appointment</a>

           
            
          </div>
        </div>
      </div>

      
              <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card mb-3">
          <div class="card-body p-0">
            <div class="table-responsive">
            
             <table class="table table-striped table-hover mb-0">
              <thead>
                <tr>
                  <th class="border-top-0 px-4 text-muted small" scope="col">Full Name</th>
                  <th class="border-top-0 px-4 text-muted small" scope="col">Email</th>
                  <th class="border-top-0 px-4 text-muted small" scope="col">Address</th>
                  <th class="border-top-0 px-4 text-muted small" scope="col">Phone Number</th>
                  <th class="border-top-0 px-4 text-muted small" scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                
         </tbody>
       </table>

     


    </div>
  </div>
</div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end mx-3 pagination-sm">



  </ul>
</nav>
</div>



        </div>
    </div>
</div>



@endsection
