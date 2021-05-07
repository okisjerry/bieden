@extends("layouts.user")

@section("title")

@endsection


@section("content")

<!--/app header-->
<!--Page header-->
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">Hi! Welcome Back</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html#"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="index.html#">User's Profile</a></li>
        </ol>
    </div>
    <div class="page-rightheader">
        {{--<div class="btn btn-list">

            <a href="index.html#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>

        </div> --}}
    </div>
</div>
<!--End Page header-->



<!--Row-->
<div class="row mx-4">
    @foreach ($errors->all() as $err)
    <p class="text-danger">{{ $err }}</p>
    @endforeach
    <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    My Information
                </div>
            </div>
            <div class="card-body">

                <form action="{{ route('user.update-content') }}" method="post" enctype="multipart/form-data">@csrf
                    <div id="wizard3">

                        <section>
                            <div class="control-group form-group">
                                <label class="form-label">Bio</label>
                                <textarea name="bio" value="{{ Auth::user()->bio }}" class="form-control"
                                    rows="3">{{ Auth::user()->bio }}</textarea>
                            </div>

                            <div class="control-group form-group ">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" value="{{ Auth::user()->image }}"
                                    class="form-control required" placeholder="Image">
                            </div>



                            <button class="btn btn-primary">Update Profile</button>

                        </section>






                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Second card --}}
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    My Video
                </div>
            </div>
            <div class="card-body">

                <form action="{{ route('user.upload-content') }}" method="post" enctype="multipart/form-data">@csrf
                    <div id="wizard3">
                        <section>
                            <span>Video should not be more than 20mb</span>

                        </section>


                        @if (Auth::user()->video != '')
                        <video width="500" height="350" controls>
                            <source src="/storage/users/{{Auth::user()->video}} " type="video/mp4">
                        </video>

                        {{-- <span class="icon flaticon-play-button"></span> --}}
                        @else

                            <i>Insert Video here</i>

                        @endif

                        <section>

                            <div class="control-group form-group ">
                                <label class="form-label">Video</label>
                                <input type="file" name="video" class="form-control required" placeholder="video">
                            </div>

                            <button class="btn btn-primary">Update Profile</button>

                        </section>






                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
