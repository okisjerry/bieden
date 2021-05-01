@extends("layouts.dashboard")

@section("title")
{{ $user->name }}
@endsection


@section("content")

{{-- breadcrumb area start --}}
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="shop-grid-left-sidebar.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->



<!--Row-->
<div class="row ">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    User Information
                </div>
            </div>
            <div class="card-body">
                @foreach ($errors->all() as $err)
                <p class="text-danger">{{ $err }}</p>
            @endforeach
            <form action="{{ route('user.add-content') }}" method="post" enctype="multipart/form-data">@csrf
                <div id="wizard3">


                    @foreach ($users as $user)
                    <section>
                        <div class="control-group form-group">
                            <label class="form-label">Bio</label>
                            <input type="text" name="bio" class="form-control required" placeholder="Bio">
                        </div>


                        <div class="control-group form-group ">
                            <label class="form-label">Votes</label>
                            <input type="{{ $user->votes }}" name="price" class="form-control required" placeholder="Price">
                        </div>

                        <div class="control-group form-group ">
                            <label class="form-label">Quantity</label>
                            <input type="number" name="quantity" class="form-control required" placeholder="Quantity">
                        </div>
                        <div class="control-group form-group ">
                            <label class="form-label">Tags</label>
                            <input type="text" name="tags" class="form-control required" placeholder="Tags">
                        </div>

                        <div class="control-group form-group ">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control required" placeholder="Image">
                        </div>


                    @endforeach


{{--
                        <div class="card-title">
                            Select Categories
                        </div>
                        @foreach ($categories as $category )
                        <div class="form-grouop">
                            <label for="">{{ $category->name }}</label>
                            <input type="checkbox" name="categories[]" value="{{ $category->id }}">
                        </div>
                        @endforeach

                        <div class="control-group form-group ">
                            <label class="form-label">Product Images</label>
                            <input type="file" name="images[]" class="form-control required" placeholder="Image" multiple>
                        </div>


                        <button class="btn btn-primary" >Add Product</button> --}}


                    </section>


                    {{-- <h3>Billing Information</h3>
                    <section>
                        <div class="table-responsive mg-t-20">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Cart Subtotal</td>
                                        <td class="text-right">$792.00</td>
                                    </tr>
                                    <tr>
                                        <td><span>Totals</span></td>
                                        <td class="text-right text-muted"><span>$792.00</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Order Total</span></td>
                                        <td>
                                            <h2 class="price text-right mb-0">$792.00</h2>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section> --}}
                    {{-- <h3>Payment Details</h3>
                    <section>
                        <div class="form-group">
                            <label class="form-label">CardHolder Name</label>
                            <input type="text" class="form-control" id="name12" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Card number</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-append">
                                    <button class="btn btn-info" type="button"><i class="fa fa-cc-visa"></i> &nbsp; <i
                                            class="fa fa-cc-amex"></i> &nbsp;
                                        <i class="fa fa-cc-mastercard"></i></button>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group mb-sm-0">
                                    <label class="form-label">Expiration</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" placeholder="MM" name="expiremonth">
                                        <input type="number" class="form-control" placeholder="YY" name="expireyear">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 ">
                                <div class="form-group mb-0">
                                    <label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
                                    <input type="number" class="form-control" required="">
                                </div>
                            </div>
                        </div>
                    </section> --}}
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- /Row -->

@endsection




@endsection
