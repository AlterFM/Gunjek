<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('Gunjek/static/css/lokasi.css') }}" rel="stylesheet">
    <title>Lokasi</title>
</head>
<body>
    <header>
        <div class="Navbar"> 
            @include('menu.navbar')

            @guest
            <div class="btn_masuk" id="btn_masuk">
                <button id="show-login">Masuk</button>
            </div>
            @endguest
        </div>
    </header>

    <div class="locations-section">
        <h2>Pilihan lokasi yang tersedia</h2>
        <div class="locations-container">
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
                </div>
            </div>
            <div class="location-item">
                <img src="{{ asset('Gunjek/static/image/KAMPUSF!.png') }}" alt="Kampus F1">
                <div class="location-info">
                    <h4>KAMPUS F1</h4>
                    <p>Jl. Taman Puspa, Pasir Gn. Sel., Kec. Cimanggis, Kota Depok, Jawa Barat 16451</p>
                </div>
            </div>
            <div class="location-item">
                <img src="{{ asset('Gunjek/static/image/KAMPUSF4.webp') }}" alt="Kampus F4">
                <div class="location-info">
                    <h4>KAMPUS F4</h4>
                    <p>Jl. Akses Kelapa Dua Kelapa Dua</p>
                </div>
            </div>
            <div class="location-item">
                <img src="{{ asset('Gunjek/static/image/KAMPUSF7.png') }}" alt="Kampus F7">
                <div class="location-info">
                    <h4>KAMPUS F7</h4>
                    <p>Jl. Raya Klp. Dua Wetan No.5a 4, RT.4/RW.8, Klp. Dua Wetan, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13740</p>
                </div>
            </div>
            <div class="location-item">
                <img src="{{ asset('Gunjek/static/image/KAMPUSF8.jpg') }}" alt="Kampus F8">
                <div class="location-info">
                    <h4>KAMPUS F8</h4>
                    <p>Tugu, Cimanggis, Depok City, West Java 16451</p>
                </div>
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

</body>
</html>
