<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("Gunjek/static/css/driver.css")}}">
    <title>Driver</title>
</head>

<body>
    <header>
        <div class="Navbar"> 
            @include('menu.navbar')
            <div class="profile-driver">
                <img src="{{asset('Gunjek/static/image/driverlogo.png')}}" alt="driverlogo" class="driverlogo">
            </div>
        </div>
    </header>
    <div class="container">
        <div class="container1">
            <h2>List Penumpang</h2>
            <div class="list-aktif1">
                <div class="helmdriver">
                    <img src="{{asset('Gunjek/static/image/helmhitam.png')}}" alt="logoperjalanan">
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
                        <img src="{{asset('Gunjek/static/image/user_male.png')}}" alt="profil_user_riwayat">
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
                        <img src="{{asset('Gunjek/static/image/user_male.png')}}" alt="profil_user_riwayat">
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
                        <img src="{{asset('Gunjek/static/image/user_male.png')}}" alt="profil_user_riwayat">
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
                        <img src="{{asset('Gunjek/static/image/user_male.png')}}" alt="profil_user_riwayat">
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
                        <img src="{{asset('Gunjek/static/image/user_male.png')}}" alt="profil_user_riwayat">
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
    </div>
    <footer>
        <p>Gunjek 2025</p>
    </footer>
<!-- javascript -->
      <script src="{{asset('Gunjek/static/js/driver.js')}}"></script>    
</body>
</html>