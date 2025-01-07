<?php

namespace App\Http\Controllers;

use App\Models\Master_Driver;
use App\Models\Master_Location;
use App\Models\Pesan;
use App\Models\Tarif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    public function index()
    {
        $tarifs = Tarif::with('user')->get();
        $drivers = Master_Driver::with('user')->get(); // mengambil data driver beserta user terkait
        $kampuss = Master_Location::all();
        $pesansauto = Pesan::where('metode_daftar','auto')->get();
        $pesansman = Pesan::where('metode_daftar','manual')->get();
        return view('driver', compact('drivers','kampuss','tarifs','pesansauto','pesansman'));
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
    public function order(Request $request,$Tarif_id){
        // dd($id_user);
        $request->validate([
            'Tujuan' => 'nullable|string|max:50',
            'Penjemputan' => 'nullable|string|max:255',
            'Harga' => 'integer',
        ]);
        $tarif = Tarif::findOrFail($Tarif_id);
        // dd($tarif);
        if ($request->Tujuan) {
            $tarif->Tujuan = $request->Tujuan;
        }
        if ($request->Penjemputan) {
            $tarif->Penjemputan = $request->Penjemputan;
        }
        if ($request->Harga) {
            $tarif->Harga = $request->Harga;
        }
        if ($request->Jam) {
            $tarif->Jam = $request->Jam;
        }
        if ($request->Tanggal) {
            $tarif->Tanggal = $request->Tanggal;
        }
        if ($request->catatan) {
            $tarif->catatan = $request->catatan;
        }
        $tarif->id_user = Auth::id();
        $tarif->save();
        return redirect()->back()->with('status', 'Tujuan Aktif');
    }
    public function status(Request $request,$Tarif_id){
        $tarifstatus = Tarif::findOrFail($Tarif_id);
        $tarifstatus->status = $request->status;
        $tarifstatus->save();
        return redirect()->back();
    }
}
