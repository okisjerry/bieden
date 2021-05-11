@extends('layouts.app')

@section('title')
Vote
@section('content')

<form action="" class=" col-md-6 col-sm-12">
    <div class="form-group ">
        <label for="name">Name</label>
         <input type="text" class="form-control" placeholder="Name">
     </div>


     <div class="form-group">
        <label for="name">Email</label>
         <input type="text" class="form-control" placeholder="Email">
     </div>
<button class="btn btn-primary">Vote</button>
</form>

@endsection
