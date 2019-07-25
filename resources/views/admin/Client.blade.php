@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="svg-icon" data-feather="home"></i></li>
                            <li class="list-inline-item">Dashboard</li>
                        </ul>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="svg-icon" data-feather="user"></i></li>
                            <li class="list-inline-item">Doctors</li>
                        </ul>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="svg-icon" data-feather="users"></i></li>
                            <li class="list-inline-item">Patients</li>
                        </ul>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="svg-icon" data-feather="clock"></i></li>
                            <li class="list-inline-item">Working Hours</li>
                        </ul>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="svg-icon" data-feather="calendar"></i></li>
                            <li class="list-inline-item">Appointment</li>
                        </ul>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="svg-icon" data-feather="database"></i></li>
                            <li class="list-inline-item">Backup Database</li>
                        </ul>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="svg-icon" data-feather="settings"></i></li>
                            <li class="list-inline-item">Manage Account</li>
                        </ul>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="svg-icon" data-feather="log-out"></i></li>
                            <li class="list-inline-item">Log out</li>
                        </ul>
                    </a>
                </li>


            </ul>


        </div>





        <div class="col-sm-12 col-md-12 col-lg-9">
            <div class="card mb-3 border-0 shadow-sm">
                <div class="card-body p-0">
                    <div class="card-title border-bottom">
                        <a href="{{url('Client/create')}}" class="btn btn-primary btn-sm float-right m-3"><i
                                class="fas fa-plus    "></i></a>
                        <h5 class="font-weight-bold px-4 py-3 h5 mb-0">Patient</h5>
                    </div>
                    <div class="table-responsive">
                        @if(count($data) > 0)
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
                                @foreach ( $data as $client )
                                <tr>
                                    <td class="px-4 text-truncate text-capitalize">{{ $client->last_name }} ,
                                        {{ $client->first_name }} {{ $client->middle_name }}</td>
                                    <td class="px-4 text-truncate text-capitalize">{{ $client->email }}</td>
                                    <td class="px-4 text-truncate text-capitalize">{{ $client->address_city }} ,
                                        {{ $client->address_province }} , {{ $client->address_barangay }}</td>
                                    <td class="px-4 text-truncate">{{ $client->phone_number }}</td>
                                    <td class="px-4 text-truncate">

                                        <form id="client-frm_{{$client->id}}"
                                            action="{{url('Client/delete/'.$client->id)}}" method="post"
                                            style="padding-bottom: 0px;margin-bottom: 0px">
                                            <input type="hidden" name="_method" value="delete">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </form>



                                        <button class="show-modal btn btn-info btn-sm m-1  text-white" type="button"
                                            name="info" data-last_name="{{$client->last_name}}"><i
                                                class="fas fa-search"></i></button>

                                        <a href="{{url('Client/update/'.$client->id)}}"
                                            class="btn btn-primary btn-sm m-1 text-white" title="Edit"><span
                                                class="fa fa-pencil-alt" aria-hidden="true"></span></a>

                                        <a class="btn btn-danger btn-sm m-1 text-white" data-button-type="delete"
                                            title="Delete" onclick=" 
document.getElementById('client-frm_{{$client->id}}').submit();"><span class="fa fa-trash"
                                                aria-hidden="true"></span></a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                        @else
                        <div class="card rounded-0 border-0">
                            <div class="card-body" style="min-height:100px;">
                                <p class="h2 text-center mt-3 text-warning"><i class="far fa-frown"></i></p>
                                <p class="lead text-center text-muted">Whoops! No Result Found.</p>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end mx-3 pagination-sm">

                    {{ $data }}

                </ul>
            </nav>
        </div>
        <!-- end card -->








    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                                        <img class="img-user-sm rounded d-block img-fluid mx-auto mb-5" src="" id="pic1"
                                            alt="" style="min-width: 250px; height: auto;">
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-12 col-md-12">

                                                <p class="text-capitalize text-dark h3 font-weight-normal"
                                                    id="name_show"></p>
                                            </div>

                                            <div class="col-6 col-md-6">
                                                <p class="h6 font-weight-bold mb-3"> <span id="price_show"></span></p>
                                            </div>

                                            <div class="col-12 col-md-12">
                                                <p class="text-capitalize text-dark my-0 small" id="description_show">
                                                </p>
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
    $(document).on('click', '.show-modal', function () {

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
