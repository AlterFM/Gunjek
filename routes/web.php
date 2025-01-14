<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\PenumpangController;
use App\Http\Controllers\UserController;
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

// Route::get('/driver', function () {
//     return view('driver');
// });
// Route::get('/order', function () {
//     return view('order');
// });
Route::get('/lokasi',function(){
    return view('lokasi');
});
Route::get('/helpuser',function(){
    return view('helpuser');
});

Route::controller(UserController::class)->group(function(){
    // awal admin
    Route::get('admin/login','adminlogin');
    Route::post('admin/storelogin','adminstorelogin');
    Route::post('admin/logout','adminlogout');
    Route::get('adminsite','siteadmin');
    // akhir admin

    // awal user
    Route::post('loginuser','userlogin');
    Route::post('registeruser','userregister');
    // akhir user

    // awal driver
    Route::post('logindriver','driverlogin');
    Route::post('registerdriver','driverregister');
    // akhir driver
    
    // user dan driver
    Route::post('logout','logout');
});

Route::middleware(['checkRole:admin'])->group(function(){
    Route::controller(KampusController::class)->group(function(){
        Route::get('kampus','index');
        Route::get('kampus/tambah','create');
        Route::post('kampus/store','store');
        Route::put('kampus/update/{Kampus_id}','update');
        Route::delete('kampus/delete/{Kampus_id}','delete');
    });
});

Route::middleware(['checkRole:driver'])->group(function(){
    Route::controller(DriverController::class)->group(function(){
        Route::get('driver','index');
        Route::put('driver-update/{driver_id}','update');
        Route::patch('startorder/{Tarif_id}','order');
        Route::put('statusdriver/{Tarif_id}','status');
        Route::put('acceptuser/{pesans_id}','accept'); // kalau drivernya menerima
        Route::delete('declineuser/{pesans_id}','decline'); // kalau drivernya menolak
        Route::put('payment/{id}','payment');
    });
});

Route::middleware(['checkRole:user'])->group(function(){
    Route::controller(PenumpangController::class)->group(function(){
        Route::get('order','index');
        Route::post('order-store','create');
        Route::post('orderauto','autocreate');
    });
});