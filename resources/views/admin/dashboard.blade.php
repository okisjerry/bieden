@extends("layouts.admin")


@section("title")

@endsection
@section("content")

@extends("layouts.user")


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
                                            <li> Born On {{ Auth::user()->date_of_birth}}</li>
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


    <div class=" mt-3 col-md-6 ">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Revenue by customers in Countries</h3>
                <div class="card-options">
                    <a href="index.html#" class="option-dots" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="fe fe-more-horizontal fs-20"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="index.html#">Today</a>
                        <a class="dropdown-item" href="index.html#">Last Week</a>
                        <a class="dropdown-item" href="index.html#">Last Month</a>
                        <a class="dropdown-item" href="index.html#">Last Year</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="country-card">
                    <div class="mb-5">
                        <div class="d-flex">
                            <span class=""><img src="assets/images/flags/us.svg" class="w-5 h-5 mr-2" alt="">United
                                States</span>
                            <div class="ml-auto"><span class="text-success mr-1"><i
                                        class="fe fe-trending-up"></i></span><span class="number-font">$45,870</span>
                                (86%)</div>
                        </div>
                        <div class="progress h-2  mt-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary"
                                style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex">
                            <span class=""><img src="assets/images/flags/in.svg" class="w-5 h-5 mr-2"
                                    alt="">India</span>
                            <div class="ml-auto"><span class="text-danger mr-1"><i
                                        class="fe fe-trending-down"></i></span><span class="number-font">$32,879</span>
                                (65%)</div>
                        </div>
                        <div class="progress h-2  mt-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                style="width: 60%"></div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex">
                            <span class=""><img src="assets/images/flags/ru.svg" class="w-5 h-5 mr-2"
                                    alt="">Russia</span>
                            <div class="ml-auto"><span class="text-success mr-1"><i
                                        class="fe fe-trending-up"></i></span><span class="number-font">$22,710</span>
                                (55%)</div>
                        </div>
                        <div class="progress h-2  mt-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                style="width: 50%"></div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex">
                            <span class=""><img src="assets/images/flags/ca.svg" class="w-5 h-5 mr-2"
                                    alt="">Canada</span>
                            <div class="ml-auto"><span class="text-danger mr-1"><i
                                        class="fe fe-trending-down"></i></span><span class="number-font">$56,291</span>
                                (69%)</div>
                        </div>
                        <div class="progress h-2  mt-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex">
                            <span class=""><img src="assets/images/flags/ge.svg" class="w-5 h-5 mr-2"
                                    alt="">Germany</span>
                            <div class="ml-auto"><span class="text-success mr-1"><i
                                        class="fe fe-trending-up"></i></span><span class="number-font">$67,357</span>
                                (73%)</div>
                        </div>
                        <div class="progress h-2  mt-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-teal"
                                style="width: 70%"></div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex">
                            <span class=""><img src="assets/images/flags/br.svg" class="w-5 h-5 mr-2"
                                    alt="">Brazil</span>
                            <div class="ml-auto"><span class="text-success mr-1"><i
                                        class="fe fe-trending-up"></i></span><span class="number-font">$34,209</span>
                                (60%)</div>
                        </div>
                        <div class="progress h-2  mt-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-indigo"
                                style="width: 60%"></div>
                        </div>
                    </div>
                    <div class="mb-0">
                        <div class="d-flex">
                            <span class=""><img src="assets/images/flags/au.svg" class="w-5 h-5 mr-2"
                                    alt="">Australia</span>
                            <div class="ml-auto"><span class="text-success mr-1"><i
                                        class="fe fe-trending-up"></i></span><span class="number-font">$12,876</span>
                                (46%)</div>
                        </div>
                        <div class="progress h-2  mt-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                style="width: 40%"></div>
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


@endsection

