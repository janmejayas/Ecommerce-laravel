<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\order;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class productcontroller extends Controller
{
    //
    function index(){
        $data=product::all();
        return view('product',['products'=>$data]);

    }
    function detail($id){
        $data= product::find($id);
        return view('detail',['products'=>$data]);
    }
    function search(Request $req){
       
        $data= product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    function addToCard(Request $req){
        if($req->session()->has('user')){
            $cart = new cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');

        }else{
            return redirect('login');
        }

    }
    static function cartItem(){
        $userId=Session::get('user')['id'];
        return cart::where('user_id',$userId)->count();
    }
    function cartlist(){
        $userId= Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }

    function removeCart($id){
        cart::destroy($id);
        return redirect('cartlist');
    }

    function ordernow(){
        $userId= Session::get('user')['id'];
        $total = $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }

    function orderplace(Request $req){
        $userId=session::get('user')['id'];
        $allCart=cart::where('user_id',$userId)->get(); 
        foreach($allCart as $cart){
            $order= new order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method="$req->payment";
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            cart::where('user_id',$userId)->delete();
        }
        return redirect('/');
    }

    function myOrder(){
        $userId= Session::get('user')['id'];
         $order = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();

        return view('myorder',['order'=>$order]);
    }
}
