<?php

namespace App\Http\Controllers;

use App\Models\Master_Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Master_Driver::with('user')->get(); // Ambil data driver beserta user terkait
        return view('driver', compact('drivers'));
    }
    public function update(Request $request, $driver_id)
    {
        // dd($driver_id);
        $request->validate([
            'Nomor_Kendaraan' => 'nullable|string|max:50',
            'Alamat' => 'nullable|string|max:255',
            'Fotodiri' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $driver = Master_Driver::findOrFail($driver_id);
        if ($request->Nomor_Kendaraan) {
            $driver->Nomor_Kendaraan = $request->Nomor_Kendaraan;
        }
        if ($request->Alamat) {
            $driver->Alamat = $request->Alamat;
        }
        if ($request->hasFile('Foto_Diri')) {
            $fotoPath = time() . '.' . $request->Foto_Diri->extension();
            $request->Foto_Diri->move(public_path('fotodriver'), $fotoPath);
            $driver->Foto_Diri = $fotoPath;
        }
        $driver->save();
        return redirect()->back()->with('status', 'Selamat Anda Telah Terdaftar');
    }
}
