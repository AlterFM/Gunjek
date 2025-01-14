<?php

namespace App\Http\Controllers;

use App\Models\Master_Driver;
use App\Models\Master_Location;
use App\Models\Pesan;
use App\Models\Tarif;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    public function index()
    {
        $tarifs = Tarif::where('id_user', Auth::id())->with('user')->get();
        $drivers = Master_Driver::where('id_user', Auth::id())->with('user')->get();
        $kampuss = Master_Location::all();
        $driver = Master_Driver::where('id_user', Auth::id())->first();
        $transaksis = Transaksi::where('Driver_id', $driver->driver_id)->get();
        $pesansauto = Pesan::where('metode_daftar', 'auto')->whereNotIn('status', ['terima', 'selesai'])->get();
        $pesansman = Pesan::where('metode_daftar', 'manual')->whereNotIn('status', ['terima', 'selesai'])->get();
        return view('driver', compact('drivers', 'kampuss', 'tarifs', 'pesansauto', 'pesansman', 'transaksis'));
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
    public function order(Request $request, $Tarif_id)
    {
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
        $tarif->get_order = 'no';
        $tarif->id_user = Auth::id();
        $tarif->save();
        return redirect()->back()->with('status', 'Tujuan Aktif');
    }
    // ini kalau drivernya mau narik
    public function status(Request $request, $Tarif_id)
    {
        $tarifstatus = Tarif::findOrFail($Tarif_id);
        $tarifstatus->status_driver = $request->status_driver;

        $tarifstatus->save();
        return redirect()->back();
    }
    public function decline($pesans_id)
    {
        $pesanan = Pesan::findOrFail($pesans_id);
        $pesanan->delete();
        return redirect()->back();
    }
    public function accept(Request $request, $pesans_id)
    {
        // dd($pesans_id);
        $pesanan = Pesan::findOrFail($pesans_id);
        $pesanan->status = 'terima';
        $pesanan->save();

        $datatarif = $pesanan->Tarif_id;

        $tarif = Tarif::findOrFail($datatarif);
        $tarif->get_order = 'yes';
        $tarif->save();


        $driver = Master_Driver::where('id_user', Auth::id())->first();

        if (!$driver) {
            return redirect()->back()->withErrors(['error' => 'Anda belum terdaftar sebagai driver.']);
        }

        $transaksi = new Transaksi;
        $transaksi->pesanan_id = $pesanan->pesans_id;
        $transaksi->user_id = $pesanan->user->id;
        $transaksi->Driver_id = $driver->driver_id;
        $transaksi->Penjemputan = $pesanan->Penjemputan;
        $transaksi->Tujuan = $pesanan->Tujuan;
        $transaksi->save();
        return redirect()->back()->with('status', 'segera antarkan penumpang sampai tujuan');
    }
    // kodingan memassukan pembayaran user
    public function payment(Request $request, $id)
    {
        // return $id;
        $transaksi = Transaksi::findOrFail($id);

        $pesanan = Pesan::findOrFail($transaksi->pesanan_id);
        $pesanan->status = 'selesai';
        $pesanan->save();

        $datatarif = $pesanan->Tarif_id;
        $tarif = Tarif::findOrFail($datatarif);
        $tarif->get_order = 'no';
        $tarif->save();

        $transaksi->metode_pembayaran = $request->metode_pembayaran;
        $transaksi->save();
        return redirect()->back()->with('status', 'pembayaran berhasil');
    }
}
