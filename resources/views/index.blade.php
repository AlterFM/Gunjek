<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Gunjek/static/css/styles.css') }}">
    <title>GunJek</title>
</head>

<body>
    <header>

        <div class="Navbar">
            @include('menu.navbar')
            <div class="btn_masuk" id="btn_masuk">
                <button id="show-login">Masuk</button>
            </div>
            {{-- <div class="profile-user" id="profile-user">
                <img src="{{asset('Gunjek/static/image/user_male.png')}}" alt="driverlogo" class="userlogo">
            </div>
            <div class="profile-info" id="profile-info">
                <p id="profile-name">Nama: John Doe</p>
                <p id="profile-npm">NPM: 123456789</p>
                <button id="logout-button">Logout</button>
            </div> --}}
            <div class="popup">
                <div class="close-btn">&times;</div>
                <!-- User Login Form -->
                <div class="login-form" id="login-form">
                    <h2>Masuk</h2>
                    <img src="{{ asset('Gunjek/static/image/LOGO.png') }}" alt="logologin">
                    <form action="{{url('loginuser')}}" method="post">
                        @csrf
                        <div class="form-element">
                            <label for="npm">NPM</label>
                            <input type="text" id="npm" placeholder="Masukkan NPM Anda">
                        </div>
                        <div class="form-element">
                            <label for="password">Kata Sandi</label>
                            <input type="password" id="password" placeholder="Masukkan kata sandi Anda">
                        </div>
                        <div class="form-element">
                            <a href="a" class="lupa-sandi">Lupa kata sandi</a>
                        </div>
                        <div class="form-element">
                            <button type="submit">Masuk</button>
                        </div>
                    </form>
                    <div class="form-element">
                        <a href="#" class="klik_daftar" onclick="showForm('register')">Daftar</a>
                    </div>
                    <div class="toggle-container">
                        <label class="switch">
                            <input type="checkbox" id="mode-toggle-login" onclick="showForm('driverLogin')">
                            <span class="slider round"></span>
                        </label>
                        <span id="mode-text-login">Masuk sebagai Driver</span>
                    </div>
                </div>
                <!-- Driver Login Form -->
                <div class="driver-login-form" id="driver-login-form" style="display: none;">
                    <h2>Masuk sebagai Driver</h2>
                    <img src="{{ asset('Gunjek/static/image/LOGO.png') }}" alt="logologin-driver">
                    <form action="{{url('logindriver')}}" method="post">
                        @csrf
                        <div class="form-element">
                            <label for="driver-id">Email</label>
                            <input type="text" id="driver-id" placeholder="Masukkan Email Driver Anda">
                        </div>
                        {{-- <div class="form-element">
                            <label for="driver-id">ID Driver</label>
                            <input type="text" id="driver-id" placeholder="Masukkan ID Driver Anda">
                        </div> --}}
                        <div class="form-element">
                            <label for="driver-password">Kata Sandi</label>
                            <input type="password" id="driver-password" placeholder="Masukkan kata sandi Anda">
                        </div>
                        <div class="form-element">
                            <button type="submit">Masuk</button>
                        </div>
                    </form>
                    <div class="form-element">
                        <a href="#" class="klik_daftar" onclick="showForm('driverRegister')">Daftar</a>
                    </div>
                    <div class="toggle-container">
                        <label class="switch">
                            <input type="checkbox" id="mode-toggle-driver-login" onclick="showForm('login')">
                            <span class="slider round"></span>
                        </label>
                        <span id="mode-text-driver-login">Masuk sebagai User</span>
                    </div>
                </div>

                <!-- User Registration Form -->
                <div class="daftar-form" id="register-form" style="display: none;">
                    <h2>Daftar</h2>
                    <img src="{{ asset('Gunjek/static/image/LOGO.png') }}" alt="logodaftar">
                    {{-- daftar user(penumpang) --}}
                    <form action="{{url('registeruser')}}" method="post">
                        @csrf
                        <div class="form-element">
                            <label for="npm-register">NPM</label>
                            <input type="text" id="npm-register" placeholder="Masukkan NPM Anda">
                        </div>
                        <div class="form-element">
                            <label for="email-register">Email</label>
                            <input type="text" id="npm-register" placeholder="Masukkan Email Anda">
                        </div>
                        <div class="form-element">
                            <label for="nomorhp-register">Nomor Telpon</label>
                            <input type="text" id="nomorhp-register" placeholder="Masukkan NPM Anda">
                        </div>
                        <div class="form-element">
                            <label for="password-register">Kata Sandi</label>
                            <input type="password" id="password-register" placeholder="Buat kata sandi baru Anda">
                        </div>
                        {{-- <div class="form-element">
                        <label for="password-confirm">Konfirmasi Kata Sandi</label>
                        <input type="password" id="password-confirm" placeholder="Masukkan kata sandi baru Anda">
                    </div> --}}
                        <div class="form-element">
                            <label for="ktm-register">Unggah KTM Anda</label>
                            <input type="file" name="ktm" id="ktm-register">
                            {{-- <form action="/action_page.php" method="post" enctype="multipart/form-data">
                            <label for="myFile">Konfirmasi KTM</label>
                            <input type="file" id="myFile" name="filename">
                            <input type="submit" value="Unggah">
                            <span class="icon-plus">+</span>
                            <span class="Upload-text">Unggah KTM Anda</span>
                        </form> --}}
                        </div>
                        <div class="form-element">
                            <button type="submit">Daftar</button>
                        </div>
                    </form>
                    {{-- daftar user(penumpang) --}}
                    <div class="toggle-container">
                        <label class="switch">
                            <input type="checkbox" id="mode-toggle-register" onclick="showForm('driverRegister')">
                            <span class="slider round"></span>
                        </label>
                        <span id="mode-text-register">Daftar sebagai Driver</span>
                    </div>
                </div>

                <!-- Driver Registration Form -->
                <div class="driver-register-form" id="driver-register-form" style="display: none;">
                    <h2>Daftar sebagai Driver</h2>
                    <img src="{{ asset('Gunjek/static/image/LOGO.png') }}" alt="logodaftar-driver">
                    {{-- driver registrasi --}}
                    <form action="{{url('registerdriver')}}" method="post">
                        @csrf
                        <div class="form-element">
                            <label for="driver-npm">NPM</label>
                            <input type="text" id="driver-npm" placeholder="Masukkan NPM Anda">
                        </div>
                        <div class="form-element">
                            <label for="email-register">Email</label>
                            <input type="text" id="npm-register" placeholder="Masukkan Email Anda">
                        </div>
                        <div class="form-element">
                            <label for="nomorhp-register">Nomor Telpon</label>
                            <input type="text" id="nomorhp-register" placeholder="Masukkan NPM Anda">
                        </div>
                        <div class="form-element">
                            <label for="driver-password-register">Kata Sandi</label>
                            <input type="password" id="driver-password-register" placeholder="Buat kata sandi baru Anda">
                        </div>
                        {{-- <div class="form-element">
                            <label for="driver-password-confirm">Konfirmasi Kata Sandi</label>
                            <input type="password" id="driver-password-confirm"
                                placeholder="Masukkan kata sandi baru Anda">
                        </div> --}}
                        {{-- <div class="form-element">
                            <form action="/action_page.php" method="post" enctype="multipart/form-data">
                                <label for="myFile">Konfirmasi Kendaraan</label>
                                <input type="file" id="myFile" name="filename">
                                <input type="submit" value="Unggah">
                            </form>
                        </div> --}}
                        {{-- <div class="form-element">
                            <label for="driver-npm">Nomor Kendaraan</label>
                            <input type="text" id="driver-npm" placeholder="Masukkan NPM Anda">
                        </div> --}}
                        <div class="form-element">
                            <button type="submit">Daftar</button>
                        </div>
                    </form>
                    {{-- driver registrasi --}}
                    <div class="toggle-container">
                        <label class="switch">
                            <input type="checkbox" id="mode-toggle-driver-registerr" onclick="showForm('login')">
                            <span class="slider round"></span>
                        </label>
                        <span id="mode-text-driver-register">Daftar sebagai User</span>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <div class="container-topkampus">
        <div class="topkampus">
            <img class="tkp1" src="{{ asset('Gunjek/static/image/img1.png') }}" alt="kampusa">
            <img class="tkp2" src="{{ asset('Gunjek/static/image/img2.png') }}" alt="kampusB">
        </div>
        <h1 class="welcome-text">Selamat datang di GUNJEK!</h1>
    </div>
    <div class="gunjekorder">
        <img src="{{ asset('Gunjek/static/image/Location Pin.gif') }}" alt="locationgping" class="location-ping">
        <div class="siap-antar">
            <h2>Gunjek siap antar kamu<br>keliling kampus!</h2>
            <p>bingung mau praktikum atau masuk kuliah beda gedung? order gunjek adalah<br>solusinya! mudah cari teman
                tebengan tanpa harus bayar mahal</p>
            <button class="btn_order" onclick="window.location.href='{{url('order')}}'">Order</button>
        </div>
    </div>

    <div class="Pilih-gunjek">
        <h1>Kenapa harus pilih Gunjek?</h1>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="{{ asset('Gunjek/static/image/card1.png') }}" alt="Driver sesama mahasiswa"
                        style="width:100%">
                    <p>Driver sesama mahasiswa</p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{ asset('Gunjek/static/image/card2.png') }}" alt="Harga bersahabat"
                        style="width:100%">
                    <p>Harga bersahabat</p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{ asset('Gunjek/static/image/card3.png') }}" alt="Titik antar dan jemput"
                        style="width:100%">
                    <p>Titik antar dan jemput di semua kampus Gunadarma</p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{ asset('Gunjek/static/image/card4.png') }}" alt="Jam order fleksibel"
                        style="width:100%">
                    <p>Jam order fleksibel</p>
                </div>
            </div>
        </div>
    </div>
    <div class="daftardriver">
        <div>
            <p>Punya kendaraan? butuh tambahan<br>uang bensin? berangkat kampus<br>mau ditemenin?</p>
            <h2>DAFTAR DRIVER GUNJEK!</h2>
            <button class="btn_daftar_driver" onclick="window.location.href='daftardriver.html'">Daftar</button>
        </div>
        <img src="{{ asset('Gunjek/static/image/img3.png') }}" alt="daftardriver">
    </div>

    <div class="locations-section">
        <h2>Pilihan lokasi yang tersedia</h2>
        <div class="location-item">
            <img src="{{ asset('Gunjek/static/image/kampusD.png') }}" alt="Kampus D">
            <div class="location-info">
                <h4>KAMPUS D</h4>
                <p>Jl. Mangende Raya Pondok Cina, Depok</p>
            </div>
        </div>
        <div class="location-item">
            <img src="{{ asset('Gunjek/static/image/kampusE.png') }}" alt="Kampus E">
            <div class="location-info">
                <h4>KAMPUS E</h4>
                <p>Jl. Akses Kelapa Dua Kelapa Dua</p>
            </div>
        </div>
        <div class="location-item">
            <img src="{{ asset('Gunjek/static/image/kampusG.png') }}" alt="Kampus G">
            <div class="location-info">
                <h4>KAMPUS G</h4>
                <p>Jl. Akses Kelapa Dua Kelapa Dua</p>
            </div>
        </div>
        <div class="location-item">
            <img src="{{ asset('Gunjek/static/image/kampusH.png') }}" alt="Kampus H">
            <div class="location-info">
                <h4>KAMPUS H</h4>
                <p>Jl. Akses Kelapa Dua Kelapa Dua</p>
                <button class="btn_lainnya" onclick="lokasi.html">Lainnya</button>
            </div>
        </div>
    </div>

    <footer>
        <div class="logofooter">
            <img src="{{ asset('Gunjek/static/image/LOGO.png') }}" alt="logo">
        </div>
        <ul>
            <div class="sosmed">
                <img src="{{ asset('Gunjek/static/image/Instagram Circle.png') }}" alt="instagram">
                <img src="{{ asset('Gunjek/static/image/TwitterX.png') }}" alt="twitter">
            </div>
            <div>
                <h4>Informasi</h4>
                <p>Tentang</p>
            </div>
            <div>
                <h4>Gabung</h4>
                <p>Pengguna</p>
                <p>Driver</p>
            </div>
            <div>
                <h4>Layanan</h4>
                <p>Bantuan</p>
            </div>
        </ul>
        <p>Gunjek 2025</p>
    </footer>
    <script src="{{ asset('Gunjek/static/js/login.js') }}"></script>
</body>

</html>
