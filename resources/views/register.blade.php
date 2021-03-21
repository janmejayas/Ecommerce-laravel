@extends('master')
@section('content')



<div class="container-fluid custom-login" >
    <div class="row justify-content-center mt-5">
      <div class="col-sm-6 col-md-5">
      
        <form action="/register" class="shadow-lg p-4" method="POST" style="background-color: #d3e9f7;">
          @csrf
          <h4 style="text-align: center;">This is Register page</h4>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="name"class="font-weight-bold pl-2">Name</label><input type="name" class="form-control" placeholder="Name" name="name">
          </div>
          <div class="form-group">
           <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label> <input type="email" class="form-control" placeholder="Email" name="email">
           <small class="form-text" style="font-size: 12px;">We'll Never Share Your Email With anyone else.</small>
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="password"class="font-weight-bold pl-2">Password</label><input type="password" class="form-control" placeholder="Password" name="password">
          </div>
          <button type="submit" class="btn btn-outline-success mt-3 font-weight-bold btn-block shadow-sm">Register</button>
         <a class="btn btn-outline-danger mt-3 font-weight-bold btn-block shadow-sm" href="/login">Login</a>
          
        </form>
        <div class="text-center">
          <a href="/" class="btn btn-info mt-3 font-weight-bold shadow-sm">Back To Home</a>
        </div>
      </div>
    </div>
  </div>


@endsection