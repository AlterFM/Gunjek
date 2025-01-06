<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Gunjek/static/css/order.css') }}">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    <title>Order GunJek</title>
</head>

<body>
    <header>
        <div class="Navbar">
            @include('menu.navbar')
            <div class="profile-container">
                <img src="{{ asset('Gunjek/static/image/male-user.png') }}" alt="profil" class="profile-picture">
            </div>
        </div>
    </header>
    <div class="container">
        <div class="container1">
            <div>
                <div class="daftar-aktif">
                    <h3>Daftar Driver Aktif</h1>
                </div>
                <div class="search flex">
                    <input class="search-input" type="search" placeholder="Cari Tujuan dan Penjemputan yang sama">
                    <img src="{{ asset('Gunjek/static/image/search.png') }}" alt="Search">
                </div>
            </div>
            <div class="list-aktif-container">
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
                        <p><strong>Rp 7000</strong></p>
                    </div>
                    <div class="pesan-btn">
                        <button type="submit">Pesan</button>
                    </div>
                </div>
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
                        <p><strong>Rp 7000</strong></p>
                    </div>
                    <div class="pesan-btn">
                        <button type="submit">Pesan</button>
                    </div>
                </div>
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
                        <p><strong>Rp 7000</strong></p>
                    </div>
                    <div class="pesan-btn">
                        <button type="submit">Pesan</button>
                    </div>
                </div>
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
                        <p><strong>Rp 7000</strong></p>
                    </div>
                    <div class="pesan-btn">
                        <button type="submit">Pesan</button>
                    </div>
                </div>
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
                        <p><strong>Rp 7000</strong></p>
                    </div>
                    <div class="pesan-btn">
                        <button type="submit">Pesan</button>
                    </div>
                </div>
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
                        <p><strong>Rp 7000</strong></p>
                    </div>
                    <div class="pesan-btn">
                        <button type="submit">Pesan</button>
                    </div>
                </div>
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
                        <p><strong>Rp 7000</strong></p>
                    </div>
                    <div class="pesan-btn">
                        <button type="submit">Pesan</button>

                    </div>
                </div>
                <!-- Additional list-aktif1 items will be appended here dynamically -->
            </div>
            <!-- Additional rides -->
            <div class="active-order" style="display: none;">
                <div class="order-awaiting">
                    <h3>Pesanan anda sedang diproses</h3>
                </div>
                <div class="order-accepted">
                    <h3>Pesanan diterima, pengemudi menuju tempat anda!</h3>
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
                <button class="cancel-btn" id="cancel-order">Batalkan Pesanan</button>
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
                        <div>
                            <img src="{{ asset('Gunjek/static/image/user_male.png') }}" alt="profil_user_riwayat">
                        </div>
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
                        <div>
                            <img src="{{ asset('Gunjek/static/image/user_male.png') }}" alt="profil_user_riwayat">
                        </div>
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
                        <div>
                            <img src="{{ asset('Gunjek/static/image/user_male.png') }}" alt="profil_user_riwayat">
                        </div>
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
                        <div>
                            <img src="{{ asset('Gunjek/static/image/user_male.png') }}" alt="profil_user_riwayat">
                        </div>
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
                        <div>
                            <img src="{{ asset('Gunjek/static/image/user_male.png') }}" alt="profil_user_riwayat">
                        </div>
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
                        <div>
                            <img src="{{ asset('Gunjek/static/image/user_male.png') }}" alt="profil_user_riwayat">
                        </div>
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
                        <div>
                            <img src="{{ asset('Gunjek/static/image/user_male.png') }}" alt="profil_user_riwayat">
                        </div>
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
                        <div>
                            <img src="{{ asset('Gunjek/static/image/user_male.png') }}" alt="profil_user_riwayat">
                        </div>
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
                        <option value="" selected disabled>Pilih Tujuan</option>
                        @foreach ($kampuss as $kampus)
                            <option value="{{ $kampus->Kampus_id }}">{{ $kampus->Nama_Kampus }}</option>
                        @endforeach
                        {{-- <option value="" selected><br>Pilih tujuan</option> --}}
                    </select>
                    <label for="pickup">Penjemputan</label>
                    <select id="pickup">
                        <option value="" selected disabled>Pilih Penjemputan</option>
                        @foreach ($kampuss as $kampus)
                            <option value="{{ $kampus->Kampus_id }}">{{ $kampus->Nama_Kampus }}</option>
                        @endforeach
                        {{-- <option value="" selected>Pilih penjemputan</option> --}}
                    </select>
                    <label for="travel-date">Waktu Perjalanan</label>
                    <div class="travel-time">
                        <input type="date" id="travel-date">
                        <input type="time" id="travel-time">
                    </div>
                    <label for="notes">Catatan</label>
                    <textarea id="notes" rows="3"></textarea>

                    <button type="submit" class="btn">Pesan</button>
                </form>


            </div>
        </div>
    </div>
    <footer>
        <p>Gunjek 2025</p>
    </footer>
    <!-- javascript -->
    <script src="{{ asset('Gunjek/static/js/order.js') }}"></script>
</body>

</html>
