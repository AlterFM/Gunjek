<?php

namespace App\Http\Controllers;

use App\Models\Master_Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class KampusController extends Controller
{
    public function Authentication()
    {
        if (Auth::check() == true) {
            return true;
        }
    }

    public function index()
    {
        if ($this->Authentication()) {
            $kampuss = Master_Location::latest()->paginate();
            return view('admin/kampus/index', compact('kampuss'));
        } else {
            return view("admin/login");
        }
    }
    public function create()
    {
        if ($this->Authentication()) {
            return view('admin/kampus/create');
        } else {
            return view("admin/login");
        }
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Nama_Kampus' => 'required',
            'Alamat_Kampus' => 'required',
        ]);
        $kampus = new Master_Location;
        $kampus->Kampus_id = Str::uuid();
        $kampus->Nama_Kampus = $request->Nama_Kampus;
        $kampus->Alamat_Kampus = $request->Alamat_Kampus;
        $kampus->save();
        return redirect('kampus')->with('status', 'Kampus Berhasil Ditambah');
    }
    public function update(Request $request, $Kampus_id)
    {
        $kampus = Master_Location::where('Kampus_id',$Kampus_id)->first();
        $kampus->Nama_Kampus = $request->Nama_Kampus;
        $kampus->Alamat_Kampus = $request->Alamat_Kampus;
        $kampus->save();
        return redirect('kampus')->with('status', 'Kampus Berhasil Diubah');
    }
    public function delete($Kampus_id){
        $kampus  = Master_Location::where('Kampus_id',$Kampus_id)->first();
        $kampus->delete();
        return redirect('kampus')->with('status', 'Kampus Berhasil Dihapus');
    }
}
