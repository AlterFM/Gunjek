<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Gunjek/static/css/driver.css') }}">
    <title>Driver</title>
</head>

<body>
    <header>
        <div class="Navbar">
            @include('menu.navbar')
            <div class="profile-driver">
                <img src="{{ asset('Gunjek/static/image/driverlogo.png') }}" alt="driverlogo" class="driverlogo">
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </header>
    <div class="container">
        @foreach ($drivers as $driver)
            @if ($driver->Nomor_Kendaraan === null || $driver->Alamat === null || $driver->Foto_Diri === null)
                <div class="card" style="width: 50rem;">
                    <div class="card-body">
                        <h2 class="text-center text-capitalize">Silahkan isikan data drivernya disini</h2>
                        <form action="{{ url('driver-update', $driver->driver_id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="Nomor_Kendaraan" style="color: black;">Nomor Kendaraan</label>
                                <input type="text" name="Nomor_Kendaraan" id="Nomor_Kendaraan"
                                    class="form-control @error('Nomor_Kendaraan') is-invalid @enderror"
                                    placeholder="Masukkan Nomor Kendaraan">
                            </div>
                            <div class="form-group">
                                <label for="Alamat" style="color: black;">Alamat</label>
                                <textarea name="Alamat" id="Alamat" class="form-control @error('Alamat') is-invalid @enderror"
                                    placeholder="Masukkan Alamat"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="Fotodiri" style="color: black;">Foto Diri</label>
                                <input type="file" name="Foto_Diri" id="Fotodiri"
                                    class="form-control @error('Foto_Diri') is-invalid @enderror">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                        </form>
                    </div>
                </div>
            @else
                <div class="container1">
                    <h2>List Penumpang</h2>
                    <div class="list-aktif1">
                        <div class="helmdriver">
                            <img src="{{ asset('Gunjek/static/image/helmhitam.png') }}" alt="logoperjalanan">
                        </div>
                        @foreach ($tarifs as $tarif)
                            <div class="list-driver">
                                <p><strong>From :</strong> {{ $tarif->Penjemputan }}</p>
                                <p class="time">{{ $tarif->Jam }}</p>
                                <p class="note_gender">Khusus Pria/Wanita</p>
                            </div>
                            <div class="list-driver">
                                <p><strong>To :</strong> {{ $tarif->Tujuan }}</p>
                                <p><strong>Rp {{ $tarif->Harga }}</strong></p>
                            </div>
                            {{-- batas --}}
                    </div>
                    <div id="passenger-list-container" class="passenger-list-container">
                        <!-- Penumpang akan dimasukkan di sini secara dinamis data dummy di driver.js-->
                        {{-- buat user yang daftar secara otomatis --}}
                        @forelse ($pesansauto as $item)
                        <div class="passenger-info passenger-card">
                            <img src="{{asset('Gunjek/static/image/user_male.png')}}" alt="Avatar Penumpang" class="avatar">
                            <div>
                                <p><strong>{{$item->user->name}}</strong></p>
                                <p>{{$item->user->email}}</p>
                            </div>
                            <div class="passenger-actions">
                                <form action="{{url('acceptuser',$item->pesans_id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="accept-btn">Terima</button>
                                </form>
                                <form action="{{url('declineuser',$item->pesans_id)}}" onsubmit="return confirm('are you sure?')" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="reject-btn">Tolak</button>
                                </form>
                            </div>
                        </div>
                        @empty
                            <p>belum ada yang mengorder langsung ke anda</p>
                        @endforelse

                        <p>Status Anda :
                        <form action="{{ url('statusdriver', $tarif->Tarif_id) }}" method="post" id="statusForm">
                            @csrf
                            @method('PUT')
                            <select name="status" id="status"
                                onchange="document.getElementById('statusForm').submit()">
                                <option value="on"{{ $tarif->status === 'on' ? 'selected' : '' }}>Aktif</option>
                                <option value="off" {{ $tarif->status === 'off' ? 'selected' : '' }}>Tidak Aktif
                                </option>
                            </select>
                        </form>
                        </p>
                        @forelse ($pesansman as $item)
                        <div class="card-content">
                            <img src="{{ asset('Gunjek/static/image/user_male.png') }}" alt="profil_user_riwayat">
                            <div class="list-riwayat">
                                <p><strong>From :</strong> {{$item->Penjemputan}}</p>
                                <p class="time">{{$item->Jam}}</p>
                                <p class="note_gender">{{$item->catatan}}</p>
                            </div>
                            <div class="list-riwayat passenger-actions">
                                <p><strong>To :</strong>{{$item->Tujuan}}</p>
                                <button class="accept-btn" data-id="${passenger.id}">Terima</button>
                            </div>
                        </div>
                        {{-- <div class="passenger-info passenger-card">
                            <img src="{{asset('Gunjek/static/image/user_male.png')}}" alt="Avatar Penumpang" class="avatar">
                            <div>
                                <p><strong>{{$item->user->name}}</strong></p>
                                <p>{{$item->user->email}}</p>
                            </div>
                            <div class="passenger-actions">
                                <button class="accept-btn" data-id="${passenger.id}">Terima</button>
                            </div>
                        </div> --}}
                        @empty
                            <p>belum ada yang mengorder ke anda</p>
                        @endforelse

                        {{-- buat user yang daftar secara manual --}}
                        
                    </div>
            @endforeach
            <div class="active-order" style="display: none;">
                <div class="order-accepted">
                    <h3>Pesanan Aktif</h3>
                </div>
                <div class="order-details">
                    <div class="order-info1">
                        <p><strong>Dari:</strong> <span id="active-from"></span></p>
                        <img src="{{ asset('Gunjek/static/image/order_aktif.png') }}" alt="order_aktif">
                        <p><strong>Menuju:</strong> <span id="active-to"></span></p>
                    </div>
                    <div class="order-info2">
                        <p><strong>Nama Pengemudi:</strong> <span id="active-driver-name"></span></p>
                        <p><strong>Nomor Kendaraan:</strong> <span id="nomor-kendaraan"></span></p>
                        <p><strong>Waktu penjemputan:</strong> <span id="travel-time"></span></p>
                        <p><strong>Tarif:</strong> <span id="active-tarif"></span></p>
                    </div>
                </div>
                <button class="finish-btn" id="finish-order">Selesai</button>
            </div>

    </div>
    <div class="container2">
        <div class="tabs">
            <button class="tab active" id="order-tab">Order</button>
            <button class="tab" id="history-tab">Riwayat</button>
        </div>
        <div class="history">
            <div class="card">
                @forelse ($transaksis as $item)
                <div class="card-content">
                    <img src="{{ asset('Gunjek/static/image/user_male.png') }}" alt="profil_user_riwayat">
                    <div class="list-riwayat">
                        <p><strong>From :</strong> {{$item->Penjemputan}}</p>
                        <p class="time">{{$item->pesan->Jam}}</p>
                        <p class="note_gender">{{$item->pesan->catatan}}</p>
                    </div>
                    <div class="list-riwayat">
                        <p><strong>To :</strong>  {{$item->Tujuan}}</p>
                        <p><strong>Rp {{$item->pesan->tarif->Harga}}</strong></p>
                    </div>
                </div>
                @empty
                    <p>kosong</p>
                @endforelse
                {{-- <div class="card-content">
                    <img src="{{ asset('Gunjek/static/image/user_male.png') }}" alt="profil_user_riwayat">
                    <div class="list-riwayat">
                        <p><strong>From :</strong> Kampus E</p>
                        <p class="time">11.50</p>
                        <p class="note_gender">Khusus Pria/Wanita</p>
                    </div>
                    <div class="list-riwayat">
                        <p><strong>To :</strong> Kampus F8</p>
                        <p><strong>Rp 7000</strong></p>
                    </div>
                </div>
                <div class="card-content">
                    <img src="{{ asset('Gunjek/static/image/user_male.png') }}" alt="profil_user_riwayat">
                    <div class="list-riwayat">
                        <p><strong>From :</strong> Kampus E</p>
                        <p class="time">11.50</p>
                        <p class="note_gender">Khusus Pria/Wanita</p>
                    </div>
                    <div class="list-riwayat">
                        <p><strong>To :</strong> Kampus F8</p>
                        <p><strong>Rp 7000</strong></p>
                    </div>
                </div>
                <div class="card-content">
                    <img src="{{ asset('Gunjek/static/image/user_male.png') }}" alt="profil_user_riwayat">
                    <div class="list-riwayat">
                        <p><strong>From :</strong> Kampus E</p>
                        <p class="time">11.50</p>
                        <p class="note_gender">Khusus Pria/Wanita</p>
                    </div>
                    <div class="list-riwayat">
                        <p><strong>To :</strong> Kampus F8</p>
                        <p><strong>Rp 7000</strong></p>
                    </div>
                </div>
                <div class="card-content">
                    <img src="{{ asset('Gunjek/static/image/user_male.png') }}" alt="profil_user_riwayat">
                    <div class="list-riwayat">
                        <p><strong>From :</strong> Kampus E</p>
                        <p class="time">11.50</p>
                        <p class="note_gender">Khusus Pria/Wanita</p>
                    </div>
                    <div class="list-riwayat">
                        <p><strong>To :</strong> Kampus F8</p>
                        <p><strong>Rp 7000</strong></p>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="form-section">
            @foreach ($tarifs as $tarif)
                <form id="order-form" action="{{ url('startorder', $tarif->Tarif_id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <label for="destination">Tujuan</label>
                    <select id="destination" name="Tujuan">
                        <option value="" selected disabled>Pilih Tujuan</option>
                        @foreach ($kampuss as $kampus)
                            <option value="{{ $kampus->Nama_Kampus }}">{{ $kampus->Nama_Kampus }}</option>
                        @endforeach
                        {{-- <br>Pilih tujuan</option> --}}
                    </select>
                    <label for="pickup">Penjemputan</label>
                    <select id="pickup" name="Penjemputan">
                        <option value="" selected disabled>Pilih Tujuan</option>
                        @foreach ($kampuss as $kampus)
                            <option value="{{ $kampus->Nama_Kampus }}">{{ $kampus->Nama_Kampus }}</option>
                        @endforeach
                        {{-- <option value="" selected>Pilih penjemputan</option> --}}
                    </select>
                    <label for="travel-date">Waktu Perjalanan</label>
                    <div class="travel-time">
                        <input type="date" id="travel-date" name="Tanggal">
                        <input type="time" id="travel-time" name="Jam">
                    </div>
                    <label for="tariff">Tarif</label>
                    <input type="text" id="tariff" name="Harga" placeholder="Masukkan tarif">

                    <label for="notes">Catatan</label>
                    <textarea id="notes" name="catatan" rows="3"></textarea>

                    <button type="submit" class="btn">Buat</button>
                </form>
            @endforeach
        </div>
    </div>
    @endif
    @endforeach
    </div>
    <footer>
        <p>Gunjek {{ date('Y') }}</p>
    </footer>
    <!-- javascript -->
    <script src="{{ asset('Gunjek/static/js/driver.js') }}"></script>
</body>

</html>
