@extends('layouts.app')
@section('title')
| {{isset($data)?'Edit':'Add'}} Client
@stop
@section('content')

<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">

<!--       <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card mb-3 bg-none border-0">
          <div class="card-body">
            <h5 class="card-title text-capitalize">{{isset($menu)?'Edit':'New'}} Client</h5>
          </div>
        </div>
      </div> -->

      <div class="col-md-12 col-lg-12">
        <a href="{{url('Client')}}" class="btn btn-danger btn-sm mb-3"><i class="fas fa-arrow-left"></i> Go Back </a>
        <div class="card mb-3">

          <div class="card-body">
            @if(isset($data))
            {!! Form::model($data,['method'=>'put','files' => true,'novalidate' => 'novalidate']) !!}
            @else
            {!! Form::open(array('files' => true))  !!}
            @endif


  <div class="container">
  <div class="row">
    <div class="col-md-9">

<!-- START 1ST ROW SECTION -->     
       <div class="form-row">
              <div class="col-md-4">

                <label class="small text-muted">First Name</label>

                {!! Form::text("first_name",null,["class"=>"form-control text-capitalize",'required' => 'required'.($errors->has('first_name')?" is-invalid":""),"autofocus",'placeholder'=>'First Name',"autocomplete='off'",]) !!}

                @if ($errors->has('first_name'))
                <span class="text-danger">
                  <strong>{{ $errors->first('first_name') }}</strong>
                </span>
                @endif

              </div>

              <div class="col-md-4">

                <label class="small text-muted">Middle Name</label>

                {!! Form::text("middle_name",null,["class"=>"form-control text-capitalize",'required' => 'required'.($errors->has('middle_name')?" is-invalid":""),"autofocus",'placeholder'=>'Middle Name',"autocomplete='off'",]) !!}

                @if ($errors->has('middle_name'))
                <span class="text-danger">
                  <strong>{{ $errors->first('middle_name') }}</strong>
                </span>
                @endif

              </div>

                <div class="col-md-4">

                <label class="small text-muted">Last Name</label>

                {!! Form::text("last_name",null,["class"=>"form-control text-capitalize",'required' => 'required'.($errors->has('last_name')?" is-invalid":""),"autofocus",'placeholder'=>'Last Name',"autocomplete='off'",]) !!}

                @if ($errors->has('last_name'))
                <span class="text-danger">
                  <strong>{{ $errors->first('last_name') }}</strong>
                </span>
                @endif
       
              </div>

 
            </div>  

<!-- END 1ST ROW SECTION -->         

<!-- START 2ND ROW SECTION -->         

        <div class="form-row">

                <div class="col-md-3">

                <label class="small text-muted">Email</label>

                {!! Form::email("email",null,["class"=>"form-control",'required' => 'required'.($errors->has('email')?" is-invalid":""),"autofocus",'placeholder'=>'Email',"autocomplete='off'",]) !!}

                @if ($errors->has('email'))
                <span class="text-danger">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
       
              </div>

               <div class="col-md-3">

                <label class="small text-muted">Date of Birth</label>

                {!! Form::date("date_of_birth",null,["class"=>"form-control",'required' => 'required'.($errors->has('date_of_birth')?" is-invalid":""),"autofocus",'placeholder'=>'Date of Birth',"autocomplete='off'",]) !!}

                @if ($errors->has('date_of_birth'))
                <span class="text-danger">
                  <strong>{{ $errors->first('date_of_birth') }}</strong>
                </span>
                @endif
              
              </div>

               <div class="col-md-3">

                <label class="small text-muted">Phone Number</label>

                {!! Form::text("phone_number",null,["class"=>"form-control",'required' => 'required'.($errors->has('phone_number')?" is-invalid":""),"autofocus",'placeholder'=>'Phone Number',"autocomplete='off'",]) !!}

                @if ($errors->has('phone_number'))
                <span class="text-danger">
                  <strong>{{ $errors->first('phone_number') }}</strong>
                </span>
                @endif
              
              </div>

                <div class="col-md-3">

                <label class="small text-muted">Contact Person</label>

                {!! Form::text("contact_person",null,["class"=>"form-control",'required' => 'required'.($errors->has('contact_person')?" is-invalid":""),"autofocus",'placeholder'=>'Contact Person - Name',"autocomplete='off'",]) !!}

                @if ($errors->has('contact_person'))
                <span class="text-danger">
                  <strong>{{ $errors->first('contact_person') }}</strong>
                </span>
                @endif
       
              </div>

        </div> 

