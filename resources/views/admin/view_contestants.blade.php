@extends('layouts.admin')
@section('content')
<div class="page-header">
</div>
<!--End Page header-->



<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Contestant Information
                </div>
            </div>
            <div class="card-body">
                @foreach ($errors->all() as $err)
             <p class="text-danger">{{ $err }}</p>
            @endforeach

                <div class="wizard03">

                    <section>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-vcenter text-nowrap mb-0 table-striped table-bordered border-top">
                                    <thead class="">
                                        <tr>
                                            <th>Contestants</th>
                                            <th>Age</th>
                                            <th>Votes</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="font-weight-bold"><img class="w-7 h-7 rounded shadow mr-3"
                                                    src="assets/images/orders/7.jpg" alt="media1"> </td>
                                            <td><span class="badge badge-primary"></span></td>

                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </section>


                </div>


            </div>
        </div>
    </div>
</div>


@endsection
