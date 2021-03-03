@extends('master')
@section('content')
<div class="container" style=" padding:20px;">
  <div class="row">
    <div class="col-sm-4">
    <a href="#">Filter</a>
    </div>
    <div class="col-sm-4" style="text-align: center;">
    <h2>Result for Products</h2>
    @foreach($products as $item)
    <div class="searched-item">
      <img src="{{$item['gallery']}}" alt="" style="height: 150px;">
      <div>
        <a href="detail/{{$item['id']}}">
        <h3>{{$item['name']}}</h3>
        <h4>{{$item['description']}}</h4>
        </a>
      </div>
    </div>
    @endforeach
    </div>
  </div>
</div>

@endsection