@extends('master')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center mt-5">
      <div class="col-sm-6 col-md-4">
        <form action="" class="shadow-lg p-4" method="POST">

          <div class="form-group">
           <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label> <input type="email" class="form-control" placeholder="Email" name="remail">
           <small class="form-text" style="font-size: 12px;">We'll Never Share Your Email With anyone else.</small>
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="pass"class="font-weight-bold pl-2">Password</label><input type="password" class="form-control" placeholder="Password" name="rpass">
          </div>
          <button type="submit" class="btn btn-outline-danger mt-3 font-weight-bold btn-block shadow-sm">Login</button>
          
        </form>
        <div class="text-center">
          <a href="/" class="btn btn-info mt-3 font-weight-bold shadow-sm">Back To Home</a>
        </div>
      </div>
    </div>
  </div>

@endsection