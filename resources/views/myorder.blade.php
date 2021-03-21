@extends('master')
@section('content')
<div class="container" style=" padding:20px;">


  <div style="text-align: center;">
    <h2 class="mb-4">My Orders</h2>
    
    @foreach($order as $item)
    <div class=" row searched-item mt-2 ml-2 mb-2" style="height: 200px;border-bottom: 1px solid #21262b; ">
      <div class="col-sm-3 col-md-3 ">
      <a href="detail/{{$item->id}}"><img src="{{$item->gallery}}" alt="" style="height: 120px;"> </a>

      </div>

      <div class="col-sm-4 col-md-4 ">

        <div>
            <h4>Name :{{$item->name}}</h4>
            <h5>Delivery Status :{{$item->status}}</h5>
            <h5>Address :{{$item->address}}</h5>
            <h5>Payment Status :{{$item->payment_status}}</h5>
            <h5>payment Method :{{$item->payment_method}}</h5>

           
        
        </div>
      </div>

      <div class="col-sm-3 col-md-4 ">
       
       
      </div>
      
    </div>
    
    @endforeach
  

@endsection