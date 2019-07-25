@extends('layouts.admin_layout')
@section('title')
| {{isset($menu)?'Edit':'Add'}} Products
@stop
@section('content')
@include('sweetalert::alert')

<div class="main pt-3 pb-0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card mb-3 bg-none border-0">
          <div class="card-body">
            <h5 class="card-title text-capitalize">{{isset($menu)?'Edit':'New'}} Products</h5>
          </div>
        </div>
      </div>

      <div class="col-md-12 col-lg-12">
        <a href="{{url('products')}}" class="btn btn-danger btn-sm mb-3"><i class="fas fa-arrow-left small"></i> Go Back</a>
        <div class="card mb-3">

          <div class="card-body">
            @if(isset($menu))
            {!! Form::model($menu,['method'=>'put','files' => true,'novalidate' => 'novalidate']) !!}
            <input type="hidden" name="nameold"  value="{{ $menu->name }}">
            <input type="hidden" name="categoriesold"  value="{{ $menu->categories }}">
            <input type="hidden" name="priceold"  value="{{ $menu->price }}">

             <input type="hidden" name="old_small_price"  value="{{ $menu->small_price }}">
             <input type="hidden" name="old_medium_price"  value="{{ $menu->medium_price }}">
             <input type="hidden" name="old_large_price"  value="{{ $menu->large_price }}">
            @else
            {!! Form::open(array('files' => true))  !!}
            @endif

            <div class="form-row">
              <div class="col-md-8">
                <label class="small text-muted">Name</label>

                {!! Form::text("name",null,["class"=>"form-control",'required' => 'required'.($errors->has('name')?" is-invalid":""),"autofocus",'placeholder'=>'Name',"autocomplete='off'",]) !!}

                @if ($errors->has('name'))
                <span class="text-danger">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>

          <!--     <div class="col-md-4">
                <label class="small text-muted">Price</label>
                {!! Form::number("price",null,["class"=>"form-control quantity",'required' => 'required'.($errors->has('price')?" is-invalid":""),"autofocus",'placeholder'=>'Price','min'=>'0',"autocomplete='off'",]) !!}
                @if ($errors->has('price'))
                <span class="invalid-feedback text-danger">
                  <strong>{{ $errors->first('price') }}</strong>
                </span>
                @endif
              </div> -->

  @if(isset($menu))
             <div class="col-md-4 ">
             <label class="small text-muted">Time</label>
             <select name="time" class="form-control" required>
                  <option value="10 mins | 10" {{ $menu->TTC == 10 ? 'selected' : '' }} >10 mins</option>
                  <option value="20 mins | 20" {{ $menu->TTC == 20 ? 'selected' : '' }} >20 mins</option>
                  <option value="30 mins | 30" {{ $menu->TTC == 30 ? 'selected' : '' }} >30 mins</option>
                  <option value="40 mins | 40" {{ $menu->TTC == 40 ? 'selected' : '' }} >40 mins</option>
                  <option value="50 mins | 50 " {{ $menu->TTC == 50 ? 'selected' : '' }} >50 mins</option>
                  <option value="1 hour | 60 " {{ $menu->TTC == 60 ? 'selected' : '' }}> 1 hour</option>
                  <option value="'1h 10 mins | 70 " {{ $menu->TTC == 70 ? 'selected' : '' }} >1h 10 mins</option>
                  <option value="1h 20 mins | 80 " {{ $menu->TTC == 80 ? 'selected' : '' }} >1h 20 mins</option>
                  <option value="1h 30 mins | 90 " {{ $menu->TTC == 90 ? 'selected' : '' }} >1h 30 mins</option>
                  <option value="1h 40 mins | 100 " {{ $menu->TTC == 100 ? 'selected' : '' }} >1h 40 mins</option>
                  <option value="1h 50 mins | 110" {{ $menu->TTC == 110 ? 'selected' : '' }} >1h 50 mins</option>
                  <option value="2 hour | 120" {{ $menu->TTC == 120 ? 'selected' : '' }} >2 hour</option>
                </select>
              @if ($errors->has('time'))
                <span class="text-danger">
                  <strong>{{ $errors->first('time') }}</strong>
                </span>
                @endif
              </div>
            </div>   
@else


              <div class="col-md-4 ">
                <label class="small text-muted">Time</label>
                {!! Form::select("time",[''=>'--- Select Estimated Time ---','10 mins | 10'=>'10 mins','20 mins | 20'=>'20 mins','30 mins | 30'=>'30 mins','40 mins | 40'=>'40 mins','50 mins | 50 '=>'50 mins','1 hour | 60 '=>'1 hour','1h 10 mins | 70 '=>'1h 10 mins','1h 20 mins | 80 '=>'1h 20 mins','1h 30 mins | 90 '=>'1h 30 mins','1h 40 mins | 100 '=>'1h 40 mins','1h 50 mins | 110'=>'1h 50 mins','2 hour | 120'=>'2 hour'],null,['class'=>'form-control','required' => 'required'.($errors->has('time')?" is-invalid":""),"autofocus",'']) !!}
                @if ($errors->has('time'))
                <span class="text-danger">
                  <strong>{{ $errors->first('time') }}</strong>
                </span>
                @endif
              </div>
            </div>

