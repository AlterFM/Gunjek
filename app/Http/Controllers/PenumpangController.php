<?php

namespace App\Http\Controllers;

use App\Models\Master_Location;
use App\Models\Pesan;
use App\Models\Tarif;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class PenumpangController extends Controller
{
    public function index()
    {
        $kampuss = Master_Location::latest()->paginate();
        $kampusdriver = Tarif::where('status', 'on')->get();
        return view('order', compact('kampuss', 'kampusdriver'));
    }
    // daftar manual
    public function create(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'Tujuan' => 'required',
            'Penjemputan' => 'required',
            'Jam' => 'required',
            'Tanggal' => 'required',
            'catatan' => 'required'
        ]);
        $user = Auth::user();

        $driver = Tarif::where('status', 'on') // Driver aktif
            ->where('Penjemputan', $validated['Penjemputan']) // Lokasi penjemputan
            ->first();

        if (!$driver) {
            return redirect()->back()->withErrors([
                'error' => 'Tidak ada driver yang tersedia untuk lokasi ini.'
            ]);
        }

        // Simpan data ke dalam tabel `pesans`
        $pesan = new Pesan;
        $pesan->pesans_id = (string) Str::uuid(); // Menggunakan UUID
        $pesan->Tujuan = $validated['Tujuan'];
        $pesan->Penjemputan = $validated['Penjemputan'];
        $pesan->Jam = $validated['Jam'];
        $pesan->Tanggal = $validated['Tanggal'];
        $pesan->catatan = $validated['catatan'];
        // $pesan->Tarif_id = $user->tarif->Tarif_id;
        $pesan->metode_daftar = 'manual';
        $pesan->id_user = $user->id;
        $pesan->save();
        return redirect()->back()->with('status', 'Permintaan Berhasil Terkirim');
    }

    // daftar otomatis
    public function autocreate(Request $request)
    {
        // Ambil data driver yang aktif
        $kampusdriver = Tarif::where('status', 'on')->get();

        // Ambil data user yang sedang login
        $user = Auth::user();

        // Jika tidak ada driver aktif
        if ($kampusdriver->isEmpty()) {
            return redirect()->back()->with('error', 'Tidak ada driver yang tersedia.');
        }

        // Ambil tarif pertama dari data yang ada
        $tarif = $kampusdriver->first(); // Atau sesuaikan jika Anda ingin memilih driver tertentu

        // Membuat pemesanan otomatis
        $pesan = new Pesan;
        $pesan->pesans_id = (string) Str::uuid(); // Menggunakan UUID
        $pesan->Penjemputan = $tarif->Penjemputan;
        $pesan->Tujuan = $tarif->Tujuan;
        $pesan->Jam = $tarif->Jam;
        $pesan->Tanggal = now()->toDateString();
        $pesan->catatan = $tarif->catatan;
        $pesan->Tarif_id = $tarif->Tarif_id;
        $pesan->id_user = $user->id;
        $pesan->metode_daftar = 'auto';
        // dd($pesan);
        $pesan->save();
        return redirect()->back()->with('status', 'Permintaan Berhasil Terkirim');
    }
}
