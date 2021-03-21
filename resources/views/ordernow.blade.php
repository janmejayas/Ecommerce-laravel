@extends('master')
@section('content')
<div class="container" style=" padding:20px;">
  <div class="row">
    <div class="col-sm-8 mb-4">
      <table class="table">
        <tbody>
          <tr>
            <td>Ammount</td>
            <td>${{$total}}</td>
          </tr>
          <tr>
            <td>GST</td>
            <td>$ 0</td>
          </tr>
          <tr>
            <td>Delivery Charge</td>
            <td>$ 10</td>
          </tr>
          <tr>
            <td>Total Ammount</td>
            <td>${{$total+10}}</td>
          </tr>
        </tbody>
      </table>
    </div>
    
  </div>

  <div class="col-sm-8">
      <form action="/orderplace" method="POST">
      @csrf
      <div class="form-group">
      <textarea name="address" placeholder="Enter Your Address" class="form-control"></textarea>
      </div>
      <div class="form-group">
      <label for="payment method">Payment Method</label>
      <p><input type="radio" value="cash" name="payment"><span>Upi Payment</span></p>
      <p><input type="radio"  value="cash" name="payment"><span>EMI Payment</span></p>
      <p><input type="radio" name="payment"><span>Payment on delivery</span></p>

      </div>
      <button type="submit"  value="cash" class="btn btn-success">Order Now</button>
      </form>
    </div>
</div>

@endsection