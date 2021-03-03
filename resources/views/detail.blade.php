@extends('master')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <img src="{{$products['gallery']}}" alt="" style="height: 300px;
padding-top: 50px;">
    </div>
    <div class="col-sm-6" style="padding-top: 100px;">
      
      <h2>{{$products['name']}}</h2>
      <h3>${{$products['price']}}</h3>
      <h4>{{$products['description']}}</h4>
      <h5>{{$products['caragory']}}</h5>
      <a href="/"><button class="btn btn-secondary mt-4">Go Back</button></a>
     <form action="/add_to_cart" method="post">
     @csrf
     <input type="hidden" name="product_id" value="{{$products['id']}}">
     <button class="btn btn-primary mt-4">Add To Cart</button>
     </form>
      <button class="btn btn-success mt-4">Buy Now</button>

    </div>
  </div>
</div>

@endsection