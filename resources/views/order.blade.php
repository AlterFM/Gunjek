<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Gunjek/static/css/order.css')}}">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    <title>Order GunJek</title>
</head>
<body>
    <header>
        <div class="Navbar">
            <div class="logo">
                <img src="{{asset('Gunjek/static/image/LOGO.png')}}" alt="logo"> 
            </div>
            <ul class="listoflinks">
                <li><a href="index.html">Beranda</a></li>
                <li><a href="order.html">Order</a></li>
                <li><a href="driver.html">Driver</a></li>
                <li><a href="#lokasi">Lokasi</a></li>
                <li><a href="#bantuan">Bantuan</a></li>
            </ul>
            <div class="profile-container">
                <img src="{{asset('Gunjek/static/image/male-user.png')}}" alt="profil" class="profile-picture">
            </div>
        </div>
    </header>
    <div class="container">
        <div class="left-panel">
            <div class="search flex">
                <input class="search-input" type="search" placeholder="Cari Tujuan dan Penjemputan yang sama">
                <img src="{{asset('Gunjek/static/image/search.png')}}" alt="Search">
            </div>
            <div class="ride">
                <img src="{{asset('Gunjek/static/image/helem.png')}}" alt="Helmet">
                <div class="ride-details">
                    <p>From: Kampus E</p>
                    <p>To: Kampus F8</p>
                    <p>11:50</p>
                    <p>Rp 7000</p>
                    <p>Khusus perempuan</p>
                </div>
            </div>
            <div class="ride">
                <img src="{{asset('Gunjek/static/image/helem.png')}}" alt="Helmet">
                <div class="ride-details">
                    <p>From: Kampus G</p>
                    <p>To: Kampus H</p>
                    <p>12:30</p>
                    <p>Rp 8000</p>
                    <p>Khusus laki-laki</p>
                </div>
            </div>
            <!-- Additional rides -->
        </div>
        <div class="right-panel">
            <form>
                <div class="form-group">
                    <label for="destination">Pilih Tujuan</label>
                    <input type="text" id="destination" placeholder="Tujuan">
                </div>
                <div class="form-group">
                    <label for="pickup">Lokasi Penjemputan</label>
                    <input type="text" id="pickup" placeholder="Penjemputan">
                </div>
                <div class="form-group">
                    <label for="time">Waktu pejemputan</label>
                    <select id="time">
                        <option value="now">Sekarang</option>
                        <option value="reservation">Reservasi</option>
                    </select>
                </div>
                <button type="submit">Order</button>
            </form>
        </div>
    </div>
</body>
</html>