@endif

             <div class="form-row">
              <div class="col-md-2 mt-3">

             <div class="custom-control custom-radio ">
  <input type="radio" id="customRadioInline1" name="price_option" class="custom-control-input" value="if_regular" required="" onclick="javascript:regular_price(); size_price();">
  <label class="custom-control-label" for="customRadioInline1">Regular price</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="price_option" class="custom-control-input" value="if_withsize" onclick="javascript:regular_price(); size_price();">
  <label class="custom-control-label" for="customRadioInline2">With sizes</label>
</div> 
</div>

              <div class="col-md-4" id="regular" style="display :none">
                <label for="Regular Price" class="small text-muted">Regular Price</label>
                {!! Form::number("price",null,["class"=>"form-control quantity","id"=>"Regular Price",'required' => 'required' .($errors->has('price')?" is-invalid":""),"autofocus",'placeholder'=>'Regular Price','min'=>'0',"autocomplete='off'",]) !!}
                @if ($errors->has('price'))
                <span class="text-danger">
                  <strong>{{ $errors->first('price') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-row" id="size" style="display :none">

  <div class="form-row">
    <div class="col-md-4">
      <label for="Small Price" class="small text-muted">Small Price</label>
      {!! Form::number("small_price",null,["class"=>"form-control quantity","id"=>"Small Price",'required' => 'required'.($errors->has('small_price')?" is-invalid":""),"autofocus",'placeholder'=>'Small Price','min'=>'0',"autocomplete='off'",]) !!}
                @if ($errors->has('small_price'))
                <span class="text-danger">
                  <strong>{{ $errors->first('small_price') }}</strong>
                </span>
                @endif     
    </div>
    <div class="col-md-4">
      <label for="Medium Price" class="small text-muted">Medium Price</label>
       {!! Form::number("medium_price",null,["class"=>"form-control quantity","id"=>"Medium Price",'required' => 'required'.($errors->has('medium_price')?" is-invalid":""),"autofocus",'placeholder'=>'Medium Price','min'=>'0',"autocomplete='off'",]) !!}
                @if ($errors->has('medium_price'))
                <span class="text-danger">
                  <strong>{{ $errors->first('medium_price') }}</strong>
                </span>
                @endif      
    </div>
    <div class="col-md-4">
      <label for="Large Price" class="small text-muted">Large Price</label>   
        {!! Form::number("large_price",null,["class"=>"form-control quantity","id"=>"Large Price",'required' => 'required'.($errors->has('large_price')?" is-invalid":""),"autofocus",'placeholder'=>'Large Price','min'=>'0',"autocomplete='off'",]) !!}
                @if ($errors->has('large_price'))
                <span class="text-danger">
                  <strong>{{ $errors->first('large_price') }}</strong>
                </span>
                @endif      
    </div>
  </div>

  
              </div>
            </div>

             @if ($errors->has('price_option'))

                <span class="text-danger mt-4 w-100">
                  <strong>This field is required.</strong>
                </span>
  
                @endif  

            <script type="text/javascript">
  function regular_price() {
    if (document.getElementById('customRadioInline1').checked) {
       document.getElementById('regular').style.display  = 'block';

       document.getElementById("Small Price").required = false;
       document.getElementById("Medium Price").required = false;
       document.getElementById("Large Price").required = false;

      /*  document.getElementById("Small Price").value = '';
        document.getElementById("Medium Price").value ='';
        document.getElementById("Large Price").value = '';*/
    } else

      document.getElementById('regular').style.display  = 'none';

      document.getElementById("Small Price").required;
      document.getElementById("Medium Price").required;
      document.getElementById("Large Price").required;

  }

  function size_price() {
    if (document.getElementById('customRadioInline2').checked) {
      document.getElementById('size').style.display  = 'block';

      document.getElementById("Regular Price").required = false;
 /*      document.getElementById("Regular Price").value = '';*/

    } else

      document.getElementById('size').style.display  = 'none';

      document.getElementById("Regular Price").required;
      

  }

</script>

            <div class="form-row">
              <div class="col-md-6">
                <label class="small text-muted">Categories</label>
                {!! Form::select("categories",[''=>'--- Select Categories ---','Coffee'=>'Coffee','Iced Coffee'=>'Iced Coffee','Chillers'=>'Chillers','Frappe'=>'Frappe','Milk Tea'=>'Milk Tea','Milk Shakes'=>'Milk Shakes','Pizza'=>'Pizza','Thin Crust Square Pizza'=>'Thin Crust Square Pizza','Belgian Waffles'=>'Belgian Waffles','Meals'=>'Meals','Gourmet Burger'=>'Gourmet Burger','Pasta'=>'Pasta','Light Picks'=>'Light Picks','Steak'=>'Steak','Extra'=>'Extra'],null,['class'=>'form-control','required' => 'required'.($errors->has('categories')?" is-invalid":""),"autofocus",'']) !!}
                @if ($errors->has('categories'))
                <span class="text-danger">
                  <strong>{{ $errors->first('categories') }}</strong>
                </span>
                @endif
              </div>

              <div class="col-md-6 ">
                <label class="small text-muted">Insert Image</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="picture" accept=".jpg,.jpeg,.png,">
                  <label class="custom-file-label text-truncate" for="customFile">Choose file</label>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
              </div>

            </div>
            <div class="form-row">
              <div class="col-md-12">
                <label class="small text-muted">Description</label>
                {!! Form::textarea("description",null,["class"=>"form-control".($errors->has('description')?" is-invalid":""),"autofocus",'placeholder'=>'Description',]) !!}

                @if ($errors->has('description'))
                <span class="text-danger">
                  <strong>{{ $errors->first('description') }}</strong>
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
