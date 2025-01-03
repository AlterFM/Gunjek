<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // untuk kedepanya lebih mudah untuk mengatur apakah user sudah/login/register ataukah belum
    public function Authentication(){
        if (Auth::check() == true) {
            return true;
        }
    }
    // khusus admin
    public function adminlogin(){
        if ($this->Authentication()) {
            return redirect('adminsite');
        }else {
            return view("admin/login");
        }
    }

    public function adminstorelogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('adminsite');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function adminlogout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }

    public function siteadmin(){
        if ($this->Authentication()) {
            return view("admin/adminsite");
        }else {
            return redirect("admin/login");
        }
    }

    // khusus penumpang
    public function userlogin(){
        return 'userlogin';
    }
    public function userregister(){
        return 'userregister';
    }

    // khusus driver
    public function driverlogin(){
        return 'driverlogin';
    }
    public function driverregister(){
        return 'driverregister';
    }
}