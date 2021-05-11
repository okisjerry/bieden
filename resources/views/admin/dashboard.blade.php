@extends("layouts.admin")


@section("title")

@endsection

@section("content")




<!-- Row-1 -->
<div class="row">
    <div class=" mt-3 col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">User's Information</h3>
                {{-- <div class="card-options">
                    <a href="index.html#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-horizontal fs-20"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="index.html#">Today</a>
                        <a class="dropdown-item" href="index.html#">Last Week</a>
                        <a class="dropdown-item" href="index.html#">Last Month</a>
                        <a class="dropdown-item" href="index.html#">Last Year</a>
                    </div>
                </div> --}}
            </div>
            <div class="card-body">
                <div class="list-card">
                    <span class="bg-warning list-bar"></span>
                    <div class="row align-items-center">
                        <div class="col-9 col-sm-9">
                            <div class="media mt-0">

                                <div class="media-body">
                                    <div class="d-md-flex align-items-center mt-1">
                                        <li>{{ Auth::user()->name}}</li>


                                    </div>
                                    <span class="mb-0 fs-13 text-muted"><span
                                            class="ml-2 text-success fs-13 font-weight-semibold">
                                            <li>{{ Auth::user()->bio}}</li>
                                        </span></span>
                                    <span class="mb-0 fs-13 text-muted"><span
                                            class="ml-2 text-success fs-13 font-weight-semibold">
                                            <li> Age: {{ $age}}</li>
                                        </span></span>
                                    <span class="mb-0 fs-13 text-muted"><span
                                            class="ml-2 text-success fs-13 font-weight-semibold">
                                            <li>{{ Auth::user()->nationality}}</li>
                                        </span></span>

                                    <span class="mb-0 fs-13 text-muted"><span
                                            class="ml-2 text-success fs-13 font-weight-semibold">
                                            <li>{{ Auth::user()->state}}</li>
                                        </span></span>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>



</div>

<!--Row-->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 ">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Contestants</h3>

            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-vcenter text-nowrap mb-0 table-striped table-bordered border-top">
                        <thead class="">
                            <tr>
                                <th>Contestants</th>
                                <th>Votes</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)

                            <tr>
                                <td class="font-weight-bold"><img class="w-7 h-7 rounded shadow mr-3"
                                        src="assets/images/orders/7.jpg" alt="media1"> {{ $user->name }} </td>
                                <td><span class="badge badge-primary"> {{$user->votes}} </span></td>

                            </tr>


                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<!--End row-->



<!-- End app-content-->



@endsection

