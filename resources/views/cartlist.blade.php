@extends('master')
@section('content')
<div class="container" style=" padding:20px;">


  <div style="text-align: center;">
    <h2 class="mb-4">Result for Products</h2>
    <button class="btn btn-success" ><a href="ordernow"style="color: whitesmoke;">Order Now</a></button>
    @foreach($products as $item)
    <div class=" row searched-item mt-2 ml-2 mb-2" style="height: 200px;border-bottom: 1px solid #21262b; padding:20px;">
      <div class="col-sm-3 ">
        <img src="{{$item->gallery}}" alt="" style="height: 120px;">

      </div>

      <div class="col-sm-4 ">

        <div>
          <a href="detail/{{$item->id}}">
            <h4>{{$item->name}}</h4>
            <h4>${{$item->price}}</h4>
            <h5>{{$item->description}}</h5>
           
          </a>
        </div>
      </div>

      <div class="col-sm-3 ">
        <button class="btn btn-warning mb-4"><a href="/removecart/{{$item->cart_id}}">Romeve to Cart</a></button>
       
      </div>
      
    </div>
    
    @endforeach
  </div>
  <button class="btn btn-success" ><a href="ordernow"style="color: whitesmoke;">Order Now</a></button>
</div>

@endsection