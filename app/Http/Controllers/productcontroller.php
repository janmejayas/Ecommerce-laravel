<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;
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
}
