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
                        <table>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table
                                        class="table table-vcenter text-nowrap mb-0 table-striped table-bordered border-top">
                                        <thead class="">
                                            <tr>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Votes</th>

                                                <th>Edit</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($users as $user)


                                           <tr>
                                            <td class="font-weight-bold"><img
                                                    class="w-7 h-7 rounded shadow mr-3"
                                                    src="/admin_assets/assets/images/orders/7.jpg" alt="media1">{{ $user->name }}</td>
                                            <td><span class="badge badge-primary">{{ $user->age }}</span></td>
                                            <td>{{ $user->votes }}</td>

                                           
                                            <td>
                                                <a href="{{route('admin.edit-info', $user) }}">
                                                     <button class="btn-info mt-5 mb-5 lg-5">
                                                         Edit Info
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>




                                           @endforeach
                        </table>

                    </section>


                </div>


            </div>
        </div>
    </div>
</div>


@endsection
