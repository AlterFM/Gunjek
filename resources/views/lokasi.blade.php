<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Gunjek/static/css/lokasi.css')}}">
    <title>Lokasi</title>
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
    <div class="locations-section">
        <h2>Daftar Kampus Gunadarma</h2>
        <div class="location-item">
            <img src="{{asset('Gunjek/static/image/kampusD.png')}}" alt="Kampus D">
            <div class="location-info">
                <h4>KAMPUS D</h4>
                <p>Jl. Mangende Raya Pondok Cina, Depok</p>
            </div> 
        </div>
        <div class="location-item">
            <img src="{{asset('Gunjek/static/image/kampusE.png')}}" alt="Kampus E">
            <div class="location-info">
                <h4>KAMPUS E</h4>
                <p>Jl. Akses Kelapa Dua Kelapa Dua</p>
            </div>
        </div>
        <div class="location-item">
            <img src="{{asset('Gunjek/static/image/kampusG.png')}}" alt="Kampus G">
            <div class="location-info">
                <h4>KAMPUS G</h4>
                <p>Jl. Akses Kelapa Dua Kelapa Dua</p>
            </div>
        </div>
        <div class="location-item">
            <img src="{{asset('Gunjek/static/image/kampusH.png')}}" alt="Kampus H">
            <div class="location-info">
                <h4>KAMPUS H</h4>
                <p>Jl. Akses Kelapa Dua Kelapa Dua</p>
            </div>
        </div>
        <div class="location-item">
            <img src="{{asset('Gunjek/static/image/KAMPUSF!.png')}}" alt="Kampus F1">
            <div class="location-info">
                <h4>KAMPUS F1</h4>
                <p>Jl. Taman Puspa, Pasir Gn. Sel., Kec. Cimanggis, Kota Depok, Jawa Barat 16451</p>
            </div>
        </div>
        <div class="location-item">
            <img src="{{asset('Gunjek/static/image/KAMPUSF4.jpg')}}" alt="Kampus F4">
            <div class="location-info">
                <h4>KAMPUS F4</h4>
                <p>Jl. Akses Kelapa Dua Kelapa Dua</p>
            </div>
        </div>
        <div class="location-item">
            <img src="{{asset('Gunjek/static/image/KAMPUSF7.png')}}" alt="Kampus F7">
            <div class="location-info">
                <h4>KAMPUS F7</h4>
                <p>Jl. Raya Klp. Dua Wetan No.5a 4, RT.4/RW.8, Klp. Dua Wetan, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13740</p>
            </div>
        </div>
        <div class="location-item">
            <img src="{{asset('Gunjek/static/image/KAMPUSF8.jpg')}}" alt="Kampus F8">
            <div class="location-info">
                <h4>KAMPUS F8</h4>
                <p>Tugu, Cimanggis, Depok City, West Java 16451</p>
            </div>
        </div>
    </div>

    <footer> 
        <div class="logofooter">
            <img src="{{asset('Gunjek/static/image/LOGO.png')}}" alt="logo">
        </div>
        <ul>
            <div class="sosmed">
                <img src="{{asset('Gunjek/static/image/Instagram Circle.png')}}" alt="instagram">
                <img src="{{asset('Gunjek/static/image/TwitterX.png')}}" alt="twitter">
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
        <p>Gunadarma Ojek {{ date('Y') }}</p>
    </footer>

</body>
</html>