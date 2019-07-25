@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">

    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card mb-3 bg-none border-0">
          <div class="card-body">
            <h5 class="card-title">Doctor</h5>
            <p class="card-text"></p>

            <a href="{{url('Client/create')}}" class="btn btn-primary btn-sm float-right">Register Doctor</a>

           
            
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


<!-- Modal -->
<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="h6 text-muted text-truncate" id="exampleModalLabel">Client Info</p>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form">
              <div class="form-row">
                  <div class="col-md-12 col-lg-6">
                    <img class="img-user-sm rounded d-block img-fluid mx-auto mb-5" src="" id="pic1" alt="" style="min-width: 250px; height: auto;">
                  </div>

                  <div class="col-sm-12 col-md-12 col-lg-6">
                  <div class="row">
                  <div class="col-12 col-md-12">
                 
                    <p class="text-capitalize text-dark h3 font-weight-normal" id="name_show"></p>
                  </div>
                  
                  <div class="col-6 col-md-6">
                    <p class="h6 font-weight-bold mb-3"> <span id="price_show"></span></p>
                  </div>
                  
                  <div class="col-12 col-md-12">
                    <p class="text-capitalize text-dark my-0 small" id="description_show">  </p>
                  </div>
                  </div>
                  </div>

                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">


  $(document).on('click', '.show-modal', function() {

    // $('#pic').attr('src','/uploads/food picture/'+ ($(this).data('picture')));
    // $('#pic1').attr('src','/uploads/food picture/'+ ($(this).data('picture')));

    // $('#name_show').html($(this).data('name'));
    // $('#description_show').html($(this).data('description'));
    // $('#time_show').html($(this).data('time'));
    // $('#categories_show').html($(this).data('categories'));
   

   


    $('#showModal').modal('show');
  });


</script>

@endsection