<!-- END 2ND ROW SECTION -->         

    </div>


   <div class="col-md-3">

      <img src="{{ Avatar::create( Auth::user()->name)->toBase64() }}" class="rounded mx-auto d-block" style="height: 150px;width: 150px;">

    </div>

  </div>


<!-- START 3RD ROW SECTION -->   
          <div class="form-row">

             <div class="col-md-3">

                <label class="small text-muted">Address Barangay</label>

                {!! Form::text("address_barangay",null,["class"=>"form-control text-capitalize",'required' => 'required'.($errors->has('address_barangay')?" is-invalid":""),"autofocus",'placeholder'=>'Address Barangay',"autocomplete='off'",]) !!}

                @if ($errors->has('address_barangay'))
                <span class="text-danger">
                  <strong>{{ $errors->first('address_barangay') }}</strong>
                </span>
                @endif
              
              </div>

               <div class="col-md-3">

                <label class="small text-muted">Address Street</label>

                {!! Form::text("address_street",null,["class"=>"form-control text-capitalize",'required' => 'required'.($errors->has('address_street')?" is-invalid":""),"autofocus",'placeholder'=>'Address Street',"autocomplete='off'",]) !!}

                @if ($errors->has('address_street'))
                <span class="text-danger">
                  <strong>{{ $errors->first('address_street') }}</strong>
                </span>
                @endif
              
              </div>

               <div class="col-md-2">

                <label class="small text-muted">Address City</label>

                {!! Form::text("address_city",null,["class"=>"form-control text-capitalize",'required' => 'required'.($errors->has('address_city')?" is-invalid":""),"autofocus",'placeholder'=>'Address City',"autocomplete='off'",]) !!}

                @if ($errors->has('address_city'))
                <span class="text-danger">
                  <strong>{{ $errors->first('address_city') }}</strong>
                </span>
                @endif
              
              </div>

                <div class="col-md-2">

                <label class="small text-muted">Address Province</label>

                {!! Form::text("address_province",null,["class"=>"form-control text-capitalize",'required' => 'required'.($errors->has('address_province')?" is-invalid":""),"autofocus",'placeholder'=>'Address Province',"autocomplete='off'",]) !!}

                @if ($errors->has('address_province'))
                <span class="text-danger">
                  <strong>{{ $errors->first('address_province') }}</strong>
                </span>
                @endif
       
              </div>

               <div class="col-md-2">

                <label class="small text-muted">Address Zip</label>

                {!! Form::text("address_zip",null,["class"=>"form-control",'required' => 'required'.($errors->has('address_zip')?" is-invalid":""),"autofocus",'placeholder'=>'Address Zip',"autocomplete='off'",]) !!}

                @if ($errors->has('address_zip'))
                <span class="text-danger">
                  <strong>{{ $errors->first('address_zip') }}</strong>
                </span>
                @endif
       
              </div>
        

        </div> 
<!-- END 3RD ROW SECTION -->  

<!-- START 4TH ROW SECTION -->  

                <div class="form-row">

             <div class="col-md-8">

                <label class="small text-muted">Category Disease Ailment</label>

                {!! Form::text("category_disease_ailment",null,["class"=>"form-control",'required' => 'required'.($errors->has('category_disease_ailment')?" is-invalid":""),"autofocus",'placeholder'=>'Category Disease Ailment',"autocomplete='off'",]) !!}

                @if ($errors->has('category_disease_ailment'))
                <span class="text-danger">
                  <strong>{{ $errors->first('category_disease_ailment') }}</strong>
                </span>
                @endif
              
              </div>

            

               <div class="col-md-4">

                <label class="small text-muted">Gender</label>

                <div class="form-row mt-2 ml-5">          

<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="Male" required="" >
  <label class="custom-control-label" for="customRadioInline1">Male</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="Female" >
  <label class="custom-control-label" for="customRadioInline2">Female</label>
</div> 

</div>

              </div>  

        </div> 
<!-- END 4TH ROW SECTION -->


           
            <div class="form-row">
              <div class="col-md-12">
                <label class="small text-muted">Notes</label>
                {!! Form::textarea("notes",null,["class"=>"form-control text-capitalize".($errors->has('notes')?" is-invalid":""),"autofocus",'placeholder'=>'Notes',]) !!}

                @if ($errors->has('notes'))
                <span class="text-danger">
                  <strong>{{ $errors->first('notes') }}</strong>
                </span>
                @endif
              </div>
            </div>
            {!! Form::button("Save",["type" => "submit","class"=>"btn
            btn-primary float-right mt-3"])!!}

            {!! Form::close() !!}
          </div>               
        </div>

      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection
