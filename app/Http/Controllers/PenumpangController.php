<?php

namespace App\Http\Controllers;

use App\Models\Master_Location;

use Illuminate\Http\Request;

class PenumpangController extends Controller
{
    public function index(){
        $kampuss = Master_Location::all();
        return view('order',compact('kampuss'));
    }
}
