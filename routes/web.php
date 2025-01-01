<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/driver', function () {
    return view('driver');
});
Route::get('/order', function () {
    return view('order');
});
Route::get('/lokasi',function(){
    return view('lokasi');
});
Route::get('/helpuser',function(){
    return view('helpuser');
});

Route::get("/admin",function(){
    return view('admin/adminsite');
});

Route::get("/loginadmin",function(){
    return view('admin/login');
});