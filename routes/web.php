<?php

use App\Http\Controllers\productcontroller;
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view("/register",'register');
Route::post('/login',[Usercontroller::class,"login"]);
Route::post('/register',[Usercontroller::class,"register"]);

Route::get('/',[productcontroller::class,"index"]);
Route::get('detail/{id}',[productcontroller::class,"detail"]);
Route::get('search',[productcontroller::class,"search"]);
Route::post('add_to_cart',[productcontroller::class,"addToCard"]);
Route::get('cartlist',[productcontroller::class,"cartlist"]);
Route::get('removecart/{id}',[productcontroller::class,"removeCart"]);
Route::get('ordernow',[productcontroller::class,"ordernow"]);
Route::post('orderplace',[productcontroller::class,"orderplace"]);
Route::get('myorder',[productcontroller::class,"myOrder"]);











