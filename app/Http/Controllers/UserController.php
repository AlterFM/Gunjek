<?php

namespace App\Http\Controllers;

use App\Models\Master_Driver;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    // untuk kedepanya lebih mudah untuk mengatur apakah user sudah/login/register ataukah belum
    public function Authentication()
    {
        if (Auth::check() == true) {
            return true;
        }
    }
    // khusus admin
    public function adminlogin()
    {
        if ($this->Authentication()) {
            return redirect('adminsite');
        } else {
            return view("admin/login");
        }
    }

    public function adminstorelogin(Request $request)
    {
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

    public function adminlogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }

    public function siteadmin()
    {
        if ($this->Authentication()) {
            return view("admin/adminsite");
        } else {
            return redirect("admin/login");
        }
    }

    // ------------- khusus penumpang---------
    public function userlogin(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'npm' => 'required|string',
            'password' => 'required|string',
        ]);
            $credentials = [
            'npm' => $request->npm,
            'password' => $request->password,
        ];
    
        if (Auth::attempt($credentials)) {
            // Regenerasi session untuk keamanan
            $request->session()->regenerate();
            // Redirect ke halaman setelah login
            return redirect()->intended('order');
        }
        // Jika gagal login, kembalikan ke halaman sebelumnya dengan error
        return back()->withErrors([
            'npm' => 'NPM atau password yang Anda masukkan tidak sesuai.',
        ])->onlyInput('npm');
    }
    public function userregister(Request $request)
    {
        // validasi
        $request->validate([
            'npm' => 'required|integer',
            'email' => 'required|email|unique:users,email',
            'nomor_handphone' => 'required|string|max:15',
            'password' => 'required|string|min:8',
            'ktm' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // setting gambarnya dulu
        $gambarktm = time().'.'.$request->ktm->extension();
        $request->ktm->move(public_path('fotoktm'), $gambarktm);

        $user = new User;
        $user->npm = $request->npm;
        $user->email = $request->email;
        $user->nomor_handphone = $request->nomor_handphone;
        $user->role = 'user';
        $user->password = Hash::make($request->password);
        $user->ktm = $gambarktm;
        $user->save();
        return redirect('/');
    }

    //----- khusus driver ---------
    public function driverlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('driver');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');   
    }
    public function driverregister(Request $request)
    {
        $request->validate([
            'npm' => 'required|integer',
            'email' => 'required|email|unique:users,email',
            'nomor_handphone' => 'required|string|max:15',
            'password' => 'required|string|min:8',
        ]);
        $user = new User;
        $user->npm = $request->npm;
        $user->email = $request->email;
        $user->nomor_handphone = $request->nomor_handphone;
        $user->role = 'driver';
        $user->password = Hash::make($request->password);
        $user->save();

        $driver = new Master_Driver;
        $driver->driver_id = Str::uuid();
        $driver->id_user = $user->id;
        $driver->save();
        return redirect('/');   
    }
    //---------- LOGOUT ----- 
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
