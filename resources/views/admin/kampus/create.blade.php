@extends('templates.master')

@section('title', 'Tambah Kampus')

@section('subjudul1', 'Tambah')
@section('subjudul2', 'Kampus')

@section('content')
<form action="{{url('kampus/store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="Nama_Kampus" class="form-label">Nama Kampus</label>
        <input type="text" name="Nama_Kampus" class="form-control @error('Nama_Kampus') is-invalid @enderror" id="Nama_Kampus">
    </div>
    <div class="mb-3">
        <label for="Alamat_Kampus" class="form-label">Alamat Kampus</label>
        <input type="text" name="Alamat_Kampus" class="form-control @error('Alamat_Kampus') is-invalid @enderror" id="Alamat_Kampus">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection