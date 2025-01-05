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
                        <div class="list-driver">
                            <p><strong>From :</strong> Kampus E</p>
                            <p class="time">11.50</p>
                            <p class="note_gender">Khusus Pria/Wanita</p>
                        </div>
                        <div class="list-driver">
                            <p><strong>To :</strong> Kampus F8</p>
                            <p><strong>Rp 700Z0</strong></p>
                        </div>
                    </div>
                    <div id="passenger-list-container" class="passenger-list-container">
                        <!-- Penumpang akan dimasukkan di sini secara dinamis data dummy di driver.js-->
                    </div>
                    <div class="active-order" style="display: none;">
                        <div class="order-accepted">
                            <h3>Pesanan Aktif</h3>
                        </div>
                        <div class="order-details">
                            <div class="order-info1">
                                <p><strong>Dari:</strong> <span id="active-from"></span></p>
                                <img src="./static/image/order_aktif.png" alt="order_aktif">
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
                        </div>
                    </div>
                    <div class="form-section">
                        <form id="order-form">
                            <label for="destination">Tujuan</label>
                            <select id="destination">
                                <option value="" selected><br>Pilih tujuan</option>
                            </select>
                            <label for="pickup">Penjemputan</label>
                            <select id="pickup">
                                <option value="" selected>Pilih penjemputan</option>
                            </select>
                            <label for="travel-date">Waktu Perjalanan</label>
                            <div class="travel-time">
                                <input type="date" id="travel-date">
                                <input type="time" id="travel-time">
                            </div>
                            <label for="tariff">Tarif</label>
                            <input type="text" id="tariff" placeholder="Masukkan tarif">

                            <label for="notes">Catatan</label>
                            <textarea id="notes" rows="3"></textarea>

                            <button type="submit" class="btn">Buat</button>
                        </form>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <footer>
        <p>Gunjek 2025</p>
    </footer>
    <!-- javascript -->
    <script src="{{ asset('Gunjek/static/js/driver.js') }}"></script>
</body>

</html>
