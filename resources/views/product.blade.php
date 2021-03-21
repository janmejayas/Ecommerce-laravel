@extends('master')
@section('content')




<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" style="background-color: #fffde6;margin: auto;">
    @foreach($products as $item)

   
    <div class="carousel-item {{$item['id']==1?'active':''}}">
      <img src="{{$item['gallery']}}" class="d-block " alt="{{$item['name']}}" style="height: 300px;">
      <div class="carousel-caption d-none d-md-block custom-text" style="text-align:center;">
      <a href="detail/{{$item['id']}}">
      <h5>{{$item['name']}}</h5>
        <p>{{$item['description']}}</p> </a>
      </div>
    </div>
   
    @endforeach

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


  <!--start trending page -->

  <div class="container">
    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-touch="false" data-interval="false">
      <div class="carousel-inner" >
        <div class="trending-wrapper">
          <h3 style="text-align: center;padding-top:20px;">Trending Products</h3>

          @foreach($products as $item)

          
          <div class="carousel-item {{$item['id']==1?'active':''}}" style="background-color: #aebff4;">
            <img src="{{$item['gallery']}}" class="d-block " alt="{{$item['name']}}" style="height: 200px;">
            <div class="carousel-caption d-none d-md-block custom-text" style="text-align: end;">
            <a href="detail/{{$item['id']}}"><h5 style="color: red;">{{$item['name']}}</h5>
              <h4 style="color: red;">${{$item['price']}}</h4>
              <p style="color: red;">{{$item['description']}}</p></a>
            </div>
          </div>
          
          @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControlsNoTouching" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControlsNoTouching" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!--end trending page -->


  </div>
</div>
</div>


@endsection