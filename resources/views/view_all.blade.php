@extends('layouts.app')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/18.jpg);">
    <div class="parallax-scene parallax-scene-1 anim-icons">
        <span data-depth="0.60" class="parallax-layer icon icon-dots-1"></span>
        <span data-depth="0.70" class="parallax-layer icon twist-line-1"></span>
        <span data-depth="0.80" class="parallax-layer icon icon-circle-7"></span>
        <span data-depth="0.90" class="parallax-layer icon icon-triangles"></span>
    </div>
    <div class="auto-container">
        <h1>View All Contestants</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li>All Contestants</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Gallery Section -->
<section class="gallery-section style-two">
    <div class="auto-container">
        <div class="sec-title">
            <span class="title">Our Gallery</span>
            <h2>Incredible <br> Contestants</h2>
        </div>



        <div class="row">
            <!-- Table Item -->

            <div class="table">
                <table class="table table-vcenter text-nowrap mb-0 table-striped table-bordered border-top">
                    <thead class="">

                        <tr>
                            <th>Image</th>
                            <th>Contestants</th>
                            <th>Votes</th>

                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>
                                <img src="/storage/users/{{ $user->image }}" alt="" class="img-fluid col-2">

                            </td>
                            <td class="font-weight-bold" onclick="form">{{ $user->name }}
                               <a href=""> </a>
                                <form action="" class=" col-md-12 col-sm-6"> @csrf

                                        <label for="name">Name</label>
                                         <input type="text" class="form-control" placeholder="Name">


                                        <label for="name">Email</label>
                                         <input type="text" class="form-control" placeholder="Email">
                                </form>
                                <a href="{{ route('checkout') }}"> <button class="btn btn-primary mt-2">Vote</button></a>

                            </td>


                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>



        </div>


    </div>
</section>
<!--End Gallery Section -->



@endsection
