@extends('templates.master')

@section('title', 'Data Kampus')

@section('subjudul1', 'Kampus')
@section('subjudul2', 'Page')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <table class="table table-bordered table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kampus</th>
                <th scope="col">Alamat Kampus</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kampuss as $kampus)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kampus->Nama_Kampus }}</td>
                    <td>{{ $kampus->Alamat_Kampus }}</td>
                    <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalEdit{{$kampus->Kampus_id}}">
                            Edit
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="ModalEdit{{$kampus->Kampus_id}}" tabindex="-1" aria-labelledby="ModalEdit{{$kampus->Kampus_id}}Label"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="ModalEdit{{$kampus->Kampus_id}}Label">Modal title {{$kampus->Nama_Kampus}}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="{{url('kampus/update',$kampus->Kampus_id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="Nama_Kampus" class="form-label">Nama Kampus</label>
                                            <input type="text" name="Nama_Kampus" value="{{$kampus->Nama_Kampus}}" class="form-control @error('Nama_Kampus') is-invalid @enderror" id="Nama_Kampus">
                                        </div>
                                        <div class="mb-3">
                                            <label for="Alamat_Kampus" class="form-label">Alamat Kampus</label>
                                            <input type="text" name="Alamat_Kampus" value="{{$kampus->Alamat_Kampus}}" class="form-control @error('Alamat_Kampus') is-invalid @enderror" id="Alamat_Kampus">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                  </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="{{ url('kampus/delete', $kampus->Kampus_id) }}" onsubmit="return confirm('are you sure?')" method="post">
                          @csrf
                          @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <td colspan="4">Tidak ada data</td>
            @endforelse
        </tbody>
    </table>
@endsection
